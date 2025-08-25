<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tentang;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_tentang = Tentang::latest()->get();
        return view('admin.tentang.index', ['data_tentang' => $data_tentang]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tentang $tentang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tentang = Tentang::find($id);
        return view('admin.tentang.edit', ['tentang' => $tentang]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tentang = Tentang::find($id);
        $tentang->judul = request('judul');
        $tentang->deskripsi = request('deskripsi');
        $tentang->visi = request('visi');
        $tentang->misi = request('misi');
        $tentang->sejarah = request('sejarah');
        $tentang->save();
        return redirect('admin/tentang')->with('sukses', 'Tentang Kami Berhasil diedit');
    }

    /**
     * Remove the specified resource in storage.
     */
    public function destroy(Tentang $tentang)
    {
        //
    }
}
