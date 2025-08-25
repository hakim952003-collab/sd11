<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fitur;
use Illuminate\Http\Request;

class FiturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_fitur = Fitur::latest()->get();
        return view('admin.fitur.index', ['data_fitur' => $data_fitur]);
        
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
        $fitur = new Fitur;
        $fitur->nama = request('nama');
        $fitur->deskripsi = request('deskripsi');
        $fitur->icon = request('icon') ?? 'fa fa-star';
        $fitur->save();
        return redirect('/admin/fitur')->with('sukses', 'Fitur Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fitur $fitur)
    {
        return view('admin.fitur.show', compact('fitur'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fitur $fitur)
    {
        return view('admin.fitur.edit', compact('fitur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fitur $fitur)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'icon' => 'required|string|max:100'
        ]);

        $fitur->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'icon' => $request->icon
        ]);

        return redirect()->route('fitur.index')->with('sukses', 'Fitur berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $fitur = Fitur::find($id);
   
            $fitur->delete();
            return redirect()->route('fitur.index')->with('sukses', 'Data berhasil dihapus.');
    }
}
