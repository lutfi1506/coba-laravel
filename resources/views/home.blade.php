@extends('partial/main')

@section('container')
    <section id="home">
        <div class="row bg-body-secondary mt-3 py-5">
            <div class="col text-center my-5">
                <img src="img/kamun.png" alt="Kamun banh">
                <h2>SMKN 1 Kadipaten</h2>
            </div>
        </div>
    </section>
    
    <section id="profile">
        <div class="row py-3">
            <div class="col text-center my-5 ">
                <h2>Visi Misi</h2>
                <div class="row justify-content-center mt-3">
                    <div class="col-4">
                        <h4>Visi</h4>
                       @foreach ($visi as $sivi)
                           <h5>{{ $sivi }}</h5>
                       @endforeach
                    </div>
                    <div class="col-4">
                        <h4>Misi</h4>
                        <ol class="text-start">
                            @foreach ($misi as $simi)
                              <h5>{{ $simi }}</h5>
                          
                            @endforeach
                        </ol>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section id="kegiatan" class="bg-body-secondary w-100">
    <div class="container py-5">
        <h2 class="mb-5 text-center">Kegiatan</h2>
        <div class="row justify-content-center">
            @foreach ($kegiatans as $kegiatan)
                <div class="col-4">
                    <div class="card mt-3">
                        <img src="img/{{ $kegiatan["image"] }}" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $kegiatan["judul"] }}</h5>
                            <p class="card-text">{{ $kegiatan["ringkasan"] }}</p>
                        </div>
                    </div> 
                </div>
            @endforeach
        </div>
    </div>
    </section>
@endsection