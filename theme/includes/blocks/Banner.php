<?php 
    $backgroundImage = $block['background-image'];
    $heading = $block['heading'];
    $description = $block['description'];
    $link = $block['button'];
?>

<div class="banner">
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