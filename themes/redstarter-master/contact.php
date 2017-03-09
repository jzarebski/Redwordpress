<!-- Template Name: Find Us
-->
<?php
get_header(); ?>
<div class="contact-container">
<div id="primary" class="content-area">
    <h1><?php the_field('main-title');?></h1>
    <main id="main" class="site-main" role="main">
            <?php the_field('map');?>
        <div>
            <h2><?php the_field('title');?></h2>
            <?php the_field('content');?>
            <h2><?php the_field('secondary-title');?></h2>
            <?php the_field('email');?>
        </div>
    </main><!-- #main -->

</div><!-- #primary -->
    <div class="contact-sidebar">
    <?php dynamic_sidebar ('Sidebar2'); ?>
    </div>
</div>

<?php get_footer(); ?>