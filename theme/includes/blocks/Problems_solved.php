<?php 
    $heading = $block['heading'];
    $ContentBox = $block['content_box'];
?>

<section class="problems">
    <div class="container">
        <div class="inner">
            <h3 class="heading"><?php echo($heading) ?></h3>
            <div class="slider">
                <div class="slider-wrapper accordian">
                    <?php foreach($ContentBox as $box){?>
                        <div class="slide content-box">
                            <div class="problem-and-heading-wrap">
                                <div class="problem-span-wrap">
                                    <span class="problem-span"><?php echo($box["problem_number"]) ?></span>
                                </div>
                                <div class="heading-wrap">
                                    <h4 class="content-heading"><?php echo($box["box_heading"]) ?></h4>
                                </div>
                            </div>
                            <div class="content-wrap">
                                <p class="text"><?php echo($box["content"]) ?></p>    
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function(){
        const swiper = new Swiper('.slider', {
            // Add your Swiper options here
            slidesPerView: 1,
            spaceBetween: 10,
        });
    })
</script>