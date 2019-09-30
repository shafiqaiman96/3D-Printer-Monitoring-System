<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>3DPrinter Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>dist/css/skins/skin-yellow.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="<?php echo base_url()."assets/"; ?>https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="<?php echo base_url()."assets/"; ?>https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="<?php echo base_url()."assets/"; ?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>3D</b>Pr</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>3DPrinter</b> Admin</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="<?php echo base_url()."assets/"; ?>#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="<?php echo base_url()."assets/"; ?>#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?php echo base_url()."assets/"; ?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo base_url()."assets/"; ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  SHAFIQ JEFRI - MFI Student
                  <small><i>Contact me if you have any problem</i></small>
                </p>
              </li>
              <li class="user-body" style="background-color: #f39c12; border: #ffffff;">
                <div class="row">
                  <div class="col-xs-6 text-center">
                    <a href="https://wasap.my/60145326306" target="_blank"><img src="<?php echo base_url()."assets/"; ?>dist/img/whatsapp_logo.png" class="img-circle" alt="User Image" style="width: 20px; height: 20px;"> WhatsApp</a>
                  </div>
                  <div class="col-xs-6 text-center">
                    <a href="https://t.me/abeapiq/" target="_blank"><img src="<?php echo base_url()."assets/"; ?>dist/img/telegram_logo.png" class="img-circle" alt="User Image" style="width: 20px; height: 20px;"> Telegram</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Body -->
     
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->

            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()."assets/"; ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>User</p>
          <!-- Status -->
          <a href="<?php echo base_url()."assets/"; ?>#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Main Menu</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="<?php echo base_url().""; ?>"><i class="fa fa-check"></i> <span>Latest Update</span></a></li>
        <li class="treeview">
          <a><i class="fa fa-history"></i> <span>History</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()."chart"; ?>">Temperature & Humidity</a></li>
            <li><a href="<?php echo base_url()."stream"; ?>">Live Streaming</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        History of Temperature and Humidity
        <small>This data will be updated every 5 minutes</small>
      </h1></br>
    </section>
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
         <table width="100%"> 
              <tr style="background-color: cyan">
                <th>
                  Time
                </th>
                <th>
                  Sensor
                </th>
                <th>
                  Temperature 
                </th>
                <th>
                  Humidity 
                </th>
                
              </tr>
               <?php foreach ($condition->result() as $now) { ?>
              <tr>
                <td><?php echo $now->dateandtime; ?></td> 
                <?php if ($now->sensor == 'Inside') { ?>
                   <td style="color: red"><?php echo $now->sensor; ?></td>
                  <?php } elseif ($now->sensor == 'Outside') { ?>
                   <td style="color: blue"><?php echo $now->sensor; ?></td> <?php
                  } ?>
                <td><?php echo $now->temperature; ?></td>   
                <td><?php echo $now->humidity; ?></td>
                  <?php } ?>                
              </tr>
            </table>
        </div>
        </div>
        <a id="print" class="btn btn-success" href="<?php echo site_url()?>/chart/excel"><i class="fas fa-file-download"></i> Download</a>      
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      shafiq_jefri
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <a href="https://www.unikl.edu.my/institutes/mfi/">UniKL MFI</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()."assets/"; ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()."assets/"; ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()."assets/"; ?>dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
 <style>
    table, th, td, tr {
      border: 2px solid black;
      border-collapse: collapse;
      vertical-align: middle;
      padding-top: 10px;
      padding-left: 10px;
      padding-right: 10px;
      padding-bottom: : 10px;
      height: 30px; 
      text-align: center;
}
th {
  height: 50px;
  text-align: center;

}

#print {
  float: right;
  padding: 10px;
  margin: 10px;
}
    
  </style>
</html>