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
    <div class="container-fluid bg-image">
        <div class="login-box align-middle">
            <h2 class="text-theme1 mt-4 w-under text-center mx-auto font-weight-bold">Login</h2>
            <form action=""class="mt-5">
                <div class="form-group">
                    <label for="exampleInputEmail1" class="font-weight-bold  text-theme1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="font-weight-bold  text-theme1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                
                <button type="submit" class="btn btn-lg btn-block btn-theme ">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>
