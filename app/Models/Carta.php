<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carta extends Model
{
    protected $fillable = [
        'titulo_portada',
        'subtitulo_portada',
        'fecha_inicio',
        'saludo_carta',
        'contenido_carta',
        'firma_carta',
        'cancion_titulo',
        'cancion_archivo',
    ];
}