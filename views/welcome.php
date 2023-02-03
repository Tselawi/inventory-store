
<?php ob_start(); ?>
<section class="welcome">
    <a href="index.php?home=homepage">
    <h1 class="title_welcome">welcome to inventory</h1></a>
</section>

<?php $content = ob_get_clean(); ?> 
<?php require('layout.php') ?>