<?php 

	include 'include/header.php';
 ?>


<!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
 	<h1 class="h3 mb-0 text-gray-800">Categories Create</h1>
 	<a href="subcategories_list.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-backward fa-sm text-white-50"></i> Go Back</a>
 </div>

 <div class="row">
 	<div class="offset-md-2 col-md-8">
 		<form action="addsubcategories.php" method="POST" enctype="multipart/form-data">
 			<div class="form-group">
 				<label>Name</label>
 				<input type="text" name="name" id="name" class="form-control">
 			</div>
 			<div class="form-group">
 				<label for="category">Category</label>
 				<input type="number" name="category" class="form-control" id="category">
 			</div>

 			

 			<input type="submit" class="btn btn-primary float-right" value="Save">

 		</form>
 	</div>
 </div>


 <?php 

 include 'include/footer.php';

  ?>