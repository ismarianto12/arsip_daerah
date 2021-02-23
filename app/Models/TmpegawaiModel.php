<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TmpegawaiModel extends Model
{
    use HasFactory;

    protected $table = 'tmpegawai';
    protected $guarded = [];
    public $incrementing = false;
    protected $datetime = false;


    public function user()
    {
        # code...
        return $this->belongsTo(User::class);
    }
    public function Tmjabatan()
    {
        return $this->belongsTo(Tmjabatan::class);
    }
}
