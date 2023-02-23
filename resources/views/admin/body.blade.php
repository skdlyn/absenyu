<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - Mazer Admin Dashboard</title>

@include('admin.css')
</head>

<body>
    <script src="assets/js/initTheme.js"></script>
    <div id="app">
        <div id="sidebar" class="active">
            @include('admin.sidebar')
            
        </div>


        <div id="main">
            <h3>@yield('header')</h3>

            <div class="page-content">
                @yield('content')
            </div>

        </div>
    </div>

    @include('admin.script')

</body>

</html>
