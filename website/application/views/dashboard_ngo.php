<?php $this->load->view('include/login-header') ?>

<!-- End Header -->
<main class="home">
   <section class="userSec">
      <div class="container-xl ">
         <div class="row mb-4">
            <div class="col-md-9">
               <div class="userHead">
                  <h1 class="userHeading">Dashboard</h1>
                  <!-- <a class="requestBtn" href="createRequests.html" >CREATE REQUESTS</a> -->
                  <!-- <p class="requestPara">&nbsp;</p> -->
               </div>
            </div>
            <div class="col-md-3">
               <div class="btnWrap">
                  <a class="btn btnbg rounded-pill" href="<?= site_url('create-campaign'); ?>" role="button">Create Request</a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="profileSec">
      <div class="container-xl ">
         <div class="row">
            <div class="col-md-12">
               <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                     <button class="nav-link active" id="Online-tab" data-bs-toggle="tab" data-bs-target="#Online" type="button" role="tab" aria-controls="Online" aria-selected="true">Online</button>
                  </li>
                  <li class="nav-item" role="presentation">
                     <button class="nav-link " id="Onsite-tab" data-bs-toggle="tab" data-bs-target="#Onsite" type="button" role="tab" aria-controls="Onsite" aria-selected="false">Onsite</button>
                  </li>
                  <li class="nav-item" role="presentation">
                     <button class="nav-link" id="Donate-Win-tab" data-bs-toggle="tab" data-bs-target="#Donate-Win" type="button" role="tab" aria-controls="Donate-Win" aria-selected="false">Donate Win</button>
                  </li>
               </ul>
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
                           <div class="col-md-3 text-end">
                              <a href="#" class="arrowBtn">Shortlisted Candidates
                                 <span class="a-right ml-3"></span>
                              </a>
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
                                    <th scope="col" width="30%">Actions</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                 if (isset($online_vol_request)) {
                                    foreach ($online_vol_request as $ovr) {
                                 ?>
                                       <tr>
                                          <th scope="row">1</th>
                                          <td><?= $ovr['name']; ?></td>
                                          <td><?= $ovr['title']; ?></td>
                                          <td><?= $ovr['address_line_one'] ?>, <?= $ovr['city'] ?>, <?= $ovr['country'] ?></td>
                                          <td><strong><?php echo ($ovr['status'] == '0') ? "<p style='color:blue;'>" . 'Pending' . "</p>" : (($ovr['status'] == '1') ? "<p style='color:green;'>" . 'Approved'  . "</p>" : "<p style='color:red;'>" . 'Rejected' . "</p>"); ?></strong></td>
                                          <td>
                                             <?php if ($ovr['status'] == 0) { ?>

                                                <div class="btnWrap">
                                                   <a class="btn btnbg" href="<?php echo site_url('Campaign/approve_vol/' . $ovr['id']) ?>" role="button">Accept</a>
                                                   <a class="btn borderBtn" href="<?php echo site_url('Campaign/reject_vol/' . $ovr['id']) ?>" role="button">Reject</a>
                                                   <a class="btn borderBtn" href="<?php echo site_url('Campaign/shortlist_vol/' . $ovr['id']) ?>" role="button">Shortlist</a>
                                                </div>
                                             <?php
                                             } ?>
                                          </td>
                                       </tr>
                                 <?php
                                    }
                                 }
                                 ?>
                              </tbody>
                           </table>
                        </div>

                        <!-- NGO - Dashboard - Onsite Start -->
                        <div class="my-4">
                           <hr>
                        </div>

                        <!-- Filter Div -->
                        <div class="filterWrapper row g-0">
                           <div class="col-md-4">
                              <ul class="nav nav-tabs">
                                 <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="Online-publish-tab" data-bs-toggle="tab" data-bs-target="#Online-publish" type="button" role="tab" aria-controls="Online" aria-selected="true">Published</button>

                                 </li>
                                 <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="Online-verify-tab" data-bs-toggle="tab" data-bs-target="#Online-verify" type="button" role="tab" aria-controls="Online" aria-selected="true">In Verification</button>
                                 </li>
                              </ul>
                           </div>
                        </div>

                        <!-- Filter Div Ends-->
                        <div class="tab-content" id="myTabContent">

                           <div class="row cardWrap tab-pane fade show active" id="Online-publish" role="tabpanel" aria-labelledby="Online-publish-tab">
                              <!--  -->
                              <?php
                              if (!empty($camp_online_published)) {
                                 foreach ($camp_online_published as $online_camp) {
                              ?>
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                                       <div class="card largeImg">
                                          <div class="card-img-wrap">

                                             <img src="assets/images/campaigns.jpg" class="card-img-top" alt="..." width="377" height="275">
                                             <div class="card-img-tagIcon justify-content-end">

                                                <div class="card-img-views ">
                                                   <!-- <span>Views</span> -->
                                                   <!-- <h4>3,288</h4> -->
                                                </div>
                                             </div>
                                          </div>
                                          <div class="card-body">
                                             <!-- <div class="card-body-top">
                                                <h4 class="card-title">Name of NGO</h4>
                                                <p class="card-text"><img src="assets/images/mapCard.svg" width="13" height="13"> Vukovar, Croatia, Europe</p>
                                             </div> -->
                                             <div class="card-body-bottom removeBefore">
                                                <h3 class="card-body-bottom-title ">“<?= $online_camp['title'] ?>”</h3>
                                                <p class="card-body-bottom-text"><?= $online_camp['description'] ?></p>
                                             </div>
                                             <div class="card-btnWrap">
                                                <a class="btn borderBtn" href="<?php echo site_url('Campaign/view_vol_list/' . $online_camp['camp_id']) ?>">View volunteer</a>
                                                <!-- <a class="btn btnbg" href="Volunteer-Requests-Edit.html">Edit Request</a> -->
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                              <?php
                                 }
                              }
                              ?>


                           </div>
                           <div class="row cardWrap tab-pane fade" id="Online-verify" role="tabpanel" aria-labelledby="Online-verify-tab">
                              <?php
                              if (!empty($camp_online_verify)) {
                                 foreach ($camp_online_verify as $online_camp) {
                              ?>
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                                       <div class="card largeImg">
                                          <div class="card-img-wrap">

                                             <img src="assets/images/campaigns.jpg" class="card-img-top" alt="..." width="377" height="275">
                                             <div class="card-img-tagIcon justify-content-end">

                                                <div class="card-img-views ">
                                                   <!-- <span>Views</span> -->
                                                   <!-- <h4>3,288</h4> -->
                                                </div>
                                             </div>
                                          </div>
                                          <div class="card-body">
                                             <!-- <div class="card-body-top">
                                                <h4 class="card-title">Name of NGO</h4>
                                                <p class="card-text"><img src="assets/images/mapCard.svg" width="13" height="13"> Vukovar, Croatia, Europe</p>
                                             </div> -->
                                             <div class="card-body-bottom removeBefore">
                                                <h3 class="card-body-bottom-title ">“<?= $online_camp['title'] ?>”</h3>
                                                <p class="card-body-bottom-text"><?= $online_camp['description'] ?></p>
                                             </div>
                                             <div class="card-btnWrap">
                                                <!-- <a class="btn borderBtn" href="Volunteer-Requests.html">View volunteer</a> -->
                                                <a class="btn btnbg" href="Volunteer-Requests-Edit.html">Edit Request</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                              <?php
                                 }
                              }
                              ?>

                           </div>
                        </div>
                     </div>
                     <!--  -->
                     <!-- Onsite Tab -->
                     <div class="tab-pane fade " id="Onsite" role="tabpanel" aria-labelledby="Onsite-tab">
                        <div class="tabpanelHeader">
                           <div class="row mb-3 aling-items-center">
                              <div class="col-md-9">
                                 <div class="tabpanelHeader">
                                    <h3 class="tabpanelHeaderTitle">Volunteer Requests</h3>
                                    <!-- <p class="tabpanelHeaderDecp">Please enter your current password to change your password.</p> -->
                                 </div>
                              </div>
                              <div class="col-md-3 text-end">
                                 <a href="#" class="arrowBtn">Shortlisted Candidates
                                    <span class="a-right ml-3"></span>
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="table-responsive">
                           <table class="table" id='onsite_vol_app'>
                              <thead>
                                 <tr>
                                    <th scope="col" width="5%">S.No</th>
                                    <th scope="col" width="15%">Volunteer Name</th>
                                    <th scope="col" width="10%">Campaign</th>
                                    <th scope="col" width="25%">Address</th>
                                    <th scope="col" width="10%">Status</th>
                                    <th scope="col" width="30%">Actions</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                 if (isset($onsite_vol_request)) {
                                    foreach ($onsite_vol_request as $ovr) {
                                 ?>
                                       <tr>
                                          <th scope="row">1</th>
                                          <td><?= $ovr['name']; ?></td>
                                          <td><?= $ovr['title']; ?></td>
                                          <td><?= $ovr['address_line_one'] ?>, <?= $ovr['city'] ?>, <?= $ovr['country'] ?></td>
                                          <td><strong><?php echo ($ovr['status'] == '0') ? "<p style='color:blue;'>" . 'Pending' . "</p>" : (($ovr['status'] == '1') ? "<p style='color:green;'>" . 'Accepted'  . "</p>" : "<p style='color:red;'>" . 'Rejected' . "</p>"); ?></strong></td>
                                          <td>
                                             <?php if ($ovr['status'] == 0) { ?>

                                                <div class="btnWrap">
                                                   <a class="btn btnbg" href="<?php echo site_url('Campaign/approve_vol/' . $ovr['id']) ?>" role="button">Accept</a>
                                                   <a class="btn borderBtn" href="<?php echo site_url('Campaign/reject_vol/' . $ovr['id']) ?>" role="button">Reject</a>
                                                   <a class="btn borderBtn" href="<?php echo site_url('Campaign/shortlist_vol/' . $ovr['id']) ?>" role="button">Shortlist</a>
                                                </div>
                                             <?php
                                             } ?>
                                          </td>
                                       </tr>
                                 <?php
                                    }
                                 }
                                 ?>
                              </tbody>
                           </table>
                        </div>
                        <!--  -->

                        <!-- NGO - Dashboard - Onsite Start -->
                        <div class="my-4">
                           <hr>
                        </div>

                        <!-- Filter Div -->
                        <div class="filterWrapper row g-0">
                           <div class="col-md-4">
                              <ul class="nav nav-tabs">
                                 <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="Onsite-publish-tab" data-bs-toggle="tab" data-bs-target="#Onsite-publish" type="button" role="tab" aria-controls="Online" aria-selected="true">Published</button>

                                 </li>
                                 <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="Onsite-verify-tab" data-bs-toggle="tab" data-bs-target="#Onsite-verify" type="button" role="tab" aria-controls="Online" aria-selected="true">In Verification</button>
                                 </li>
                              </ul>
                           </div>
                        </div>

                        <!-- Filter Div Ends-->
                        <div class="tab-content" id="myTabContent">

                           <div class="row cardWrap tab-pane fade show active" id="Onsite-publish" role="tabpanel" aria-labelledby="Onsite-publish-tab">
                              <?php
                              if (!empty($camp_onsite_published)) {
                                 foreach ($camp_onsite_published as $online_camp) {
                              ?>
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                                       <div class="card largeImg">
                                          <div class="card-img-wrap">

                                             <img src="assets/images/campaigns.jpg" class="card-img-top" alt="..." width="377" height="275">
                                             <div class="card-img-tagIcon justify-content-end">

                                                <div class="card-img-views ">
                                                   <!-- <span>Views</span> -->
                                                   <!-- <h4>3,288</h4> -->
                                                </div>
                                             </div>
                                          </div>
                                          <div class="card-body">
                                             <!-- <div class="card-body-top">
                                                <h4 class="card-title">Name of NGO</h4>
                                                <p class="card-text"><img src="assets/images/mapCard.svg" width="13" height="13"> Vukovar, Croatia, Europe</p>
                                             </div> -->
                                             <div class="card-body-bottom removeBefore">
                                                <h3 class="card-body-bottom-title ">“<?= $online_camp['title'] ?>”</h3>
                                                <p class="card-body-bottom-text"><?= $online_camp['description'] ?></p>
                                             </div>
                                             <div class="card-btnWrap">
                                                <a class="btn borderBtn" href="<?php echo site_url('Campaign/view_vol_list/' . $online_camp['camp_id']) ?>">View volunteer</a>
                                                <!-- <a class="btn btnbg" href="Volunteer-Requests-Edit.html">Edit Request</a> -->
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                              <?php
                                 }
                              }
                              ?>
                           </div>
                           <div class="row cardWrap tab-pane fade" id="Onsite-verify" role="tabpanel" aria-labelledby="Onsite-verify-tab">
                              <?php
                              if (!empty($camp_onsite_verify)) {
                                 foreach ($camp_onsite_verify as $online_camp) {
                              ?>
                                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                                       <div class="card largeImg">
                                          <div class="card-img-wrap">

                                             <img src="assets/images/campaigns.jpg" class="card-img-top" alt="..." width="377" height="275">
                                             <div class="card-img-tagIcon justify-content-end">

                                                <div class="card-img-views ">
                                                   <!-- <span>Views</span> -->
                                                   <!-- <h4>3,288</h4> -->
                                                </div>
                                             </div>
                                          </div>
                                          <div class="card-body">
                                             <!-- <div class="card-body-top">
                                                <h4 class="card-title">Name of NGO</h4>
                                                <p class="card-text"><img src="assets/images/mapCard.svg" width="13" height="13"> Vukovar, Croatia, Europe</p>
                                             </div> -->
                                             <div class="card-body-bottom removeBefore">
                                                <h3 class="card-body-bottom-title ">“<?= $online_camp['title'] ?>”</h3>
                                                <p class="card-body-bottom-text"><?= $online_camp['description'] ?></p>
                                             </div>
                                             <div class="card-btnWrap">
                                                <!-- <a class="btn borderBtn" href="Volunteer-Requests.html">View volunteer</a> -->
                                                <a class="btn btnbg" href="Volunteer-Requests-Edit.html">Edit Request</a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                              <?php
                                 }
                              }
                              ?>
                           </div>

                        </div>
                        <!-- NGO - Dashboard - Onsite END -->

                     </div>
                     <!--  -->
                     <!-- Donate and Win Tab -->
                     <div class="tab-pane fade" id="Donate-Win" role="tabpanel" aria-labelledby="Donate-Win-tab">
                        <!-- Filter Div -->
                        <div class="filterWrapper row g-0">
                           <div class="col-md-5">
                              <ul class="nav nav-tabs">
                                 <li class="nav-item" role="presentation">
                                    <a class="nav-link active">All</a>
                                 </li>
                                 <li class="nav-item" role="presentation">
                                    <a class="nav-link">Donated</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <!-- Filter Div Ends-->
                        <div class="noFilterResults">
                           <div class="row justify-content-center">
                              <div class="col-md-6 text-center p-5">
                                 <img src="assets/images/signUp.png" width="203" height="237">
                                 <p class="mt-5 mb-4">Lorem Ipsum is simply dummy text of the printing
                                    and typesetting industry.
                                 </p>
                                 <div class="">
                                    <a class="commonBtn" href="donateWin.html">Donate & Win</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Donate Card -->
                        <div class="row  mt-5">
                           <div class="col-md-6">
                              <div class="card largeImg">
                                 <div class="card-img-wrap">
                                    <img src="assets/images/car1.png" class="card-img-top" alt="..." width="377" height="275">
                                 </div>
                                 <div class="card-body">
                                    <div class="card-body-top">
                                       <h4 class="card-title">Win a Land Rover Edition by supporting worl changing causes.</h4>
                                    </div>
                                    <div class="card-btnWrap mt-3">
                                       <a class="btn borderBtn" href="#">Details</a>
                                       <a class="btn btnbg" href="Dashboard-donateWinTravel.html">Donate & Win</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="card largeImg">
                                 <div class="card-img-wrap">
                                    <img src="assets/images/car1.png" class="card-img-top" alt="..." width="377" height="275">
                                 </div>
                                 <div class="card-body">
                                    <div class="card-body-top">
                                       <h4 class="card-title">Win a Land Rover Edition by supporting worl changing causes.</h4>
                                    </div>
                                    <div class="card-btnWrap mt-3">
                                       <a class="btn borderBtn" href="#">Details</a>
                                       <a class="btn btnbg" href="Dashboard-donateWinTravel.html">Donate & Win</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="card largeImg">
                                 <div class="card-img-wrap">
                                    <img src="assets/images/car1.png" class="card-img-top" alt="..." width="377" height="275">
                                 </div>
                                 <div class="card-body">
                                    <div class="card-body-top">
                                       <h4 class="card-title">Win a Land Rover Edition by supporting worl changing causes.</h4>
                                    </div>
                                    <div class="card-btnWrap mt-3">
                                       <a class="btn borderBtn" href="#">Details</a>
                                       <a class="btn btnbg" href="Dashboard-donateWinTravel.html">Donate & Win</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="card largeImg">
                                 <div class="card-img-wrap">
                                    <img src="assets/images/car1.png" class="card-img-top" alt="..." width="377" height="275">
                                 </div>
                                 <div class="card-body">
                                    <div class="card-body-top">
                                       <h4 class="card-title">Win a Land Rover Edition by supporting worl changing causes.</h4>
                                    </div>
                                    <div class="card-btnWrap mt-3">
                                       <a class="btn borderBtn" href="#">Details</a>
                                       <a class="btn btnbg" href="Dashboard-donateWinTravel.html">Donate & Win</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="card largeImg">
                                 <div class="card-img-wrap">
                                    <img src="assets/images/car1.png" class="card-img-top" alt="..." width="377" height="275">
                                 </div>
                                 <div class="card-body">
                                    <div class="card-body-top">
                                       <h4 class="card-title">Win a Land Rover Edition by supporting worl changing causes.</h4>
                                    </div>
                                    <div class="card-btnWrap mt-3">
                                       <a class="btn borderBtn" href="#">Details</a>
                                       <a class="btn btnbg" href="Dashboard-donateWinTravel.html">Donate & Win</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--  -->
                     </div>
                     <!--  -->
                     <!--  -->
                  </div>
               </div>
               <!--  -->
            </div>
         </div>
      </div>
   </section>
