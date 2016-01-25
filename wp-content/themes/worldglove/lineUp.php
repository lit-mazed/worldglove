<?php
/*        
 Template Name:lineUp  
*/

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>ONLINE SHOP</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/lineUp.css" type="text/css">
<?php wp_head(); ?>
</head>
<body style="background:url(http://worldglove.localhost/wp-content/uploads/2016/01//bg.png) fixed  no-repeat left bottom;">
<div class="wrapper row1">   
  <header id="header" class="clear" style="background:transparent;">  
    <div id="hgroup">     
    </div>
    <nav>
      <ul>
          <?php $post_id = 613 ; 
          $queried_post = get_post($post_id); 
          echo $queried_post->post_content;?>            
      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear" >
    <div id="wrapper">
    	<div class="column set-1">
			<p><span class="bd"><a href="#">HOME</a><span> &gt; </span><a href="#">ONLINE SHOP</a><span> &gt;</span>&nbsp;MOIST SHOP 001</span></p>
		</div>
    <div class="column set-2"><p class="ar"><!-- BiND Cart Show tag #1-2-wg6986 start -->
      <script type="text/javascript">
      document.write("<a href=\"https://wg6986.shops.weblife.me/cart.html?last_access_external_url=" + document.URL + "\" style=\"border:none;background-color:transparent;\"><img src=\"http://shops-api.weblife.me/images/show/button2.png\" alt=\"カートを見る\" style=\"background:none;border:none;background-color:transparent;\" /></a>");
      </script><a href="https://wg6986.shops.weblife.me/cart.html?last_access_external_url=http://www.worldglove.com/online_shop/moist_s002.html" style="border:none;background-color:transparent;"></a></p>
      <!-- BiND Cart Show tag #1-2-wg6986 end -->
      </div>                                              
    </div>		
    <!-- content body -->
    <img src="<?php echo get_template_directory_uri(); ?>/images/lineUp.png" alt="">  
    <!-- main content -->
       <?php 
          if (have_posts()) :
              while (have_posts()) :
              the_post();
                the_content();
              endwhile;
          endif;
        ?>        
          <?php wp_footer(); ?>
      </body>
  </html>
                                    
         
      
         
 

