<?php
include ("db/db.php");
if(isset($_POST['submit'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$father_name=$_POST['father_name'];
	$mother_name=$_POST['mother_name'];
	$dob=$_POST['dob'];
	$blood=$_POST['blood'];
	$religion=$_POST['religion'];
	$gender=$_POST['gender'];
	$marital=$_POST['marital'];
	$nid=$_POST['nid'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	$s_institute=$_POST['s_institute'];
	$s_group=$_POST['s_group'];
	$s_pass=$_POST['s_pass'];
	$s_result=$_POST['s_result'];
	$s_board=$_POST['s_board'];
	$h_institute=$_POST['h_institute'];
	$h_group=$_POST['h_group'];
	$h_pass=$_POST['h_pass'];
	$h_result=$_POST['h_result'];
	$h_board=$_POST['h_board'];
	$date=date("Y-m-d");
$sql="insert into cv1(first_name,last_name,father_name,mother_name,dob,blood,	religion,gender,marrid,national_id,email,contact,	address,s_institute,s_group,s_pass,s_result,s_board,h_institute,h_group,h_pass,h_result,h_board,date) 
values(
'$fname','$lname' ,'$father_name','$mother_name','$dob','$blood','$religion','$gender','$marital','$nid','$email','$contact','$address','$s_institute','$s_group','$s_pass','$s_result','$s_board','$h_institute','$h_group','$h_pass','$h_result','$h_board','$date'
)";

$reult=mysqli_query($conn,$sql);
if($reult){
	header("Location: view.php?v=save Success");
}
else{
	echo "server error";
	echo mysqli_error($conn);
}
}
else{
	echo "wrong formet";
}

?>