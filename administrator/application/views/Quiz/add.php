<?php $this->load->view('includes/header');?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />


<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<style>
.select2-container--default .select2-selection--multiple .select2-selection__choice {
    background-color: #5d6063;
    border: 1px solid #5d6063;
}
</style>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?=$heading?>
                    <a href="<?=site_url($previousLink)?>" class="ml-2 btn btn-info btn-xs">Back to List</a>
                    <?php if(isset($update['id'])) { ?>
                    <a href="<?=site_url('Question/Index/'.base64_encode($update['id']))?>" class="ml-2 btn btn-info btn-xs">Questions</a>
                    <?php } ?>
                   
                </h1>
                
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?=site_url($previousLink)?>"><?=$previousName?></a></li>
                    <li class="breadcrumb-item active"><?=$heading?></li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <?php
              echo form_open_multipart(current_url(),'class="" id="insertNewPost"');
        ?>
    <div class="container-fluid">
        <div class="row">

            <input type="hidden" name="data[created_by]" value="<?=$this->session->userdata['user_info']['id']?>">
            <input type="hidden" name="id" value="<?=isset($update['id'])?$update['id']:''?>">
            <div class="col-8">
                <div class="form-group">
                    <label for="title">Title</label>
                    <?= form_input(
                        array 
                          (  'name'=>'data[title]', 
                              'class'=>'form-control',
                              'value' => set_value('data[title]',isset($update['title'])?$update['title']:''),
                              'autocomplete' => 'off',
                              'id' => 'title'
                          )
                      );
                    ?>
                    <div class="clearfix"> </div>
                    <?= form_error('data[title]',"<div class=error>","</div>"); ?>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <?= form_input(
                        array 
                          (  'name'=>'data[description]', 
                              'class'=>'form-control',
                              'value' => set_value('data[description]',isset($update['description'])?$update['description']:''),
                              'autocomplete' => 'off',
                              'id' => 'description'
                          )
                      );
                    ?>
                    <div class="clearfix"> </div>
                    <?= form_error('data[description]',"<div class=error>","</div>"); ?>
                </div>
              
                <div class="form-group">
                    <input type="submit" name="submit" class="form-control btn btn-info"
                        style="width:100px;float:right " value="Save Post">
                    <div class="clearfix"> </div>
                </div>
            </div><!-- /.Col-8 -->
            <div class="col-4">
                
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Status</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <?php
                            $optionStatus = array(
                                ''=> 'Please select status',
                                '1'=> 'Enable',
                                '2'=> 'Disable'
                            );
                             $js = array(
                                'id'    => 'status',
                                'class' => 'form-control'
                                );                          
                            echo form_dropdown('data[status]', $optionStatus, set_value('data[status]',isset($update['status'])?$update['status']:''), $js);
                        ?>
                                    <div class="clearfix"> </div>
                                    <?= form_error('data[status]',"<div class=error>","</div>"); ?>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.card-body -->
                </div>
               
                 <!-- Created Date and Time -->
                 <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Publish Date</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <?= form_input(
                                            array 
                                            (  'name'=>'data[created_at]', 
                                                'class'=>'form-control',
                                                'value' => set_value('data[created_at]',isset($update['created_at'])?date('d/m/Y',strtotime($update["created_at"])):date('d/m/Y')),
                                                'autocomplete' => 'off',
                                                'id' => 'created_at'
                                            )
                                        );
                                        ?>
                                        <div class="clearfix"> </div>
                                        <?= form_error('data[created_at]',"<div class=error>","</div>"); ?>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.card-body -->
                    <!-- Created Date and Time End -->
                <?= form_close();?>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
<?php $this->load->view('includes/footer');?>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
  $( function() {
    $( "#created_at" ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: 'dd/mm/yy'
    });
  } );
  </script>