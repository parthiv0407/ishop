<!DOCTYPE html>
<html>
<head>
	<?php 
		include 'config.php'

	 ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel=”stylesheet” href=”https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css”rel=”nofollow” integrity=”sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm” crossorigin=”anonymous”>
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<title>Product Details</title>
	 <?php 
    echo '<script type="text/JavaScript"> 
     function logout(){
        window.location.href="index.php";
       }
     </script>'
    ;
    ?>
</head>
<body class="container-fluid">
	<div class="align-center " style="align-items:center; justify-content:center;">
		<h2 >product details</h2>
	</div>
	<a class="btn btn-success m-2" href="productinsert.php">Insert Items</a>
	<div class="">
		<button class="btn btn-outline-danger m-2" onclick="logout()">Logout
			
		</button>
	<div class="table-responsive">
		<table class="table table-striped table-hover ">
			<thead class="bg-danger">
				<tr>
				<th>id</th>
				<th>productname</th>
				<th>price</th>
				<th>discount</th>
				<th>image</th>
				
				<th>Action</th>
				<th>Action</th>
				</tr>
				
			</thead>
			<tbody>
				<?php
				$sql = "SELECT * FROM categories";
				$result = mysqli_query($conn, $sql);
				if (!$result) {
					echo 'query failed' .mysql_error();
				} 
				else {
					 while ($row = mysqli_fetch_assoc($result)) {

					 	?>

					 	<tr>
					 		<td><?php echo $row['id']; ?></td>
					 		<td><?php echo $row['productname']; ?></td>
					 		<td><?php echo $row['price']; ?></td>
					 		<td><?php echo $row['discount']; ?></td>
					 		<td><?php echo $row['image']; ?></td>
					 		
					 		<td> <a href="productupdate.php?id=<?php echo $row['id']; ?>" class="btn btn-primary "><span class="bi bi-upload"></span> Update</a></td>
					 		<td> <a href="deleteproduct.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="bi bi-trash"></span> Delete</a></td>
					 	</tr>

					 	<?php 
					 	
					 }

					}
				
				?>

				

				
				
				
			</tbody>
		
	</table>
	</div>
	<div>
		<p id="msg"></p>
	</div>



</body>
</html>