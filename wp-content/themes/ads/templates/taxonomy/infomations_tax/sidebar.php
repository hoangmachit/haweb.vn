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
    <h2>Bài viết mới nhất</h2>
</div>
<div class="page-blogs-content">

    <?php if ($post_new->have_posts()) : ?>
        <?php
        $number = 0;
        while ($post_new->have_posts()) : $post_new->the_post();
            $number++;
        ?>
            <?php if ($number == 1) : ?>
                <div class="blogs-items-view first">
                    <div class="blogs-items-thumb">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <figure>
                                <?php the_post_thumbnail(array(170, 102), array('class' => 'img-fluid')) ?>
                            </figure>
                        </a>
                    </div>
                    <div class="blogs-items-info">
                        <h4>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
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
                                    <?php the_time('d/m/Y h:i:A'); ?>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            <?php else : ?>
                <div class="blogs-items-view">
                    <h4>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
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
            <?php endif; ?>

        <?php endwhile;
        unset($number);
        ?>
    <?php endif; ?>
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
            <?php $number = 0;
            while ($query->have_posts()) : $query->the_post();
                $number++;
            ?>
                <?php if (1 === $number) : ?>
                    <div class="blogs-items-view blogs-items-small first">
                        <div class="blogs-items-thumb">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <figure>
                                    <?php the_post_thumbnail(array(170, 102), array('class' => 'img-fluid')) ?>
                                </figure>
                            </a>
                        </div>
                        <div class="blogs-items-info">
                            <h4>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
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
                                        <?php the_time('d/m/Y h:i:A'); ?>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
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
                <?php endif ?>
            <?php endwhile;
            unset($number);
            ?>
            <div class="read-more-category">
                <a href="<?php _echo(get_term_link($term)) ?>" title="<?php _echo($term->name); ?>" class="d-inline-flex align-items-center justify-content-center align-self-center">
                    <span>Đọc thêm</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>