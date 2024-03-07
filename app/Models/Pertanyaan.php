<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;
    protected $table= 'pertanyaans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_tema', 'pertanyaan'
    ];

    public function tema(){
        return $this->belongsTo(TemaPertanyaan::class, 'id_tema');
    }

    public function pertanyaan(){
        return $this->hasMany(Jawaban::class, 'id_pertanyaan');
    }
}
