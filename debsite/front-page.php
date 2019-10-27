<?php get_header(); ?>
<!-- Navigation -->
  

  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>Welcome to Deb Site <i class="fa fa-hand-peace-o" aria-hidden="true"></i></h1>
      <p class="lead">A landing page template freshly redesigned for Wordpress</p>
    </div>
  </header>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
            <div style="text-align:center" ><h2 class="display-4">About this page</h2></div><br>
          <p class="lead">This is a great place to talk about your webpage. This template is purposefully unstyled so you can use it as a boilerplate or starting point for you own landing page designs! This template features:</p>
          <ul>
            <li>Feature one is great, so great that you can't even imagine</li>
            <li>Feature two is perfect for everyting, you can do anything</li>
            <li>Feature three is for developers where you can do anything like feature two</li>
            <li>Minimal custom CSS so you are free to explore your own unique design options</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  
  <section style="padding-top:110px" class="bg-light">
     <div class="container">
         <div style="text-align:center" ><h2 class="display-4">Posts</h2></div><br>
          <div class="row" style="text-align:center;">
          <?php 
              $args=array(
                'post-type' => 'post',
                'category_name'=>'Home Page'
              );
              $homepost=new WP_Query($args);
              ?>
            <?php 
              while($homepost->have_posts()){
                  $homepost->the_post();
              
              ?>
        <div class="col-md-4 mx-auto" style="margin-top:10px" >
          <div class="card" >
              <img src="<?php the_post_thumbnail_url("post_thumbnail"); ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php the_title(); ?></h5>
                <p class="card-text"><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-dark">Read </a>
              </div>
            </div>
        </div><?php }  ?>
        
      </div>
        </div>
  </section>

  <section id="services" >
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
            <div style="text-align:center" ><h2 class="display-4">Services we offer</h2></div><br>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
            <div style="text-align:center" ><h2 class="display-4">Contact us</h2></div><br>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>