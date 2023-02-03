<?php require("templates/header.php"); ?>

<?php $title = "php learning course"?>
<?php ob_start(); ?>

<?php 
function trimtext($text, $start, $len)
{
    return substr($text, $start, $len);
}
?>


<main>
    <div class="inventory">
        <h1>inventory-store</h1>
        <a href="index.php">back</a>
    </div>
</main>
<section>
  <div class="inventory-table">
    <div class="head-table">
        <ul>
            <li>Categories</li>
            <li>Size</li>
            <li>Quantity</li>
        </ul>
    </div>
    
    <?php foreach($inventories as $inve) {?>
    <div class="content-table">
    <ul>
        <li><a href="index.php?cat=category&id=<?= urlencode($inve['id'])?>"><?= trimtext(htmlspecialchars($inve['category']), 0, 7); ?></a></li>
        <li><?= htmlspecialchars($inve['size'])?></li>
        <li><?= htmlspecialchars($inve['qty'])?></li>
    </ul>
    <?php }?>
    </div>
</div>
    
</section>

<?php $content =ob_get_clean(); ?>
<?php require("layout.php"); ?>
<?php require("templates/footer.php") ?>