</main>
<!-- For design purpose ONLY start -->
<button onclick="return" data-bs-toggle="modal" data-bs-target="#explore" class="btn btn-primary">explore </button>
<button onclick="return" data-bs-toggle="modal" data-bs-target="#applyOnSite" class="btn btn-primary">Show Popup </button>
<!-- For design purpose ONLY End -->
<footer>
   <div class="container-xl ">
      <div class="row">
         <div class="col-md-12 text-center">
            <div class="footerHeading">Follow Us On:</div>
            <ul class="socialWrap">
               <li>
                  <a href="#">
                     <img src="assets/images/socialIcons/facebook.svg">
                  </a>
               </li>
               <li>
                  <a href="#">
                     <img src="assets/images/socialIcons/twitter.svg">
                  </a>
               </li>
               <li>
                  <a href="#">
                     <img src="assets/images/socialIcons/instagram.svg">
                  </a>
               </li>
               <li>
                  <a href="#">
                     <img src="assets/images/socialIcons/linkdin.svg">
                  </a>
               </li>
            </ul>
            <p class="gotQues">Got Questions? Contact <a href="mailto:weloveyou@Ilove2help.com">weloveyou@Ilove2help.com</a></p>
            <p class="footerShield"><span><img src="assets/images/footerShield.png"></span> Donating through IL2HWay is safe & secure</p>
            <ul class="footerLinks">
               <li>
                  <a href="volunteerOnline.html">VOLUNTEER ONLINE</a>
               </li>
               <li>
                  <a href="volunteerOnSite.html">VOLUNTEER ONSITE</a>
               </li>
               <li>
                  <a href="#">OUR TEAM</a>
               </li>
               <li>
                  <a href="aboutUs.html">ABOUT US</a>
               </li>
               <li>
                  <a href="personalInfo.html">OUR RESOURCES</a>
               </li>
               <li>
                  <a href="setting.html">HELP & SUPPORT</a>
               </li>
            </ul>
            <hr>
            <div class="footerBottom">
               <div class="copyright">Copyright © 2022 I Love 2 Help, LLC All rights reserved</div>
               <ul class="footerLinks">
                  <li>
                     <a href="#">State Disclosures</a>
                  </li>
                  <li>
                     <a href="#">Do Not Sell My Info</a>
                  </li>
                  <li>
                     <a href="#">Terms & Conditions</a>
                  </li>
                  <li>
                     <a href="#">Privacy Policy</a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</footer>
<!-- Modal To explore full functionality Start-->
<div class="modal fade" id="explore" tabindex="-1" aria-labelledby="exploreLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content bg-white">
         <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
         <span class="btn-close cross-icon" data-bs-dismiss="modal" aria-label="Close"></span>
         <div class="modal-body  my-4">
            <div class="row justify-content-center">
               <div class="col-md-8 text-center p-4">
                  <img src="assets/images/login.svg" width="263" height="285" style="margin-left: -30px;">
                  <h3 class="mt-5 mb-2">
                     <strong>To explore full functionality</strong>
                  </h3>
                  <p>We request you to signup</p>
                  <a class="btn btnbg rounded-pill m-0" href="#" role="button">GET STARTED</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Modal END -->
<!-- Modal Start-->
<div class="modal fade" id="applyOnSite" tabindex="-1" aria-labelledby="applyOnSiteLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content bg-white">
         <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
         <span class="btn-close cross-icon" data-bs-dismiss="modal" aria-label="Close"></span>
         <div class="modal-body  my-4">
            <div class="row justify-content-center">
               <div class="col-md-8 text-center p-4">
                  <img src="assets/images/uploadDoc.png" width="389" height="290">
                  <h3 class="mt-5 mb-2">
                     <strong>Complete Your Profile</strong>
                  </h3>
                  <p>Tell NGO that we need complete documentation for a verified request to be shared with Volunteers.</p>
                  <a class="btn btnbg rounded-pill m-0" href="#" role="button">Complete your profile</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Modal END -->
<?php $this->load->view('include/signup-footer') ?>
<script>
   $(function() {
      // $("#online_vol_app").DataTable();   
      // $("#onsite_vol_app").DataTable();   
   });
</script>