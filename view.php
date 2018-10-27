<?php
include ("db/db.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
    <title>CV Fomet</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<header>
		<div class="container">
			<div class="header-logo">
				<h2><a href="#"><span class="current">dreamers</span> it</a></h2>
				
			</div>
			<div class="nav">
				<ul>
					<li ><a href="index.php">Home</a></li>
					<li><a href="cv.php">CV</a></li>
					<li class="current"><a href="view.php">CV View</a></li>
				</ul>
				
			</div>
			
		</div>
	</header>
	<!--section -->
	<section>
		<div class="container">
		<div class="table">
			<div class="heading">
				<h2>Total View result</h2>
			</div>
			<table>
				<thead>
					<tr>
						<th>Id</th>
						<th>Email</th>
						<th>View</th>
					</tr>

				</thead>
				<tbody>
					<?php
					$sql="select * from cv1";
					$result=mysqli_query($conn,$sql);
					while ($d=$result->fetch_object())
    {
    	
 
    
					?>
					<tr>
						<td><?php echo $d->id; ?></td>
						<td><?php echo $d->email;?></td>
						
						<td><a href="cv_view.php?ids=<?php echo $d->id; ?>">View CV</a></td>
					</tr>
					<?php 
}
					?>
				</tbody>
			</table>
			
		</div>
			
		</div>
	</section>
	<footer>
		<p>2018 &copy;jeweldhali51@gmail.com</p>
	</footer>

</body>
</html>