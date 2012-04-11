<?php get_header(); ?>
 <!-- <h1><?php printf( __( 'Archiv: %s', 'twentyten' ), '' . single_cat_title( '', false ) . '' ); ?></h1> -->
<div class="section content">
  <div class="row">
    <div class="content-primary">
      <div class="content-header">
          <div class="symbolbild"> 
              <img src="<?php echo get_bloginfo('template_url'); ?>/images/tags-cats-suche.jpg" alt="" width="640" height="240" >
               <div class="caption">  
                   <h2><?php printf( __( 'Archiv: %s', 'twentyten' ), '' . single_cat_title( '', false ) . '' ); ?></h2>
               </div>   
           </div>   
      </div>
        <div class="skin">
            <?php get_template_part( 'loop', 'category' );?>
       </div>
    </div>

    <div class="content-aside">
      <div class="skin">          
        <?php 
       if ( has_nav_menu( 'primary' ) ) {
            wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary', 'walker'  => new My_Walker_Nav_Menu()) );      
        } else { 
        ?>
          <ul class="menu">
              <?php  wp_page_menu( ); ?>
          </ul>
         <?php } ?>
         <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
