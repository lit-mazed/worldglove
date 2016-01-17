<?php
/*
Template Name:Worldglove
*/

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>WORLDGLOVE</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/nivo-slider.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/themes/default/default.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/worldglove.css" type="text/css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<?php wp_head(); ?>
</head>
<body>
<div class="wrapper row1">   
  <header id="header" class="clear">   
    <div id="hgroup">     
    </div>
    <nav>
      <ul>
          <?php $post_id = 326 ; 
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
              <img src="<?php echo get_template_directory_uri(); ?>/images/img_0091.png" />
              <img src="<?php echo get_template_directory_uri(); ?>/images/img_0088_2.png" />              
            </div>              
        </div>                
    </div>      
     <aside id="left_column">
      <h2 class="title"></h2>
      <img src="<?php echo get_template_directory_uri(); ?>/images/company_sign.png" alt="">                    
      <!-- aside -->
    </aside>
      <?php 

          if(have_posts()){
            while(have_posts()){
              the_post(); ?>
              <div class="post-area">
                <?php the_content(); ?>
              </div>
       <?php     }
          }else{
            echo "No post here";
          }

       ?>

 <?php get_footer(); ?>
