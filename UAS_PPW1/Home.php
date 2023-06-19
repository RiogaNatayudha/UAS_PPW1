<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIANT</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<style>
    body{
    background-color: #ffffff;
    }
    .gallery-container {
      margin-top: 56px;
    }
    .carousel-inner {
      background-color: white;
    }
    .carousel-item img {
      width: 1280px;
      height: 320px;
      display: block;
      margin: 0 auto;
    }
    .half-width-img {
      width: 50%;
      display: block;
      margin: 0 auto;
    }
    .colt:hover{
        color: #964b00;
        text-decoration: none;
    }
    .lo:hover{
        color: #964b00;
        text-decoration: none;
    }
    .g:hover{
        color: #964b00;
        text-decoration: none;
    }
    .colt{
        color: #0d405d;
        text-decoration: none;
    }
    .navbar-link {
        text-decoration: none;
    }
    .lala{
        position:relative;
        margin-top:10px;
    }
    .min1{
        font-family: Montserrat; 
        color: #F2CFF7;
        font-size:15em;
        margin-top:-130px;
        padding:23px;
    }
    .min2{
        font-family: Montserrat;
        color: #E0D4FC;
        font-size:15em;
        margin-top:-200px;
        padding:65px;
    }
    .moreg{
        font-family: Poppins;
        color: #6B0084;
        margin-top:-30px;
        z-index:2;
        font-size: 1.5rem;
        line-height: 2rem;
    }
    .morel{
        font-family: Poppins; 
        color: #22007A; 
        margin-bottom:150px; 
        margin-top:-70px; 
        z-index:2;
        font-size: 1.5rem;
        line-height: 2rem;
    }
    @media all and (max-width: 1280px){
        .min1{
            font-family: Montserrat; 
            color: #F2CFF7;
            font-size:10em;
            margin-top:-100px;
            padding:23px;
        }
        .moreg{
            font-family: Poppins;
            color: #6B0084;
            margin-top:-25px;
            z-index:2;
            font-size: 1.3rem;
            line-height: 1.8rem;
        }
        .morel{
            font-family: Poppins; 
            color: #22007A; 
            margin-bottom:150px; 
            margin-top:-45px; 
            z-index:2;
            font-size: 1.3rem;
            line-height: 1.8rem;
        }
        .min2{
            font-family: Montserrat;
            color: #E0D4FC;
            font-size:11em;
            margin-top:-140px;
            padding:40px;
        }
    }
    @media all and (max-width: 1024px){
        .min1{
            font-family: Montserrat; 
            color: #F2CFF7;
            font-size:8em;
            margin-top:-80px;
            padding:18px;
        }
        .moreg{
            font-family: Poppins;
            color: #6B0084;
            margin-top:-20px;
            z-index:2;
            font-size: 1.3rem;
            line-height: 1.5rem;
        }   
        .morel{
            font-family: Poppins; 
            color: #22007A; 
            margin-bottom:150px; 
            margin-top:-45px; 
            z-index:2;
            font-size: 1.3rem;
            line-height: 1.5rem;
        }
        .min2{
            font-family: Montserrat;
            color: #E0D4FC;
            font-size:9em;
            margin-top:-110px;
            padding:35px;
        }
    }
    @media all and (max-width: 768px){
        .min1{
            font-family: Montserrat; 
            color: #F2CFF7;
            font-size:5em;
            margin-top:-50px;
            padding:15px;
        }
        .moreg{
            font-family: Poppins;
            color: #6B0084;
            margin-top:-25px;
            z-index:2;
            font-size: 1rem;
            line-height: 1.2rem;
        }
        .morel{
            font-family: Poppins; 
            color: #22007A; 
            margin-bottom:150px; 
            margin-top:-25px; 
            z-index:2;
            font-size: 1rem;
            line-height: 1.2rem;
        }
        .min2{
            font-family: Montserrat;
            color: #E0D4FC;
            font-size:6em;
            margin-top:-75px;
            padding:25px;
        }
    }
