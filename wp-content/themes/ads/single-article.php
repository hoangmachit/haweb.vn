<?php $page_id = 'article'; ?>
<?php get_header(); ?>
<?php $post_type = get_post_type_object(get_post_type('article')); ?>
<main class="p-article">
    <div class="c-mv02" style="background: url('<?php the_post_thumbnail_url(get_the_ID()); ?>') no-repeat center;">
        <div class="c-mv02__content">
            <h2 class="c-mv02__title"><?php while (have_posts()) {
                                            the_post();
                                            the_title();
                                        } ?></h2>
            <p class="c-mv02__text"><?php echo get_field("company"); ?></p>
            <p class="c-mv02__text01"><?php echo get_field("name_position"); ?></p>
        </div>
    </div>
    <div class="l-container">
        <div class="p-article__wrap">
            <div class="p-article__content">
                <?php
                if (have_rows('detail')) :
                    while (have_rows('detail')) : the_row();
                ?>
                        <div class="c-bltext02">
                            <?php if (get_sub_field('title')) { ?>
                                <h2 class="c-bltext02__title"><?php the_sub_field('title'); ?></h2>
                            <?php } ?>
                            <p class="c-bltext02__text"><?php the_sub_field('content'); ?></p>
                            <p class="c-bltext02__note"><?php the_sub_field('note'); ?></p>
                            <?php $images = get_sub_field('image');
                            if ($images) :
                            ?>
                                <ul class="c-bltext02__img <?php if (count($images) >= 2) {
                                                                echo 'flex';
                                                            } ?>">
                                    <?php foreach ($images as $image) : ?>
                                        <li>
                                            <img src="<?php echo esc_url($image['sizes']['post-thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php if (esc_attr($image['alt'])) { ?>
                                                <p class="c-bltext02__imgDes"><?php echo esc_attr($image['alt']); ?></p>
                                            <?php } ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                <?php endwhile;
                endif; ?>
            </div>
            <div class="p-article__sidebar">
                <?php $related = get_posts(array('category__in' => wp_get_post_categories($post->ID), 'post_status' => 'publish', 'post_type' => 'article', 'numberposts' => 5, 'post__not_in' => array($post->ID)));
                if ($related) :
                ?>
                    <p class="p-article__sidebarTit">他の記事</p>
                    <ul class="c-list05">
                        <?php foreach ($related as $post) {
                            setup_postdata($post); ?>
                            <li class="c-list05__item">
                                <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                            </li>
                        <?php }
                        wp_reset_postdata(); ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>