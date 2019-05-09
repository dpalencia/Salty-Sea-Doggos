<?php 
/* Generic template file.
* Let's try out this loop
*/
get_header();

?>

<main class="container parchment mt-3 mb-4">
  <?php if (have_posts()) : while(have_posts()) :  the_post(); 
  // This iterates the post index in the loop 
  // Using alternative syntax for if and while.  
  ?>

  <h1 class="text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
  <?php 
    the_post_thumbnail( 'post-thumbnail', array('class' => 'img-fluid'));
    the_content();
   ?>
   <a href="<?php the_permalink(); ?>">Read More</a>
  <?php
    endwhile; 
    endif; 
  ?>
    
</main>

<?php 
  get_footer();
?>