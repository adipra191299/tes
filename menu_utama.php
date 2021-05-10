<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<title>E-Learning P4</title>
</head>
<style type="text/css">
    body {
      background-color: #EEEEEE;
    }
    .card-body {
        overflow: hidden;
        height: 93px;
        text-align: center;
        line-height: 21px;
        font-size: 14px;
        color: #373636;
        background-color: #eeeeee;
    }
    .card{
      border: 0;
    }
    .container-logo{
        position: relative;
        display: flex;
        text-align: center;
    }
    .header{
        position: absolute;
        color: white;
        padding: 200px 50px;
        z-index: 1;
    }
    .menu{
        background-color: #ffffff;
        padding-left: 103px;
    }
    a {
      color:black;
    }
    .current{
      font-weight: bold;
      color: #FFB700 !important;
    }
</style>

<body>

<div class="container-logo">
    <div class="img-banner"></div>
    <img src="img/banner.jpg" class="card-img-top">
</div>

<nav class="navbar navbar-expand-lg  menu mb-3">
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link current" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Tentang</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">Lokasi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Karir</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Keranjang</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container-md">
<div class="row">
<?php
    include 'koneksi.php';
    $artikel = mysqli_query($conn, "SELECT * from barang");

    foreach($artikel as $row) {
?>      
            
                <div class="card m-1" style="width: 11rem;">
                    <img src="<?php echo $row['gambar'];?>" class="card-img-top">
                      <div class="card-body">
                          <h7 class="card-title"><?=$row['nama']?></h5>
                          <p class="card-text text-muted"><?=$row['harga']?> </p>
                      </div>
                </div>
            
<?php } ?>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>