<?php
 include("conn.php");
 $id = $_GET['id'];
    $query = mysqli_query($conn, "select * from tb_anggota WHERE id_anggota='$id'");

    while($show = mysqli_fetch_array($query)) {
    ?>
    <h1>Masukkan Data Barang</h1>
    <form method="POST">
    <label for="nama">Id Kategori&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
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
        if (isset($_POST['simpan'])){
            $id = $_POST ['id'];
            $nama = $_POST ['nama'];
             $sql=$conn->query ("UPDATE tb_anggota SET id_anggota='$id', nama='$nama' WHERE id_anggota='$id'");        
        if($sql) {

        		?>
        			<script type="text/javascript">
        				alert("Data Berhasil Disimpan");
        				window.location.href="view_anggota.php";	
        			</script>
        	
				<?php
        	}		

        }
        	

    ?>
