<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=$title?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <?= link_tag("assets/css/all.min.css");?>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
 
  <!-- Theme style -->
  <?= link_tag("assets/css/adminlte.min.css");?>
  
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
  <style>
    .login-box {
      
      box-shadow: 0px 2px 15px hsl(0deg 0% 0% / 10%);
      background: linear-gradient(90deg,#d075e4,#f6ae72);
     
    }
    .login-card-body, .card  {
    background: transparent;
    }
    .card {
        box-shadow: none; 
    }
    .login-page{
      box-shadow: 0px 2px 15px hsl(0deg 0% 0% / 10%);
      background: linear-gradient(90deg,#f6ae72,#d075e4);
    }
    input.form-control {
        width: 85% !important;
    }
    .error {
        color: red;
    }
    .login-box-msg, .fas{
      color:#fff
    }
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo mb-0 mt-2">
    <img src="<?=base_url('../assets/images/il2hLogo.svg')?>" alt="IL2H" style="width:40%">
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body mt-0 pt-0">
    <p class="login-box-msg">Sign in to start your session</p>
    <?= form_open(site_url());?>
    <?php if($this->session->flashdata('Message')): echo $this->session->flashdata('Message'); endif; ?>
        <div class="input-group mb-3">
        <?= form_input(
                        array 
                          (  'name'=>'data[email]', 
                              'class'=>'form-control',
                              'value' => set_value('data[email]'),
                              'autocomplete' => 'off'
                          )
                      );
            ?>

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          <div class="clearfix"> </div>
          <?= form_error('data[username]',"<div class=error>","</div>"); ?>  
        </div>
        <div class="input-group mb-3">
       
            <?= form_password(
                      array
                        (  'name'=>'data[password]', 
                            'class'=>'form-control',
                            'value' => set_value('data[password]')
                        )
                    ); 
            ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <div class="clearfix"> </div>
          <?= form_error('data[password]',"<div class=error>","</div>"); ?>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
            
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
        <?php form_close();?>
     
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script type="text/javascript" src='<?= base_url("assets/js/jquery.min.js");?>'></script>

<!-- Bootstrap 4 -->
<script type="text/javascript" src='<?= base_url("assets/js/bootstrap.bundle.min.js");?>'></script>

<!-- AdminLTE App -->
<script type="text/javascript" src='<?= base_url("assets/js/adminlte.min.js");?>'></script>


</body>
</html>
