@extends('layout.template')
@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">inventory</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">inventory</li>
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
                <h3 class="card-title">edit Data inventory</h3>
              </div>
            </div>
            <form action="{{route('inventory.update',$data->id)}}" method="post">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="id_produk">id Produk</label>
                  <input type="text" class="form-control" id="id_produk" name="id_produk" placeholder="Id Produk" value="{{ $data->nama_produk }}">
                </div>
                <div class="form-group">
                  <label for="id_ruangan">id ruangan</label>
                  <input type="number" class="form-control" id="id_ruangan" name="id_ruangan" placeholder="Id ruangan" 
                  value="{{ $data->id_inventory }}">
                  
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