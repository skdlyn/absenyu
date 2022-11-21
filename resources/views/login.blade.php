<title>Login</title>
<link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">

<link rel="stylesheet" href="">

<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="{{ asset('template/img/login.jpeg') }}" class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <div class="card-body p-5 text-center">
                    <h2 class="fw-bold mb-2 text-uppercase" style="font-family: 'Tahoma'">Hello!</h2>
                    <p class="text-dark-50 mb-5">Our part of XII RPL 2</p>
                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                        </div>
                    @endif
                    <form method="post" action="login" class="user">
                        @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4 form-group">
                            <input type="email" name="email" id="exampleInputEmail" aria-describedby="emailHelp"
                                placeholder="Enter Email Address.." class="form-control form-control-user">
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4 form-group">
                            <input type="password" name="password" id="exampleInputPassword" placeholder="Password"
                                class="form-control form-control-user">
                        </div>
                        <!-- Submit button -->
                        <input type="submit" value="Login" class="btn btn-primary btn-lg btn-block">

                    </form>
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
