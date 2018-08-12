<?php 

require "Config.php";
header("Cache-Control: no cache");

if(isset($_POST["submit"])) {

  $username = $_POST["nama_user"];
  $password = $_POST["password_user"];

  $result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");

  if(mysqli_num_rows($result) === 1)  {


    //cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])){
      header("Location: index.php");
      exit;

    }
  }

  $error = true;
}


 ?><!DOCTYPE html>
<html>
<head>
	
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>EAZY HEALTH APP - Login</title>

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

	 <nav class="navbar navbar-expand-sm r-green mb-0 ">
       
        <b>EAZY TEAM</b>
    </nav>

    <br>

    <div class="row mt-3">
    	<div class="col-4 mx-auto">

        <?php if(isset($error)) : ?>

          <p style="color: red">Username atau password yang anda masukkan salah</p>
        <?php endif; ?>
    		<h3 class="text-center">LOGIN</h3>
    		<div class="card container mt-2">
    			<form action="login.php" method="post">
    			  <div class="form-group mt-4">
                        <label for="namauser">Username : </label>
                         <input type="text" class="form-control" id="namauser" name="nama_user" placeholder="Masukkan Username" required>
                  </div>

                  <div class="form-group">
                         <label for="usernameuser">Password : </label>
                         <input type="Password" class="form-control" id="usernameuser" name="password_user" placeholder="Masukkan Password" required>
                  </div>
                  
                  <button class="btn btn-info mb-2 float-right" type="submit" name="submit">Log In</button>
    			
    		</form>
    		</div>
    		
    	</div>
    </div>


</body>
</html>