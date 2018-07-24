<?php 
require 'Config.php';

$jmlpasien = totalData("SELECT * FROM pasien");


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

     <!-- Chart JS -->
    <script type="text/javascript" src="js/Chart.js"> </script>
    <script type="text/javascript" src="js/Chart.min.js"></script>


   


</head>

<body>

    <!-- Navbar Bang -->
    <nav class="navbar navbar-expand-sm r-green mb-0 ">
        <button type="button" id="sidebarCollapse" class="btn btn-sm btn-outline-light ml-3 mr-2">
            <i class="fas fa-bars r-btn-menu"></i>
        </button>
        <b>EAZY CROT TEAM</b>
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
                    <a href="#">
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

            <h3 class="mt-3">DASHBOARD</h3>
            <hr class="mb-4">

            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                          <div class="card bg-lgblue">
                            <div class="card-body text-center">
                                <div class="row">
                                    <div class="col">
                                        <h2 class="text-light">10</h2>
                                         <p class="card-text text-light">Data Dokter</p>
                                    </div>
                                    <div class="col">
                                        <i class="fas fa-user-md fa-5x text-light mt-3"></i>
                                    </div>
                                </div>
                             
                            </div>
                        </div>
                    </div>
                    <div class="col">
                         <div class="card bg-pasien">
                            <div class="card-body text-center">
                              <div class="row">
                                    <div class="col">
                                        <h2 class="text-light"><?= $jmlpasien; ?></h2>
                                         <p class="card-text text-light">Data Pasien</p>
                                    </div>
                                    <div class="col">
                                        <i class="fas fa-user fa-5x text-light mt-3"></i>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                    <div class="col">
                         <div class="card bg-obat">
                            <div class="card-body text-center">
                             <div class="row">
                                    <div class="col">
                                        <h2 class="text-light">10</h2>
                                         <p class="card-text text-light">Data Obat</p>
                                    </div>
                                    <div class="col">
                                        <i class="fas fa-tablets fa-5x text-light mt-3"></i>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div> 
                    <div class="col">
                          <div class="card bg-resep">
                            <div class="card-body text-center">
                              <div class="row">
                                    <div class="col">
                                        <h2 class="text-light">73</h2>
                                         <p class="card-text text-light">Data Resep</p>
                                    </div>
                                    <div class="col">
                                        <i class="fas fa-prescription fa-5x text-light mt-3"></i>
                                    </div>
                                </div>
                            </div>
                          </div> 
                    </div>       
                </div>


                <hr class="mt-4">

                <div class="row mb-4 mt-4">   
                    <div class="col">
                        <h4 class="mt-2 mb-4">Cash Flow</h4>
                         <table class="table table-striped">
                            <tbody>
                              <tr>
                                <th class="">Modal :</th>
                                <td>Rp. 1.000.000 </td>
                              </tr>

                               <tr class="mt-2">
                                <th class="text-success">Pendapatan :</th>
                                <td >Rp. 2.000.000 </td>
                              </tr>

                               <tr>
                                <th class="text-danger">Pengeluaran :</th>
                                <td>Rp. 300.000 </td>
                              </tr>

                               <tr>
                                <th class="text-warning">Biaya Tak Terduga :</th>
                                <td> Rp. 0 </td>
                              </tr>

                               <tr>
                                <th class="font-weight-bold text-info">Keuntungan : </th>
                                <td>Rp. 700.000 </td>
                              </tr>

                         </table>

                    </div>

                    <div class="col">
                        <h4 class="mt-2 mb-4">Data User<h4>

                            <div class="col">
                                
                            </div>
                            <div class="row">

                                <div class="col-md-4">   
                                <img 
                                style="width: 100%;" 
                                src="img/lontong.jpg" 
                                alt="">
                                </div>

                                <div class="col-md-8">

                                    <div class="row">
                                        <div class="col">
                                            <form>
                                                <div class="form-group">
                                                  <label class="small">ID User : </label>
                                                  <input type="text" class="form-control" value="#RA001" disabled="">
                                                </div>
                                            </form>
                                        </div>

                                        <div class="col">
                                            <form>
                                                <div class="form-group">
                                                  <label class="small">Nama : </label>
                                                  <input type="text" class="form-control" value="Ricky Ariansyah" disabled="">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <form>
                                        

                                         <div class="form-group">
                                          <label class="small">Alamat Email : </label>
                                          <input type="text" class="form-control" value="rickyarians@outlook.com" disabled="">
                                        </div>

                                         <div class="form-group">
                                          <label class="small">No Telepon : </label>
                                          <input type="text" class="form-control" value="0823234820" disabled="">
                                        </div>
                                    </form>

                                </div>
                            </div>
                            

                    </div>
                </div>


                <hr class="mb-4">


                <h4 class="mt-3">Pasien</h4>
                <div class="container-fluid">
                <div class="row mt-4">
                    <div class="col card bg-light">
                        <canvas id="donattipePasien" style="height: 400px;"></canvas>
                    </div>

                    <div class="col card bg-light ml-4">
                        <canvas id="donatrawatPasien"  style="height: 400px;"></canvas>
                    </div>
                    
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

   
    <script type="text/javascript">
        //get the doughnut chart canvas
    var ctx1 = $("#donattipePasien");
    var ctx2 = $("#donatrawatPasien");

    //doughnut chart data
    var data1 = {
        labels: ["BPJS", "Umum", "Asuransi"],
        datasets: [
            {
                label: "",
                data: [10, 50, 25],
                backgroundColor: [
                    "#4CAF50",
                    "#03A9F4",
                    "#FF5252",
                ],
                borderColor: [
                    "#4CAF50",
                    "#03A9F4",
                    "#FF5252",     
                ],
                borderWidth: [1, 1, 1, 1, 1]
            }
        ]
    };

    //doughnut chart data
    var data2 = {
        labels: ["Rawat Inap", "Rawat Jalan"],
        datasets: [
            {
                label: "",
                data: [20, 35],
                backgroundColor: [
                    "#9E9E9E",
                    "#DCDCDC",
                ],
                borderColor: [
                    "#9E9E9E",
                    "#CBCBCB",
                    
                ],
                borderWidth: [1, 1, 1, 1, 1]
            }
        ]
    };

    //options
    var options1 = {
        responsive: true,
        title: {
            display: true,
            position: "top",
            text: "Jenis Layanan Pasien",
            fontSize: 18,
            fontColor: "#111"
        },
        legend: {
            display: true,
            position: "bottom",
            labels: {
                fontColor: "#333",
                fontSize: 16
            }
        }
    };

      var options2 = {
        responsive: true,
        title: {
            display: true,
            position: "top",
            text: "Rawat Inap dan Rawat Jalan",
            fontSize: 18,
            fontColor: "#111"
        },
        legend: {
            display: true,
            position: "bottom",
            labels: {
                fontColor: "#333",
                fontSize: 16
            }
        }
    };

    //create Chart class object
    var donattipePasien = new Chart(ctx1, {
        type: "pie",
        data: data1,
        options: options1
    });

    //create Chart class object
    var donatrawatPasien = new Chart(ctx2, {
        type: "doughnut",
        data: data2,
        options: options2
    });


       
    </script>
</body>

</html>