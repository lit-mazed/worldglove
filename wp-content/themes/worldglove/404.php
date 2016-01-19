<?php
/*
Template Name:404 
*/

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php the_title(); ?></title>
	<style type="text/css">
		.object{
			margin:0 25%;
		}
		.object-1{
			margin:0 43%;
		}
	</style>
</head>
<body>
	<div class="object">
		<img src="<?php echo get_template_directory_uri(); ?>/images/404.gif" alt="" align="center"><br>		
	</div>
	<div class="object-1">
		<a href="http://bindcloud.jp/"><img src="<?php echo get_template_directory_uri(); ?>/images/help_bind_cld.png" alt=""></a><br>
		<a href="http://www.digitalstage.jp/weblife/"><img src="<?php echo get_template_directory_uri(); ?>/images/help_wls.png" alt=""></a>
	</div>	
</body>
</html>