<section class="cta">
    <div class="container">
        <h2 class="heading">
            <?php echo $block['heading'] ?>
        </h2>
        <div class="content-wrap">
            <div class="description">
                <?php echo $block['description'] ?>
            </div>
            <div class="button-wrap">
                <a href="<?php $block['button']['url'] ?>" class="button"><?php echo $block['button']['title'] ?></a>
            </div>
            <div class="image-wrap">
                <img src="<?php echo $block['image']['url'] ?>" alt="image" class="image">
            </div>
        </div>
    </div>
</section>