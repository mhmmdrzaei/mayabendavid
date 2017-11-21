<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content frontContent">
    	<?php  dynamic_sidebar( 'primary-widget-area' ); ?>
     <?php get_template_part( 'loop', 'performance' );	?>

      
    </div> <!-- /,content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>