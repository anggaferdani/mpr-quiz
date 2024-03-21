<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table= 'teams';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name'
    ];

    public function participant(){
        return $this->hasMany(Participant::class, 'id_team');
    }

    public function sesi3(){
        return $this->hasMany(Sesi3::class, 'id_team');
    }
}
