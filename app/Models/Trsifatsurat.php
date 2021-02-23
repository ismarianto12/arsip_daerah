<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trsifatsurat extends Model
{
    use HasFactory;
    protected $table = 'trsifatsurat';
    public $incrementing = false;
    protected $guarded  = [];
    protected $datetime = false;


    function user()
    {
        return $this->belongsTo(User::class);
    }
}
