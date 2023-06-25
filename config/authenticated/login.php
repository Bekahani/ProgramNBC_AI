<?php
    session_start();

    include("../koneksi.php");

    $email   = $_POST['email'];
    $pass    = ($_POST['password']);

    $login = mysqli_query($con,"SELECT * FROM user WHERE email='$email' AND password='$pass'");
    $cek   = mysqli_num_rows($login);
    // echo $login;
    if($cek > 0){
        $data =  mysqli_fetch_assoc($login);

        if($data['level'] == "admin"){
            $_SESSION['email']   = $email;
            $_SESSION['level']   = "admin";
            $_SESSION['status']  = "aktif";

            // echo $data;
            header("location:../../admin/dashboard/index.php");
        }
        else if($data['level'] == "user"){
            $_SESSION['email']   = $email;
            $_SESSION['level']   = "user";
            $_SESSION['status']  = "process";
            header("location:../../user/dashboard/index.php");
            // echo $data;git 
        }
        
    }
    else{
        header("location:../../login.php?pesan=gagal");
    }

?>