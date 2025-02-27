<style>
</style>


<?php wp_head(); ?>
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom border-dark bg-secondary">
<?php
    // Definir el menú a mostrar
    $args = array(
        'theme_location' => 'menu-principal1', // Ubicación del menú
        'container'      => false,            // No envolver el menú en un contenedor
        'menu_class'     => 'navbar ms-auto menu1 text-light' // Clases de Bootstrap para menú de navegación
    );
    ?>

      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-light text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Simple header</span>
      </a>
    
      <?php wp_nav_menu($args); ?>
      
     
    </header>