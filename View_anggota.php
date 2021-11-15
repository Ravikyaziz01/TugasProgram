<?php
    include("conn.php");

    session_start();
    if(empty($_SESSION['username']))
    {
        echo "<script>alert('Ups anda belum login'); document.location='login.php'</script>";
        session_destroy();
        die();
    }
    $query = mysqli_query($conn, "select * from tb_anggota");
?>

<table border="4">
    <tr>
        <td>No</td>
        <td>Id Anggota</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td colspan="2">Action</td>
    </tr>
<?php
    $no = 1;
    while($show = mysqli_fetch_array($query)) {?>
    <tr>
        <td><?php echo $no++?></td>
        <td><?php echo $show['id_anggota']?></td>
        <td><?php echo $show['nama']?></td>
        <td><?php echo $show['alamat']?></td>
        <td><a href="edit_anggota.php?id=<?php echo $show['id_anggota'];?>">EDIT</a></td>
        <td><a href="hapus_anggota.php?id=<?php echo $show['id_anggota'];?>">DELETE</a></td>
    </tr>
<?php
    }
?>
</table>
<br>
<a href="tambah_anggota.php"><button type="submit">Tambah Anggota</button></a>

<a href="/iky"><button type="submit">Home</button></a>
