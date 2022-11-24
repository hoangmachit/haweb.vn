<?php
$cat_args = array(
    'orderby'       => 'term_id',
    'order'         => 'ASC',
    'hide_empty'    => false,
);
$infomations = get_terms('infomations_tax', $cat_args);


?>
<link href="<?php echo ASSETS('/assets/css/page/infomations/style.css') ?>" rel="stylesheet">
<section id="background-blogs">
    <img src="<?php echo ASSETS('/assets/img/bg-banner.jpg') ?>" alt="Banner Blogs">
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
                    <?php for ($i = 0; $i < 10; $i++) : ?>
                        <div class="blogs-second-group" data-aos="zoom-out" data-aos-delay="100">
                            <div class="blogs-second-box d-flex">
                                <div class="blogs-second-thumb">
                                    <figure>
                                        <img src="https://mikotech.vn/wp-content/uploads/2022/08/105_Plugin-testimonial-la-gi.jpg" class="img-fluid" alt="">
                                    </figure>
                                </div>
                                <div class="blogs-second-info">
                                    <h3 title="">
                                        <a href="" title="">
                                            Plugin testimonial là gì? 9 testimonial plugin tốt nhất 2023
                                        </a>
                                    </h3>
                                    <div class="blogs-second-desc">
                                        <p>
                                            Mô hình MVC là mô hình không thể không biết đến trong giới lập trình website. Đây là mô hình được ứng dụng cao trong các dự án website. Vậy mô hình MVC là gì? Những thông tin về MVC mà bạn không thể bỏ lỡ. Hãy cùng bài viết tìm hiểu nhé! Qua bài […]
                                        </p>
                                    </div>
                                    <a href="" title="" class="blogs-read-more"><span>Đọc thêm</span><i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="page-blogs-title">
                    <h2>Danh mục</h2>
                </div>
                <div class="page-blogs-content page-blogs-categories">
                    <?php foreach ($infomations as $key => $term) : ?>
                        <div class="blogs-category">
                            <a href="<?php echo get_term_link($term) ?>" title="<?php echo $term->name ?>">
                                <?php echo $term->name ?>
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
                <div class="page-blogs-title mt-5">
                    <h2>Wordpress</h2>
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
                    <?php for ($i = 0; $i < 3; $i++) : ?>
                        <div class="blogs-items-view blogs-items-small">
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
                    <?php endfor; ?>
                    <div class="read-more-category">
                        <a href="" class="d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Đọc thêm</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="page-blogs-title mt-5">
                    <h2>Framework</h2>
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
                    <?php for ($i = 0; $i < 3; $i++) : ?>
                        <div class="blogs-items-view blogs-items-small">
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
                    <?php endfor; ?>
                    <div class="read-more-category">
                        <a href="" class="d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Đọc thêm</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="page-blogs-title mt-5">
                    <h2>.Htaccess</h2>
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
                    <?php for ($i = 0; $i < 3; $i++) : ?>
                        <div class="blogs-items-view blogs-items-small">
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
                    <?php endfor; ?>
                    <div class="read-more-category">
                        <a href="" class="d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Đọc thêm</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>