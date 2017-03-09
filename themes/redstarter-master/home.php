<?php
get_header(); ?>
<div id="background-img"></div>

<!--<div id="primary" class="content-area">-->
<!--    <main id="main" class="site-main" role="main">-->
<?php
    $terms = get_terms(array(
            "taxonomy"=> "Type",
            "hide_empty"=> false
            ));
//    print_r($terms);

    ?>
<!-- This is the Shop Stuff -->
<h1 class="text-center"> Shop Stuff</h1>
 <div id="shop" class="flex">
    <?php foreach ($terms as $term): ?>
      <div class="text-center shop-border width22">
        <img src="<?php echo get_bloginfo('stylesheet_directory')?>/assets/images/product-type-icons/<?php echo $term->slug;?>.svg"
             class="shop-img-size">
        <p id="shop" class="text-center"><?php echo $term -> description;?></p>
          <a href="<?php echo get_term_link($term->term_id);?>" ><button class="button-green uppercase"><?php echo $term->slug;?> stuff</button></a>
      </div>
    <?php endforeach;  ?>
 </div>


<!-- this is the Inhabitent Journal Sections -->
<h1 class="text-center">Inhabitent Journal</h1>
<?php
  $query_posts = new WP_Query(array (
     "posts_per_page"=> 3,
     "post_type" => "Post",
    ));
?>

<div class="journal-container">
<?php while ($query_posts->have_posts() ): $query_posts->the_post();?>

    <article class="journal-post" id="post-<?php the_ID();?>" <?php post_class();?>>

        <?php if (has_post_thumbnail() ) :?>
           <div class="journal-post-img">
           <?php the_post_thumbnail(); ?>
           </div>

        <?php endif; ?>
        <div class="journal-title">
            <h3><?php echo get_the_title();?></h3>
            <span><?php echo get_the_date();?></span>
            <span><?php echo get_comments_number();?> comments</span>
            <a href="<?php the_permalink();?>"><button class="read-entry">Read Entry</button></a>
        </div>
    </article>

<?php endwhile; ?>
</div>

<!-- this is the adventures section -->

<?php $query_adventure = new WP_Query(array(
    "posts_per_page" => 4,
    "post_type" => "adventures",
));
?>
<div>
    <?php while ($query_adventure->have_posts() ): $query_adventure->the_post();?>

        <article id="post-<?php the_ID();?>" <?php post_class();?>>

            <?php if (has_post_thumbnail() ) :?>
                <div class="adventure-img">
                    <?php the_post_thumbnail(); ?>
                </div>

            <?php endif; ?>

                <h3><?php echo get_the_title();?></h3>
                <button class="read-more">Read More</button>

        </article>

    <?php endwhile; ?>
</div>


<?php get_footer(); ?>

