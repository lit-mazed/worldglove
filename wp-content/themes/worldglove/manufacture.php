<?php
/*
Template Name:Manufacture
*/

 ?>
 <?php get_header(); ?>
<div class="wrapper row1">   
  <header id="header" class="clear">  
    <div id="hgroup">     
    </div>
    <nav>
      <ul>
        <?php $post_id = 331 ; 
          $queried_post = get_post($post_id); 
          echo $queried_post->post_content;?>          
      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <div id="wrapper">        
        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
	            <img src="<?php echo get_template_directory_uri(); ?>/images/94a0.jpg" />
	            <img src="<?php echo get_template_directory_uri(); ?>/images/uuu_06152.jpg" />	          
            </div>              
        </div>                
    </div>	    
    <aside id="left_column">
      <h2 class="title"></h2>
      <img src="<?php echo get_template_directory_uri(); ?>/images/manfacture_sign.png" alt="">                    
      <!-- aside -->
    </aside>
    <!-- main content --> 
    <?php 
          if (have_posts()) :
              while (have_posts()) :
              the_post();
                the_content();
              endwhile;
          endif;
        ?>  
<?php get_footer(); ?>