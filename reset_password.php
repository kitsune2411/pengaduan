<?php
//nama databasenya
$conn = mysqli_connect('localhost', 'root', '', 'test_urms');
//ambil link dari hak forgot pass
$pass = $_GET["reset"];
$id = $_GET["key"];

// cek data sudah di set apa belum
if (!isset($id, $pass)) {
    header("location: index.php");
}


// apakah tombol submit pernah di pencet atau belum ?
if (isset($_POST["submit_password"])) {

    $pass = md5(htmlspecialchars($_POST['pass']));
    $confirm = md5(htmlspecialchars($_POST['con_password']));


    $query = "UPDATE masyarakat SET 'password'='$pass' WHERE email = '$id' ";
    if ($pass !== $confirm) {
        echo "<script> 
        alert('password tidak sama bangg :)');
        document.location.href ='' 
        </script>";
        return false;
    }
    mysqli_query($conn, $query);
    $row = mysqli_affected_rows($conn);
    


    // kita lihat apakah data diubah atau tidak
    if ($row > 0) {
        echo "
			<script> 
			alert('data masukkk bangg :)');
			document.location.href ='' 
			</script>";
    } else {
        echo "
			<script> 
			alert('data gagal masuk :)');
			document.location.href ='#' 
			</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="regis.css">
</head>

<body>

    <div class="container">
        <div class="justify-content-center">
            <h1 class="text-center">Registrasi</h1>

            <form action="" method="post">
                <div class="form-group">
                    <label for="password">password</label>
                    <input type="password" name="pass" class="form-control" id="password" required="" ; placeholder="masukan password">
                    <label for="con_password">Confrim password</label>
                    <input type="password" name="con_password" class="form-control" id="con_password" required="" ; placeholder="masukan Confirm password">
                    <hr>
                    <button type="submit" class="btn btn-primary" name="submit_password">DAFTAR</button>
                    <P>sudah punya akun?langsung <span class="gede"><a href="index.php"><br>login</a></span></P>


                </div>
            </form>
        </div>
    </div>

</body>

</html>