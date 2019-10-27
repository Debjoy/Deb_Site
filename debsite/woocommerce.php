<?php defined( 'ABSPATH' ) || exit;

get_header( 'shop' ); ?>
<!-- Navigation -->
  

  
    <header class="bg-primary text-white">
    <div class="container text-center">
     <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
      <h1><i class="fa fa-gamepad" aria-hidden="true"></i> <?php woocommerce_page_title(); ?></h1>
      <p id="lead"><?php do_action( 'woocommerce_archive_description' ); ?></p>
     
      <?php else : ?>
      <h1> <i class="fa fa-hand-peace-o" aria-hidden="true"></i>Product</h1>
      <?php endif; ?>
    </div>
  </header>
  <section id="about" style="padding-top:110px">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto">
                
               <div class="row">
                  <div class="col-md-12 col-xs-12 woocommerce">
                     <?php woocommerce_content(); ?>
                  </div>
				 
               </div><br>
               
			   
			   
          
        </div>
        <div class="col-lg-2 mx-auto">
<?php do_action( 'woocommerce_sidebar' ); ?>
          
        </div>
      </div>
    </div>
  </section>

  

<?php 
get_footer( 'shop' );?>