<div class="contactBackground">
<?php get_header();  ?>
  
  <div class="main">
    <div class="container">
  
      <div class="content">
        <?php // Start the loop ?>
  
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  
                   <div class="emailPagesContact">
                      <a href="mailto:<?php the_field('email_pages'); ?>"><?php the_field('email_pages'); ?></a>
              </div>
          <div class="socialMediaAllContact">
            <?php while(has_sub_fields('social_media') ): ?>
    
          
            <div class="socialMediaPageContact">
            <a href="<?php the_sub_field('social_media_link'); ?>">
              <?php $image = get_sub_field('social_media_image');
                  if( !empty($image) ): ?>
                      <div class="socialMediaImageContact">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </div>
                 
                  <?php endif; ?>
                  <div class="socialMediaTitleContact">
                    <?php the_sub_field('social_media_title'); ?>
                  </div>
            </a>
            </div>
          
            <?php endwhile;//end of social media ?>
          </div>
        <?php endwhile; // end the loop?>
      </div> <!-- /,content -->
  
  
    </div> <!-- /.container -->
  </div> <!-- /.main -->
  
  <?php get_footer(); ?>
  </div> <!--/ background -->