<?php $this->load->view('includes/header');?>
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?=$heading?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">                     
                <li class="breadcrumb-item active"><?=$heading?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">         
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                   <th>S.No.</th>
                                   <th>Name</th>
                                   <th>City</th>
                                   <th>Created Time</th>                                   
                                   <th>Status</th>
                                   <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>     
                              <?php if(count($ngo)> 0) {
                                        $count = 1;
                                      
                                        foreach($ngo AS $Key => $value){
                                ?>
                                <tr>
                                  <td><?= $count?></td>
                                  <td><?=$value['ngo_name']?></td>
                                  <td><?=$value['city']?></td>
                                  <td><?=$value['created_at']?></td>
                                  <td><?php echo ($value['status'] == 1) ? "<p style='color:green;'>" . 'Active'  . "</p>" : "<p style='color:red;'>" . 'Inactive' . "</p>" ; ?></td>
                                  <td>
                                  <?php if ($value['status'] == 1) {?>
                                    <a href="<?php echo site_url('Ngo/disable_ngo/'.$value['id'] . '/' . $user_type) ?>">Disable</a>
                                  <?php } else {?>
                                    <a href="<?php echo site_url('Ngo/enable_ngo/'.$value['id'] . '/' . $user_type) ?>">Enable</a>
                                    <?php }?>
                                  </td>
                                </tr>
                                <?php 
                                       $count++; }  } 
                                ?>                        
                            </tbody>                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
     
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <?php $this->load->view('includes/footer');?>
<script>
    $(function () {
      $("#example1").DataTable();   
    });


</script>