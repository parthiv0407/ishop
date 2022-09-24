<?php

    include('config.php')
?>
 
<!DOCTYPE html>
<html>
    <head>
        <title>Shopping</title>
        <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.css">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
     <?php 
    echo '<script type="text/JavaScript"> 
     function logout(){
        window.location.href="cuslogin.php";
       }
     </script>'
    ;
    ?>

     
    </head>
   
          
    
    <style>

 </style>
    <body class="container-fluid">
        <header>
            
        </header>
        <section>
            <div class="row bg-danger text-white text-center" id="home">
                <div class="col">
                Amazon Shopping - Online Store
                </div>
            </div>
                 <nav class="navbar navbar-expand-lg navbar-light bg-secondary text-white m-1  " >
                      

                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                          <li class="nav-item active hover-zoom">
                            <a class="nav-link " href="#">Home <span class="sr-only">(current)</span></a>
                          </li>
                          
                          <li class="nav-item active">
                            <a class="nav-link" href="#">Sell </a>
                          </li>
                          <li class="nav-item active">
                            <a class="nav-link" href="#">Best Sellers <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item active">
                            <a class="nav-link" href="#">Mobiles <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item active">
                            <a class="nav-link" href="#">Customer Service <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item active">
                            <a class="nav-link" href="#">Prime <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item active">
                            <a class="nav-link" href="#">New Releases <span class="sr-only">(current)</span></a>
                          </li>

                          

                         
                          
                        </ul>
                        <div>
                            <button class="btn btn-outline-danger mr-sm-2" onclick="logout()">Logout</button>
                        </div>
                        <form class="form-inline my-2 my-lg-0">
                          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                      </div>
                </nav>
                        
                <div class="row mt-3 " style="height: 700px;">
                    <div class="col-3 border border-3 " style="text-decoration: none; outline: none; background-color:       #ffffe6;"> 
                        <ul class="sticky-top m-2" style="">
                          
                            <li><a class="bi bi-house-fill btn btn-warning m-2 text-decoration-none btn-lg" href="#home">Home</a></li>
                            <li><a class="bi bi-phone btn-lg btn btn-warning m-2 text-decoration-none" href="#electronics">Electronics</a></li>
                            <li><a class="bi bi-basket btn-lg btn btn-warning m-2 text-decoration-none" href="#fashion">Fashion</a></li>
                            <li><a class="bi bi-bicycle btn-lg btn btn-warning m-2 text-decoration-none" href="#footwear">Footwear</a></li>
                            <li><a class="bi bi-book btn-lg btn btn-warning m-2 text-decoration-none" href="#book">Books</a></li>
                            <li><a class="bi bi-box btn-lg btn btn-warning m-2 text-decoration-none" href="#grocery">Kitchen</a></li>
                            
                               <button class="btn btn-danger w-100 p-3" onclick="ShowCartItems()" data-bs-target="#CartItems" data-bs-toggle="modal">
                       <span id="cartCount"></span>
                       <span class="bi bi-cart"></span>  Your Cart Items
                    </button>
                          </li>
                               

                        </ul>
                        <div class="">
                           
                    <div class="modal fade" id="CartItems">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Your Cart Items</h2>
                                    <button class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-hover">
                                       <thead>
                                           <tr>
                                               <th>Name</th>
                                               <th>Price</th>
                                               <th>Preview</th>
                                           </tr>
                                       </thead>
                                       <tbody>

                                       </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                                </div>
                            </div>
                        </div>
                    </div>

                        </div>
                    </div>
                <div class="col-9">
                    <h2 style="align-items:center; text-align:center; background-color:  #ccffcc;" id="">Home Page</h2>
                    <h2 style="align-items:center; text-align:center; background-color:    #ff99ff;" id="electronics">Electronics</h2>
                    <table class="table table-striped border border-3 ">
                        <thead class="bg-info">
                            <tr>
                            <th>Productname</th>
                            
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Image</th>
                            <th>Action</th>
                            
                            
                            </tr>
                            
                    </thead>
                    <tbody>
                        <?php
                                $sql = "SELECT * FROM categories WHERE categories='electronics' " ;
                        $result = mysqli_query($conn, $sql);
                        if (!$result) {
                            echo 'query failed' .mysql_error();
                        } 
                        else {
                             while ($row = mysqli_fetch_assoc($result)) {

                                ?>

                        <tr>
                            
                            <td><b><?php echo $row['productname']; ?></b></td>
                            <td><b><?php echo $row['price']; ?></b></td>
                            <td><b><?php echo $row['discount']; ?><span class="bi bi-percent"></span></b></td>
                            <td><img style="width:200px;height: 200px;" src="./image/<?php echo $row['image']; ?>"  alt="Card image cap"></td>
                            <td ><button class="btn btn-danger btn-block "  onclick="AddToCartClick()"> <span class="bi bi-cart3"></span> Add to Cart</button></td>
                            
                            
                        </tr>

                                <?php 
                                
                             }

                            }
                        
                        ?>         
                     </tbody>   
                  </table>

                   <h2 style="align-items:center; text-align:center; background-color: #ff4d94;" id="fashion">Fashion</h2>
                    <table class="table table-striped border border-3 ">
                        <thead class="bg-info">
                            <tr>
                            <th>Productname</th>
                            
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Image</th>
                            <th>Action</th>
                            
                            
                            </tr>
                            
                    </thead>
                    <tbody>
                        <?php
                                $sql = "SELECT * FROM categories WHERE categories='fashion' " ;
                        $result = mysqli_query($conn, $sql);
                        if (!$result) {
                            echo 'query failed' .mysql_error();
                        } 
                        else {
                             while ($row = mysqli_fetch_assoc($result)) {

                                ?>

                        <tr>
                            
                            <td><b><?php echo $row['productname']; ?></b></td>
                            <td><b><?php echo $row['price']; ?></b></td>
                            <td><b><?php echo $row['discount']; ?><span class="bi bi-percent"></span></b></td>
                            <td><img style="width:200px;height: 200px;" src="./image/<?php echo $row['image']; ?>"  alt="Card image cap"></td>
                            <td ><button class="btn btn-danger btn-block "  onclick="AddToCartClick()"> <span class="bi bi-cart3"></span> Add to Cart</button></td>
                            
                            
                        </tr>

                                <?php 
                                
                             }

                            }
                        
                        ?>         
                     </tbody>   
                  </table>
                  <h2 style="align-items:center; text-align:center; background-color:   #ffff80;" id="footwear">Foot Wear</h2>
                    <table class="table table-striped border border-3 ">
                        <thead class="bg-info">
                            <tr>
                            <th>Productname</th>
                            
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Image</th>
                            <th>Action</th>
                            
                            
                            </tr>
                            
                    </thead>
                    <tbody>
                        <?php
                                $sql = "SELECT * FROM categories WHERE categories='footwear' " ;
                        $result = mysqli_query($conn, $sql);
                        if (!$result) {
                            echo 'query failed' .mysql_error();
                        } 
                        else {
                             while ($row = mysqli_fetch_assoc($result)) {

                                ?>

                        <tr>
                            
                            <td><b><?php echo $row['productname']; ?></b></td>
                            <td><b><?php echo $row['price']; ?></b></td>
                            <td><b><?php echo $row['discount']; ?><span class="bi bi-percent"></span></b></td>
                            <td><img style="width:200px;height: 200px;" src="./image/<?php echo $row['image']; ?>"  alt="Card image cap"></td>
                            <td ><button class="btn btn-danger btn-block "  onclick="AddToCartClick()"> <span class="bi bi-cart3"></span> Add to Cart</button></td>
                            
                            
                        </tr>

                                <?php 
                                
                             }

                            }
                        
                        ?>         
                     </tbody>   
                  </table>
                  <h2 style="align-items:center; text-align:center; background-color:     #99bbff;" id="grocery">Kitchen</h2>
                    <table class="table table-striped border border-3 ">
                        <thead class="bg-info">
                            <tr>
                            <th>Productname</th>
                            
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Image</th>
                            <th>Action</th>
                            
                            
                            </tr>
                            
                    </thead>
                    <tbody>
                        <?php
                                $sql = "SELECT * FROM categories WHERE categories='grocery' " ;
                        $result = mysqli_query($conn, $sql);
                        if (!$result) {
                            echo 'query failed' .mysql_error();
                        } 
                        else {
                             while ($row = mysqli_fetch_assoc($result)) {

                                ?>

                        <tr>
                            
                            <td><b><?php echo $row['productname']; ?></b></td>
                            <td><b><?php echo $row['price']; ?></b></td>
                            <td><b><?php echo $row['discount']; ?><span class="bi bi-percent"></span></b></td>
                            <td><img style="width:200px;height: 200px;" src="./image/<?php echo $row['image']; ?>"  alt="Card image cap"></td>
                            <td ><button class="btn btn-danger btn-block "  onclick="AddToCartClick()"> <span class="bi bi-cart3"></span> Add to Cart</button></td>
                            
                            
                        </tr>

                                <?php 
                                
                             }

                            }
                        
                        ?>         
                     </tbody>   
                  </table>
                  <h2 style="align-items:center; text-align:center; background-color:  #99ff99;" id="book">Books</h2>
                    <table class="table table-striped border border-3 ">
                        <thead class="bg-info">
                            <tr>
                            <th>Productname</th>
                            
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Image</th>
                            <th>Action</th>
                            
                            
                            </tr>
                            
                    </thead>
                    <tbody>
                        <?php
                                $sql = "SELECT * FROM categories WHERE categories='book' " ;
                        $result = mysqli_query($conn, $sql);
                        if (!$result) {
                            echo 'query failed' .mysql_error();
                        } 
                        else {
                             while ($row = mysqli_fetch_assoc($result)) {

                                ?>

                        <tr>
                            
                            <td><b><?php echo $row['productname']; ?></b></td>
                            <td><b><?php echo $row['price']; ?></b></td>
                            <td><b><?php echo $row['discount']; ?><span class="bi bi-percent"></span></b></td>
                            <td><img style="width:200px;height: 200px;" src="./image/<?php echo $row['image']; ?>"  alt="Card image cap"></td>
                            <td ><button class="btn btn-danger btn-block "  onclick="AddToCartClick()"> <span class="bi bi-cart3"></span> Add to Cart</button></td>
                            
                            
                        </tr>

                                <?php 
                                
                             }

                            }
                        
                        ?>         
                     </tbody>   
                  </table>
                       
                </div>
        </section>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>
