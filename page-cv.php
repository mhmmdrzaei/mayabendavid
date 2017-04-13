<?php get_header();  ?>

<div class="main">
  <div class="container cvContainer">
  	<div class="socialMediaAll">
      <?php while(has_sub_fields('social_media') ): ?>
      
        
          <div class="socialMediaPage">
          <a href="<?php the_sub_field('social_media_link'); ?>">
            <?php $image = get_sub_field('social_media_image');
                if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
               
                <?php endif; ?>
                <?php the_sub_field('social_media_title'); ?>
          </a>
          </div>
        
        <?php endwhile;//end of social media ?>
      </div>

	  <?php while(has_sub_fields('cv_downloader') ): ?>
	  <div class="cvpdf">
	    <?php 
	        
	            $file = get_sub_field('cv_file');
	        
	            if( $file ): ?>
	              
	              <a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?><?php the_sub_field('hyperlink_text_xo'); ?></a>
	        
	            <?php endif; ?>
	  </div>
	<?php endwhile;//end of CV PDF ?>


    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>