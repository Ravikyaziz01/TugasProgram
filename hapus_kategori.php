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
        if (isset($id)){
             $sql=$conn->query ("DELETE FROM tb_kategori WHERE id_kategori='$id'");        
        if($sql) {

        		?>
        			<script type="text/javascript">
        				alert("Data Berhasil Dihapus");
        				window.location.href="view_kategori.php";	
        			</script>
        	
				<?php
        	}		

        }
        	

    ?>
