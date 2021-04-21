<!DOCTYPE html>

<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Register Admin TEDxUniversitasBrawijaya</title>

    @include('security.check')

    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">

</head>

<body class="c-app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mx-4">
                    <form action="{{ action('Auth\RegisterController@register') }}" method="POST" class="card-body p-4">
                        @csrf
                        <h1>Register</h1>
                        <p class="text-muted">Create your account</p>
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
                            <span class="text-danger text-sm">
                                {{ $message }}
                            </span>
                        @enderror
                        <div class="input-group mt-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <svg class="c-icon">
                                        <use xlink:href="{{ asset('vendors/@coreui/icons/sprites/free.svg#cil-envelope-open') }}"></use>
                                    </svg>
                                </span>
                            </div>
                            <input class="form-control @error('email') is-invalid @enderror" name="email" type="text" placeholder="Email">
                        </div>
                        @error('email')
                            <span class="text-danger text-sm">
                                {{ $message }}
                            </span>
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
                            <span class="text-danger text-sm">
                                {{ $message }}
                            </span>
                        @enderror
                        <div class="input-group mt-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <svg class="c-icon">
                                        <use xlink:href="{{ asset('vendors/@coreui/icons/sprites/free.svg#cil-lock-locked') }}"></use>
                                    </svg>
                                </span>
                            </div>
                            <input class="form-control" name="password_confirmation" type="password" placeholder="Repeat password">
                        </div>
                        <div class="input-group mt-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <svg class="c-icon">
                                        <use xlink:href="{{ asset('vendors/@coreui/icons/sprites/free.svg#cil-address-book') }}"></use>
                                    </svg>
                                </span>
                            </div>
                            <select name="role" id="role" class="form-control @error('role') is-invalid @enderror">
                                <option value="" selected hidden disabled>Select role</option>
                                <option value="organizer">Organizer</option>
                                <option value="co-organizer">Co Organizer</option>
                                <option value="bm">Budget Marketing</option>
                                <option value="curator">Curator</option>
                                <option value="sponsorship">Sponsorship</option>
                                <option value="em">Event Manager</option>
                                <option value="ep">Executive Producer</option>
                                <option value="cem">CEM</option>
                                <option value="designer">Designer</option>
                                <option value="vp">Video Production</option>
                                <option value="w">Website</option>
                            </select>
                        </div>
                        @error('role')
                            <span class="text-danger text-sm">
                                {{ $message }}
                            </span>
                        @enderror
                        <button class="btn btn-block btn-success mt-4" type="submit">Create Account</button>
                    </form>
                    <div class="card-footer p-4">
                        <div class="row">
                            <div class="col-6">
                                <button class="btn btn-block btn-facebook" type="button"><span>facebook</span></button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-block btn-twitter" type="button"><span>twitter</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <!--[if IE]><!-->
    <script src="vendors/@coreui/icons/js/svgxuse.min.js"></script>
    <!--<![endif]-->

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