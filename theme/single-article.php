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
                
            </div>
            <div class="text-wrap">
                <div class="author-name">
                    <?php echo $post->post_author ?>
                </div>
                <div class="creation-date">
                    <?php echo $post->post_date?> 
                </div>
            </div>

        </div>
        <div class="decription">
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

    </div>
</section>

<?php get_footer(); ?>