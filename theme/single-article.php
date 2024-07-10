<?php 
    get_header();
    global $post;
    $article_image = get_field("article_cta_image",'options');
    $article_heading = get_field("article_cta_heading",'options');
    $article_description = get_field("article_cta_description",'options');
    $article_button = get_field("book_a_call_button",'options');
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
                    <span class="bold">Written by:</span> <?php echo get_author_name($post->post_author) ?>
                </div>
                <div class="creation-date">
                    <span class="bold">Created:</span> <?php echo $post->post_date?> 
                </div>
            </div>

        </div>
        <div class="description">
            <?php echo $post->post_content?>
        </div>
        <div class="article-cta-wrap">
            <div class="article-cta">
                <div class="image-wrap">
                    <div class="image">
                        <img src="<?php echo $article_image['url'];?>" alt="">
                    </div>
                </div>
                <div class="content-wrap">
                    <div class="content">
                        <h3 class="article-heading"><?php echo $article_heading?></h3>
                        <p class="article-description"><?php echo $article_description?></p>
                        <div class="article-button-wrap">
                            <?php echo $article_button?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="recommended">
            <div class="recommended-heading">
                Recommended Reading:
            </div>
            <?php
                $category = get_the_category()[0]->slug;
                var_dump($category);
                $recommended_args = array(
                    'category_name' => $category, 
                    'posts_per_page' => 2, 
                    // 'post__not_in' => array( $post->ID ) // Exclude current post
                );
                $recommended_query = new WP_Query($recommended_args);
                var_dump($recommended_query);
            ?>
            <div class="recommended-articles"></div>
        </div>
    </div>
</section>

<?php get_footer(); ?>