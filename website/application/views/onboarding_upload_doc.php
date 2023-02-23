<?php $this->load->view('include/signup-header') ?>

<main class="peronalInfo">
    <div class="stepperWrap">
        <div class="container-xl ">
            <div class="stepsWrap">
                <ul class="stepsWrapList">
                    <li class="check">
                        <span>1</span>
                        <label>Personal Information</label>
                    </li>
                    <li class="active">
                        <span>2</span>
                        <label>Upload Documents</label>
                    </li>
                </ul>
            </div>
            <?php echo form_open_multipart('User/submit_upload_doc', array('id' => 'contactForm', 'class' => 'stepFormWrapper'));?> 
            <!-- <form class="stepFormWrapper"  name="submit-upload-doc" id="submit-upload-doc"> -->
                <!-- <?php echo $error;?> -->
                <div class="stepFormWrap">
                    <div class="stepFormHeading">Upload Document <span>(Voter ID, Passport, Driving License etc)</span></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="uploadWrapper">
                                    <div class="form-group col-md-12 uploadDocWrapper">
                                        <!-- <div class="picRadio">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" id="Registration Copy">
                                          <label class="form-check-label" for="Registration Copy">
                                             <h6>Registration Copy* <br> <i>(NGO)</i></h6>
                                             <img src="assets/images/uploadDoc.png" width="145" height="126" alt="Registration Copy">
                                          </label>
                                       </div>
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" id="Government Issued">
                                          <label class="form-check-label" for="Government Issued">
                                             <h6>Government Issued* <br> <i>(Care-Taker)</i></h6>
                                             <img src="assets/images/uploadDoc.png" width="145" height="126" alt="Government Issued">
                                          </label>
                                       </div>
                                    </div> -->

                                        <div class="picRadio">

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="Registration Copy" name="data[doc_type]" value = 'voter_id'>
                                                <label class="form-check-label" for="Registration Copy">
                                                    <h6>Voter ID </h6>
                                                    <img src="assets/images/uploadDoc.png" width="145" height="126" alt="Registration Copy" />
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="Government Issued" name="data[doc_type]" value = 'passport'>
                                                <label class="form-check-label" for="Government Issued">
                                                    <h6>Passport</h6>
                                                    <img src="assets/images/uploadDoc.png" width="145" height="126" alt="Government Issued" />
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" id="Driving License" name="data[doc_type]" value = 'driving_license'>
                                                <label class="form-check-label" for="Driving License">
                                                    <h6>Driving License</h6>
                                                    <img src="assets/images/uploadDoc.png" width="145" height="126" alt="Driving License" />
                                                </label>
                                            </div>
                                            <div class="text-danger doc_type"></div>

                                        </div>

                                    </div>
                                    <div class="uploadBtnWrap">
                                        <!-- <a class="btn" href="#">Camera</a> -->
                                        <a class="btn btnbg" href="#"><input type='file' name="user_doc" size='20' id='user_doc'/></a>
                                    </div>
                                </div>
                                <div class="text-center opacity-50 mt-3">
                                    <a href="#" class="text-center mute"><u>Why do we need?</u></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="formBtnWrap">
                    <!-- <button type="submit" class="btn prevBtn" onclick="javascript:location.href='personalInfo-Onboarding.html'">
                        <svg width="9" height="16" viewBox="0 0 9 16">
                            <path fill="var(--teflon)" d="M8.7 14.3c.4.4.4 1 0 1.4-.4.4-1 .4-1.4 0l-7-7c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4L2.4 8l6.3 6.3z"></path>
                        </svg>
                        PREVIOUS
                    </button> -->
                    <a class="skipBtn" >Skip for now</a>
                    <button type="submit" class="btn nextBtn">
                        NEXT
                        <svg width="9" height="16">
                            <path fill="var(--teflon)" d="M.3 14.3c-.4.4-.4 1.02 0 1.4.38.4 1 .4 1.4 0l7-7c.4-.4.4-1.02 0-1.4l-7-7C1.3-.1.68-.1.3.3c-.4.38-.4 1 0 1.4L6.6 8 .3 14.3z"></path>
                        </svg>
                    </button>
                </div>
            <?php echo form_close() ?>
            <!-- </form> -->
        </div>
    </div>
</main>
<?php $this->load->view('include/signup-footer') ?>

<script>
//    function submitUploadDoc(){
//         var doc_type = $('input[name="doc_type"]:checked').val().trim();
//         console.log(doc);
//         return;
//         var error = 0;
//         if(doc_type == ''){
//             error++;
//             $(".doc_type").html("Please select document type.");
//         }
        
//         if(error > 0){
//             $('input[name="doc_type"]').focus();
//         }else{
//             /** Form Submit */
//             var form = $('#submit-upload-doc')[0];
//             var fd = new FormData();
//             fd.append('user_doc', doc);
//             fd.append('doc_type', doc_type);
//             $.ajax({
//                 url: '<?php echo site_url("User/submit_upload_doc"); ?>',
//                 type: 'post',
//                 data: data,
//                 dataType: "JSON",
//                 processData: false,
//                 contentType: false,
//                 cache: false,                   
//                 success: function (response) { 
//                 if(response.error){
//                         $.each(response, function(key, value) {
//                             if(key != 'error'){
//                             $("." + key).html(value);
//                             $("#" + key ).addClass('is-invalid').removeClass('is-valid');
//                             }
//                         });
//                 }else{
//                         window.location = response.redirect_url;
//                 }
//                 },
//                 error: function (xhr, ajaxOptions, thrownError) { 
//                 return false;
//                 }
//             }); 
//             /** Form Submit End */
//         }
//    }
//    $(function() {
//         $("#contactForm").on('submit', function(e) {
//             e.preventDefault();

//             var contactForm = $(this);
//             console.log(contactForm);
//             console.log(contactForm.serialize());return;
//             $.ajax({
//                 url: contactForm.attr('action'),
//                 type: 'post',
//                 data: contactForm.serialize(),
//                 success: function(response){
//                     console.log(response);
//                     if(response.status == 'success') {
//                         $("#contactForm").hide();
//                     }

//                     $("#message").html(response.message);

//                 }
//             });
//         });
//     });
</script>