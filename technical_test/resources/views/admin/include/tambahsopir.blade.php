@extends('admin.index')

@section('konten')
 
<div class="row justify-content-center ">
    <div class="col-md-6">
        <div class="card mt-5 mb-5"  style="background-color: #AECAE0">
            <div class="card-body mt-4 mb-4">
                <div class="row  ">
                    <h2>Tambah Data</h2>
                    <div class="col-md-10 ms-5">
                        <form action="/admin/settambahsopir" method ="POST">
                        @csrf   
                                <div class="mb-2">
                                    <label for="exampleInputEmail1" class="form-label">Nama Sopir</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="sopir">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputPassword1" class="form-label">No Telepon</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="teleponsopir">
                                </div>
                               
                               <div class="row justify-content-center mt-5">
                                <div class="col-md-2 ">
                                    <a type="button" href="/admin/datasopir" class="btn btn-outline-primary mt-2 text-center ">Kembali</a>
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