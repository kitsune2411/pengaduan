<?php $judul= "Dashboard"; include "../templates/header.php";?>
<!-- CSS -->
<link rel="stylesheet" href="style3.css">

    <!--JUMBOTRON-->
    <section class="jumbotron text-center">
      <img src="user bulet.png" width="200">
      <h1 class="display-6"><h1 class="pekok">Selamat datang, <?=$_SESSION['username'];?></h1></h1>
      <p class="lead">Kelola info, privasi, dan keamanan Anda agar berfungsi dengan lebih baik untuk Anda.</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#EDEDED" fill-opacity="1" d="M0,224L48,229.3C96,235,192,245,288,218.7C384,192,480,128,576,138.7C672,149,768,235,864,240C960,245,1056,171,1152,144C1248,117,1344,139,1392,149.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>


    <!--DASHBOARD-->
    <section id="team">
        <div class="container">
          <div class="row mb-5 justify-content-center">
          </div>
          <div class="row mb-3">
            <div class="col-4">
              <div class="card text-center ">
                <img src="cabinet-regular-240.png" class="card-img-top" alt="..." width="200">
                <div class="card-body">
                    <h2 class="card-title">Pengaduan</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet omnis officiis provident reprehenderit voluptatem, modi, quidem harum, possimus cupiditate excepturi nisi? Voluptatibus voluptas quam consectetur nam eius quae, esse incidunt.</p>
                    <a href="#" class="btn btn-primary">VIEW MORE</a>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="card text-center">
                <img src="user.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-title">Profil</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam perspiciatis praesentium repellendus facere omnis eum temporibus quod atque eligendi optio esse distinctio rem obcaecati minima soluta at reiciendis, excepturi quam!</p>
                    <a href="#" class="btn btn-primary">VIEW MORE</a>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="card text-center">
                <img src="cog.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-title">Settingan</h2>
                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam similique dolores excepturi quidem facilis, non magni rerum odio omnis at fuga inventore eos, harum laboriosam nesciunt distinctio, natus explicabo accusamus.</p>
                    <a href="#" class="btn btn-primary">VIEW MORE</a>
                </div>
              </div>
            </div>
          </div>
          </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,64L48,85.3C96,107,192,149,288,144C384,139,480,85,576,74.7C672,64,768,96,864,122.7C960,149,1056,171,1152,160C1248,149,1344,107,1392,85.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </section>

<?php include "../templates/footer.php";?>