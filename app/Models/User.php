<?php

namespace App\Models;

use App\Models\Role;
use App\Models\Team;
use App\Models\Startup;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [
        'id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $attributes = [
        'avatar' => 'default_avatar.png',
    ];

    public function portofolio()
    {
        return $this->hasMany(Portofolio::class);
    }

    public function jabatan(){
        return $this->belongsTo(Jabatan::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function startup()
    {
        return $this->hasOne(Startup::class, 'owners_id');
    }

    public function team()
    {
        return $this->belongsToMany(Team::class, 'teams_members', 'user_id', 'team_id')
            ->withPivot('refferal')
            ->withTimestamps();
    }
}
