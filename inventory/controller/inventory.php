<?php


include '../database/inventory.php';

$inventory = new Inventory();

$action =  $_GET['action'];

if ($action == "store") {
    $inventory->store(
        $_POST['name'],
        $_POST['stock'],
        $_POST['expired_at'],
        $_POST['user_id']
    );
    return header("location:../");
}
else if ($action == "update") {
    $inventory->update(
        $_GET['id'],
        $_POST['name'],
        $_POST['stock'],
        $_POST['expired_at'],
        $_POST['updated_at']
    );
    return header("location:../");
}
else if ($action == "delete") {
    $inventory->delete(
        $_GET['id']
    );
    return header("location:../");
}

?>