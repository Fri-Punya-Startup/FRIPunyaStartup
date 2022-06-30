<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model{

    // protected $fillable = [];

    // public $timestamps = false;

    protected $guarded = [
        'id',
    ];

    public function user(){
        return $this->hasMany(User::class);
    }
}