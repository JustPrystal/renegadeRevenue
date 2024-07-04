<?php
  function get_blocks() {
    global $post;

    $fields = get_fields($post->ID);
    loop_blocks($fields);
  }

  function loop_blocks($blocks) {
    if (isset($blocks['blocks'])){
      if ($blocks['blocks']){
        foreach ($blocks['blocks'] as $key => $block) {
          switch ($block['acf_fc_layout']) {
            case 'global_block':
              if ($block['global_block']){
                $blocks = get_fields($block['global_block'][0]);
                loop_blocks($blocks);
              }
              break;
            case 'fullwidth_text':
              include 'blocks/fullwidth_text.php';
              break;
            case 'banner':
              include 'blocks/Banner.php';
              break;
            case 'about':
              include 'blocks/About.php';
              break;
            case 'roadmap':
              include 'blocks/roadmap.php';
              break;
            case 'fullwidth-content':
              include 'blocks/fullwidth-content.php';
              break;
            case 'cta':
              include 'blocks/cta.php';
              break;
            case 'ways_to_work':
              include 'blocks/Ways_to_work.php';
              break;
            case 'problems_solved':
              include 'blocks/Problems_solved.php';
              break;  
          }
        }
      }
    }
  }

?>