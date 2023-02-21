<footer>
         <div class="container-xl ">
            <div class="row">
               <div class="col-md-12 text-center">
                  <div class="footerHeading">Follow Us On:</div>
                  <ul class="socialWrap">
                     <li>
                        <a href="#">
                        <img src="<?php echo base_url('assets/images/socialIcons/facebook.svg'); ?>">
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <img src="<?php echo base_url('assets/images/socialIcons/twitter.svg'); ?>">
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <img src="<?php echo base_url('assets/images/socialIcons/instagram.svg'); ?>">
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <img src="<?php echo base_url('assets/images/socialIcons/linkdin.svg'); ?>">
                        </a>
                     </li>
                  </ul>
                  <p class="gotQues">Got Questions? Contact <a href="mailto:weloveyou@Ilove2help.com">weloveyou@Ilove2help.com</a></p>
                  <p class="footerShield"><span><img src="<?php echo base_url('assets/images/footerShield.png'); ?>"></span> Donating through IL2HWay is safe & secure</p>
                  <ul class="footerLinks">
                     <li>
                        <a href="<?php echo site_url('volunteer-online'); ?>">VOLUNTEER ONLINE</a>
                     </li>
                     <li>
                        <a href="<?php echo site_url('volunteer-onsite'); ?>">VOLUNTEER ONSITE</a>
                     </li>
                     <li>
                        <a href="<?php echo site_url('our-team'); ?>">OUR TEAM</a>
                     </li>
                     <li>
                        <a href="<?php echo site_url('about-us'); ?>">ABOUT US</a>
                     </li>
                     <li>
                        <a href="<?php echo site_url('our-resources'); ?>">OUR RESOURCES</a>
                     </li>
                     <li>
                        <a href="<?php echo site_url('help-support'); ?>">HELP & SUPPORT</a>
                     </li>
                  </ul>
                  <hr>
                  <div class="footerBottom">
                     <div class="copyright">Copyright © 2022 I Love 2 Help, LLC All rights reserved</div>
                     <ul class="footerLinks">
                        <li>
                           <a href="<?php echo site_url('state-disclosure'); ?>">State Disclosures</a>
                        </li>
                        <li>
                           <a href="<?php echo site_url('do-not-sell-my-info'); ?>">Do Not Sell My Info</a>
                        </li>
                        <li>
                           <a href="<?php echo site_url('terms-&-condtions'); ?>">Terms & Conditions</a>
                        </li>
                        <li>
                           <a href="<?php echo site_url('privacy-policy'); ?>">Privacy Policy</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <script type="text/javascript" src="<?=base_url('assets/js/jQuery.js')?>"></script>
      <script type="text/javascript" src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
      <script type="text/javascript" src="<?=base_url('assets/js/main.js')?>"></script>
      <script type="text/javascript" src="<?=base_url('assets/js/swiper-bundle.min.js')?>"></script>
      <!-- Initialize Swiper -->
      <script>
         var swiper = new Swiper(".bannerSlider", {
           slidesPerView: 1.2,
           centeredSlides: true,
           spaceBetween: 40,
         breakpoint: {

            768: {
            slidesPerView: 1.3,
            spaceBetween: 40,
            }
            
          }
      
         });
         
         var swiper = new Swiper(".testimonialSlider", {
           slidesPerView: 1,
           centeredSlides: true,
           spaceBetween: 0,
           pagination: {
             el: ".testimonialSlider .swiper-pagination",
             clickable: true,
          },

         });
      </script>
   </body>
</html>