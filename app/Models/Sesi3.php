<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sesi3 extends Model
{
    use HasFactory;
    protected $table= 'sesi3s';
    protected $primaryKey = 'id';
    protected $fillable = ['id_team', 'poin', 'date'];

    public function team(){
        return $this->belongsTo(Team::class);
    }
}
