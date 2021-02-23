<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trjenisarsip extends Model
{
    use HasFactory;
    protected         $table = 'trjenisarsip';
    public     $incrementing = false;
    protected       $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}