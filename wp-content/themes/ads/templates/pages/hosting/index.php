<?php
include_once __DIR__ . "/_query.php";
?>
<link href="<?php _echo(_assets('/assets/css/page/hosting/style.css')) ?>" rel="stylesheet">
<script src="<?php _echo(_assets('/assets/css/page/hosting/main.js')) ?>"></script>
<section id="background-blogs">
    <header>
        <h1><?php _echo($page->post_title) ?></h1>
    </header>
    <img src="<?php _echo(_assets('/assets/img/google-ads-banner.png')) ?>" class="img-fluid" alt="<?php _echo($page->post_title) ?>">
</section>
<section id="page-Hosting">
    <?php
    include_once __DIR__ . "/_banner.php";
    include_once __DIR__ . "/_price.php";
    include_once __DIR__ . "/_experts.php";
    include_once __DIR__ . "/_security.php";
    include_once __DIR__ . "/_question.php";
    ?>
</section>