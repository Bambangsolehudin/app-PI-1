@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" class="form-control" name="foto" id="foto" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                      <label for="nama_barang" class="form-label">Nama Barang</label>
                      <input type="text" class="form-control" name="nama_barang" id="nama_barang" aria-describedby="emailHelp">
                    </div>

                 
                    
                    <div class="mb-3">
                        <label for="detail" class="form-label">Detail Barang</label>
                        <input type="text" class="form-control" name="detail" id="detail" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        {{-- <label for="status" class="form-label">Nama Barang</label> --}}
                        <input type="hidden" class="form-control" value="belum ditemukan" name="status" id="status" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <input type="hidden" class="form-control" value="{{ Auth::user()->id }}" name="user_id" id="user_id" aria-describedby="emailHelp">
                    </div>
                    
              
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                
            </div>
        </div>
    </div>
</div>
@endsection
