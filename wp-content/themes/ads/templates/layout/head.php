<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width">
<title><?php wp_title('', true, 'right'); ?><?php if (is_post_type_archive() || is_singular()) : ?> | <?php bloginfo('name'); ?><?php endif; ?><?php if (is_home()) : ?><?php bloginfo('name'); ?><?php endif; ?></title>
<?php wp_head(); ?>
<link rel="shortcut icon" href="<?php _echo(_assets('/assets/img/your-logo.png')) ?>" type="image/x-icon">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="<?php _echo(_assets('/assets/img/your-logo.png')) ?>" rel="icon">
<link href="<?php _echo(_assets('/assets/img/your-logo.png')) ?>" rel="apple-touch-icon">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<?php include_once __layout . "css.php"; ?>
<!-- jQuery library -->
<script src="<?php _echo(_assets('/assets/js/jquery-3.6.1.min.js')) ?>"></script>