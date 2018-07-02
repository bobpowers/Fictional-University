<?php 

while(have_posts()) {
    the_post(); ?>
    <h1>PAGE NOT POST</h1>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <?php
};

?>