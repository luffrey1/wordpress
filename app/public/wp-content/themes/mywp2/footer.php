<style>
    
</style>

<?php wp_footer(); ?>
<?php
    // Definir los menús a mostrar
    $args = array(
        'theme_location' => 'menu-principal1', // Ubicación del menú
        'container'      => false,             // No envolver el menú en un contenedor
        'menu_class'     => 'navbar-nav menu2'  // Clases de Bootstrap para menú de navegación
    );
    $args1 = array(
        'theme_location' => 'menu-principal2', // Ubicación del menú
        'container'      => false,             // No envolver el menú en un contenedor
        'menu_class'     => 'navbar-nav menu2'  // Clases de Bootstrap para menú de navegación
    );
    $args2 = array(
        'theme_location' => 'menu-principal3', // Ubicación del menú
        'container'      => false,             // No envolver el menú en un contenedor
        'menu_class'     => 'navbar-nav menu2'  // Clases de Bootstrap para menú de navegación
    );
    ?>


    <!-- Footer -->
    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5  border-top mt-auto bg-secondary">
        <div class="col mb-3">
            <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <p class="text-body-secondary">© 2024</p>
        </div>

        <div class="col mb-3">
            <!-- Espacio vacío para contenido adicional si es necesario -->
        </div>

        <div class="col mb-3">
            <h5>Section</h5>
            <?php wp_nav_menu($args); ?>
        </div>

        <div class="col mb-3">
            <h5>Section</h5>
            <?php wp_nav_menu($args1); ?>
        </div>

        <div class="col mb-3">
            <h5>Section</h5>
            <?php wp_nav_menu($args2); ?>
        </div>
    </footer>
</div>
