<?php 
    $backgroundImage = $block['background-image'];
    $heading = $block['heading'];
    $description = $block['description'];
    $button = $block['button'];
    $brands = $block['brands'];
?>

<div class="banner">
    <div class="inner">
        <img class="background" src=<?php echo $backgroundImage ?> alt="img">
        <div class="container">
            <div class="content-wrap">
                <h2 class="heading">
                    <?php echo $heading; ?>
                </h2>
                <p class="description">
                    <?php echo $description; ?>
                </p>
                <div class="button-wrap">
                    <p class="button"> <?php echo $button; ?> </p>
                </div>
            </div>
            <div class="brands-wrap">
                <div class="brands-content">
                    <div class="text-wrap">
                        <p class="text">Brands I've Worked With:</p>
                    </div>
                    <div class="images-wrap">
                        <?php foreach($brands as $brand){?>
                            <div class="image-wrap">
                                <img src="<?php echo $brand['brand_logo']['url'] ?>" alt="">
                            </div>
                            <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    gsap.registerPlugin(ScrollTrigger);

    let tl = gsap.timeline({
        scrollTrigger: {
            trigger: "body",
            start: "-10% top",
        }
    });

    tl.from(".banner .inner .container .content-wrap .heading", { x:"-100",  opacity: 0, duration: 1, ease: "power1.inOut"  }, 0);
    tl.from(".banner .inner .container .content-wrap .description", { x:"-100",  opacity: 0, duration: 1, delay: 0.25, ease: "power1.inOut"  }, 0);
    tl.from(".banner .inner .container .content-wrap .button-wrap", { x:"-100",  opacity: 0, duration: 1, delay: 0.5, ease: "power1.inOut"  }, 0);

</script>