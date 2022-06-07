<?php
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if (isset($_SESSION['status'])) {
	header("location:index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />

	<title>SIAP-bayar Login</title>

	<link href="logo/siap-bayar4.png" rel="shortcut icon" type="image/png">
	<!-- Custom fonts for this template-->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

	<!-- Custom styles for this template-->
	<link href="css/sb-admin-2.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/style.css">
</head>


<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-lg-7">

	<div class="card o-hidden border-0 shadow-lg my-5">
	  <div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
							<div class="col-lg">
								<div class="p-4">
									<div class="text-center">
										<img src="logo/perancangan prak mobile 1.png" alt="logo-image" class="img-circle">
										<h1 class="h4 text-gray-900 mb-0"><b>SIAP</b>-<em>bayar</em></h1>
										<p class="mb-1"><em class="text-primary">Sistem Informasi Pembayaran SPP Online</em></p>
										<!--<p class="lead text-gray-900 mb-3">MTS TARBIYATUL AULAD PATI</p> -->
										<hr>
										<h1 class="h4 text-gray-900">Halaman Login</h1>
									</div>
									<form action="login_.php" method="post" onSubmit="return validasi()">
										<div class="form-group">
											<input type="text" name="username" class="form-control form-control-user" id="username" aria-describedby="usernameHelp" placeholder="Username" />
										</div>
										<div class="form-group">
											<input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Password" />
										</div>
										<!-- <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div> -->
										<a><input type="submit" value="Login" name="simpan" class="btn btn-primary btn-user btn-block" />
										</a>
										<!-- <hr /> -->
										<!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with
                      Facebook
                    </a> -->
									</form>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="js/sb-admin-2.min.js"></script>

	<!-- Script Login -->
	<script type="text/javascript">
		function validasi() {
			var username = document.getElementById("username").value;
			var password = document.getElementById("password").value;
			if (username != "" && password != "") {
				return true;
			} else {
				alert("Username dan Password harus di isi !");
				return false;
			}
		}
	</script>

</body>

</html>