<!-- <div class="aboutBackground"> -->
	<?php //index.php is the last resort template, if no other templates match ?>
	<?php get_header(); ?>
	
	<div class="main">
	  <div class="container">
	
	    <div class="content frontContent">

	    		<?php get_template_part( 'loop', 'index' );	?>
	    </div> <!--/.content -->
	
	  </div> <!-- /.container -->
	</div> <!-- /.main -->
	
	<?php get_footer(); ?>
<!-- 	</div> /.background -->