<?php
/**
 * Template Name: Página de Blog
 */
get_header(); // Esto incluye el encabezado del tema

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - Página de Blog</title>
    <!-- Cargar Bootstrap desde un CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php wp_head(); // Esto carga cualquier script o estilo añadido por plugins o el propio tema ?>
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Últimos Posts</h1>

        <?php
        // Consulta para obtener los posts
        $args = array(
            'post_type' => 'post', // Solo obtener posts
            'posts_per_page' => 10, // Número de posts a mostrar
            'paged' => get_query_var('paged') ? get_query_var('paged') : 1, // Paginación
        );

        // Ejecutar la consulta
        $the_query = new WP_Query($args);

        // Verificar si hay posts
        if ($the_query->have_posts()) :
            echo '<div class="row">'; // Contenedor para las tarjetas (cards)

            // Loop a través de los posts
            while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <?php if (has_post_thumbnail()) : // Verificar si el post tiene una imagen destacada ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top img-fluid" style="object-fit: cover; width:100%; height:250px;"alt="<?php the_title(); ?>"> <!-- Imagen destacada -->
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5> <!-- Título del post -->
                            <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p> <!-- Extracto del post -->

                            <!-- Botón para abrir el modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-<?php the_ID(); ?>">Leer más</button>
                        </div>
                    </div>
                </div>

                <!-- Modal con contenido completo del post -->
                <div class="modal fade" id="modal-<?php the_ID(); ?>" tabindex="-1" aria-labelledby="modalLabel-<?php the_ID(); ?>" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalLabel-<?php the_ID(); ?>"><?php the_title(); ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <?php the_content(); // Mostrar el contenido completo del post ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
            endwhile;

            echo '</div>'; // Cierre de la fila

            // Paginación
            echo '<div class="pagination justify-content-center mt-4">';
            echo paginate_links(array(
                'total' => $the_query->max_num_pages,
            ));
            echo '</div>';

        else :
            echo '<p>No hay posts disponibles.</p>';
        endif;

        // Restablecer la consulta global
        wp_reset_postdata();
        ?>

    </div> <!-- Cierre del contenedor -->

    <!-- Pie de página -->
    <?php get_footer(); // Esto incluye el pie de página del tema ?>

    <!-- Scripts necesarios para Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <?php wp_footer(); // Esto carga cualquier script o código añadido por plugins o el propio tema ?>

</body>
</html>
