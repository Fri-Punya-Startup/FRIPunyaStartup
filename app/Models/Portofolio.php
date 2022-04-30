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

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}


