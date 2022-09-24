 <?php
    include('config.php')


 ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
     <link rel="stylesheet" href="dashboard.css">

 </head>

 <body>
     <nav class="navbar" id="navbar">
         <div class="navbar-container container" id="container">

             <!-- <div class="lines">
                 <span class="line line1"></span>
                 <span class="line line2"></span>
                 <span class="line line3"></span>
             </div> -->
             <div style="font-size: 25px;">
                <button onclick="back()" id="backbtn">
                    <i class="fa-solid fa-angles-left"></i>
                </button>
                 <button onclick="enter()" id="menubtn">
                     <i class="fa-solid fa-bars"></i>
                 </button>
                 <button>
                     <i class="fa-solid fa-user"></i>
                 </button>
             </div>
             <h1 class="logo">Dashboard</h1>
         </div>
     </nav>
     <div class="menu">
         <ol class="menu-items left-menu" style="padding: 0px" id="left-menu">
             <div>
                 <li class="menu-head">Suffi Admin</li>
                 <div>
                     <li>
                         <a class="menu-head-inside" href="#">
                             <div class="dropdown">
                                 <button class="drpbtn">Dashboard</button>
                             </div>
                         </a>
                     </li>
                 </div>
             </div>
             <div>
                 <li class="menu-head" href="#">UI Elements </li>
                 <div>
                     <div>
                         <li>
                             <a class="menu-head-inside" href="#">
                                 <div class="dropdown">
                                     <button class="drpbtn">Components</button>
                                     <div class="dropdown-items">
                                         <a href="">hello</a>
                                         <a href="">hello</a>
                                     </div>
                                 </div>
                             </a>
                         </li>
                     </div>
                     <div>
                         <li>
                             <a class="menu-head-inside" href="#">
                                 <div class="dropdown">
                                     <button class="drpbtn">Tables</button>
                                     <div class="dropdown-items">
                                         <a href="">hello</a>
                                         <a href="">hello</a>
                                     </div>
                                 </div>
                             </a>
                         </li>
                     </div>
                     <div>
                         <li>
                             <a class="menu-head-inside" href="#">
                                 <div class="dropdown">
                                     <button class="drpbtn">Forms</button>
                                     <div class="dropdown-items">
                                         <a href="">hello</a>
                                         <a href="">hello</a>
                                     </div>
                                 </div>
                             </a>
                         </li>
                     </div>
                 </div>
             </div>
             <div>
                 <li class="menu-head">Icons </li>
                 <Div>
                     <div">
                         <li>
                             <a class="menu-head-inside" href="#">
                                 <div class="dropdown">
                                     <button class="drpbtn">Icons</button>
                                     <div class="dropdown-items">
                                         <a href="">hello</a>
                                         <a href="">hello</a>
                                     </div>
                                 </div>
                             </a>
                         </li>
                 </div>
                 <div>
                     <li>
                         <a class="menu-head-inside" href="#">
                             <div class="dropdown">
                                 <button class="drpbtn">Widgets</button>
                                 <div class="dropdown-items">
                                     <a href="">hello</a>
                                     <a href="">hello</a>
                                 </div>
                             </div>
                         </a>
                     </li>
                 </div>
                 <div>
                     <li>
                         <a class="menu-head-inside" href="#">
                             <div class="dropdown">
                                 <button class="drpbtn">Charts</button>
                                 <div class="dropdown-items">
                                     <a href="">hello</a>
                                     <a href="">hello</a>
                                 </div>
                             </div>
                         </a>
                     </li>
                 </div>
                 <div>
                     <li>
                         <a class="menu-head-inside" href="#">
                             <div class="dropdown">
                                 <button class="drpbtn">Maps</button>
                                 <div class="dropdown-items">
                                     <a href="">hello </a>
                                     <a href="">hello</a>
                                 </div>
                             </div>
                         </a>
                     </li>
                 </div>
             </Div>
         </ol>
     </div>
     <!-- <div>
         <li class="menu-head" href="#">Extars </li>
         <div>
             <li>

                 <a class="menu-head-inside" href="#">
                     <div class="dropdown">
                         <button>pages</button>
                         <div class="dropdown-items">
                             <a href="">hello</a>
                             <a href="">hello</a>
                         </div>
                     </div>
                 </a>

             </li>
         </div>
     </div> -->

     <div class="images">
        <div>
            
        </div>
         <div class="graphs" id="graph">

            <?php
                                $sql = "SELECT * FROM categories WHERE categories='electronics' " ;
                        $result = mysqli_query($conn, $sql);
                        if (!$result) {
                            echo 'query failed' .mysql_error();
                        } 
                        else {
                             while ($row = mysqli_fetch_assoc($result)) {

                                ?>
                                  <div class="w3-col l3 m6 w3-margin-bottom" style="margin-top: 100px;">
                <div class="card" id="graph1" >
                    
                    <div class="num-count">
                        <p style="margin: 7px;
                            margin-left: 45px; color:black;" > <b><?php echo $row['productname']; ?></b></p>
                        <p style="margin: 7px;
                            margin-left: 80px; color: black"><?php echo $row['price']; ?></p>
                        <div class="graph-line">
                           <img style="width:200px;height: 200px;" src="./image/<?php echo $row['image']; ?>"  alt="Card image cap">
                        </div>
                    </div>
                </div>
            </div>
                                <?php 
                                
                             }

                            }
                        
                        ?> 
        
         </div>
           <div class="graphs" id="graph">

            <?php
                                $sql = "SELECT * FROM categories WHERE categories='fashion' " ;
                        $result = mysqli_query($conn, $sql);
                        if (!$result) {
                            echo 'query failed' .mysql_error();
                        } 
                        else {
                             while ($row = mysqli_fetch_assoc($result)) {

                                ?>
                                  <div class="w3-col l3 m6 w3-margin-bottom" style="margin-top: 100px;">
                <div class="card" id="graph1" >
                    
                    <div class="num-count">
                        <p style="margin: 7px;
                            margin-left: 45px; color:black;" > <b><?php echo $row['productname']; ?></b></p>
                        <p style="margin: 7px;
                            margin-left: 80px; color: black"><?php echo $row['price']; ?></p>
                        <div class="graph-line">
                           <img style="width:200px;height: 200px;" src="./image/<?php echo $row['image']; ?>"  alt="Card image cap">
                        </div>
                    </div>
                </div>
            </div>
                                <?php 
                                
                             }

                            }
                        
                        ?> 
        
         </div>
         
        
         
         
     </div>

 </body>
 <script>
    function enter(){
        document.getElementById('left-menu').style.display = 'block';
        document.getElementById('navbar').style.left = '283px';
        document.getElementById('backbtn').style.display = 'inline';
        document.getElementById('container').style.width = '80%';
        document.getElementsByClassName('card').style.width = '236px';
        document.getElementsById('graph').style.margin = '17%';
        document.getElementsByClassName('smcard').style.width = '236px';
        document.getElementsById('smtracking').style.margin = '17%';

       
    }
    function back(){
        document.getElementById('left-menu').style.display = 'none';
        document.getElementById('navbar').style.left = '0px';
        document.getElementById('backbtn').style.display = 'none';
        document.getElementById('container').style.width = '100%';

    }

 </script>

 </html>