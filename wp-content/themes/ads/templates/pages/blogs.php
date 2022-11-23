<section id="background-blogs">
    <img src="<?php echo ASSETS('/assets/img/bg-banner.jpg') ?>" alt="Banner Blogs">
</section>
<main id="main">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-9">

            </div>
            <div class="col-lg-3">
                <div class="page-blogs-title">
                    <h2>Danh mục</h2>
                </div>
                <div class="page-blogs-content">
                    <?php
                    $terms = get_terms([
                        'taxonomy' => 'infomations_tax',
                        'hide_empty' => false,
                    ]);
                    foreach ($terms as $key_term => $term) { ?>
                        <a href="<?php echo $term->slug ?>" title="<?php echo $term->name ?>" class="btn btn-success"><?php ?>
                            <?php echo $term->name ?>
                        </a>
                    <?php }
                    ?>
                </div>
                <div class="page-blogs-title">
                    <h2>Bài viết xem nhiều</h2>
                </div>
                <div class="page-blogs-content">
                    <?php

                    ?>
                </div>
            </div>
        </div>
    </div>
</main>