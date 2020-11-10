@extends('master')
@section('konten')

<div class="container-fluid">
    @foreach($produk as $p)
    <div class="card">
        <img src="{{ $p->gambar_produk }}" class="card-img-top" alt="..." loading="lazy">
        <div class="card-body">
            <h5 class="card-title">{{ $p->nama_produk }}</h5>
            <p class="card-text">{{ $p->deskripsi_produk }}</p>
            <p class="card-text harga">$ {{ $p->harga_produk }}</p>
            <a href="https://wa.me/6287752375904?text=saya%20tertarik%20dengan%20karya%20seni%20Anda%20" class="btn btn-primary btn-doni">Beli Sekarang</a>
        </div>
    </div>
    @endforeach
</div>

@endsection
