@extends('admin')
@section('konten')
<h1>Pesan dari Customer</h1>
<table class="table">
		<tr>
			<th scope="col">id</th>
			<th scope="col">Alamat Email</th>
			<th scope="col">Pesan customer</th>
			<th scope="col">Tgl Masuk</th>
			<th scope="col">Aksi</th>
			
		</tr>
		@foreach($customer as $p)
		<tr>
			<td scope="row">{{ $p->id_customer }}</td>
			<td>{{ $p->alamat_email }}</td>
			<td>{{ $p->pesan_customer }}</td>
			<td>{{ $p->tanggal_masuk }}</td>
			<td>
				
				<a href="/admin_komentar/hapus/{{ $p->id_customer  }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection