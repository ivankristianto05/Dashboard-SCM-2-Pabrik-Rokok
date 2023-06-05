<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pergudangan Pt.Sejahtera</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('main.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
</head>
<body>
    <nav class="navbar bg-black shadow-sm navbar-expand-lg bg-se">
        <div class="container-fluid">
          <a class="navbar-brand ms-4" style="width: 350px; color : white; font-family: 'Lobster', cursive" href="#">Pt.Sejahtera</a>
          <a href="{{ route('logout') }}" class="nav-item nav-link active" style="width: 100px; color : white; font-family: 'Lobster' , cursive" method="POST">
                <i class="fas fa-sign-out-alt"></i>
                {{ __('Logout') }}
              </a>        
</div>
</nav>
    <div class="d-flex bg-secondary sidebar flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; height: 100vh; position: fixed;">
        <ul class="nav nav-pills flex-column mb-auto">
  @if(auth()->check())
    @if(auth()->user()->role == 'admin')
    <li class="nav-item">
            <a href="/home" class="nav-link link-dark" aria-current="page">
                <i class="bi-house" style="font-size: 1.2rem;"></i>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a href="/barang/index" class="nav-link link-dark" aria-current="page">
                <i class="bi-box2" style="font-size: 1.2rem;"></i>
              Barang
            </a>
          </li>
          <li class="nav-item">
            <a href="/bahanbaku" class="nav-link link-dark" aria-current="page">
                <i class="bi-box2" style="font-size: 1.2rem;"></i>
              Bahan baku
            </a>
          </li>
          <li class="nav-item">
            <a href="/gudangbarang" class="nav-link link-dark" aria-current="page">
                <i class="bi-inboxes" style="font-size: 1.2rem;"></i>
              Gudang Barang
            </a>
          </li>
          <li class="nav-item">
            <a href="/gudangbahan" class="nav-link link-dark" aria-current="page">
                <i class="bi-inboxes" style="font-size: 1.2rem;"></i>
              Gudang Bahan Baku
            </a>
          </li>
          <li class="nav-item">
            <a href="/peralatan" class="nav-link link-dark" aria-current="page">
                <i class="bi-wrench" style="font-size: 1.2rem;"></i>
              Peralatan
            </a>
          </li>
          <li class="nav-item">
            <a href="/produksi/index" class="nav-link link-dark" aria-current="page">
                <i class="bi-list-nested" style="font-size: 1.2rem;"></i>
              Produksi
            </a>
          </li>
          <li class="nav-item">
            <a href="/pegawai" class="nav-link link-dark" aria-current="page">
                <i class="bi-person" style="font-size: 1.2rem;"></i>
              Pegawai
            </a>
          </li>
          <li class="nav-item">
            <a href="/pengiriman" class="nav-link link-dark" aria-current="page">
                <i class="bi-minecart" style="font-size: 1.2rem;"></i>
              Pengiriman
            </a>
          </li>
          <li class="nav-item">
            <a href="/outlet" class="nav-link link-dark" aria-current="page">
                <i class="bi-shop-window" style="font-size: 1.2rem;"></i>
              Outlet
            </a>
          </li>
    @elseif(auth()->user()->role == 'Manajemen barang')
    <li class="nav-item">
            <a href="/home" class="nav-link link-dark" aria-current="page">
                <i class="bi-house" style="font-size: 1.2rem;"></i>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a href="/barang/index" class="nav-link link-dark" aria-current="page">
                <i class="bi-box2" style="font-size: 1.2rem;"></i>
              Barang
            </a>
          </li>
          <li class="nav-item">
            <a href="/gudangbarang" class="nav-link link-dark" aria-current="page">
                <i class="bi-inboxes" style="font-size: 1.2rem;"></i>
              Gudang Barang
              </a>
          </li>
          <li class="nav-item">
            <a href="/pengiriman" class="nav-link link-dark" aria-current="page">
                <i class="bi-minecart" style="font-size: 1.2rem;"></i>
              Pengiriman
            </a>
          </li>
          <li class="nav-item">
            <a href="/outlet" class="nav-link link-dark" aria-current="page">
                <i class="bi-shop-window" style="font-size: 1.2rem;"></i>
              Outlet
            </a>
          </li>
    @elseif(auth()->user()->role == 'Manajemen produksi')
    <li class="nav-item">
            <a href="/bahanbaku" class="nav-link link-dark" aria-current="page">
                <i class="bi-box2" style="font-size: 1.2rem;"></i>
              Bahan baku
            </a>
          </li>
          <li class="nav-item">
            <a href="/gudangbahan" class="nav-link link-dark" aria-current="page">
                <i class="bi-inboxes" style="font-size: 1.2rem;"></i>
              Gudang Bahan Baku
            </a>
          </li>
          <li class="nav-item">
            <a href="/peralatan" class="nav-link link-dark" aria-current="page">
                <i class="bi-wrench" style="font-size: 1.2rem;"></i>
              Peralatan
            </a>
          </li>
          <li class="nav-item">
            <a href="/produksi/index" class="nav-link link-dark" aria-current="page">
                <i class="bi-list-nested" style="font-size: 1.2rem;"></i>
              Produksi
            </a>
          </li>
          <li class="nav-item">
            <a href="/pegawai" class="nav-link link-dark" aria-current="page">
                <i class="bi-person" style="font-size: 1.2rem;"></i>
              Pegawai
            </a>
          </li>
@endif
@endif
        </ul>
        <hr>
      </div>
      <div class="content">
        <div class="container">
            @yield('content')
        </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.4/axios.min.js" integrity="sha512-LUKzDoJKOLqnxGWWIBM4lzRBlxcva2ZTztO8bTcWPmDSpkErWx0bSP4pdsjNH8kiHAUPaT06UXcb+vOEZH+HpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script src="js/table.js"></script>
  @stack('script')
  <script>
    var keluar = document.getElementById("logout")
    keluar.onclick = function () {
      let option = confirm("Apakah anda yakin untuk keluar?");
      if(option == true){
        window.location = "index.html"
      }
    }
  </script>
</body>
</html>

