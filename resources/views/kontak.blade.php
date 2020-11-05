<!-- Menghubungkan dengan view template master -->
@extends('master')
@section('konten')
 
	<div class="container-fluid">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3317.245750379339!2d115.28315105381677!3d-8.606343124078633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xea1535302753086a!2sBalai%20Banjar%20Buluh!5e0!3m2!1sen!2sid!4v1604479185811!5m2!1sen!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		<h2 class="text-theme1 mt-4 w-under text-center mx-auto font-weight-bold">Kontak Kami</h2>
		<form action="" class="form-kontak mt-4 ">
			<div class="form-group mt-4">
				<label for="exampleInputEmail1 " class="font-weight-bold  text-theme1">Alamat Email</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				<small id="emailHelp" class="form-text text-muted">Kami akan menjaga privasi anda</small>
			</div>
			<div class="form-group">
				<label for="exampleFormControlTextarea1 " class="font-weight-bold  text-theme1">Mari Bekerjasama</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			</div>
			<button type="submit" class="btn btn-lg btn-block btn-theme ">Kirim</button>
		</form>
		<h2 class="text-theme1 mt-4 w-under text-center mx-auto font-weight-bold mt-5">Social Media</h2>
			<!-- <div class="container"> -->
				<div class="row mt-5 mb-5">
					<div class="col-sm text-center mt-1">
						<a href="" class="text-center text-theme1 h2"><i class="fab fa-instagram-square  pr-3"></i>Instagram</a>
					</div>
					<div class="col-sm text-center mt-1">
						<a href="" class="text-center text-theme1 h2"><i class="fab fa-facebook-square  pr-3"></i>Facebook</a>
					</div>
					<div class="col-sm text-center mt-1">
						<a href="" class="text-center text-theme1 h2"><i class="fab fa-twitter-square  pr-3"></i>Twitter</a>
					</div>
				</div>
			<!-- </div> -->


	</div>
 
@endsection