<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tmdisposisi extends Model
{
    use HasFactory;
    protected $tale = 'tmdisposisi';
    protected $guarded = [];
    protected $datetime = false;
    public $incrementing = false;



    function User()
    {
        return $this->belongsTo(User::class);
    }
}
