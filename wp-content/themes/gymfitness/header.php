<!DOCTYPE html>
<!--  TODO el lenguaje dinamicamente al instalado -->
<html <?= language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?= wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="contenedor barra-navegacion">

      <div class="logo">
        <!-- TODO  traer la ruta dinamicamente -->
        <a href="<?php echo site_url('/'); ?>">
          <img src="<?= get_template_directory_uri(); ?>/img/logo.svg" alt="logotipo">
        </a>

      </div>
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

    </div>
  </header>