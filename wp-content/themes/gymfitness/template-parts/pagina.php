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

    the_content();
endwhile;
