<?php $this->load->view('include/signup-header', array('is_login_page' => 1)) ?>

   <main class="signUp">
      <div class="row half g-0">
         <div class="col-md-12 col-lg-6 leftPanel">
            <div class="bg">
               <img class="img-fluid" src="assets/images/login.svg" width="300" height="325">
            </div>
         </div>
         <div class="col-md-12 col-lg-6 rightPanel">
            <div class="loginWrapper">
               <div class="contentLogo">
                  <!-- <img src="assets/images/il2hLogo.svg"> -->
                  <svg xmlns="http://www.w3.org/2000/svg" version="1.2" viewBox="0 0 49 18" width="49" height="18">
                     <title>il2hLogo-svg</title>
                     <defs>
                        <linearGradient id="g1" x1="58.5" y1=".2" x2="136.1" y2="308" gradientUnits="userSpaceOnUse">
                           <stop offset="0" stop-color="#eb7f7c"/>
                           <stop offset=".3" stop-color="#f7b86f"/>
                           <stop offset=".6" stop-color="#c969f7"/>
                           <stop offset="1" stop-color="#826bf2"/>
                        </linearGradient>
                     </defs>
                     <style>
                        .s0 { fill: #24163c } 
                        .s1 { fill: url(#g1) } 
                     </style>
                     <g id="Page-1">
                        <g id="LANDING-PAGE-Copy">
                           <g id="Group-2-Copy-2">
                              <g id="Group-3">
                                 <g id="IL2H-Copy-2">
                                    <path id="IL2H-Copy" class="s0" d="m0.6 17.8q-0.3 0-0.4-0.2-0.2-0.2-0.2-0.5v-16.2q0-0.3 0.2-0.5 0.1-0.2 0.4-0.2h2q0.2 0 0.4 0.2 0.2 0.2 0.2 0.5v16.2q0 0.3-0.2 0.5-0.2 0.2-0.4 0.2zm6.8 0q-0.3 0-0.5-0.2-0.2-0.2-0.2-0.5v-16.2q0-0.3 0.2-0.5 0.2-0.2 0.5-0.2h1.9q0.3 0 0.5 0.2 0.2 0.2 0.2 0.5v13.7h7.9q0.3 0 0.5 0.2 0.1 0.2 0.1 0.5v1.8q0 0.3-0.1 0.5-0.2 0.2-0.5 0.2zm28.5 0q-0.3 0-0.5-0.2-0.2-0.2-0.2-0.5v-16.2q0-0.3 0.2-0.5 0.2-0.2 0.5-0.2h1.9q0.3 0 0.5 0.2 0.2 0.2 0.2 0.5v6.4h7.2v-6.4q0-0.3 0.2-0.5 0.2-0.2 0.5-0.2h1.9q0.3 0 0.5 0.2 0.2 0.2 0.2 0.5v16.2q0 0.3-0.2 0.5-0.2 0.2-0.5 0.2h-1.9q-0.3 0-0.5-0.2-0.2-0.2-0.2-0.5v-6.6h-7.2v6.6q0 0.3-0.2 0.5-0.2 0.2-0.5 0.2z"/>
                                 </g>
                                 <path id="Path" fill-rule="evenodd" class="s1" d="m20.6 17.8q-0.2 0-0.4-0.2-0.2-0.2-0.2-0.5v-1.5q0-0.4 0.2-0.7 0.3-0.3 0.4-0.5l7.1-6.3q0.7-0.6 0.9-1.2 0.2-0.6 0.2-1.2 0-1-0.6-1.7-0.5-0.7-1.9-0.7-1.3 0-2 0.7-0.6 0.7-0.8 1.7-0.1 0.3-0.3 0.5-0.2 0.1-0.4 0.1h-1.9q-0.3 0-0.5-0.2-0.2-0.1-0.2-0.4 0.1-1.1 0.6-2.1 0.5-1 1.3-1.8 0.8-0.7 1.8-1.1 1.1-0.5 2.3-0.5 1.5 0 2.6 0.5 1.1 0.5 1.9 1.3 0.7 0.8 1 1.8 0.4 1 0.4 2 0 0.6-0.1 1.1-0.1 0.6-0.3 1.1-0.3 0.6-0.8 1.2-0.5 0.6-1.3 1.3l-4.5 4.2h6.7q0.2 0 0.4 0.2 0.2 0.2 0.2 0.5v1.7q0 0.3-0.2 0.5-0.2 0.2-0.4 0.2z"/>
                              </g>
                           </g>
                        </g>
                     </g>
                  </svg>
               </div>
               <h3 class="loginHeading">Log In</h3>
               <p class="loginSubHeading">By clicking Sign Up you agree to our <a href="#">Terms</a>. Learn how we process your data in our <a href="#">Privacy Policy</a> and <a href="#">Cookie policy</a>.</p>
               <!-- Login Buttons -->
               <div class="loginBtnsWrap">
                  <div class="row">
                     <div class="col">
                        <button type="button" class="loginBtn">
                           <i class="loginBtnIcon">
                              <img src="assets/images/FACEBOOK.svg">
                           </i> 
                           <span class="loginBtnText">Facebook</span>
                        </button>
                     </div>
                     <div class="col">
                        <button type="button" class="loginBtn">
                           <i class="loginBtnIcon">
                              <img src="assets/images/FACEBOOK.svg">
                           </i> 
                           <span class="loginBtnText">Google</span>
                        </button>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <a type="button" href="phoneLogin.html" class="loginBtn">Phone Number</a>
                     </div>
                  </div>
               </div>
               <div class="divider">
                  OR
               </div>
               <form action="SignUp/login_submit" method="POST">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <input type="email" class="form-control" id="inputEmail" placeholder="Your Email" aria-describedby="inputEmail" required name="data[email]">
                           <div class="invalid-tooltip">
                              Please choose a username.
                           </div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <input type="password" class="form-control" placeholder="Password" id="inputPassword" required name="data[password]">
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <div class="d-flex mb-3 align-items-center">
                              <div class="checkBoxWrap remember">
                                 <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                 <label class="form-check-label" for="flexCheckDefault">
                                    Remember Me
                                 </label>
                              </div>
                              <span class="ms-auto"><a href="forgotPassword.html" class="forgotPass">Forgot Password</a></span> 
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <button type="submit" class="btn fullWidthBtn">LOGIN</button>
                  </div>
                  <?php if ($this->session->flashdata('incorrent_credentials')) { ?>
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <?php echo $this->session->flashdata('incorrent_credentials'); ?>
                    </div>
                  <?php } ?>
                  <div class="bottomHeading justify-content-center">
                     Don’t have an account? &nbsp; <a href="signUp.html">Get Started</a>
                  </div>

               </form>

            </div>
         </div>
      </div>
   </main>
<?php $this->load->view('include/signup-footer') ?>
