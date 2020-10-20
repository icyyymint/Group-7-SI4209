<!DOCTYPE html>
<html>
<head>
	<title>Telkom Cat Rescue - Donasi</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style>
		body{
			background-image: url(background.png);
			background-size: cover;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">
	  	<img src="logo.png" class="img-fluid" width="150" height="100" alt="">
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav">
	      <a class="nav-link" href="#">Home</a>
	      <a class="nav-link" href="#">Adopt</a>
	      <a class="nav-link active" href="#">Donate <span class="sr-only">(current)</span></a>
	      <a class="nav-link" href="#">Blog</a>
	      <a class="nav-link" href="#">Contact</a>
	    </div>
	    <div class="form-inline ml-auto">
	    	<button class="btn btn-outline-danger mr-3" type="button">Login</button>
	    	<button class="btn btn-danger" type="button">Sign Up</button>
	    </div>
	  </div>
	</nav>

	<div class="container mt-5 mb-5" >
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6 justify-content-center" style= "background-color: #ffdbcc" >
				<form class="mr-4 ml-4" action="InvoiceDonasi.php" method="get">
					<div class="form-group mt-4">
						<label for="Nominal">Isi Nominal Donasi</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text" id="btnGroupAddon">Rp</div>
							</div>
							<input type="text" class="form-control" name="Nominal" placeholder="Masukkan Nominal ">
						</div>
						<small class="text-muted" id="Nominal">Minimal donasi Rp. 25.000</small>
					</div>
					<div class="form-group">
						<label for="MetodeBayar">Pilih Metode Pembayaran</label>
						<select id="MetodeBayar" class="form-control" name="MetodeBayar">
							<option selected disabled value="">---</option>
							<option>Transfer BRI</option>
							<option>Transfer BCA</option>
							<option>Transfer BNI Syariah</option>
							<option>Transfer Mandiri</option>
						</select>
					</div>
					<hr class="mt-4">
					<div class="form-group">
						<h6>Masukkan identitas kamu</h6>
						<label for="Nama">Nama</label>
						<input type="text" class="form-control" name="Nama" placeholder="Nama Lengkap">
						<small class="ml-4">
						<input type="checkbox" class="form-check-input" id="anonymous">
    					<label class="form-check-label text-muted" for="anonymous">Sembunyikan nama (Cat Lover) </label>
						</small>
					</div>
					<div class="form-group">
						<label for="E-mail">E-mail</label>
						<input type="text" class="form-control" name="Email" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="NoHP">No. Telpon</label>
						<input type="text" class="form-control" name="NoHP" placeholder="Nomor Aktif Anda">
					</div>
					<p>or login <a href="">here</a></p>
					<input type="submit" name="submit" value="Donasi"class="btn btn-danger btn-lg btn-block mb-4">
				</form>
			</div>
		</div>
	</div>
</body>
</html>