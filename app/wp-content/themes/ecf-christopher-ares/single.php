<?php
get_header();
?>
<div class="card">
    <?php
if(have_posts()):
    while(have_posts()):
        the_post();
        ?>
        <article class="card_article">
                <h1><?php the_title(); ?></h1>
                <p>Ecrit par <?php the_author(); ?>
                le <?php the_date(); ?></p>
                <?php the_content(); //contenu du post 
                ?>
        </article>
        <?php
    endwhile;
endif;  
?>
        
</div>
<?php
get_footer();
