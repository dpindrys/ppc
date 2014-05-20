<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php if ( is_category() ) {
      echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
    } elseif ( is_tag() ) {
      echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
    } elseif ( is_archive() ) {
      wp_title(''); echo ' Archive | '; bloginfo( 'name' );
    } elseif ( is_search() ) {
      echo 'Search for &quot;'.esc_html($s).'&quot; | '; bloginfo( 'name' );
    } elseif ( is_home() || is_front_page() ) {
      bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
    }  elseif ( is_404() ) {
      echo 'Error 404 Not Found | '; bloginfo( 'name' );
    } elseif ( is_single() ) {
      wp_title('');
    } else {
      echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
    } ?></title>
    
    <!--link rel="stylesheet" href="<?php bloginfo('siteurl'); ?>/includes/css/app.css" /-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/includes/css/app.css">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <script type="text/javascript" src="//use.typekit.net/efa7oev.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/includes/assets/img/icons/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/includes/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/includes/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/includes/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/includes/assets/img/icons/apple-touch-icon-precomposed.png">
    
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>


  <div class="off-canvas-wrap">
  <div class="inner-wrap">

<div>
  <nav class="tab-bar show-for-small-only">
  <div class="medium-8 columns">
    <a class="left-off-canvas-toggle"><section class="right-small menu-toggle-icon">
      MENU</a>
    </section>
    <section class="middle tab-bar-section">
      
      <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><h1 class="title"><?php bloginfo( 'name' ); ?></h1></a>

    </section>
  </nav>

  <aside class="left-off-canvas-menu">
    <?php foundationPress_mobile_off_canvas(); ?>
  </aside>
  
        <div class="top-bar-container contain-to-grid show-for-medium-up">
        <div class="white">
        <div class="row interior">
            <div class="logo">
              <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo('url'); ?>/wp-content/themes/foundation/includes/assets/logo-flush-right.png" class="logo"></a>
            </div>
            <div class="nav-wrap">
                
                <nav class="top-bar" data-topbar="">

              <!--
                    <ul class="title-area">
                        <li class="name">
                            <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                        </li>          
                    </ul>
                -->
                    <section class="top-bar-section">
                        <?php foundationPress_top_bar_l(); ?>
                        <?php foundationPress_top_bar_r(); ?>
                    </section>
                </nav>
                </div>
        </div></div></div>

<!--
<header class="row" role="banner">
  <div class="small-12 columns">
    <h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
    <h4 class="subheader"><?php bloginfo('description'); ?></h4>
    <hr/>
  </div>
</header>
-->
<div class="small-8 white show-for-small-only ">
<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><img class="logo-mobile" src="<?php bloginfo('url'); ?>/wp-content/themes/foundation/includes/assets/logo-mobile.png"></a></div>
<div class="search-bar">
  <div class="row collapse interior">
    <div class="small-9 medium-4 medium-offset-6 large-5 columns">
     <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
        <input type="text" size="18" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
      </label>
     </div>
     <div class="small-3 medium-2 large-1 columns search-button">
          <input type="submit" id="searchsubmit" value="Search" class="button postfix" />
    </div>
    </form>
</div>
</div>
</div>
<div class="contain-to-grid">
<section class="container" role="document">
  <div class="row full-width">