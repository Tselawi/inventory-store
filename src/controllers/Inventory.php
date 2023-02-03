<?php require_once("src/models/inventory.php");



function homepage() {
    $inventories = getInventory();

    require('views/homepage.php');
}



function getCat(string $cat_id){

    $cat = getCategory($cat_id);
    require("views/category.php");
}