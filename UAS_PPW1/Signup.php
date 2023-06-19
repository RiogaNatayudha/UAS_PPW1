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
        color: #00091D;
    }
    .lo:hover{
        color: #00091D;
        background-color: #F4EEFF;
        transition: all .5s ease;
    }
    .lo{
        color: #F4EEFF;
        border: 2px solid #F4EEFF;
    }
    .colt{
        color: #F4EEFF;
    }
    .text{
        color: #F4EEFF;
    }
    .bg{
        background-color: #808080;
    }
    .bgf{
        background-color: #964b00;
    }
    .border{
        border: 2px solid #F4EEFF;
    }
</style>

<?php
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

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function signup($data)
{
    global $conn;

    $name = (stripslashes($data['name']));
    $email = strtolower(stripslashes($data['email']));
    $phone = $data['phone'];
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    if ($password !== $password2) {
        $error = "Kata sandi berbeda!";
        return $error;
    }

    $emailExistsQuery = "SELECT * FROM Customer WHERE email = '$email'";
    $result = mysqli_query($conn, $emailExistsQuery);
    if (mysqli_num_rows($result) > 0) {
        $error = "Email sudah ada, gunakan email lain!";
        return $error;
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO Customer (nama, email, no_telp, password) VALUES ('$name', '$email', '$phone', '$hashedPassword')";
    if (mysqli_query($conn, $query)) {
        return true;
    } else {
        $error = "Error: " . mysqli_error($conn);
        return $error;
    }
}

$error = "";

if (isset($_POST['signup'])) {
    $result = signup($_POST);
    if ($result === true) {
        echo "<script> alert('Akun berhasil dibuat!')</script>";
    } else {
        $error = $result;
    }
}
?>
<body class="bg-gray-100 text" style="font-family: Poppins">
    <div class="bg flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md">
            <form class="bg-white shadow-md rounded px-10 pt-4 pb-8 mb-4 bgf" method="POST" action="">
                <h2 class="text-2xl font-bold mb-6 text-center">Daftar</h2>
                <div class="mb-4">
                    <label class="block text-sm font-bold mb-2" for="name">
                        Nama
                    </label>
                    <input class="bgf appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="Masukkan nama anda" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="bgf appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="Masukkan email anda" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-bold mb-2" for="phone">
                        Nomor Telepon
                    </label>
                    <input class="bgf appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="phone" name="phone" type="text" placeholder="Masukkan nomor telepon anda" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-bold mb-2" for="password">
                        Kata Sandi
                    </label>
                    <input class="bgf appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="masukkan password anda" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-bold mb-2" for="password2">
                        Konfirmasi Kata Sandi
                    </label>
                    <input class="bgf appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline mb-5" id="password2" name="password2" type="password" placeholder="masukkan password anda" required>
                </div>
                <div class="flex items-center justify-between">
                    <button onClick="alert('Apakah anda yakin data anda sudah benar?')" class="lo hover:bg-blue-700 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="signup">
                        Daftar
                    </button>
                    <a class="colt inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="login.php">
                        Sudah memiliki akun? Masuk sekarang.
                    </a>
                </div>
            </form>

            <?php if (isset($error)): ?>
                <div class="shadow-md rounded px-3 pt-3 pb-3 mb-3">
                    <a href="signup.php"><p class="text-base text-red-500 font-bold text-center"><?php echo $error; ?></p></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>