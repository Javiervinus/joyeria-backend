<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;
    protected $table = "horario";

    protected $fillable = [
        "apertura", "cierre", "dia"
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'apertura' => 'datetime',
        'cierre' => 'datetime'

    ];
}
