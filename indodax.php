<?php
    include 'logic/get_info.php';
    include 'logic/api.php';
    $get_info = get_info($url, $key, $secretKey);
    $get_info_price = get_price();
    // var_dump($get_info_price); die;
?> 
<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="refresh" content="60" />
  <title>GET INFO | INDODAX</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="assets/index3.html" class="navbar-brand">
        <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="indodax.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="order.php" class="nav-link">Order</a>
          </li>
          <li class="nav-item">
            <a href="index.php" class="nav-link">Callculate Profit</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Top Navigation <small>Example 3.0</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="indodax.php">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Top Navigation</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">INFO FROM INDODAX API</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 150px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>COIN</th>
                      <th>BALANCE HOLD</th>
                      <th>Address</th>
                      <th>Hight Price</th>
                      <th>Low Price</th>
                      <th>Lase Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><?= "BTC" ?></td>
                      <td><?= $get_info['return']['balance_hold']['btc']; ?></td>
                      <?php if ($get_info['return']['address']['btc']) { ?>
                        <td><?= $get_info['return']['address']['btc']; ?></td>
                      <?php } else {echo 'You not have wallet address';} ?>
                      <td><?= $get_info_price['tickers']['btc_idr']['high']; ?></td>
                      <td><?= $get_info_price['tickers']['btc_idr']['low']; ?></td>
                      <td><?= $get_info_price['tickers']['btc_idr']['last']; ?></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><?= "ACT" ?></td>
                      <td><?= $get_info['return']['balance_hold']['act']; ?></td>
                      <?php if ($get_info['return']['address']['act']) { ?>
                        <td><?= $get_info['return']['address']['act']; ?></td>
                      <?php } else {echo '<td>You not have wallet address</td>';} ?>
                      <td><?= $get_info_price['tickers']['act_idr']['high']; ?></td>
                      <td><?= $get_info_price['tickers']['act_idr']['low']; ?></td>
                      <td><?= $get_info_price['tickers']['act_idr']['last']; ?></td>
                    </tr>
                  </tbody>
                </table> 
              </div>
            </div>
          </div>
        </div>
      <div class="container">
        <center class="mt-3 ">
          <h1>This bot made by Rimba Dirgantara</h1>
        </center>
      </div>
    </div>
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <!-- <footer class="main-footer">
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer> -->
</div>

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
</body>
</html>
