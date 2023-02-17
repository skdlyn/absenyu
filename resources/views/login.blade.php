<title>Login</title>
<link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">

<link rel="stylesheet" href="">

<section class="vh-100">
    <!--@if (session()->has('registerSuccess'))
<div class="alert alert-success alert-dismissible fade show" role="alert" >
            {{-- <button type="button" class="btn-close" aria-label="Close"></button> --}}
            {{ session('registerSuccess') }}
        </div>
@endif-->
    <div class="container py-5 h-100" style="overflow: hidden;">
        <a href="/" class="btn btn-dark" style="background:#6b5b95;">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
        </a>
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="{{ asset('template/img/login.jpeg') }}" class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <div class="card" style="background-color:rgb(90, 76, 128); border-radius: 25px;">
                    <div class="card-body p-5 text-center">
                        <h2 class="text-white fw-bold mb-2 text-uppercase" style="font-family: 'Tahoma'">SELAMAT DATANG
                            !!!</h2>
                            {{-- warna rgb(90, 76, 128) --}}
                        <p class="text-white mb-5">Teman - teman Rekayasa Perangkat Lunak</p>
                        @if (session()->has('loginError'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('loginError') }}
                            </div>
                        @endif
                        <form method="post" action="login" class="user needs-validation" novalidate>
                            @csrf
                            <!-- Email input -->
                            <div class="form-outline mb-4 form-group">
                                <input type="email" class="form-control" id="validationCustom01 exampleInputEmail"
                                    name="email" placeholder="Masukkan E-mail" required>
                                <div class="invalid-feedback">
                                    Masukkan Emailnya Cuyh!
                                </div>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4 form-group">
                                <input type="password" class="form-control" id="validationCustom01 exampleInputPassword"
                                    name="password" placeholder="Masukkan Password" required>
                                <div class="invalid-feedback">
                                    Password Belum Di Isi Cuyh!
                                </div>
                            </div>
                            <!-- Submit button -->
                            {{-- <input type="submit" width="" value="Login" class="btn btn-primary btn-lg btn-block">
                        <input type="submit" width="" value="Login" class="btn btn-primary btn-lg btn-block"> --}}
                            <div class="row">
                                <div class="col mb-3">
                                    <input type="submit" value="MASUK"
                                        class="btn btn w-100 text-light btn-outline-primary">
                                </div>
                            </div>
                            <!-- Register buttons -->
                            {{-- <div class="row">
                            <div class="text-center col">
                                <p>Belum Punya Akun ? <a href="register">Daftar</a></p>
                            </div>
                        </div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .divider:after,
    .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
    }
</style>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
