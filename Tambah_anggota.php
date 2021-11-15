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
    <h1>Masukkan Data Anggota</h1>
    <form method="POST">
    <label for="nama">Nama&nbsp;&nbsp;&nbsp;</label>
    <input type="text" name="nama">
    <br>
    <br>
    <label for="alamat">Alamat&nbsp;</label>
    <input type="text" name="alamat">
    <br>
    <br>
    <input type="submit" name="simpan" value="Simpan" >
    </form>
    <?php
        if (isset($_POST['simpan'])){
            $nama = $_POST ['nama'];
            $alamat = $_POST ['alamat'];
             $sql=$conn->query ("insert into tb_anggota(nama,alamat) values('$nama', '$alamat')");        
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
