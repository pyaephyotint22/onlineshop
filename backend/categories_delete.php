<?php 

	include 'dbconnect.php';

	$id=$_GET['id'];

	$sql="DELETE FROM categories Where categories.id=:category_id";
	$stmt=$pdo->prepare($sql);
	$stmt->bindParam('category_id',$id);
	$stmt->execute();

	if($stmt->rowCount()){
		header("location:categories_list.php");
	}else{
		echo "Error";
	}

 ?>