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
                    <div class="heading-wrap">
                        <h3 class="heading">
                            <?php echo $tenant['heading'] ?>
                        </h3>
                    </div>
                    <p class="description">
                        <?php echo $tenant['description'] ?>
                    </p>
                </div>
            <?php } ?>
            <div class="triangle"></div>
            <div class="triangle-left"></div>
            <div class="triangle-right"></div>
        </div>
    </div>
</section>
<script>
        gsap.registerPlugin(ScrollTrigger);

        const tenants = document.querySelectorAll('.tenant');

        // Loop through each .tenant element
        tenants.forEach((tenant) => {
            let heading = tenant.querySelector('.heading');
            let tl = gsap.timeline({
                scrollTrigger: {
                    trigger: tenant,
                    start: "top 70%",
                }
            });

            // Add animation to the timeline
            tl.from(tenant, {y: 50, opacity: 0, duration: 1 }, 0);
            tl.to(heading, { className: "heading in-view", duration: 1 }, 0);
        });
</script>
