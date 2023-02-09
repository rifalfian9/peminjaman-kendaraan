@extends('index')

@section('container')
<form method="post" action="/mendaftar">
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-4 mt-5 border rounded-4 ">
          <h2 class="mt-4 text-center text-white">Mendaftar</h2>

          <div class="row justify-content-center">
                <div class="col-md-10">
                <div class="input-group flex-nowrap mt-4 mb-4">
                <span class="input-group-text" id="addon-wrapping">@</span>
                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group flex-nowrap mt-4 mb-4">
                <span class="input-group-text" id="addon-wrapping">@</span>
                <input type="text" class="form-control" name="divisi" placeholder="Divisi" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group flex-nowrap mt-4 mb-4">
                <span class="input-group-text" id="addon-wrapping">@</span>
                <input type="text" class="form-control" name="posisi" placeholder="Posisi Jabatan" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group flex-nowrap mt-4 mb-4">
                <span class="input-group-text" id="addon-wrapping">@</span>
                <input type="text" class="form-control" name="alamat" placeholder="alamat" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                 <div class="input-group flex-nowrap mb-4">
                <span class="input-group-text" id="addon-wrapping">@</span>
                <input type="text" class="form-control" name="email" placeholder="email" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group flex-nowrap mb-4">
                <span class="input-group-text" id="addon-wrapping">#</span>
                <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="text-center mb-5">
                    <button type="submit" class="btn btn-outline-secondary me-4">Register</button>
                    <a href="/login" type="button" class="btn btn-light">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection