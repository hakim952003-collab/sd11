<?php

namespace App\Http\Controllers\Admin;

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
        return view('admin.kontak.index', ['data_kontak' => $data_kontak]);
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
    public function show(Kontak $kontak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kontak = Kontak::find($id);
        return view('admin.kontak.edit', ['kontak' => $kontak]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kontak = Kontak::find($id);
        $kontak->alamat = request('alamat');
        $kontak->email = request('email');
        $kontak->phone = request('phone');
        $kontak->maps = request('maps');
        $kontak->save();
        return redirect('admin/kontak')->with('sukses', 'Kontak Berhasil diedit');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kontak $kontak)
    {
        //
    }
}
