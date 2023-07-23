<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrsUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'avatar',
        'email',
        'email_verified_at',
        'password',
        'role_id',
        'verifikasi',
        'phone',
    ];

    protected $table = 'frsusers';


    protected $attributes = [
        'avatar' => 'default_avatar.png',
    ];

    // Relasi dengan model Role
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
        return $this->belongsToMany(Team::class, 'team_members', 'user_id', 'team_id')
            ->withPivot('referral')
            ->withTimestamps();
    }
}
