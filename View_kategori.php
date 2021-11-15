<?php
    include("conn.php");

    session_start();
    if(empty($_SESSION['username']))
    {
        echo "<script>alert('Ups anda belum login'); document.location='login.php'</script>";
        session_destroy();
        die();
    }
    $query = mysqli_query($conn, "select * from tb_kategori");
?>

<table border="4">
    <tr>
        <td>No</td>
        <td>Id Kategori</td>
        <td>Nama Barang</td>
        <td colspan="2">Action</td>
    </tr>
<?php
    $no = 1;
    while($show = mysqli_fetch_array($query)) {?>
    <tr>
        <td><?php echo $no++?></td>
        <td><?php echo $show['id_kategori']?></td>
        <td><?php echo $show['nama_barang']?></td>
        <td><a href="edit_kategori.php?id=<?php echo $show['id_kategori'];?>">EDIT</a></td>
        <td><a href="hapus_kategori.php?id=<?php echo $show['id_kategori'];?>">DELETE</a></td>
    </tr>

<?php
    }
?>

</table>
<br><a href="tambah_kategori.php"><button type="submit">Tambah Kategori</button></a>
<a href="/iky"><button type="submit">Home</button></a>
