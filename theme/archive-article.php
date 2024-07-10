<?php
    get_header();
?>
    <div class="articles-archive">
        <div class="inner">
            <div class="heading-wrap">
                <h1 class="heading">Articles</h1>
            </div>    
            <div class="main-wrapper">
                <div class="sidebar">
                     
                    <div class="categories">
                        <?php 
                            $cat_args = array(
                                'taxonomy' => 'category',
                                'orderby' => 'name',
                                'order'   => 'ASC'
                            );
                
                            $cats = get_categories($cat_args); 
                            foreach ($cats as $cat){ ?>
                                <a class="category"><?php echo $cat->name; ?></a>
                            <?php }
                        ?>
                    </div>
                     
                </div>
                <div class="main">
                    <!-- featured articles -->
                    <?php
                        $featured_args = [
                            'post_type' => 'article',
                            'meta_query' => [
                                [
                                    'key' => 'is_featured',
                                    'value' => '1',
                                    'compare' => '='
                                ]
                            ]
                        ];
                        
                        $featured_articles = new WP_Query($featured_args);
                        if (count($featured_articles->posts) > 0) {?>
                            <div class="featured">
                                <div class="featured-heading">Featured</div>
                                <div class="featured-articles">
                                    <?php foreach($featured_articles->posts as $featured_article){ ?>
                                        <div class="featured-articles-article">
                                            <?php if (has_post_thumbnail($featured_article->ID)) {?>
                                                <div class="image-wrap">
                                                    <?php echo get_the_post_thumbnail($featured_article->ID, 'full');?>
                                                </div>
                                            <?php } ?>
                                            <div class="title">
                                                <?php echo $featured_article->post_title?>
                                            </div>
                                            <div class="short-description">
                                                <?php echo $featured_article->post_excerpt?>
                                            </div>
                                            <a href="<?php echo $featured_article->guid?>" class="read-more">Read More</a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                    <?php } ?>
                     <!-- all articles -->
                    <?php
                        $args = [
                            'post_type' => 'article',
                            'meta_query' => [
                                [
                                    'key' => 'is_featured',
                                    'value' => '0',
                                    'compare' => '='
                                ]
                            ]
                        ];
                        
                        $articles = new WP_Query($args);
                        if (count($articles->posts) > 0) {?>
                            <div class="all-articles-wrap">
                                <div class="all-heading">All Articles</div>
                                <div class="all-articles">
                                    <?php foreach($articles->posts as $article){ ?>
                                        <a class="all-articles-article" href="<?php echo $article->guid?>" >
                                            <?php if (has_post_thumbnail($article->ID)) {?>
                                                <div class="image-wrap">
                                                    <?php echo get_the_post_thumbnail($article->ID, 'medium');?>
                                                </div>
                                            <?php } ?>
                                            <?php if (count(wp_get_post_categories($article->ID)) > 0) {?>
                                                <div class="categories-assigned">
                                                    <?php foreach (wp_get_post_categories($article->ID) as $cat_id){ ?>
                                                        <div class="category-tag"><?php echo get_cat_name($cat_id); ?></div>
                                                    <?php } ?>
                                                </div>
                                            <?php } ?>
                                            <div class="title" style="background-color: pink;">
                                                <?php echo $article->post_title?>
                                            </div>
                                            <div class="short-description">
                                                <?php echo $article->post_excerpt?>
                                            </div>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php
    get_footer();
?>