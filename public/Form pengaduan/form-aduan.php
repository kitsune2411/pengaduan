<?php $judul="FORM PENGADUAN"; include "../templates/header.php"; 
require "upload-aduan.php";

$user = $_SESSION['username'];

if (isset ($_POST['submit'])) {
  if (tambah($_POST)>0) {
    header("Refresh: 1; URL=pengaduan.php");
    echo "
    <script>
    alert('data berhasil dimasukan');
    </script>
    ";
    exit;
  }
  else {
    
  }

}

?>

   
    <!-- CSS -->
    <link rel="stylesheet" href="form.css">
 


     <!--JUMBOTRON-->
     <section class="jumbotron text-center">
        <div class="container">
            <h1 class="display-6"><h2 class="pekok">Selamat datang, <?=$user;?></h2></h1>
            <p class="lead">Laporkan keluhan anda di form pengisian berikut</p>
            <a href="#form"><i class="fas fa-chevron-down" style="font-size:75px; color:coral"></i></a>
        </div> 
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path id="form" fill="#FFFFFF" fill-opacity="1" d="M0,96L48,106.7C96,117,192,139,288,138.7C384,139,480,117,576,112C672,107,768,117,864,133.3C960,149,1056,171,1152,176C1248,181,1344,171,1392,165.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section >
    <!--FORM-->
<section >
  <div class="container" >
    <div class="card">
      <div class="card-header">
        <h2>Form Pengaduan</h2>
      </div>
      <div class="card-body mt-3">
       <form action="" method="post" enctype="multipart/form-data"> 
         <?php
          $sql = "SELECT * FROM masyarakat WHERE username = '$user'";
          $stmt = mysqli_query($conn,$sql);
        
          while ($row = mysqli_fetch_assoc($stmt)) {         ?>
         <input type="hidden" name="nik" value="<?=$row['nik']; } ?>">
        <div class="form-group row">
          <label for="pesan" class="col-sm-2 col-form-label">Massage :</label>
          <div class="col-sm-10">
            <textarea name="pesan" class="form-control" id="exampleFormControlTextarea1" rows="7" required></textarea>
          </div>
        </div>
        <div class="form-group row">
          <label for="tambahan" class="col-sm-2 col-form-label">Attachment :</label>
          <div class="col-sm-10">
            <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1" required>
          </div>
        </div>

        <button type="submit" name="submit" class="btn btn-warning float-end mt-3 ms-2"  style="color:white; width:83.78px" name="submit">Save</button>
      <button type="cancel" onclick="window.location='../Home/home.php';return false;" class="btn btn-custom float-end mt-3 me-2">Cancel</button>
      </form>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#EDEDED" fill-opacity="1" d="M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</section>

<?php include "../templates/footer.php"; ?>