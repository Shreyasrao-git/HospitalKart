<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div>
        <div id="banner">
            <div id="bannerImage">
                <div class="container">
                    <center>
                        <div id="bannerContent">
                            <h1>HospitalKart</h1>
                            <p>Buy or Rent medical equipment</p>
                            <a href="products.php" class="btn btn-danger">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="products.php">
                            <img src="img/surgical.jpg" alt="Surgical Equipment">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Surgical Equipments</p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="products.php">
                            <img src="img/personal_protection.jpg" alt="Personal Protection Equipment">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Protective Equipment</p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="products.php">
                            <img src="img/computer-aided.jpg" alt="Computer Aided Diagnostics">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Computer Aided Diagnostics</p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="products.php">
                            <img src="img/medical_equipments.jpg" alt="Medical Equipment">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Medical Equipment</p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="products.php">
                            <img src="img/implantable.jpg" alt="Implantable Devices">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Implantable Devices</p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="products.php">
                            <img src="img/imaging.jpg" alt="Imaging Equipment">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Imaging Equipment</p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="products.php">
                            <img src="img/single-use.jpg" alt="Single Use Equipment">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">Single Use Devices</p>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="thumbnail">
                        <a href="products.php">
                            <img src="img/invitro.jpg" alt="In-vitro Equipment" style="max-height : 525px">
                        </a>
                        <center>
                            <div class="caption">
                                <p id="autoResize">In-vitro Diagnostics</p>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br><br> <br><br><br><br>
    <footer class="footer">
        <div class="container">
            <center>
            </center>
        </div>
    </footer>
    </div>
    </body>
</html>