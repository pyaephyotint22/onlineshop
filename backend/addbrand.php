<?php 

	include 'dbconnect.php';  // connect the database

	$name = $_POST['name'];
	
	$photo = $_FILES['photo'];
	

	$basepath = "img/brands/";
	$fullpath = $basepath.$photo['name'];
	move_uploaded_file($photo['tmp_name'], $fullpath);

	// echo " $name and $price and $discount and $brand and $subcategory and $description and $codeno <br>";
	// print_r($photo);


	$sql = "INSERT INTO brands(name,photo)
			VALUES(:brand_name,:brand_photo)"; // behind the VALES ==> label pay lite tal in the VALUES


		// sql ko check or prepare
	$stmt = $pdo->prepare($sql);


	// Data ko "bindParam " loat p htae

	
	$stmt ->bindParam('brand_name',$name);
	$stmt ->bindParam('brand_photo',$fullpath);
	

	// execute() loat mha data ka insert mhar

	$stmt ->execute();


	if($stmt->rowCount()) {
		header("location:brand_list.php");
	}else{
		echo "Error";
	}



 ?>