<!-- <div class="aboutBackground"> -->
	<?php //index.php is the last resort template, if no other templates match ?>
	<?php get_header(); ?>
	
	<div class="main">
	  <div class="container">
	
	    <div class="content pressContent">
<?php $dreamBeanQuery = new WP_Query(array(
               // 'post_per_page' => 1,// if you want all its -1
               'post_type' => array( 'press' ),
               'post_per_page' => array(-1)
           )); ?> 
     
     
       <?php if($dreamBeanQuery-> have_posts()):?>
       <?php while($dreamBeanQuery->have_posts()): ?> 
        
       <?php $dreamBeanQuery->the_post(); ?>
       <?php $dreamBeanQuery->the_content(); ?> 
       
        <a class="blueProject" href="<?php the_permalink(); ?>">
                     <?php the_title(); ?>
         </a>
      
         <?php endwhile; ?>
         <?php wp_reset_postdata(); ?> 
                   <!-- this will end the and reset and go back to normal so you can go back to normal to your page -->
         <?php endif; ?>
	    </div> <!--/.content -->
	
	  </div> <!-- /.container -->
	</div> <!-- /.main -->
	
	<?php get_footer(); ?>
<!-- 	</div> /.background -->