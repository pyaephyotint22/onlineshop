
 <?php 

	include 'dbconnect.php';

	$id=$_GET['id'];

	$sql="DELETE FROM subcategories Where subcategories.id=:sub_id";
	$stmt=$pdo->prepare($sql);
	$stmt->bindParam('sub_id',$id);
	$stmt->execute();

	if($stmt->rowCount()){
		header("location:subcategory_list.php");
	}else{
		echo "Error";
	}

 ?>