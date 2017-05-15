<?php get_header();  ?>

<div class="main">
  <div class="container cvContainer">
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

        <div class="contentCvMain">
          <?php the_post_thumbnail( 'large' ) ?> 
        <div class="cvText"><?php the_content(); ?></div>
           </div>

      <?php endwhile; // end the loop?>

       <?php while(has_sub_fields('main_header') ): ?>
      
        <div class="sub_header_cv"><?php the_sub_field('sub_header_cv'); ?></div>
        <?php while(has_sub_fields('cv_events') ): ?> 
          <div class="year_cv_cv"><?php the_sub_field('year_cv_cv'); ?></div>
        <div class="cv_events">
          <div class="context_title_cv"><?php the_sub_field('context_title_cv'); ?></div>
          <div class="location_cv"><?php the_sub_field('location_cv'); ?></div>
        </div>
        <div class="link_cv"><a href="<?php the_sub_field('link_cv'); ?>"><?php the_sub_field('link_cv'); ?></a></div>
        <?php endwhile;//cv event ?>
          <div class="socialMediaPageCV">
          <a href="<?php the_sub_field('social_media_link'); ?>">
            <?php $image = get_sub_field('social_media_image');
                if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
               
                <?php endif; ?>
                <?php the_sub_field('social_media_title'); ?>
          </a>
          </div>
        
        <?php endwhile;//end of main header ?>
    </div> <!-- /,content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>