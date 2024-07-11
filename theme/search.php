<?php get_header(); ?>

<div class="search-banner">
    <div class="wrapper">
        <h2>Search Results for: <span><?php the_search_query(); ?></span></h2>
    </div>
</div>

<div class="search-container">
    <div class="container">
        <div class="top_pattern">
           <div class="red"></div>
        </div>
        <div class="search-result-wrapper">
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
                <div class="search-item-wrapper">
                    <?php foreach($search_query-> posts as $search_result) { 
                        ?>
                        <div class="search-item">
                            <a class="search-redirect" href="<?php echo $search_result->guid ?>">
                                <div class="topbar">
                                    <h4><?php echo $search_result->post_title ?></h4>
                                    <div class="excerpt">
                                        <?php echo $search_result->post_excerpt ?>  
                                    </div>
                                </div>
                                <div class="bottom-bar">
                                    <div class="post-type"><?php echo $search_result->post_type ?></div>
                                    <?php if($search_result->post_type == "communities"){ ?>
                                        <div class="post-community">
                                            <?php echo get_the_terms($search_result->ID, 'communities')[0]->name; ?>
                                        </div>
                                    <?php }?>
                                    <?php if($parent != null){?>
                                        <div class="post-parent"><?php echo $parent->post_title ?></div>
                                    <?php } ?>
                                    <div class="post-date"><?php echo date_format(date_create($search_result->post_date), "m/d/Y")?></div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            <?php } else { ?>
                <div class="search-item-wrapper">
                    No results found
                </div>
            <?php }?>
        </div>
    </div>
</div>



<?php get_footer();?>