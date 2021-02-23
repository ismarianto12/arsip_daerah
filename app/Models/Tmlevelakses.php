<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tmlevelakses extends Model
{
    use HasFactory;
    protected         $table = 'tmlevelakses';
    public     $incrementing = false;
    protected       $guarded = [];
}
