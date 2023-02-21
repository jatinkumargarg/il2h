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
    <?php
              echo form_open_multipart(current_url(),'class="" id="setting-form"');
        ?>  
      <div class="container-fluid">       
        <div class="row">   
            <input type="hidden" name="id" value="<?=isset($update['id'])?base64_encode($update['id']):''?>">       
                 <!-- Name -->           
                <div class="form-group col-3">
                    <label for="name">Name</label>
                    <?= form_input(
                        array 
                          (  'name'=>'data[name]', 
                              'class'=>'form-control',
                              'value' => set_value('data[name]',isset($update['name'])?$update['name']:''),
                              'autocomplete' => 'off',
                              'id' => 'name'
                          )
                      );
                    ?>
                    <div class="clearfix"> </div>
                    <?= form_error('data[name]',"<div class=error>","</div>"); ?>
                </div>

                <!-- Username -->  
                <div class="form-group col-3">
                    <label for="username">Username</label>
                    <?= form_input(
                        array 
                          (  'name'=>'', 
                              'class'=>'form-control',
                              'value' => set_value('data[username]',isset($update['username'])?$update['username']:''),
                              'autocomplete' => 'off',
                              'id' => 'username',
                              'readonly' => 'readonly'
                          )
                      );
                    ?>
                    <div class="clearfix"> </div>
                    <?= form_error('data[username]',"<div class=error>","</div>"); ?>
                </div>
                <!-- Email Link -->  
                <div class="form-group col-3">
                    <label for="email_link">Email Link</label>
                    <?= form_input(
                        array 
                          (  'name'=>'data[email_link]', 
                              'class'=>'form-control',
                              'value' => set_value('data[email_link]',isset($update['email_link'])?$update['email_link']:''),
                              'autocomplete' => 'off',
                              'id' => 'email_link'
                          )
                      );
                    ?>
                    <div class="clearfix"> </div>
                    <?= form_error('data[email_link]',"<div class=error>","</div>"); ?>
                </div>   
                <!-- Linkdin Link -->  
                <div class="form-group col-3">
                    <label for="linkdin_link">Linkdin Link</label>
                    <?= form_input(
                        array 
                          (  'name'=>'data[linkdin_link]', 
                              'class'=>'form-control',
                              'value' => set_value('data[linkdin_link]',isset($update['linkdin_link'])?$update['linkdin_link']:''),
                              'autocomplete' => 'off',
                              'id' => 'linkdin_link'
                          )
                      );
                    ?>
                    <div class="clearfix"> </div>
                    <?= form_error('data[linkdin_link]',"<div class=error>","</div>"); ?>
                </div>
                <!-- Facebook Link -->  
                <div class="form-group col-3">
                    <label for="facebook_link">Facebook Link</label>
                    <?= form_input(
                        array 
                          (  'name'=>'data[facebook_link]', 
                              'class'=>'form-control',
                              'value' => set_value('data[facebook_link]',isset($update['facebook_link'])?$update['facebook_link']:''),
                              'autocomplete' => 'off',
                              'id' => 'facebook_link'
                          )
                      );
                    ?>
                    <div class="clearfix"> </div>
                    <?= form_error('data[facebook_link]',"<div class=error>","</div>"); ?>
                </div>  
                 <!-- Youtube Link -->  
                 <div class="form-group col-3">
                    <label for="youtube_link">Youtube Link</label>
                    <?= form_input(
                        array 
                          (  'name'=>'data[youtube_link]', 
                              'class'=>'form-control',
                              'value' => set_value('data[youtube_link]',isset($update['youtube_link'])?$update['youtube_link']:''),
                              'autocomplete' => 'off',
                              'id' => 'youtube_link'
                          )
                      );
                    ?>
                    <div class="clearfix"> </div>
                    <?= form_error('data[youtube_link]',"<div class=error>","</div>"); ?>
                </div> 
               
                 <!-- Twitter Link -->  
                 <div class="form-group col-3">
                    <label for="twitter_link">Twitter Link</label>
                    <?= form_input(
                        array 
                          (  'name'=>'data[twitter_link]', 
                              'class'=>'form-control',
                              'value' => set_value('data[twitter_link]',isset($update['twitter_link'])?$update['twitter_link']:''),
                              'autocomplete' => 'off',
                              'id' => 'twitter_link'
                          )
                      );
                    ?>
                    <div class="clearfix"> </div>
                    <?= form_error('data[twitter_link]',"<div class=error>","</div>"); ?>
                </div>   
                  <!-- Submit Button -->                
                <div class="form-group col-3">
                   <input type="submit" name="submit" class="form-control btn btn-info" style="width:100px;float:right " value="Save Post">
                   <div class="clearfix"> </div>
                </div>               
           
           
            <?= form_close();?>
        </div><!-- /.row -->     
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <?php $this->load->view('includes/footer');?>

