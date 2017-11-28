<?php get_header();  ?>

<div class="main">
  <div class="container cvContainer">
  	<div class="contactAll">
      
        

         
    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div class="performanceContent">
        <?php the_content(); ?>
          
        </div>
<div class="performanceAll">      
        <?php endwhile; // end the loop?>
        <?php while(has_sub_fields('performance_tag') ): ?>
          <?php 
  
          $term = get_sub_field('performance_field');
  
          if( $term ): ?>
          <a class="performanceLink" href="<?php echo get_term_link( $term ); ?>">
            <div class="performanceImg">
              <?php $image = get_sub_field('picture_performance');
                            if( !empty($image) ): ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                           
                            <?php endif; ?>
            </div>
  
  
            <?php echo $term->name; ?></a>
  
          <?php endif; ?>
      <?php endwhile;//end of performance tag ?>
  </div>


    </div> <!-- /,content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>