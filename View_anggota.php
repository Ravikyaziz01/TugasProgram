<?php
    include("conn.php");
    $query = mysqli_query($conn, "select * from tb_anggota");
?>

<table border="4">
    <tr>
        <td>No</td>
        <td>Id Anggota</td>
        <td>Nama</td>
        <td>Alamat</td>
    </tr>
<?php
    $no = 1;
    while($show = mysqli_fetch_array($query)) {?>
    <tr>
        <td><?php echo $no++?></td>
        <td><?php echo $show['id_anggota']?></td>
        <td><?php echo $show['nama']?></td>
        <td><?php echo $show['alamat']?></td>
    </tr>
<?php
    }
?>
</table>
<br>
<a href="tambah_anggota.php"><button type="submit">Tambah Anggota</button></a>
