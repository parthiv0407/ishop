<?php
 include('config.php')

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<title>Demo
	</title>
</head>
<body>
	<?php
			
			$sql = "SELECT * FROM categories";
			$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
			while( $record = mysqli_fetch_assoc($resultset) ) {
			?>
           
            <div class="card-deck">
                     <!--Card-1-->
                        <div class="card" s>
                             <div class="card-header">
                                <h3 class="card-title"><?php echo $record['productname']; ?></h3>
                                 <h5 class="card-subtitle"><?php echo $record['price']; ?></h5>
                        </div>
                     <div class="card-body">
                            <img src="../Images/shoe.jpg" width="200" height="200">
                     <div>
                        <p><?php echo $record['discount']; ?></p>
                     </div>
                     </div>
                     <div class="card-footer">
                        <button class="btn btn-danger btn-block"> <span class="fa fa-shoppingcart"></span> Add to Cart</button>
                     </div>
                     </div>



			<?php } ?>

</body>
</html>