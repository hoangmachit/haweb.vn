<?php
if (!function_exists('dd')) {
    function dd($args)
    {
        echo "<pre>";
        var_dump($args);
        exit();
        echo "<pre>";
    }
}
if (!function_exists('ASSETS')) {
    function ASSETS($string)
    {
        return get_template_directory_uri() . $string;
    }
}
if (!function_exists('resetQuery')) {
    function resetQuery()
    {
        wp_reset_query();
    }
}
// get Policy
function getPolicy()
{
    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'policy',
        'post_status' => 'publish'
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) { ?>
        <ul>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php the_title(); ?>
                    </a>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php }
    resetQuery();
}
// get Why Choice
function getWhyChoice()
{
    $args = array(
        'posts_per_page' => 6,
        'post_type' => 'why',
        'post_status' => 'publish'
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) { ?>
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <article class="col-lg-4 mt-4">
                <div class="box" data-aos="fade-up" data-aos-delay="200">
                    <figure>
                        <?php the_post_thumbnail(array(440, 360), array('class' => 'img-fluid')) ?>
                    </figure>
                    <h3 title="<?php the_title(); ?>"><?php the_title() ?></h3>
                    <div class="why-excerpt">
                        <?php the_excerpt() ?>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>
    <?php }
    resetQuery();
}


// get Infomations
function getInfomations()
{
    $args = array(
        'posts_per_page' => 6,
        'post_type' => 'infomations',
        'post_status' => 'publish'
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) { ?>
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <article class="col-lg-4">
                <div class="post-box">
                    <div class="post-img">
                        <figure>
                            <?php the_post_thumbnail(array(416, 267), array('class' => 'img-fluid')) ?>
                        </figure>
                    </div>
                    <div class="post-time">
                        <span class="post-date"><?php the_time() ?></span>
                    </div>
                    <h3 class="post-title" title="<?php the_title(); ?>"><?php the_title() ?></h3>
                    <div class="post-desc">
                        <?php the_excerpt() ?>
                    </div>
                    <a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="readmore stretched-link mt-auto"><span>Đọc thêm</span><i class="bi bi-arrow-right"></i></a>
                </div>
            </article>
        <?php endwhile; ?>
    <?php }
    resetQuery();
}


// get Questions
function getQuestions()
{
    $args = array(
        'posts_per_page' => 10,
        'post_type' => 'question',
        'post_status' => 'publish'
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) { ?>
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <div class="accordion-item mb-3">
                <h5 class="accordion-header" id="heading_<?php the_ID() ?>">
                    <button class="accordion-button font-weight-bold collapsed" type="button" data-container="#collapse_<?php the_ID() ?>">
                        <?php the_title(); ?>
                    </button>
                </h5>
                <div id="collapse_<?php the_ID() ?>" class="accordion-collapse collapse">
                    <div class="accordion-body text-sm opacity-8">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php }
    resetQuery();
}

// get Working
function getWorking()
{
    $args = array(
        'posts_per_page' => 8,
        'post_type' => 'working',
        'post_status' => 'publish'
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) { ?>

        <?php
        $aos_delay = 0;
        while ($query->have_posts()) : $query->the_post(); ?>
            <?php $aos_delay++; ?>
            <article class="col-md-6" data-aos="zoom-out" data-aos-delay="<?php echo $aos_delay ?>00">
                <div class="feature-box d-flex align-items-center" title="<?php the_title() ?>">
                    <i class="bi bi-check"></i>
                    <h3><?php the_title() ?></h3>
                </div>
            </article>
        <?php endwhile; ?>
    <?php }
    resetQuery();
}
