<?php
include("conn.php");
session_start();
if(!empty($_SESSION['username']))
{
    echo "<script>document.location='index.php'</script>";
}
if(isset($_POST['username']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($conn, "select * from tb_users WHERE username='$username'");
    if($query->num_rows == 0){
        echo "<script>alert('Invalid username or password');</script>";
    }
    else
    {
        while($show = mysqli_fetch_array($query)) 
        {
            print_r($show);
            if($show['password'] !== md5($password))
            {
                echo "<script>alert('Invalid username or password');  document.location='login.php'; </script>";
                session_destroy();
                die();
            }
            if($show['status'] !== "1")
            {
                echo "<script>alert('Akun anda tidak aktif mohon hubungi administrator');   document.location='login.php'; </script>";
                session_destroy();
                die();
            }
            $_SESSION['username'] = $username;
            $_SESSION['level'] = $show['level'];

        echo "<script>alert('Berhasil login');  document.location='index.php'; </script>";
        }
    }
}
?>
<center>
<form action="login.php" method="post">
    <input type="text" name="username" placeholder="Username"/>
    <br>
    <input type="password" placeholder="Passowrd" name="password"/>
    <br>
    <input type="submit"/>
</form>
</center>