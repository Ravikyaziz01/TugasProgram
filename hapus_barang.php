<?php
 include("conn.php");
 $id = $_GET['id'];

    while($show = mysqli_fetch_array($query)) {
    ?>
    <h1>Masukkan Data Barang</h1>
    <form method="POST">
    <label for="nama">Id barang&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="text" name="id" value="<?php echo $show['id_anggota']; ?>">
    <br>
    <br>
    <label for="alamat">Nama Barang&nbsp;</label>
    <input type="text" name="nama" value="<?php echo $show['nama']; ?>">
    <br>
    <br>
    <input type="submit" name="simpan" value="Simpan" >
    </form>
    <?php
    }
        if (isset($id)){
             $sql=$conn->query ("DELETE FROM tb_anggota WHERE id_anggota='$id'");        
        if($sql) {

        		?>
        			<script type="text/javascript">
        				alert("Data Berhasil Dihapus");
        				window.location.href="view_anggota.php";	
        			</script>
        	
				<?php
        	}		

        }
        	

    ?>
