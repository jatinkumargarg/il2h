<?php $this->load->view('include/login-header') ?>

<!-- End Header -->
<main class="home">
   <section class="userSec">
      <div class="container-xl ">
         <div class="row mb-4">
            <div class="col-md-12">
               <div class="userHead">
                  <a href="<?= site_url('dashboard-ngo'); ?>" class="prevPage"></a>
                  <h1 class="userHeading">Create Requests</h1>
                  <!-- <a class="requestBtn" href="createRequests.html" >CREATE REQUESTS</a> -->
                  <p class="requestPara w-100">To create requests for Volunteers (Online/Offline)</p>
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
                     <button class="nav-link active" id="volOnline-tab" data-bs-toggle="tab" data-bs-target="#volOnline" type="button" role="tab" aria-controls="volOnline" aria-selected="true">Online</button>
                  </li>
                  <li class="nav-item" role="presentation">
                     <button class="nav-link " id="volOnSite-tab" data-bs-toggle="tab" data-bs-target="#volOnSite" type="button" role="tab" aria-controls="volOnSite" aria-selected="false">Onsite</button>
                  </li>
               </ul>
               <div class="jumbotron">
                  <div class="tab-content" id="myTabContent">
                     <!-- Volunteer Online Tab -->
                     <div class="tab-pane fade show active" id="volOnline" role="tabpanel" aria-labelledby="volOnline-tab">
                        <!-- <form action="Campaign/create_campaign" method="POST"> -->
                        <?php echo form_open_multipart('Campaign/create_campaign', array('id' => 'contactFormOnline')); ?>
                        <input type="hidden" name="camp_type" value="online">

                        <div class="mb-4 mt-4 row align-items-center">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label for="title" class="col-form-label mb-2">Add Photo*</label>
                                 <div class="uploadBtnWrap" style="justify-content:left">
                                    <!-- <a class="btn" href="#">Camera</a> -->
                                    <a class="btn btnbg" href="#"><input type='file' name="camp_photo" size='20' /></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="mb-4 mt-4 row align-items-center">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label for="title" class="col-form-label mb-2">Title*</label>
                                 <input type="text" id="title" class="form-control" aria-describedby="title" placeholder="Campaign Title" name="data[title]" required>
                              </div>
                           </div>
                        </div>
                        <div class="mb-4 mt-4 row align-items-center">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label for="description" class="col-form-label mb-2">Description*</label>
                                 <input type="text" id="description" class="form-control" aria-describedby="description" placeholder="Write a few words about the NGO or the task…" name="data[description]" required>
                              </div>
                           </div>
                        </div>
                        <div class="mb-4 mt-4 row align-items-center">
                           <div class="col-md-6 col-lg-6">
                              <div class="form-group">
                                 <label for="description" class="col-form-label mb-2">Assign Mentor*</label>
                                 <select class="form-select form-control" aria-label="Default select example" name="data[mentor_id]" required>
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6 col-lg-6">
                              <div class="form-group">
                                 <label for="description" class="col-form-label mb-2">Mentor Contact Number*</label>
                                 <select class="form-select form-control" aria-label="Default select example" name="data[mentor_contact_number]" required>
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="mb-4 mt-4 row align-items-center">
                           <div class="col-md-6 col-lg-4">
                              <div class="form-group">
                                 <label for="noKids" class="form-label mb-2">Estimated No of Hours*</label>
                                 <div class="rangeWrapper">
                                    <span class="minus circle">-</span>
                                    <!-- <span class="form-control num"><b>6</b> Hours</span> -->
                                    <input type="number" class="form-control" name="data[estimated_hour]" required>
                                    <span class="plus circle">+</span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6 col-lg-4">
                              <div class="form-group">
                                 <label for="city" class="form-label mb-2">Start Date*</label>
                                 <input type="date" id="startdateonline" class="form-control" aria-describedby="date" name="data[start_date]" required>
                              </div>
                           </div>
                           <div class="col-md-6 col-lg-4">
                              <div class="form-group">
                                 <label for="city" class="form-label mb-2">End Date*</label>
                                 <input type="date" id="enddateonline" class="form-control" aria-describedby="date" name="data[end_date]" required>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <label for="noKids" class="col-form-label mb-2">Attach CV*</label>
                              <div class="uploadWrapper">
                                 <!--  -->
                                 <!-- <label for="formFile" class="form-label"><img src="assets/images/VOS.svg" width="22" height="22"/> Upload  your CV here</label> -->
                                 <input class="form-control" type="file" id="formFile" name="cv_url">
                                 <!--  -->
                              </div>
                           </div>
                        </div>
                        <div class="stepFormHeading">Add Questions* <small>(You can add unlimited questions here)</small></div>
                        <!-- Repeat for Question Input -->
                        <div class="camp_ques_all">
                           <div class="col-md-12 camp_ques camp_ques_base">
                              <div class="form-group">
                                 <label for="noKids" class="col-form-label mb-2">Question </label>
                                 <label for="noKids" class="col-form-label mb-2 camp_ques_num">1</label>
                                 <input type="text" class="form-control" id="noKids" placeholder="" aria-describedby="Question 1" required name="data[question_name][]">
                                 <div class="invalid-tooltip"> Please choose a username. </div>
                              </div>
                           </div>
                        </div>
                        <!-- Repeat for Question Input -->
                        <a href="#!" class="addMoreQues" onclick="addMoreQues()">+ Add More Questions</a>
                        <div class="btnWrap mt-5">
                           <button type="submit" class="btn borderBtn">CANCEL</button>
                           <button type="submit" class="btn btnbg">SUBMIT REQUEST</button>
                        </div>
                        <!-- </form> -->
                        <?php echo form_close() ?>

                     </div>
                     <!--  -->
                     <!-- Volunteer On-site Tab -->
                     <div class="tab-pane fade " id="volOnSite" role="tabpanel" aria-labelledby="volOnSite-tab">
                        <?php echo form_open_multipart('Campaign/create_campaign', array('id' => 'contactFormOnsite')); ?>
                        <input type="hidden" name="camp_type" value="onsite">
                        <div class="mb-4 mt-4 row align-items-center">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label for="title" class="col-form-label mb-2">Add Photo*</label>
                                 <div class="uploadBtnWrap" style="justify-content:left">
                                    <!-- <a class="btn" href="#">Camera</a> -->
                                    <a class="btn btnbg" href="#"><input type='file' name="camp_photo" size='20' /></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="mb-4 mt-4 row align-items-center">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label for="title" class="col-form-label mb-2">Title*</label>
                                 <input type="text" id="title" class="form-control" aria-describedby="title" placeholder="Website developer needed" name="data[title]" required>
                              </div>
                           </div>
                        </div>
                        <div class="mb-4 mt-4 row align-items-center">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <label for="description" class="col-form-label mb-2">Description*</label>
                                 <input type="text" id="description" class="form-control" aria-describedby="description" placeholder="Write a few words about the NGO or the task…" name="data[description]" required>
                              </div>
                           </div>
                        </div>
                        <div class="mb-4 mt-4 row align-items-center">
                           <div class="col-md-6 col-lg-6">
                              <div class="form-group">
                                 <label for="description" class="col-form-label mb-2">Assign Mentor*</label>
                                 <select class="form-select form-control" aria-label="Default select example" name="data[mentor_id]" required>
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6 col-lg-6">
                              <div class="form-group">
                                 <label for="description" class="col-form-label mb-2">Mentor Contact Number*</label>
                                 <select class="form-select form-control" aria-label="Default select example" name="data[mentor_contact_number]" required>
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="mb-4 mt-4 row align-items-center">
                           <div class="col-md-6 col-lg-4">
                              <div class="form-group">
                                 <label for="noKids" class="form-label mb-2">Estimated No of Hours*</label>
                                 <div class="rangeWrapper">
                                    <span class="minus circle">-</span>
                                    <input type="number" class="form-control" name="data[estimated_hour]" required>
                                    <span class="plus circle">+</span>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6 col-lg-4">
                              <div class="form-group">
                                 <label for="city" class="form-label mb-2">Accomodation*</label>
                                 <div class="radioWrap">
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" value="YES" id="accomodationYes" name="data[accomodation]">
                                       <label class="form-check-label" for="accomodationYes">
                                          YES
                                       </label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" value="NO" id="accomodationNo" name="data[accomodation]">
                                       <label class="form-check-label" for="accomodationNo">
                                          NO
                                       </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6 col-lg-4">
                              <div class="form-group">
                                 <label for="city" class="form-label mb-2">Meals*</label>
                                 <div class="radioWrap">
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" value="YES" id="mealsYes" name="data[meals]">
                                       <label class="form-check-label" for="mealsYes">
                                          YES
                                       </label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" value="NO" id="mealsNo" name="data[meals]">
                                       <label class="form-check-label" for="mealsNo">
                                          NO
                                       </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="mb-4 mt-4 row align-items-center">
                           <div class="col-md-6 col-lg-4">
                              <div class="form-group">
                                 <label for="city" class="form-label mb-2">Start Date*</label>
                                 <input type="date" id="startdate" class="form-control" aria-describedby="date" name="data[start_date]" required>
                              </div>
                           </div>
                           <div class="col-md-6 col-lg-4">
                              <div class="form-group">
                                 <label for="city" class="form-label mb-2">End Date*</label>
                                 <input type="date" id="enddate" class="form-control" aria-describedby="date" name="data[end_date]" required>
                              </div>
                           </div>
                           <div class="col-md-6 col-lg-4">
                              <div class="form-group">
                                 <label for="city" class="form-label mb-2">Select Activites*</label>
                                 <select class="form-select form-control" aria-label="Default select example" name="activities" multiple required>
                                    <option selected>Select</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="mb-4 mt-4 row align-items-center">
                           <div class="col-md-6 col-lg-6">
                              <div class="form-group">
                                 <label for="description" class="col-form-label mb-2">Facilities</label>
                                 <input type="text" id="description" class="form-control" aria-describedby="description" placeholder="Write a few words about the Facilities…" name="data[facilities]">
                              </div>
                           </div>
                           <div class="col-md-6 col-lg-6">
                              <div class="form-group">
                                 <label for="description" class="col-form-label mb-2">Fees</label>
                                 <input type="text" id="description" class="form-control" aria-describedby="description" placeholder="Write a few words about the Fees…" name="data[fees]">
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <label for="noKids" class="col-form-label mb-2">Attach CV*</label>
                              <div class="uploadWrapper">
                                 <!--  -->
                                 <!-- <label for="formFile" class="form-label"><img src="assets/images/VOS.svg" width="22" height="22"/> Upload  your CV here</label> -->
                                 <input class="form-control" type="file" id="formFile" name="cv_url">
                                 <!--  -->
                              </div>
                           </div>
                        </div>
                        <div class="stepFormHeading">Add Questions* <small>(You can add unlimited questions here)</small></div>
                        <!-- Repeat for Question Input -->
                        <div class="camp_ques_all_1">
                           <div class="col-md-12 camp_ques_1 camp_ques_base_1">
                              <div class="form-group">
                                 <label for="noKids" class="col-form-label mb-2">Question </label>
                                 <label for="noKids" class="col-form-label mb-2 camp_ques_num_1">1</label>
                                 <input type="text" class="form-control" id="noKids" placeholder="" aria-describedby="Question 1" required name="data[question_name][]">
                                 <div class="invalid-tooltip"> Please choose a username. </div>
                              </div>
                           </div>
                        </div>
                        <!-- Repeat for Question Input -->
                        <a href="#!" class="addMoreQues" onclick="addMoreQuesOnsite()">+ Add More Questions</a>
                        <div class="btnWrap mt-5">
                           <button type="submit" class="btn borderBtn">CANCEL</button>
                           <button type="submit" class="btn btnbg">SUBMIT REQUEST</button>
                        </div>
                        <?php echo form_close() ?>
                     </div>
                     <!--  -->
                  </div>
               </div>
               <!--  -->
            </div>
         </div>
      </div>
   </section>
</main>
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

<!-- Modal Start-->
<div class="modal fade" id="applyOnSite" tabindex="-1" aria-labelledby="applyOnSiteLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content bg-white">

         <!-- Modal Button Header -->
         <div class="row align-items-center mt-5 px-5">
            <div class="col-md-4">
               <div class="userHead">
                  <h1 class="userHeading">Preview</h1>
               </div>
            </div>
            <div class="col-md-8">
               <div class="btnWrap">
                  <a class="btn borderBtn" href="#" data-bs-dismiss="modal" aria-label="Close">Cancel</a>
                  <a class="btn btnbg" href="#" onclick="return" data-bs-toggle="modal" data-bs-target="#SubmitRequest">Submit Request</a>
               </div>
            </div>
         </div>

         <!-- Modal Button Header -->
         <div class="modal-body p-5 my-4">
            <!--  -->
            <div class="row">
               <div class="col-md-12 mt-0 volunteerDetailHeadingWrapper">
                  <div class="volunteerDetailHeadingWrap">
                     <h2 class="mainHeading ">
                        <strong>Paradanusorn School</strong>
                     </h2>
                     <p class="w-100">Vukovar, Croatia, Europe</p>
                  </div>

               </div>
               <div class="row">
                  <div class="col-md-12 col-lg-12 col-xl-12">
                     <div class="volunteerDetailContent p-0">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <p>
                           <img class="img-fluid fullImg" src="assets/images/campaigns2.jpg">
                        </p>
                        <h2 class="mainHeading pt-3">
                           <strong>Ways to help</strong>
                        </h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        <ul class="nav nav-tabs volunteerDetailTab" id="myTab" role="tablist">
                           <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><img src="assets/images/globe.svg" width="18" height="16"> VOLUNTEER ONLINE</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><img src="assets/images/breifcase.svg" width="18" height="16"> VOLUNTEER ON-SITE</button>
                           </li>
                        </ul>
                        <div class="tab-content volunteerDetailTabContent" id="myTabContent">
                           <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                              <ul class="volunteerOnlineList">

                                 <li>
                                    <div class="volunteerOnlineListIcon">
                                       <img src="assets/images/Stack.svg">
                                    </div>
                                    <div class="volunteerOnlineListContent">
                                       <div class="volunteerOnlineListContentHeader">
                                          <h3 class="volunteerOnlineListContentTitle">“On-site Chef Required”</h3>
                                          <div class="volunteerOnlineListContentEarn">
                                             <span>
                                                <img src="assets/images/coin.svg" width="15" height="15">
                                             </span>
                                             Earn 50 IL2H Coins
                                          </div>
                                          <div class="selected"></div>
                                       </div>
                                       <div class="volunteerOnlineListContentBody">
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                                       </div>
                                       <div class="volunteerOnlineListFooter">
                                          <div class="card-img-tag">
                                             <span class="tagIcon">
                                                <img src="assets/images/watchDark.svg" width="15" height="15">
                                             </span>
                                             <span class="tagText"><strong>Estimated time:</strong> 5 - 10 hours</span>
                                          </div>
                                          <div class="card-img-tag">
                                             <span class="tagIcon">
                                                <img src="assets/images/calendar.svg" width="14" height="14">
                                             </span>
                                             <span class="tagText"><strong>Last Date:</strong> Jan 23</span>
                                          </div>
                                          <a href="#" class="shareTag"> <span class="">
                                                <img src="assets/images/shareDark.svg" width="14" height="14">
                                             </span> Share</a>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                           <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                              <ul class="volunteerOnSiteList">

                                 <li>
                                    <div class="volunteerOnSiteListContent">
                                       <div class="volunteerOnSiteListContentHeader">
                                          <h3 class="volunteerOnSiteListContentTitle">What is the Task ?</h3>
                                          <div class="volunteerOnSiteListContentEarn">
                                             <span>
                                                <img src="assets/images/coin.svg" width="15" height="15">
                                             </span>
                                             Earn 50 IL2H Coins
                                          </div>
                                       </div>
                                       <div class="volunteerOnSiteListContentBody">
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                                          <h4 class="volunteerOnSiteListContentTitle">Date & Time</h4>
                                          <div class="d-flex flex-wrap mb-3">
                                             <div class="card-img-tag">
                                                <span class="tagIcon">
                                                   <img src="assets/images/calendar.svg" width="14" height="14">
                                                </span>
                                                <span class="tagText">January 27, 2022</span>
                                             </div>
                                             <div class="card-img-tag">
                                                <span class="tagIcon">
                                                   <img src="assets/images/watchDark.svg" width="14" height="14">
                                                </span>
                                                <span class="tagText">12 Hours</span>
                                             </div>
                                          </div>
                                          <p class="mute">Duration: Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                                          <h4 class="volunteerOnSiteListContentTitle">Facilities</h4>
                                          <p>Duration: Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                                          <h4 class="volunteerOnSiteListContentTitle">Fees</h4>
                                          <p>Duration: Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                                       </div>
                                    </div>
                                 </li>


                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>

               </div>
            </div>

            <!--  -->



         </div>
      </div>
   </div>
</div>
<!-- Modal END -->
<!-- Modal Start-->
<div class="modal fade" id="SubmitRequest" tabindex="-1" aria-labelledby="SubmitRequestLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content bg-white">
         <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
         <span class="btn-close cross-icon" data-bs-dismiss="modal" aria-label="Close"></span>
         <div class="modal-body  my-4">
            <!-- Submitting Your Request! Start-->
            <div class="row justify-content-center">
               <div class="col-md-8 text-center p-4">
                  <img src="assets/images/uploadDoc.png" width="389" height="290">

                  <h3 class="mt-5 mb-2">
                     <strong>Thanks For Submitting Your Request!</strong>
                  </h3>
                  <p>Post request verification you’ll be notified when published.</p>

               </div>
            </div>

            <!-- Submitting Your Request! End-->
         </div>
      </div>
   </div>
</div>
<!-- Modal END -->
<?php $this->load->view('include/signup-footer') ?>
<script>
   function addMoreQues() {
      var num = $('.camp_ques_all .camp_ques').length;
      $('.camp_ques_all').append($('.camp_ques_base').clone());
      $('.camp_ques_num:last').text(num + 1);
      $('.camp_ques:last').removeClass('camp_ques_base');
   }
   function addMoreQuesOnsite() {
      var num = $('.camp_ques_all_1 .camp_ques_1').length;
      $('.camp_ques_all_1').append($('.camp_ques_base_1').clone());
      $('.camp_ques_num_1:last').text(num + 1);
      // $('.camp_ques_num_1:last #noKids').val();
      $('.camp_ques_1:last').removeClass('camp_ques_base_1');
   }
   $(document).ready(function() {
      $("#startdate").change(function() {
         $("#enddate").attr("min", this.value);
      });
      $("#enddate").change(function() {
         $("#startdate").attr("max", this.value);
      });
      $("#startdateonline").change(function() {
         $("#enddateonline").attr("min", this.value);
      });
      $("#enddateonline").change(function() {
         $("#startdateonline").attr("max", this.value);
      });
   });
</script>