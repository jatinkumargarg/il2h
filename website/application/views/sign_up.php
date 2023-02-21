<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IL2H - <?php echo $page_title; ?></title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css');?>">
   <style>
    .form-group p {
        opacity: 1;
    }
   </style>
</head>
<body>
   <main class="signUp">
      <div class="row half g-0">
         <div class="col-md-12 col-lg-6 leftPanel">
            <div class="bg">
               <img class="img-fluid" src="<?php echo base_url('assets/images/login.svg');?>" width="300" height="325">
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
               <h3 class="loginHeading">Get Started</h3>
               <p class="loginSubHeading">By clicking Sign Up you agree to our <a href="#">Terms</a>. Learn how we process your data in our <a href="#">Privacy Policy</a> and <a href="#">Cookie policy</a>.</p>
               <!-- Login Buttons -->
               <div class="loginBtnsWrap">
                  <div class="row">
                     <div class="col">
                        <button type="button" class="loginBtn">
                           <i class="loginBtnIcon">
                              <img src="<?php echo base_url('assets/images/FACEBOOK.svg');?>">
                           </i> 
                           <span class="loginBtnText">Facebook</span>
                        </button>
                     </div>
                     <div class="col">
                        <button type="button" class="loginBtn">
                           <i class="loginBtnIcon">
                              <img src="<?php echo base_url('assets/images/FACEBOOK.svg');?>">
                           </i> 
                           <span class="loginBtnText">Google</span>
                        </button>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <a type="button" href="<?php echo site_url('phone-sign-up'); ?>" class="loginBtn">Phone Number</a>
                     </div>
                  </div>
               </div>
               <div class="divider">
                  OR
               </div>
               <form name="sign_up_form" id="sign_up_form">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <input type="hidden" class="form-control" name="data[user_type]" id="user_type" value="<?php echo $user_type;?>" >
                           <input type="text" class="form-control" name="data[name]" id="full_name" placeholder="Enter Your Name" >
                           <div class="text-danger full_name" ></div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <input type="email" class="form-control" name="data[email]" id="email" placeholder="Your Email"  >
                           <div class="text-danger email"></div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <input type="password" class="form-control" name="data[password]" placeholder="Password" id="password" >
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <input type="password" class="form-control" name="data[confirm_password]" placeholder="Confirm Password" id="confirm_password">
                           <div class="text-danger confirm_password"></div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="form-group">
                           <div class="checkBoxWrap">
                              <input class="form-check-input" name="data[terms_condtions]" type="checkbox" value="1" id="terms_condtions" >
                              <label class="form-check-label" for="terms_condtions">
                                 By clicking Sign Up, you agree to our Terms and Conditions
                              </label>
                              <div class="text-danger terms_condtions"></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <button type="button" onclick="validateForm()" class="btn fullWidthBtn">SIGN UP</button>
                     </div>
                  </form>
                  <div class="bottomHeading">
                     <div class="haveAccnt">Already have an account? <a href="<?php echo site_url('login');?>">Log In</a></div>
                     <a class="browseAsGuest" href="<?php echo site_url('login');?>">Browse as Guest</a>
                  </div>
               </div>
            </div>
         </div>
      </main>
      <script type="text/javascript" src="<?php echo base_url('assets/js/jQuery.js');?>"></script>
      <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
      <!-- <script type="text/javascript" src="<?php echo  base_url('assets/js/main.js');?>"></script> -->

      <script>
                
        function validateForm(){
      
            var fullname = $("#full_name").val().trim();
            var email = $("#email").val().trim();
            var password = $("#password").val().trim();
            var confirm_password = $("#confirm_password").val().trim();
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var error = 0;
            if(fullname == ''  ){
                error++;
                $(".full_name").html("Please enter a valid name");
                $("#full_name").addClass('is-invalid').removeClass('is-valid');
            }else{
                $(".full_name").html("");
                $("#full_name").removeClass('is-invalid').addClass('is-valid');
            } 
            if(email == '' || regex.test(email) == false){
                error++;
                $(".email").html("Please enter a valid email address.");
                $("#email").addClass('is-invalid').removeClass('is-valid');
            }else{
                $(".email").html("");
                $("#email").removeClass('is-invalid').addClass('is-valid');
            }
            if(password == '' ){
                error++; 
                $(".password").html("Please enter a passowrd");
                $("#password").addClass('is-invalid').removeClass('is-valid');
            }else{
                $(".password").html("");
                $("#password").removeClass('is-invalid').addClass('is-valid');
            }

            if(confirm_password != password ){
                error++; 
                $(".confirm_password").html("Confirm Password and Passwod should be exactly same.");
                $("#confirm_password").addClass('is-invalid').removeClass('is-valid');
            }else{
                $(".confirm_password").html("");
                $("#confirm_password").removeClass('is-invalid').addClass('is-valid');
            }

            if( $("#terms_condtions").prop('checked')==true) {
                $(".terms_condtions").html("");
                $("#terms_condtions").removeClass('is-invalid').addClass('is-valid');
            }else{
                error++; 
                $(".terms_condtions").html("Please accept terms and conditions.");
                $("#terms_condtions").addClass('is-invalid').removeClass('is-valid');
            }
            if(error > 0){
                $("#full_name").focus();
            }else{
                /** Form Submit */
                var form = $('#sign_up_form')[0];
                var data = new FormData(form);
               //  console.log(data);return;
                $.ajax({
                    url: '<?php echo site_url("SignUp/signup_user"); ?>',
                    type: 'post',
                    data: data,
                    dataType: "JSON",
                    processData: false,
                    contentType: false,
                    cache: false,                   
                    success: function (response) { 
                        if(response.error){
                            $.each(response, function(key, value) {
                                if(key != 'error'){
                                    $("." + key).html(value);
                                    $("#" + key ).addClass('is-invalid').removeClass('is-valid');
                                }
                            });
                        }else{
                            window.location = response.redirect_url;
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) { 
                        return false;
                    }
                }); 
                /** Form Submit End */
            }
        
        }
      </script>
   </body>
   </html>