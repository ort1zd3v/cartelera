<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class BlogController extends Controller
{
    public function index()
    {
        $cards = Card::all();

        // Pasar los datos a la vista
        return view('index', compact('cards'));
    }

    public function posts()
    {
        return view('posts');
    }

    public function contact()
    {
        return view('contact');
    }

    public function blog()
    {
        $cards = Card::all();

        // Pasar los datos a la vista
        return view('blog', compact('cards'));
    }

    public function about()
    {
        return view('about');
    }

    public function login()
    {
        return view('enter-blog');
    }

    public function store(Request $request)
    {
        // Validar los datos
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Subir imagen
        $imagePath = $request->file('image')->store('courses', 'public');

        // Crear un nuevo curso
        Card::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'image' => $imagePath,
        ]);

        return redirect()->route('home')->with('success', 'Curso agregado con éxito');
    }

}

