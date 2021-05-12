<?php

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['submit_email'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'test_urms');
    $email = htmlspecialchars($_POST['email']);
    $result = "SELECT 'email', 'password'  FROM masyarakat WHERE email = '$email'";
    $hasil = mysqli_query($conn, $result);

    if (mysqli_num_rows($hasil) == 1) {
        while ($row = mysqli_fetch_assoc($hasil)) {
            $email = htmlspecialchars($row['email']);
            $pass = md5($row['password']);
        }
        require 'vendor/autoload.php';
        $mail = new PHPMailer();

        $body = "Klik link untuk mengganti password <a href='http://localhost/pkl/pengaduan-masyarakat-prototype/reset_password.php?reset=$pass&key=$email'>$pass</a>";
        $mail->CharSet = "utf-8";
        $mail->IsSMTP();
        //authentification
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465; //465 or 587
        $mail->SMTPDebug = 1;
        $mail->SMTPAuth = true;
        //gmail username
        $mail->Username = "isagaul1z2@gmail.com";
        //gmail password
        $mail->Password = "makbogila123";
        //sets Gmail as the SMTP server
        $mail->From = "isagaul1z2@gmail.com";
        $mail->FromName = "TIM backend";

        $email = $_POST['email'];
        $mail->AddAddress($email);
        $mail->Subject = "reset password";
        $mail->IsHTML(true);
        $mail->MsgHTML($body);
        if ($mail->send()) {
            $masuk = "<script>
                alert('data masuk');
                document,location.href =  'login.php';
            </script>";
            echo $masuk;
        } else {
            echo "mail Error - >" . $mail->ErrorInfo;
        }
    } else {
        echo "Email anda tidak terdaftar";
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
    <link rel="shortcut icon" href="https://cepatpilih.com/image/logo.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<link href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
</head>

<body>
    <div class="container mt-5">
    <div class="jumbutron">
    <div class="card" style="padding: 50px; width: 80%; margin: 0 auto;">
        <div class="justify-content-center">
            <h1 class="text-center orange-text">Forgot Password</h1>

            <form action="forgotpassword.php" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" required="" ; placeholder="masukan email">
                    <hr>
                    <button type="submit" class="btn orange" name="submit_email">submit</button>
                    <p class="text-center"><a href="index.php">Login</a></p>
                </div>
            </form>
        </div>
        </div>
    </div>
    </div>


    </form>

</body>

</html>