<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Fitur;
use Illuminate\Http\Request;

class FiturController extends Controller
{
    /**
     * Display the facilities page.
     */
    public function index()
    {
        $fitur = Fitur::latest()->get();
        return view('front.fitur', ['fitur' => $fitur]);
    }
}
