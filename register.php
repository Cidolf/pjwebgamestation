<?php
require 'koneksi.php';
$user_name = $_POST["user_name"];
$password = $_POST["password"];
$name = $_POST["name"];

$query_sql = "INSERT INTO akun (user_name, password, name)
            VALUE ('$user_name', '$password', '$name')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: login.html");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}