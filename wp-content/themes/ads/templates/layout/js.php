<!-- Js Config -->
<script>
    var ADS = ADS || {};
    var CONFIG_BASE = '';
    var LANG = {};
    var DEVICE = "computer";
</script>
<script src="<?php _echo(_assets('/assets/vendor/jquery/jquery.min.js')) ?>"></script>
<script src="<?php _echo(_assets('/assets/select2/dist/js/select2.min.js')) ?>"></script>
<script src="<?php _echo(_assets('/assets/vendor/bootstrap/js/bootstrap.bundle.js')) ?>"></script>
<script src="<?php _echo(_assets('/assets/vendor/aos/aos.js')) ?>"></script>
<script src="<?php _echo(_assets('/assets/vendor/php-email-form/validate.js')) ?>"></script>
<script src="<?php _echo(_assets('/assets/vendor/swiper/swiper-bundle.min.js')) ?>"></script>
<script src="<?php _echo(_assets('/assets/vendor/purecounter/purecounter.js')) ?>"></script>
<script src="<?php _echo(_assets('/assets/vendor/isotope-layout/isotope.pkgd.min.js')) ?>"></script>
<script src="<?php _echo(_assets('/assets/vendor/glightbox/js/glightbox.min.js')) ?>"></script>
<script src="<?php _echo(_assets('/assets/js/main.js')) ?>"></script>
<script type="text/javascript">
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