</style>
<body class="overflow-x-hidden">
    <nav class="py-2 px-7 flex items-center justify-between sticky top-0 z-10" style="background-color: #F8F7F3;">
        <a href="Home.php" class="flex items-center navbar-link">
            <img src="logo.png" alt="logo" style="width:70px;height:70px">
            <span class="text-3xl font-bold colt lo mt-1" style="color:#0d405d; font-family: Poppins">GIANT</span>
        </a>
        <div class="flex gap-10 text-2xl" style="font-family: Poppins">
            <a href="Glove.php" class="font-bold colt lo mt-1">GLOVE</a>
            <a href="Bat.php" class="font-bold colt g mt-1">BAT</a>
            <a href="Ball.php" class="font-bold colt g mt-1">BALL</a>
            <a href="Fashion.php" class="font-bold colt g mt-1">FASHION</a>
            <a href="Profile.php" class="flex items-center"><img src="user.png" alt="Akun" class="h-10"></a>
        </div>
    </nav>
    <br>    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-50 half-width-img" src="iklan.jpeg" alt="Gambar 1">
    </div>
    <div class="carousel-item">
      <img class="d-block w-50 half-width-img" src="iklan1.jpeg" alt="Gambar 2">
    </div>
    </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container">
<br>
<a href="Glove.php" class= "navbar-link"><h3 class="colt lo mt-1 "> G L O V E </h3></a>
<hr>
<br>
  <div class="row justify-content-between">
    <div class="col-md-4">
      <div class="card mb-4">
        <img class="card-img-top" src="g.jpg" alt="Produk 1" style="width:360px;height:250px">
        <div class="card-body">
          <h5 class="card-title">Glove ROX tangan kiri</h5>
          <p class="card-text">IDR 102.500</p>
          <a href="Invoice.php?id_product=1" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4">
        <img class="card-img-top" src="g1.jpg" alt="Produk 2" style="width:360px;height:250px">
        <div class="card-body">
          <h5 class="card-title">Glove MIXIN tangan kiri</h5>
          <p class="card-text">IDR 190.000</p>
          <a href="Invoice.php?id_product=2" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4">
        <img class="card-img-top" src="g2.jpg" alt="Produk 3" style="width:360px;height:250px">
        <div class="card-body">
          <h5 class="card-title">Glove MIZUNO tangan kanan</h5>
          <p class="card-text">IDR 357.000</p>
          <a href="Invoice.php?id_product=3" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
    <a href="Glove.php" class="btn btn-primary">LIHAT LEBIH BANYAK</a>
    <a href="Bat.php" class= "navbar-link"><h3 class="colt lo mt-10 "> B A T </h3></a>
<hr>
<br>
  <div class="row justify-content-between">
    <div class="col-md-4">
      <div class="card mb-4">
        <img class="card-img-top" src="bat.jpg" alt="Produk 1" style="width:360px;height:250px">
        <div class="card-body">
          <h5 class="card-title">Bat Baseball Little league</h5>
          <p class="card-text">IDR 2.060.000</p>
          <a href="Invoice.php?id_product=10" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4">
        <img class="card-img-top" src="bat1.jpg" alt="Produk 2" style="width:360px;height:250px">
        <div class="card-body">
          <h5 class="card-title">Bat Baseball Sunway lions 28"</h5>
          <p class="card-text">IDR 220.000</p>
          <a href="Invoice.php?id_product=11" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4">
        <img class="card-img-top" src="bat2.jpg" alt="Produk 3" style="width:360px;height:250px">
        <div class="card-body">
          <h5 class="card-title">Bat Baseball Bangqiubang Abu</h5>
          <p class="card-text">IDR 251.790</p>
          <a href="Invoice.php?id_product=12" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
    <a href="Bat.php" class="btn btn-primary">LIHAT LEBIH BANYAK</a>
    <a href="Ball.php" class= "navbar-link"><h3 class="colt lo mt-10 "> B A L L </h3></a>
<hr>
<br>
  <div class="row justify-content-between">
    <div class="col-md-4">
      <div class="card mb-4">
        <img class="card-img-top" src="bola.jpg" alt="Produk 1" style="width:360px;height:250px">
        <div class="card-body">
          <h5 class="card-title">KIPSTA BOLA BASEBALL BA180</h5>
          <p class="card-text">IDR 149.000</p>
          <a href="Invoice.php?id_product=16" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4">
        <img class="card-img-top" src="bola1.jpg" alt="Produk 2" style="width:360px;height:250px">
        <div class="card-body">
          <h5 class="card-title">Bola Berat Softball 5oz</h5>
          <p class="card-text">IDR 155.000</p>
          <a href="Invoice.php?id_product=17" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4">
        <img class="card-img-top" src="bola2.jpg" alt="Produk 3" style="width:360px;height:250px">
        <div class="card-body">
          <h5 class="card-title">Bola Softball soft MIZUNO</h5>
          <p class="card-text">IDR 63.700</p>
          <a href="Invoice.php?id_product=18" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
    <a href="Ball.php" class="btn btn-primary">LIHAT LEBIH BANYAK</a>
    <a href="Fashion.php" class= "navbar-link"><h3 class="colt lo mt-10 "> F A S H I O N </h3></a>
