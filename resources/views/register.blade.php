<title>Register</title>
<link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">

<link rel="stylesheet" href="">

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
                    @if (session()->has('registerError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('registerError') }}
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
                        <div class="form-group">
                            {{-- <input type="hidden" name="siswa_id" value="{{ $siswa->id }}"> --}}
                            <label for="id_guru">Role / Status</label>
                            <select class="form-select form-control" id="id_guru" name='id_guru'>
                                <option value="">Pilih Role Anda</option>
                                @foreach ($user as $item)
                                    <option value="{{ $item->id }}">{{ $item->role }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- Submit button -->
                        {{-- <input type="submit" width="" value="Login" class="btn btn-primary btn-lg btn-block">
                        <input type="submit" width="" value="Login" class="btn btn-primary btn-lg btn-block"> --}}
                      <input type="submit" name="register" value="REGISTRASI" class="btn btn-primary w-100"id="register">
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
