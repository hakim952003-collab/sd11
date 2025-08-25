<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Guru;
use App\Models\Fitur;
use App\Models\Kontak;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $data_guru = Guru::all();
        $data_kontak = Kontak::latest()->get();
        
        $data_berita = Berita::latest()->get();
        $data_fitur = Fitur::all(); // Ambil data dari tabel lain
        return view('front.beranda', [
            'data_berita' => $data_berita,
            'data_guru' => $data_guru,
            'data_fitur' => $data_fitur,
            'data_kontak' => $data_kontak
        ]);
    }
}
