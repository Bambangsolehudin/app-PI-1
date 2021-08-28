@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">

                    <a href="{{route('barang.create')  }}" class="btn btn-lg btn-primary text-center" style="margin-top: 150px">Upload Barang Hilang</a>
                
            </div>
        </div>
    </div>
</div>
@endsection
