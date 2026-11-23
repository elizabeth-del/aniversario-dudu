<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Carta;

class AniversarioSeeder extends Seeder
{
    public function run(): void
    {
        Carta::create([
            'titulo_portada' => '365 Días Contigo',
            'subtitulo_portada' => 'Nuestro primer año de aventuras, risas y amor',
            'fecha_inicio' => '2025-11-23', // Fecha oficial de su aniversario
            'saludo_carta' => 'Para el amor de mi vida,',
            'contenido_carta' => "Parece increíble que ya haya pasado un año desde que empezó nuestra historia.\n\nCada día a tu lado se ha convertido en mi recuerdo favorito. Gracias por tu paciencia, por tus abrazos en los días difíciles y por hacerme reír como nadie más sabe hacerlo.\n\nEsta pequeña página es un pedacito de todo lo que siento por ti, para que siempre tengas presente cuánto te amo y lo feliz que me hace caminar contigo.",
            'firma_carta' => 'Con todo mi amor, tuya por siempre.',
            'cancion_titulo' => 'Nuestra Canción Especial',
            'cancion_archivo' => 'musica/nuestra-cancion.mp3',
        ]);
    }
}