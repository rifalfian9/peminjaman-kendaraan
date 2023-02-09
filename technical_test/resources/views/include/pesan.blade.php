@extends('index')

@section('container')
@foreach ($y as $item)
    
<div class="row justify-content-center ">
    <div class="col-md-8">
        <div class="card mt-5"  style="background-color: #454E55">
            <div class="card-body mt-4 mb-4">
                <div class="row ">
                    <div class="col-md-4 ms-3">
                        <img src="/image/mobil.jpg" class="img-fluid" height="200" >
                    </div>
                    <div class="col-md-6 ms-5">
                        <h4 class="text-light">{{ $item->nama_kendaraan  }}</h4>
                        <h6  class="text-light">Deskripsi</h6>
                        <p  class="text-light">Stok : {{ $item->stok }}</p>
                        <p  class="text-light">Terakhir Servis : {{ $item->terakhir_servis }} </p>
                        {{-- <p  class="text-light" style="text-align: justify;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit laborum animi odio inventore ducimus saepe ad ab veritatis, accusamus maxime similique quo veniam eius labore, ut fuga accusantium quae corrupti!</p> --}}
                        <form action="/buatpesanan" method ="POST">
                            @csrf
                            <input type="datetime-local" name="tanggalpesan" id=""> 
                            <h6 class="text-light">Sampai</h6>
                            <input type="datetime-local" name="tanggalkembali" id="">
                            <div class="mt-3">
                                <input type="hidden" name="id_kendaraan" value="{{ $item->id_kendaraan }}" >
                                <input type="hidden" name="id_user" value="{{ $item->id_kendaraan }}"  >
                                <input type="hidden" name="stok" value="{{ $item->stok }}"  >
                                <button type="input" class="btn btn-outline-light">Pesan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection