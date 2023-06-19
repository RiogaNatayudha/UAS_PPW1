<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.tailwindcss.com/2.2.19" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <title>Pembayaran</title>
  <style>
    body{
        background-color:#ffffff;
    }
    .but {
        transition: all .5s ease;
        color: white;
        border: 3px solid #AFA5C3;
        font-family: Poppins-bold;
        text-align: center;
        font-size: 1rem;
        line-height: 1rem;
        border-radius: 4px;
    }
    .but:hover {
        color: #964b00;
        background-color: #ffffff  ;
    }
    .desc{
        color:#AFA5C3;
    }
    .t{
        border-color:#AFA5C3;
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
    header("Location: login.php");
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

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$data = $_GET['id_product'];
$product = mysqli_query($conn, "SELECT * FROM Product WHERE id_product = $data");
$p = mysqli_fetch_assoc($product);



if (!$p) {
    die("Error: " . mysqli_error($conn));
}
?>

</head>
<body style="font-family:Poppins; color:#F4EEFF;">
<form action="Result.php" method="post">
    <input name="order" type="hidden" value="<?php echo $data; ?>">

    <header class="py-4">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-2xl font-semibold" style="color:#964b00">Keranjang Pembayaran</h1>
        </div>
    </header>

    <main class="container mx-auto py-8">
    <div class="rounded-lg shadow-md p-8" style="background-color:#964b00">
        <div class="flex justify-between mb-8">
            <div>
            <h2 class="text-lg font-semibold">NOTA</h2>
            <p class="desc"><?php echo $row['nama']; ?></p>
            <p class="desc"><?php echo $row['email']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            </div>
            <div>
            <h2 class="text-lg font-semibold">Virtual Account BCA</h2>
            <p class="desc">123456789</p>
            </div>
        </div>

        <table class="w-full border-collapse">
            <thead>
            <tr>
                <th class="border-b-2 t py-2">produk</th>
                <th class="border-b-2 t py-2">Harga</th>
                <th class="border-b-2 t py-2">Jumlah</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="desc border-b-2 t py-2 text-center"><?php echo $p['nama_product']; ?></td>
                <td class="desc border-b-2 t py-2 text-center">IDR <?php echo $p['harga']; ?></td>
                <td class="desc border-b-2 t py-2 text-center">IDR <?php echo $p['harga']; ?></td>
            </tr>
            </tbody>
        </table>

        <div class="flex justify-between mt-8">
            <a href="Home.php" class="but text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Kembali
            </a>
            <button class="but font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="buy">
            Lanjut
            </button>
        </div>
    </div>
    </main>
    </form>

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