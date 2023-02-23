<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>IL2H - <?php echo $page_title; ?></title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/swiper-bundle.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/main.css">
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
                     <li>
                        <a class="nav-link" href="<?php echo site_url('About_us'); ?>" >
                        About Us
                        </a>
                     </li>
                     <li>
                        <a class="nav-link" href="<?php echo site_url('are-you-a-volunteer'); ?>" >
                        Are you a Volunteer?
                        </a>
                     </li>
                     <li>
                        <a class="nav-link" href="<?php echo site_url('donate-&-win'); ?>" >
                        Donate & Win
                        </a>
                     </li>
                     <li>
                        <a class="nav-link" href="<?php echo site_url('popular-campaigns'); ?>" >
                        Popular Campaigns
                        </a>
                     </li>
                  </div>
                  <div class="loginWrap">
                     
                     <li>
                        <a class="nav-link" href="<?php echo site_url('login'); ?>" >
                           <span class="navIcon">
                              <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                 <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="LANDING-PAGE-Copy" transform="translate(-1260.000000, -34.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                       <g id="Group-6" transform="translate(1260.000000, 34.000000)">
                                          <path d="M15.749728,0 L4.2499266,0 C1.92665171,-0.0206466168 0.0251857,1.84353575 0,4.16676741 L0,6.66672423 C0,7.12695358 0.373089598,7.50004317 0.833318942,7.50004317 C1.29354829,7.50004317 1.66663788,7.12695358 1.66663788,6.66672423 L1.66663788,4.16676741 C1.69128653,2.76377828 2.84688343,1.64545869 4.2499266,1.66681058 L15.749728,1.66681058 C17.1527712,1.64545869 18.3083681,2.76377828 18.3330167,4.16676741 L18.3330167,15.8332326 C18.3083681,17.2362217 17.1527712,18.3545413 15.749728,18.3331894 L4.2499266,18.3331894 C2.84688343,18.3545413 1.69128653,17.2362217 1.66663788,15.8332326 L1.66663788,13.3332758 C1.66663788,12.8730464 1.29354829,12.4999568 0.833318942,12.4999568 C0.373089598,12.4999568 0,12.8730464 0,13.3332758 L0,15.8332326 C0.0251857,18.1564643 1.92665171,20.0206466 4.2499266,20 L15.749728,20 C18.0730029,20.0206466 19.9744689,18.1564643 19.9996546,15.8332326 L19.9996546,4.16676741 C19.9744689,1.84353575 18.0730029,-0.0206466168 15.749728,0 Z" id="Path"></path>
                                          <path d="M2.49995683,10 C2.49995683,10.4602293 2.87304642,10.8333189 3.33327577,10.8333189 L3.33327577,10.8333189 L14.323086,10.8083194 L10.7206482,14.4107572 C10.5040214,14.6199823 10.4171429,14.9298131 10.4934045,15.2211659 C10.569666,15.5125188 10.7971996,15.7400523 11.0885524,15.8163138 C11.3799052,15.8925754 11.6897361,15.8056969 11.8989612,15.5890701 L15.7205618,11.7674695 C16.6964998,10.7912367 16.6964998,9.20876329 15.7205618,8.23253052 L11.9006278,4.41092986 C11.573651,4.09512514 11.0539051,4.09964159 10.7324658,4.42108087 C10.4110266,4.74252015 10.4065101,5.26226608 10.7223148,5.58924284 L14.2739202,9.14168149 L3.33327577,9.16668106 C2.87304642,9.16668106 2.49995683,9.53977066 2.49995683,10 Z" id="Path"></path>
                                       </g>
                                    </g>
                                 </g>
                              </svg>
                           </span>
                           LOGIN
                        </a>
                     </li>
                     <li class="navDrop">
                        <a class="nav-link navloginBtn" href="#" >
                           Get Started
                        </a>
                        <ul class="navDropWrap">
                           <li>
                              <a class="nav-link" href="<?php echo site_url('sign-up/2'); ?>" >
                                 As Volunteer
                              </a>  
                           </li>
                           <li>
                              <a class="nav-link" href="<?php echo site_url('sign-up/3'); ?>" >
                                 As NGO
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