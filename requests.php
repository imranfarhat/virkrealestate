<?php require("connection.php");
session_start();
if (!isset($_SESSION['Email'])) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Requests</title>
    <link rel="shortcut icon" href="imgs/favicon.ico">
    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/sidenav.css">
    <link rel="stylesheet" type="text/css" href="font/css/all.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/requests.css">
    <script src="js/admin.js"></script>
    <script>
        function addProperty() {
            window.location.href = ("posting.php");
        }

        function sale() {
            window.location.href = ("sale.php");
        }

        function rent() {
            window.location.href = ("rent.php");
        }

        function hot() {
            location.assign("hotAds.php");
        }

        function superHot() {
            location.assign("superHotAds.php");
        }
        function messages() {
            location.assign("messages.php");
        }
        function feature() {
            location.assign("featureAds.php");
        }
    </script>
</head>

<body>
    <div class="header">
        <?php
        $email = $_SESSION['Email'];
        $nameQuery = "SELECT * FROM admin WHERE Email='$email'";
        $runName = $connection->query($nameQuery);
        $adminName = mysqli_fetch_array($runName);
        ?>
        <div class="container-fluid">
            <div class="row d-flex d-md-block flex-nowrap wrapper">
                <div class="col-md-2 float-left col-1 pl-0 pr-0 collapse width " id="sidebar">
                <div class="list-group border-0 card text-center text-md-left">
                        <h4 class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><img src="imgs/my.jpg" class="img-fluid" style="width:60px;height:60px;border-radius:100px;margin-left:50px;"><br> <span class="d-none d-md-inline text-center"><?php echo $adminName['Name']; ?></span></h4>
                        <br> <a href="#" onclick="admin()" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fas fa-tachometer-alt"></i> <span class="d-none d-md-inline">Dashboard</span></a>
                        <a href="#" onclick="sale()" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="far fa-money-bill-alt"></i> <span class="d-none d-md-inline">Sale</span></a>
                        <a href="#" onclick="rent()" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fas fa-vihara"></i> <span class="d-none d-md-inline">Rent</span></a>
                        <a href="#" onclick="hot()" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fas fa-fire"></i> <span class="d-none d-md-inline">Hot</span></a>
                        <a href="#" onclick="superHot()" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fas fa-pepper-hot"></i> <span class="d-none d-md-inline">Super Hot</span></a>
                        <a href="#" onclick="feature()" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fas fa-bolt"></i> <span class="d-none d-md-inline">Feature Ads</span></a>
                        <a href="#" onclick="messages()" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="far fa-comment-alt"></i><span class="d-none d-md-inline">Messages</span></a>
                        <a href="#" onclick="maps()" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fas fa-map-marked-alt"></i><span class="d-none d-md-inline">Maps</span></a>
                        <a href="#" onclick="requests()" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fas fa-user-tie"></i> <span class="d-none d-md-inline">Admin Requests</span></a>
                        <a href="#" onclick="logout()" class="list-group-item d-inline-block collapsed" data-parent="#sidebar"><i class="fas fa-sign-out-alt"></i> <span class="d-none d-md-inline">Logout</span></a>

                    </div>
                </div>
                <div>
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <a href="#" data-target="#sidebar" data-toggle="collapse" aria-expanded="false"><i class="fas fa-bars fa-2x py-2 p-1"></i></a>
                        <a class="navbar-brand" href="#" style="margin-left: 10px;">Virk Real Estetes<sup>&reg;</sup></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" onclick="addProperty()" href="#">Add Property <span class="sr-only">(current)</span></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <br>
            <!--end header container-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h4 id="heading"><i class="fas fa-user-tie fa-1x"></i> Panding Requests</h4>
                        <div class="container">
                            <div class="jumbotron">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Cnic</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $adminQuery = "SELECT * FROM admin WHERE status=0";
                                        $runAdminQuery = $connection->query($adminQuery);
                                        while ($result = mysqli_fetch_array($runAdminQuery)) {
                                            $id = $result['Id'];
                                            echo "<tr>";
                                            echo "<td>" . $result['Name'] . "</td>";
                                            echo "<td>" . $result['Cnic'] . "</td>";
                                            echo "<td>" . $result['Email'] . "</td>";
                                            echo "<td>" . $result['Address'] . "</td>";
                                            echo "<td> <a href ='add_admin.php?id=$id'><button class='btn btn-success'><i class='fas fa-check'></i> Accept</button></a>";
                                            echo "<td> <a href ='delete_admin.php?id=$id'><button class='btn btn-danger'><i class='fas fa-trash'></i> Delete</button></a>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!--end footer-->
</body>

</html>