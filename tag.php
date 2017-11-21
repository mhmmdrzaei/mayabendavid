<?php get_header(); ?>

<div class="main">
  <div class="container">
    	<?php  dynamic_sidebar( 'primary-widget-area' ); ?>
    <div class="content indexContent">
      <?php get_template_part( 'loop', 'tag' ); ?>
    </div> <!-- /.content -->
  </div><!-- /.container -->
</div><!-- /.main -->

<?php get_footer(); ?>