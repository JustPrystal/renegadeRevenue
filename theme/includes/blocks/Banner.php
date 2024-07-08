<?php 
    $backgroundImage = $block['background-image'];
    $heading = $block['heading'];
    $description = $block['description'];
    $link = $block['button'];
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
                    <a href=<?php echo $link['url'] ?> class="button"><?php echo $link['title'] ?></a>
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