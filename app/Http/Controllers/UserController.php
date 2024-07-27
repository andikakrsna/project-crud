<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::all();
        return view('admin.User',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create-USer');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
            'nama'=>$request->nama,
            'email'=>$request->email,
            'password'=>$request->password
        ]);
        return redirect()->route('User.index');
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
        $data = User::findOrfail($id);
        return view('admin.edit-User',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Produk = User::findOrFail($id);
        $Produk->update([
            'nama'=>$request->nama,
            'email'=>$request->email,
            'password'=>$request->password
        ]);
        return redirect()->route('User.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Produk = User::findOrFail($id);
        $Produk->delete();
        return redirect()->route('User.index');
    }
}
