<?php get_header(); ?>
<!-- Navigation -->
  

  
    <header class="bg-primary text-white">
    <div class="container text-center">
      <h1> <i class="fa fa-hand-peace-o" aria-hidden="true"></i> To Blog =</h1>
      <p class="lead">To Connect + To Share + To Create + To Inspire</p>
    </div>
  </header>
  <section id="about" style="padding-top:110px">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto">
                <?php  while(have_posts()){
                            the_post();
                        ?>
               <div class="row">
                  <div class="col-md-12 col-xs-12">
                     <h3 class="display-4" style="font-size:40px"><?php the_title(); ?></h3>
                  
                     <div class="wrapper">
                        <div class="box"> <img style="float:left;margin-right:10px" width="200px" src="<?php
if ( has_post_thumbnail() ) {
    the_post_thumbnail_url("post_thumbnail"); 
}else echo "http://dota2essentials.com/template/img/news/newsdotaclient.jpg"?>"></div>
                        <p style="margin:5px"><?php the_excerpt();?></p><p>Posted: <?php echo the_date(); ?> by <?php the_author(); ?> </p>
                        <a   href="<?php the_permalink() ?>" class="btn btn-primary" style="float:right;margin-right:20px" role="button">Read more</a>
                     </div>
					  <hr>
                  </div>
				 
               </div><br>
               <?php } ?>
			   
			   
          
        </div>
        <div class="col-lg-2 mx-auto">
<?php get_sidebar(); ?>
          
        </div>
      </div>
    </div>
  </section>

  

<?php get_footer(); ?>