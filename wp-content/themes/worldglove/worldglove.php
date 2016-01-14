<?php
/*
Template Name:Worldglove
*/

 ?>
 <?php get_header(); ?>

<div class="wrapper row1">   
  <header id="header" class="clear">   
    <div id="hgroup">     
    </div>
    <nav>
      <ul>
        <li><a href="http://worldglove.localhost/">HOME&nbsp;</a></li>
        <li><a href="#">TOPICS&nbsp;</a></li>
        <li><a href="#">PRODUCTS&nbsp;</a></li>
        <li><a href="http://worldglove.localhost/worldgolve/" id="active">WORLD GLOVE&nbsp;</a></li>        
        <li><a href="http://worldglove.localhost/shoplist/">SHOP LIST&nbsp;</a></li>
        <li><a href="http://worldglove.localhost/manufacture/" >MANUFACTURE&nbsp;</a></li>
        <li><a href="contact.html">CONTACT&nbsp;</a></li>
        <li><a href="contact.html">ONLINE SHOP&nbsp;</a></li>
        <li><a href="https://www.facebook.com/WorldGlove" target="_blank">FACEBOOK&nbsp;</a></li>        
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
