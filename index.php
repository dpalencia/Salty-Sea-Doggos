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

  <h1 class="text-center"><?php the_title(); ?></h1>

  <?php 
    the_content();
    endwhile; endif; 
  ?>
    
</main>

<?php 
  get_footer();
?>