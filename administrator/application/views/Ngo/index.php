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
                                   <th>Title</th>
                                   <th>Description</th>
                                   <th>Created By</th>
                                   <th>Created Time</th>                                   
                                   <th>Status</th>
                                   <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>     
                                                      
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