
  <?php get_header();  ?>
  
  <div class="main">
    <div class="container">
  
      <div class="content">
        <div class="contactAll">
          <div class="emailPages">
                      <a href="mailto:<?php the_field('email_pages'); ?>"><?php the_field('email_pages'); ?></a>
              </div>
              <div class="socialMediaAllCV">
                <?php while(has_sub_fields('social_media') ): ?>
                
          
                    <div class="socialMediaPageCV">
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
        </div>
        <div class="aboutContent">
          <?php // Start the loop ?>
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
              <?php the_post_thumbnail( 'large' ) ?> 
            <div class="aboutContentText">
            <?php the_content(); ?>
              
            </div>
          
          <?php endwhile; // end the loop?>

      </div> <!-- /,content -->
  
  
    </div> <!-- /.container -->
  </div> <!-- /.main -->
  
  <?php get_footer(); ?>
