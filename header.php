<?php ?>
<!-- 
YARR WE BE PIRATES

              |    |    |
             )_)  )_)  )_)
            )___))___))___)\
           )____)____)_____)\\
         _____|____|____|____\\\__
^^^^^^^^^\                   /^^^^^^^^^^^^^
  ^^^^^ ^^^^^^^^^^^^^^^^^^^^^
    ^^^^      ^^^^     ^^^    ^^
         ^^^^      ^^^
-->
<!doctype html>
<html lang="en">
  <head>
  <?php wp_head(); ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <title>Ahoy! Salty Sea Doggos!</title>
  </head>
  <body>
    <div class="container bg-dark navbar-container">
      <a class="navbar-brand float-left" href="<?php echo get_home_url(); ?>">
        <img width="190" class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/doggos-logo.png" />
      </a>
      <nav class="navbar navbar-expand-lg navbar-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse">
        <?php wp_nav_menu( array( 'theme_location' => 'header-nav', 'container' => 'ul', 'menu_class' => 'navbar-nav') ); ?>
    </div>
    </nav>
</div>



