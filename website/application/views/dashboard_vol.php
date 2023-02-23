<?php $this->load->view('include/login-header') ?>

<!-- End Header -->
<main class="home">
  <section class="userSec">
    <div class="container-xl ">
      <div class="row mb-4 align-items-center ">
        <div class="col-md-8">
          <div class="userHead">
            <h1 class="userHeading">Dashboard</h1>
            <!-- <a class="requestBtn" href="createRequests.html" >CREATE REQUESTS</a> -->
            <!-- <p class="requestPara">Your profile details</p> -->
          </div>
        </div>
        <div class="col-md-4">
          <div class="rewardListTop">
            <img src="assets/images/coin.svg" width="70" height="70">
            <div class="rewardListBody">
              <p>Total</p>
              <h3 class="card-title">0 Coins</h3>
            </div>
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
              <button class="nav-link active" id="Online-tab" data-bs-toggle="tab" data-bs-target="#Online" type="button" role="tab" aria-controls="Online" aria-selected="true">Online</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link " id="Onsite-tab" data-bs-toggle="tab" data-bs-target="#Onsite" type="button" role="tab" aria-controls="Onsite" aria-selected="false">Onsite</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="Donate-Win-tab" data-bs-toggle="tab" data-bs-target="#Donate-Win" type="button" role="tab" aria-controls="Donate-Win" aria-selected="false">Donate Win</button>
            </li>
          </ul>
          <div class="jumbotron">
            <div class="tab-content" id="myTabContent">
              <!-- Online Tab -->
              <div class="tab-pane fade show active" id="Online" role="tabpanel" aria-labelledby="Online-tab">
                <!-- Filter Div -->
                <div class="filterWrapper row g-0">
                  <div class="col-md-4">
                    <ul class="nav nav-tabs">
                      <li class="nav-item" role="presentation">
                        <a class="nav-link active">All</a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a class="nav-link">Accepted</a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a class="nav-link">In Queue</a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-8">
                    <ul class="nav nav-pills justify-content-end">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"> <img src="assets/images/calendar.svg" width="14" height="14"> Date</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"> <img src="assets/images/ESTIMATEDTIME.svg" width="14" height="14"> Estimated Time</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"> <img src="assets/images/accommodationDark.svg" width="14" height="14"> Accommodation</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"> <img src="assets/images/mealsDark.svg" width="14" height="14"> Meals</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"> <img src="assets/images/mapCard.svg" width="14" height="14"> Location</a>
                      </li>
                    </ul>
                  </div>
                </div>

                <!-- Filter Div Ends-->

                <div class="row cardWrap">
                  <?php
                  // echo "<pre>";print_r($camp_online_all);die;
                  foreach ($camp_online_all as $key => $value) {

                  ?>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                      <div class="card largeImg">
                        <div class="card-img-wrap">
                          <div class="card-img-tag-top">
                            <span><img src="assets/images/breifcaseLight.svg" width="14" height="14"> On-site</span>

                            <!-- <div class="cardActivated ml-auto">Accepted</div> -->
                          </div>
                          <img src="assets/images/campaigns1.jpg" class="card-img-top" alt="..." width="377" height="275">
                          <div class="card-img-tagIcon">
                            <div class="card-img-tagLeft">
                              <div class="card-img-tag">
                                <span class="tagIcon">
                                  <img src="assets/images/watch.svg" width="18" height="16">
                                </span>
                                <span class="tagText">Estimated time: <?=$value['estimated_hour']?> Hour(s)</span>
                              </div>
                              <!-- <div class="card-img-tag">
                                <span class="tagIcon">
                                  <img src="assets/images/meals.svg" width="16" height="16">
                                </span>
                                <span class="tagText">Meals</span>
                              </div> -->
                            </div>
                            <!-- <div class="card-img-views">
                              <span>Views</span>
                              <h4>3,288</h4>
                            </div> -->
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="card-body-top">
                            <h4 class="card-title"><?=$value['ngo_name']?></h4>
                            <p class="card-text"><img src="assets/images/mapCard.svg" width="13" height="13"> <?=$value['city']?>, <?=$value['country']?></p>
                          </div>
                          <div class="card-body-bottom">
                            <h5 class="card-body-bo ttom-title">“<?=$value['title']?>”</h5>
                            <p class="card-body-bottom-text"><?=$value['description']?></p>
                          </div>
                          <div class="card-btnWrap">
                            <a class="btn borderBtn" href="donateWinTravel.html">Details</a>
                            <a class="btn btnbg" href="volunteerOnlineDetail.html">Withdraw</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php
                  }
                  ?>
                </div>

              </div>
              <!--  -->
              <!-- Onsite Tab -->
              <div class="tab-pane fade " id="Onsite" role="tabpanel" aria-labelledby="Onsite-tab">
                <!-- <div class="tabpanelHeader">
                              <h3 class="tabpanelHeaderTitle">Onsite</h3>
                              <p class="tabpanelHeaderDecp">Please enter your current password to change your password.</p>
                           </div> -->
                <!-- Filter Div -->
                <div class="filterWrapper row g-0">
                  <div class="col-md-4">
                    <ul class="nav nav-tabs">
                      <li class="nav-item" role="presentation">
                        <a class="nav-link active">All</a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a class="nav-link">Accepted</a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a class="nav-link">In Queue</a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-8">
                    <ul class="nav nav-pills justify-content-end">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"> <img src="assets/images/calendar.svg" width="14" height="14"> Date</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"> <img src="assets/images/ESTIMATEDTIME.svg" width="14" height="14"> Estimated Time</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"> <img src="assets/images/accommodationDark.svg" width="14" height="14"> Accommodation</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"> <img src="assets/images/mealsDark.svg" width="14" height="14"> Meals</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"> <img src="assets/images/mapCard.svg" width="14" height="14"> Location</a>
                      </li>
                    </ul>
                  </div>
                </div>

                <!-- Filter Div Ends-->
                <div class="row cardWrap">
                  <!--  -->
                  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="card largeImg">
                      <div class="card-img-wrap">
                        <div class="card-img-tag-top">
                          <span><img src="assets/images/breifcaseLight.svg" width="14" height="14"> On-site</span>

                          <div class="cardActivated ml-auto">Accepted</div>
                        </div>
                        <img src="assets/images/campaigns.jpg" class="card-img-top" alt="..." width="377" height="275">
                        <div class="card-img-tagIcon">
                          <div class="card-img-tagLeft">
                            <div class="card-img-tag">
                              <span class="tagIcon">
                                <img src="assets/images/accommodation.svg" width="18" height="16">
                              </span>
                              <span class="tagText">Accommodation</span>
                            </div>
                            <div class="card-img-tag">
                              <span class="tagIcon">
                                <img src="assets/images/meals.svg" width="16" height="16">
                              </span>
                              <span class="tagText">Meals</span>
                            </div>
                          </div>
                          <div class="card-img-views">
                            <span>Views</span>
                            <h4>3,288</h4>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="card-body-top">
                          <h4 class="card-title">Name of NGO</h4>
                          <p class="card-text"><img src="assets/images/mapCard.svg" width="13" height="13"> Vukovar, Croatia, Europe</p>
                        </div>
                        <div class="card-body-bottom">
                          <h5 class="card-body-bo ttom-title">“On-site Chef Required”</h5>
                          <p class="card-body-bottom-text">Over 800 vulnerable child brides we rescue and their children need your help this Christmas please . Please give a gift to show them you care.</p>
                        </div>
                        <div class="card-btnWrap">
                          <a class="btn borderBtn" href="donateWinTravel.html">Details</a>
                          <a class="btn btnbg" href="volunteerOnlineDetail.html">Withdraw</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--  -->
                  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="card largeImg">
                      <div class="card-img-wrap">
                        <div class="card-img-tag-top">
                          <span><img src="assets/images/breifcaseLight.svg" width="14" height="14"> On-site</span>

                          <div class="inQueue ml-auto">In Queue</div>
                        </div>
                        <img src="assets/images/campaigns.jpg" class="card-img-top" alt="..." width="377" height="275">
                        <div class="card-img-tagIcon">
                          <div class="card-img-tagLeft">
                            <div class="card-img-tag">
                              <span class="tagIcon">
                                <img src="assets/images/accommodation.svg" width="18" height="16">
                              </span>
                              <span class="tagText">Accommodation</span>
                            </div>
                            <div class="card-img-tag">
                              <span class="tagIcon">
                                <img src="assets/images/meals.svg" width="16" height="16">
                              </span>
                              <span class="tagText">Meals</span>
                            </div>
                          </div>
                          <div class="card-img-views">
                            <span>Views</span>
                            <h4>3,288</h4>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="card-body-top">
                          <h4 class="card-title">Name of NGO</h4>
                          <p class="card-text"><img src="assets/images/mapCard.svg" width="13" height="13"> Vukovar, Croatia, Europe</p>
                        </div>
                        <div class="card-body-bottom">
                          <h5 class="card-body-bo ttom-title">“On-site Chef Required”</h5>
                          <p class="card-body-bottom-text">Over 800 vulnerable child brides we rescue and their children need your help this Christmas please . Please give a gift to show them you care.</p>
                        </div>
                        <div class="card-btnWrap">
                          <a class="btn borderBtn" href="donateWinTravel.html">Details</a>
                          <a class="btn btnbg" href="volunteerOnlineDetail.html">Withdraw</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--  -->
                  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="card largeImg">
                      <div class="card-img-wrap">
                        <div class="card-img-tag-top">
                          <span><img src="assets/images/breifcaseLight.svg" width="14" height="14"> On-site</span>

                          <span class="earnTag"><img src="assets/images/coin.svg" width="14" height="14"> Earn 50 IL2H coins</span>
                        </div>
                        <img src="assets/images/campaigns.jpg" class="card-img-top" alt="..." width="377" height="275">
                        <div class="card-img-tagIcon">
                          <div class="card-img-tagLeft">
                            <div class="card-img-tag">
                              <span class="tagIcon">
                                <img src="assets/images/accommodation.svg" width="18" height="16">
                              </span>
                              <span class="tagText">Accommodation</span>
                            </div>
                            <div class="card-img-tag">
                              <span class="tagIcon">
                                <img src="assets/images/meals.svg" width="16" height="16">
                              </span>
                              <span class="tagText">Meals</span>
                            </div>
                          </div>
                          <div class="card-img-views">
                            <span>Views</span>
                            <h4>3,288</h4>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="card-body-top">
                          <h4 class="card-title">Name of NGO</h4>
                          <p class="card-text"><img src="assets/images/mapCard.svg" width="13" height="13"> Vukovar, Croatia, Europe</p>
                        </div>
                        <div class="card-body-bottom">
                          <h5 class="card-body-bo ttom-title">“On-site Chef Required”</h5>
                          <p class="card-body-bottom-text">Over 800 vulnerable child brides we rescue and their children need your help this Christmas please . Please give a gift to show them you care.</p>
                        </div>
                        <div class="card-btnWrap">
                          <a class="btn borderBtn" href="donateWinTravel.html">Details</a>
                          <a class="btn btnbg" href="volunteerOnlineDetail.html">Withdraw</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--  -->
                  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="card largeImg">
                      <div class="card-img-wrap">
                        <div class="card-img-tag-top">
                          <span><img src="assets/images/breifcaseLight.svg" width="14" height="14"> On-site</span>

                          <span class="earnTag"><img src="assets/images/coin.svg" width="14" height="14"> Earn 50 IL2H coins</span>
                        </div>
                        <img src="assets/images/campaigns.jpg" class="card-img-top" alt="..." width="377" height="275">
                        <div class="card-img-tagIcon">
                          <div class="card-img-tagLeft">
                            <div class="card-img-tag">
                              <span class="tagIcon">
                                <img src="assets/images/accommodation.svg" width="18" height="16">
                              </span>
                              <span class="tagText">Accommodation</span>
                            </div>
                            <div class="card-img-tag">
                              <span class="tagIcon">
                                <img src="assets/images/meals.svg" width="16" height="16">
                              </span>
                              <span class="tagText">Meals</span>
                            </div>
                          </div>
                          <div class="card-img-views">
                            <span>Views</span>
                            <h4>3,288</h4>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="card-body-top">
                          <h4 class="card-title">Name of NGO</h4>
                          <p class="card-text"><img src="assets/images/mapCard.svg" width="13" height="13"> Vukovar, Croatia, Europe</p>
                        </div>
                        <div class="card-body-bottom">
                          <h5 class="card-body-bo ttom-title">“On-site Chef Required”</h5>
                          <p class="card-body-bottom-text">Over 800 vulnerable child brides we rescue and their children need your help this Christmas please . Please give a gift to show them you care.</p>
                        </div>
                        <div class="card-btnWrap">
                          <a class="btn btnbg" href="volunteerOnlineDetail.html">Read More</a>
                          <a class="btn borderBtn" href="#"> Share</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--  -->
                  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="card largeImg">
                      <div class="card-img-wrap">
                        <div class="card-img-tag-top">
                          <span><img src="assets/images/breifcaseLight.svg" width="14" height="14"> On-site</span>

                          <span class="earnTag"><img src="assets/images/coin.svg" width="14" height="14"> Earn 50 IL2H coins</span>
                        </div>
                        <img src="assets/images/campaigns.jpg" class="card-img-top" alt="..." width="377" height="275">
                        <div class="card-img-tagIcon">
                          <div class="card-img-tagLeft">
                            <div class="card-img-tag">
                              <span class="tagIcon">
                                <img src="assets/images/accommodation.svg" width="18" height="16">
                              </span>
                              <span class="tagText">Accommodation</span>
                            </div>
                            <div class="card-img-tag">
                              <span class="tagIcon">
                                <img src="assets/images/meals.svg" width="16" height="16">
                              </span>
                              <span class="tagText">Meals</span>
                            </div>
                          </div>
                          <div class="card-img-views">
                            <span>Views</span>
                            <h4>3,288</h4>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="card-body-top">
                          <h4 class="card-title">Name of NGO</h4>
                          <p class="card-text"><img src="assets/images/mapCard.svg" width="13" height="13"> Vukovar, Croatia, Europe</p>
                        </div>
                        <div class="card-body-bottom">
                          <h5 class="card-body-bo ttom-title">“On-site Chef Required”</h5>
                          <p class="card-body-bottom-text">Over 800 vulnerable child brides we rescue and their children need your help this Christmas please . Please give a gift to show them you care.</p>
                        </div>
                        <div class="card-btnWrap">
                          <a class="btn borderBtn" href="donateWinTravel.html">Details</a>
                          <a class="btn btnbg" href="volunteerOnlineDetail.html">Withdraw</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--  -->
                  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="card largeImg">
                      <div class="card-img-wrap">
                        <div class="card-img-tag-top">
                          <span><img src="assets/images/breifcaseLight.svg" width="14" height="14"> On-site</span>

                          <div class="cardActivated ml-auto">Accepted</div>
                        </div>
                        <img src="assets/images/campaigns1.jpg" class="card-img-top" alt="..." width="377" height="275">
                        <div class="card-img-tagIcon">
                          <div class="card-img-tagLeft">
                            <div class="card-img-tag">
                              <span class="tagIcon">
                                <img src="assets/images/watch.svg" width="18" height="16">
                              </span>
                              <span class="tagText">Estimated time: 5 - 10 hours</span>
                            </div>
                            <div class="card-img-tag">
                              <span class="tagIcon">
                                <img src="assets/images/meals.svg" width="16" height="16">
                              </span>
                              <span class="tagText">Meals</span>
                            </div>
                          </div>
                          <div class="card-img-views">
                            <span>Views</span>
                            <h4>3,288</h4>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="card-body-top">
                          <h4 class="card-title">Name of NGO</h4>
                          <p class="card-text"><img src="assets/images/mapCard.svg" width="13" height="13"> Vukovar, Croatia, Europe</p>
                        </div>
                        <div class="card-body-bottom">
                          <h5 class="card-body-bo ttom-title">“On-site Chef Required”</h5>
                          <p class="card-body-bottom-text">Over 800 vulnerable child brides we rescue and their children need your help this Christmas please . Please give a gift to show them you care.</p>
                        </div>
                        <div class="card-btnWrap">
                          <a class="btn borderBtn" href="donateWinTravel.html">Details</a>
                          <a class="btn btnbg" href="volunteerOnlineDetail.html">Withdraw</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--  -->
                  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="card largeImg">
                      <div class="card-img-wrap">
                        <div class="card-img-tag-top">
                          <span><img src="assets/images/breifcaseLight.svg" width="14" height="14"> On-site</span>

                          <span class="earnTag"><img src="assets/images/coin.svg" width="14" height="14"> Earn 50 IL2H coins</span>
                        </div>
                        <img src="assets/images/campaigns2.jpg" class="card-img-top" alt="..." width="377" height="275">
                        <div class="card-img-tagIcon">
                          <div class="card-img-tagLeft">
                            <div class="card-img-tag">
                              <span class="tagIcon">
                                <img src="assets/images/accommodation.svg" width="18" height="16">
                              </span>
                              <span class="tagText">Accommodation</span>
                            </div>
                            <div class="card-img-tag">
                              <span class="tagIcon">
                                <img src="assets/images/meals.svg" width="16" height="16">
                              </span>
                              <span class="tagText">Meals</span>
                            </div>
                          </div>
                          <div class="card-img-views">
                            <span>Views</span>
                            <h4>3,288</h4>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="card-body-top">
                          <h4 class="card-title">Name of NGO</h4>
                          <p class="card-text"><img src="assets/images/mapCard.svg" width="13" height="13"> Vukovar, Croatia, Europe</p>
                        </div>
                        <div class="card-body-bottom">
                          <h5 class="card-body-bo ttom-title">“On-site Chef Required”</h5>
                          <p class="card-body-bottom-text">Over 800 vulnerable child brides we rescue and their children need your help this Christmas please . Please give a gift to show them you care.</p>
                        </div>
                        <div class="card-btnWrap">
                          <a class="btn borderBtn" href="donateWinTravel.html">Details</a>
                          <a class="btn btnbg" href="volunteerOnlineDetail.html">Withdraw</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--  -->
                </div>


                <!--  -->

              </div>
              <!--  -->
              <!-- Donate and Win Tab -->
              <div class="tab-pane fade" id="Donate-Win" role="tabpanel" aria-labelledby="Donate-Win-tab">

                <!-- Filter Div -->
                <div class="filterWrapper row g-0">
                  <div class="col-md-5">
                    <ul class="nav nav-tabs">
                      <li class="nav-item" role="presentation">
                        <a class="nav-link active">All</a>
                      </li>
                      <li class="nav-item" role="presentation">
                        <a class="nav-link">Donated</a>
                      </li>
                    </ul>
                  </div>
                </div>

                <!-- Filter Div Ends-->

                <div class="noFilterResults">
                  <div class="row justify-content-center">
                    <div class="col-md-6 text-center p-5">
                      <img src="assets/images/signUp.png" width="203" height="237">


                      <p class="mt-5 mb-4">Lorem Ipsum is simply dummy text of the printing
                        and typesetting industry.</p>
                      <div class="">
                        <a class="commonBtn" href="donateWin.html">Donate & Win</a>
                      </div>
                    </div>
                  </div>

                </div>

                <!-- Donate Card -->
                <div class="row  mt-5">
                  <div class="col-md-6">

                    <div class="card largeImg">
                      <div class="card-img-wrap">

                        <img src="assets/images/car1.png" class="card-img-top" alt="..." width="377" height="275">

                      </div>
                      <div class="card-body">
                        <div class="card-body-top">
                          <h4 class="card-title">Win a Land Rover Edition by supporting worl changing causes.</h4>

                        </div>
                        <div class="card-btnWrap mt-3">
                          <a class="btn borderBtn" href="Dashboard-donateWinTravel.html">Details</a>
                          <a class="btn btnbg" href="donateWinTravel.html">Donate & Win</a>
                        </div>



                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">

                    <div class="card largeImg">
                      <div class="card-img-wrap">

                        <img src="assets/images/car1.png" class="card-img-top" alt="..." width="377" height="275">

                      </div>
                      <div class="card-body">
                        <div class="card-body-top">
                          <h4 class="card-title">Win a Land Rover Edition by supporting worl changing causes.</h4>

                        </div>
                        <div class="card-btnWrap mt-3">
                          <a class="btn borderBtn" href="Dashboard-donateWinTravel.html">Details</a>
                          <a class="btn btnbg" href="donateWinTravel.html">Donate & Win</a>
                        </div>


                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">

                    <div class="card largeImg">
                      <div class="card-img-wrap">

                        <img src="assets/images/car1.png" class="card-img-top" alt="..." width="377" height="275">

                      </div>
                      <div class="card-body">
                        <div class="card-body-top">
                          <h4 class="card-title">Win a Land Rover Edition by supporting worl changing causes.</h4>

                        </div>
                        <div class="card-btnWrap mt-3">
                          <a class="btn borderBtn" href="Dashboard-donateWinTravel.html">Details</a>
                          <a class="btn btnbg" href="donateWinTravel.html">Donate & Win</a>
                        </div>


                      </div>
                    </div>
                  </div>


                  <div class="col-md-6">

                    <div class="card largeImg">
                      <div class="card-img-wrap">

                        <img src="assets/images/car1.png" class="card-img-top" alt="..." width="377" height="275">

                      </div>
                      <div class="card-body">
                        <div class="card-body-top">
                          <h4 class="card-title">Win a Land Rover Edition by supporting worl changing causes.</h4>

                        </div>
                        <div class="card-btnWrap mt-3">
                          <a class="btn borderBtn" href="Dashboard-donateWinTravel.html">Details</a>
                          <a class="btn btnbg" href="donateWinTravel.html">Donate & Win</a>
                        </div>


                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">

                    <div class="card largeImg">
                      <div class="card-img-wrap">

                        <img src="assets/images/car1.png" class="card-img-top" alt="..." width="377" height="275">

                      </div>
                      <div class="card-body">
                        <div class="card-body-top">
                          <h4 class="card-title">Win a Land Rover Edition by supporting worl changing causes.</h4>

                        </div>
                        <div class="card-btnWrap mt-3">
                          <a class="btn borderBtn" href="Dashboard-donateWinTravel.html">Details</a>
                          <a class="btn btnbg" href="donateWinTravel.html">Donate & Win</a>
                        </div>


                      </div>
                    </div>
                  </div>
                </div>
                <!--  -->



              </div>
              <!--  -->

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

</footer>
<?php $this->load->view('include/signup-footer') ?>