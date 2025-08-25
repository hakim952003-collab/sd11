<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Tentang;
use App\Models\Fitur;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    /**
     * Display the about us page.
     */
    public function index()
    {
        $tentang = Tentang::first();
        $fitur = Fitur::latest()->get();
        return view('front.tentang', [
            'tentang' => $tentang,
            'fitur' => $fitur
        ]);
    }
}
