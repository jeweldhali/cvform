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
					<li class="current"><a href="cv.php">CV</a></li>	
					<li><a href="view.php">CV View</a></li>
				</ul>
				
			</div>
			
		</div>
	</header>
	<!--section -->
	<section class="showcase">
		<div class="container">
			<div class="form">
				<form id="sform" name="sform"  method="post" action="insert.php" onsubmit="return valiform()">

					<div class="form-one">
						<h3>Personal Info</h3>
					<div class="form-control">
						<label>First Name</label>
						<input  type="text" name="fname" placeholder="Enter Your First Name" id="fname">
						
					</div>
					<div class="form-control">
						<label>Last Name</label>
						<input  type="text" name="lname" placeholder="Enter Your Last Name" id="lname" >
					</div>
					<div class="form-control">
						<label>Father’s Name</label>
						<span id="father_name"></span>
						<input type="text" name="father_name" placeholder="Enter Your Father’s Name">
					</div>
					<div class="form-control">
						<label>Mother’s Name</label>
						<input type="text" name="mother_name" placeholder="Enter Your Mother’s Name" id="mother_name">
					</div>
					<div class="form-control">
						<label>Date of Birth</label>
						<input type="date" name="dob" placeholder="Enter Your Date Of Birth">
					</div>
					<div class="form-control">
						<label>Blood Group	</label>
						<select type="text" name="blood">
							<option>Select One</option>
							<option>A+</option>
							<option>A-</option>
							<option>B+</option>
							<option>B-</option>
							<option>AB+</option>
							<option>AB-</option>
							<option>O+</option>
							<option>O-</option>
							

						</select>
					</div>
					<div class="form-control">
						<label>Religion</label><br>
						<select type="text" name="religion" >
							<option>Select One</option>
							<option>Islam</option>
							<option>Hinduism</option>
							<option>Buddhism</option>
							<option>Christianity</option>
							
							<option>Other religions</option>
							
							

						</select>
					</div>
					<div class="form-control">
						<label>Gender</label><br/>
						<select name="gender">
							<option>Select One</option>
							<option value="m">Male</option>
							<option value="f">Female</option>
							<option value="o">Other</option>
						</select>
					</div>
					<div class="form-control">
						<label>Marital Status</label>
						<input type="text" name="marital" placeholder="Enter Your Marital Status">
					</div>
					<div class="form-control">
						<label>National ID No</label>
						<input type="text" name="nid" id="nid"
						placeholder="Enter National ID">
					</div>
					<div class="form-control">
						<label>Email</label>
						<input type="text" name="email" placeholder="Enter Your Email">
					</div>
					<div class="form-control">
						<label>Contact</label>
						<input type="text" name="contact" id="contact" placeholder="Enter Your Phone Number">
					</div>
              <div class="form-control">
						<label>Address</label>
						<textarea type="text" name="address"></textarea>
						
					</div>
					
						</div>
						<div class="form-two">
							<h3>Education Info</h3>

							<div class="form-control">
								<h4>Secondary School Certificate (SSC)</h4><br>
						<label>Institute Name</label>
						<input type="text" name="s_institute" placeholder="Enter Your Institute Name">
					</div>
						<div class="form-control">
								
						<label>Group</label><br>
						<select type="text" name="s_group" >
							<option>Select One</option>
							<option>Science</option>
							<option>Commerce</option>
							<option>Huminity</option>

						</select>
					</div>
					<div class="form-control">
								
						<label>Passing Year</label>
						<select type="text" name="s_pass" >
							<option>Select One</option>
							<option>2018</option>
							<option>2017</option>
							<option>2016</option>
							<option>2015</option>
							<option>2014</option>
							<option>2013</option>
							<option>2012</option>
							<option>2011</option>
							<option>2010</option>
							<option>2009</option>
							<option>2008</option>
							<option>2007</option>
							<option>2006</option>
							<option>2005</option>
							<option>2004</option>
							<option>2003</option>
							<option>2002</option>
							<option>2001</option>
							<option>2000</option>
							<option>1999</option>
							<option>1998</option>
							<option>1997</option>
							<option>1996</option>
							<option>1995</option>
							<option>1994</option>
							<option>1993</option>
							<option>1992</option>
							<option>1991</option>

						</select>
					</div>
					<div class="form-control">
								
						<label>Result</label>
						<input type="text" name="s_result" placeholder="Enter Result">
					</div>
					<div class="form-control">
								
						<label>Board</label><br>
						<select type="text" name="s_board" >
							<option>Select One</option>
							<option value="Dhaka">Dhaka Board</option>
							<option value="Barisal">Barisal Board</option>
							<option value="Sylhet">Sylhet Board</option>
							<option value="Comilla">Comilla Board</option>
							<option value="Chittagong">Chittagong Board</option>
							<option value="Rajshahi">Rajshahi Board</option>
							<option value="Jessore">Jessore   Board</option>
							<option value="Dinajpur"> Dinajpur Board</option>
							<option value="Madrasah">Madrasah Board</option>

						</select>
					</div>
					<div class="form-control">
								<h4>Higher Secondary Certificate (HSC)</h4><br>
						<label>Institute Name</label>
						<input type="text" name="h_institute" placeholder="Enter Year Institute Name">
					</div>
						<div class="form-control">
								
						<label>Group</label><br>
						<select type="text" name="h_group" >
							<option>Select One</option>
							<option>Science</option>
							<option>Commerce</option>
							<option>Huminity</option>

						</select>
					</div>
					<div class="form-control">
								
						<label>Passing Year</label><br>
							<select type="text" name="h_pass" >
							<option>Select One</option>
							<option>2018</option>
							<option>2017</option>
							<option>2016</option>
							<option>2015</option>
							<option>2014</option>
							<option>2013</option>
							<option>2012</option>
							<option>2011</option>
							<option>2010</option>
							<option>2009</option>
							<option>2008</option>
							<option>2007</option>
							<option>2006</option>
							<option>2005</option>
							<option>2004</option>
							<option>2003</option>
							<option>2002</option>
							<option>2001</option>
							<option>2000</option>
							<option>1999</option>
							<option>1998</option>
							<option>1997</option>
							<option>1996</option>
							<option>1995</option>
							<option>1994</option>
							<option>1993</option>
							<option>1992</option>
							<option>1991</option>

						</select>
					</div>
					<div class="form-control">
								
						<label>Result</label><br>
						<input type="text" name="h_result" placeholder="Enter Year Result">
					</div>
					<div class="form-control">
								
						<label>Board</label><br>
						<select type="text" name="h_board" >
							<option>Select One</option>
							<option value="Dhaka">Dhaka Board</option>
							<option value="Barisal">Barisal Board</option>
							<option value="Sylhet">Sylhet Board</option>
							<option value="Comilla">Comilla Board</option>
							<option value="Chittagong">Chittagong Board</option>
							<option value="Rajshahi">Rajshahi Board</option>
							<option value="Jessore">Jessore   Board</option>
							<option value="Dinajpur"> Dinajpur Board</option>
							<option value="Madrasah">Madrasah Board</option>

						</select>

					</div>
					<div class="form-control">
						<label>Picture</label>
						<input type="file" name="pic" >
					</div>
						</div>

						<input type="submit" name="submit" value="Submit">
				</form>
				
			</div>
			
		</div>
	</section>
	<footer>
		<p>2018 &copy; jeweldhaali51@gmail.com</p>
	</footer>

</body>
</html>

<script>  
function valiform(){  
var fname=document.sform.fname.value;
var lname=document.sform.lname.value;
var nid=document.sform.nid.value;
var contact=document.sform.contact.value;      
var status=false;  
  
if(fname==null || fname==""){  
document.getElementById("fname").style.border=  
"2px solid red";  
status=false;  
}else{  
document.getElementById("fname").style.border=  
"2px solid green";   
status=true;  
} 
if(lname=="" || lname==null){  
document.getElementById("lname").style.border=  
"1px solid red"; 
status=false;  
}else{  
document.getElementById("lname").style.border=  
"1px solid green";
}  
 if(nid=="" || nid==null){  
document.getElementById("nid").style.border=  
"1px solid red"; 
status=false;  
}else{  
document.getElementById("nid").style.border=  
"1px solid green";
} 
 if(contact=="" || contact==null){  
document.getElementById("contact").style.border=  
"1px solid red"; 
status=false;  
}else{  
document.getElementById("contact").style.border=  
"1px solid green";
} 

return status;  
}  
</script> 