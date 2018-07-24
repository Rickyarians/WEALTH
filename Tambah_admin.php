<?php 

require 'Config.php';


if (isset($_POST["register"])) {


    if (registrasi($_POST) > 0 ) {
        echo "<script>
                alert('Data berhasil Di Simpan!');
              </script> ";
             
              
    } else {

        mysqli_error($conn);
       
    }
}

 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>EAZY HEALTH APP</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style4.css">

    <!-- Font Awesome JS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

</head>

<body>

    <!-- Navbar Bang -->
    <nav class="navbar navbar-expand-sm r-green mb-0 ">
        <button type="button" id="sidebarCollapse" class="btn btn-sm btn-outline-light ml-3 mr-2">
            <i class="fas fa-bars r-btn-menu"></i>
        </button>
        Menu Utama
    </nav>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h4>Eazy Health POS</h4>
                <strong>EZ</strong>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="index.php">
                        <i class="fas fa-chart-bar"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#ObatMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fas fa-tablets"></i>
                        Master Obat
                    </a>
                    <ul class="collapse list-unstyled" id="ObatMenu">
                        <li>
                            <a href="#"><i class="fas fa-list"></i>Daftar Obat</a>
                        </li>
                        <li>
                            <a href="#"><i class="far fa-plus-square"></i>Tambah Jenis Obat</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-filter"></i>Tambah Jenis Obat</a>  
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#PasienMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-user"></i>
                        Master Pasien
                    </a>
                    <ul class="collapse list-unstyled"      id="PasienMenu">
                        <li>
                            <a href="daftar_pasien.php"><i class="fas fa-list"></i>Daftar Pasien</a>
                        </li>
                        <li>
                            <a href="Tambah_pasien.php"><i class="far fa-plus-square"></i>Tambah Pasien</a>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        Master Dokter
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#"><i class="fas fa-list"></i>Daftar Dokter</a>
                        </li>
                         <li>
                            <a href="#"><i class="far fa-plus-square"></i>Tambah Dokter</a>
                        </li>
                    </ul>
                </li>

                  <li>
                    <a href="#adminMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-cog"></i>
                        Pengaturan
                    </a>
                    <ul class="collapse list-unstyled" id="adminMenu">
                        <li>
                            <a href="#"><i class="fas fa-users-cog"></i>User Admin</a>
                        </li>
                         <li>
                            <a href="#"><i class="far fa-plus-square"></i>Aplikasi</a>
                        </li>
                    </ul>
                </li>
                
                
            </ul>    
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <h5 class="mt-3 mb-2">
                            Daftar Admin
                        </h5>
                <div class="card container">
                       <form action="" method="post">

                                <div class="form-group mt-4">
                                  <label for="namauser">Nama Admin : </label>
                                  <input type="text" class="form-control" id="namauser" name="nama_user" placeholder="Masukkan nama Admin" required>
                                </div>

                                <div class="form-group">
                                  <label for="usernameuser">Username : </label>
                                  <input type="text" class="form-control" id="usernameuser" name="username_user" placeholder="Masukkan Username" required>
                                </div>

                                 <div class="form-group">
                                  <label for="passworduser">Password : </label>
                                  <input type="password" class="form-control" id="passworduser" name="password" placeholder="Masukkan Password" required>
                                </div>

                                <div class="form-group">
                                    <label for="passworduser2">Konfirmasi Password : </label>
                                    <input type="password" name="password2" id="password2" class="form-control" placeholder="Masukkan Konfirmasi Password" required>
                                </div>

                                <div class="form-group">
                                    <label for="alamatemailuser">Alamat Email : </label>
                                    <input type="email" name="alamatemailuser" id="alamatemailuser"" class="form-control" placeholder="Masukkan Alamat Email" required></input>
                                </div>

                               

                                <button type="submit" name="register" class="btn btn-success float-right"><i class="fas fa-save mr-2"> </i>Simpan</button>
                              </form>
                    

            
                </div>
        </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>