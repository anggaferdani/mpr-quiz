<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    use HasFactory;

    protected $table = 'wilayahs';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public function pertanyaanSesi3s(){
        return $this->hasMany(PertanyaanSesi3::class);
    }
}
