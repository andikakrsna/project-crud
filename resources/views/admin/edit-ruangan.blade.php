@extends('layout.template')
@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">ruangan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">ruangan</li>
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
                <h3 class="card-title">edit Data ruangan</h3>
              </div>
            </div>
            <form action="{{route('ruangan.update',$data->id)}}" method="post">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="nama_ruangan">Nama ruangan</label>
                  <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan" placeholder="Nama Ruangan" value="{{ $data->nama_ruangan }}">
                </div>
                <div class="form-group">
                  <label for="alamat_ruangan">alamat ruangan</label>
                  <input type="text" class="form-control" id="alamat_ruangan" name="alamat_ruangan" placeholder="Alamat Ruangan" 
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