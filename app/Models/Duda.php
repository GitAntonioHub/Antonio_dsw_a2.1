<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duda extends Model
{
    use HasFactory;

    protected $fillable = [
        'correo',
        'modulo',
        'asunto',
        'descripcion',
    ];
}