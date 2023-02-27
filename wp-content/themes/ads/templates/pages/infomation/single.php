<?php
include_once __DIR__ . "/_query.php";
?>
<link href="<?php echo _assets('/assets/css/page/infomations/style.css') ?>" rel="stylesheet">
<section id="background-blogs" class="mb-5">
    <header>
        <h1><?php the_title() ?></h1>
    </header>
    <img src="<?php _echo(_assets('/assets/img/google-ads-banner.png')) ?>" class="img-fluid" alt="Kiến thức website">
</section>
<main id="main">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-8">
                <div class="infomations-detail-page">
                    <?php
                    include_once __DIR__ . "/detail.php";
                    ?>
                </div>
            </div>
            <div class="col-lg-4">
                <?php include_once "sidebar.php"; ?>
            </div>
        </div>
    </div>
</main>