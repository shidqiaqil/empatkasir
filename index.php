 <!-- The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Empatkopi
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

    
	<!-- cek apakah sudah login -->
	<?php 
    include 'connect.php';
	session_start();
	if($_SESSION['status']!="login"){
		header("location:index.php?pesan=belum_login");
	}
	?>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Empat Kopi</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Transaksi</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="inputmenu.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Input Menu</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="inputinventory.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Input Inventory</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="manageinventory.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-app text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Manage Ingredients</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="historytransaction.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-list text-secondary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">History Transaction</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./pages/profile.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Sign out</span>
          </a>
        </li>
        
      </ul>
    </div>
    
  </aside>
  <main class="main-content position-relative border-radius-lg ">

    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Transaksi</a></li>
            <!-- <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li> -->
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Pembelian</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <?php 
        
        $sql = 'SELECT * FROM product';
        $result = mysqli_query($con, $sql);
        ?>

    
    <div class="container-fluid py-2">
      
      
      <div class="row mt-4">
        <div class="col-lg-5 mb-lg-0 mb-4">
          <div class="card ">
            <div class="card-header pb-0 p-3">
              <div class="d-flex justify-content-between">
                <h6 class="mb-2">List Menu</h6>
              </div>
            </div>
            <div class="table-responsive">
            <form action="addcart.php" method="POST">
              <table class="table align-items-center " id="t01">
              
              <tr class="text-center">
                          
                          <th>No</th>
                          <th>Name</th>
                          <th>Price</th>
                          <!-- <th>Quantity</th> -->
                          <th>Action</th>
                          <!-- <th>Quantity (in stock)</th> -->
                          <!-- <th>Buy</th> -->
                        </tr>
                        <?php
                          $date = date('Y-m-d H:i:s');
                          $data = mysqli_query($con,"select * from product");
                          $no = 1;
                          
                          while($d = mysqli_fetch_array($data)){
                          ?>    
                              <tr class="text-center">
                                 
                                  <!-- <input name ="id_product" class="form-control text-center" id="id_product" Type="hidden" value="<?php echo $d['id_product']; ?>" /> -->
                                  <input type="hidden" name="id_product" value="<?php echo $d['id_product']; ?>">
                                  <input name ="temp_creation_time_stamp" class="form-control text-center" id="temp_creation_time_stamp" Type="hidden" value="<?php echo $date; ?>" />
                                  <td><?php echo $no++; ?></td>

                                  <td>
                                  
                                    <input type="hidden" name="menu_name" value="<?php echo $d['menu_name']; ?>">
                                    <?php echo $d['menu_name']; ?>
                                  </td>
                                  <td>
                                    <input type="hidden" name="menu_price" value="<?php echo $d['menu_price']; ?>">
                                    <?php echo $d['menu_price']; ?>
                                  
                                  </td>
                                  <!-- <td>
                                      <div class="mb-3">
                              
                                          
                                                  <select name="quantity_buy" id="quantity_buy"class=" form-select" required>
                                                     
                                                      <?php 
                                                          $sql3=mysqli_query($con,"SELECT * FROM quantity");
                                                          while ($data3=mysqli_fetch_array($sql3)) {
                                                          ?>
                                                          <option value="<?=$data3['num_quantity']?>"><?=$data3['num_quantity']?></option> 
                                                          <?php
                                                      }
                                                      ?>
                                                  </select>
                                      </div>
                                  </td> -->
                                  <td style="text-align: center;">
                                  
                                  <?php
                                  
                                    echo "
                                        <a class=''  value='' href='addcart.php?id_product=".$d['id_product']."&menu_name=".$d['menu_name']."&menu_price=".$d['menu_price']."'><span class='far fa-plus-square link-success'></a>
                                        "; ?>
                                      <!-- <div class="d-grid">
                                          <button class="btn btn-warning btn-sm " id="submitButton" type="submit" name="create">Submit</button>
                                      </div> -->
                                  </td>
                              </tr>
                              <?php
                          }
                          ?>
              </table>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <form action="">
          <div class="card">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0">List Pembelian</h6>
            </div>
            <div class="card-body p-3">
              <ul class="list-group">
              <div class="table-responsive">
                <table class="table align-items-center " id="t01">
                
                      <tr class="text-center">
                          
                        <th>No</th>
                        <th>Menu Name</th>
                        <th style="width: 10%;">Quantity</th>
                        <th>Price</th>
                        <th>Action</th>
                        
                        <!-- <th>Quantity (in stock)</th> -->
                        <!-- <th>Buy</th> -->
                      </tr>
                      <?php
                        
                        $data3 = mysqli_query($con,"select temp_transaction.*, product.menu_name from temp_transaction left join product on temp_transaction.id_product=product.id_product");
                        $cek_data = mysqli_query($con, "select count(*) jumlah from temp_transaction");
                        $hasil_data = mysqli_fetch_assoc($cek_data);

                        $no3 = 1;
                        
                        if($hasil_data['jumlah'] == 0){
                          echo '<tr> <td colspan="99" class="text-center">Data Not Found</td> </tr>';
                        }else{
                        while($d3 = mysqli_fetch_array($data3)){
                        ?>    
                            <tr class="text-center">
                                <td><?php echo $no3++; ?></td>
                                <td><?php echo $d3['menu_name']; ?></td>
                                <td>
                                  <div class="mb-3 e">     
                                  <select onChange="window.document.location.href=this.options[this.selectedIndex].value;" class="form-control" name="jumlah_item">
                                    <option value="updatecart.php?id_temp_transaction=<?php echo $d3['id_temp_transaction'] ?>&quantity_buy=1" <?php ($d3['quantity_buy']==1) ? $sl = 'selected' : $sl =''; echo $sl ?>>1</option>
                                    <option value="updatecart.php?id_temp_transaction=<?php echo $d3['id_temp_transaction'] ?>&quantity_buy=2" <?php ($d3['quantity_buy']==2) ? $sl = 'selected' : $sl =''; echo $sl ?>>2</option>
                                    <option value="updatecart.php?id_temp_transaction=<?php echo $d3['id_temp_transaction'] ?>&quantity_buy=3" <?php ($d3['quantity_buy']==3) ? $sl = 'selected' : $sl =''; echo $sl ?>>3</option>
                                    <option value="updatecart.php?id_temp_transaction=<?php echo $d3['id_temp_transaction'] ?>&quantity_buy=4" <?php ($d3['quantity_buy']==4) ? $sl = 'selected' : $sl =''; echo $sl ?>>4</option>
                                    <option value="updatecart.php?id_temp_transaction=<?php echo $d3['id_temp_transaction'] ?>&quantity_buy=5" <?php ($d3['quantity_buy']==5) ? $sl = 'selected' : $sl =''; echo $sl ?>>5</option>
                                    <option value="updatecart.php?id_temp_transaction=<?php echo $d3['id_temp_transaction'] ?>&quantity_buy=6" <?php ($d3['quantity_buy']==6) ? $sl = 'selected' : $sl =''; echo $sl ?>>6</option>
                                    <option value="updatecart.php?id_temp_transaction=<?php echo $d3['id_temp_transaction'] ?>&quantity_buy=7" <?php ($d3['quantity_buy']==7) ? $sl = 'selected' : $sl =''; echo $sl ?>>7</option>
                                    <option value="updatecart.php?id_temp_transaction=<?php echo $d3['id_temp_transaction'] ?>&quantity_buy=8" <?php ($d3['quantity_buy']==8) ? $sl = 'selected' : $sl =''; echo $sl ?>>8</option>
                                    <option value="updatecart.php?id_temp_transaction=<?php echo $d3['id_temp_transaction'] ?>&quantity_buy=9" <?php ($d3['quantity_buy']==9) ? $sl = 'selected' : $sl =''; echo $sl ?>>9</option>
                                    <option value="updatecart.php?id_temp_transaction=<?php echo $d3['id_temp_transaction'] ?>&quantity_buy=10" <?php ($d3['quantity_buy']==10) ? $sl = 'selected' : $sl =''; echo $sl ?>>10</option>
                                  </select>
                                  </div>
                                </td>
                                <td>Rp<?php echo $d3['menu_price']; ?></td>
                                <td style="text-align: center;">
                                  <!-- <?php  echo "
                                        <a  value='' href='updatecart.php?id_temp_transaction=".$d3['id_temp_transaction']."&quantity_buy=".$_POST['quantity_buy']."'><span class='fas fa-sync-alt link-success'></a>
                                        "; ?> -->
                                    <!-- <a href="updatecart.php?id_temp_transaction=<?php echo $d3['id_temp_transaction']; ?>"><span class="fas fa-sync-alt link-success "></span></a> -->
                                    <a onclick="return confirm('Apakah yakin data akan di hapus?')" href="hapuscart.php?id_temp_transaction=<?php echo $d3['id_temp_transaction']; ?>"><span class="far fa-trash-alt link-danger ms-1"></span></a>
                                    
                                  </td>
                            </tr>
                            <?php
                        }
                        }
                        ?>
                        <tfoot class="text-center">
                          <?php 
                             $data7 = mysqli_query($con,"select sum(menu_price) as total from temp_transaction");
                             $total = mysqli_fetch_array($data7);
                             
                          ?>
                            <tr>
                                <th></th>
                               
                                
                                <th scope="row">Total</th>
                                <!-- <td>Web-Development Bundle</td> -->
                                
                                <td></td>
                                <td><b>Rp<?php echo $total['total'] ?></b></td>
                                <td><a href="checkout.php">Checkout</a></td>
                            </tr>
                </table>
              </div>       
              </ul>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row  justify-content-lg-between">

            <div class="col-lg-8">
              <div class="copyright text-right text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Argon Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="d-flex my-3">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

<script>
     jQuery(function($) {
         $('select').on('change', function() {
           var url = $(this).val();
           if (url) {
             window.location = url;
           }
           return false;
         });
         });
     </script>

     
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>
</html>