<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'product', 
    //     'type', 
    //     'founder', 
    //     'description', 
    //     'web', 
    //     'contact',
    // ];

    protected $guarded = [
        'id',
    ];

    public function scopeFilter($query, array $filters) {
        // if(request('search')){
        //     return $query = Portofolio::with(['type','user'])->where('product', 'like', '%'.request('search').'%')
        //     ->orWhere('description', 'like', '%'.request('search').'%');
        // }

        // if (isset($filters['search'])  ? $filters['search'] : false) {
        //     $query->where('product', 'like', '%'.$filters['search'].'%')
        //         ->orWhere('description', 'like', '%'.$filters['search'].'%');
        // }

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('product', 'like', '%'.$search.'%')
                ->orWhere('description', 'like', '%'.$search.'%');
        });

        $query->when($filters['type'] ?? false, function($query, $type){
            return $query->whereHas('type', function($query) use ($type) {
                $query->where('name', $type);
            });
        });

        $query->when($filters['founder'] ?? false, function($query, $user){
            return $query->whereHas('user', function($query) use ($user) {
                $query->where('name', 'like', '%'.$user.'%');
            });
        });

    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}


