<!DOCTYPE html>

<html>

  <head>
    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>
  </head>


  <body <?php body_class(); ?>>

    <!-- <?php include_once("analyticstracking.php") ?> -->
    <!-- call GA - add GA JS file-->

    <div class="page-container">


    <!--  SITE HEADER -->
    <!-- ================================================================ -->
    <header>
        <div class="header-content-container">
          <div class="header-outer-inner">
            <div class="header-inner">

              <div class="header-logo">

                <a href="<?php echo esc_url(home_url("/"))?>">
                  <img src="<?= get_template_directory_uri()?>/assets/header-logo-placeholder-45x45.png" alt="<?php echo esc_attr(get_bloginfo( 'name' )) ?>"/>
                </a>

              </div>

              <div class="header-info">
                <div class="header-info-name">
                  Michael Ware | Painter &amp; Decorator
                </div>

                <div class="header-info-number">
                   T: 01536 671969 | M: 07411 723237
                </div>

              </div>


              <nav>
                <div class="nav-container">

                  <!-- menu icon, displayed on small screens -->
                    <div class="menu-sm-icon">
                      <img class="menu-sm-icon-open" src="<?= get_template_directory_uri()?>/assets/menu-icon-open.svg" alt="<?php echo esc_attr(get_bloginfo( 'name' )) ?>"/>
                    </div>


                    <?php
                      $defaults = array(
                        'container' => false,
                        'theme_location' => 'primary-menu', //tells wp where menu lives
                        'menu_class' => 'nav-large-screen'
                      );

                      wp_nav_menu( $defaults );
                    ?>



                  <!-- modal box menu, displayed when user clicks on menu icon on small screens -->
                    <div class="nav-modal">
                    <div class="nav-modal-inner">
                      <div class="menu-sm-icon">
                        <img class="menu-sm-icon-close" src="<?= get_template_directory_uri()?>/assets/menu-icon-close.svg" alt="<?php echo esc_attr(get_bloginfo( 'name' )) ?>"/>
                      </div>

                      <!-- Displays primary navigation -->
                      <?php
                        $defaults = array(
                          'container' => false,
                          'theme_location' => 'primary-menu', //tells wp where menu lives
                          // 'menu_class' => 'nav-small-screen'
                        );

                        wp_nav_menu( $defaults );
                      ?>
                    </div>
                    </div>



                </div>
              </nav>

            </div>
          </div>
        </div>
    </header>
