<?php

$conn = mysqli_connect('localhost','root','','test_urms');

function upload()
{
	$namaFile = $_FILES["gambar"]["name"];
	$ukuranFile = $_FILES["gambar"]["size"];
	$error = $_FILES["gambar"]["error"];
	$tmpname = $_FILES["gambar"]["tmp_name"];
	// mengecek apakah tidak ada gambar yang diupload
	if ($error === 4) {
		echo "
			<script>
				alert('masukan gambar dahulu');
			</script
		";

		return false;
	}
	//mengecek ekstensi file apakah jpg atau bukan / file apa saja yg boleh di upload
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	//memecah ekstensi dan mengambil ekstensi paling belakang dan mengubah string menjadi kecil
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "
			<script>
				alert('yang anda upload bukan sebuah gambar');
			</script>
		";
	}

	// cek jika ukurannya terlalu besar
	if ($ukuranFile > 90000000) {
		echo "
			<script>
				alert('yang anda upload terlalu besar bang');
			</script>
		";
		return false;
	}
	//misalnya lolos pengeceakan maka upload file
	//generate nama baru
	$namaFilebaru = uniqid();
	$namaFilebaru .= '.';
	$namaFilebaru .= $ekstensiGambar;

	move_uploaded_file($tmpname, '../../img/' . $namaFilebaru);


	return ($namaFilebaru);
}


function tambah($isi)
{
	global $conn;

	// amb;il data daritiap elemen form
	$nama = htmlspecialchars($isi["pesan"]);
    $time  = time();
    $Tgl   = date('Y-M-d',$time); 
	$nik = htmlspecialchars($isi['nik']);
        

	//upload gambar terlebih dahulu
	$gambar = upload();
	if (!$gambar) {
		return false;
	}


	//memasukan Query
	$query = "INSERT INTO pengaduan  VALUES ('', CURRENT_DATE() ,'$nik','$nama','$gambar','0')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}



?>
