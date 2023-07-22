<?php

namespace App\Models;

use App\Models\Team;
use App\Models\FrsUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeamMember extends Model
{
    use HasFactory;
    protected $fillable = ['team_id', 'user_id', 'referral'];
    protected $table = 'team_members';

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }

    public function user()
    {
        return $this->belongsTo(FrsUser::class, 'user_id');
    }


}
