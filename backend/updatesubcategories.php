<?php 
	include 'dbconnect.php';

	$id=$_POST['id'];
	$name = $_POST['name'];
	$category = $_POST['category'];

	

	$sql="UPDATE subcategories SET name=:subcategory_name,category_id=:subcategory_category WHERE subcategories.id=:subcategory_id";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':subcategory_id',$id);
	$stmt->bindParam(':subcategory_name',$name);
	$stmt->bindParam(':subcategory_category',$category);
	$stmt->execute();

	if ($stmt->rowCount()) {
		header("location:subcategories_list.php");
	}else{
		echo "Error";
	}


?>