<?php

get_header();
?>
    <div class="image_homepage">
        <img src="http://localhost:8080/wp-content/uploads/2026/03/homepage.png">
    </div>
    <div class="texte-sur-image">
        <h1>Les villes du monde</h1>    
        <h2>Un blog qui vous fait découvrir les recoins peu connus de nos grandes villes</h2>
    </div>
    <aside>
    <ul>
        <?php dynamic_sidebar('left-sidebar'); ?>
    </ul>
</aside>
<div class="article_loop">
    <?php
    if(have_posts()):
        while(have_posts()):
            the_post();
    ?>
        <article class="article">
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
