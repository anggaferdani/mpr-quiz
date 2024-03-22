<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemaPertanyaan extends Model
{
    use HasFactory;
    protected $table= 'tema_pertanyaans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'tema', 'sesi'
    ];

    public function pertanyaan(){
        return $this->hasMany(Pertanyaan::class, 'id_tema');
    }
}
