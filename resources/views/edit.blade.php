@extends('admin')
@section('konten')

<h1>Edit Produk</h1>
@foreach($produk as $p)
	<form action="/admin_konten/update" method="post">
		{{ csrf_field() }}
        <div class="form-group  col-lg-12"> 
            <label for="exampleFormControlInput1">id Produk</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama produk" name="id" value="{{ $p->id }}" required="required">
        </div>
        <div class="form-group  col-lg-12"> 
            <label for="exampleFormControlInput1">Nama Produk</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama produk" name="nama_produk" value="{{ $p->nama_produk }}" required="required">
        </div>
        <div class="form-group   col-lg-12">
            <label for="exampleFormControlInput1">Harga Produk</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Harga  produk" name="harga_produk" value="{{ $p->harga_produk }}" value="{{ $p->id }}">
        </div>
        <div class="form-group   col-lg-12">
            <label for="exampleFormControlInput1">Deksripsi Produk</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Harga  produk" name="deskripsi_produk" required="required" value="{{ $p->deskripsi_produk }}">
        </div>

         <!-- <div class="form-group  col-lg-12">
            <label for="exampleFormControlTextarea1">Deskripsi Produk</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi_produk" required="required" value="{{ $p->deskripsi_produk }}"></textarea>
        </div> -->
        <div class="form-group">
            <label for="exampleFormControlFile1">Gambar Produk </label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar_produk" required="required" value="{{ $p->gambar_produk }}" >
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach
@endsection