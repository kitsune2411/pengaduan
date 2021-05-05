<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/e385f60a41.js" crossorigin="anonymous"></script>
    
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
  rel="stylesheet"
/>


      
      
      <script type="text/javascript">
        $(document).ready( function () {
          $('#example').DataTable();
          $('select').formSelect();
        } );
      
      </script>
<style>
html {
  height: 100%;
}
body {
  min-height: 100%;
  min-height: 100vh;
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-image: url(../img/gedung.png);
  background-size: cover;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: white;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #F7882E;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #F7882E;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}

.bottomleft{
    position: absolute;
    bottom: 1px;
    left: 10px;
    font-size: 18px;
    color: #F7882E;
}

.jumbotron{
    padding-top: 3rem;
    background-color:white;
}

.dropdown-toggle{
  color:grey;
}
.dropdown-toggle:hover{
  color:orange;
}

  </style>

    <title>Pengaduan masyarakat | <?= $judul?></title>
  </head>
  <body>

<div class="sidebar">
  <a href="#profile"><img src="../img/bulet.png" width="40" style="margin-right: 10px;"> User</a>
  <hr style="color: white; height: 3px;">

  <a class="" href="../dashboard/dashboard.php"><img src="../img/category.png" width="30" style="margin-right: 10px;"> Dashboard</a>
  <a class="" href="../pengaduan/pengaduan.php"><img src="../img/chat.png" width="30" style="margin-right: 10px;"> Pengaduan</a>
  <a class="" href="../user/2-user.php"><img src="../img/user.png" width="30" style="margin-right: 10px;"> User</a>
  <a class="" href="../rating/rating.php"><img src="../img/star.png" width="30" style="margin-right: 10px;"> Rating</a>

  <div class="bottomleft ms-1 mb-2"><h2>PEKOK |</h2></div>
</div>

<div class="content">

 <!--NAVBAR-->   
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container ms-auto">
            <div class="navbar-brand "><h3>| PENGADUAN MASYARAKAT</h3></div>
            <div class="navbar-brand me-4 dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
              >
              <img src="../img/user bulet.png" width="40">
              </a> 
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="../../logout.php">Log out</a></li>
              </ul>
            </div>
        </div>
      </nav>
      
        
          
        
       
      

  
    <script>
// Add active class to the current button (highlight it)
$(document).ready(function(){
  $('.sidebar a').click(function(){
    $('.sidebar a').removeClass("active");
    $(this).addClass("active");
});
});
</script>