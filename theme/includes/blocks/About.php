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
                <a href=<?php echo $block['button']['url'] ?> class="button"><?php echo $block['button']['title'] ?></a>
            </div>
        </div>
    </div>
</section>