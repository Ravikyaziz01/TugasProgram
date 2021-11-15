<?php
include("conn.php");
session_start();
if(empty($_SESSION['username']))
{
    echo "<script>alert('Ups anda belum login'); document.location='login.php'</script>";
    session_destroy();
    die();
}
$username = $_SESSION['username'];
$level = $_SESSION['level'];
echo "<h1>Hello $username</h1>\n";
?>

<ul>
    <li><a href="View_anggota.php">Lihat Anggota</a></li>
    <li><a href="View_barang.php">Lihat Barang</a></li>
    <li><a href="View_kategori.php">Lihat Kategori</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>