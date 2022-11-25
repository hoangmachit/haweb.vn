<?php
include_once __DIR__ . "/_query.php";
?>
<link href="<?php _echo(_assets('/assets/css/page/domain/style.css')) ?>" rel="stylesheet">
<section id="background-blogs">
    <header>
        <h1>Tên Miền</h1>
    </header>
    <img src="<?php _echo(_assets('/assets/img/google-ads-banner.png')) ?>" class="img-fluid" alt="Tên miền">
</section>
<section id="page-Domain">
    <?php
    include_once __DIR__ . "/_search.php";
    include_once __DIR__ . "/_why.php";
    ?>
</section>