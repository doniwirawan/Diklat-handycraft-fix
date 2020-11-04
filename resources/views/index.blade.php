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
    <aside>
    <img src="{{ URL::to('img/logo.png') }}" alt="" class="logo">
        <a href="#" class="active"><i class="fas fa-home m-3 "></i>Beranda</a>
        <a href="#"><i class="fas fa-store m-3"></i>Toko</a>
        <a href="#"><i class="fas fa-address-book m-3"></i>Contact</a>
    </aside>
    <nav>
        <img src="{{ URL::to('img/avatar.jpg') }}" alt="" class="avatar ml-2">
        <form action="">
            <div class="input-group mb-3 mt-2 ml-4 ">
                <input type="text" class="form-control " placeholder="Cari Barang Anda..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                <button type="submit" class="input-group-text"><i class="fas fa-search  fa-2x"></i></button>
            </div>
        </form>
        <div class="icon ml-auto ">
            <a href=""><i class="fas fa-bell fa-2x m-2"></i></a>
            <a href=""><i class="fas fa-shopping-cart fa-2x m-2"></i></a>
        </div>
    </nav>
    <div class="main-content">
        <div class="content">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1569172122301-bc5008bc09c5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1536924940846-227afb31e2a5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1347&q=80" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1570393080660-de4e4a15a247?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1267&q=80" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>


            <div class="container-fluid">
                <div class="row mt-4">
                    <div class="col-sm">
                        <div class="card" style="width: 100%;">
                            <img src="https://images.unsplash.com/photo-1576495169018-bd2414046c6b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1294&q=80" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary btn-doni">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card" style="width: 100%;">
                                <img src="https://images.unsplash.com/photo-1503169483-419b860b9208?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=767&q=80" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary btn-doni">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    <div class="col-sm">
                        <div class="card" style="width: 100%;">
                            <img src="https://images.unsplash.com/photo-1556850003-5adb86031c6b?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary  btn-doni">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row mt-4 mb-4">
                    <div class="col-sm">
                        <div class="card" style="width: 100%;">
                            <img src="https://images.unsplash.com/photo-1576495169018-bd2414046c6b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1294&q=80" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary btn-doni">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card" style="width: 100%;">
                                <img src="https://images.unsplash.com/photo-1503169483-419b860b9208?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=767&q=80" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary btn-doni">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    <div class="col-sm">
                        <div class="card" style="width: 100%;">
                            <img src="https://images.unsplash.com/photo-1556850003-5adb86031c6b?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary  btn-doni">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</body>
</html>