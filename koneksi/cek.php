<?php
    require 'config.php';

    try{
        $username = $_POST['username'];
        $password = $_POST['password'];

        $cek = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $hasil = mysqli_query($conn, $cek);
        $data= mysqli_num_rows($hasil);

        if($data>0){
            session_start();
            $_SESSION['username']=$username;
            header('Location:../buku/data.php');
        }else{
            echo '<h3>DATA ANDA TIDAK VALID</h3>';
            echo '<a href="login.php">ulangi</a>';
            exit();
        }
    }catch(Exception $e){
        die('Ada kesalahan '.$conn->connect_error);
    }
?>