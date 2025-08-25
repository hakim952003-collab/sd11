<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_guru = Guru::latest()->get();
        return view('admin.guru.index', ['data_guru' => $data_guru]);
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
        $guru = new Guru;
        $guru->nama = request('nama');
        $guru->jabatan = request('jabatan');
        $guru->foto = request('foto');
        $guru->save();
        return redirect('/admin/guru')->with('sukses', 'Guru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $guru = Guru::find($id);
        return view('admin.guru.edit', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $berita = Guru::find($id);
        $berita->nama = request('nama');
        $berita->jabatan = request('jabatan');
        $berita->foto = request('foto');
        $berita->save();
        return redirect('admin/guru')->with('sukses', 'Guru Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $guru = Guru::find($id);
        $guru->delete();
        return redirect()->route('guru.index')->with('sukses', 'Data berhasil dihapus.');
    }
}
