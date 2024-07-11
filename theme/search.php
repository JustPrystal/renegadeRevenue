<?php get_header(); ?>

<div class="search-banner">
    <div class="wrapper">
        <h2>Search Results for: <span><?php the_search_query(); ?></span></h2>
    </div>
</div>

<div class="search-container">
    <div class="inner">
        <div class="search-result-wrapper">
        <div class="sidebar">
            <div class="search">
            <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" fill="var(--black)" width="800px" height="800px" viewBox="0 0 32 32"><path d="M27 24.57l-5.647-5.648a8.895 8.895 0 0 0 1.522-4.984C22.875 9.01 18.867 5 13.938 5 9.01 5 5 9.01 5 13.938c0 4.929 4.01 8.938 8.938 8.938a8.887 8.887 0 0 0 4.984-1.522L24.568 27 27 24.57zm-13.062-4.445a6.194 6.194 0 0 1-6.188-6.188 6.195 6.195 0 0 1 6.188-6.188 6.195 6.195 0 0 1 6.188 6.188 6.195 6.195 0 0 1-6.188 6.188z"/></svg>
                <?php
                    echo do_shortcode('[searchandfilter fields="search"]');
                ?>
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
            <?php 
                $search_query = new WP_Query(
                    array(
                      'posts_per_page'    => -1,
                      's'                 => esc_attr($_GET['s']),
                      'post_status'       => 'publish',
                      )
                    );
                if($search_query->have_posts()){ 
                   $search_query->the_post();
            ?>
                <div class="all-search-articles-wrap">
                    <?php foreach($search_query-> posts as $search_result) { ?>
                        <a class="all-articles-article" href="<?php echo $search_result->guid?>" >
                            <?php if (has_post_thumbnail($search_result->ID)) {?>
                                <div class="image-wrap">
                                    <?php echo get_the_post_thumbnail($search_result->ID, 'medium');?>
                                </div>
                            <?php } ?>
                            <?php if (count(wp_get_post_categories($search_result->ID)) > 0) {?>
                                <div class="categories-assigned">
                                    <?php foreach (wp_get_post_categories($search_result->ID) as $cat_id){ ?>
                                        <div class="category-tag"><?php echo get_cat_name($cat_id); ?></div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                            <div class="title">
                                <?php echo $search_result->post_title?>
                            </div>
                            <div class="short-description">
                                <?php echo $search_result->post_excerpt?>
                            </div>
                        </a>
                    <?php } ?>
                </div>
            <?php } else { ?>
                <div class="no-results">
                    <span>
                        No results found
                    </span>
                </div>
            <?php }?>
        </div>
    </div>
</div>



<?php get_footer();?>