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
	<title>User Details</title>
</head>
<body class="container-fluid">
	<h2 class="align-center text-align-center">User Details</h2>
	<div class="table-responsive">
		<table class="table table-striped table-hover ">
			<thead class="bg-danger">
				<tr>
				<th>id</th>
				<th>username</th>
				<th>email</th>
				<th>password</th>
				<th>Action</th>
				<th>Action</th>
				</tr>
				
			</thead>
			<tbody>
				<?php 
				$sql = "SELECT * FROM credentials";
				$result = mysqli_query($conn, $sql);
				if (!$result) {
					echo 'query failed' .mysql_error();
				} 
				else {
					 while ($row = mysqli_fetch_assoc($result)) {

					 	?>

					 	<tr>
					 		<td><?php echo $row['id']; ?></td>
					 		<td><?php echo $row['username']; ?></td>
					 		<td><?php echo $row['email']; ?></td>
					 		<td><?php echo $row['password']; ?></td>
					 		<td> <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Update</a></td>
					 		<td> <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
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