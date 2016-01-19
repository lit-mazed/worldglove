<?php
/*
Template Name:002
*/

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>002 Light/B</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/002.css" type="text/css">
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
        <li><a href="http://worldglove.localhost/">HOME&nbsp;</a></li>
        <li><a href="http://worldglove.localhost/worldgolve/topics">TOPICS&nbsp;</a></li>
        <li><a href="product">PRODUCTS&nbsp;</a></li>
        <li><a href="http://worldglove.localhost/worldgolve/">WORLD GLOVE&nbsp;</a></li>        
        <li><a href="http://worldglove.localhost/shoplist/" >SHOP LIST&nbsp;</a></li>
        <li><a href="http://worldglove.localhost/manufacture/" >MANUFACTURE&nbsp;</a></li>
        <li><a href="#">CONTACT&nbsp;</a></li>
        <li><a href="#">ONLINE SHOP&nbsp;</a></li>
        <li><a href="https://www.facebook.com/WorldGlove" target="_blank">FACEBOOK&nbsp;</a></li>        
      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">        
  <div id="container" class="clear">    
    <aside id="left_column">
      <h2 class="title"></h2>
      <img src="<?php echo get_template_directory_uri(); ?>/images/product_sign_1.png" alt="">                    
      <!-- aside -->
      <div class="menuv">
            <nav>
                <ul>
                    <li class="li1"><a href="../products/index.html" data-mypid="136517" class="mn1 cr">∵  Line UP</a></li>
                    <li class="li1"><a href="＃" class="mn1">∵  Moist Coat®</a>
                        <ul>
                            <li class="li2"><a href="../products/001.html" data-pid="136518" class="mn2">・ 001 Standard</a></li>
                            <li class="li2"><a href="../products/004.html" data-pid="136522" class="mn2">・ 004 Touch</a></li>
                            <li class="li2"><a href="../products/what.html" data-pid="136519" class="mn2">・ About Moist Coat®</a></li>
                        </ul>
                    </li>
                    <li class="li1"><a href="＃" class="mn1">∵  Moist Coat® Light</a>
                        <ul>
                            <li class="li2"><a href="../products/002.html" data-pid="136520" class="mn2">・ 002 Light/B</a></li>
                            <li class="li2"><a href="../products/003.html" data-pid="136521" class="mn2">・ 003 Light/W</a></li>
                        </ul>
                    </li>
                    <li class="li1"><a href="../products/touch.html" data-pid="136524" class="mn1">∵  Touch Finger®</a></li>
                    <li class="li1"><a href="../products/ac021.html" data-pid="136525" class="mn1">∵  Arquitect Cool 021</a></li>
                    <li class="li1"><a href="../products/arqui_022.html" data-pid="273777" class="mn1">∵  Arquitect Cool 022</a></li>
                    <li class="li1"><a href="../products/apewalk.html" data-pid="136526" class="mn1">∵  Apewalk 5</a></li>
                    <li class="li1"><a href="../products/maxi.html" data-pid="136527" class="mn1">∵  MaxiCool</a></li>
                </ul>
            </nav>
        </div>
    </aside>
  <div id="content">
      <div class="bmc"> 
            <span>||　002 Light/B</span><span ><a href=""></a><span><a href="" class="bmc-r">この商品を購入する<img src="<?php echo get_template_directory_uri(); ?>/images/square_wht_right.png" alt="" align="right"></a>   
            
            <?php while(have_posts()):the_post(); ?>
                <table class="table"> <?php the_content(); ?></table>           
            <?php endwhile; ?>    
            <br>
            
            <?php while(have_posts()):the_post(); ?>
                <div class="column set-1"><?php the_content(); ?></div>                    
            <?php endwhile; ?>

             <table class="table">
                <?php while(have_posts()):the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; ?>
            </table><br>
            <span>
            
            <a href="">この商品を購入する<img src="<?php echo get_template_directory_uri(); ?>/images/square_wht_right.png" alt=""></a>            
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/1_ic_linktop.png" align="right"></a>                
            </span>
        </div>
        </article>                            
        <p class="fl_right"><img src="<?php echo get_template_directory_uri(); ?>/images/footer_img.png" width="165" height="23" alt=""></p>  
          </footer>
        </article>

      </div>
      <!-- / content body -->     
    </div>
  </div>      
     
 <?php get_footer(); ?>
