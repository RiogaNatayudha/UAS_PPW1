<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ball</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
</head>
<style>
    body{
        background-color: #ffffff;
    }
    .colt:hover{
        color: #A6B1E1;
    }
    .lo:hover{
        color: #964b00;
    }
    .g:hover{
        color: #964b00;
    }
    .colt{
        color: #0d405d;
    }
    button {
        transition: all .5s ease;
        color: #964b00;
        border: 3px solid #964b00;
        font-family: Poppins;
        text-align: center;
        font-size: 1rem;
        line-height: 1rem;
    }
    button:hover {
        color: #ffffff;
        background-color: #964b00;
    }
    .title{
        color: #964b00;
    }
</style>
<body>
<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "uasweb";

// Connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check Connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

$ball = mysqli_query($conn, "SELECT * FROM product WHERE id_kategori = 3");

if ($row = mysqli_fetch_assoc($ball)) {
    unset ($_SESSION['id_product']);
    $_SESSION['id_product'] = $row['id_product'];
} else {
    die("No product found.");
}
?>



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

    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-8" style="color:#964b00; font-family:Poppins;">Pilih Bola yang terbaik untuk anda</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 justify-center">
            <?php foreach($ball as $l) :?>
            <div class="bg-gray-100 rounded-lg shadow p-4 flex justify-center">
                <div class="flex flex-col items-center">
                    <img src="<?php echo $l['file']?>" alt="Product 1" class="w-52 mb-4 rounded-lg"  style="width:360px;height:250px">
                    <h2 class="title text-xl mb-2" style="font-family:Poppins-semibold;"><?php echo $l['nama_product']?></h2>
                    <p class="text-grey-900 font-semibold" style="font-family:Poppins-semibold;">IDR <?php echo $l['harga']?></p>
                    <a href="Invoice.php?id_product=<?php echo $l['id_product']?>"><button class="font-bold py-2 px-4 rounded mt-4">Beli Sekarang</button></a>
                </div>
            </div>
            <?php endforeach;?>  
        </div>
    </div>

    <footer class="bg-gray-900 text-gray-300 py-8 mt-52" style="font-family:Poppins;">
    <div class="container mx-auto flex flex-wrap justify-between items-center">
            <div class="w-full md:w-1/3 mb-6 md:mb-0">
                <a href="Home.php" class="flex items-center mb-4">
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
</body>
</html>