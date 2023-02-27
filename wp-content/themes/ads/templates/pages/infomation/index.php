<?php
include_once __DIR__ . "/_query.php";
?>
<link href="<?php _echo(_assets('/assets/css/page/infomations/style.css')) ?>" rel="stylesheet">
<section id="background-blogs" class="mb-5">
    <header>
        <h1>Kiến thức website</h1>
    </header>
    <img src="<?php _echo(_assets('/assets/img/google-ads-banner.png')) ?>" class="img-fluid" alt="Kiến thức website">
</section>
<main id="main">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-8">
                <div class="blogs-content">
                    <?php if ($query->have_posts()) : ?>
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <div class="blogs-second-group">
                                <div class="blogs-second-box d-flex">
                                    <div class="blogs-second-thumb">
                                        <figure>
                                            <?php the_post_thumbnail(array(320, 215), array('class' => 'img-fluid')) ?>
                                        </figure>
                                    </div>
                                    <div class="blogs-second-info">
                                        <h3 title="">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </h3>
                                        <div class="blogs-second-desc">
                                            <?php the_excerpt(); ?>
                                        </div>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="blogs-read-more"><span>Đọc thêm</span><i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="pagination">
                        <?php
                        echo paginate_links(array(
                            'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                            'total'        => $query->max_num_pages,
                            'current'      => max(1, get_query_var('paged')),
                            'format'       => '?paged=%#%',
                            'show_all'     => false,
                            'type'         => 'plain',
                            'end_size'     => 2,
                            'mid_size'     => 1,
                            'prev_next'    => true,
                            'prev_text'    => sprintf('<i></i> %1$s', __('Newer Posts', 'text-domain')),
                            'next_text'    => sprintf('%1$s <i></i>', __('Older Posts', 'text-domain')),
                            'add_args'     => false,
                            'add_fragment' => '',
                        ));
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <?php include_once "sidebar.php"; ?>
            </div>
        </div>
    </div>
</main>