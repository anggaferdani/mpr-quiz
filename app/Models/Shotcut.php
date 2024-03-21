<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shotcut extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'shotcuts';
    protected $guarded = [];
}
