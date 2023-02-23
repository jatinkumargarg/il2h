<?php $this->load->view('include/login-header') ?>

      <!-- End Header -->
      <main class="home">
         <section class="userSec">
            <div class="container-xl ">
               <div class="row mb-4">
                  <div class="col-md-12">
                     <div class="userHead">
                        <a href="<?=site_url('dashboard-ngo');?>" class="prevPage"></a>
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
                              <?php echo form_open_multipart('Campaign/create_campaign', array('id' => 'contactForm'));?> 
                                 <div class="mb-4 mt-4 row align-items-center">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label for="title" class="col-form-label mb-2">Add Photo*</label>
                                          <div class="uploadBtnWrap" style="justify-content:left">
                                              <!-- <a class="btn" href="#">Camera</a> -->
                                              <a class="btn btnbg" href="#"><input type='file' name="camp_photo" size='20'/></a>
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
                                          <input type="text" id="description" class="form-control" aria-describedby="description" placeholder="Write a few words about the NGO or the task…" name="data[description]"  required>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="mb-4 mt-4 row align-items-center">
                                    <div class="col-md-6 col-lg-6">
                                       <div class="form-group">
                                          <label for="description" class="col-form-label mb-2">Assign Mentor*</label>
                                          <select class="form-select form-control" aria-label="Default select example" name="data[mentor_id]"  required>
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
                                          <input type="date" id="date" class="form-control" aria-describedby="date" name="data[start_date]" required>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                       <div class="form-group">
                                          <label for="city" class="form-label mb-2">End Date*</label>
                                          <input type="date" id="date" class="form-control" aria-describedby="date" name="data[end_date]" required>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label for="noKids"class="col-form-label mb-2">Attach CV*</label>
                                       <div class="uploadWrapper">
                                          <!--  -->
                                          <!-- <label for="formFile" class="form-label"><img src="assets/images/VOS.svg" width="22" height="22"/> Upload  your CV here</label> -->
                                          <input class="form-control" type="file" id="formFile" name ="cv_url">
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
                              <form>
                                 <div class="mb-4 mt-4 row align-items-center">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label for="title" class="col-form-label mb-2">Add Photo*</label>
                                          <div class="file-wrapper">
                                             <input class="file-input" id="js-file-input" type="file">
                                             <div class="file-content">
                                                <div class="file-infos">
                                                   <svg width="64px" height="64px" viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                      <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity="0.37">
                                                         <g id="NGO---CREATE-REQUESTS---ONLINE" transform="translate(-232.000000, -496.000000)" fill="#24163C" fill-rule="nonzero">
                                                            <g id="Group-2" transform="translate(232.000000, 496.000000)">
                                                               <path d="M48,50.6666667 C49.0783891,50.6666667 50.0504908,50.0167267 50.4631413,49.0204122 C50.8757917,48.0240976 50.6477544,46.877318 49.8853333,46.1146667 L33.4266667,29.6586667 C28.220002,24.4535742 19.779998,24.4535742 14.5733333,29.6586667 L8.78133333,35.448 C7.77074077,36.4943437 7.78519367,38.1575594 8.81381713,39.1861829 C9.84244059,40.2148063 11.5056563,40.2292592 12.552,39.2186667 L18.344,33.4293333 C21.5083949,30.4053964 26.4916051,30.4053964 29.656,33.4293333 L46.1146667,49.8853333 C46.6146473,50.385465 47.2928138,50.6666667 48,50.6666667 Z" id="Path"></path>
                                                               <path d="M42.6666667,28 C47.8213243,28 52,23.8213243 52,18.6666667 C52,13.512009 47.8213243,9.33333333 42.6666667,9.33333333 C37.512009,9.33333333 33.3333333,13.512009 33.3333333,18.6666667 C33.3333333,23.8213243 37.512009,28 42.6666667,28 Z M42.6666667,14.6666667 C44.8758057,14.6666667 46.6666667,16.4575277 46.6666667,18.6666667 C46.6666667,20.8758057 44.8758057,22.6666667 42.6666667,22.6666667 C40.4575277,22.6666667 38.6666667,20.8758057 38.6666667,18.6666667 C38.6666667,16.4575277 40.4575277,14.6666667 42.6666667,14.6666667 L42.6666667,14.6666667 Z" id="Shape"></path>
                                                               <path d="M61.3333333,42.6666667 C59.860574,42.6666667 58.6666667,43.860574 58.6666667,45.3333333 L58.6666667,50.6666667 C58.6666667,55.0849447 55.0849447,58.6666667 50.6666667,58.6666667 L45.3333333,58.6666667 C43.860574,58.6666667 42.6666667,59.860574 42.6666667,61.3333333 C42.6666667,62.8060927 43.860574,64 45.3333333,64 L50.6666667,64 C58.0268084,63.9911837 63.9911837,58.0268084 64,50.6666667 L64,45.3333333 C64,43.860574 62.8060927,42.6666667 61.3333333,42.6666667 Z" id="Path"></path>
                                                               <path d="M2.66666667,21.3333333 C4.139426,21.3333333 5.33333333,20.139426 5.33333333,18.6666667 L5.33333333,13.3333333 C5.33333333,8.91505533 8.91505533,5.33333333 13.3333333,5.33333333 L18.6666667,5.33333333 C20.139426,5.3333333 21.3333333,4.13942598 21.3333333,2.66666667 C21.3333333,1.19390736 20.139426,0 18.6666667,0 L13.3333333,0 C5.9731916,0.00881631023 0.00881631023,5.9731916 0,13.3333333 L0,18.6666667 C0,20.139426 1.19390733,21.3333333 2.66666667,21.3333333 Z" id="Path"></path>
                                                               <path d="M18.6666667,58.6666667 L13.3333333,58.6666667 C8.91505533,58.6666667 5.33333333,55.0849447 5.33333333,50.6666667 L5.33333333,45.3333333 C5.33333333,43.860574 4.139426,42.6666667 2.66666667,42.6666667 C1.19390733,42.6666667 0,43.860574 0,45.3333333 L0,50.6666667 C0.00881631023,58.0268084 5.9731916,63.9911837 13.3333333,64 L18.6666667,64 C20.139426,64 21.3333333,62.8060927 21.3333333,61.3333333 C21.3333333,59.860574 20.139426,58.6666667 18.6666667,58.6666667 Z" id="Path"></path>
                                                               <path d="M50.6666667,0 L45.3333333,0 C43.860574,0 42.6666667,1.19390733 42.6666667,2.66666667 C42.6666667,4.139426 43.860574,5.33333333 45.3333333,5.33333333 L50.6666667,5.33333333 C55.0849447,5.33333333 58.6666667,8.91505533 58.6666667,13.3333333 L58.6666667,18.6666667 C58.6666667,20.139426 59.860574,21.3333333 61.3333333,21.3333333 C62.8060927,21.3333333 64,20.139426 64,18.6666667 L64,13.3333333 C63.9911837,5.9731916 58.0268084,0.00881631023 50.6666667,0 Z" id="Path"></path>
                                                            </g>
                                                         </g>
                                                      </g>
                                                   </svg>
                                                </div>
                                                <!-- <p class="file-name" id="js-file-name">No file selected</p> -->
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="mb-4 mt-4 row align-items-center">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label for="title" class="col-form-label mb-2">Title*</label>
                                          <input type="text" id="title" class="form-control" aria-describedby="title" placeholder="Website developer needed">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="mb-4 mt-4 row align-items-center">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label for="description" class="col-form-label mb-2">Description*</label>
                                          <input type="text" id="description" class="form-control" aria-describedby="description" placeholder="Write a few words about the NGO or the task…">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="mb-4 mt-4 row align-items-center">
                                    <div class="col-md-6 col-lg-6">
                                       <div class="form-group">
                                          <label for="description" class="col-form-label mb-2">Assign Mentor*</label>
                                          <select class="form-select form-control" aria-label="Default select example">
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
                                          <select class="form-select form-control" aria-label="Default select example">
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
                                             <span class="form-control num"><b>6</b> Hours</span>
                                             <span class="plus circle">+</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                       <div class="form-group">
                                          <label for="city" class="form-label mb-2">Accomodation*</label>
                                          <div class="radioWrap">
                                             <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="accomodationYes">
                                                <label class="form-check-label" for="accomodationYes">
                                                YES
                                                </label>
                                             </div>
                                             <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="accomodationNo">
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
                                                <input class="form-check-input" type="checkbox" value="" id="mealsYes">
                                                <label class="form-check-label" for="mealsYes">
                                                YES
                                                </label>
                                             </div>
                                             <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="mealsNo">
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
                                          <input type="date" id="date" class="form-control" aria-describedby="date">
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                       <div class="form-group">
                                          <label for="city" class="form-label mb-2">End Date*</label>
                                          <input type="date" id="date" class="form-control" aria-describedby="date">
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                       <div class="form-group">
                                          <label for="city" class="form-label mb-2">Select Activites*</label>
                                          <select class="form-select form-control" aria-label="Default select example">
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
                                          <input type="text" id="description" class="form-control" aria-describedby="description" placeholder="Write a few words about the Facilities…">
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                       <div class="form-group">
                                          <label for="description" class="col-form-label mb-2">Fees</label>
                                          <input type="text" id="description" class="form-control" aria-describedby="description" placeholder="Write a few words about the Fees…">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label for="noKids"class="col-form-label mb-2">Attach CV*</label>
                                       <div class="uploadWrapper">
                                          <!--  -->
                                          <label for="formFile" class="form-label"><img src="assets/images/VOS.svg" width="22" height="22"/> Upload  your CV here</label>
                                          <input class="form-control" type="file" id="formFile" hidden>
                                          <!--  -->
                                       </div>
                                    </div>
                                 </div>
                                 <div class="stepFormHeading">Add Questions* <small>(You can add unlimited questions here)</small></div>
                                 <!-- Repeat for Question Input -->
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label for="noKids" class="col-form-label mb-2">Question 1</label>
                                       <input type="text" class="form-control" id="noKids" placeholder="" aria-describedby="Question 1" required>
                                       <div class="invalid-tooltip"> Please choose a username. </div>
                                    </div>
                                 </div>
                                 <!-- Repeat for Question Input -->
                                 <a href="#" class="addMoreQues">+ Add More Questions*</a>
                                 <div class="btnWrap mt-5">
                                    <button type="submit" class="btn borderBtn">CANCEL</button>
                                    <!-- <button type="submit" class="btn btnbg">PREVIEW</button> -->
                                    <a class="btn btnbg"  onclick="return" data-bs-toggle="modal" data-bs-target="#applyOnSite" >PREVIEW</a>
                                 </div>
                              </form>
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
                         <a class="btn borderBtn" href="#"  data-bs-dismiss="modal" aria-label="Close">Cancel</a>       
                         <a class="btn btnbg" href="#"  onclick="return" data-bs-toggle="modal" data-bs-target="#SubmitRequest">Submit Request</a>                     
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
    // var new_ques = $('.camp_ques_base:first').clone();
    $('.camp_ques_all').append($('.camp_ques_base').clone());
    $('.camp_ques_num:last').text(num+1);
    $('.camp_ques:last').removeClass('camp_ques_base');
  }
</script>