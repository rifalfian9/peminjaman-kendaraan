@extends('index')

@section('container')
<form method="post" action="/login">
    @csrf
          <div class="row justify-content-center">
            <label class="text-light text-center">Loginnya masih error</label>
                <div class="col-md-10">
                 <div class="row justify-content-center">
                <div class="col-md-5 mt-5 border rounded-4 ">
                <h2 class="mt-4 text-center text-white">Login</h2>
            @if (session()->has('status'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Selamat!</strong> Kamu berhasil Registrasi.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
             @if (session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Salah!</strong> Periksa email dan password!!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

                <div class="input-group flex-nowrap mt-4 mb-4">
                <span class="input-group-text" id="addon-wrapping">@</span>
                <input type="email" class="form-control" required placeholder="Username" name="email" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group flex-nowrap mb-4">
                <span class="input-group-text" id="addon-wrapping">#</span>
                <input type="password" class="form-control" required placeholder="Password" name="password" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="text-center mb-5">
                    <button type="submit" class="btn btn-light">Login</button>
                    <a href="/register" type="button" class="btn btn-outline-secondary me-4">Register</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row text-center">

<label class="text-light" for=""> admin? <a href="/admin/login" class="justify-content-center">disini</a></label>
</div>
</form>
@endsection