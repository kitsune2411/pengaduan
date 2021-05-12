<?php
require("function.php");
//mengecek kalau tombol submit dipencet maka ...
if (isset($_POST["submit"])) {

    // mengecek data masuk atau tdak 
    if (registrasi($_POST) > 0) {
        header("location:index.php");
		
    }
    // kalau data tidak masuk atau error
    else {
        mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html>

<head>
<title>Pengaduan Masyarakat</title>
	<link rel="shortcut icon" href="https://cepatpilih.com/image/logo.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<link href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">


</head>

<body>
<div class="container">
	<div class="jumbutron">
<div class="card mt-5 mb-3 pb-n3" style="padding: 50px; width: 80%; margin: 0 auto;">
        <div class="justify-content-center">
            <h1 class="text-center orange-text">Registrasi</h1>

            <form action="" method="post">
                <div class="form-group">
                    <label for="NIK">NIK</label>
                    <input type="text" name="NIK" class="form-control" id="NIK" required="" ; placeholder="masukan NIK">
                    <label for="Nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="Nama" required="" ; placeholder="masukan No nama">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" required="" ; placeholder="masukan username">
                    <label for="password">password</label>
                    <input type="password" name="password" class="form-control" id="password" required=; placeholder="masukan password">
                    <label for="confirm"> Confirm password</label>
                    <input type="password" name="confirm" class="form-control" id="confirm" required="" ; placeholder="masukan ulang">
                    <hr>
                    <label for="Email">Email</label>
                    <input type="text" name="email" class="form-control" id="Email" required="" ; placeholder="masukan No Email">
                    <label for="nomor">Nomor Telepon</label>
                    <input type="text" name="nomor" class="form-control" id="nomor" required="" ; placeholder="masukan No nomor">
                    <hr>
                    <button type="submit" class="btn orange float-right" name="submit" style="width:100%">DAFTAR</button><br>
                    <p class="text-center mt-5">sudah punya akun? <a href="index.php">Login</a></p>


                </div>
            </form>
        </div>
    </div>
</div>
</div>

</body>

</html>