<?php require("src/controllers/Inventory.php");?>
<?php require("src/controllers/Welcome.php"); ?>

<?php
if(isset($_GET['cat']) && $_GET['cat'] !== '') {
    if($_GET['cat'] === 'category'){
        if(isset($_GET['id']) && $_GET['id'] > 0) {
            $cat_id = $_GET['id'];
            getCat($cat_id);
        }else {
            echo 'Error : no id in item';
            die;
        }
    }else {
        echo 'Error 404';
    }
}else {
    homepage();
}