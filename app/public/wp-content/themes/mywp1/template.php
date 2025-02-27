<?php
/* Template Name: Mi Plantilla Personalizada */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<?php get_header(); ?>

<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title(); ?></h1> <!-- Título de la página -->
                <div class="contenido">
                    <?php the_content(); ?> <!-- Contenido principal -->
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail( 'blog', array( 'class' => 'imagen-destacada img-fluid' ) ); ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endwhile; else : ?>
                <p>No se encontró contenido.</p> <!-- Mensaje si no hay contenido -->
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>

</body>
</html>
