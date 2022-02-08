<?php
require_once '../config.php';
$category_name = $_POST['category_name'];
$category_slug = $_POST['category_slug'];

 $id = $_GET['id'];
// IMAGE CODE START
if(isset($_FILES['image'])){
$file_name = $_FILES['image']['name'];
$file_tmp = $_FILES['image']['tmp_name'];
$url ="../uploads/".time()."_".uniqid(rand())."_".$file_name;
$file_location = move_uploaded_file($file_tmp,$url);

}


// IMAGE CODE END


if($conn->connect_error){
    die('Connection Failed:'.$conn->connect_error);
}
$sql ="INSERT INTO products_categories (category_name,category_slug,category_image) VALUES ('$category_name','$category_slug','$url')";
// $sql = "UPDATE products_categories SET category_name='$category_name', category_slug='$category_slug', category_image='$url'where category_id='$id'";
$save= $conn->query($sql);

if($save === true){
    header("Location:category-list.php");

}
else{
    echo"ERROR:".$sql."</br>".$conn->error;
}
$conn->close();

?>