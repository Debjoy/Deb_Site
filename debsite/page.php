<?php get_header(); ?>
<!-- Navigation -->
  

  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1><?php wp_title(); ?></h1>
    </div>
  </header>

  <section id="about" style="padding-top:0px;padding-bottom:0px">
   
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
            <div style="width:100%;text-align:center;"><img style="height:190px" src="<?php echo get_template_directory_uri();?>/images/design.png" class="img-fluid"></div>
          <?php
              if(have_posts()){
                the_post();
                  if(has_post_thumbnail()){
                    ?>
                    <img src="<?php the_post_thumbnail_url("post_size"); ?>" class="img-fluid">
                    
                    <?php
                } ?><br><br>
          <p class="lead">
             
              <?php
                the_content();}
              ?>
          </p>
          <div style="width:100%;text-align:center;"><img style="height:190px" src="<?php echo get_template_directory_uri();?>/images/design.png" class="img-fluid"></div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>