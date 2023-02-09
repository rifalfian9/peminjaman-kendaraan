@extends('index')

@section('container')

    <div class="container">
        <h1 class="text-center text-white fw-bold pt-5"> Cari Mobil Pinjaman</h1>
        <div class="row justify-content-center">
            <div class="col-md-7 mt-3">
                <form action="/search" method="get">
                    @csrf
                    <input class="form-control me-2 text-white fw-bolder" style="background-color: #454E55" name="search" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
        <div class="row mt-5 text-center"> 
            @foreach ($t as $item)
            <div class="col-md-3 me-3">
            <div class="card" style="width: 16rem;">
                <a href="/pesan/{{ $item->id_kendaraan }}" class="text-decoration-none">
                    <img src="image/mobil.jpg" class="card-img-top" alt="...">
                    <div class="card-body bg-dark">
                        <h5 class="card-title text-white fw-bold">{{ $item->nama_kendaraan }}</h5>
                        <p class="card-text text-white fw-bold">ketersediaan : {{ $item->stok }}</p>
                        {{-- <a href="" class="btn btn-secondary text-white fw-bold">Pesan</a> --}}
                    </div>
                </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection