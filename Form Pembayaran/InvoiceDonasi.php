<!DOCTYPE html>
<html>
<head>
	<title>Telkom Cat Rescue - Donasi</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
	      <a class="nav-link active" href="Form Pembayaran.php">Donate <span class="sr-only">(current)</span></a>
	      <a class="nav-link" href="#">Blog</a>
	      <a class="nav-link" href="#">Contact</a>
	    </div>
	    <div class="form-inline ml-auto">
	    	<button class="btn btn-outline-danger mr-3" type="button">Login</button>
	    	<button class="btn btn-danger" type="button">Sign Up</button>
	    </div>
	  </div>
	</nav>

	<?php 
	$Nominal		= $_GET['Nominal'];
	$Metode			= $_GET['MetodeBayar'];
	$Nama 			= $_GET['Nama'];
	$Email 			= $_GET['Email'];
	$NoHP 			= $_GET['NoHP'];
	 ?>	

	 <div class="container mt-5 mb-5">
	 	<div class="row">
	 		<div class="col-sm-3"></div>
			<div class="col-sm-6" style= "background-color: #ffdbcc" >
				<h5 class="text-center mt-4">Invoice Donasi</h5>
				<br>
				<table class="table">
					<tbody>
						<tr>
							<td>Nomor Invoice</td>
							<td class="text-center"><?php echo rand(); ?></td>
						</tr>
						<tr>
							<td>Metode Pembayaran</td>
							<td class="text-center"><?php echo $Metode; ?></td>
						</tr>
						<tr>
							<td>Rekening Bank</td>
							<td class="text-center">
								<?php 
								if ($Metode == 'Transfer BRI') {
									echo "020601087166506";
								} elseif ($Metode == 'Transfer BCA') {
									echo "1126281020106220";
								} elseif ($Metode == 'Transfer BNI Syariah') {
									echo "8660281020104702";
								} elseif ($Metode == 'Transfer Mandiri') {
									echo "89039021406752";
								}
								?>
							</td>
						</tr>
						<tr>
							<td>Atas Nama</td>
							<td class="text-center">Telkom Cat Rescue</td>
						</tr>
						<tr>
							<td>Total Donasi</td>
							<td class="text-center"><?php echo 'Rp. ' . $Nominal; ?></td>
						</tr>
					</tbody>
				</table>
				<p>Silahkan transfer sesuai dengan jumlah dan rekening yang tertera di atas.</p>			
				<input type="submit" name="submit" value="Konfirmasi Pembayaran"class="btn btn-danger btn-block center mb-5">	
			</div>
	 	</div>
	 </div>
</body>
</html>