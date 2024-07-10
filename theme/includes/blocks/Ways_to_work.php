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
                                <div class="read-more">Show More</div> 
                            </div>
                            <div class="price-wrap">
                                <p class="price"> <?php echo($box["price"]) ?> </p>
                            </div>
                        </div>
                    <?php } ?>
                </div>  
            </div>
            <div class="schedule-wrap">
                <p class="schedule"> <?php echo($ScheduleText) ?> </p>
                <div class="button"> <?php echo($Button) ?> </div>
            </div>
        </div>
    </div>
</section>
<script>

    $(".read-more").click(function(){
        $(this).parent(".content-wrap").toggleClass("open");
        if($(this).parent(".content-wrap").hasClass("open")){
            $(this).text("Show Less");
        }else{
            $(this).text("Show More");
        }
    })
    gsap.registerPlugin(ScrollTrigger);

    let tl4 = gsap.timeline({
        scrollTrigger: {
            trigger: ".ways-to-work",
            start: "top center",
        }
    });
    tl4.to(".ways .heading-wrap .content-heading", { className: "content-heading in-view", duration: 1});
</script>