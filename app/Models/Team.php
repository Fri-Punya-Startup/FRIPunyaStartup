<?php

namespace App\Models;

use App\Models\FrsUser;
use App\Models\Startup;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    


    use HasFactory;

    protected $fillable = [
        'id',
        'name_team',
        'startup_id',
    ];

    protected $guarded = ['id'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function startup()
    {
        return $this->belongsTo(Startup::class, 'startup_id');
    }

    public function members()
    {
        return $this->belongsToMany(FrsUser::class, 'team_members', 'team_id', 'user_id')
            ->withPivot('referral')
            ->withTimestamps();
    }
}
