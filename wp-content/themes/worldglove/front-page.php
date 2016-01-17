<?php get_header();    ?>
<div class="wrapper row1">   
  <header id="header" class="clear">
   <p class="fl_right"><img src="<?php echo get_template_directory_uri(); ?>/images/footer_img.png" width="165" height="23" alt=""></p><br>  
    <div id="hgroup">     
    </div>
    <nav>
      <ul>
        <ul>
          <?php $post_id = 341 ; 
          $queried_post = get_post($post_id); 
          echo $queried_post->post_content;?>            
      </ul> 
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
	            <img src="<?php echo get_template_directory_uri(); ?>/images/1.png" />
	            <img src="<?php echo get_template_directory_uri(); ?>/images/2.png" />
	            <img src="<?php echo get_template_directory_uri(); ?>/images/3.png" />
	            <img src="<?php echo get_template_directory_uri(); ?>/images/4.png" />
	            <img src="<?php echo get_template_directory_uri(); ?>/images/5.png" />
            </div>              
        </div>                
    </div>	    

<?php get_footer(); ?>