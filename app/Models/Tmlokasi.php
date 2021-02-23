<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tmlokasi extends Model
{
    use HasFactory;
    public    $incrementing = false;
    protected $guarded = [];
    protected $table = 'tmlokasi';
    protected $datetime = false;

    function User()
    {
        return $this->belongsTo(User::class);
    }
}
