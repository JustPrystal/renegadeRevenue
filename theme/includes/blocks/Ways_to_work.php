<?php 
    $heading = $block['heading'];
    $ContentBox = $block['content_box'];
    $Content = $block["content_box"];
    $ScheduleText = $block['schedule_text'];
    $Button = $block['button'];
    // echo '<pre>';
    // var_dump($ContentBox);
    // echo '</pre>';
?>

<section class="ways-to-work">
    <div class="container">
        <div class="inner">
            <h3 class="heading"><?php echo($heading) ?></h3>
            <div class="ways">
                <div class="boxes-div">
                    <?php foreach($ContentBox as $box){?>
                        <div class="content-box">
                            <h4 class="heading"><?php echo($box["box_heading"]) ?></h4>
                            <?php foreach($box["content"] as $text){?>
                                <p><?php echo($text["text"]) ?></p>    
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="book">
                    <p> <?php echo($ScheduleText) ?> </p>
                    <a href="<?php echo($Button["url"]) ?>"> <?php echo($Button["title"]) ?> </a>
                </div>
            </div>   
        </div>
    </div>
</section>