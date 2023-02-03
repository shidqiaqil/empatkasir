<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link  href="assets/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="assets/css/loginadmin.css" rel="stylesheet">
    
    <title>Document</title>
</head>

<!-- check login -->
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			$message= "Login gagal! username dan password salah!";
            echo "<script type='text/javascript'>alert('$message');</script>";
		}else if($_GET['pesan'] == "logout"){
			$message= "Anda telah berhasil logout";
            echo "<script type='text/javascript'>alert('$message');</script>";
		}else if($_GET['pesan'] == "belum_login"){
			$message= "Anda harus login untuk mengakses halaman admin";
            echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}
?>
<!-- ------------ -->
<body>
    <!-- Section: Design Block -->
    <!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
  <style>
    .background-radial-gradient {
      background-color: hsl(218, 41%, 15%);
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%);
    }
    

    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#44006b, #ad1fff);
      overflow: hidden;
    }

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
  </style>

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          Sistem Informasi <br />
          <span style="color: hsl(218, 81%, 75%)">Empatkopi Coffe Shop</span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
          Whatever today is for you, may it be enough, and may it bring you joy. May it also bring you coffee.
          Because that's a pretty good start.
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <form method="post" action="cek_login.php">

            <h3>Please Login</h3></br>
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="text" id="form3Example3" class="form-control" name="username"/>
                <label class="form-label" for="form3Example3">username</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control" name="password" />
                <label class="form-label" for="form3Example4">Password</label>
              </div>

              <!-- Checkbox -->


              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-12 btn-lg " style="padding-left: 2.5rem; padding-right: 2.5rem; background-color: #182a47; border-color: #182a47;"">
                login
              </button>

              <!-- Register buttons -->
              <div class="text-center">
                <p>Our Social Media</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-instagram"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-whatsapp"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-tiktok"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
<!-- Section: Design Block -->
    
</body>
</html>