<?php
include_once __DIR__ . "/_query.php";
?>
<link href="<?php _echo(_assets('/assets/css/page/about-us/style.css')) ?>" rel="stylesheet">
<section id="background-blogs">
    <header>
        <h1><?php _echo($page->post_title) ?></h1>
    </header>
    <img src="<?php _echo(_assets('/assets/img/google-ads-banner.png')) ?>" class="img-fluid" alt="<?php _echo($page->post_title) ?>">
</section>
<section id="page-AboutUs">
    <?php
    include_once __DIR__ . "/_about.php";
    include_once __DIR__ . "/_mission.php";
    include_once __DIR__ . "/_service.php";
    include_once __DIR__ . "/_why.php";
    include_once __DIR__ . "/_customer.php";
    ?>
</section>