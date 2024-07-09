<section class="contact">
    <div class="container">
        <div class="top-wrap">
            <h2 class="heading">
                <?php echo $block['heading'] ?>
            </h2>
            <p class="description">
                <?php echo $block['description'] ?>
            </p>
        </div>
        <div class="form-wrap">
            <?php echo do_shortcode($block['shortcode']) ?> 
        </div>
    </div>
</section>