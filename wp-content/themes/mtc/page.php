<!--This is About Page && related pages of About Page-->
<?php get_header(); ?>

<div id="main-wrapper">
    <div class="container">
        <?php 
            if(have_posts()){
                while(have_posts()) : the_post();
        ?>
            <?php the_content();?>

        <?php endwhile; }?>
    </div>

</div>

<?php get_footer(); ?>