<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
</head>
<style>
    body{
        background-color: #F4EEFF;
    }
    .colt:hover{
        color: #A6B1E1;
    }
    .lo:hover{
        color: #B497FF;
    }
    .g:hover{
        color: #E89AFF;
    }
    .colt{
        color: #0d405d;
    }
    .text{
        color: #F4EEFF;
    }
    button {
        transition: all .5s ease;
        color: #E53E3E;
        border: 3px solid #E53E3E;
        font-family: Poppins-bold;
        text-align: center;
        font-size: 1rem;
        line-height: 1rem;
        border-radius: 4px;
    }
    button:hover {
        color: #ffffff;
        background-color: #E53E3E;
    }

</style>

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
    header("Location: Login.php");
    exit;
}

if (!isset($_SESSION['id_customer'])) {
    die("Customer ID is not set in the session.");
}

$user_id = $_SESSION['id_customer'];
$profile = mysqli_query($conn, "SELECT * FROM Customer WHERE id_customer = $user_id");

if (!$profile) {
    die("Error: " . mysqli_error($conn));
}

$row = mysqli_fetch_assoc($profile);
?>


<body style="font-family: Poppins">
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

    <div class="container mx-auto py-8 text">
        <div class="rounded-lg shadow-lg" style="background-color:#964b00">
            <div class="p-8">
                <div class="flex items-center justify-center">
                    <img src="user1.png" alt="Profile Picture" class="w-32 h-32 rounded-full">
                </div>
                <h1 class="text text-3xl font-bold text-center mt-4"><?php echo $row['nama']; ?></h1>
                <p class=" text-center mt-2">Customer <?php echo $row['id_customer']; ?></p>
                <div class="flex justify-center mt-4 mb-4">
                    <a href="#" class="mx-2"><?php echo $row['email']; ?></a>
                </div>
                <div class="flex justify-center mt-4 mb-4">
                    <a href="#" class="mx-2"><?php echo $row['no_telp']; ?></a>
                </div>
                <div class="flex justify-center mt-4 mb-4">
                    <a href="Logout.php"><button class="font-bold py-2 px-4 rounded mt-4">Logout</button></a>
                </div>
            </div>
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