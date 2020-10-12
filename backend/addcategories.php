<?php 

	include 'dbconnect.php';  // connect the database

	$name = $_POST['name'];
	
	$photo = $_FILES['photo'];
	

	$basepath = "img/logo/";
	$fullpath = $basepath.$photo['name'];
	move_uploaded_file($photo['tmp_name'], $fullpath);

	// echo " $name and $price and $discount and $brand and $subcategory and $description and $codeno <br>";
	// print_r($photo);


	$sql = "INSERT INTO categories(name,logo)
			VALUES(:categorie_name,:categorie_logo)"; // behind the VALES ==> label pay lite tal in the VALUES


		// sql ko check or prepare
	$stmt = $pdo->prepare($sql);


	// Data ko "bindParam " loat p htae

	
	$stmt ->bindParam('categorie_name',$name);
	$stmt ->bindParam('categorie_logo',$fullpath);
	

	// execute() loat mha data ka insert mhar

	$stmt ->execute();


	if($stmt->rowCount()) {
		header("location:categories_list.php");
	}else{
		echo "Error";
	}



 ?>