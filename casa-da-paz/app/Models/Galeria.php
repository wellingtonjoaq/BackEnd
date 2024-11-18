<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'imagem', 'data', 'imagens_extras'];

    protected $casts = [
        'imagens_extras' => 'array',
    ];
}
