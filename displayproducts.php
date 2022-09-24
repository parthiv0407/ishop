<?php
            
                        $sql = "SELECT * FROM categories";
                        $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));          
                        while( $record = mysqli_fetch_assoc($resultset) ) {
                        ?>
           
                     <div class="">
                         <div >
                             <div class="card" >
                              <img class="card-img-top" src="./image/<?php echo $record['image']; ?>" alt="Card image cap">
                              <div class="card-body text-center">
                                <h5 class="card-title"><?php echo $record['productname']; ?></h5>
                                <p class="card-text"><?php echo $record['price'].'/-'; ?></p>
                                
                              </div>
                              <div class="card-footer">
                                <button class="btn btn-danger btn-block"> <span class="bi bi-cart3"></span> Add to Cart</button>
                             </div>
                        </div>
                     </div>
                    
                  
                     <?php } ?>