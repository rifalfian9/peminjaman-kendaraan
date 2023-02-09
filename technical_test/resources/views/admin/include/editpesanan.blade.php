@extends('admin.index')

@section('konten')
 
<div class="row justify-content-center ">
    <div class="col-md-6">
        <div class="card mt-5 mb-5"  style="background-color: #AECAE0">
            <div class="card-body mt-4 mb-4">
                <div class="row  ">
                    <div class="col-md-10 ms-5">
                        @foreach ($x as $xes) 
                        <form action="/admin/editpesanan/{{ $xes->id_peminjaman }}" method ="POST">
                        @csrf   
                            <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Nama Peminjam</label>
                                    <select class="form-select" aria-label="Default select example" name="peminjam">
                                        <option value="0">Pilih</option>  
                                        @foreach ($d as $des)  
                                        <option value=" {{ $des->id_user }} " <?php if($des->id_user == $xes->id_user){ ?>
                                            selected 
                                     <?php } ?> > {{ $des->nama }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Kendaraan</label>
                                    <select class="form-select" aria-label="Default select example" name="kendaraan">
                                     <option value="0">Pilih</option> 
                                    @foreach ($e as $tes) 
                                        <option value="{{ $tes->id_kendaraan }}" <?php if($tes->id_kendaraan == $xes->id_kendaraan){ ?>
                                           selected
                                    <?php } ?>  > {{ $tes->nama_kendaraan }} </option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Nama Sopir</label>
                                    <select class="form-select" aria-label="Default select example" name="sopir">
                                         <option value="0">Pilih</option> 
                                    @foreach ($f as $fes) 
                                        <option value="{{ $fes->id_sopir }}" <?php if($fes->id_sopir == $xes->id_sopir){ ?>
                                            selected
                                       <?php } ?>  >{{ $fes->nama_sopir }}</option>
                                     @endforeach
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputEmail1" class="form-label">Tanggal Peminjaman</label>
                                    <input type="datetime-local" value="{{ $xes->tanggal_peminjaman }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tanggalpinjam">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Tanggal Pengembalian</label>
                                    <input type="datetime-local" value="{{ $xes->tanggal_kembali }}" class="form-control" id="exampleInputPassword1" name="tanggalkembali">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">Status</label>
                                    <select class="form-select" aria-label="Default select example" name="status">
                                        <option value="Diproses">{{ $xes->status }}</option>
                                    </select>
                                </div>
                                @endforeach
                               <div class="row justify-content-center mt-5">
                                <div class="col-md-2 ">
                                    <a type="button" href="/admin/home" class="btn btn-outline-primary mt-2 text-center ">Kembali</a>
                                </div> 
                                <div class="col-md-2 ">
                                   <button type="submit" class="btn btn-primary mt-2 text-center ">Edits</button>
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