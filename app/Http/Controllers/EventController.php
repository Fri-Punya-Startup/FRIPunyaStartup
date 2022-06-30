<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Schema;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Event $event)
    {
        return view('admin.index', [
            'events' => $event->latest()->paginate(5)->withQueryString(),
        ]);
    }

    public function indexPublic(Event $event)
    {
        return view('event', [
            'events' => $event->latest()->paginate(5)->withQueryString(),
        ]);
    }

    public function showRegistrationForm(Event $event)
    {
        return view('register-event', [
            'event' => $event,
        ]);

        return $event;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event-create');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Event $event)
    {
        $validate = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tanggal' => 'required',
            'waktu' => 'required',
            'khusus' => 'required',
            'grup_wa' => 'required',
        ]);

        $validate['key'] = mt_rand(0000, 9999);

        $validate['slug'] =   $event->slug = \Str::slug($request['title']);

        // jika slug sama dengan yang lama, maka tidak diupdate
        while($event->where('slug', $event->slug)->exists()) {
            $validate['slug'] = $validate['slug'].'-'.str(rand(1,10));
            if (!$event->where('slug', $validate['slug'])->exists()) {
                break;
            }
        }

        $validate['poster'] = $request->file('poster')->store('event-images');

        Schema::create($event->slug, function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('event_id');
            $table->string('name');
            $table->string('email');
            $table->string('jurusan');
            $table->string('kampus');
        });

        $event->create($validate);

        return redirect('/admin')->with('success', 'Event berhasil ditambahkan');    
    }

    public function peopleRegisterEvent(Request $request){
        $validate = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'jurusan' => 'required',
            'kampus' => 'required',
            'no-wa' => 'required',
        ]);
    
        $event = Event::where('id', $request->id)->first();

        DB::table($event->slug)->insert([
            'event_id' => $request->id,
            'name' => $validate['nama'],
            'email' => $validate['email'],
            'jurusan' => $validate['jurusan'],
            'kampus' => $validate['kampus'],
        ]);

        Http::post('http://localhost:5000/wa/notif/', [
            'nama' => $validate['nama'],
            'phone' => $validate['no-wa'],
            'key' => $event->key,
            'grup' => $event->grup_wa,
        ])->json();

        return redirect('/')->with('success', 'Berhasil mendaftar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        $event = $event->where('slug', request()->slug)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
