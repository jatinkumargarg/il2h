<?php $this->load->view('includes/header');?>
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?=$heading?><a  href="<?=site_url($classMainName.'/Add_New')?>" class="ml-2 btn btn-info btn-xs"><?=$button_text?></a></h1>
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
                                <!-- loop Throuh all pages -->
                                <?php if(count($pageList)> 0) {
                                        $count = 1;
                                        $statusArr = array(
                                          '1' => 'Enable',
                                          '2' => 'disable'
                                        );
                                        foreach($pageList AS $Key => $value){
                                ?>
                                <tr>
                                    <td><?=$count?></td>
                                    <td><a href="<?=site_url($classMainName.'/edit_post/'.base64_encode($value['id']))?>"><?=$value['title']?></a></td>
                                    <td><?=$value['description']?></td>
                                    <td><?=$value['name']?></td>
                                    <td><?=$value['created']?></td>
                                    <td><?=ucwords($statusArr[$value['status']])?></td>
                                    <td>
                                      <?php 
                                        $protocol = is_https() ? "https://" : "http://";
                                        $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'].'/' : "";
                                        $quiz_base_url = $protocol.$host;

                                      ?>
                                        <button type="button" class="ml-2 btn btn-info btn-xs" onclick="copyShareLink('btn-<?=$count?>')" >Copy Link</button>
                                        <input type="hidden" id="btn-<?=$count?>"  value="<?php echo $quiz_base_url . base64_encode($value['id']); ?>">
                                    </td>
                                </tr>
                                <?php $count++; } } ?>
                                <!-- Loop Through All Pages End -->                       
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

    function copyShareLink(id) {
     
      var copyText = document.getElementById(id);

      // Select the text field
      copyText.select();
      document.execCommand('copy',false);

      // Alert the copied text
      alert("Copied the Link.");
    }
</script>