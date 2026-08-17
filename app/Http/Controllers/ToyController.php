<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toy;
use App\Mail\ToyDetailMail;
use Illuminate\Support\Facades\Mail;

class ToyController extends Controller
{
    // Vista 1: Formulario inicial
    public function showForm()
    {
        return view('toys.form');
    }

    // Guardar datos en sesión y redirigir
    public function saveUser(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:100',
            'correo' => 'required|email',
            'genero' => 'required|in:nino,nina',
        ]);

        session([
            'user_name'   => $validated['nombre'],
            'user_email'  => $validated['correo'],
            'user_gender' => $validated['genero'],
        ]);

        return redirect()->route('toys.catalog');
    }

    // Vista 2: Catálogo filtrado por género
    public function catalog()
    {
        if (!session()->has('user_name')) {
            return redirect()->route('toys.form');
        }

        $gender = session('user_gender');
        $nombre = session('user_name');
        $toys   = Toy::where('genero', $gender)->get();

        return view('toys.catalog', compact('toys', 'nombre'));
    }

    // Acción: Enviar correo con la info del juguete seleccionado
    public function sendToyEmail(Toy $toy)
    {
        $email = session('user_email');
        $name  = session('user_name');

        if (!$email) {
            return redirect()->route('toys.form');
        }

        Mail::to($email)->send(new ToyDetailMail($toy, $name));

        return back()->with('success', "Se envió la información de {$toy->nombre} a {$email}.");
    }
}
