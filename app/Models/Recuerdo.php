<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recuerdo extends Model
{
    protected $fillable = ['titulo', 'descripcion', 'fecha_recuerdo', 'imagen'];
}