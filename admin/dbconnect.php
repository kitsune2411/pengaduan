<?php
$hostmysql = "localhost";
$username = "root";
$password = "";
$database = "test_urms";
$conn = mysqli_connect ($hostmysql, $username, $password, $database);
if ($conn){
 echo "<b> Berhasil </b>";
}
else{
 echo ("<b> Gagal </b>");
}
?>