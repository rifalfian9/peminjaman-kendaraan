@extends('index')

@section('container')
    <div class="mt-2">
       
            <nav class="navbar  bg-body-dark">
                <form class="container-fluid justify-content-center" action="/grup" method="get" >
                    @csrf
                <a class="btn btn-outline-warning me-2" type="button" href="/pesanan">All</a>
                <button class="btn btn-outline-danger me-2" type="input" name="parameter" value="Diproses" >Proses Validasi</button>
                <button class="btn btn-outline-success me-2" type="input" name="parameter" value="Disetujui">Tervalidasi</button>
                <button class="btn btn-outline-light me-2" type="input" name="parameter" value="Dibatalkan">Dibatalkan</button>
            </form>
            </nav>
        
    </div>

    <div class="container mt-3 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="ms-4 mt-5 rounded-2" style="background-color: #2C3135">
                    <div class="pt-3">
                        <h5 class="text-white fw-bolder ms-4">PINJAM.Mobil</h5>
                    <ul class="ms-3 text-decoration-none mt-4 pb-5">
                        <li class="ms-3 mb-1 text-decoration-none"><a href="/beranda" class="text-decoration-none fw-bold text-white">Beranda</a></li>
                        <li class="ms-3 mb-1 text-decoration-none"><a href="/pinjam" class="text-decoration-none fw-bold text-white">Kendaraan</a></li>
                        <li class="ms-3 mb-1 text-decoration-none"><a href="/pengaturan" class="text-decoration-none fw-bold text-white">Pengaturan</a></li>
                       
                    </ul>
                    </div>
                </div>
            </div>
            {{--  --}}
            <div class="col-md-8 ">
                @foreach ($all as $item)
                
                <div class="rounded-2" style="background-color: #2C3135">
                    <div class="ms-4">
                        <div class="row mt-2">
                            <div class="col-md-3 mt-4">
                                <img src="image/mobil.jpg" class="card-img-fluid" width="150" height="125" alt="...">
                            </div>
                            <div class="col-md-7 mt-4 mb-3">
                                <h3 class="text-white fw-bolder"> {{ $item->nama_kendaraan }} </h3>
                                <h6 class="text-white fw-bolder"> Nama Peminjam : {{ $item->nama }}</h6>
                                <h6 class="text-white fw-bolder"> Tanggal Peminjaman : {{ $item->tanggal_peminjaman }}</h6>
                                <h4 class="pt-1 text-warning"> {{ $item->status }} </h4>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection