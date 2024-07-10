<section class="about">
    <div class="container">
        <div class="image-text-column">
            <h2 class="heading">
               <?php echo $block['heading'] ?>
            </h2>
            <div class="image-wrap">
                <img src="<?php echo $block['image'] ?>" alt="image">
            </div>
        </div>
        <div class="content-column">
            <div class="description">
                <?php echo $block['description'] ?>
            </div>
            <div class="button-wrap">
                <?php echo $block['button'] ?>
            </div>
        </div>
    </div>
</section>
<script>
    gsap.registerPlugin(ScrollTrigger);

    let tl6 = gsap.timeline({
        scrollTrigger: {
            trigger: ".about",
            start: "top 30%",
        }
    });
    tl6.from(".about .image-wrap img", { opacity: 0, scale: 0.95, duration: 0.5});
</script>