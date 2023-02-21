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
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">             
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <!-- Top Widget -->
        <?php $this->load->view('Dashboard/widget') ?>

        <div class="row">
          <!-- Charts -->
          <?php $this->load->view('Dashboard/chart') ?>

          <!-- Newsletter User List -->
          <?php $this->load->view('Dashboard/user_list') ?>

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  <?php $this->load->view('includes/footer');?>

    <!-- ChartJS -->
<script src="<?=base_url('assets/js/chartjs/Chart.min.js')?>"></script>
    <script>
  $(function () {
    $("#example1, #page_visit_table").DataTable(); 
    showGraph();
   // fetchRecords();
    showDailyGraph();
  });


  function showGraph(){
      $.ajax({
        type:'POST',
        dataType: 'JSON',
        url:'<?php echo base_url('Dashboard/drawUserPerQuiz'); ?>', 
        success:function(data){
             var title = [];
            var users = [];
            for (var i in data) {
              title.push(data[i].title);
              users.push(data[i].users);
            }
            var chartdata = {
                labels: title,
                datasets: [
                    {
                        label: 'Users Count As Per the Quiz',
                        backgroundColor: '#17a2b8',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        barPercentage: 0.5,
                        barThickness: 50,
                        maxBarThickness: 50,
                        minBarLength: 20,
                        data: users
                    }
                ]
            };
            var options = {
              scales: {
                xAxes: [{
                  display: true
                }],
                yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
              }
            };
            var graphTarget = $("#barChart");
            var barGraph = new Chart(graphTarget, {
                type: 'bar',
                data: chartdata,
                options: options
            });                       
        }
    });
  }

/** BAr Graph Chart 2 */
function showDailyGraph(){
      $.ajax({
        type:'POST',
        dataType: 'JSON',
        url:'<?php echo base_url('Dashboard/drawTopFiveAnswers'); ?>', 
        success:function(data){
            var title = [];
            var users = [];
            for (var i in data) {
              title.push(data[i].name);
              users.push(data[i].users);
            }
            var chartdata = {
                labels: title,
                datasets: [
                    {
                        label: 'Top 5 Answers',
                        backgroundColor: '#17a2b8',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        barPercentage: 0.5,
                        barThickness: 50,
                        maxBarThickness: 50,
                        minBarLength: 20,
                        data: users
                    }
                ]
            };
            var options = {
              scales: {
                xAxes: [{
                  display: true
                }],
                yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
              }
            };
            var graphTarget = $("#barChartDaily");
            var barGraph = new Chart(graphTarget, {
                type: 'bar',
                data: chartdata,
                options: options
            });                       
        }
    });
  }
  /** Page List  */

</script>