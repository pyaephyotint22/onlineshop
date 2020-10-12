<?php 

	include 'dbconnect.php';  // connect the database

	$name = $_POST['name'];
	
	$category = $_POST['category'];
	
	// echo " $name and $price and $discount and $brand and $subcategory and $description and $codeno <br>";
	// print_r($photo);


	$sql = "INSERT INTO subcategories(name,category_id)
			VALUES(:subcategorie_name,:subcategorie_category)"; // behind the VALES ==> label pay lite tal in the VALUES


		// sql ko check or prepare
	$stmt = $pdo->prepare($sql);


	// Data ko "bindParam " loat p htae


	$stmt ->bindParam('subcategorie_name',$name);

	$stmt ->bindParam('subcategorie_category',$category);

	// execute() loat mha data ka insert mhar

	$stmt ->execute();


	if($stmt->rowCount()) {
		header("location:subcategories_list.php");
	}else{
		echo "Error";
	}



 ?>