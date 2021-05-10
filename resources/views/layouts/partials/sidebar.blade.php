<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
  <div class="c-sidebar-brand d-lg-down-none">
    <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
      <use xlink:href="{{ asset('assets/brand/coreui.svg#full') }}"></use>
    </svg>
    <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
      <use xlink:href="{{ asset('assets/brand/coreui.svg#signet') }}"></use>
    </svg>
  </div>
  <ul class="c-sidebar-nav">
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="{{ url('/') }}">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="{{ asset('vendors/@coreui/icons/sprites/free.svg#cil-speedometer') }}"></use>
        </svg> Dashboard
      </a>
    </li>

    <li class="c-sidebar-nav-title">Kelola Produk</li>
    <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
      <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="{{ asset('vendors/@coreui/icons/sprites/free.svg#cil-cash') }}"></use>
        </svg> Merchandise
      </a>
      <ul class="c-sidebar-nav-dropdown-items">
        <li class="c-sidebar-nav-item">
          <a class="c-sidebar-nav-link" href="{{url('merchandise/pembelian')}}">
            <span class="c-sidebar-nav-icon"></span>
            Pembelian
          </a>
        </li>
        <li class="c-sidebar-nav-item">
          <a class="c-sidebar-nav-link" href="{{url('merchandise/pembayaran')}}">
            <span class="c-sidebar-nav-icon"></span>
            Pembayaran
          </a>
        </li>
        <li class="c-sidebar-nav-item">
          <a class="c-sidebar-nav-link" href="{{url('merchandise/pengiriman')}}">
            <span class="c-sidebar-nav-icon"></span>
            Pengiriman
          </a>
        </li>
      </ul>
    </li>
    <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
      <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="{{ asset('vendors/@coreui/icons/sprites/free.svg#cil-tags') }}"></use>
        </svg> Tickets</a>
      <ul class="c-sidebar-nav-dropdown-items">
        <li class="c-sidebar-nav-item">
          <a class="c-sidebar-nav-link" href="{{url('tickets/pembayaran')}}">
            <span class="c-sidebar-nav-icon"></span>
            Pembayaran
          </a>
        </li>
        <li class="c-sidebar-nav-item">
          <a class="c-sidebar-nav-link" href="{{url('tickets/pembelian')}}">
            <span class="c-sidebar-nav-icon"></span>
            Pembelian
          </a>
        </li>
        <li class="c-sidebar-nav-item">
          <a class="c-sidebar-nav-link" href="{{url('tickets/permintaan-token')}}">
            <span class="c-sidebar-nav-icon"></span>
            Permintaan Token
          </a>
        </li>
      </ul>
    </li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="{{url('loka-hasta-karya')}}">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="{{ asset('vendors/@coreui/icons/sprites/free.svg#cil-spreadsheet') }}"></use>
        </svg> Loka Hasta Karya
      </a>
    </li>
    
    <li class="c-sidebar-nav-title">Kelola Pengguna</li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="{{url('users/audiens')}}">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="{{ asset('vendors/@coreui/icons/sprites/free.svg#cil-people') }}"></use>
        </svg> Audiens
      </a>
    </li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="{{url('users/volunteers')}}">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="{{ asset('vendors/@coreui/icons/sprites/free.svg#cil-group') }}"></use>
        </svg> Volunteers
      </a>
    </li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="{{url('users/cores')}}">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="{{ asset('vendors/@coreui/icons/sprites/free.svg#cil-group') }}"></use>
        </svg> Cores
      </a>
    </li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="{{url('users/speakers')}}">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="{{ asset('vendors/@coreui/icons/sprites/free.svg#cil-group') }}"></use>
        </svg> Speakers
      </a>
    </li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="{{url('users/talents')}}">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="{{ asset('vendors/@coreui/icons/sprites/free.svg#cil-group') }}"></use>
        </svg> Talents
      </a>
    </li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="{{url('users/partners')}}">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="{{ asset('vendors/@coreui/icons/sprites/free.svg#cil-group') }}"></use>
        </svg> Partners
      </a>
    </li>

    <li class="c-sidebar-nav-title">Kelola Akun</li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="{{url('account/profile')}}">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="{{ asset('vendors/@coreui/icons/sprites/free.svg#cil-user') }}"></use>
        </svg> Profile
      </a>
    </li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="{{url('account/settings')}}">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="{{ asset('vendors/@coreui/icons/sprites/free.svg#cil-cog') }}"></use>
        </svg> Settings
      </a>
    </li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()">
        <svg class="c-sidebar-nav-icon">
          <use xlink:href="{{ asset('vendors/@coreui/icons/sprites/free.svg#cil-power-standby') }}"></use>
        </svg> Logout
      </a>
    </li>
    <form id="logoutForm" action="{{ action('Auth\LogoutController@logout') }}" class="d-none" method="POST">@csrf</form>
  </ul>
  <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>