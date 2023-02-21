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
      <!-- <link rel="stylesheet" type="text/css" href="assets/css/main.css"> -->
   </head>
   <body>
      <!-- ======= Header ======= -->
      <header id="header" class="  d-flex align-items-center">
         <div class="container-xl  d-flex align-items-center justify-content-between">
            <div class="logo">
               <a href="index.html"><img src="<?php echo base_url('assets/images/il2hLogo.svg'); ?>" alt="IL2H" class="img-fluid" width="96" height="40"></a>
            </div>
            <nav id="navbar" class="navbar">
              <ul class="headerMenu">
                 <div class="MainMenu">
                    <!-- <li>
                       <a class="nav-link" href="Dashboard.html" >
                          Dashboard
                       </a>
                    </li>
                    <li>
                       <a class="nav-link" href="rewardHistory.html" >
                       Are you a Volunteer?
                       </a>
                    </li>
                    <li>
                       <a class="nav-link" href="donateWin.html" >
                       Donate & Win
                       </a>
                    </li>
                    <li>
                       <a class="nav-link" href="volunteerOnline.html" >
                       Popular Campaigns
                       </a>
                    </li> -->
                 </div>
                 <!-- loggin Menu -->
                 <div class="loginWrap">
                    <li>
                       <a class="nav-link" href="<?=site_url('dashboard-ngo');?>" >
                          Dashboard
                       </a>
                    </li>
                    <li>
                       <a class="nav-link" href="rewardHistory.html" >
                          IL2H Coins
                       </a>
                    </li>
                    <li>
                       <a class="nav-link" href="donateWin.html" >
                       Donate & Win
                       </a>
                    </li>
                    <li>
                       <a class="nav-link" href="volunteerOnline.html" >
                       Popular Campaigns
                       </a>
                    </li>
                    <li class="navDrop notficDrop">
                       <a class="nav-link" href="Notifications.html" >
                          Notifications
                          <span class="badge">14</span>
                       </a>
                       <ul class="navDropWrap">
                          <div class="notfHeader">
                             <div class="notfTitle">Notifications</div>
                             <a class="#">See All</a>
                          </div>
                          <div class="notfTab">
                             <a class="active" href="#">Read</a>
                             <a class="" href="#">Unread</a>
                          </div>
                          <!-- Notification List -->
                          <li>
                             <a class="notofication-link" href="#" >
                                <div class="notfImg">
                                   <img src="assets/images/testimonials.png" width="40" height="40">
                                </div>
                                <div class="notfBody">
                                   <div class="notfTop">
                                      <div class="notfTitle">Full Name</div>
                                      <div class="notfDate">1 week ago</div>
                                   </div>
                                   <div class="notfContent">Lorem Ipsum is simply dumm text of the printingi
                                      and types.</div>
                                </div>
                                
                             </a>  
                          </li>
                          <!-- Notification List -->
                          <li>
                             <a class="notofication-link" href="#" >
                                <div class="notfImg">
                                   <img src="assets/images/testimonials.png" width="40" height="40">
                                </div>
                                <div class="notfBody">
                                   <div class="notfTop">
                                      <div class="notfTitle">Full Name</div>
                                      <div class="notfDate">1 week ago</div>
                                   </div>
                                   <div class="notfContent">Lorem Ipsum is simply dumm text of the printingi
                                      and types.</div>
                                </div>
                                
                             </a>  
                          </li>
                          <!-- Notification List -->
                          <li>
                             <a class="notofication-link" href="#" >
                                <div class="notfImg">
                                   <img src="assets/images/testimonials.png" width="40" height="40">
                                </div>
                                <div class="notfBody">
                                   <div class="notfTop">
                                      <div class="notfTitle">Full Name</div>
                                      <div class="notfDate">1 week ago</div>
                                   </div>
                                   <div class="notfContent">Lorem Ipsum is simply dumm text of the printingi
                                      and types.</div>
                                </div>
                                
                             </a>  
                          </li>
                          <!-- Notification List -->
                          <li>
                             <a class="notofication-link" href="#" >
                                <div class="notfImg">
                                   <img src="assets/images/testimonials.png" width="40" height="40">
                                </div>
                                <div class="notfBody">
                                   <div class="notfTop">
                                      <div class="notfTitle">Full Name</div>
                                      <div class="notfDate">1 week ago</div>
                                   </div>
                                   <div class="notfContent">Lorem Ipsum is simply dumm text of the printingi
                                      and types.</div>
                                </div>
                                
                             </a>  
                          </li>
                          <!-- Notification List Ends -->
                          
                          
                       </ul>
                    </li>

                    <!-- <li>
                       <a class="nav-link" href="tel:+917838766916" >
                          <span class="navIcon">
                             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 20 20" version="1.1">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                   <g id="LANDING-PAGE-Copy" transform="translate(-1114.000000, -36.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                      <g id="Shape-8" transform="translate(1114.000000, 36.000000)">
                                         <path d="M14.7779431,19.9967967 C8.00030309,20.2256958 -4.20961834,8.13149972 1.45939284,1.57416476 L2.4179817,0.741804393 C3.42769169,-0.232877635 5.03429533,-0.216560205 6.02394293,0.778428249 C6.0496465,0.804568088 6.07359383,0.832373897 6.0956287,0.861664286 L7.59602866,2.80855518 C8.54294965,3.80911153 8.53928594,5.37493061 7.58769311,6.37105755 L6.6224358,7.58297424 C7.70177662,10.2005858 9.7807786,12.2810997 12.3998092,13.3645493 L13.6201345,12.3948495 C14.6288173,11.4697793 16.1781443,11.4676114 17.1894193,12.3898553 L19.1399392,13.888104 C19.1690783,13.9100491 19.1969108,13.9336728 19.2232948,13.9588546 C20.2244972,14.9678282 20.2244972,16.5939548 19.2232948,17.6029283 L18.4639257,18.4769067 C17.4908353,19.4592215 16.1616011,20.0073223 14.7779431,19.9967967 Z M4.19928987,1.68486841 C3.95736444,1.68468093 3.725279,1.78049599 3.55411789,1.951224 L2.59469547,2.78358437 C-2.11155906,8.43364653 12.2897799,22.0136059 17.2436004,17.3399024 L18.003803,16.4650917 C18.1863247,16.3028774 18.2964583,16.0746259 18.3097606,15.8309956 C18.3230629,15.5873653 18.2384336,15.3485101 18.0746553,15.1674419 L16.1349715,13.6800139 C16.1052542,13.658187 16.0773759,13.6339677 16.051616,13.6075986 C15.6903705,13.2638733 15.1225175,13.2638733 14.761272,13.6075986 C14.739136,13.6299764 14.7157597,13.6510961 14.6912534,13.670858 L13.0591516,14.9693401 C12.8286408,15.1525592 12.5183938,15.2006592 12.2431008,15.0958589 C8.84313937,13.8310814 6.16037108,11.1548929 4.89030741,7.76109936 C4.77716138,7.48208343 4.82369668,7.16380546 5.01200651,6.92873899 L6.30735181,5.30064211 C6.32661817,5.27598015 6.34750298,5.25262269 6.36986847,5.23072384 C6.72427314,4.87380204 6.72427314,4.29831944 6.36986847,3.94139764 C6.34388901,3.91551232 6.31992426,3.88768629 6.2981827,3.8581616 L4.81195319,1.92375611 C4.64401839,1.77224048 4.42561892,1.68856654 4.19928987,1.68903049 L4.19928987,1.68486841 Z M18.7806768,10.4879119 C22.9401189,4.37422503 15.6131658,-2.93473134 9.49736883,1.21791452 C9.24632621,1.3852852 9.10551433,1.67510455 9.12924248,1.97559304 C9.15297063,2.27608152 9.33753079,2.54028141 9.61174051,2.66629426 C9.88595023,2.7923071 10.2069584,2.7604407 10.4509564,2.58298552 C15.0138393,-0.545857093 20.5453139,4.98351282 17.4136457,9.53652402 C17.2320414,9.78003166 17.1976215,10.1029628 17.32383,10.3791849 C17.4500385,10.655407 17.7168518,10.8410963 18.0200563,10.8637249 C18.3232608,10.8863536 18.6147518,10.7423316 18.7806768,10.4879119 Z M15.5648195,8.93555983 C15.8902246,8.61052323 15.8902246,8.08363887 15.5648195,7.75860227 L14.1427738,6.33776313 L14.1427738,4.18194978 C14.1427738,3.72224985 13.7695783,3.34958942 13.3092183,3.34958942 C12.8488583,3.34958942 12.4756627,3.72224985 12.4756627,4.18194978 L12.4756627,6.67903088 C12.47571,6.89976853 12.5635617,7.11144814 12.7198945,7.26750966 L14.3870056,8.93223039 C14.7125089,9.25716884 15.2401498,9.25716884 15.5656531,8.93223039 L15.5648195,8.93555983 Z" id="Shape"/>
                                      </g>
                                   </g>
                                </g>
                             </svg>
                          </span>
                          Support
                       </a>
                    </li> -->
                    <li class="navDrop">
                       <a class="nav-link navloginBtn" href="#" >
                          <span class="navIcon">
                             <img src="assets/images/testimonials.png" width="22" height="22">
                          </span>

                          <?php echo $name;?>
                       </a>
                       <ul class="navDropWrap">
                          <li>
                             <a class="nav-link" href="#" >
                                Profile
                             </a>  
                          </li>
                          <li>
                             <a class="nav-link" href="<?=site_url('logout')?>" >
                                Logout
                             </a>  
                          </li>
                       </ul>
                    </li>
                 </div>
              </ul>
              <i class="bi bi-list mobile-nav-toggle">
                 <span class="cross-icon"></span>
                 <svg id="hamburger" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"></path>
                 </svg>
              </i>
           </nav>
            <!-- .navbar -->
         </div>
      </header>
      <!-- End Header -->