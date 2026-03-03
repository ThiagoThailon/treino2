<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
      
       return Inertia::render('Posts');  
       
    }

    public function store (Request $request)
    {
        
        $request->validate([
            'titulo' => 'required|max:100',
            'comentario' => 'required',
        ]);

        Auth::user()->posts()->create([
            'titulo' => $request ->titulo,
            'comentario' => $request ->comentario
        ]);

        

        return redirect()->route('posts.index');
    }
}
