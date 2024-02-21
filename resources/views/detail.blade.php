@extends('partial.main')

@section('container')
<div class="container">
    <div class="row py-5 justify-content-center">
        <div class="col-10 mt-5 ">
            <h1 class="text-center">{{ $kegiatan["judul"] }}</h1>
            <img src="/img/{{ $kegiatan["image"] }}" class="w-100" alt="...">
            <p class="card-text">{{ $kegiatan["detail"] }}</p>
            <a href="/" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
@endsection