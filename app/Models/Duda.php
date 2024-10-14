<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duda extends Model
{
    use HasFactory;

    // Define los campos que son asignables en masa
    protected $fillable = [
        'correo',
        'modulo',
        'asunto',
        'descripcion',
    ];
}
