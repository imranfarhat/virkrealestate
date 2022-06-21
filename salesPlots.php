<?php include("connection.php");
session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png" href="imgs/favicon.png"/>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virk Real Estetes</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/d6fb912aa0.js"></script>
    <link rel="stylesheet" href="css/card.css">
    <style>
        /*properties section styling start*/
        .properties ul {
            list-style: none;
            font-weight: bold;
            color: #563d7c;
        }

        .properties h3 {
            color: #563d7c;
        }

        .properties ul li:hover {
            cursor: pointer;
        }

        .status {
            background: #ff0000;
            color: white;
            padding: 2px;
            border-radius: 0px 4px 4px 0px;
            position: absolute;
            z-index: 1;
            top: 5px;
            left: 0px;
        }
        img{
            height: 320px;
        }
        .row{
            color: #563d7c;
        }
        .row .btn-default{
            background-color: #563d7c !important;
        }
        /*properties section styling end*/
    </style>
</head>

<body>
    <!-- header start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Virk Real Estetes<sup>&reg;</sup></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="salesPlots.php">Sale <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rentPlots.php">Rent</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Maps</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- header section end -->
    <div class="container-fluid">
        <div class="row">
            <?php
            $query = "SELECT * FROM ads WHERE status=1 and Purpose='Sale' ORDER BY Id DESC";
            $run = $connection->query($query);
            while ($data = mysqli_fetch_array($run)) {
                $id = $data['Id'];
                $images = $data['Imgs'];
                if($images){
                    $img = 'uploads/'.$images;
                }
                else {
                    $img = "imgs/no-image.jpg";
                }
            ?>
                <div class="col-md-6 col-lg-6 col-sm-12 text-center">
                    <div class="card mb-3 mt-3" style="max-width: 630px;">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <img src="<?php echo $img;?>" class="card-img" alt="image not found!">
                                <div class="status">SUPER HOT</div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title">PKR <?php echo $data['Price']; ?></h5>
                                    <hr>
                                    <p class="card-text"><i class="fas fa-ruler-combined"></i> <?php echo $data['Area']; ?> <?php echo $data['AreaUnit'] ?></p>
                                    <p class="card-text"><?php echo $data['Title']; ?></p>
                                    <button class="btn btn-default"><a href="viewAd.php?id=<?php echo $id;?>" class="text-light"><i class="far fa-eye"></i></a></button><br><br>
                                    <p class="card-text"><small class="text-muted">Virk Real Estetes<sup>&reg;</sup></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $query = "SELECT * FROM ads WHERE status=2 and Purpose='Sale' ORDER BY Id DESC";
            $run = $connection->query($query);
            while ($data = mysqli_fetch_array($run)) {
                $id = $data['Id'];
                $images = $data['Imgs'];
                if($images){
                    $img = 'uploads/'.$images;
                }
                else {
                    $img = "imgs/no-image.jpg";
                }
            ?>
                <div class="col-md-6 col-lg-6 col-sm-12 text-center">
                    <div class="card mb-3 mt-3" style="max-width: 630px;">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <img src="<?php echo $img;?>" class="card-img" alt="image not found!">
                                <div class="status">HOT</div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title">PKR <?php echo $data['Price']; ?></h5>
                                    <hr>
                                    <p class="card-text"><i class="fas fa-ruler-combined"></i> <?php echo $data['Area']; ?> <?php echo $data['AreaUnit'] ?></p>
                                    <p class="card-text"><?php echo $data['Title']; ?></p>
                                    <button class="btn btn-default"><a href="viewAd.php?id=<?php echo $id;?>" class="text-light"><i class="far fa-eye"></i></a></button><br><br>
                                    <p class="card-text"><small class="text-muted">Virk Real Estetes<sup>&reg;</sup></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            <?php
            $query = "SELECT * FROM ads WHERE status=0 and Purpose='Sale' ORDER BY Id DESC";
            $run = $connection->query($query);
            while ($data = mysqli_fetch_array($run)) {
                $id = $data['Id'];
                $images = $data['Imgs'];
                if($images){
                    $img = 'uploads/'.$images;
                }
                else {
                    $img = "imgs/no-image.jpg";
                }
            ?>
                <div class="col-md-6 col-lg-6 col-sm-12 text-center">
                    <div class="card mb-3 mt-3" style="max-width: 630px;">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <img src="<?php echo $img;?>" class="card-img" alt="image not found!">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title">PKR <?php echo $data['Price']; ?></h5>
                                    <hr>
                                    <p class="card-text"><i class="fas fa-ruler-combined"></i> <?php echo $data['Area']; ?> <?php echo $data['AreaUnit'] ?></p>
                                    <p class="card-text"><?php echo $data['Title']; ?></p>
                                    <button class="btn btn-default"><a href="viewAd.php?id=<?php echo $id;?>" class="text-light"><i class="far fa-eye"></i></a></button><br><br>
                                    <p class="card-text"><small class="text-muted">Virk Real Estetes<sup>&reg;</sup></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
    <!-- footer start -->
    <footer>
        Virk Real Estetes &copy; 2020 | All Rights Reserved
    </footer>
    <!-- footer end -->
</body>

</html>