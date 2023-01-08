
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">


        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <!-- Nested Row within Card Body -->


                                            <div class="p-5">
                                                <div class="text-center">
                                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                                </div>

                                                <form class="user">
                                                    <div class="form-group">
                                                        <input type="text"
                                                            class="form-control form-control-user @error('name') is-invalid @enderror"
                                                            id="name" placeholder="Full Name" required
                                                            name="name" value="{{ old('name') }}"> @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="email"
                                                            class="form-control form-control-user @error('email') is-invalid @enderror"
                                                            id="email" placeholder="Email Address" required
                                                            name="email" value="{{ old('email') }}">
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="number"
                                                            class="form-control form-control-user @error('nik') is-invalid @enderror"
                                                            id="nik" placeholder="Nik" required
                                                            name="nik" value="{{ old('nik') }}">
                                                        @error('nik')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="number"
                                                            class="form-control form-control-user @error('telp') is-invalid @enderror"
                                                            id="telp" placeholder="Phone Number" required
                                                            name="telp" value="{{ old('telp') }}">
                                                        @error('telp')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                                            <input type="password"
                                                                class="form-control form-control-user @error('password') is-invalid @enderror"
                                                                id="password" placeholder="Password" requied
                                                                name="password">
                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-sm-6">
                                                            <input type="password"
                                                                class="form-control form-control-user"
                                                                id="password-confirm" placeholder="Repeat Password"
                                                                required name="password_confirmation">
                                                        </div>
                                                    </div>
                                                    <button type="submit"
                                                        class="btn btn-outline-primary btn-user btn-block">
                                                        Register Account
                                                    </button>

                                                </form>
                                                <hr>
                                                <div class="text-center">
                                                    <a class="small" href="{{ route('login') }}">Already have an
                                                        account? Login!</a>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ asset('tempalte/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

</body>

</html>