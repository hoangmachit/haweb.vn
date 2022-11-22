<!-- Js Config -->
<script>
    var ADS = ADS || {};
    var CONFIG_BASE = '';
    var LANG = {};
    var DEVICE = "computer";
</script>
<script src="<?php echo ASSETS('/assets/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo ASSETS('/assets/select2/dist/js/select2.min.js') ?>"></script>
<script src="<?php echo ASSETS('/assets/vendor/bootstrap/js/bootstrap.bundle.js') ?>"></script>
<script src="<?php echo ASSETS('/assets/vendor/aos/aos.js') ?>"></script>
<script src="<?php echo ASSETS('/assets/vendor/php-email-form/validate.js') ?>"></script>
<script src="<?php echo ASSETS('/assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
<script src="<?php echo ASSETS('/assets/vendor/purecounter/purecounter.js') ?>"></script>
<script src="<?php echo ASSETS('/assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
<script src="<?php echo ASSETS('/assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
<script src="<?php echo ASSETS('/assets/js/main.js') ?>"></script>
<script type="text/javascript">
    var x = document.getElementById("foter-hide");
    myFunction(x)

    function myFunction(x) {
        if (window.matchMedia("(max-width: 700px)").matches) {
            x.style.display = 'none';
        }
    };
    /* QA */
    ADS.Q_A = function() {
        $('.accordion-button').on('click', function(e) {
            $(this).toggleClass('collapsed');
            $(this).toggleClass('active');
            $($(this).data('container')).slideToggle();
        });
    }
    $(function() {
        ADS.Q_A();
    });
</script>