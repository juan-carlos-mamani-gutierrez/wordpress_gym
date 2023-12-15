<footer class="footer contenedor">
    <hr>

    <div class="contenido-footer">

        <?php
        // TODO menu
        $args = array(
            /* TODO  eligimos nuestro menu de functions */
            'theme_location' => 'menu-principal',
            /* TODO cambiamos la estructura de div a nav */
            'container' => 'nav',
            /* TODO  le ponemos una clase */
            'container_class' => 'menu-principal'
        );
        wp_nav_menu($args);

        ?>
        <p class="copyright">Todos los derechos reservados. <?= get_bloginfo('name'); ?> <?= date('Y'); ?>
        </p>
    </div>

    <!-- TODO funcion internar no confundir get_footer -->
    <?= wp_footer();?>    
</footer>

</body>

</html>