<!doctype html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Main stylesheet -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?v=<?php echo time(); ?>">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">

    <!-- OwlCarousel Stylsheets -->
    <link href="<?php echo get_template_directory_uri(); ?>/bower_components/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/bower_components/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

    <meta name="description" content="The Pipedream Co team is made up of Tim and Monica, a partnership with endless amounts of love, support and faith.">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> data-wp-install-url="<?php echo bloginfo('url'); ?>">

    <header class="nav">
        <div class="row">
            <div class="small-12 columns">

                <div class="left">
                    <a href="<?php echo bloginfo('url'); ?>"><img class="nav__logo" src="<?php echo get_template_directory_uri(); ?>/images/pipedream-logo.svg" alt="Pipedream Co Logo"></a>
                </div>

                <div class="right">
                    <ul class="nav__nav show-for-medium">
                        <?php get_template_part('parts/links'); ?>
                    </ul>
                    <div class="cart-link">
                        <span class="hide-for-medium">
                            <?php echo get_cart_count_link(); ?>
                        </span>
                    </div>
                    <div id="animated-hamburger" class="hide-for-medium ">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

            </div>
        </div>


        <a href="<?php echo wc_get_cart_url(); ?>" class="floating-cart <?php if (WC()->cart->get_cart_contents_count() < 1) echo "hide" ?>">
            <li><i class="fa fa-shopping-cart"></i></li>
            <li>
                <?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?>
            </li>
            <li>
                <?php echo WC()->cart->get_cart_total(); ?>
            </li>
        </a>

    </header>

    <nav id="mobile-nav" class="mobile-nav hide-for-medium">
        <ul>
            <?php get_template_part('parts/links'); ?>
        </ul>
    </nav>