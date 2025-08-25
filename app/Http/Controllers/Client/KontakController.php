<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_kontak = Kontak::latest()->get();
        
        return view('front.kontak', [
            'data_kontak' => $data_kontak
        ]);
    }
}
