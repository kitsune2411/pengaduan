<?php include "../core.php" ; $judul="Tanggapan"; include "../templates/header.php"; $username=$_SESSION['username']; $id_aduan=$_GET['id']; ?>

<!--FORM-->
<section>
  <div class="container mt-5">
        <h2 id="form">Form Tanggapan</h2>
        <hr style="color: #F7882F; height: 3px;">
    
       <form action="upload-tanggapan.php" method="post" enctype="multipart/form-data" class="mt-5"> 
         <?php
         $stmt = $pdo->prepare("SELECT * FROM `petugas` WHERE username = '$username' "); 
         $stmt->execute();
     
         while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                  
        ?>
         <input type="hidden" name="id_petugas" value="<?=$row['id_petugas']; } ?>">
         <input type="hidden" name="id_aduan" value="<?=$id_aduan; ?>">
        <div class="form-group row">
          <label for="pesan" class="col-sm-2 col-form-label">Massage :</label>
          <div class="col-sm-10">
            <textarea name="isi" class="form-control" id="exampleFormControlTextarea1" rows="7" required></textarea>
          </div>
        </div>

        <button type="submit" name="submit" class="btn btn-warning float-end mt-3 ms-2"  style="color:white; width:83.78px" name="submit">Save</button>
      <button type="cancel" onclick="window.location='detail-pengaduan.php?id=<?=$id_aduan?>';return false;" class="btn btn-custom float-end mt-3 me-2">Cancel</button>
      </form>
      </div>
    
</section>