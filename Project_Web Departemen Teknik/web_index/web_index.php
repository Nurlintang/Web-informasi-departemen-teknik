<?php
session_start();

if ( !isset($_SESSION['login'])){
    header ("location: http://localhost/PHP/Project_Web_Departemen_Teknik/login/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departemen Teknik</title>
    <link rel="stylesheet" href="web_index.css">
</head>
<body>
            
    <div>
        <div class="box-logo">
            <img src="logo-project.png" class="logo">
        </div>
    </div>

    <div class="box-header">
        <div class="header1">
            DEPARTEMEN TEKNIK
        </div>

        <div class="header2">
            UNIVERSITAS DIPONEGORO
        </div>
    </div>    

    <div class="isi-header">
        Berikut merupakan beberapa data Departemen teknik di 
        Universitas Diponegoro
    </div>

    <a href="http://industri.ft.undip.ac.id/en/" class="box-foto1">  
        <div class="btn-5">
            <img src="foto_industri.jpg" class="foto1">
                <div class="isi-foto1">
                    Departemen Teknik Industri
                </div>
        </div>
    </a>   

    <a href="https://ft.undip.ac.id/" class="box-foto2">  
        <div class="btn-5">
            <img src="foto-dekanat.jfif" class="foto2">
                <div class="isi-foto2">
                    Dekanat Fakultas Teknik
                </div>
        </div>
    </a>
    
    <a href="https://tekkom.ft.undip.ac.id/" class="box-foto3">  
        <div class="btn-5">
            <img src="foto_komputer.png" class="foto3">
                <div class="isi-foto3">
                    Departemen Teknik Komputer
                </div>
        </div>
    </a>

    <a href="https://sipil.ft.undip.ac.id/" class="box-foto4">  
        <div class="btn-5">
            <img src="foto_sipil.png" class="foto4">
                <div class="isi-foto4">
                    Departemen Teknik Sipil
                </div>
        </div>
    </a>

    <a href="https://lingkungan.ft.undip.ac.id/en/hestia-front-2/" class="box-foto5">  
        <div class="btn-5">
            <img src="foto_lingkungan.png" class="foto5">
                <div class="isi-foto5">
                    Departemen Teknik Lingkungan
                </div>
        </div>
    </a>

    <a href="https://geologi.ft.undip.ac.id/" class="box-foto6">  
        <div class="btn-5">
            <img src="foto_geologi.png" class="foto6">
                <div class="isi-foto6">
                    Departemen Teknik Geologi
                </div>
        </div>
    </a>

    <a href="http://localhost/PHP/Project_Web_Departemen_Teknik/refresh.php" class="btn-6"> 
        <div class="logout">
         Logout
        </div>
    </a>
</body>
</html>
