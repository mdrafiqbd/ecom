<?php 
require_once '../config.php';
$id = $_GET['id'];
$del = "DELETE FROM products_categories where category_id='$id'";
$qry = $conn->query($del);
if($qry=== true){
    header("Location: category-list.php");
}

?>