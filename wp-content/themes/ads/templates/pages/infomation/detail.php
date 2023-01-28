<?php
while (have_posts()) : ?>
    <?php the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header alignwide">
            <?php the_post_thumbnail(); ?>
        </header>
        <div class="entry-content">
            <?php
            the_content();
            wp_link_pages(
                array(
                    'before'   => '<nav class="page-links" aria-label="' . esc_attr__('Page', 'twentytwentyone') . '">',
                    'after'    => '</nav>',
                    'pagelink' => esc_html__('Page %', 'twentytwentyone'),
                )
            );
            ?>
        </div>
        <footer class="entry-footer default-max-width d-none">
        </footer>
        <?php if (!is_singular('attachment')) : ?>
            <?php get_template_part('template-parts/post/author-bio'); ?>
        <?php endif; ?>
    </article>
<?php
    if (is_attachment()) {

        the_post_navigation(
            array(

                'prev_text' => sprintf(__('<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentytwentyone'), '%title'),
            )
        );
    }
    if (comments_open() || get_comments_number()) {
        comments_template();
    }
    the_post_navigation(
        array(
            'prev_text' => '<p class="post-title">1. %title</p>',
            'next_text' => '<p class="post-title">2. %title</p>',
            'screen_reader_text' => __('Bài viết liên quan'),
        )
    );
endwhile;
?>