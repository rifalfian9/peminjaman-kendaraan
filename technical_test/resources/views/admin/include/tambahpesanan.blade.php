@extends('admin.index')

@section('konten')
 
<div class="row justify-content-center ">
    <div class="col-md-6">
        <div class="card mt-5 mb-5"  style="background-color: #AECAE0">
            <div class="card-body mt-4 mb-4">
                <div class="row  ">
                    <h2>Tambah Data</h2>
                    <div class="col-md-10 ms-5">
                        <form action="/admin/buatpesanan" method ="POST">
                        @csrf   
                            <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Nama Peminjam</label>
                                    <select class="form-select" aria-label="Default select example" name="peminjam">
                                        <option value="0">Pilih</option>  
                                        @foreach ($d as $des)  
                                        <option value=" {{ $des->id_user }} "> {{ $des->nama }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Kendaraan</label>
                                    <select class="form-select" aria-label="Default select example" name="kendaraan">
                                     <option value="0">Pilih</option> 
                                    @foreach ($e as $tes) 
                                        <option value="{{ $tes->id_kendaraan }}"> {{ $tes->nama_kendaraan }} </option>
                                    @endforeach
                                    </select>
                                    <input type="hidden" name="stok" value="{{  $tes->stok }}">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Nama Sopir</label>
                                    <select class="form-select" aria-label="Default select example" name="sopir">
                                         <option value="0">Pilih</option> 
                                    @foreach ($f as $fes) 
                                        <option value="{{ $fes->id_sopir }}">{{ $fes->nama_sopir }}</option>
                                     @endforeach
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputEmail1" class="form-label">Tanggal Peminjaman</label>
                                    <input type="datetime-local" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tanggalpinjam">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Tanggal Pengembalian</label>
                                    <input type="datetime-local" class="form-control" id="exampleInputPassword1" name="tanggalkembali">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Status</label>
                                    <select class="form-select" aria-label="Default select example" name="status">
                                        <option value="Diproses">Diproses</option>
                                    </select>
                                </div>
                               
                               <div class="row justify-content-center mt-5">
                                <div class="col-md-2 ">
                                    <a type="button" href="/admin/home" class="btn btn-outline-primary mt-2 text-center ">Kembali</a>
                                </div> 
                                <div class="col-md-2 ">
                                   <button type="submit" class="btn btn-primary mt-2 text-center ">Create</button>
                                </div>
                               </div>
                               
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection