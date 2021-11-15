<?php
 include("conn.php");

 session_start();
 if(empty($_SESSION['username']))
 {
     echo "<script>alert('Ups anda belum login'); document.location='login.php'</script>";
     session_destroy();
     die();
 }
 $id = $_GET['id'];
    $query = mysqli_query($conn, "select * from tb_kategori WHERE id_kategori='$id'");

    while($show = mysqli_fetch_array($query)) {
    ?>
    <h1>Masukkan Data Barang</h1>
    <form method="POST">
    <label for="nama">Id Kategori&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    <input type="text" name="id" value="<?php echo $show['id_kategori']; ?>">
    <br>
    <br>
    <label for="alamat">Nama Barang&nbsp;</label>
    <input type="text" name="nama" value="<?php echo $show['nama_barang']; ?>">
    <br>
    <br>
    <input type="submit" name="simpan" value="Simpan" >
    </form>
    <?php
    }
        if (isset($_POST['simpan'])){
            $id = $_POST ['id'];
            $nama = $_POST ['nama'];
             $sql=$conn->query ("UPDATE tb_kategori SET id_kategori='$id', nama_barang='$nama' WHERE id_kategori='$id'");        
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
