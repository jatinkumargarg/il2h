<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>IL2H| <?=$heading?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <?= link_tag("assets/css/all.min.css");?> 
    <!-- custom css -->
    <?= link_tag("assets/css/custom.css");?> 
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> 
   <!-- DataTables -->
   <?= link_tag("assets/css/dataTables.bootstrap4.css");?>
   
  <!-- iCheck -->
  <?= link_tag("assets/css/icheck-bootstrap.min.css");?>
  <!-- Theme style -->
  <?= link_tag("assets/css/adminlte.css");?>

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
    .navbar-white{
      box-shadow: 0px 2px 15px hsl(0deg 0% 0% / 10%);
      background: linear-gradient(90deg,#1f4ccc,#6decbb);
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>
    <?php 
      $website_url = site_url();
    ?>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <li class="nav-item" ><a target="_blank" href="<?=str_replace('administrator/','',$website_url)?>" class="nav-link" >Website</a></li>
      <!-- <li class="nav-item" ><a href="JavaScript:Void(0);" class="nav-link" ><?php echo $this->session->userdata['user_info']['name']; ?></a></li> -->
      <li  class="nav-item"  ><a href="<?=site_url('logout')?>" class="nav-link" >Logout</a></li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=site_url()?>" class="brand-link" style="box-shadow: 0px 2px 15px hsl(0deg 0% 0% / 10%);background: linear-gradient(90deg,#6decbb,#1f4ccc);height:57px" >
      
      <img src="<?=base_url('../assets/images/il2hLogo.svg')?>" alt="IL2H" class="brand-image "
          >
      <span class="brand-text font-weight-light"><strong></strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <?php  
            $menu_array = array(
                          // '1' => array('url' => 'Dashboard','favicon' => 'fas fa-tachometer-alt', 'text' => 'Dashboard'), 
                           '2' => array('url' => 'Ngo','favicon' => 'fas fa-rss', 'text' => 'NGO'),
                           '3' => array('url' => 'Volunteer','favicon' => 'fas fa-rss', 'text' => 'Volunteer'), 
                           '4' => array('url' => 'Onsite','favicon' => 'fas fa-rss', 'text' => 'Onsite Campaigns'), 
                           '5' => array('url' => 'Online','favicon' => 'fas fa-rss', 'text' => 'Online Campaigns'), 
                                                 
                          );
                $current_classname =  $this->router->fetch_class();
                foreach($menu_array AS $key => $value ){
                  $active = '';    
                  if($current_classname == $value['url'] ) {
                    $active = 'active';
                  }      
          ?>


          <li class="nav-item">
            <a href="<?=site_url($value['url'])?>" class="nav-link <?=$active?>">
            <i class="nav-icon <?=$value['favicon']?>" aria-hidden="true"></i>
              <p><?=$value['text']?></p>
            </a>
          </li>
                <?php } ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <?php if($this->session->flashdata('Message')): echo $this->session->flashdata('Message'); endif; ?>
  <?php if($this->session->flashdata('Message2')): echo $this->session->flashdata('Message2'); endif; ?>