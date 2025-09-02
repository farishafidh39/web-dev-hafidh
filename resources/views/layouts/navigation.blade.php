<hr class="horizontal dark mt-0">
<div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
  <ul class="navbar-nav">
    <!-- NAVBAR UMUM -->
    <li class="nav-item">
      <a class="nav-link active" href="../pages/dashboard.html">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-tv-2 text-dark text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('konsumens.index')}}">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-calendar-grid-58 text-dark text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Konsumen</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('keranjangs.index')}}">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-credit-card text-dark text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Keranjang</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('pembayarans.index')}}">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-app text-dark text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Pembayaran</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('pemesanans.index') }}">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-world-2 text-dark text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Pemesanan</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('produks.index') }}">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-world-2 text-dark text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Produk</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('pemesanan-items.index') }}">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-world-2 text-dark text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Pemesanan Item</span>
      </a>
    </li>

    <!-- PEMBATAS -->
    <li class="nav-item mt-3">
      <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('users.index') }}">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">User</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../pages/sign-in.html">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-single-copy-04 text-dark text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Sign In</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../pages/sign-up.html">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-collection text-dark text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Sign Up</span>
      </a>
    </li>
  </ul>
</div>
