<?php
    function bajra_enqueue_scripts() {
        $dir = get_template_directory_uri();
        // $ver = filemtime( get_template_directory() . '/assets/css/main.css' ) . '';
        wp_enqueue_style('bootstrap', $dir. '/assets/css/bootstrap.min.css', array(), '', 'screen');
        wp_enqueue_style('style', $dir. '/assets/css/style.css', array(), '1.2', 'screen');
        wp_enqueue_style('style-responsive', $dir. '/assets/css/style_responsive.css', array(), '1.2', 'screen');
        wp_enqueue_style('fontawesome', $dir. '/assets/vendor/fontawesome/css/all.min.css', array(), '', 'screen');
        wp_enqueue_style('aos', $dir. '/assets/css/aos.css', array(), '', 'screen');

        wp_enqueue_script('jquery-3.4.1', $dir. '/assets/js/jquery-3.4.1.min.js', array('jquery'), false, true);
        wp_enqueue_script('isotop', $dir. '/assets/js/isotope.pkgd.min.js', array('jquery'), false, true);
        wp_enqueue_script('particles', $dir. '/assets/js/particles.min.js', array('jquery'), false, true);
        wp_enqueue_script('bootstrap', $dir. '/assets/js/bootstrap.min.js', array('jquery'), false, true);
        wp_enqueue_script('aos', $dir. '/assets/js/aos.js', array('jquery'), false, true);
        wp_enqueue_script('main', $dir. '/assets/js/main.js', array('jquery'), '1.2', true);

    }
    add_action('wp_enqueue_scripts', 'bajra_enqueue_scripts');


    $block_root = 'block';
    function bajra_render_block($name, $args = array(), $page_id = false) {
        global $block_root;
        require_once get_template_directory(). '/inc/blocks.php';
        if (!$page_id) {
            $page_id = get_the_ID();
        }
        $blocks = array();
        while (have_rows($block_root, $page_id)) {
            the_row();
            $block_name = get_row_layout();
            if ($name !== $block_name) {
                continue;
            }
            $func_name = 'bajra_render_' .$block_name;
            if (function_exists($func_name)) {
                $blocks[] = call_user_func_array($func_name, array($args));
            }
        }
        return $blocks;
    }

    $area_root = 'area';
    function bajra_render_blocks($page_id = false, $blocks = array()) {
        global $area_root;
        require_once get_template_directory(). '/inc/blocks.php';
        if (!$page_id) {
            $page_id = get_the_ID();
        }
        $results = array();

        $oe = 'odd';
        while (have_rows($area_root, $page_id)) {
            the_row();
            $row_area_name = get_sub_field('area_name');
            while (have_rows('blocks')) {
                the_row();
                $block_name = get_row_layout();
                $result = _bajra_render_block($block_name);
                if ($result) {
                    if (!isset($results[$row_area_name])) {
                        $results[$row_area_name] = '';
                    }
                    $results[$row_area_name] .= $result;
                }
            }
        }
        return $results;
    }

    // ACF fields collapse by default.
    function bajra_acf_collapse_default() {
        ?>
        <script type="text/javascript">
            jQuery(function($) {
                var postboxes = $('.acf-postbox');

                postboxes.addClass('closed');
            });
        </script>
        <?php
    }
    add_action('acf/input/admin_head', 'bajra_acf_collapse_default');

    if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
        require get_template_directory() . '/inc/back-compat.php';
    }

    if ( ! function_exists( 'bajra_setup' ) ) :
    function bajra_setup() {
        load_theme_textdomain( 'bajra', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        add_theme_support( 'title-tag' );

        add_theme_support( 'custom-logo', array(
            'height'      => 220,
            'width'       => 254,
            'flex-height' => true,
        ) );

        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 1200, 9999 );

        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'hoian' ),
            'secondary'  => __( 'Secondary Menu', 'hoian' ),
        ) );

        /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        /*
        * Enable support for Post Formats.
        *
        * See: https://codex.wordpress.org/Post_Formats
        */
        add_theme_support( 'post-formats', array(
            'image',
            'video',
        ) );

        // Indicate widget sidebars can use selective refresh in the Customizer.
        add_theme_support( 'customize-selective-refresh-widgets' );
    }
    endif;
    add_action( 'after_setup_theme', 'bajra_setup' );

    /**
     * Sets the content width in pixels, based on the theme's design and stylesheet.
     *
     * Priority 0 to make it available to lower priority callbacks.
     *
     * @global int $content_width
     *
     * @since Twenty Sixteen 1.0
     */
    function bajra_content_width() {
        $GLOBALS['content_width'] = apply_filters( 'bajra_content_width', 1902 );
    }
    add_action( 'after_setup_theme', 'bajra_content_width', 0 );

    function bajra_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'Sidebar', 'twentysixteen' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );

    }
    add_action( 'widgets_init', 'bajra_widgets_init' );

    if ( ! function_exists( 'bajra_fonts_url' ) ) :
    function bajra_fonts_url() {
        $fonts_url = '';
        $fonts     = array();
        $subsets   = 'latin,latin-ext';

        /* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
        if ( 'off' !== _x( 'on', 'Merriweather font: on or off', 'twentysixteen' ) ) {
            $fonts[] = 'Merriweather:400,700,900,400italic,700italic,900italic';
        }

        /* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
        if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'twentysixteen' ) ) {
            $fonts[] = 'Montserrat:400,700';
        }

        /* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
        if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'twentysixteen' ) ) {
            $fonts[] = 'Inconsolata:400';
        }

        if ( $fonts ) {
            $fonts_url = add_query_arg( array(
                'family' => urlencode( implode( '|', $fonts ) ),
                'subset' => urlencode( $subsets ),
            ), 'https://fonts.googleapis.com/css' );
        }

        return $fonts_url;
    }
    endif;

    /**
     * Handles JavaScript detection.
     *
     * Adds a `js` class to the root `<html>` element when JavaScript is detected.
     *
     * @since Twenty Sixteen 1.0
     */
    function bajra_javascript_detection() {
        echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
    }
    add_action( 'wp_head', 'bajra_javascript_detection', 0 );

?>