<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title><?php bloginfo('name'); ?></title>
<meta charset="UTF-8">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css">
<?php wp_head(); ?>
</head>
<div class="wrapper row1">
  <?php 
          if (have_posts()) :
              while (have_posts()) :
              the_post();
                the_content();
              endwhile;
          endif;
        ?>  
</div>
<?php get_footer(); ?>

	



		 

