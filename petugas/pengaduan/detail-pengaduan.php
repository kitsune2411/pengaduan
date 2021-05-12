<?php 
require "../core.php";
$judul = "Detail pengaduan";
include "../templates/header.php";


  $id = $_GET['id'];
?>

<style>
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>

<div class="container mt-5">
<h3><span style="font-size:45px;color:orange;">Pengaduan</span> Detail </h3>

  <ul class="nav justify-content-end">
    <li class="nav-item">
      <a class="nav-link active" href="pengaduan.php">Kembali ke daftar</a>
    </li>
  </ul>

  <hr style="color: #F7882F; height: 3px;">

  <h3>Detail Massage</h3>

  <p class="text-justify mt-4">
  <?php 
    $stmt = $pdo->prepare("SELECT * FROM `pengaduan` WHERE id_pengaduan = $id "); 
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $nik = $row['nik'];
      $status = $row['status'];
      $i = $pdo->prepare("SELECT * FROM `masyarakat` WHERE nik= $nik");
      $i->execute();
      while ($r = $i->fetch(PDO::FETCH_ASSOC)) {
        echo "Pengirim : ". $r['nama'] . " (" . $r['nik'] . ")";
      }
      echo "<br>";
      if($row['status'] == '0'){echo "Status : terkirim";} 
          elseif($row['status'] == 'proses'){echo "Status : diproses";}
          elseif($row['status'] == 'selesai'){echo "Status : selesai";} 
          else echo "erorr";
      echo "<br>";
      echo "Pesan :";
      echo "<div class='container ps-5' style='padding-right:5%;text-align: justify;text-justify: inter-word;'>";
      echo $row['isi_laporan']; 
      echo "</div>";
  ?> 
  </p>
  <hr style="color: #F7882F; height: 3px;">

  <h3>Attachment<h3>

  <img id="myImg" src="../../img/<?= $row['foto'];?>" alt="" style="width:100%;max-width:300px"> 

  <div id="myModal" class="modal">
    <span class="close">&times;</span>
    <!-- Modal Content (The Image) -->
    <img class="modal-content" id="img01">
  </div>

  <?php } ?>
  <hr style="color: #F7882F; height: 3px;">
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button id="btnn-tanggapi" class="btn btn-warning me-md-2" type="button"  onclick="location.href='form-tanggapan.php?id=<?=$id?>'">Tanggapi</button>
  </div>
  <h3 class="mt-n5">Tanggapan</h3>
  <p class="text-justify mt-4">
  <?php 
    $s = $pdo->prepare("SELECT * FROM `tanggapan` WHERE id_pengaduan = $id "); 
    $s->execute();
    while ($row = $s->fetch(PDO::FETCH_ASSOC)) {
      $id_petugas = $row['id_petugas'];
      $id_tanggapan = $row['id_tanggapan'];
      $i = $pdo->prepare("SELECT * FROM `petugas` WHERE id_petugas= $id_petugas");
      $i->execute();
      while ($r = $i->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="list-group mt-3" style="width:40%">';
        echo '<div class="list-group-item list-group-item-action " aria-current="true">';
        echo '<div class="d-flex w-100 justify-content-between">';
        echo '<h5 class="mb-1">Pengirim : ' . $r["nama_petugas"] . '</h5>';
      }
      echo '<small>'. $row['tgl_tanggapan'] . '</small>';
      echo '</div>';
      echo '<p class="mb-1 ms-2">'. $row['tanggapan'] .'</p>';
      echo '<a href="hapus-tanggapan.php?id='. $id_tanggapan .'&id_aduan='. $id .'"class="float-end"><i class="fas fa-trash" style="color:red"></i></a>';
      echo '</div>';
      echo '</div>';
    } 
  ?> 
  </p>
<script>
  // Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
} 

</script>
<?php
include "../templates/footer.php";
?>