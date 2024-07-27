@extends('layout.template')
@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Inventory</h1>
        </div><!-- /.col -->
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

                <div class="d-flex justify-between align-items-center">

              <h3 class="card-title">Responsive Hover Table</h3>

                <a href="{{ route('inventory.create') }}" class="btn btn-success ml-auto">tambah data</a>
                
                {{-- fungsi a href, ketika button tambah di click, arahkan dia ke form tambah data --}}
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>id produk</th>
                    <th>id ruangan</th>
                    <th>action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($data as $index=>$item)
                  <tr>
                      <td>{{ $item->id_product }}</td>
                      <td>{{ $item->id_ruangan }}</td>
                      <td>
                          <a href="{{ route('inventory.edit',$item->id) }}" class="btn btn-primary">edit</a>
                          <form action="{{ route('inventory.destroy',$item->id) }}" method="post" class="d-inline">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">hapus</button>

                          </form>
                      </td>
                  </tr>
                      
                  @empty
                  <tr>
                    <td colspan="3">data tidak tersedia</td>
                </tr>
            @endforelse
                   
                </tbody>
                </table>
                </div>
      </div>
    </div>
  </section>
@endsection
