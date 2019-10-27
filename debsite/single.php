<?php get_header(); ?>
<!-- Navigation -->
  

  

  <section id="about" style="padding-bottom:0px">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="display-3"><?php
              if(have_posts()){
                the_post();
                the_title(); ?></h2>
          <p>Written by <?php  the_author(); ?>, on <?php echo get_the_date(); ?>, last modified on <?php echo the_modified_time('F d, Y'); ?> </p>
          <hr><br>
          <?php if(has_post_thumbnail()){
                    ?>
                    <img src="<?php the_post_thumbnail_url("post_size"); ?>" class="img-fluid">
                    
                    <?php
                } ?><br><br>
          <p class="lead">
             
              <?php
                the_content();
              ?>
          </p><br>
          <p style="text-align:center"><?php previous_post_link('%link', 'Previous', TRUE); ?>  | <?php next_post_link('%link','Next',TRUE); ?></p>
          <p><?php comment_form();
              } ?></p>
              
              <div style="width:100%;text-align:center;"><img style="height:190px" src="<?php echo get_template_directory_uri();?>/images/design.png" class="img-fluid"></div>
        </div>
      </div>
    </div>
  </section>

  

<?php get_footer(); ?>