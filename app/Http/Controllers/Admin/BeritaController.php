<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_berita = Berita::latest()->get();
        return view('admin.berita.index', ['data_berita' => $data_berita]);
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
        $berita = new Berita;
        $berita->nama = request('nama');
        $berita->deskripsi = request('deskripsi');
        $berita->foto = request ('foto');
        $berita->save();
        return redirect('/admin/berita')->with('sukses', 'Berita Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('admin.berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update (Request $request, $id)
    {
        $berita = Berita::find($id);
        $berita->nama = request('nama');
        $berita->deskripsi = request('deskripsi');
        $berita->foto = request('foto');
        $berita->save();
        return redirect('admin/berita')->with('sukses', 'Berita Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $berita = Berita::find($id);
   
            $berita->delete();
            return redirect()->route('berita.index')->with('sukses', 'Data berhasil dihapus.');
    }
}
