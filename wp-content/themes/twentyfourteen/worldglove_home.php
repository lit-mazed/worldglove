<?php
/**
 * The Template Name:worldglove_home
 * 
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head><?php get_template_directory_uri(); ?>/
<title>HOME</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/worldglove_home.css" type="text/css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/nivo-slider.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/themes/default/default.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
</head>
<body>
<div class="wrapper row1">   
  <header id="header" class="clear">
    <div id="hgroup">     
    </div>
    <nav>
      <ul>
        <li><a href="#" id="active">HOME&nbsp;</a></li>
        <li><a href="#">TOPICS&nbsp;</a></li>
        <li><a href="#">PRODUCTS&nbsp;</a></li>
        <li><a href="company.html">WORLD GLOVE&nbsp;</a></li>        
        <li><a href="shoplist.html">SHOP LIST&nbsp;</a></li>
        <li><a href="manfacture.html" >MANUFACTURE&nbsp;</a></li>
        <li><a href="contact.html">CONTACT&nbsp;</a></li>
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
              <img src="<?php echo get_template_directory_uri(); ?>/images/1.png" />
              <img src="<?php echo get_template_directory_uri(); ?>/images/2.png" />
              <img src="<?php echo get_template_directory_uri(); ?>/images/3.png" />
              <img src="<?php echo get_template_directory_uri(); ?>/images/4.png" />
              <img src="<?php echo get_template_directory_uri(); ?>/images/5.png" />
            </div>              
        </div>                
    </div>      
  <div class="wrapper row3">
    <footer id="footer" class="clear">
      <div class="line"></div>      
      <p class="fl_left"> Copyright World Glove Co Ltd. All Rights Reserved.</p>   
    </footer>
  </div>
  <script type="text/javascript">
      $(window).load(function() {
          $('#slider').nivoSlider();
      });
    </script>
</body>
</html>
