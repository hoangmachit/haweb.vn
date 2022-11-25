<?php
include_once __DIR__ . "/_query.php";
?>
<link href="<?php _echo(_assets('/assets/css/page/google-ads/style.css')) ?>" rel="stylesheet">
<section id="background-blogs">
    <header>
        <h1>Quảng Cáo Google Ads</h1>
    </header>
    <img src="<?php _echo(_assets('/assets/img/google-ads-banner.png')) ?>" class="img-fluid" alt="Google Ads">
</section>
<section id="page-Google">
    <?php
    include_once __DIR__ . "/_overview.php";
    include_once __DIR__ . "/_introduce.php";
    include_once __DIR__ . "/_futures.php";
    include_once __DIR__ . "/_service.php";
    include_once __DIR__ . "/_highlight.php";
    ?>
</section>