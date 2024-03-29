<?php
require 'koneksi.php';
$user_name = $_POST["user_name"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM akun
            WHERE user_name = '$user_name' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
    header("Location: dashboard.html");
} else {
    ?>
    
    <script language="JavaScript">
    alert('Maaf, Username / Password Yang Anda Masukkan Salah!');
    document.location='login.html';
    </script>
    <?php
}

?>