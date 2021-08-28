@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
        <h2 class="mt-2 mb-3">Edit  Barang</h2>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
            <form action="{{ route('admin.update', $barang->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <input type="hidden" name="tmp_image" value="{{ $barang->foto }}">
                    <img src="{{ url($barang->foto) }}" width="150px" />
                    <label for="exampleInputEmail1">Photo</label>
                    <input type="file" class="form-control"  placeholder="Enter Icon Font Awesome" name="foto">
                </div>
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input name="nama_barang" type="text" class="form-control" id="nama_barang" value="{{ $barang->nama_barang }}">
                </div>
                <div class="form-group">
                    <label for="title">Status</label>
                    <select name="status" required class="form-control">
                        <option value="{{ $barang->status }}">Silahkan Pilih</option>
                            <option value="2"> Ditemukan </option>
                            <option value="1"> Belum Ditemukan </option>

                    </select>
                </div>

                <div class="form-group">
                    <label for="detail">Detail</label>
                    <input name="detail" type="text" class="form-control" id="detail" value="{{ $barang->detail }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
    
@endsection