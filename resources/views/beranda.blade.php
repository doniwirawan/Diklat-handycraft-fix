@extends('master')
@section('konten')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach($produk as $p)
        <li data-target="#carouselExampleIndicators" data-slide-to="{{$p->id}}"></li>
        @endforeach
    </ol>
    <div class="carousel-inner">
        @foreach($produk as $p)
        <div class="carousel-item {{ $p->id==1 ? 'active' : '' }}">
            <img src="img/{{ $p->gambar_produk }}" class="d-block w-100" alt="..." loading="lazy">
        </div>
        @endforeach
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


<div class="container-fluid ">
    <div class="row mt-4 row-mobile p-3">
        @foreach($produk as $p)

        <div class="card">
            <img src="img/{{ $p->gambar_produk }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $p->nama_produk }}</h5>
                <p class="card-text">{{ $p->deskripsi_produk }}</p>
                <p class="card-text harga">$ {{ $p->harga_produk }}</p>
                <a href="https://wa.me/6287752375904?text=Saya%20tertarik%20dengan%20Karya%20Seni%20Anda%20" class="btn btn-primary btn-doni">Beli Sekarang</a>
            </div>
        </div>



        @endforeach
    </div>
</div>



@endsection
