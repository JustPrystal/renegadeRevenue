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
        <div class="bio-form-wrap">
            <div class="bio-wrap">
                <p class="name text">
                    <?php echo $block['name'] ?>
                </p>
                <p class="company-name text">
                    <?php echo $block['company_name'] ?>
                </p>
                <p class="contact-number text">
                    <?php echo $block['contact_number'] ?>
                </p>
                <p class="email text">
                    <?php echo $block['email'] ?>
                </p>
            </div>
            <div class="form-wrap">
                <?php echo do_shortcode($block['shortcode']) ?> 
            </div>
        </div>
    </div>
</section>