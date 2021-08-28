@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-9">
      <h3 class="mt-4 text-bold text-center mb-4 ">Data Barang</h3>

      @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
      @endif
    
      <a href="{{ route('barang.create') }}" class="btn btn-primary">Tambah </a>

    
    
    
      <table class="table table-striped table-bordered mt-4" style="width:100%" id="myTable">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">foto</th>
            <th scope="col">Nama</th>
            <th scope="col">Detail</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
        @foreach($barang as $b)
    
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td><img src="{{ url($b->foto) }}" width="100px" /></td>
            
            <td>{{ $b->nama_barang }}</td>
            <td>{{ $b->detail }}</td>
            <td>
              <a href="{{ route('barang.edit', $b->id) }}" class="btn btn-sm btn-warning">Edit</a>
              <form action="{{ route('barang.destroy', $b->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin Hapus Data ?')">
                @csrf
                @method('delete')
                <button class="btn btn-sm btn-danger" > Delete</button>
              </form>
            </td>
          </tr>  
        @endforeach
    
          
        </tbody>
      </table>
    </div>
  </div>
</div>    
@endsection

