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
        background-color: #F8F7F3;
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
session_start();

if (isset($_SESSION['login'])) {
    // Redirect to the login page if the user is already logged in
    header("Location: Home.php");
    exit;
}

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

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM Customer WHERE email='$email'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['password'];
        $id_customer = $row['id_customer'];

        if (password_verify($password, $hashedPassword)) {
            $_SESSION["login"] = true;
            $_SESSION["id_customer"] = $id_customer;

            header("Location: Home.php");
            exit;
        } else {
            $error = "Incorrect password. Please try again.";
        }
    } else {
        $error = "Email not found. Please try again.";
    }
}
?>


<body class="bg-gray-100 text" style="font-family: Poppins">
    <div class="bg flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md">
            <div class="flex flex-col items-center mb-8">
                <img src="logo.png" alt="Logo" class="w-40 h-40">
                <span class="text-4xl font-bold mt-2 text-center">GIANT</span>
            </div>
            <h5 class="text-1xl mb-4 text-center">Tempat Belanja Terpercaya!</h5>
            <form class="shadow-md rounded px-8 pt-6 pb-8 mb-4 bgf" method="POST" action="login.php">
                <h2 class="text-2xl font-bold mb-6 text-center">Masuk</h2>
                <div class="mb-4">
                    <label class="block text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="bgf appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="Masukkan email anda" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-bold mb-2" for="password">
                        Kata Sandi
                    </label>
                    <input class="bgf appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline mb-5" id="password" name="password" type="password" placeholder="Masukkan kata sandi anda" required>
                </div>
                <div class="flex items-center justify-between">
                    <button class="lo font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="login">
                        Masuk
                    </button>
                    <a class="colt inline-block align-baseline font-bold text-sm" href="Signup.php">
                        Belum punya akun? Daftar sekarang.
                    </a>
                </div>
            </form>

            <?php if (isset($error)): ?>
                <div class="shadow-md rounded px-3 pt-3 pb-3 mb-3">
                    <a href="login.php"><p class="text-xl text-red-500 font-bold text-center"><?php echo $error; ?></p></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>