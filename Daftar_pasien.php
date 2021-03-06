<?php 

require 'Config.php';



$pasien = query("SELECT * FROM pasien");


// tombol cari di tekan 

if (isset($_POST["cari"])) {

        $pasien = cari($_POST["keyword"]);

        
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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

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
                <li class="active">
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
                    <ul class="collapse list-unstyled" id="PasienMenu">
                        <li>
                            <a href=""><i class="fas fa-list"></i>Daftar Pasien</a>
                        </li>
                        <li>
                            <a href="Tambah_pasien.php"><i class="far fa-plus-square"></i>Tambah Pasien</a>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-copy"></i>
                        Dokter
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
                            <a href="Admin.php"><i class="fas fa-users-cog"></i>User Admin</a>
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
                            Daftar Pasien
                        </h5>
                <div class="card">

                    <form class="container-fluid mt-3" action="Daftar_pasien.php" method="post">
                        
                       
                        <input 
                        type="text" 
                        name="keyword" size="50" autofocus="true" placeholder="Masukkan Pencarian Anda" autocomplete="off">
                        <button type="submit" name="cari">
                            Cari!
                        </button>

                    </form>
                    <div class="container-fluid">
                       
                        <div class="table-responsive mt-3">
                            <table class="table">

                                <thead class="small">
                                    <tr>
                                        <th class="align-middle">
                                            NO
                                        </th>
                                         <th class="align-middle">
                                            Photo
                                        </th>
                                        <th class="align-middle">
                                            Nama Pasien
                                        </th>
                                        <th class="align-middle">
                                            Umur Pasien
                                        </th>
                                         <th class="align-middle">
                                            Jenis Kelamin
                                        </th>
                                         <th class="align-middle">
                                            Nomor Telepon 
                                        </th>
                                         <th class="align-middle">
                                            Alamat
                                        </th>
                                        <th class="align-middle">
                                            Action
                                        </th>
                                    </tr>
                                   
                                </thead>

                                <tbody>
                                    <?php $numburut = 1; ?>
                                    <?php foreach ($pasien as $row ) : ?>
                                    <tr>
                                        <td class="align-middle small">
                                           <?php echo $numburut ?>
                                        </td>

                                        <td class="align-middle small">
                                            <img style="height: 100px; width: 100px;" src="img/<?= $row['photo'] ?>" alt="">
                                        </td>
                                        
                                        <td class="align-middle small">
                                           <?php echo $row["nama_pasien"] ?>
                                        </td>
                                        <td class="align-middle small">
                                            <?= $row["umur_pasien"] ?>
                                        </td>
                                        <td class="align-middle small">
                                            <?= $row["jenis_kelamin"] ?>
                                        </td>
                                        <td class="align-middle small">
                                            <?= $row["no_telepon"] ?>
                                        </td>
                                        <td class="align-middle small">
                                            <?= $row["alamat"] ?>
                                        </td>
                                        <td class="align-middle small">
                                            <a href="ubah_pasien.php?id=<?=$row["id_pasien"] ; ?>" class="btn btn-sm btn-success text-light"><i class="fas fa-pen mr-1"></i>ubah</a>

                                             <a href="hapus.php?id=<?= $row["id_pasien"]; ?>" class="btn btn-sm btn-danger" onclick="return confirm('yakin?');"><i class="fas fa-trash-alt mr-1"></i>Hapus</a>

                                        </td>
                                    </tr>
                                    <?php $numburut++; ?>
                                <?php endforeach; ?>

                                </tbody>
        
                            </table>
                        </div>
                     </div>   

                </div>  

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