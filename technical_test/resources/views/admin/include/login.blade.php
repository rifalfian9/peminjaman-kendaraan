@extends('admin.index')

@section('konten')
<form method="post" action="/admin/logined">
    @csrf
    <div class="row justify-content-center mt-5 pt-5" >
        <div class="col-md-4 mt-5 border rounded-4 " style="background-color: rgb(141, 195, 238)">
          <h2 class="mt-4 text-center text-white">Login</h2>
          <div class="row justify-content-center">
                <div class="col-md-10">
                <div class="input-group flex-nowrap mt-4 mb-4">
                <span class="input-group-text" id="addon-wrapping">@</span>
                <input type="email" class="form-control" placeholder="Username" name="email" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="input-group flex-nowrap mb-4">
                <span class="input-group-text" id="addon-wrapping">#</span>
                <input type="password" class="form-control" placeholder="Password" name="email" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                <div class="text-center mb-5">
                    <button type="submit" class="btn btn-light">Login</button>
                    <a href="/" type="button" class="btn btn-outline-secondary me-4">Back to Website</a>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection