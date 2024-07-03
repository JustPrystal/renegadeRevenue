<section class="roadmap">
    <div class="container">
        <div class="top-wrap">
            <h2 class="heading">
                <?php echo $block['heading'] ?>
            </h2>
            <div class="description">
                <?php echo $block['description'] ?>
            </div>
        </div>
        <div class="tenants-wrap">
            <?php foreach($block['tenants'] as $tenant){ ?>
                <div class="tenant">
                    <h3 class="heading">
                        <?php echo $tenant['heading'] ?>
                    </h3>
                    <p class="description">
                        <?php echo $tenant['description'] ?>
                    </p>
                </div>
            <?php } ?>
            <div class="triangle"></div>
        </div>
    </div>
</section>