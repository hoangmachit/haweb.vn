<?php
include_once __DIR__ . "/_query.php";
?>
<link href="<?php _echo(_assets('/assets/css/page/infomations/style.css')) ?>" rel="stylesheet">
<section id="background-blogs">
    <img src="<?php _echo(_assets('/assets/img/bg-banner.jpg')) ?>" alt="Banner Blogs">
</section>
<main id="main">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-8">
                <div class="blogs-content">
                    <div id="blogs-left-first">
                        <div class="blogs-box">
                            <div class="blogs-thumb">
                                <a href="" title="">
                                    <figure>
                                        <img src="https://mikotech.vn/wp-content/uploads/2022/08/106_Mo-hinh-MVC-la-gi.jpg" class="img-fluid" alt="">
                                    </figure>
                                </a>
                            </div>
                            <div class="blogs-info">
                                <h3>
                                    <a href="" title="">
                                        Mô hình MVC là gì? Những thông tin về MVC mà bạn không thể bỏ lỡ
                                    </a>
                                </h3>
                                <div class="blogs-desc">
                                    <p>
                                        Mô hình MVC là mô hình không thể không biết đến trong giới lập trình website. Đây là mô hình được ứng dụng cao trong các dự án website. Vậy mô hình MVC là gì? Những thông tin về MVC mà bạn không thể bỏ lỡ. Hãy cùng bài viết tìm hiểu nhé! Qua bài […]
                                    </p>
                                </div>
                                <div class="text-center text-lg-start">
                                    <a href="" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                        <span>Đọc thêm</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <div class="page-blogs-title">
                    <h2>Danh mục</h2>
                </div>
                <div class="page-blogs-content page-blogs-categories">
                    <?php foreach ($infomations_tax as $key_term => $term) : ?>
                        <div class="blogs-category">
                            <a href="<?php _echo(get_term_link($term)) ?>" title="<?php _echo($term->name) ?>">
                                <?php _echo($term->name); ?>
                            </a>
                        </div>
                    <?php endforeach;  ?>
                </div>
                <div class="page-blogs-title">
                    <h2>Bài viết xem nhiều</h2>
                </div>
                <div class="page-blogs-content">
                    <div class="blogs-items-view first">
                        <div class="blogs-items-thumb">
                            <a href="" title="">
                                <figure>
                                    <img src="https://mikotech.vn/wp-content/uploads/2021/12/Inbound-Marketing-la-gi.jpg" class="img-fluid" alt="">
                                </figure>
                            </a>
                        </div>
                        <div class="blogs-items-info">
                            <h4>
                                <a href="" title="">
                                    Hướng dẫn kỹ thuật SEO cơ bản siêu chi tiết cho năm 2022
                                </a>
                            </h4>
                            <div class="blogs-items-time">
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                                        <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                        <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                    </svg>
                                    <span class="blogs-items-time">
                                        10/08/2022 - 10h:00
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php for ($i = 0; $i < 6; $i++) : ?>
                        <div class="blogs-items-view">
                            <h4>
                                <a href="" title="">
                                    Hướng dẫn kỹ thuật SEO cơ bản siêu chi tiết cho năm 2022
                                </a>
                            </h4>
                            <div class="blogs-items-time">
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                                        <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                        <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                    </svg>
                                    <span class="blogs-items-time">
                                        10/08/2022 - 10h:00
                                    </span>
                                </p>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
                <?php foreach ($infomations_tax as $key_term => $term) : ?>
                    <?php
                    _reset();
                    $args = array(
                        'post_type' => 'infomations',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'infomations_tax',
                                'field' => 'slug',
                                'terms' => $term->slug,
                            ),
                        ),
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()) : ?>
                        <div class="page-blogs-title mt-5">
                            <h2><?php _echo($term->name); ?></h2>
                        </div>
                        <div class="page-blogs-content">
                            <div class="blogs-items-view blogs-items-small first">
                                <div class="blogs-items-thumb">
                                    <a href="" title="">
                                        <figure>
                                            <img src="https://mikotech.vn/wp-content/uploads/2021/12/Inbound-Marketing-la-gi.jpg" class="img-fluid" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <div class="blogs-items-info">
                                    <h4>
                                        <a href="" title="">
                                            Hướng dẫn kỹ thuật SEO cơ bản siêu chi tiết cho năm 2022 được thiết kế từ Haweb.vn
                                        </a>
                                    </h4>
                                    <div class="blogs-items-time">
                                        <p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                                                <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                                <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                            </svg>
                                            <span class="blogs-items-time">
                                                10/08/2022 - 10h:00
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php while ($query->have_posts()) : $query->the_post(); ?>
                                <div class="blogs-items-view blogs-items-small">
                                    <h4>
                                        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h4>
                                    <div class="blogs-items-time">
                                        <p>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                                                <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                                <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                            </svg>
                                            <span class="blogs-items-time">
                                                <?php the_time(); ?>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            <div class="read-more-category">
                                <a href="<?php _echo(get_term_link($term)) ?>" title="<?php _echo($term->name); ?>" class="d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Đọc thêm</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</main>