<?php

function gymfitness_lista_clases($cantidad = -1)
{
?>
  <ul class="listado-grid">
    <!--  TODO consulta personalizada -->
    <?php
    $args = array(
      'post_type' => 'gymfitness_clases',
      'posts_per_page' => $cantidad
    );
    $clases = new WP_Query($args);

    //TODO recoremos la consulta
    while ($clases->have_posts()) {
      $clases->the_post();
    ?>

      <li class="card">

        <?= the_post_thumbnail(); ?>

        <div class="contenido">
          <a href="<?= the_permalink(); ?>">
            <h3> <?= the_title(); ?></h3>
          </a>

          <?php
          $hora_inicio = get_field('hora_inicio');
          $hora_fin = get_field('hora_fin');
          ?>
          <p><?= the_field('dias_clase'); ?> - <?= $hora_inicio . " a " . $hora_fin; ?></p>
        </div>

      </li>
      <!-- TODO si no los enlaces no cargan ir ajustes y enlaces pernanente  y guardar
              eso recargara los htacess -->

    <?php
    }
    //TODO resetear la consulta
    wp_reset_postdata();
    ?>

  </ul>
<?php

}
