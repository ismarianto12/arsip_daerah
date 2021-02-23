<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tmmenu_app extends Model
{
    use HasFactory;
    use HasFactory;
    protected         $table = 'tmmenu_app';
    public     $incrementing = false;
    protected       $guarded = [];

    public function tmlevelakses()
    {
        return $this->belongsTo(Tmlevelakses::class);
    }
}
