<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah anda sudah yakin, {{ Auth::user()->name }} ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Klik tombol "Keluar" jika anda sudah yakin.</div>
            <div class="modal-footer">
                <form action="/logout" method="POST">
                    @csrf
                    {{-- @method('put') --}}
                    <button class="btn btn-success" type="button" data-dismiss="modal">Batal</button>
                    <input type="submit" value="Keluar" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('mazer/js/initTheme.js')}}"></script>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('template/vendor/jquery/jquery.min.js') }} "></script>
<script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>

<script src="{{asset('mazer/js/bootstrap.js')}}"></script>
<script src="{{asset('mazer/js/app.js')}}"></script>
