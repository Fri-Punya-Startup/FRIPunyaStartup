<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;
    protected $fillable = [
        'startup_id',
        'judul',
        'keterangan',
        'dokumen',
        'status',
        'slug',
    ];

    protected $table = 'proposals';
    public function startup()
    {
        return $this->belongsTo(Startup::class);
    }

}