<hr>
<br>
  <div class="row justify-content-between">
    <div class="col-md-4">
      <div class="card mb-4">
        <img class="card-img-top" src="f.jpg" alt="Produk 1" style="width:360px;height:250px">
        <div class="card-body">
          <h5 class="card-title">Sepatu MIZUNO Baru</h5>
          <p class="card-text">IDR 1.660.000</p>
          <a href="Invoice.php?id_product=22" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4">
        <img class="card-img-top" src="f1.jpg" alt="Produk 2" style="width:360px;height:250px">
        <div class="card-body">
          <h5 class="card-title">Jersey Baseball New York Yankees</h5>
          <p class="card-text">IDR 250.000</p>
          <a href="Invoice.php?id_product=23" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4">
        <img class="card-img-top" src="f2.jpg" alt="Produk 3" style="width:360px;height:250px">
        <div class="card-body">
          <h5 class="card-title">Topi Baseball NY Yankees</h5>
          <p class="card-text">IDR 299.000</p>
          <a href="Invoice.php?id_product=24" class="btn btn-primary">Beli</a>
        </div>
      </div>
    </div>
    <a href="Fashion.php" class="btn btn-primary">LIHAT LEBIH BANYAK</a>
    </div>
</div>
</div>
</div>
</div>
    <footer class="bg-gray-900 text-gray-300 py-8 mt-52" style="font-family:Poppins;">
    <div class="container mx-auto flex flex-wrap justify-between items-center">
            <div class="w-full md:w-1/3 mb-6 md:mb-0">
                <a href="Home.php" class="flex items-center mb-4 navbar-link">
                    <img src="logo.png" alt="Logo" class="h-8">
                    <span class="text-3xl font-bold ml-1" style="color:#ffffff; font-family: Poppins;">GIANT</span>
                </a>
                <p class="text-sm">Menghadirkan barang terpercaya dengan seluruh spesifikasi yang ada dan nyata</p>
            </div>
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <h4 class="text-lg font-bold mb-4">Layanan Konsumen</h4>
                <ul class="list-none">
                    <li><a href="#" class="text-gray-300 hover:text-white">Tentang Kami</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">Syarat & Ketentuan</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">Kebijakan Privasi</a></li>
                </ul>
            </div>
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <h4 class="text-lg font-bold mb-4">Giant</h4>
                <ul class="list-none">
                    <li><a href="#" class="text-gray-300 hover:text-white">Tentang Kami</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">Syarat & Ketentuan</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">Kebijakan Privasi</a></li>
                </ul>
            </div>
            <div class="w-full md:w-1/4">
                <h4 class="text-lg font-bold mb-4">Hubungi Kami</h4>
                <ul class="list-none">
                    <li><a href="#" class="text-gray-300 hover:text-white">Live Chat</a></li>
                    <li>Setiap Hari | 10:00 - 22:00 WIB</li>
                    <li><a href="#" class="text-gray-300 hover:text-white">CSHelp@giant.com</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">021-9999-8888</a></li>
                </ul>
            </div>
            <div class="w-full md:w-1/6 mb-6 md:mb-0">
                <h4 class="text-lg font-bold mb-4">Layanan Konsumen</h4>
                <ul class="list-none">
                <li><a href="#" class="text-gray-300 hover:text-white"><img src="foot.png" alt="ATM Bersama" class="h-8"></a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white"><img src="foot1.png" alt="Mastercard" class="h-8"></a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white"><img src="foot2.png" alt="Kredivo" class="h-8"></a></li>
                </ul>
            </div>
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <h4 class="text-lg font-bold mb-4">Jasa Pengiriman</h4>
                <ul class="list-none">
                    <li><a href="#" class="text-gray-300 hover:text-white"><img src="foot3.png" alt="Gosend" class="h-8"></a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white"><img src="foot4.png" alt="JNE" class="h-8"></a></li>
                </ul>
            </div>
        </div>
    <hr class="border-gray-600 my-8">
    <div class="container mx-auto flex items-center justify-center space-x-4">
        <a href="#" class="text-gray-300 hover:text-white"><img src="fb.png" alt="Facebook" class="h-7"></a>
        <a href="#" class="text-gray-300 hover:text-white"><img src="ig.png" alt="Instagram" class="h-8"></a>
    </div>
    <div class="container mx-auto mt-8">
        <p class="text-sm text-center">&copy; 2023 GIANT. All rights reserved.</p>
    </div>
  </footer>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>
</html>