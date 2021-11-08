<?php
 include("conn.php");
    $query = mysqli_query($conn, "select * from tb_anggota");
    ?>
    <h1>Masukkan Data Barang</h1>
    <form method="POST">
    <label for="nama">Id Kategori&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="text" name="ktg">
    <br>
    <br>
    <label for="alamat">Nama Barang&nbsp;</label>
    <input type="text" name="nama">
    <br>
    <br>
    <input type="submit" name="simpan" value="Simpan" >
    </form>
    <?php
        if (isset($_POST['simpan'])){
            $kategori = $_POST ['ktg'];
            $nbrang = $_POST ['nama'];
             $sql=$conn->query ("insert into tb_kategori(id_kategori,nama_barang) values('$kategori', '$nbrang')");        
        if($sql) {

        		?>
        			<script type="text/javascript">
        				alert("Data Berhasil Disimpan");
        				window.location.href="view_kategori.php";	
        			</script>
        	
				<?php
        	}		

        }
        	

    ?>
