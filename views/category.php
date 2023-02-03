<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>category</title>
</head>
<body>
<?php ob_start(); ?>
<?php var_dump($cat) ?>
    <div class="hello"><?= 'hello category'?></div>


    <?php $content = ob_get_clean(); ?> 
        <?php require('layout.php') ?>
</body>
</html>