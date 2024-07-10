<?php 
    get_header();
    global $post;
?>

<section class="single-article">
    <div class="container">
        <h2 class="heading">
            <?php echo $post->post_title?>
        </h2>
        <div class="image"><?php the_post_thumbnail(); ?></div>
        <div class="author-info">
            <div class="author-image">
                <?php echo get_avatar($post->post_author) ?>
            </div>
            <div class="text-wrap">
                <div class="author-name">
                    Written by: <?php echo get_author_name($post->post_author) ?>
                </div>
                <div class="creation-date">
                    Created: <?php echo $post->post_date?> 
                </div>
            </div>

        </div>
        <div class="decription">
            <?php echo $post->post_content?>
        </div>
    </div>
</section>

<?php get_footer(); ?>