<!DOCTYPE html>
<html lang="en">

<head>
    @include('layoutsiswa.css')
</head>

<body>
    <div class="container-fluid page-body-wrapper">
        <div class="container-scroller">

            @include('layoutsiswa.navbar')

            @include('layoutsiswa.sidebar')

            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
            </div>

            <footer class="footer">
                @include('layoutsiswa.footer')
            </footer>

        </div>
    </div>


    <!-- plugins:js -->
    @include('layoutsiswa.script')


</body>

</html>
