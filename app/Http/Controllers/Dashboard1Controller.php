<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard1Controller extends Controller
{
    public function index()
    {
        $UangMasuk = Category::count();
        $posts = Post::count();
        
        return view('dashboard.index', compact('UangMasuk'));
    }
}
