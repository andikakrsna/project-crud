@extends('layout.template')
@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">product</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">product</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-6">
          <div class="card">
            <div class="card-header">
              <div class="d-flex justify-content-between align-items-center">
                <h3 class="card-title">Add Data product</h3>
              </div>
            </div>
            <form action="{{$data == null ? route('product.store') :route('product.update', $data->id)}}" method="post">

              @csrf

              @if ($data != null)
                 @method('PUT') 
              @endif

              <input type="hidden" name="id" value="{{ $data->id ?? null }}">
                
              <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="nama_product">Nama product</label>
                            <input type="text" class="form-control" value="{{ $data->name ?? '' }}" id="name" name="name" placeholder="Nama product">
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="nama_product">Category product</label>
                            <input type="text" class="form-control" value="{{ $data->category ?? '' }}" id="name" name="category" placeholder="Nama product">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="nama_product">Unit product</label>
                            <input type="text" class="form-control" value="{{ $data->unit ?? '' }}" id="name" name="unit" placeholder="Nama product">
                          </div>
                    </div>
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