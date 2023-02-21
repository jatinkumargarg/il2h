<?php $this->load->view('include/signup-header') ?>
     
     <main class="peronalInfo">
         <div class="stepperWrap">
            <div class="container-xl ">
               <div class="stepsWrap">
                  <ul class="stepsWrapList">
                     <li class="active">
                        <span>1</span>
                        <label>Personal Information</label>
                     </li>
                     <li>
                        <span>2</span>
                        <label>Upload Documents</label>
                     </li>
                  </ul>
               </div>
               <form class="stepFormWrapper" name="basic-details" id="basic-details">
                  <div class="stepFormWrap">
                     <div class="stepFormHeading">Basic Details</div>
                     <div class="mb-4 mt-4 row align-items-center">
                        <div class="col-md-6 col-lg-4">
                           <div class="form-group">
                              <label for="ngo_name" class="form-label mb-2">Registered NGO Name</label>
                              <input type="text" id="ngo_name" name="data[ngo_name]" class="form-control"  placeholder="Ex: Ritesh">
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                           <div class="form-group">
                              <label for="offiicial_contact_number" class="form-label mb-2">Official Contact Number</label>
                              <input type="text" id="offiicial_contact_number" class="form-control" name="data[offiicial_contact_number]" placeholder="Ex: XX XXXXXXXXXX">
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                           <div class="form-group">
                              <label for="contact_email" class="form-label mb-2">Contact Email</label>
                              <input type="email" id="contact_email" class="form-control" name="data[contact_email]" placeholder="Ex: example@gmail.com">
                              <div class="text-danger contact_email"></div>
                           </div>
                        </div>
                     </div>
                     <div class="mb-4 mt-4 row align-items-center">
                        <div class="col-md-6 col-lg-4">
                           <div class="form-group">
                              <label for="contact_person_name" class="form-label mb-2">Name of Contact Person</label>
                              <input type="text" id="contact_person_name" class="form-control" name="data[contact_person_name]" >
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                           <div class="form-group">
                              <label for="contact_number" class="form-label mb-2">Contact Number</label>
                              <input type="text" id="contact_number" class="form-control" name="data[contact_number]" placeholder="Ex: XX XXXXXXXXXX">
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                           <div class="form-group">
                              <label for="address_line_one" class="form-label mb-2">Address Line One</label>
                              <input type="text" id="address_line_one" class="form-control" name="data[address_line_one]">
                           </div>
                        </div>
                     </div>
                     <div class="mb-4 mt-4 row align-items-center">
                        <div class="col-md-6 col-lg-4">
                           <div class="form-group">
                              <label for="city" class="form-label mb-2">City</label>
                              <input type="text" id="city" class="form-control" name="data[city]">
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                           <div class="form-group">
                              <label for="pincode" class="form-label mb-2">Pin Code</label>
                              <input type="text" id="pincode" class="form-control" name="data[pincode]">
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                           <div class="form-group">
                              <label for="country" class="form-label mb-2">Country</label>
                              <input type="text" id="country" class="form-control" name="data[country]">
                           </div>
                        </div>
                     </div>
                     <!--  -->
                     <div class="stepFormHeading">Other information</div>
                     <div class="mb-4 mt-4 row align-items-center">
                        <div class="col-md-6 col-lg-6">
                           <div class="form-group">
                              <label for="ngo_aim" class="form-label mb-2">Aim of NGO</label>
                              <select class="form-select form-control" name="data[ngo_aim]" id="ngo_aim">
                                 <option value="" selected >Categories - Dropdown (giveaway)</option>
                                 <option value="1">One</option>
                                 <option value="2">Two</option>
                                 <option value="3">Three</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                           <div class="form-group">
                              <label for="purpose_of_joining" class="form-label mb-2">Purpose of Joining</label>
                              <select class="form-select form-control" name="data[purpose_of_joining]" id="purpose_of_joining">
                                 <option value="" selected>Spread Love</option>
                                 <option value="1">One</option>
                                 <option value="2">Two</option>
                                 <option value="3">Three</option>
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="formBtnWrap">
                     
                     <a class="skipBtn" href="<?php echo site_url();?>">Skip for now</a>
                     <button type="button" class="btn nextBtn" onclick="submitBasicInformation()">
                        NEXT 
                        <svg width="9" height="16">
                           <path fill="var(--teflon)" d="M.3 14.3c-.4.4-.4 1.02 0 1.4.38.4 1 .4 1.4 0l7-7c.4-.4.4-1.02 0-1.4l-7-7C1.3-.1.68-.1.3.3c-.4.38-.4 1 0 1.4L6.6 8 .3 14.3z"></path>
                        </svg>
                     </button>
                  </div>
               </form>
            </div>
         </div>
      </main>
<?php $this->load->view('include/signup-footer') ?>

<script>
   function submitBasicInformation(){
      var contact_email = $("#contact_email").val().trim();
      var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      var error = 0;
      if(contact_email == '' || regex.test(contact_email) == false){
            error++;
            $(".contact_email").html("Please enter a valid email address.");
            $("#contact_email").addClass('is-invalid').removeClass('is-valid');
      }else{
            $(".contact_email").html("");
            $("#contact_email").removeClass('is-invalid').addClass('is-valid');
      }

      if(error > 0){
         $("#contact_email").focus();
      }else{
         /** Form Submit */
         var form = $('#basic-details')[0];
         var data = new FormData(form);
         $.ajax({
            url: '<?php echo site_url("User/submit_basic_information"); ?>',
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