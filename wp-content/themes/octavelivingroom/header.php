<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<!--[if IE]>
<meta http-equiv="Page-Enter" content="blendTrans(duration=0)" />
<meta http-equiv="Page-Exit" content="blendTrans(duration=0)" />
<![endif]-->

<head>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>
        <?php if (function_exists('is_tag') && is_tag()) {
            single_tag_title('Tag Archive for &quot;'); echo '&quot; - ';
            } elseif (is_archive()) {
            wp_title(''); echo ' Archive - ';
            } elseif (is_search()) {
            echo 'Search for &quot;'.wp_specialchars($s).'&quot; - ';
            } elseif (!(is_404()) && (is_single()) || (is_page())) {
            wp_title(''); echo ' - ';
            } elseif (is_404()) {
            echo 'Not Found - ';
            }
            if (is_home()) {
            bloginfo('name'); echo ' - '; bloginfo('description');
            } else {
            bloginfo('name');
            }
            if ($paged > 1) {
            echo ' - page '. $paged;
        } ?>
    </title>


    <!-- CSS 
    ================================================== -->
    <link rel='stylesheet' href='<?php bloginfo("stylesheet_url"); ?>' type='text/css' media='screen' />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/ionicons.css">
        
    <!-- JS 
    ================================================== -->
    <?php wp_enqueue_script('jquery'); ?>
    
    <!-- Load Custom JS script
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/myscript.js"></script>-->

    <!-- TYPOGRAPHY
    ================================================== -->  
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,400italic,700,300' rel='stylesheet' type='text/css'>  
        
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>assets/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>assets/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>assets/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>assets/favicon/apple-touch-icon-114x114.png">

    <!-- 
    This script enables structural HTML5 elements in old IE.
    http://code.google.com/p/html5shim/
    -->
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    
    <div class="contain-to-grid fixed main-nav">
        
        <nav class="top-bar" data-topbar>
          <ul class="title-area">
            <li class="name">
              <h1><a href="<?php echo site_url(); ?>">Octave Living Room</a></h1>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span></span> </a></li>
          </ul>

        <?php wp_nav_menu(
            array(
                'container'       => 'nav',
                'container_class'    => 'top-bar',
                'menu_class'    => 'title-area',
                'depth' => '1'
            )
        ); ?>

          <!-- <section class="top-bar-section">
            <ul class="right">
                <li class="divider"></li>
                <li class=""><a href="#">classes</a></li>
                <li class="divider"></li>
                <li class=""><a href="#">workshops</a></li>
                <li class="divider show-for-medium-up"></li>
            </ul>
        </section> -->
      </nav>    
    </div>