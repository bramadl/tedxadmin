<!DOCTYPE html>

<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Login Admin TEDxUniversitasBrawijaya</title>

    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">

</head>

<body class="c-app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-group">
                    <div class="card p-4">
                        <form action="{{ action('Auth\LoginController@login') }}" method="POST" class="card-body">
                            @csrf
                            <h1>Login</h1>
                            <p class="text-muted">Sign In to your account</p>
                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <svg class="c-icon">
                                            <use xlink:href="{{ asset('vendors/@coreui/icons/sprites/free.svg#cil-user') }}"></use>
                                        </svg>
                                    </span>
                                </div>
                                <input class="form-control @error('username') is-invalid @enderror" name="username" type="text" placeholder="Username">
                            </div>
                            @error('username')
                                <span class="text-danger text-sm">{{ $message }}</span>
                            @enderror
                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <svg class="c-icon">
                                            <use xlink:href="{{ asset('vendors/@coreui/icons/sprites/free.svg#cil-lock-locked') }}"></use>
                                        </svg>
                                    </span>
                                </div>
                                <input class="form-control @error('password') is-invalid @enderror" name="password" type="password" placeholder="Password">
                            </div>
                            @error('password')
                                <span class="text-danger text-sm">{{ $message }}</span>
                            @enderror
                            <div class="row mt-4">
                                <div class="col-6">
                                    <button class="btn btn-primary px-4" type="submit">Login</button>
                                </div>
                                <div class="col-6 text-right">
                                    <button class="btn btn-link px-0" type="button">Forgot password?</button>
                                </div>
                                <div class="col-6 mt-4">
                                    <button class="btn btn-primary px-4 d-md-none" type="button">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                        <div class="card-body text-center">
                            <div>
                                <h2>Sign up</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="{{url('auth/register')}}" class="btn btn-lg btn-outline-light mt-3" type="button">Register Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('vendors/@coreui/coreui/dist/js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('vendors/@coreui/icons/js/svgxuse.min.js') }}"></script>

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

    @if (session('error'))
    <script>
        Toast.fire({
            icon: 'error',
            title: @json(session('error'))
        })
    </script>
    @endif

    @if (session('success'))
    <script>
        Toast.fire({
            icon: 'success',
            title: @json(session('success'))
        })
    </script>
    @endif
</body>

</html>