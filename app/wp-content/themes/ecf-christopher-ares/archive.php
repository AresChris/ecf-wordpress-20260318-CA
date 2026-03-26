<?php
get_header();
?>
<?php
if(have_posts()):
    while(have_posts()):
        the_post();
    endwhile;
endif;  
?>
        <article class="card_article">
                <h1><?php the_title(); ?></h1>
                <p>Ecrit par <?php the_author(); ?>
                le <?php the_date(); ?></p>
                <?php the_content(); //contenu du post 
                ?>
        </article>
<?php
get_footer();