<?php
$categories_args_nav = array(
    'orderby'       => 'term_id',
    'order'         => 'ASC',
    'hide_empty'    => false,
);
$infomations_nav = get_terms('infomations_tax', $categories_args_nav);
?>
<nav id="navbar" class="navbar">
    <ul>
        <li><a class="nav-link scrollto" href="<?php _echo(site_url('/ve-chung-toi')) ?>" title="Về chúng tôi">Về chúng tôi</a></li>
        <li class="dropdown"><a href="#"><span>Quảng cáo</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="<?php _echo(site_url('/google-ads')) ?>" title="Google Ads">Google Ads</a></li>
                <li><a href="<?php _echo(site_url('/tiktok-ads')) ?>" title="Tiktok Ads">TikTok Ads</a></li>
            </ul>
        </li>
        <li><a class="nav-link scrollto" href="<?php _echo(site_url('/domain')) ?>" title="Domain">Tên miền</a></li>
        <li><a class="nav-link scrollto" href="<?php _echo(site_url('/hosting')) ?>" title="Hosting">Hosting</a></li>
        <li><a class="nav-link scrollto" href="<?php _echo(site_url('/thiet-ke-website')) ?>" title="Hosting">Thiết kế website</a></li>
        <li class="dropdown"><a href="#" title="Kho giao diện"><span>Kho giao diện</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="#">Bất động sản</a></li>
                <li class="dropdown"><a href="#"><span>Nhà đất</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="#">Nhà đất</a></li>
                        <li><a href="#">Nhà phố</a></li>
                        <li><a href="#">Nhà cấp 3</a></li>
                        <li><a href="#">Nhà mặt tiền</a></li>
                        <li><a href="#">Nhà chung cư</a></li>
                    </ul>
                </li>
                <li><a href="#">Xây dựng</a></li>
                <li><a href="#">Landing page</a></li>
                <li><a href="#">Thực phẩm</a></li>
            </ul>
        </li>
        <li <?= !empty($infomations_nav) ? 'class="dropdown"' : '' ?>>
            <a class="nav-link scrollto" href="<?php _echo(site_url('/infomation')) ?>" title="Kiến thức">
                <span>Kiến thức</span>
                <?php if (!empty($infomations_nav)) : ?>
                    <i class="bi bi-chevron-down"></i>
                <?php endif; ?>
            </a>
            <?php if (!empty($infomations_nav)) : ?>
                <ul>
                    <?php foreach ($infomations_nav as $key_info_nav => $term) : ?>
                        <li><a href="<?php _echo(get_term_link($term)) ?>" title="<?php _echo($term->name) ?>"><?php _echo($term->name) ?></a></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </li>
        <li><a class="nav-link scrollto" href="<?php _echo(site_url('/lien-he')) ?>" title="Liên hệ">Liên hệ</a></li>
        <li><a class="getstarted scrollto" href="#" title="Tư vấn báo giá">Tư vấn báo giá</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav>