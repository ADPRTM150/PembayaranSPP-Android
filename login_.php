<?php
if (isset($_POST['simpan'])) {
    //variabel untuk menyimpan kiriman dari form
    $user = $_POST['username'];
    $pass = $_POST['password'];

   
        include "config/koneksi.php";
        $sqlLogin = mysqli_query($koneksi, "SELECT * FROM buktii 
						WHERE username='$user' AND password='$pass'");
        $jml = mysqli_num_rows($sqlLogin);
        $d = mysqli_fetch_array($sqlLogin);
        if ($jml > 0) {
            session_start();
            $_SESSION['login']    = true;
            $_SESSION['id']        = $d['idadmin'];
            $_SESSION['username'] = $d['username'];
            $_SESSION['status'] = "login";
            $_SESSION['bktbayr'] = $d['bktbayar'];

            header('location:index.php');
        } else {
            header("location:login.php");
        }
    }

