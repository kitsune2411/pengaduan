<?php $judul="Profil"; include "../core.php"; include "../templates/header.php";  $username = $_SESSION['username']; ?>

<div class="container mt-5">
    <h3 class="text-center">Info Pribadi</h3>
    <p class="text-center">Info dasar, seperti nama dan foto, yang Anda gunakan di layanan Google</p>
</div>

<div class="container mt-5" style="border: 3px solid #F7882F ; border-radius:15px; width:50%">
    <h4 class="mt-3">Info Dasar</h4>
    <p>Beberapa info mungkin terlihat oleh orang lain yang menggunakan ini.</p>
    <table class="table table-borderless table-sm">
    <tbody>
    <?php
    $stmt = $pdo->prepare("SELECT * FROM `petugas` WHERE username = '$username' "); 
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) :
    ?>
    <tr style="border-bottom: 3px solid #F7882F;" >
        <th scope="row" style="width:40%;" class="py-4">Nama</th>
        <td class="py-4"><?= $row['nama_petugas'];?></td>
        
    </tr>
    <tr style="border-bottom: 3px solid #F7882F;">
        <th scope="row" class="py-4">Username</th>
        <td class="py-4"><?= $row['username'];?></td>
        
    </tr>
    <tr style="border-bottom: 3px solid #F7882F;" >
        <th scope="row" class="py-4">ID Petugas</th>
        <td class="py-4"><?= $row['id_petugas'];?></td>
        
    </tr>
    
    <tr style="border-bottom: 3px solid #F7882F;">
        <th scope="row" class="py-4">No. Handphone</th>
        <td class="py-4"><?= $row['telp'];?></td>
        
    </tr>
    <tr  >
        <th scope="row" class="py-4">Jabatan</th>
        <td class="py-4"><?= $row['level'];?></td>
        
    </tr>
    
    <?php endwhile; ?>
    </tbody>
    </table>
</div>
<button type="button" onclick="window.location='form-edit-profile.php';return false;" class="btn mt-4 text-center d-grid gap-2 col-6 mx-auto mb-5" style="color:white;background-color:#F7882F;width:50%">Edit Profile</button>

<?php include "../templates/footer.php"; ?>