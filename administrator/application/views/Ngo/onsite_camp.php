<?php $this->load->view('includes/header');?>
<style>
table.dataTable tbody td {
    word-break: break-word;
    vertical-align: top; 
 
}
tbody td{
  padding: 10px 4px !important;
}
tbody tr{
  font-size: 14px;
}
</style>
 <!-- Content Header (Page header) -->
 
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <?php $this->load->view('Ngo/camp_listing') ?>

        </div><!-- /.row -->
    </section>
    <!-- /.content -->
  <?php $this->load->view('includes/footer');?>
  <script>
    $(function () {
      $("#example1").DataTable();   
    });


</script>
