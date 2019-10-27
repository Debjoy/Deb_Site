<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo get_bloginfo( 'name' ); ?> </title>
  <?php wp_head(); ?>

</head>
<body id="page-top">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="<?php echo site_url("");?>"><?php echo get_bloginfo( 'name' ); ?> <i class="fa fa-hand-peace-o" aria-hidden="true"></i></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo site_url("");?>/#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo site_url("");?>/#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo site_url("");?>/#contact">Contact</a>
          </li>
          <?php 
            class Walker_Quickstart_Menu extends Walker {

                // Tell Walker where to inherit it's parent and id values
                var $db_fields = array(
                    'parent' => 'menu_item_parent', 
                    'id'     => 'db_id' 
                );

                /**
                 * At the start of each element, output a <li> and <a> tag structure.
                 * 
                 * Note: Menu objects include url and title properties, so we will use those.
                 */
                
                
                
                function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
                    $output .= sprintf( "\n<li class='nav-item'><a class='nav-link js-scroll-trigger' href='%s'%s>%s</a></li>\n",
                        $item->url,
                        ( $item->object_id === get_the_ID() ) ? ' class="current"' : '',
                        $item->title
                    );
                }

            }
            echo wp_nav_menu(
                array(
                    'theme-location'=>'top-menu',
                    'container'=>false,
                    'echo'=>false,
                    'items_wrap' => '%3$s',
                    'walker'=>new Walker_Quickstart_Menu()
                )
            );
            ?>
          <form class="form-inline" action="/" method="get">
             <button class="btn btn-outline-light " id="searchButton" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
              <input class="form-control bg-primary" type="search" id="searchInput" name="s" placeholder="Search" aria-label="Search" required>
              
            </form>
      
        
        </ul>
      </div>
    </div>
  </nav>