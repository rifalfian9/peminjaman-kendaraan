@extends('admin.index')

@section('konten')
 
<div class="row justify-content-center ">
    <div class="col-md-6">
        <div class="card mt-5 mb-5"  style="background-color: #AECAE0">
            <div class="card-body mt-4 mb-4">
                <div class="row  ">
                    <h2>Perbarui Data</h2>
                    <div class="col-md-10 ms-5">
                        @foreach ($dv as $item)
                        <form action="/admin/seteditkendaraan/{{ $item->id_kendaraan }}" method ="POST">
                        @csrf   
                            <input type="hidden" name="dataid" value="{{ $item->nama_kendaraan }}">
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Kendaraan</label>
                            <input type="text" value ="{{ $item->nama_kendaraan }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kendaraan">
                        </div>
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Tanggal Terakhir Servis</label>
                                    <input type="date" value="{{ $item->terakhir_servis }}" class="form-control" id="exampleInputPassword1" name="servisterakhir">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Tanggal Servis akan datang</label>
                                    <input type="date" value="{{ $item->jadwal_servis }}" class="form-control" id="exampleInputPassword1" name="servislanjutan">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputEmail1" class="form-label">Ketersediaan</label>
                                    <input type="text" value="{{ $item->stok }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="stok">
                                </div>
                               <div class="row justify-content-center mt-5">
                                   <div class="col-md-2 ">
                                       <a type="button" href="/admin/datakendaraan" class="btn btn-outline-primary mt-2 text-center ">Kembali</a>
                                    </div> 
                                    <div class="col-md-2 ">
                                        <button type="submit" class="btn btn-primary mt-2 text-center ">Create</button>
                                    </div>
                                </div>
                                
                                @endforeach
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection