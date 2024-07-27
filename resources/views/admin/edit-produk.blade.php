@extends('layout.template')
@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Produk</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Product</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="d-flex justify-content-between align-items-center">
                <h3 class="card-title">edit Data Product</h3>
              </div>
            </div>
            <form action="{{route('produk.update',$data->id)}}" method="post">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="nama_produk">Nama Produk</label>
                  <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Nama Produk" value="{{ $data->nama_produk }}">
                </div>
                <div class="form-group">
                  <label for="stok_produk">Stok Produk</label>
                  <input type="number" class="form-control" id="stok_produk" name="stok_produk" placeholder="Stok Produk" 
                  value="{{ $data->stok_produk }}">
                  
                </div>
              </div>

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div> 
        </div>
      </div>
    </div>
  </section>
@endsection