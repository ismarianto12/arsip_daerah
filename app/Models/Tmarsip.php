<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Tmarsip extends Model
{
    use HasFactory;
    protected $table = 'tmarsip';
    protected $guarded = [];
    public $datetime = false;
    public $incrementing = false;

    function Trjenisarsip()
    {
        return $this->belongsTo(Trjenisarsip::class);
    }

    public function Tmpegawai()
    {
        return $this->belongsTo(TmpegawaiModel::class);
    }

    public function Tmasatuan()
    {
        return $this->belongsTo(Tmsatuan::class);
    }
    function Tmlokasiarsip()
    {
        return $this->belongsTo(Tmlokasiarsip::class);
    }
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
