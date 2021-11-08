<?php
    include("conn.php");
    $query = mysqli_query($conn, "select * from tb_kategori");
?>

<table border="4">
    <tr>
        <td>No</td>
        <td>Id Kategori</td>
        <td>Nama Barang</td>
    </tr>
<?php
    $no = 1;
    while($show = mysqli_fetch_array($query)) {?>
    <tr>
        <td><?php echo $no++?></td>
        <td><?php echo $show['id_kategori']?></td>
        <td><?php echo $show['nama_barang']?></td>
    </tr>

<?php
    }
?>
