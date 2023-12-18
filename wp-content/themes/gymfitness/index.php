<?= get_header()?>
<h1> Desde index.php</h1>
<main>
    <?php

    // TODO  loop de contenido

    while (have_posts()) : the_post();
        the_title();

        the_content();
    endwhile;
    ?>
</main>


<?= get_footer(); ?>