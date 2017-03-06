<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
    <?php query_posts( 'tag=video' ); ?>
     <?php get_template_part( 'loop', 'index' );	?>

      
    </div> <!-- /,content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>