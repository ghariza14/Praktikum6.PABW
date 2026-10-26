<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        // Akan memanggil file resources/views/laporan/index.blade.php
        return view('laporan.index'); 
    }

    public function create()
    {
        // Akan memanggil file resources/views/laporan/create.blade.php
        return view('laporan.create'); 
    }

    public function store(Request $request)
    {
        // Tempat logika simpan data
    }
}