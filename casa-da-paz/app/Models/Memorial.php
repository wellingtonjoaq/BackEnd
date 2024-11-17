<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memorial extends Model
{
    use HasFactory;

    protected $table = 'memorial';

    protected $fillable = ['nome', 'imagem', 'informacao', 'tipo'];
}
