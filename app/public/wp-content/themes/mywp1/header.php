<?php wp_head(); ?>
<style>
    /* Estilos adicionales si es necesario */
    .navbar-nav li:nth-child(3) {
        border-bottom: 2px solid green;
    }

    .navbar-toggler {
        margin-left:320px;
    }
    

</style>
<nav class="menu-principal navbar navbar-expand-lg p-3">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="#">
        <img src="https://png.pngtree.com/png-clipart/20221017/original/pngtree-modern-laptop-green-screen-vector-png-image_8699685.png" alt="Logo" width="150" height="150">
    </a>

    <?php
    // Definir el menú a mostrar
    $args = array(
        'theme_location' => 'menu-principal', // Ubicación del menú
        'container'      => false,            // No envolver el menú en un contenedor
        'menu_class'     => 'navbar-nav ms-auto' // Clases de Bootstrap para menú de navegación
    );
    ?>
   <?php the_content(  ); ?>
    <div class="collapse navbar-collapse" id="navbarNav">
            <?php wp_nav_menu($args); ?>

    </div>
</nav>


<!--
<script type="text/javascript">
    alert('Funciona!!!'); // Verifica si el código JS está funcionando

    jQuery(document).ready(function($) {
        // Inicializa SlickNav en el menú con la clase 'menu-principal .menu'
        $('.menu').slicknav();
    });
</script>
-->

<?php wp_footer(); ?>
