<?php
session_start();
if(isset($_POST["daftar"])){
    $nama_lengkap = $_POST["nama_lengkap"];
    $nama_panggilan = $_POST["nama_panggilan"];
    $tempat_lahir = $_POST["tempat_lahir"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $tanggal_lahir_lengkap = $_POST["tanggal_lahir_lengkap"];
    $departemen = $_POST["departemen"];
    $alamat_lengkap = $_POST["alamat_lengkap"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Laman Pendaftaran </title>
    <link rel="stylesheet" href="pendaftaran.css">
</head>
<body>
    <form action = "" method = "post">
        <div class="header">
            <div class="box-logo">
                <img src="logo-project.png" class="logo">
            </div>
            
            <a href="http://localhost/PHP/project_nezta/login/login.php">
                <section class="box-login">
                    <div class="box-login1">
                        Login
                    </div>
                </section>
            </a>

            <a href="http://localhost/PHP/project_nezta/pendaftaran/pendaftaran.php">
                <section class="box-pendaftaran">
                    <div class="box-pendaftaran1">
                        Sign Up
                    </div>
                </section>
            </a>

            <a href="http://localhost/PHP/project_nezta/web_index/web_index.php">
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

        <div class="body-1">
            <div>
                <!-- Nama Lengkap -->
                    <input type="text" name="nama_lengkap" class="nama_lengkap" placeholder="Nama Lengkap">
                    <br>
                <!-- Nama Panggilan -->
                    <input type="text" name="nama_panggilan" class="nama_panggilan" placeholder=" Nama Panggilan">
                    <br>
                <!-- Tempat Lahir -->    
                    <input type="comment" name="tempat_lahir" class="tempat_lahir" placeholder="Kota Kelahiran">
                    <br>
                <!-- Tanggal Lahir -->
                    <input type="date" name="tanggal_lahir" class="tanggal_lahir" placeholder="Tanggal Lahir (angka)">
                    <br>
                    <input type="text" name="tanggal_lahir_lengkap" class="tanggal_lahir_lengkap" placeholder="Masukan tanggal sesuai dengan data diatas ex: 02 Maret 1998">
                    <br>
                <!-- Fakultas Teknik -->
                    <input type="comment" name="departemen" class="departemen" placeholder="Departemen Kuliah">
                    <br>
                <!-- Alamat Domisili -->
                    <input type="comment" name="alamat_lengkap" class="alamat_domisili" placeholder="Alamat rumah / kos">
                    <br>
                <!-- Tombol untuk submit -->
                    <input type="submit" name="daftar" value=" Mendaftar " class="btn-4">
                    <br>
                </div>
            </div>

            <div class="body-2">
                <div class="logo-data">
                    <?php 
                        if(isset($_POST["daftar"])){
                    ?>      
                        <img src="logo-kartu.png" class="logo-kartu">
                    <?php
                        }
                    ?>
                    <div class="judul-data">
                        <?php 
                            if(isset($_POST["daftar"])){
                            echo $departemen ; 
                            }
                        ?>
                        <div class="garis">
                            <?php 
                                if(isset($_POST["daftar"])){
                            ?>      
                                <img src="garis.png" class="garis">
                            <?php
                                }
                            ?>
                        </div>
                    </div>    
                </div>
                    <!-- Data Lengkap (gabungan pake PHP)-->
                    <div class="isi-data">
                        <?php if(isset($_POST["daftar"])){ ?>
                        Mahasiswa dengan nama lengkap <?php echo $nama_lengkap; ?> yang lahir pada  <?php echo $tanggal_lahir_lengkap; ?> yang berasal dari <?php echo $tempat_lahir; ?>, ia sering dipanggil dengan sebutan <?php echo $nama_panggilan; ?> pada saat ini beliau mengemban pendidikan di Universitas Diponegoro, terkhususnya jurusan <?php echo $departemen; ?>. pada saat ini dia berdomisili di <?php echo $alamat_lengkap; ?>. 
                        </br>
                        </br>
                        Dengan data ini apabila saudara <?php echo $nama_panggilan; ?> melakukan kecurangan maka saudara <?php echo $nama_panggilan; ?> akan di tindak lebih lanjut dengan dugaan kejahatan.
                        <?php } ?>
                    </div>
            </div>
        </div>

    </form>
</body>
</html>

