<footer class="site-footer contenedor">
    <hr>
    <div class="contenido-footer">
        <?php
            // Definir el menú para el pie de página
            $args = array(
                'theme_location' => 'menu-principal', // Ubicación del menú
                'container' => 'nav',                  // El menú se envuelve en <nav>
                'container_class' => 'footer-principal  ms-auto' // Clases para el menú
            );
            wp_nav_menu($args);
        ?>

        <p class="copyright" style="color:green;">Todos los derechos reservados. <?php echo get_bloginfo('name') . " " . date(' M Y'); ?></p>
    </div>
</footer>

<?php wp_footer(); ?>
