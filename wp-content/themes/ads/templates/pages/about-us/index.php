<?php
include_once __DIR__ . "/_query.php";
?>
<link href="<?php _echo(_assets('/assets/owlcarousel/owl.carousel.min.css')) ?>" rel="stylesheet">
<link href="<?php _echo(_assets('/assets/owlcarousel/owl.theme.default.min.css')) ?>" rel="stylesheet">
<link href="<?php _echo(_assets('/assets/css/page/about-us/style.css')) ?>" rel="stylesheet">
<script src="<?php _echo(_assets('/assets/owlcarousel/owl.carousel.min.js')) ?>"></script>
<section id="background-blogs">
    <header>
        <h1><?php _echo($page->post_title) ?></h1>
    </header>
    <img src="<?php _echo(_assets('/assets/img/google-ads-banner.png')) ?>" class="img-fluid" alt="<?php _echo($page->post_title) ?>">
</section>
<section id="page-AboutUs">
    <?php
    include_once __DIR__ . "/_mission.php";
    include_once __DIR__ . "/_service.php";
    include_once __DIR__ . "/_procedure.php";
    include_once __DIR__ . "/_staff.php";
    include_once __DIR__ . "/_customer.php";
    ?>
</section>
<script>
    $('.owl-customer').owlCarousel({
        margin: 10,
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
</script>