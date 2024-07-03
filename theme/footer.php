<?php 
    $copyright = get_field('footer' , 'options')["copyright"];
    $links = get_field('footer' , 'options')["links"];
?>
    <footer>
        <section class="inner">
            <div class="content">
                <div class="copyright-and-name">
                    <p><?php echo($copyright)?></p>
                </div>
                <div class="links">
                    <?php foreach($links as $link){?>
                        <a href="<?php echo($link["link"]["url"]) ?>" class="link"><?php echo($link["link"]["title"]) ?></a>
                    <?php } ?>
                </div>
            </div>
        </section>
    </footer>
       
    
    </div><!-- closing all div -->
    

    <?php wp_footer(); ?>
	</body>
</html>

<!-- <?php foreach($links as $link){
    var_dump($link["link"]["title"]);?>
    <hr>
<?php } ?> -->