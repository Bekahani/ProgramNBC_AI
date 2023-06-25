<?php
    session_start();
    $user = $_SESSION['email'];
    $level = $_SESSION['level'];
    // $status = $_SESSION['status'];

    if($_SESSION['level']=='user' ){
        echo "<script>alert('Maaf,anda bukan admin,Silakan Login dengan akun Superadmin');history.go(-1);</script>;";
        echo $_SESSION['email']; 
    }
    // elseif($_SESSION['level'=='user'] && $_SESSION['status']=='verified'){
    //     echo "<script>alert('Silakan Login ');history.go(-1);</script>;";
    //     echo $_SESSION['email']; 
    // }
    if($_SESSION['email'] || $_SESSION['level'] || $_SESSION['status']){

    }
    else{
        header('Location:../../login.php?kode=login');
     }
?> 