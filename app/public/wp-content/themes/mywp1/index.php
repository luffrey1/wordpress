<?php get_header(); ?>

<h1>Hola Wp - index1</h1>
<?php
   while( have_posts(  )): the_post(  ); //Extrae el atributo del post actual
?>

   <h1><?php the_title(  ); ?></h1> //Accede al contenido
   <?php the_content(  ); ?>
   <?php endwhile; ?>
