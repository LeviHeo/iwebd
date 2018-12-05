<?php if( is_front_page() || is_home() ) :?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130091519-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-130091519-1');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W3K5ZCZ');</script>
    <!-- End Google Tag Manager -->

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iWebD - Make The Web Better</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-32x32.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#b91d47">
    <meta name="theme-color" content="#ffffff">


    <link rel="stylesheet" href="./css/app.css" />
    <script src="./js/jquery.min.js?ver=3.3.1"></script>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W3K5ZCZ"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        
    <div class="wrap page-index">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-iwd"></a>
        <div class="index-tit flex-cont">
            <div class="main-slogan">
                <div class="main-slogan-tit">
                    iWebD<span class="" id="keywords">&nbsp;</span><div class='console-underscore' id='console'>&nbsp;</div>
                </div>
                <div class="main-slogan-subtit">
                    Make The Web Better
                </div>

                <div class="btn-open-menu">
                    <div class="menuOne">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright">&copy; iWebD.net 2018</div>
    </div>

    <!-- particles.js container -->
    <div id="particles-js"></div>
    <!-- scripts -->
    <script>
        var windowH = $(window).height();
        $(".index-tit").css('height', windowH);
        $(window).resize(function(){
            var windowH = $(window).height();
            $(".index-tit").css('height', windowH);
        });
    </script>
    <script src="js/particles.min.js"></script>
    <script src="js/app.js"></script>

    <script>
    const menuOne = document.querySelector('.menuOne');
    function addClassFunOne() {
        this.classList.toggle("clickMenuOne");
    }
    menuOne.addEventListener('click', addClassFunOne);
    </script>

</body>
</html>


<?php endif;?>



<?php if( !is_front_page() || !is_home() ) :?>

    <?php get_header(); ?>
    <?php
        $thesimplest_site_layout    =   get_theme_mod( 'thesimplest_layout_options_setting' );
        $thesimplest_layout_class   =   'col-md-8 col-sm-12';
        if( $thesimplest_site_layout == 'left-sidebar' && is_active_sidebar( 'sidebar-1' ) ) :
            $thesimplest_layout_class = 'col-md-8 col-sm-12 site-main-right';
        elseif( $thesimplest_site_layout == 'no-sidebar' || !is_active_sidebar( 'sidebar-1' ) ) :
            $thesimplest_layout_class = 'col-md-8 col-sm-12 col-md-offset-2';
        endif;
    ?>

    <div id="primary" class="content-area row">
        <main id="main" class="site-main <?php echo esc_attr($thesimplest_layout_class); ?>" role="main">
            <?php
            if( have_posts() ) : ?>

                <?php if( is_home() && ! is_front_page() ) : ?>
                    <header class="page-header">
                        <h1 class="page-title screen-reader-text">
                            <?php single_post_title(); ?>
                        </h1>
                    </header>
                <?php endif; ?>

                <?php
                // Start the loop
                while( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', get_post_format() );

                // End the loop
                endwhile;

                thesimplest_page_navigation();

            else :
                get_template_part( 'template-parts/content', 'none' );
                ?>
            <?php endif; ?><!-- have_post() -->

        </main><!-- .site-main -->
        <?php get_sidebar(); ?>
    </div><!-- content-area -->

    <?php get_footer(); ?>


<?php endif;?>


