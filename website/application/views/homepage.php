<?php $this->load->view('include/header') ?>
<main class="home">
         <section class="bannerSec">
            <div class="container-xl ">
               <div class="typeOfHelpWrap">
                  <form class="row  align-items-center">
                     <div class="input-group">
                        <div class="input-group-text">
                           <img src="assets/images/TYPE.png" width="40" height="40">
                        </div>
                        <?php echo $this->session->flashdata('message');?>

                        <div class="dropdown">
                           <input type="checkbox" class="dropdown__switch" id="filter-switch" hidden />
                           <label for="filter-switch" class="dropdown__options-filter">
                              <ul class="dropdown__filter" role="listbox" tabindex="-1">
                                 <li class="dropdown__filter-selected" aria-selected="true">
                                    Choose type of help
                                 </li>
                                 <li>
                                    <ul class="dropdown__select">
                                       <li class="dropdown__select-option" role="option">
                                          Option 1
                                       </li>
                                       <li class="dropdown__select-option" role="option">
                                          Option 2
                                       </li>
                                       <li class="dropdown__select-option" role="option">
                                          Option 3
                                       </li>
                                       <li class="dropdown__select-option" role="option">
                                          Option 4
                                       </li>
                                       <li class="dropdown__select-option" role="option">
                                          Option 5
                                       </li>
                                    </ul>
                                 </li>
                              </ul>
                           </label>
                        </div>
                     </div>
                     <div class="input-group">
                        <div class="input-group-text">
                           <svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                              <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity="0.24">
                                 <g id="LANDING-PAGE-Copy" transform="translate(-624.000000, -120.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g id="Shape-9" transform="translate(624.000000, 120.000000)">
                                       <path d="M15.8130124,14.8711202 L11.8369484,10.8950562 C14.0873202,8.14278808 13.7842714,4.1093821 11.1479047,1.72427757 C8.51153804,-0.660826962 4.46802707,-0.559726497 1.95415029,1.95415029 C-0.559726497,4.46802707 -0.660826962,8.51153804 1.72427757,11.1479047 C4.1093821,13.7842714 8.14278808,14.0873202 10.8950562,11.8369484 L14.8711202,15.8130124 C15.1324912,16.065453 15.5479535,16.0618427 15.8048981,15.8048981 C16.0618427,15.5479535 16.065453,15.1324912 15.8130124,14.8711202 Z M6.68252001,12.0114716 C3.73942133,12.0114716 1.35356844,9.6256187 1.35356844,6.68252001 C1.35356844,3.73942133 3.73942133,1.35356844 6.68252001,1.35356844 C9.6256187,1.35356844 12.0114716,3.73942133 12.0114716,6.68252001 C12.0081677,9.6242491 9.6242491,12.0081677 6.68252001,12.0114716 L6.68252001,12.0114716 Z" id="Shape"></path>
                                    </g>
                                 </g>
                              </g>
                           </svg>
                        </div>
                        <input type="text" class="form-control"  placeholder="Location or Non-profit">
                     </div>
                     <button type="submit" class="btn">Search</button>
                  </form>
               </div>
            </div>
            <!-- Swiper -->
            <div class="swiper bannerSlider">
               <div class="swiper-wrapper">
                  <div class="swiper-slide">
                     <img class="img-fluid" src="<?php echo base_url('assets/images/rangeRover.png');?>" width="1136" height="562">
                     <div class="sliderContent">
                        <h2 class="sliderContentHeading"><strong>वसुधैव कुटुम्बकम्</strong></h2>
                        <p>Vasudhaiva Kutumbakam is a Sanskrit phrase found in Hindu texts such as the Maha Upanishad, which means "The World Is One Family".</p>
                        <a href="#">Enter Now</a>
                     </div>
                  </div>
                  <div class="swiper-slide">
                     <img class="img-fluid" src="<?php echo base_url('assets/images/rangeRover.png');?>" width="1136" height="562">
                     <div class="sliderContent">
                        <h2 class="sliderContentHeading"><strong>वसुधैव कुटुम्बकम्</strong></h2>
                        <p>Vasudhaiva Kutumbakam is a Sanskrit phrase found in Hindu texts such as the Maha Upanishad, which means "The World Is One Family".</p>
                        <a href="#">Enter Now</a>
                     </div>
                  </div>

               </div>
               <!-- <div class="swiper-pagination"></div> -->
            </div>
         </section>
         <section class="sideByside">
            <div class="container-xl ">
               <div class="row align-items-center">
                  <div class="col-md-6">
                     <div class="secContent">
                        <h3 class="commonHeading">Donate & Win</h3>
                        <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been theabcde industry's standard think dummy text ever since the 1500s, when an unknown printer took a gallery lorem Ipsum is simply dummy text of the printing.</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="secImg rightStick">
                        <img class="img-fluid" src="<?php echo base_url('assets/images/DONATE&WIN.png');?>" width="591" height="447">
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="sideByside">
            <div class="container-xl ">
               <div class="row align-items-center">
                  <div class="col-md-6 ">
                     <div class="secImg leftStick">
                        <img class="img-fluid" src="<?php echo base_url('assets/images/VOLUNTEER.svg');?>" width="591" height="430">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="secContent">
                        <h3 class="commonHeading">Volunteer Online</h3>
                        <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been theabcde industry's standard think dummy text ever since the 1500s, when an unknown printer took a gallery lorem Ipsum is simply dummy text of the printing.</p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="sideByside">
            <div class="container-xl ">
               <div class="row align-items-center">
                  <div class="col-md-6">
                     <div class="secContent">
                        <h3 class="commonHeading">Volunteer On-site</h3>
                        <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been theabcde industry's standard think dummy text ever since the 1500s, when an unknown printer took a gallery lorem Ipsum is simply dummy text of the printing.</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="secImg">
                        <img class="img-fluid" src="<?php echo base_url('assets/images/VOLUNTEERONSITE.png'); ?>" width="509" height="696">
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="cardGrid">
            <div class="container-xl ">
               <div class="row">
                  <div class="col-md-12 mb-4">
                     <h2 class="mainHeading ">
                        <strong>Benefits of ILove2Pay™ the ideal payment solution for your nonprofit…</strong>
                     </h2>
                     <p>Nonprofits on GivingWay enjoy GWPay™ - a robust payments gateway specially designed to provide secure, fast and reliable payment solutions to you and your donors.</p>
                  </div>
               </div>
               <div class="row cardWrap">
                  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                     <div class="card">
                        <div class="card-img">
                           <img src="<?php echo  base_url('assets/images/BENEFITS.png'); ?>">
                        </div>
                        <div class="card-body">
                           <h5 class="card-title">Start Immediately</h5>
                           <p class="card-text">Lorem Ipsum is simply dummy text of the printingtr and typesetting industry. Lorem Ipsum has beenter theabcde industry’s.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                     <div class="card">
                        <div class="card-img">
                           <img src="<?php echo  base_url('assets/images/BENEFITS.png'); ?>">
                        </div>
                        <div class="card-body">
                           <h5 class="card-title">Start Immediately</h5>
                           <p class="card-text">Lorem Ipsum is simply dummy text of the printingtr and typesetting industry. Lorem Ipsum has beenter theabcde industry’s.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                     <div class="card">
                        <div class="card-img">
                           <img src="<?php echo  base_url('assets/images/BENEFITS.png'); ?>">
                        </div>
                        <div class="card-body">
                           <h5 class="card-title">Start Immediately</h5>
                           <p class="card-text">Lorem Ipsum is simply dummy text of the printingtr and typesetting industry. Lorem Ipsum has beenter theabcde industry’s.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                     <div class="card">
                        <div class="card-img">
                           <img src="<?php echo  base_url('assets/images/BENEFITS.png'); ?>">
                        </div>
                        <div class="card-body">
                           <h5 class="card-title">Start Immediately</h5>
                           <p class="card-text">Lorem Ipsum is simply dummy text of the printingtr and typesetting industry. Lorem Ipsum has beenter theabcde industry’s.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                     <div class="card">
                        <div class="card-img">
                           <img src="<?php echo  base_url('assets/images/BENEFITS.png'); ?>">
                        </div>
                        <div class="card-body">
                           <h5 class="card-title">Start Immediately</h5>
                           <p class="card-text">Lorem Ipsum is simply dummy text of the printingtr and typesetting industry. Lorem Ipsum has beenter theabcde industry’s.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                     <div class="card">
                        <div class="card-img">
                           <img src="<?php echo  base_url('assets/images/BENEFITS.png'); ?>">
                        </div>
                        <div class="card-body">
                           <h5 class="card-title">Start Immediately</h5>
                           <p class="card-text">Lorem Ipsum is simply dummy text of the printingtr and typesetting industry. Lorem Ipsum has beenter theabcde industry’s.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="campaigns">
            <div class="container-xl ">
               <div class="row mb-4">
                  <div class="col-md-10">
                     <h2 class="mainHeading ">
                        <strong>Popular Campaigns</strong>
                     </h2>
                  </div>
                  <div class="col-md-2">
                     <a href="#" class="btn borderBtn">View All</a>
                  </div>
               </div>
               <div class="row cardWrap">
                  <!--  -->
                  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4"  ">
                     <div class="card largeImg">
                        <div class="card-img-wrap">
                           <div class="card-img-tag-top">
                              <span>On-site</span>
                              <span>Online</span>
                           </div>
                           <img src="<?php echo base_url('assets/images/campaigns.jpg');?>" class="card-img-top" alt="..." width="377" height="275">
                           <div class="card-img-tagIcon">
                              <div class="card-img-tagLeft">
                                 <div class="card-img-tag">
                                    <span class="tagIcon">
                                    <img src="<?php echo base_url('assets/images/accommodation.svg'); ?>" width="18" height="16">
                                    </span>
                                    <span class="tagText">Accommodation</span>
                                 </div>
                                 <div class="card-img-tag">
                                    <span class="tagIcon">
                                    <img src="<?php echo  base_url('assets/images/meals.svg');?>"  width="16" height="16">
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
                              <p class="card-text">Vukovar, Croatia, Europe</p>
                           </div>
                           <div class="card-body-bottom">
                              <h3 class="card-body-bottom-title">“On-site Chef Required”</h3>
                              <p class="card-body-bottom-text">Over 800 vulnerable child brides we rescue and their children need your help this Christmas please . Please give a gift to show them you care.</p>
                           </div>
                           <div class="card-btnWrap">
                              <a class="btn btnbg" href="#">Read More</a>
                              <a class="btn" href="#">Share</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--  -->
                  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4"  ">
                     <div class="card largeImg">
                        <div class="card-img-wrap">
                           <div class="card-img-tag-top">
                              <span>On-site</span>
                              <span>Online</span>
                           </div>
                           <img src="<?php echo  base_url('assets/images/campaigns1.jpg');?>" class="card-img-top" alt="..." width="377" height="275">
                           <div class="card-img-tagIcon">
                              <div class="card-img-tagLeft">
                                 <div class="card-img-tag">
                                    <span class="tagIcon">
                                    <img src="<?php echo base_url('assets/images/watch.svg');?>" width="18" height="16">
                                    </span>
                                    <span class="tagText">Estimated time: 5 - 10 hours</span>
                                 </div>
                                 <div class="card-img-tag">
                                    <span class="tagIcon">
                                    <img src="<?php echo base_url('assets/images/meals.svg'); ?>"  width="16" height="16">
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
                              <p class="card-text">Vukovar, Croatia, Europe</p>
                           </div>
                           <div class="card-body-bottom">
                              <h3 class="card-body-bottom-title">“Website Developer Required”</h3>
                              <p class="card-body-bottom-text">Over 800 vulnerable child brides we rescue and their children need your help this Christmas please . Please give a gift to show them you care.</p>
                           </div>
                           <div class="card-btnWrap">
                              <a class="btn btnbg" href="#">Read More</a>
                              <a class="btn" href="#">Share</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--  -->
                  <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4"  ">
                     <div class="card largeImg">
                        <div class="card-img-wrap">
                           <div class="card-img-tag-top">
                              <span>On-site</span>
                              <span>Online</span>
                           </div>
                           <img src="<?php echo base_url('assets/images/campaigns2.jpg');?>" class="card-img-top" alt="..." width="377" height="275">
                           <div class="card-img-tagIcon">
                              <div class="card-img-tagLeft">
                                 <div class="card-img-tag">
                                    <span class="tagIcon">
                                    <img src="<?php echo base_url('assets/images/accommodation.svg');?>" width="18" height="16">
                                    </span>
                                    <span class="tagText">Accommodation</span>
                                 </div>
                                 <div class="card-img-tag">
                                    <span class="tagIcon">
                                    <img src="<?php echo base_url('assets/images/meals.svg');?>"  width="16" height="16">
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
                              <p class="card-text">Vukovar, Croatia, Europe</p>
                           </div>
                           <div class="card-body-bottom">
                              <h3 class="card-body-bottom-title">“On-site Chef Required”</h3>
                              <p class="card-body-bottom-text">Over 800 vulnerable child brides we rescue and their children need your help this Christmas please . Please give a gift to show them you care.</p>
                           </div>
                           <div class="card-btnWrap">
                              <a class="btn btnbg" href="#">Read More</a>
                              <a class="btn" href="#">Share</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--  -->
               </div>
            </div>
         </section>
         <section class="testimonialSection">
            <div class="container-xl ">
               <div class="row justify-content-center">
                  <div class="col-md-12 col-lg-10">
                     <!-- Swiper -->
                     <div class="swiper testimonialSlider">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <div class="testimonialWrap">
                                 <img src="<?php echo  base_url('assets/images/testimonials.png');?>">
                                 <div class="testimonialBody">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                    <h4 class="testimonialTitle">John Garnica, CEO</h4>
                                    <h5 class="testimonialSubTitle">Rainforest Awarness Rescue</h5>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide">
                              <div class="testimonialWrap">
                                 <img src="<?php echo  base_url('assets/images/testimonials.png');?>">
                                 <div class="testimonialBody">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                    <h4 class="testimonialTitle">John Garnica, CEO</h4>
                                    <h5 class="testimonialSubTitle">Rainforest Awarness Rescue</h5>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="swiper-pagination"></div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>    
<?php $this->load->view('include/footer') ?>