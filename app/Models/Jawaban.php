<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use HasFactory;
    protected $table= 'jawabans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_pertanyaan', 'jawaban'
    ];
    
    public function pertanyaan(){
        return $this->belongsTo(Pertanyaan::class, 'id_pertanyaan');
    }
}
