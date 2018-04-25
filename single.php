<?php  
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $blog = new WP_Query( array( 'post_type' => 'post', 'paged' => $paged, 'posts_per_page' => 4, 'order' => 'ASC')); 
?>
<?php get_header(); ?>
<main>
<div class="container">
    <section class="col-lg-9 col-md-9 col-sm-8 col-xs-12 content">
        <div id="blog-list">
 
           <?php if ( have_posts () ) : while (have_posts()):the_post(); ?>

            <article class="post" id="post_<?php echo get_the_id(); ?>">
                <h3><?php echo get_the_title(); ?></h3>
                <p><small><?php echo get_the_date().", by ".get_the_author(); ?></small></p>
                <img class="featured-image" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), full); ?>" alt="<?php echo get_the_title(); ?>" width="100%"/>
                <?php the_content(); ?>
                <ul id="social-share">
                    <li>Share:</li>
                    <li><?php echo do_shortcode("[wp_social_sharing social_options='facebook,twitter,googleplus,linkedin' twitter_username='arjun077' facebook_text='' twitter_text='' icon_order='f,t,g,l' show_icons='1']"); ?></li>
                </ul>
            </article>


            <ul id="single-post--pagination" class="clearfix">
                <li class="pull-left">
                    <?php previous_post_link('<i>←</i><span>Last Post<br>%link</span>', '%title', TRUE, ' '); ?> 
                </li>
                <li class="pull-right">
                   <?php next_post_link('<span>Next Post<br>%link</span><i>→</i>', '%title', TRUE, ' '); ?> 
                </li>
            </ul>


            <?php endwhile; endif; ?>

        </div>
    </section>
    <?php get_sidebar('blog'); ?>
</div>
</main>
<?php get_footer(); ?>