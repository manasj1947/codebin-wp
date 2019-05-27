     <!-- footer starts -->
     <!-- FOOTER 1 only social links -->
     <footer id="footer1" class="page-section text-center p-50-cont">
       <div class="container">
         <!-- Social Links -->
         <div class="footer-soc-a">
           <a href="https://www.facebook.com/InvasionTech/" title="Facebook" target="_blank"><i
               class="fab fa-facebook-f"></i></a>
           <a href="https://www.linkedin.com/company/invasion-software-technologies-pvt-ltd" title="LinkedIn"
             target="_blank"><i class="icon fab fa-linkedin-in"></i></a>
         </div>
       </div>
     </footer>

     <!-- BACK TO TOP -->
     <p id="back-top">
       <a href="#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
     </p>

     </div><!-- End BG -->
     </div><!-- End wrap -->

     <!-- JS begin -->

     <!-- jQuery  -->
     <script src="<?php echo SITE_URL; ?>/js/jquery.min.js"></script>

     <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="<?php echo SITE_URL; ?>/js/bootstrap.min.js"></script>

     <!-- MAGNIFIC POPUP -->
     <script src='js/jquery.magnific-popup.min.js'></script>

     <!-- PORTFOLIO SCRIPTS -->
     <script src="<?php echo SITE_URL; ?>/js/isotope.pkgd.min.js"></script>
     <script src="<?php echo SITE_URL; ?>/js/imagesloaded.pkgd.min.js"></script>
     <script src="<?php echo SITE_URL; ?>/js/masonry.pkgd.min.js"></script>

     <!-- APPEAR -->
     <script src="<?php echo SITE_URL; ?>/js/jquery.appear.js"></script>

     <!-- OWL CAROUSEL -->
     <script src="<?php echo SITE_URL; ?>/js/owl.carousel.min.js"></script>

     <!-- PARALLAX -->
     <script src="<?php echo SITE_URL; ?>/js/jquery.stellar.min.js"></script>

     <!-- MAIN SCRIPT -->
     <script src="<?php echo SITE_URL; ?>/js/main.js"></script>

     <!-- REVOSLIDER SCRIPTS  -->
     <script src="<?php echo SITE_URL; ?>/revo-slider/js/jquery.themepunch.tools.min.js">
     </script>
     <script src="<?php echo SITE_URL; ?>/revo-slider/js/jquery.themepunch.revolution.min.js">
     </script>

     <!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
      The following part can be removed on Server for On Demand Loading) -->
     <script src="<?php echo SITE_URL; ?>/revo-slider/js/extensions/revolution.extension.actions.min.js"></script>
     <script src="<?php echo SITE_URL; ?>/revo-slider/js/extensions/revolution.extension.carousel.min.js"></script>
     <script src="<?php echo SITE_URL; ?>/revo-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
     <script src="<?php echo SITE_URL; ?>/revo-slider/js/extensions/revolution.extension.layeranimation.min.js">
     </script>
     <script src="<?php echo SITE_URL; ?>/revo-slider/js/extensions/revolution.extension.migration.min.js"></script>
     <script src="<?php echo SITE_URL; ?>/revo-slider/js/extensions/revolution.extension.navigation.min.js"></script>
     <script src="<?php echo SITE_URL; ?>/revo-slider/js/extensions/revolution.extension.parallax.min.js"></script>
     <script src="<?php echo SITE_URL; ?>/revo-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
     <script src="<?php echo SITE_URL; ?>/revo-slider/js/extensions/revolution.extension.video.min.js"></script>

     <!-- SLIDER REVOLUTION INITIALIZATION  -->
     <script>
jQuery(document).ready(function() {

  jQuery("#rev_slider_280_1").show().revolution({
    sliderType: "hero",
    jsFileLocation: "<?php echo SITE_URL; ?>/revo-slider/js/",
    sliderLayout: "fullscreen",
    dottedOverlay: "none",
    delay: 9000,
    /*navigation: {},*/
    responsiveLevels: [1240, 1024, 778, 480],
    visibilityLevels: [1240, 1024, 778, 480],
    gridwidth: [1240, 1024, 778, 480],
    gridheight: [868, 768, 960, 720],
    lazyType: "none",
    parallax: {
      type: "off",
      origo: "slidercenter",
      speed: 1000,
      levels: [0],
      type: "scroll",
      disable_onmobile: "on"
    },
    shadow: 0,
    spinner: "spinner2",
    autoHeight: "off",
    fullScreenAutoWidth: "off",
    fullScreenAlignForce: "off",
    fullScreenOffsetContainer: "",
    fullScreenOffset: "",
    disableProgressBar: "on",
    hideThumbsOnMobile: "off",
    hideSliderAtLimit: 0,
    hideCaptionAtLimit: 0,
    hideAllCaptionAtLilmit: 0,
    debugMode: false,
    fallbacks: {
      simplifyAll: "off",
      disableFocusListener: false,
    }
  });

}); /*ready*/
     </script>
     <!-- JS end -->

     </body>

     </html>