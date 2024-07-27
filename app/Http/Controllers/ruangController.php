<?php

namespace App\Http\Controllers;

use App\Models\ruang;
use Illuminate\Http\Request;

class ruangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ruang::all();
        return view('admin.ruangan',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create-ruangan');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ruang::create([
            'nama_ruangan'=>$request->nama_ruangan,
            'alamat_ruangan'=>$request->alamat_ruangan,
        ]);
        return redirect()->route('ruangan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = ruang::findOrfail($id);
        return view('admin.edit-ruangan',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Produk = ruang::findOrFail($id);
        $Produk->update([
            'nama_ruangan'=>$request->nama_ruangan,
            'alamat_ruangan'=>$request->alamat_ruangan,
        ]);
        return redirect()->route('ruangan.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Produk = ruang::findOrFail($id);
        $Produk->delete();
        return redirect()->route('ruangan.index');
    }
}
