<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PertanyaanSesi3 extends Model
{
    use HasFactory;

    protected $table = 'pertanyaan_sesi3s';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public function wilayah(){
        return $this->belongsTo(Wilayah::class, 'wilayah_id');
    }
}
