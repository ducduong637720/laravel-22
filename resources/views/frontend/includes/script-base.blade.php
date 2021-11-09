<!-- JAVASCRIPT  FILES ========================================= --> 
<script   src="/frontend/js/jquery-1.12.4.min.js"></script><!-- JQUERY.MIN JS -->
<script   src="/frontend/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script   src="/frontend/js/bootstrap-select.min.js"></script><!-- FORM JS -->
<script   src="/frontend/js/jquery.bootstrap-touchspin.min.js"></script><!-- FORM JS -->
<script   src="/frontend/js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
<script   src="/frontend/js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script   src="/frontend/js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script   src="/frontend/js/waypoints-sticky.min.js"></script><!-- COUNTERUP JS -->
<script  src="/frontend/js/isotope.pkgd.min.js"></script><!-- MASONRY  -->
<script   src="/frontend/js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
<script   src="/frontend/js/stellar.min.js"></script><!-- PARALLAX BG IMAGE   --> 
<script   src="/frontend/js/scrolla.min.js"></script><!-- ON SCROLL CONTENT ANIMTE   -->
<script   src="/frontend/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script   src="/frontend/js/shortcode.js"></script><!-- SHORTCODE FUCTIONS  -->
<!-- REVOLUTION JS FILES -->
<script  src="/frontend/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script  src="/frontend/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
<script  src="/frontend/plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>
<!-- REVOLUTION SLIDER FUNCTION  ===== -->
<script   src="/frontend/js/rev-script-1.js"></script>
<script>
    $(document).ready(function() {
    
      var sync1 = $("#sync1");
      var sync2 = $("#sync2");
      var slidesPerPage = 4; //globaly define number of elements per page
      var syncedSecondary = true;
    
          sync1.owlCarousel({
            items : 1,
            slideSpeed : 2000,
            nav: true,
            autoplay: false,
            dots: false,
            loop: true,
            responsiveRefreshRate : 200,
            navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
          }).on('changed.owl.carousel', syncPosition);
    
          sync2
            .on('initialized.owl.carousel', function () {
              sync2.find(".owl-item").eq(0).addClass("current");
            })
            .owlCarousel({
            items : slidesPerPage,
            dots: false,
            nav: false,
            margin:5,
            smartSpeed: 200,
            slideSpeed : 500,
            slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
            responsiveRefreshRate : 100
          }).on('changed.owl.carousel', syncPosition2);
    
      function syncPosition(el) {
        //if you set loop to false, you have to restore this next line
        //var current = el.item.index;
        
        //if you disable loop you have to comment this block
        var count = el.item.count-1;
        var current = Math.round(el.item.index - (el.item.count/2) - .5);
        
        if(current < 0) {
          current = count;
        }
        if(current > count) {
          current = 0;
        }
        
        //end block
    
        sync2
          .find(".owl-item")
          .removeClass("current")
          .eq(current)
          .addClass("current");
        var onscreen = sync2.find('.owl-item.active').length - 1;
        var start = sync2.find('.owl-item.active').first().index();
        var end = sync2.find('.owl-item.active').last().index();
        
        if (current > end) {
          sync2.data('owl.carousel').to(current, 100, true);
        }
        if (current < start) {
          sync2.data('owl.carousel').to(current - onscreen, 100, true);
        }
      }
      
      function syncPosition2(el) {
        if(syncedSecondary) {
          var number = el.item.index;
          sync1.data('owl.carousel').to(number, 100, true);
        }
      }
      
      sync2.on("click", ".owl-item", function(e){
        e.preventDefault();
        var number = $(this).index();
        sync1.data('owl.carousel').to(number, 300, true);
      });
    });
    </script>