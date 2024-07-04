<?php 
    $heading = $block['heading'];
    $ContentBox = $block['content_box'];
?>

<section class="problems">
    <div class="container">
        <div class="inner">
            <h3 class="heading"><?php echo($heading) ?></h3>
            <div class="slider swiper">
                <div class="slider-wrapper swiper-wrapper accordian">
                    <?php foreach($ContentBox as $box){?>
                        <div class=" swiper-slide slide content-box">
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
            <svg  viewBox="0 0 1024 1024" class="slider-arrow next" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M256 120.768L306.432 64 768 512l-461.568 448L256 903.232 659.072 512z" fill="#000000"></path>
                </g>
            </svg>
            <svg viewBox="0 0 1024 1024" class="slider-arrow prev" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M768 903.232l-50.432 56.768L256 512l461.568-448 50.432 56.768L364.928 512z" fill="#000000"></path>
                </g>
            </svg>
        </div>
    </div>
</section>
