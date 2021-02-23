<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tmsuratmasuk extends Model
{
    use HasFactory;
    public    $incrementing = false;
    protected $guarded = [];
    protected $table = 'tmsuratmasuk';
    protected $datetime = false;

    function Trsifatsurat()
    {
        return $this->belongsTo(Trsifatsurat::class);
    }

    function User()
    {
        return $this->belongsTo(User::class);
    }
}
