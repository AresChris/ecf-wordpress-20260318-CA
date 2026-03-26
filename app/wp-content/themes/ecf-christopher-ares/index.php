<?php

get_header();

?>

<aside>
    <ul>
        <?php dynamic_sidebar('left-sidebar'); ?>
    </ul>
</aside>

<?php
if(have_posts()):
    while(have_posts()):
        the_post();

    endwhile;
endif;   

get_footer();