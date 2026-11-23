<?php

namespace App\Http\Controllers;

use App\Models\Carta;
use App\Models\Recuerdo;
use Illuminate\Http\Request;

class AniversarioController extends Controller
{
    public function index()
    {
        $carta = Carta::first();
        $recuerdos = Recuerdo::orderBy('fecha_recuerdo', 'asc')->get();

        return view('aniversario', compact('carta', 'recuerdos'));
    }

    public function storeRecuerdo(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:120',
            'descripcion' => 'nullable|string|max:500',
            'fecha_recuerdo' => 'nullable|date',
            'imagen' => 'required|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        $rutaImagen = $request->file('imagen')->store('recuerdos', 'public');

        Recuerdo::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'fecha_recuerdo' => $request->fecha_recuerdo,
            'imagen' => $rutaImagen,
        ]);

        return redirect()->back()->with('success', '¡Nuevo recuerdo guardado en nuestra galería!');
    }

    public function updateCarta(Request $request)
    {
        $carta = Carta::first();
        $carta->update($request->only([
            'titulo_portada',
            'subtitulo_portada',
            'fecha_inicio',
            'saludo_carta',
            'contenido_carta',
            'firma_carta',
            'cancion_titulo',
        ]));

        return redirect()->back()->with('success', '¡Carta actualizada con amor!');
    }
}