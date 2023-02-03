<?php 


function dbConnect() {
    $servername = "localhost";
    $username = "root";
    $password = "root";

    // create connection 
    try {
        $conn = new PDO("mysql:host=$servername;dbname=inventory-store", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
        return $conn;
    } catch (Exception $e) {
        echo "connection failed: " . $e->getMessage();
        exit;
    }
}

function getInventory() {
    $conn = dbConnect();
    
    // echo "hello i'm here!";
    try {
        $statement = $conn->query("SELECT id, category, size, quantity FROM inventory");
       //$statement->execute();
    } catch (Exception $e) {
        echo "Error" . $e->getMessage();
        exit;
    }
    $inventories = [];

    while($row = $statement->fetch()){
        $inventory = [
            'category' => $row['category'],
            'size' => $row['size'],
            'qty' => $row['quantity'],
            'id' => $row['id']
        ];
        $inventories[] = $inventory;
    }
    return $inventories;
}

function getCategory($cat_id) {
    $conn = dbConnect();
    try {
        $statement = $conn->prepare("SELECT id, category, size, quantity FROM invetory WHERE id = ?");
    } catch (Exception $e) {
        echo "Error" . $e->getMessage();
    }

    $statement->execute([$cat_id]);
    $row = $statement->fetch();
    $inventory = [
        'category' => $row['category'],
        'size' => $row['size'],
        'qty' => $row['quantity']
    ];
    return $inventory;
}
