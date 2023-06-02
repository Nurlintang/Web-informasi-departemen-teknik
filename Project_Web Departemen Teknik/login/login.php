<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Laman Login Website </title>
    <link rel="stylesheet" href="login.css">
        
</head>
<body>
    <form action = "" method = "post">
        <div class="header">
            <div class="box-logo">
                <img src="logo-project.png" class="logo">
            </div>
            
            <a href="http://localhost/PHP/Project_Web_Departemen_Teknik/login/login.php">
                <section class="box-login">
                    <div class="box-login1">
                        Login
                    </div>
                </section>
            </a>

            <a href="http://localhost/PHP/Project_Web_Departemen_Teknik/pendaftaran/pendaftaran.php">
                <section class="box-pendaftaran">
                    <div class="box-pendaftaran1">
                        Sign Up
                    </div>
                </section>
            </a>

            <a href="http://localhost/PHP/Project_Web_Departemen_Teknik/web_index/web_index.php">
                <section class="box-website">
                    <div class="box-website1">
                        Website
                    </div>
                </section>
            </a>

            <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
                <section class="box-nama-website">
                    Engingeng.com
                </section>
            </a>
        </div>

        <div class="body">
            <div class="isi-input">
                <div class="username">
                    <!-- Username -->
                    <input type="text" name="username" placeholder=" Username" class="username-dalam">
                    <br>
                <div>

                <div class="password">
                    <!-- Password -->
                    <input type="password" name="password" placeholder=" Password" class="password-dalam">
                    <br>
                <div>

                <div class="tombol-submit">
                    <!-- Tombol untuk submit -->
                    <input type="submit" class="btn-4" value="login" name="kirim" >
                    <br>
                </div>

                <div class="saran-buat-akun">
                    <!-- Tombol untuk pendaftaran -->
                    Silahkan klik sign up untuk membuat akun
                </div>

            </div>
        </div>

        <div class="footer">
            <div class="isi-footer">
                Jika anda sudah memiliki akun, anda dapat memilih departemen teknik di Universitas Diponegoro yang anda ingin pilih.
            </div>
        </div>
    </form>
</body>
</html>

<?php
session_start();
if(isset($_POST["kirim"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

        // AKUN UNTUK LOGIN //
        if($username === "nezta" && $password === "123"){
            header ("Location:http://localhost/PHP/Project_Web_Departemen_Teknik/web_index/web_index.php");
            $_SESSION["login"] = true;
            exit;
        }
            elseif($username === "lintang" && $password === "123"){
                header ("Location:http://localhost/PHP/Project_Web_Departemen_Teknik/web_index/web_index.php");
                $_SESSION["login"] = true;
                exit;
            }
            elseif($username === "bintang" && $password === "anjing"){
                header ("Location:http://localhost/PHP/Project_Web_Departemen_Teknik/web_index/web_index.php");
                $_SESSION["login"] = true;
                exit;
            }

        // JIKA AKUN TIDAK TERDAFTAR DI KEADAAN IF DAN ELSEIF //
        else{ 
            ?>
            <div class="kontainer-notifikasi">  
                <div class="isi-notifikasi";>
                    Username dan Password salah, apakah anda ingin membuat akun
                </div>
                    <!-- Tombol Tidak -->
                    <a href="http://localhost/PHP/Project_Web_Departemen_Teknik/login/login.php" class="btn-5">  
                    </a>

                    <a href="http://localhost/PHP/project_nezta/login/login.php" class="tidak">
                        Tidak    
                    </a>
                    <!-- Tombol Iya -->
                    <a href="http://localhost/PHP/Project_Web_Departemen_Teknik/pendaftaran/pendaftaran.php" class="btn-6">     
                    </a>

                    <a href="http://localhost/PHP/Project_Web_Departemen_Teknik/pendaftaran/pendaftaran.php" class="iya">
                        Iya 
                    </a> 
            </div>
              <?php
        }
}

?>
