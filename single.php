<?php get_header(); ?>

<div class="main">
  <div class="container">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h2 class="entry-title"><?php the_title(); ?></h2>


          <div class="entry-content">

          <!-- video -->
           <?php while( has_sub_fields('video_projects') ): ?>
           <div class="Vimeo">
             
               <?php the_sub_field('video_styling'); ?>
               <div class="embed-container">
                 <?php the_sub_field('embedded_link'); ?>
               </div>
               <p class="artistCaption"><?php the_sub_field('video_credits'); ?></p>
               
          
           </div>
           <?php endwhile;//end of vimeo ?>

            <div class="textContent">
              <?php the_content(); ?>
          
            </div>

            <?php while(has_sub_fields('file_uploader') ): ?>
            <div class="filepdf">
              <?php 
                  
                      $file = get_sub_field('the_file');
                  
                      if( $file ): ?>
                        
                        <a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?><?php the_sub_field('hyperlink_text'); ?></a>
                  
                      <?php endif; ?>
            </div>
          <?php endwhile;//end of CV PDF ?>

            <?php if( have_rows('images') ) : ?>
                               <ul class="bxslider">
                                   <?php while( have_rows('images') ) : the_row(); ?>
                                       <li>
                                           <?php $image = get_sub_field('image_works');
                                               if( !empty($image) ): ?>
                                                   <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                              
                                               <?php endif; ?>
                                       </li>
                                   <?php endwhile; ?>
                               </ul><!-- .bxslider -->
            <?php endif;  // end gallery repeater field?>


          
          </div><!-- .entry-content -->

        </div><!-- #post-## -->

        </div><!-- #nav-below -->

      <?php endwhile; // end of the loop. ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>