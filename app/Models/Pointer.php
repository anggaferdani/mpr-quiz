<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pointer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pernyataan(){
        return $this->belongsTo(Pernyataan::class);
    }
}
