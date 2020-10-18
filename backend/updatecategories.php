<?php 
	include 'dbconnect.php';

	$id=$_POST['id'];
	$name = $_POST['name'];
	$logo = $_POST['logo'];

	//echo "$name and $logo <br>";

	$sql="UPDATE categories SET name=:category_name,logo=:category_logo WHERE categories.id=:category_id";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':category_id',$id);
	$stmt->bindParam(':category_name',$name);
	$stmt->bindParam(':category_logo',$logo);
	$stmt->execute();

	if ($stmt->rowCount()) {
		header("location:categories_list.php");
	}else{
		echo "Error";
	}


?>