<?php
    get_header();
    $term = get_queried_object();
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
                                'order'   => 'ASC',
                                'hide_empty' => false
                            );
                
                            $cats = get_categories($cat_args); 
                            foreach ($cats as $cat){ ?>
                                <?php if ($cat->slug == "uncategorized"){
                                    continue; 
                                }  else ?>
                                <a href="<?php echo get_term_link($cat)?>" class="category"><?php echo $cat->name; ?></a>
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
                                ],
                            'posts_per_page' => 6,
                        ];

                        if($term->slug !== 'uncategorized'){
                            $args['tax_query'] = array(
                                array(
                                    'taxonomy' => $term->taxonomy,
                                    'field'    => 'slug',
                                    'terms'    => $term->slug,
                                )
                            );
                        }
                        
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
                                            <div class="title" style="color:red">
                                                <?php echo $article->post_title?>
                                            </div>
                                            <div class="short-description">
                                                <?php echo $article->post_excerpt?>
                                            </div>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php if($articles->have_posts() && $articles->max_num_pages > 1){
                                ?>
                                <div class="button-wrap">
                                    <a id="loadMoreReviews" data-max="<?php echo $articles->max_num_pages; ?>" data-page="1" data-perpage="<?php echo 6; ?>">Load More</a>
                                </div>
                                <?php
                            }?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<script>
    jQuery(document).ready(function(){
        jQuery(document.body).on('click', '#loadMoreReviews', function(){
            var that = jQuery(this);
            var max = that.data('max');
            var pageCount = that.data('page');
            var postCountPerPage = that.data('perpage');
            that.addClass('loading').prop("disabled", true);;
            jQuery.ajax({
                url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
                type:"POST",
                data:{
                    action: "load_more_reviews",
                    maxpages : max,
                    pagecount : pageCount,
                    postperpage : postCountPerPage,
                },
                success: function(response){
                   
                    if(response.data.type == 'success'){
                        jQuery('.all-articles').append(response.data.posts);
                        pageCount = pageCount + 1;
                        that.removeClass('loading').prop("disabled", false);
                        that.attr('data-page', pageCount);
                        if(pageCount == max){
                            that.prop("disabled", true);
                        }
                    }
                    else{
                        that.removeClass('loading').prop("disabled", false);;
                        alert(response.data.message);
                    }
                   
                },  
                error: function(response){
                    console.log(response);
                    that.removeClass('loading').attr('disabled', 'false');
                }
            })
        })
    });
</script>
<?php
    get_footer();
?>