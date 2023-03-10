<?php $this->load->view('include/login-header') ?>

      <main class="home">
         <section class="userSec">
            <div class="container-xl ">
               <div class="col-md-12">
                  <div class="userHead">
                     <h1 class="userHeading">Account Settings</h1> 
                     <!-- <a class="requestBtn" href="createRequests.html" >CREATE REQUESTS</a> -->
                     <p class="requestPara">Your profile details</p>
                  </div>
                  <div class="userBody">
                     <div class="userPic">
                        <img src="assets/images/testimonials.png" width="132" height="132">
                     </div>
                     <div class="userDetail">
                        <h3 class="userName">Ritesh Srivastava</h3>
                        <p class="userDescp">“Lorem Ipsum is simply dummy text of the printing and typesetting industry.”</p>
                     </div>
                     <a class="uploadBtn" href="">UPDATE PHOTO</a>
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
                           <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="nav-link " id="password-tab" data-bs-toggle="tab" data-bs-target="#password" type="button" role="tab" aria-controls="password" aria-selected="false">Password</button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="nav-link" id="documents-tab" data-bs-toggle="tab" data-bs-target="#documents" type="button" role="tab" aria-controls="documents" aria-selected="false">Documents</button>
                        </li>
                        <li class="nav-item" role="presentation">
                           <button class="nav-link" id="privacySettings-tab" data-bs-toggle="tab" data-bs-target="#privacySettings" type="button" role="tab" aria-controls="privacySettings" aria-selected="false">Privacy Settings</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="support-tab" data-bs-toggle="tab" data-bs-target="#support" type="button" role="tab" aria-controls="support" aria-selected="false">Support</button>
                         </li>
                         <li class="nav-item" role="presentation">
                            <button class="nav-link" id="savedCamp-tab" data-bs-toggle="tab" data-bs-target="#savedCamp" type="button" role="tab" aria-controls="savedCamp" aria-selected="false">Saved Campaigns</button>
                         </li>
                     </ul>
                     <div class="jumbotron">
                        <div class="tab-content" id="myTabContent">
                           <!-- Profile Tab -->
                           <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                              <form>
                                 <div class="tabpanelHeader">
                                    <h3 class="tabpanelHeaderTitle">Basic Details*</h3>
                                 </div>
                                 <div class="mb-4 mt-4 row align-items-center">
                                    <div class="col-md-6 col-lg-8">
                                       <div class="form-group">
                                          <label for="NGOName" class="form-label mb-2">More About You*</label>
                                          <input type="text" id="NGOName" class="form-control" aria-describedby="NGOName" placeholder="Ex: Ritesh">
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                       <div class="form-group">
                                          <label for="ContactNumber" class="form-label mb-2">Country You Live In</label>
                                          <input type="text" id="ContactNumber" class="form-control" aria-describedby="ContactNumber" placeholder="Ex: New Delhi">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="mb-4 mt-4 row align-items-center">
                                    <div class="col-md-6 col-lg-4">
                                       <div class="form-group">
                                          <label for="NGOName" class="form-label mb-2">Date of Birth*</label>
                                          <input type="date" id="NGOName" class="form-control" aria-describedby="NGOName" placeholder="Ex: Ritesh">
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                       <div class="form-group">
                                          <label for="ContactNumber" class="form-label mb-2">Gender*</label>
                                          <input type="text" id="ContactNumber" class="form-control" aria-describedby="ContactNumber" placeholder="Ex: XX XXXXXXXXXX">
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                       <div class="form-group">
                                          <label for="address" class="form-label mb-2">Additional Skills</label>
                                          <input type="text" id="email" class="form-control" aria-describedby="address" placeholder="Ex: B-4, Palam Vihar, India">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="mb-4 mt-4 row align-items-center">
                                    <div class="col-md-6 col-lg-4">
                                       <div class="form-group">
                                          <label for="City" class="form-label mb-2">Past Volunteering Experience</label>
                                          <input type="text" id="City" class="form-control" aria-describedby="City" placeholder="Ex: New Delhi">
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                       <div class="form-group">
                                          <label for="pincode" class="form-label mb-2">Facebook Page Link</label>
                                          <input type="text" id="pincode" class="form-control" aria-describedby="pincode" placeholder="Facebook">
                                       </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                       <div class="form-group">
                                          <label for="Country" class="form-label mb-2">Website</label>
                                          <input type="text" id="Country" class="form-control" aria-describedby="Country" placeholder="http://www.">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="mb-4 mt-4 row align-items-center">
                                    <div class="col-md-12 col-lg-12">
                                       <div class="form-group">
                                          <label for="City" class="form-label mb-2">Your Online Skills</label>
                                          <input type="text" id="City" class="form-control" aria-describedby="City" placeholder="Your Online Skills">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="btnWrap">
                                    <!-- <button type="submit" class="btn ">CANCEL</button> -->
                                    <button type="submit" class="btn btnbg">UPDATE</button>
                                 </div>
                              </form>
                           </div>
                           <!--  -->
                           <!-- Password Tab -->
                           <div class="tab-pane fade " id="password" role="tabpanel" aria-labelledby="password-tab">
                              <div class="tabpanelHeader">
                                 <h3 class="tabpanelHeaderTitle">Password</h3>
                                 <p class="tabpanelHeaderDecp">Please enter your current password to change your password.</p>
                              </div>
                              <hr>
                              <form>
                                 <div class="mb-4 mt-4 row align-items-center">
                                    <div class="col-md-3">
                                       <div class="form-group">
                                          <label for="currentPassword" class="col-form-label">Current Password</label>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="form-group">
                                          <input type="password" id="currentPassword" class="form-control" aria-describedby="currentPassword">
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="mb-4 mt-4 row align-items-center">
                                    <div class="col-md-3">
                                       <div class="form-group">
                                          <label for="newPassword" class="col-form-label">New Password</label>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="form-group">
                                          <input type="password" id="newPassword" class="form-control" aria-describedby="newPassword">
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="mb-4 mt-4 row align-items-center">
                                    <div class="col-md-3">
                                       <div class="form-group">
                                          <label for="confirmNewPassword" class="col-form-label">Confirm New Password</label>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="form-group">
                                          <input type="password" id="confirmNewPassword" class="form-control" aria-describedby="confirmNewPassword">
                                       </div>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="btnWrap">
                                    <button type="submit" class="btn ">CANCEL</button>
                                    <button type="submit" class="btn btnbg">UPDATE PASSWORD</button>
                                 </div>
                              </form>
                           </div>
                           <!--  -->
                           <!-- documents Tab -->
                           <div class="tab-pane fade" id="documents" role="tabpanel" aria-labelledby="documents-tab">
                              <div class="tabpanelHeader">
                                 <h3 class="tabpanelHeaderTitle">Select & Upload Document <small>(Voter ID, Passport, Driving License etc)</small></h3>
                                 <p class="tabpanelHeaderDecp">To confirm you are you, please digital photos of the following documents.</p>
                              </div>
                              <hr>
                              <form>
                                 <div class="col-md-12 uploadDocWrapper">
                                    <div class="form-group">

                                       <div class="picRadio">
            
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" id="Registration Copy">
                                             <label class="form-check-label" for="Registration Copy">
                                                <h6>Voter ID </h6>
                                                <img src="assets/images/uploadDoc.png" width="145" height="126" alt="Registration Copy"/>
                                             </label>
                                          </div>
            
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" id="Government Issued">
                                             <label class="form-check-label" for="Government Issued">
                                                <h6>Passport</h6>
                                                <img src="assets/images/uploadDoc.png" width="145" height="126" alt="Government Issued"/>
                                             </label>
                                          </div>

                                          <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="Driving License">
                                                <label class="form-check-label" for="Driving License">
                                                <h6>Driving License</h6>
                                                <img src="assets/images/uploadDoc.png" width="145" height="126" alt="Driving License"/>
                                                </label>
                                            </div>
            
            
                                       </div>
            
                                    </div>
                                             <div class="uploadBtnWrap">
                                                <a class="btn" href="#">Camera</a>
                                                <a class="btn btnbg" href="#">Upload</a>
                                             </div>

                                 </div>

 

                                 <div class="btnWrap">
                                    <button type="submit" class="btn ">CANCEL</button>
                                    <button type="submit" class="btn btnbg">VERIFY</button>
                                 </div>


                              </form>
                           </div>
                           <!--  -->
                           <!-- privacySettings Tab -->
                           <div class="tab-pane fade" id="privacySettings" role="tabpanel" aria-labelledby="privacySettings-tab">
                              <div class="tabpanelHeader">
                                 <h3 class="tabpanelHeaderTitle">Privacy Settings</h3>
                                 <p class="tabpanelHeaderDecp">GivingWay is a social network through which past, current and future volunteers share their knowledge, experience and advice for the benefit of the community.</p>
                              </div>
                              <hr>
                              <form>
                                 <div class="mb-4 mt-4 row align-items-center">
                                    <div class="col-md-8">
                                       <div class="form-group">
                                          <label for="currentPassword" class="col-form-label mb-3">You can manage your privacy settings here</label>
                                          <div class="form-group">
                                             <div class="checkBoxWrap">
                                                <input class="form-check-input" type="checkbox" value="" id="dummy" required>
                                                <label class="form-check-label" for="dummy">
                                                “Lorem Ipsum is simply dummy text of the printing and typesetting industry.”
                                                </label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="mb-4 mt-4 row align-items-center">
                                    <div class="col-md-8">
                                       <div class="form-group">
                                          <label for="currentPassword" class="col-form-label mb-3">Allow my profile to be visible on ILove2Help:</label>
                                          <div class="form-group mb-3">
                                             <div class="checkBoxWrap">
                                                <input class="form-check-input" type="checkbox" value="" id="connection" required>
                                                <label class="form-check-label" for="connection">
                                                In connection with reviews I write
                                                </label>
                                             </div>
                                          </div>
                                          <div class="form-group">
                                             <div class="checkBoxWrap">
                                                <input class="form-check-input" type="checkbox" value="" id="community" required>
                                                <label class="form-check-label" for="community">
                                                As part of the ILove2Help community of volunteer
                                                </label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="mb-4 mt-4 row align-items-center">
                                    <div class="col-md-8">
                                       <div class="form-group">
                                          <label for="currentPassword" class="col-form-label mb-3">Allow reviews I provide (text and images) to be:</label>
                                          <div class="form-group">
                                             <div class="checkBoxWrap">
                                                <input class="form-check-input" type="checkbox" value="" id="socialmedia" required>
                                                <label class="form-check-label" for="socialmedia">
                                                Used by ILove2Help on social media platforms to promote organizations I support
                                                </label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="btnWrap">
                                    <button type="submit" class="btn btnbg me-auto" style="margin-left: 0;">ENTER NOW</button>
                                 </div>
                              </form>
                              <hr>
                              <div class="mb-4 mt-4 row align-items-center">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="currentPassword" class="col-form-label" style="opacity: 0.37;">Delete my account & Information</label>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="btnWrap">
                                       <button type="submit" class="btn btnbg ms-auto bgRed">DELETE MY ACCOUNT</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!--  -->
                           <!-- support Tab -->
                           <div class="tab-pane fade" id="support" role="tabpanel" aria-labelledby="support-tab">
                            <div class="tabpanelHeader">
                               <h3 class="tabpanelHeaderTitle">Support</h3>
                               <!-- <p class="tabpanelHeaderDecp">GivingWay is a social network through which past, current and future volunteers share their knowledge, experience and advice for the benefit of the community.</p> -->
                            </div>
                        
                            </div>
                           <!-- savedCamp Tab -->
                           <div class="tab-pane fade" id="savedCamp" role="tabpanel" aria-labelledby="savedCamp-tab">
                            <div class="tabpanelHeader">
                               <h3 class="tabpanelHeaderTitle">Saved Campaigns</h3>
                               <!-- <p class="tabpanelHeaderDecp">GivingWay is a social network through which past, current and future volunteers share their knowledge, experience and advice for the benefit of the community.</p> -->
                            </div>
                        
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
         <?php $this->load->view('include/signup-footer') ?>
