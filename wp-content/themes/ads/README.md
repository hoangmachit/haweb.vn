# start custom type
array(
    'post_type' => 'infomations',
    'label'     => 'Infomations',
    'args'      => array(
        'supports' => array(
            'title', 'editor', 'revisions', 'thumbnail', 'excerpt', 'author', 'page-attributes'
        )
    ),
    'taxonomies' => array(
        array(
            'taxonomy' => 'infomations_tax',
            'label' => 'Categories',
            'rewrite'   => array(
                'slug' => 'infomation',
                'with_front' => true
            )
        )
    ),
),
# end custom type

<?php
    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'news',
        'post_status' => 'publish'
    );
    $query = new WP_Query( $args );
    ?>

    <?php if( $query->have_posts() ) : ?>
    <ul class="c-news__list">
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <li class="c-news__item">
                <p class="c-news__date"><?php echo get_the_date('Y.m.d'); ?></p>
                <a href="<?php echo get_field("url"); ?>" class="c-news__content">
                    <h3 class="c-news__title"><?php the_title(); ?></h3>
                </a>
                <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), '640x360'); ?>
                <?php if($featured_img_url): ?>
                    <img src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>">
                <?php else : ?>
                    <img src="/img/common/thumb-noimage.jpg" alt="<?php the_title(); ?>">
                <?php endif; ?>
            </li>
        <?php endwhile; ?>
    </ul>
    <?php else : ?>
        <p>khongo co bai viet nao de hien thi</p>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
