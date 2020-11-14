@extends('admin')
@section('konten')
<h1>Input Data Produk</h1>
    <form action="/admin_konten/store" method="POST" class="mt-4">
		{{ csrf_field() }}
		<div class="form-group  col-lg-12"> 
            <label for="exampleFormControlInput1">Nama Produk</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Produk" name="nama_produk">
        </div>
		<div class="form-group   col-lg-12">
            <label for="exampleFormControlInput1">Harga Produk</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Harga  Produk" name="harga_produk">
        </div>

        <div class="form-group  col-lg-12">
            <label for="exampleFormControlTextarea1">Deskripsi Produk</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi_produk"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Gambar Produk </label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar_produk">
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>



    <h1 class="mt-5">List Produk</h1>
    <table class="table mt-5">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Gambar Produk</th>
			<th scope="col">Nama Produk</th>
			<th scope="col">Deskripsi Produk</th>
			<th scope="col">Harga Produk</th>
			<th scope="col">Rating Produk</th>
			<th scope="col">Tgl Masuk</th>
			<th scope="col">Aksi</th>
			
		</tr>
		@foreach($produk as $p)
		<tr>
			<td scope="row">{{ $p->id }}</td>
			<td><img src="img/{{ $p->gambar_produk }}" alt="" class="thumbnail"></td>
			<td>{{ $p->nama_produk }}</td>
			<td>{{ $p->deskripsi_produk }}</td>
			<td class="text-danger font-weight-bold">$ {{ $p->harga_produk }}</td>
			<td >{{ $p->rating_produk }}</td>
			<td>{{ $p->tanggal_masuk }}</td>
			<td>
			<button type="button" class="btn btn-danger"><a href="/admin_konten/hapus/{{ $p->id }}">Hapus</a></button>
			<button type="button" class="btn btn-primary mt-2"><a href="/admin_konten/edit/{{ $p->id }}">Edit</a></button>	
				
			</td>
		</tr>
		@endforeach
	</table>

@endsection