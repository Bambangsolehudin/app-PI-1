@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-9">
      <h3 class="mt-4 text-bold text-center mb-4 ">Data user</h3>

      @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
      @endif
    
      {{-- <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah </a> --}}

    
    
    
      <table class="table table-striped table-bordered mt-4" style="width:100%" id="myTable">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">KTP</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
        @foreach($user as $b)
    
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            
            <td>{{ $b->name }}</td>
            <td>{{ $b->email }}</td>
            <td>{{ $b->KTP }}</td>
            <td>{{ $b->alamat }}</td>

            <td>
              <form action="{{ route('user.destroy', $b->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin Hapus Data ?')">
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

