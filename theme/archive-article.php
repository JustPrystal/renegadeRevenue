<?php
    get_header();
?>
    <div class="articles-archive">
        <div class="inner">
            <div class="heading-wrap">
                <h1 class="heading">Articles</h1>
            </div>    
            <div class="main-wrapper">
                <div class="sidebar" id="sidebar">
                    <div class="icons" id="icons">

                        <div class="search-icon-wrapper">
                            <svg class="cross-button" xmlns="http://www.w3.org/2000/svg" fill="var(--black)" width="800px" height="800px" viewBox="0 0 1024 1024"><path d="M697.4 759.2l61.8-61.8L573.8 512l185.4-185.4-61.8-61.8L512 450.2 326.6 264.8l-61.8 61.8L450.2 512 264.8 697.4l61.8 61.8L512 573.8z"/></svg>
                            <svg class="search-button" xmlns="http://www.w3.org/2000/svg" fill="var(--black)" width="800px" height="800px" viewBox="0 0 32 32"><path d="M27 24.57l-5.647-5.648a8.895 8.895 0 0 0 1.522-4.984C22.875 9.01 18.867 5 13.938 5 9.01 5 5 9.01 5 13.938c0 4.929 4.01 8.938 8.938 8.938a8.887 8.887 0 0 0 4.984-1.522L24.568 27 27 24.57zm-13.062-4.445a6.194 6.194 0 0 1-6.188-6.188 6.195 6.195 0 0 1 6.188-6.188 6.195 6.195 0 0 1 6.188 6.188 6.195 6.195 0 0 1-6.188 6.188z"/></svg>
                        </div>
                    </div>
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
                                            <div class="title">
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

            console.log("clicked")

            var that = jQuery(this);
            var max = that.data('max');
            var pageCount = parseInt(that.attr('data-page'));
            console.log("pageCount", pageCount)
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
                        console.log(pageCount , max)
                        if(pageCount == max){
                            that.addClass("disabled");
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
    $(".icons").click(function () {
      $(".search-button").stop().fadeToggle()
      $(".cross-button").stop().fadeToggle()
      $("body").toggleClass('no-scroll')
      $(".sidebar").toggleClass('active')
    })
</script>
<?php
    get_footer();
?>