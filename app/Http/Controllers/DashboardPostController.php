<?php

namespace App\Http\Controllers;

use App\Models\{Portofolio, Post, Type};
// use Clockwork\Storage\Storage;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('dashboard.posts', [
            'post' => Portofolio::where('user_id', auth()->id())->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.post-create',[
            'types' => Type::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $request->file('image')->store('product-images');


        if($request['web']){
            $validate = $request->validate([
                'web' => 'required|url',
                'product' => 'required|string|max:255',
                'slug' => 'required|unique:portofolios',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'description' => 'required|string|max:255',
                'type_id' => 'required',
                'contact' => 'required',
            ]);
        }else{
            $validate = $request->validate([
                'product' => 'required|string|max:255',
                'slug' => 'required|unique:portofolios',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'description' => 'required|string|max:255',
                'type_id' => 'required',
                'contact' => 'required',
            ]);

            $validate['web'] = "";
        }

        if($request->file("image")){
            $validate['image'] = $request->file("image")->store("product-images");
        }else{
            $validate['image'] = "product-images/default.svg";
        }

        $validate['user_id'] = auth()->id();

        Portofolio::create($validate);

        return redirect('/dashboard/posts')->with('success', 'Portofolio created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portofolio  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Portofolio $post)
    {
        // return $post;
        return view('dashboard.show', [
            'post' => $post,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portofolio  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Portofolio $post)
    {
        return view('dashboard.edit-create', [
            'post' => $post,
            'types' => Type::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portofolio  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portofolio $post)
    {
        $rules = [
            'product' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'type_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'web' => 'required|url',
            'contact' => 'required',
        ];

        if($request->slug != $post->slug){
            $rules['slug'] = 'required|unique:portofolios';
        }

        $validate = $request->validate($rules);

        if($request->file("image")){
            
            if($request->oldImage != "storage/product-images/default.svg"){
                Storage::delete($request->oldImage);
            }

            $validate['image'] = $request->file("image")->store("product-images");
        }

        $validate['user_id'] = auth()->id();


        Portofolio::where('id', $post->id)->update($validate);

        return redirect('/dashboard/posts')->with('success', 'Portofolio updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portofolio  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portofolio $post)
    {
        if($post->image){
            Storage::delete($post->image);
            // unlink(storage_path('app/public/'.$post->image));
        }

        Portofolio::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'Portofolio deleted successfully');
    }

    public function checkSlug(Request $request) {

        $slug = SlugService::createSlug(Portofolio::class, 'slug', $request->product); 
        return response()->json(['slug' => $slug]);
    }
}
