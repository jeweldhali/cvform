<?php
include ("db/db.php");
?>
<script>
    function printDiv(divName){
      var printContents = document.getElementById(divName).innerHTML;
      var originalContents = document.body.innerHTML;
      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
    }
  </script>

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
					<li class="current"><a href="index.php">Home</a></li>
					<li><a href="cv.php">CV</a></li>
					<li><a href="view.php">CV View</a></li>
				</ul>
				
			</div>
			
		</div>
	</header>
	<!--section -->
	<div class="button-print">
		<button onclick="printDiv('printMe')">Print CV</button>
	</div>
	<?php
      $sql = "select * from cv1 where id='".$_GET['ids']."'";
      $data = $conn->query($sql);
        while($d = $data->fetch_object()) {
?>
	<section id='printMe'>
		<div class="container">
		 <div class="cv_view">
		 	<h2>resume OF
            	<?php echo $d->first_name ." ". $d->last_name ?>
			</h2>
		 	<div class="cv_view-header">
		 		<div class="cv_view-header-left">
		 		<h3>CONTACT INFORMATION:</h3>
                <ul>
			 		<li>Email : <?php echo $d->email;?></li>
			 		<li>Phone : <?php echo $d->contact;?></li>
			 	</ul>
		 	</div>
		 	<div class="cv_view-header-right">
		 		<img src="img/profile.jpg" >
		 	</div>
		 </div>
		 <div class="objective">
		 	<h3>OBJECTIVE:</h3>
		 	<ol>
		 		<li>1.To continue research career in the field of Computer Science & Engineering</li>
		 		<li>2.To contribute towards developing a sustainable research environment.  </li>
		 	</ol>
		 		<h3>EDUCATIONAL QUALIFICATION:</h3>
		 		<h4>Higher Secondary Certificate (HSC)</h4>
		 		<ul>
		 		<li>Group : <?php echo $d->h_group;?></li>
		 		<li>Result : <?php echo $d->h_result;?></li>

		 		<li>Year : <?php echo $d->h_pass;?></li>
		 		<li>Institute : <?php echo $d->h_institute;?></li>
		 		<li>Board : <?php echo $d->h_board;?></li>
		 	</ul>
		 		<h4>Secondary School Certificate (SSC)</h4>
		 	<ul>
		 		<li>Group : <?php echo $d->s_group;?></li>
		 		<li>Result : <?php echo $d->s_result;?></li>

		 		<li>Year : <?php echo $d->s_pass;?></li>
		 		<li>Institute : <?php echo $d->s_institute;?></li>
		 		<li>Board : <?php echo $d->s_board;?></li>
		 	</ul>
		 	<h3>PERSONAL INFORMATION:</h3>
		 	<ul>
		 		<li>Name	: <?php echo $d->first_name ." ". $d->last_name ?></li>
				<li>Father’s Name	: <?php echo $d->father_name;?></li>
				<li>Mother’s Name	: <?php echo $d->mother_name;?></li>
				<li>Permanent Address	: <?php echo $d->address;?></li>

				<li>Date of Birth	: <?php echo $d->dob?></li>
				<li>Blood Group		: <?php echo $d->blood;?></li>
				<li>Religion		: <?php echo $d->religion;?></li>
				<li>Sex			    : <?php echo $d->gender;?></li>
				<li>Marital Status	: <?php echo $d->marrid;?></li>
				<li>National ID No	: <?php echo $d->national_id;?></li>
				</li>
		 	</ul>
		 </div>
			
		</div>
	</section>
	<?php
	}
	?>
	
	<footer>
		<p>&copy;jeweldhali51@gmail.com</p>
	</footer>

</body>
</html>