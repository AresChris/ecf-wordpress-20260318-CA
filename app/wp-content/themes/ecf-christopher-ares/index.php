<?php

get_header();
?>
    <div class="image_homepage">
        <img src="http://localhost:8080/wp-content/uploads/2026/03/homepage.png">
    </div>
    <aside>
    <ul>
        <?php dynamic_sidebar('left-sidebar'); ?>
    </ul>
</aside>
<div>
<?php
if(have_posts()):
    while(have_posts()):
        the_post();
    endwhile;
endif;  
?>
</div>



 
<?php
get_footer();
