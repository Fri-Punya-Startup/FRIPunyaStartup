<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function members()
    {
        return $this->hasMany(User::class);
    }

    public function leader()
    {
        return $this->hasOne(User::class);
    }

    public function startup()
    {
        return $this->hasOne(Startup::class);
    }
}
