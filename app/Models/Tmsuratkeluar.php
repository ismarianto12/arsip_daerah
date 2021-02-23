<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tmsuratkeluar extends Model
{
    use HasFactory;
    public    $incrementing = false;
    protected $guarded = [];
    protected $table = 'tmsuratkeluar';
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
