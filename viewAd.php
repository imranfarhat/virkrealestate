<?php require("connection.php");
session_start();
$id = $_REQUEST["id"];
$query = "SELECT * FROM ads WHERE Id='$id'";
$fire = $connection->query($query);
$run = mysqli_fetch_array($fire);
$views = $run['views'];
$visitorIp = $_SERVER['REMOTE_ADDR'];
$addView = $views + 1;
$addVisitor = "UPDATE ads SET views='$addView' WHERE Id = $id";
$fireCounter = $connection->query($addVisitor);
$images = $run['Imgs'];
if ($images) {
	$img = 'uploads/' . $images;
} else {
	$img = "imgs/no-image.jpg";
}
?>
<!DOCTYPE html>
<html>

<head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Virk Real Estetes</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://kit.fontawesome.com/d6fb912aa0.js"></script>
	<style>
		.heading {
			background-color: #563d7c;
			color: white;
		}
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

	<div class="container">
		<h3 class="text-center mt-5 mb-5">Virk Real Estete<sup>&reg;</sup></h3>
		<div class="row mb-5">
			<div class="col-lg-6 col-md-12 col-sm-12">
				<img src="<?php echo $img; ?>" class="img-fluid">
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12">
				<table class="table table-bordered table-striped">
					<tr>
						<td colspan="3" class="heading">
							<h4 class="text-center">Property Details</h4>
						</td>
					</tr>
					<tr>
						<td class="text-center">Price</td>
						<td colspan="2">
							<h6 class="text-center"><?php echo $run["Price"]; ?></h6>
						</td>
					</tr>
					<tr>
						<td colspan="3" class="text-justify"><?php echo $run["Title"]; ?></td>
					</tr>
					<tr>
						<td colspan="3" class="text-justify">
							<p><?php echo $run["Description"]; ?></p>
						</td>
					</tr>
					<tr>
						<td colspan="3" class="text-center">A Block Phase 1 DHA Lahore Cantt</td>
					</tr>
					<tr class="text-center">
						<td><i class="fas fa-bed"></i> <?php echo $run["Beds"]; ?></td>
						<td><i class="fas fa-bath"></i> <?php echo $run["Baths"]; ?></td>
						<td><i class="fas fa-ruler-combined"></i> <?php echo $run["Area"]; ?> <?php echo $run["AreaUnit"]; ?></td>
					</tr>
				</table>
				<table class="table table-bordered table-striped text-center">
					<tr>
						<td class="heading" colspan="2">
							<h4>Agent Details</h4>
						</td>
					</tr>
					<tr>
						<td>Name</td>
						<td><?php echo $run["Name"]; ?></td>
					</tr>
					<tr>
						<td>Mobile</td>
						<td><?php echo $run["Mobile"]; ?></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><?php echo $run["Email"]; ?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<!-- footer start -->
	<footer>
		Virk Real Estetes &copy; 2020 | All Rights Reserved
	</footer>
	<!-- footer end -->
</body>

</html>