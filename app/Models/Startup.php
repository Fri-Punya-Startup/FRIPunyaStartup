<?php

namespace App\Models;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Startup extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'owners_id',
        'startup_name',
        'description',
    ];
    protected $primaryKey = 'id';
    protected $table = 'startups';

    protected $guarded = ['id'];

    protected $attributes = [
        'category' => 'Teknologi',
        'image' => 'default_avatar.png',
    ];



    public function owner()
    {
        return $this->belongsTo(User::class, 'owners_id', 'id', 'owner');
    }

    public function team()
    {
        return $this->hasOne(Team::class, 'startup_id');
    }

}
