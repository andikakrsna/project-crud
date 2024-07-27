@extends('layout.template')
@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Inventory</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Inventory</li>
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
                <h3 class="card-title">Add Data Inventory</h3>
              </div>
            </div>
            <form action="{{route('inventory.store')}}" method="post">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="id_produk">id produk</label>
                  <select name="id_produk" id="id_produk" class="custom-select form-control-border">

                    @forelse ($produk as $item )
                    <option value="{{ $item->id }}">{{ $item->nama_produk }}</option>
                        
                    @empty
                        
                    @endforelse
                    
                  </select>
                </div>
                <div class="form-group">
                  <label for="id_ruangan">id ruangan</label>
                  <select name="id_ruangan" id="id_ruangan" class="custom-select form-control-border">

                    @forelse ($ruang as $item )
                    <option value="{{ $item->id }}">{{ $item->nama_ruangan}}</option>
                        
                    @empty
                        
                    @endforelse
                    
                  </select>
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