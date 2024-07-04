<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard1Controller extends Controller
{
    public function index()
    {
        $UangMasuk = Category::count();

        // Tambahkan query sum disini, pakai query builder punya laravel
        $uang_masuk = DB::table('keuangan')
                ->select('department', DB::raw('SUM(price) as total_sales'))
                ->get();
        $posts = Post::count();
        
        return view('dashboard.index', compact('UangMasuk'));
    }
}

