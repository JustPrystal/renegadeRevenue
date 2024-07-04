<?php 
    $heading = $block['heading'];
    $ContentBox = $block['content_box'];
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
                <div class="boxes accordian">
                    <?php foreach($ContentBox as $box){?>
                        <div class="content-box">
                            <div class="heading-wrap">
                                <h4 class="content-heading"><?php echo($box["box_heading"]) ?></h4>
                            </div>
                            <div class="content-wrap">
                                <?php echo($box["content"]) ?>   
                            </div>
                            <div class="price-wrap">
                                <p class="price"><?php echo($box["price"]) ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>  
            </div>
            <div class="schedule">
                <p> <?php echo($ScheduleText) ?> </p>
                <a href="<?php echo($Button["url"]) ?>"> <?php echo($Button["title"]) ?> </a>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        $('.content-box').click(function() {
            $(this).toggleClass('active');
        });
    });
</script>
