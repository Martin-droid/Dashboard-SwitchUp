<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SwitchUp | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://use.fontawesome.com/1abf681e71.js"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="https://use.fontawesome.com/9ad4836e67.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light ">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge"></span>
        </a>
       
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #002D62">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="img\switch2.png" alt="" class="brand-image img-circle elevation-3"
           style="">
      <span class="brand-text font-weight-light">SwitchUp</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background-color: #002D62;">
      <!-- Sidebar user panel (optional) -->
 

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                             </p>
            </a>
            <ul class="nav nav-treeview">
             
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Tenants
                
              </p>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Individual.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Individuals</p>
      </a>
    </li>
  </ul>
           <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="org.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Organization</p>
      </a>
    </li>
  </ul>
          
       
         <li class="nav-item">
            <a href="property.php" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>
                 Property
              </p>
               
      </a>
    </li>

       <li class="nav-item">
            <a href="propertytype.php" class="nav-link">
             <i class=" nav-icon fa fa-building-o" aria-hidden="true"></i>
              <p>
                  Property Types  
              </p>
               
      </a>
    </li>

  <li class="nav-item">
            <a href="unittype.php" class="nav-link">
              <i class="nav-icon fa fa-building"></i>
              <p>
                 Unit Types
                
              </p>
               
      </a>
    </li>

      <li class="nav-item">
            <a href="paymentmethod.php" class="nav-link">
            <i class="nav-icon fa fa-cc-mastercard" aria-hidden="true"></i>
              <p>
                 Payment Methods
                
              </p>
               
      </a>
    </li>

  <li class="nav-item">
            <a href="payment.php" class="nav-link">
             <i class="nav-icon fa fa-credit-card" aria-hidden="true"></i>
              <p>
                Payments
                
              </p>
               
      </a>
    </li>
     
               <li class="nav-item">
            <a href="services.php" class="nav-link">
              <i class="nav-icon fa fa-truck"></i>
              <p>
               Service Providers   
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="services.php" class="nav-link">
              <i class="nav-icon fa fa-file"></i>
              <p>
                Reports 
              </p>
            </a>
          </li>
         <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fa fa-cog"></i>
              <p>
                Settings
                
              </p>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
</div>
</aside>

 




<div class="content-wrapper">


<div class="container" style="padding-bottom: 20px;"> 
 <div class="row"> <!-- Content Header (Page header) -->

<div class="col-md-12">
<form style="margin-bottom: 20px;">
  <div id="form1">
  <div class="col-md-12">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
  </div>
  </div>

    <div class="col-md-12">
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Description">
 
  </div>
</div>


      
  <button type="submit" class="btn btn-primary" id="add_payment">Add Payments</button>
</form>
</div>
</div>
</div>







<div class="container">
  <div  style="width: 100%; margin-bottom: 10px;">
  <span class="btn btn-primary">
    All Payments
  </span>
  <button type="submit" id="submit2"  class="btn btn-primary" style="display: inline-block; float:right;" >New Payments </button>
</div>

  <div class="row" id="table1" style="padding-top: 10px; font-size: 13px;">





<table class="table" style="justify-content: center; text-align:center;">
  <thead>

    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Amount</th>
      <th scope="col">Gateway</th>
      <th scope="col">Date</th>
       <th scope="col">Status</th>
  <th scope="col"><a href="">View Details</th>
                  
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Rent</td>
      <td>Kshs 20,000</td>
      <td>Mpesa</td>
      <td>17/2/21</td>
      <td>Cleared</td>
      <td><a href="">View Details</td>
                  

    
</tr>
      
      <tr>
      <th scope="row">1</th>
      <td>Rent</td>
      <td>Kshs 20,000</td>
      <td>Mpesa</td>
      <td>17/2/21</td>
      <td>Cleared</td>
      <td><a href="">View Details</td>
                  

    
</tr>
           <tr>
      <th scope="row">1</th>
      <td>Rent</td>
      <td>Kshs 20,000</td>
      <td>Mpesa</td>
      <td>17/2/21</td>
      <td>Cleared</td>
      <td><a href="">View Details</td>
                  

    
</tr>
                  
    
</tr>
  </tbody>
</table>


</div>


</div>
    <!-- Content Header (Page header) -->
</div>
</div>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $(document).ready(function() {
    $("#form1").hide();
  });

 


   $(document).ready(function() {
    $("#submit2").click(function() {
    $("#form1").show(); , $("#table1").hide();
  });
});

</script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

</body>
</html>
