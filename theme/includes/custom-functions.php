<?php
    add_action('wp_ajax_load_more_reviews', 'load_more_reviews_callback');
    add_action('wp_ajax_nopriv_load_more_reviews', 'load_more_reviews_callback');

    function load_more_reviews_callback(){
        $max_pages = $_REQUEST['maxpages'];
        $page_count = $_REQUEST['pagecount'];
        $posts_per_page = $_REQUEST['postperpage'];

        if($max_pages === $page_count){
            wp_send_json_error(array('type' => 'error', 'message' => 'no more posts'), 400);
        }
        $offset = $page_count * $posts_per_page;

        ob_start();
        $args = [
            'post_type' => 'article',
            'orderby'   => 'date',
            'offset'    => $offset,
            'order'     => 'DESC',
            'posts_per_page' => $posts_per_page,
        ];
        $query = new WP_Query($args);
        if($query->have_posts()){
            $articles = $query->get_posts();
            foreach($articles as $article){
                ?>
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
                <?php
            }
        }

        $html = ob_get_clean();
        $output = array(
            'type' => 'success',
            'message' => 'loaded more posts successfully',
            'posts' => $html,
        );
        wp_send_json_success($output, 200);
    }


    function cptui_register_my_cpts_article() {

        /**
         * Post Type: Articles.
         */
    
        $labels = [
            "name" => esc_html__( "Articles", "custom-post-type-ui" ),
            "singular_name" => esc_html__( "Article", "custom-post-type-ui" ),
        ];
    
        $args = [
            "label" => esc_html__( "Articles", "custom-post-type-ui" ),
            "labels" => $labels,
            "description" => "",
            "public" => true,
            "publicly_queryable" => true,
            "show_ui" => true,
            "show_in_rest" => true,
            "rest_base" => "",
            "rest_controller_class" => "WP_REST_Posts_Controller",
            "rest_namespace" => "wp/v2",
            "has_archive" => "articles",
            "show_in_menu" => true,
            "show_in_nav_menus" => true,
            "delete_with_user" => false,
            "exclude_from_search" => false,
            "capability_type" => "post",
            "map_meta_cap" => true,
            "hierarchical" => true,
            "can_export" => false,
            "rewrite" => [ "slug" => "article", "with_front" => true ],
            "query_var" => true,
            "supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields", "page-attributes" ],
            "taxonomies" => [ "category" ],
            "show_in_graphql" => false,
        ];
    
        register_post_type( "article", $args );
    }
    
    add_action( 'init', 'cptui_register_my_cpts_article' );
    
?>