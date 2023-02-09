<nav class="navbar navbar-expand-lg " style="background-color: rgb(72, 105, 198);">
  <div class="container-fluid">
    <a class="navbar-brand fw-bolder " href="#">Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link  text-white" aria-current="page" href="/admin/home">DAFTAR PESANAN</a>
        <a class="nav-link text-white" href="/admin/datauser">DAFTAR USER</a>
        <a class="nav-link text-white" href="/admin/datakendaraan">DAFTAR KENDARAAN</a>
        <a class="nav-link text-white" href="/admin/datasopir">DAFTAR SOPIR</a>
        <a class="nav-link text-white" href="/admin/datasopir">GRAFIK</a>
        @auth
             <form action="/admin/logout" method="post">
          @csrf
          <button type="button" class="btn text-white">LOGOUT</button>
        </form>
        @else
          <a class="nav-link text-white" href="/admin/login">LOGIN</a>
        @endauth
        
       
      </div>
    </div>
  </div>
</nav>