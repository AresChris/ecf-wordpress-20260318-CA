<?php

get_header();
?>
    <div class="image_homepage">
        <img src="http://localhost:8080/wp-content/uploads/2026/03/homepage.png">
    </div>
<div>
<?php
if(have_posts()):
    while(have_posts()):
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

<aside>
    <ul>
        <?php dynamic_sidebar('left-sidebar'); ?>
    </ul>
</aside>

 
<?php
get_footer();
