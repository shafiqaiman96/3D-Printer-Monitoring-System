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
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/morris.css'?>">
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
        Latest Condition
        <small>This graph will be updated every 5 minutes</small>
      </h1></br>
    </section>
     </section>
    <div class="row-graph">
      <div class="col-md-6">
        <div class="box-graph">
          <div class="box-header with-border" style="height: 280px"><h3 class="box-title">Inside Temperature</h3><div id="graph" style="height: 250px;"></div>
           </div>
        </div>
        <div class="box-graph">
          <div class="box-header with-border" style="height: 280px"><h3 class="box-title">Inside Humidity</h3><div id="graph2" style="height: 250px;"></div>
           </div>
        </div>  
      </div>
      <div class="col-md-6" style="float: right;">
        <div class="box-graph">
        <div class="box-header with-border" style="height: 280px"><h3 class="box-title">Outside Temperature</h3><div id="graph3" style="height: 250px;"></div>
           </div>
        </div>
        <div class="box-graph">
          <div class="box-header with-border" style="height: 280px"><h3 class="box-title">Outside Humidity</h3><div id="graph4" style="height: 250px;"></div>
           </div>
        </div>
      </div>
      <!-- /.col -->
    </div>

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
<script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/raphael-min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/morris.min.js'?>"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script>
        Morris.Line({
          element: 'graph',
          data: <?php $CI = & get_instance(); echo $CI->tempin();?>,
          xkey: ['dateandtime'],
          ykeys: ['temperature'],
          ymin: 15,
    	    ymax: 45,
          labels: ['Temperature (IN)'],
          fillOpacity: 1.0,
          hideHover: 'auto',
          behaveLikeLine: true,
          resize: false,
          pointFillColors:['#ffffff'],
          pointStrokeColors: ['black'],
          lineColors:['red'],
          ylineWidth: '1px',
        });
    </script>
     <script>
        Morris.Line({
          element: 'graph2',
          data: <?php $CI = & get_instance(); echo $CI->humidin();?>,
          xkey: ['dateandtime'],
          ykeys: ['humidity'],
          ymin: 20,
          ymax: 40,
          labels: ['Humidity (IN)'],
          fillOpacity: 1.0,
          hideHover: 'auto',
          behaveLikeLine: true,
          resize: false,
          pointFillColors:['#ffffff'],
          pointStrokeColors: ['black'],
          lineColors:['blue'],
          ylineWidth: '1px',
        });
    </script>
    <script>
        Morris.Line({
          element: 'graph3',
          data: <?php $CI = & get_instance(); echo $CI->tempout();?>,
          xkey: ['dateandtime'],
          ykeys: ['temperature'],
          ymin: 15,
          ymax: 45,
          labels: ['Temperature (OUT)'],
          fillOpacity: 1.0,
          hideHover: 'auto',
          behaveLikeLine: true,
          resize: false,
          pointFillColors:['#ffffff'],
          pointStrokeColors: ['black'],
          lineColors:['green'],
          ylineWidth: '1px',
        });
    </script>
    <script>
        Morris.Line({
          element: 'graph4',
          data: <?php $CI = & get_instance(); echo $CI->humidout();?>,
          xkey: ['dateandtime'],
          ykeys: ['humidity'],
          ymin: 40,
          ymax: 60,
          labels: ['Humidity (OUT)'],
          fillOpacity: 1.0,
          hideHover: 'auto',
          behaveLikeLine: true,
          resize: false,
          pointFillColors:['#ffffff'],
          pointStrokeColors: ['black'],
          lineColors:['purple'],
          ylineWidth: '1px',
        });
    </script>
</body>
<style>
  
  .box-graph {
    position: relative;
    border-radius: 3px;
    background: #ffffff;
    border-top: 3px solid #d2d6de;
    margin-bottom: 20px;
    width: 520px;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
}
</style>
</html>