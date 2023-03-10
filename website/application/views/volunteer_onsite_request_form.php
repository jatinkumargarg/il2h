<?php $this->load->view('include/login-header') ?>

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
                                        <strong>You'd like to volunteer with <?= $value['ngo_name'] ?>?</strong>
                                    </h2>
                                    <p class="w-100">To apply, please take a quick moment to read the info below and fill out the short application form</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-xl-12">
                                    <?= form_open('Campaign/vol_onsite_submit_request', array('id' => 'contactForm', 'class' => 'stepFormWrapper full')); ?>
                                    <input type="hidden" name="data[camp_id]" value="<?= $value['camp_id'] ?>">
                                    <!-- <input type="hidden" name="data[camp_type]" value="<?= $value['campaign_type'] ?>"> -->
                                    <div class="stepFormWrap">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="requireWrap">

                                                    <div class="requireList">
                                                        <h5 class="requireListHeading">When do you want to arrive?</h5>
                                                        <div class="position-relative">
                                                            <span class="requireListBigHeading" id='arr_day'><?php echo date("d"); ?></span>
                                                            <span class="requireListSmallHeading" id='arr_mon'><?php echo date("F"); ?></span>
                                                            <input type="date" id="arr_date" class="form-control" aria-describedby="date" name="data[arrival_date]">
                                                        </div>
                                                    </div>

                                                    <div class="requireList">
                                                        <h5 class="requireListHeading">When will you leave?</h5>
                                                        <div class="position-relative">
                                                            <span class="requireListBigHeading" id='dep_day'><?php echo date("d"); ?></span>
                                                            <span class="requireListSmallHeading" id='dep_mon'><?php echo date("F"); ?></span>
                                                            <input type="date" id="dept_date" class="form-control" aria-describedby="date" name="data[dept_date]">
                                                        </div>
                                                    </div>

                                                    <div class="requireList">
                                                        <h5 class="requireListHeading">How long do you want to stay?</h5>
                                                        <div>
                                                            <span class="requireListBigHeading" id="duration">
                                                            </span>
                                                            <input type="hidden" class="form-control" id="stay_days" name="data[stay_days]">
                                                            <span class="requireListSmallHeading">Days</span>
                                                        </div>
                                                    </div>

                                                    <div class="requireList">
                                                        <h5 class="requireListHeading">How many volunteers</h5>
                                                        <div style="padding-top: 10px;">
                                                            <span class="requireListBigHeading">
                                                                <input type="number" id="date" class="form-control" name="data[no_of_volunteer]">
                                                            </span>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="fName" class="form-label">Full names (as should be on your volunteer certificate)</label>
                                                    <input type="text" class="form-control" id="fName" placeholder="1 - 4 Hours" aria-describedby="fName" required name="data[full_name]">
                                                    <div class="invalid-tooltip"> Please choose a username. </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="lName" class="form-label">Gender</label>
                                                    <input type="text" class="form-control" id="lName" placeholder="" aria-describedby="lName" required name="data[gender]">
                                                    <div class="invalid-tooltip"> Please choose a username. </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label for="lName" class="form-label">Email address</label>
                                                    <input type="text" class="form-control" id="lName" placeholder="" aria-describedby="lName" required name="data[email]">
                                                    <div class="invalid-tooltip"> Please choose a username. </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="email" class="form-label">Whatsapp-enabled Mobile phone number (include the international code eg +234)</label>
                                                    <input type="number" class="form-control" id="mobile_number" aria-describedby=" " required name="data[mobile_number]">
                                                    <div class="invalid-tooltip"> Please choose a username. </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="address" class="form-label">The State you currently live in Nigeria (Nigerians only)</label>
                                                    <input type="text" class="form-control" id="address" placeholder="" aria-describedby="address" required name="data[state]">
                                                    <div class="invalid-tooltip"> Please choose a username. </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="city" class="form-label">Full Home Address</label>
                                                    <input type="text" class="form-control" id="city" placeholder="Ex: New Delhi" aria-describedby="city" required name="data[home_address]">
                                                    <div class="invalid-tooltip"> Please choose a username. </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="pin" class="form-label">What is your highest level of education? (Secondary, first degree, masters etc)</label>
                                                    <input type="text" class="form-control" id="pin" placeholder="" aria-describedby="pin" required name="data[education]">
                                                    <div class="invalid-tooltip"> Please choose a username. </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="country" class="form-label">Current Occupation/Job</label>
                                                    <input type="text" class="form-control" id="country" placeholder="" aria-describedby="Occupation" required name="data[job]">
                                                    <div class="invalid-tooltip"> Please choose a username. </div>
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
<script>
    $("#arr_date").change(function() {
        const month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var date = new Date($('#arr_date').val());
        var day = date.getDate();
        var mon = month[date.getMonth()];
        // $('#dept_date').attr({"min" : date});
        $('#arr_day').text(day);
        $('#arr_mon').text(mon);
    });
    $("#dept_date").change(function() {
        const month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var date = new Date($('#dept_date').val());
        var arr_date = new Date($('#arr_date').val());
        var day = date.getDate();
        var mon = month[date.getMonth()];
        var diff = new Date(date - arr_date);
        var diff_days = diff / 1000 / 60 / 60 / 24;
        $('#duration').text(diff_days);
        $('#stay_days').val(diff_days);
        $('#dep_day').text(day);
        $('#dep_mon').text(mon);
    });
    $("#mobile_number").keypress(function(e) {
        var charCode = (e.which) ? e.which : e.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
    });
</script>