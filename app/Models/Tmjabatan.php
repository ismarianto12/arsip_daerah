<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tmjabatan extends Model
{
    use HasFactory;
    protected $table = 'tmjabatan';
    public     $incrementing = false;
    protected       $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
