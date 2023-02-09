<nav class="navbar navbar-expand-lg navbar fixed bg-dark border-bottom" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand fw-bolder" href="#">PINJEM.Mobil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link fw-bolder active" aria-current="page" href="/beranda">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bolder" href="/pinjam">Kendaraan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bolder" href="/pesanan">Pesanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bolder" href="/pengaturan">Pengaturan</a>
        </li> 
        @auth
    <li class="nav-item">
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="btn btn-dark">Logout</button>
              </form>
            </li>

        @else
    <li class="nav-item">
          <a href="/login" type="button" class="btn btn-dark">Login</a>
        </li>
        @endauth
       
         
      </ul>
    </div>
  </div>
</nav>