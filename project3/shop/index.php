<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/x.jpg" />
        <title>SENTHIL SHOP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
       
        <link rel="stylesheet" href="css/senthil.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>PONGAL OFFER 2019</h1>
                       <p>LED TV in low cost </p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/sony1.jpeg" alt="sony">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Sony</p>
                                        <p>SONY TV</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/lg1.jpeg" alt="lg">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">LG</p>
                                    <p>LG TV</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/mi1.jpeg" alt="mi">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">MI</p>
                                   <p>MI TV</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy <a href='#'>SENTHIL INFOTECH</a> . All Rights Reserved.</p>
                   <p> DEVELOPED by R.SENTHIL KUMAR</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>