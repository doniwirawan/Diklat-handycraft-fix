<!doctype html>
<html>

<head>
    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
</head>

<body>
    <aside id="sidebar">
        <i class="fas fa-times desktop-none close-sidebar fa-3x"></i>
        <img src="{{ URL::to('img/logo.png') }}" alt="" class="logo">
        <a href="{{ url('/') }}" class="active"><i class="fas fa-home m-3 "></i>Beranda</a>
        <a href="{{ url('toko') }}"><i class="fas fa-store m-3"></i>Toko</a>
        <a href="{{ url('kontak') }}"><i class="fas fa-address-book m-3"></i>Kontak</a>
    </aside>
    <nav >
        <img src="{{ URL::to('img/avatar.jpg') }}" alt="" class="avatar ml-2">
        <form action="">
            <div class="input-group mb-3 mt-2 ml-4 ">
                <input type="text" class="form-control " placeholder="Cari Barang Anda..."
                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                <button type="submit" class="input-group-text"><i class="fas fa-search  fa-2x"></i></button>
            </div>
        </form>
        <div class="icon ml-auto ">
            <a href=""><i class="fas fa-bell fa-2x m-2"></i></a>
            <a href=""><i class="fas fa-shopping-cart fa-2x m-2"></i></a>
        </div>
        <i class="fas fa-bars desktop-none fa-3x" id="toggle-nav"></i>
    </nav>
    <div class="main-content">
        <div class="content">
            
           @yield('konten')


        </div>
    </div>
</body>

</html>
