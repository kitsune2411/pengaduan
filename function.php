<?php
$conn = mysqli_connect('localhost', 'root', '', 'test_urms');

function registrasi($regis)
{
    global $conn;

    // 	
    // menggunakan fungsi untuk menghapus slash saat memasukan usename

    $NIK = htmlspecialchars($regis["NIK"]);
    $Nama = htmlspecialchars($regis["nama"]);
    $username = strtolower(stripcslashes($regis["username"]));
    //mysqli real escape digunakan untuk user bisa menambahkan spesial character dan juga perlu mysqli connect untuk masuk
    $password = md5(mysqli_real_escape_string($conn, $regis["password"]));
    $confirm = md5(mysqli_real_escape_string($conn, $regis["confirm"]));
    $email = htmlspecialchars($regis["email"]);
    $nomor = htmlspecialchars($regis['nomor']);
    //mengecek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM masyarakat WHERE username ='$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
				alert('Username Sudah Ada');
			</script>";
        return false;
    }
    $result = mysqli_query($conn, "SELECT nik FROM masyarakat WHERE nik = '$NIK'  ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
				alert('NIK Sudah Ada');
			</script>";
        return false;
    }

    $result = mysqli_query($conn, "SELECT email FROM masyarakat WHERE email = '$email'  ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
				alert('email Sudah Ada');
			</script>";
        return false;
    }

    if ($password !== $confirm) {
        echo "
			<script>
				alert('PASSWORD ANDA TIDAK SAMA');
			</script>
			";
        return false;
    }

    //mengenskripsi password


    // memasukan data ke database

    mysqli_query($conn, "INSERT INTO masyarakat  VALUES ('$NIK','$Nama','$username','$password','$nomor','$email')");
    return mysqli_affected_rows($conn);
}
