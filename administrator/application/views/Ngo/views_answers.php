<?php $this->load->view('includes/header');?>
<style>
  .question-class{
    display:inline-block;
    width: 70%;
  }

  .option-div {
      margin-top: 1%;
      margin-left: 3%;
  }
  .option-class{
    width: 50%;
    display: inline-block;
  }
</style>
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
          
        <?php 
            $questionCount = 1;
            foreach($question_list as $key => $val ){ 
          ?>
            <div class="col-12">
                <!-- Question-->
                <div class="card card-info">
                  
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                               
                                  <!-- Question Part -->
                                  <span><?=$questionCount?>.</span>
                                    <?= form_input(
                                            array 
                                            (  'name'=>'data['.$val["id"].'][heading]', 
                                                'class'=>'form-control question-class',
                                                'value' => $val["heading"],
                                                'autocomplete ' => 'off',
                                                'id' => 'heading_'.$val["id"]
                                            )
                                        );
                                        ?>
                                        <div class="clearfix"> </div>
                                        <?= form_error('data[$val["id"]][heading]',"<div class=error>","</div>"); ?>
                                  <!-- Question Part End -->

                                  <!-- Option Part -->
                                  <?php  
                                    $sql = "SELECT tbl_options.*, tbl_answers.answer_id FROM tbl_options left join (SELECT * FROM tbl_answers where tbl_answers.quiz_id = '".$quiz_id."' and tbl_answers.user_id = '".$userid."') as tbl_answers on tbl_options.id = tbl_answers.answer_id where tbl_options.question_id = '".$val["id"]."'";
                                    $query = $this->db->query($sql);
                                  
                                    if($query->num_rows() > 0 ) {
                                      foreach ($query->result() as $row) {
                                        $backgroudcolor = '';
                                        if($row->answer_id){
                                            $backgroudcolor ='background-color:#57ff57';
                                        }
                                  ?>
                                      <div class="option-div">
                                          <?= form_input(
                                                array 
                                                (  'name'=>'data['.$val["id"].'][option][]', 
                                                    'class'=>'form-control option-class',
                                                    'value' => $row->name,
                                                    'autocomplete' => 'off',
                                                    'readonly' => 'true',
                                                    'style' =>  $backgroudcolor
                                                )
                                            );
                                            ?>
                                            
                                      </div>
                                      <?php } } ?>
                                  <!-- Option Part End -->
                                  <!-- New Option Add Div start-->
                                  <div id= "ques-option-<?=$val["id"]?>">

                                  </div>
                                   <!-- New Option Add Div end-->
                                </div>
                            </div>
                        </div>
                    </div><!-- /.card-body -->
                <!-- Question Wnd-->
            </div>

            <?php $questionCount++; } ?>
          
        </div>
        <!-- /.row -->
    
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <?php $this->load->view('includes/footer');?>
