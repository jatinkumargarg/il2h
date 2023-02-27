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
                                <div class="volunteerDetailHeadingWrap">
                                    <a href="volunteerOnline.html" class="prevPage"></a>
                                    <h2 class="mainHeading ">
                                        <strong><?=$value['ngo_name']?></strong>
                                    </h2>
                                    <p class="w-100"><?=$value['address_line_one']?>, <?=$value['city']?>, <?=$value['country']?></p>
                                </div>
                                <div class="volunteerDetailShare">
                                    <a class="card-img-tag" href="#">
                                        <span class="tagIcon">
                                            <img src="assets/images/shareDark.svg" width="18" height="16">
                                        </span>
                                        <span class="tagText">Share</span>
                                    </a>
                                    <a class="card-img-tag" href="#">
                                        <span class="tagIcon">
                                            <img src="assets/images/heart.svg" width="18" height="16">
                                        </span>
                                        <span class="tagText">Save</span>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-xl-8">
                                    <div class="volunteerDetailContent">
                                        <p><?=$value['description']?></p>
                                        <p>
                                            <img class="img-fluid fullImg" src="<?php echo base_url('uploads') . '/' . $value['banner_image'];?>">
                                        </p>
                                        <h2 class="mainHeading pt-3">
                                            <strong>Ways to help</strong>
                                        </h2>
                                        <p><?=$value['description']?></p>
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
                                                                <div class="cardActivated">Accepted</div>
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
                                                                <div class="selected active"></div>
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
                                                                <div class="card-btnWrap mt-5">
                                                                    <a class="btn btnbg" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#applyOnSite"><span class="tagIcon">
                                                                            <img src="assets/images/calendar.svg" width="14" height="14">
                                                                        </span> APPLY</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>


                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-4">
                                    <div class="communityWrap">
                                        <h4 class="communityWrapHeading">Community</h4>
                                        <div class="communityWrapMember">
                                            <ul class="profilrWraps">
                                                <li>
                                                    <a href="#">
                                                        <img src="assets/images/car.png">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="assets/images/car.png">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="assets/images/car.png">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="assets/images/car.png">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="assets/images/car.png">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="assets/images/car.png">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="assets/images/car.png">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="assets/images/car.png">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="assets/images/car.png">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="assets/images/car.png">
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="communityWrapMore">456 more</div>
                                        </div>
                                        <?php
                                        if ($app_exist == 0) {
                                        ?>
                                        <div class="card-btnWrap">
                                            <a class="btn btnbg btnFull opacity-50" href="<?php echo site_url('volunteer-request') . '/' . $value['camp_id'];?>"> <span class="tagIcon">
                                                    <span class="tagIcon">
                                                        <img src="<?=base_url('assets/images/calendar.svg')?>" width="14" height="14">
                                                    </span> VOLUNTEER</a>
                                            <!-- <a class="btn btnFull btnBorder" href="#">    
                                       <span class="tagIcon">
                                       <img src="assets/images/calendar.svg" width="14" height="14">
                                       </span>
                                       MESSAGE</a> -->
                                        </div>
                                        <?php
                                        } else {
                                            echo 'You have already applied for this campaign';
                                        }
                                        ?>
                                    </div>
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

<!-- Modal Start-->
<div class="modal fade" id="applyOnSite" tabindex="-1" aria-labelledby="applyOnSiteLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            <span class="btn-close cross-icon" data-bs-dismiss="modal" aria-label="Close"></span>
            <div class="modal-body">
                <div class="modal-flex">
                    <div class="model-left">
                        <div class="bg">
                            <img src="assets/images/PRIZE.png" width="389" height="290">
                        </div>
                    </div>
                    <div class="model-right">
                        <h4 class="communityWrapHeading">
                            <strong>Please describe your professional experience</strong>
                        </h4>
                        <p class="mute">Duration: Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <p>
                            <strong>Please describe your professional experience</strong>
                        </p>
                        <ol class="mute">
                            <li>Duration: Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</li>
                            <li>Duration: Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</li>
                            <li>Duration: Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</li>
                        </ol>
                        <div class="form-group">
                            <div class="checkBoxWrap">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required="">
                                <label class="form-check-label" for="flexCheckDefault">
                                    By clicking Sign Up, you agree to our Terms and Conditions
                                </label>
                            </div>
                        </div>
                        <div class="card-btnWrap">
                            <a class="btn borderBtn" href="#">Cancel</a>
                            <a class="btn btnbg" href="#">I Agree</a>
                        </div>
                        <p class="footerShield"><span><img src="assets/images/footerShield.png"></span> Donating through IL2HWay is safe &amp; secure</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('include/footer') ?>