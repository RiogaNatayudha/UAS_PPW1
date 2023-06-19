<?php
session_start();
$_SESSION = array();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="refresh" content="0;url=Home.php">
</head>
<body>
  <script>
    window.location.href = "Home.php";
  </script>
</body>
</html>
