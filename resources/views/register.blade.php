<title>Register</title>
<link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">

<link rel="stylesheet" href="">
{{-- @if ($message = Session::get('registerSuccess'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert"></button>
        <strong>{{ $message }}</strong>
    </div>
@endif --}}
@if ($message = Session::get('danger'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert"></button>
        <strong>{{ $message }}</strong>
    </div>
@endif
@if ($message = Session::get('berhasil'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert"></button>
        <strong>{{ $message }}</strong>
    </div>
@endif

<section class="vh-100">
    <div class="container py-5 h-100" style="overflow: hidden;">
        <a href="/" class="btn btn-primary">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
        </a>
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="{{ asset('template/img/login.jpeg') }}" class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <div class="card-body p-5 text-center">
                    <h2 class="fw-bold mb-2 text-uppercase" style="font-family: 'Tahoma'">SELAMAT DATANG</h2>
                    <p class="text-dark-50 mb-5">Silahkan Daftarkan Akun Anda !!!</p>
                    @if (session()->has('registerSuccess'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('registerSuccess') }}
                        </div>
                    @endif
                    <form method="post" action="" class="user">
                        @csrf
                        <div class="form-outline mb-4 form-group">
                            <input type="text" name="name" id="name" aria-describedby="nameHelp"
                                placeholder="Nama Lengkap..." class="form-control form-control-user">
                        </div>
                        <!-- Email input -->
                        <div class="form-outline mb-4 form-group">
                            <input type="email" name="email" id="email" aria-describedby="emailHelp"
                                placeholder="Alamat E-Mail..." class="form-control form-control-user">
                        </div>

                        <div class="row">
                            <div class="col-md-6 pb-2">
                                <div class="form-outline mb-4 form-group">
                                    <input type="password" name="password" id="password"
                                        aria-describedby="passwordHelp" placeholder="Password"
                                        class="form-control form-control-user">
                                </div>
                            </div>
                            <div class="col-md-6 pb-2">
                                <div class="form-outline mb-4 form-group">
                                    <input type="password" name="password2" id="password2"
                                        aria-describedby="passwordHelp" placeholder="Confirmation Password"
                                        class="form-control form-control-user">
                                </div>
                            </div>
                        </div>
                        <!--Role Input-->
                        <div class="form-group">
                            {{-- <input type="hidden" name="siswa_id" value="{{ $siswa->id }}"> --}}
                            <label for="id_role">Role / Status</label>
                            <select class="form-select form-control" id="id_role" name='id_role'>
                                <option value="">Pilih Role Anda</option>
                                @foreach ($role as $item)
                                    <option value="{{ $item->id }}">{{ $item->role }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- Submit button -->
                        {{-- <input type="submit" width="" value="Login" class="btn btn-primary btn-lg btn-block">
                        <input type="submit" width="" value="Login" class="btn btn-primary btn-lg btn-block"> --}}
                        <div class="row justify-content-center">
                        <div class="form-group">
                                <button type="submit" value="SIGN UP" class="btn text-light btn"
                                    style="background:#6b5b95; width:350px">SIGN UP</button>
                        </div>
                    </div>
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
