<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

  <title>TEDxUniversitasBrawijaya | Admin Dashboard</title>

  <!-- Main styles for this application-->
  <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <!-- Stylesheets required by this view -->
  @stack('styles')
</head>

<body class="c-app">
  @include('layouts.partials.sidebar')
  <div class="c-wrapper c-fixed-components">
    <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
      @include('layouts.partials.header')
      <div class="c-subheader px-3">
        @yield('breadcrumbs')
      </div>
    </header>
    <div class="c-body">
      <main class="c-main">
        <div class="container-fluid">
          <div class="fade-in">
            @yield('content')
          </div>
        </div>
      </main>
      @include('layouts.partials.footer')
    </div>
  </div>

  <!-- Sweet Alert2 -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script>
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    })
  </script>

  <!-- CoreUI and necessary plugins-->
  <script src="{{ asset('vendors/@coreui/coreui/dist/js/coreui.bundle.min.js') }}"></script>
  <script src="{{ asset('vendors/@coreui/icons/js/svgxuse.min.js') }}"></script>

  <!-- Plugins and scripts required by this view-->
  @stack('scripts')
</body>

</html>