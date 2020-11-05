@extends('master')
@section('konten')
 
	<div class="container-fluid">
                    @foreach($produk as $p) 
                        <div class="card" >
                            <img src="https://images.unsplash.com/photo-1576495169018-bd2414046c6b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1294&q=80"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $p->nama_produk }}</h5>
                                <p class="card-text">{{ $p->deskripsi_produk }}</p>
                                <a href="#" class="btn btn-primary btn-doni">Go somewhere</a>
                            </div>
                        </div> 
                    @endforeach
                    
 
@endsection