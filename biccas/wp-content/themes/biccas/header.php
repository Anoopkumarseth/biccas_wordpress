<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta <?php bloginfo( 'charset' ); ?>>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700&display=swap" rel="stylesheet">
  <link href="<?php bloginfo('template_url');?>/lib/swiper/css/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url');?>/css/theme.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="page_wrapper">
<?php
		wp_body_open();
		?>
<header class="site-header siteHeader">
    
    <nav class="site-navbar">
        <div class="blurred_circle"></div>
      <div class="nav-container">
        <div class="site-logo">

        <?php
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
          
          if ( has_custom_logo() ) {
              echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
          } else {
              echo '<a href="'.  home_url()  .'">' . get_bloginfo('name') . '</a>';
          }
        ?>
          
        </div>
       

        <?php
        wp_nav_menu(
          array(
            'theme_location'  => 'primary',
            'menu_class'      => 'menu-wrapper',
            'container_class' => 'primary-menu-container',
            'items_wrap'      => '<ul id="primary-menu-list" class="%2$s primary-menu primaryMenu">%3$s</ul>',
            'fallback_cb'     => false,
          )
        );
        ?>
        <ul class="user_actions">
          <li>
            <a href="#" class="">
              Login
            </a>
          </li>
          <li>
            <a href="#" class="btn">
              Signup
            </a>
          </li>
        </ul>
        <button class="toggle togglePrimary">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>

    </nav>
  </header>
