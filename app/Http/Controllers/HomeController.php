<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function beranda()
    {
        return view('home.beranda');
    }

    public function visiMisi()
    {
        return view('home.visi-misi');
    }
    
    public function strukturOrganisasi()
    {
        return view('home.struktur-organisasi');
    }

    public function skemaSertifikasi()
    {
        return view('home.skema-sertifikasi');
    }

    public function tuk()
    {
        return view('home.tuk');
    }

    public function kontak()
    {
        return view('home.kontak');
    }
}