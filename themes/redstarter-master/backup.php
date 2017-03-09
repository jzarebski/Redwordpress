<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/7/2017
 * Time: 10:54 AM
 */

<?php while ($query_posts->have_posts() ): $query_posts->the_post();?>
    <article id="post-<?php the_ID();?>" <?php post_class();?>
    <?php if (has_post_thumbnail() ) :?>
        <div>
            <?php the_post_thumbnail(); ?>
        </div>
    <?php endif; ?>
    <span><?php echo get_the_date();?></span>
    <span><?php echo get_comments_number();?> comments</span>
    </div>
    <button>Read Entry</button>
    </article>
<?php endwhile; ?>

<?php if ( have_posts() ) : ?>

    <?php if ( is_home() && ! is_front_page() ) : ?>
        <header>
            <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
        </header>
    <?php endif; ?>

    <?php /* Start the Loop */ ?>
    <?php while ( $query_posts -> have_posts() ) : $query_posts -> the_post(); ?>

        <?php get_template_part( 'template-parts/content' ); ?>

    <?php endwhile; ?>

    <?php the_posts_navigation(); ?>

<?php else : ?>

    <?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>

</main><!-- #main -->
</><!-- #primary -->


///////////////////////////////
<?php
            $args = array(
                'posts_per_page' => 3,
                'order'=> 'DESC',
                'orderby' => 'date' );
            $postslist = get_posts( $args );
            foreach ( $postslist as $post ) :
                setup_postdata( $post ) ; ?>

                <div class="journal-image">
                    <img <?php the_post_thumbnail(); ?>
                    <h4><?php the_date('F j, Y'); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></h4>
                    <h2><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
                    <a class="read-btn" href="<?php the_permalink(); ?>">READ ENTRY</a>
                </div>
            <?php endforeach; ?>