<?php $this->load->view('include/login-header') ?>

<!-- End Header -->
<main class="home">
   <section class="volunteerSec">
      <div class="container-xl ">
         <div class="row">
            <div class="col-md-12">
               <div class="jumbotron">
                  <div class="row">
                     <div class="col-md-12 mt-0 volunteerDetailHeadingWrapper">
                        <div class="volunteerDetailHeadingWrap" style="flex:0 0 100%">
                           <a href="volunteerOnline.html" class="prevPage"></a>
                           <h2 class="mainHeading ">
                              <strong>You'd like to volunteer with <?= $value['ngo_name'] ?></strong>
                           </h2>
                           <p class="w-100">To apply, please take a quick moment to read the info below and fill out the short application form</p>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12 col-lg-12 col-xl-12">
                           <?= form_open_multipart('Campaign/vol_submit_request', array('id' => 'contactForm', 'class' => 'stepFormWrapper full')); ?>
                           <input type="hidden" name="data[camp_id]" value="<?= $value['camp_id'] ?>">
                           <div class="stepFormWrap">
                              <div class="row">
                                 <div class="col-md-12">
                                    <h3 class="card-body-bottom-title mb-2">“<?= $value['title'] ?>”</h3>
                                    <p class="card-body-bottom-text">Estimated time: <?= $value['estimated_hour'] ?> hour(s)</p>
                                    <p><?= $value['description'] ?></p>
                                 </div>
                              </div>
                              <div class="row mt-5">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="pin" class="form-label">Please describe your professional experience</label>
                                       <input type="text" class="form-control" id="pin" placeholder="We would love to know how your experience relates to this task." aria-describedby="pin" required name="data[description]">
                                       <div class="invalid-tooltip"> Please fill experience. </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="country" class="form-label">How many hours can you dedicate each week?*</label>
                                       <input type="number" class="form-control" name="data[hours_work]" required>
                                       <div class="invalid-tooltip"> Please choose a username. </div>
                                    </div>
                                 </div>

                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label for="noKids" class="form-label">Attach CV*</label>
                                       <div class="uploadWrapper">

                                          <!--  -->
                                          <!-- <label for="formFile" class="form-label"><img src="<?php echo site_url('assets/images/VOS.svg'); ?>" width="22" height="22" /> Upload your CV here</label> -->
                                          <input class="form-control" type="file" id="formFile" name="vol_cv">
                                          <!--  -->
                                       </div>
                                    </div>
                                 </div>

                                 <?php
                                 $i = 1;
                                 foreach ($camp_questions as $q) { ?>
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label for="noKids" class="form-label"><strong>Question <?= $i ?>:</strong> <?= $q['question_name'] ?>?</label>
                                          <input type="text" class="form-control" id="noKids" placeholder="" aria-describedby="Question 1" required name="ques[<?= $q['id'] ?>]">
                                          <div class="invalid-tooltip"> Please choose a username. </div>
                                       </div>
                                    </div>
                                 <?php
                                    $i++;
                                 }
                                 ?>
                              </div>
                           </div>
                           <div class="formBtnWrap justify-content-md-end">
                              <button type="submit" class="btn prevBtn borderBtn">CANCEL </button>
                              <button type="submit" class="btn nextBtn">SUBMIT APPLICATION </button>

                           </div>
                           <?php form_close(); ?>
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


<?php $this->load->view('include/footer') ?>