<?php

namespace App\Http\Controllers;

use App\Models\ruang;
use App\Models\Produk;
use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Inventory::all();
        return view('admin.Inventory',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk =  Produk::all();
        // $produk = produk::all(); ini ruang
        $ruang =  ruang::all();
        return view('admin.create-Inventory',compact('produk','ruang'));
        

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Inventory::create([
            'id_product'=>$request->id_produk,
            'id_ruangan'=>$request->id_ruangan,
        ]);
        return redirect()->route('inventory.index');
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
        $data = Inventory::findOrfail($id);
        return view('admin.edit-inventory',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Produk = Inventory::findOrFail($id);
        $Produk->update([
            'id_produk'=>$request->id_produk,
            'id_ruangan'=>$request->id_ruangan,
        ]);
        return redirect()->route('inventory.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Produk = Inventory::findOrFail($id);
        $Produk->delete();
        return redirect()->route('inventory.index');
    }
}
