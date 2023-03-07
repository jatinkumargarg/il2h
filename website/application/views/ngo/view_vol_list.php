<?php $this->load->view('include/login-header') ?>

<!-- End Header -->
<main class="home">
   <section class="userSec">
      <div class="container-xl ">
         <div class="row mb-4">
            <div class="col-md-9">
               <div class="userHead">
                  <a href="<?= site_url('dashboard-ngo'); ?>" class="prevPage"></a>
                  <h1 class="userHeading">Campaign: <?=$camp_data['title']?></h1>
                  <!-- <a class="requestBtn" href="createRequests.html" >CREATE REQUESTS</a> -->
                  <!-- <p class="requestPara">&nbsp;</p> -->
               </div>
            </div>
            
         </div>
      </div>
   </section>
   <section class="profileSec">
      <div class="container-xl ">
         <div class="row">
            <div class="col-md-12">
               <div class="jumbotron">
                  <div class="tab-content" id="myTabContent">
                     <!-- Online Tab -->
                     <div class="tab-pane fade show active" id="Online" role="tabpanel" aria-labelledby="Online-tab">
                        <div class="row">
                           <div class="col-md-9">
                              <div class="tabpanelHeader">
                                 <h3 class="tabpanelHeaderTitle">Volunteer Requests</h3>
                                 <!-- <p class="tabpanelHeaderDecp">Please enter your current password to change your password.</p> -->
                              </div>
                           </div>
                        </div>
                        <div class="table-responsive">
                           <table class="table" id='online_vol_app'>
                              <thead>
                                 <tr>
                                    <th scope="col" width="5%">S.No</th>
                                    <th scope="col" width="15%">Volunteer Name</th>
                                    <th scope="col" width="10%">Campaign</th>
                                    <th scope="col" width="25%">Address</th>
                                    <th scope="col" width="10%">Status</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                 if (isset($vol_list)) {
                                    foreach ($vol_list as $ovr) {
                                 ?>
                                       <tr>
                                          <th scope="row">1</th>
                                          <td><?= $ovr['name']; ?></td>
                                          <td><?= $ovr['title']; ?></td>
                                          <td><?= $ovr['address_line_one'] ?>, <?= $ovr['city'] ?>, <?= $ovr['country'] ?></td>
                                          <td><strong><?php echo ($ovr['status'] == '0') ? "<p style='color:blue;'>" . 'Pending' . "</p>" : (($ovr['status'] == '1') ? "<p style='color:green;'>" . 'Approved'  . "</p>" : "<p style='color:red;'>" . 'Rejected' . "</p>"); ?></strong></td>
                                       </tr>
                                 <?php
                                    }
                                 }
                                 ?>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     
                  </div>
               </div>
               <!--  -->
            </div>
         </div>
      </div>
   </section>
</main>
<?php $this->load->view('include/signup-footer') ?>