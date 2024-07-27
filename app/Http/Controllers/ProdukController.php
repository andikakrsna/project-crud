<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::all();
        return view('admin.pages.masterdata.product.index',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = null;
        return view('admin.pages.masterdata.product.form', [
            'data' => $data
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        return $request->all();
        DB::beginTransaction();
        try {

            if($request->id == null){
                $formdata = [
                    'name' => $request->name,
                    'category' => $request->category,
                    'unit' => $request->unit,
                ];
                Product::create($formdata);
            }else{
                $formdata = [
                    'name' => $request->name,
                    'category' => $request->category,
                    'unit' => $request->unit,
                ];
                Product::whereId($request->id)->update($formdata);
            }
            
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }

        Product::create([
            'nama_produk'=>$request->nama_produk,
            'stok_produk'=>$request->stok_produk,
        ]);
        return redirect()->route('produk.index');
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
        $data = Product::find($id);
        return view('admin.pages.masterdata.product.form', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Produk = Product::findOrFail($id);
        $Produk->update([
            'nama_produk'=>$request->nama_produk,
            'stok_produk'=>$request->stok_produk,
        ]);
        return redirect()->route('produk.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Produk = Product::findOrFail($id);
        $Produk->delete();
        return redirect()->route('produk.index');
    }
}
