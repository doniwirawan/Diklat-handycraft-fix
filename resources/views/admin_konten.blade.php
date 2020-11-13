@extends('admin')
@section('konten')
<h1>Input Data</h1>
    <form action="/admin_konten/store" method="POST">
		{{ csrf_field() }}
		<div class="form-group  col-lg-12"> 
            <label for="exampleFormControlInput1">Nama Produk</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama produk" name="nama_produk">
        </div>
		<div class="form-group   col-lg-12">
            <label for="exampleFormControlInput1">Harga Produk</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Harga  produk" name="harga_produk">
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
			<th scope="col">id</th>
			<th scope="col">gambar_produk</th>
			<th scope="col">nama produk</th>
			<th scope="col">deskripsi produk</th>
			<th scope="col">harga produk</th>
			<th scope="col">rating produk</th>
			<th scope="col">Tgl Masuk</th>
			<th scope="col">Aksi</th>
			
		</tr>
		@foreach($produk as $p)
		<tr>
			<td scope="row">{{ $p->id }}</td>
			<td>{{ $p->gambar_produk }}</td>
			<td>{{ $p->nama_produk }}</td>
			<td>{{ $p->deskripsi_produk }}</td>
			<td>{{ $p->harga_produk }}</td>
			<td>{{ $p->rating_produk }}</td>
			<td>{{ $p->tanggal_masuk }}</td>
			<td>
				<a href="/admin_konten/hapus/{{ $p->id }}">Hapus</a>
				<a href="/admin_konten/edit/{{ $p->id }}">Edit</a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection