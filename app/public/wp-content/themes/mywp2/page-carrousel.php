<?php
/**
 * Template Name: Página de Carousel
 */
get_header(); // Esto incluye el encabezado del tema
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - Carousel de Posts</title>
    <!-- Cargar Bootstrap desde un CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Últimos Posts</h1>

        <?php
        // Consulta para obtener los posts
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 10, // Número de posts a mostrar
            'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
        );

        $the_query = new WP_Query($args);

        if ($the_query->have_posts()) :
        ?>

        <div id="postCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicadores dinámicos -->
            <ol class="carousel-indicators">
                <?php
                $slide_index = 0;
                while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                    <li data-bs-target="#postCarousel" data-bs-slide-to="<?php echo $slide_index; ?>" class="<?php echo ($slide_index == 0) ? 'active' : ''; ?>"></li>
                <?php
                    $slide_index++;
                endwhile;
                ?>
            </ol>

            <!-- Contenedor de diapositivas -->
            <div class="carousel-inner">
                <?php
                $slide_index = 0;
                while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                    <div class="carousel-item <?php echo ($slide_index == 0) ? 'active' : ''; ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('large'); ?>" class="d-block w-100" style="height: 600px; object-fit: cover;  " alt="<?php the_title(); ?>">
                        <?php else : ?>
                            <img src="https://via.placeholder.com/900x500" class="d-block w-100" alt="Imagen por defecto">
                        <?php endif; ?>
                        <div class="carousel-caption d-md-block bg-dark bg-opacity-50 p-3 rounded">
                            <h3><a href="<?php the_permalink(); ?>" class="text-white"><?php the_title(); ?></a></h3>
                            <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                        </div>
                    </div>
                <?php
                    $slide_index++;
                endwhile;
                ?>
            </div>

            <!-- Controles de navegación -->
            <button class="carousel-control-prev" type="button" data-bs-target="#postCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#postCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>

        <?php
        // Paginación
        echo '<div class="pagination justify-content-center mt-4">';
        echo paginate_links(array(
            'total' => $the_query->max_num_pages,
        ));
        echo '</div>';

        else :
            echo '<p>No hay posts disponibles.</p>';
        endif;

        wp_reset_postdata();
        ?>

    </div> <!-- Cierre del contenedor -->

    <!-- Pie de página -->
    <?php get_footer(); ?>

    <!-- Scripts necesarios para Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <?php wp_footer(); ?>

</body>
</html>
