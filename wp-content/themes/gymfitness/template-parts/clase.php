<?php
// TODO  loop de contenido

while (have_posts()) : the_post();
    the_title('<h1 class="text-center text-primary">', '</h1>');

    //TODO si quieres anadir una clase
    /* 
 the_post_thumbnail('full', array('class' => 'imagen-destacada'));
  */
    if (has_post_thumbnail()) {
        the_post_thumbnail('full', array('class' => 'imagen-destacada'));
    }

    $hora_inicio = get_field('hora_inicio');
    $hora_fin = get_field('hora_fin');
?>

    <p class="informacion-clase">
        <?= the_field('dias_clase'); ?> - <?php echo($hora_inicio . "  a  " . $hora_fin); ?>
    </p>
<?php

    the_content();
endwhile;
