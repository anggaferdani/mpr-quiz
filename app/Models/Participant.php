<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;
    protected $table= 'participants';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_pertanyaan', 'id_team', 'poin', 'tanggal'
    ];

    public function pertanyaan(){
        return $this->belongsTo(Pertanyaan::class, 'id_pertanyaan');
    }

    public function team(){
        return $this->belongsTo(Team::class, 'id_team');
    }
}
