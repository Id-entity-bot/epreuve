<?php include 'connect_db.php';
$email=$_POST['email'];
$query_email=mysqli_query($conn,"SELECT * from users where email='$email'");
if(!empty($email)){
	if(mysqli_num_rows($query_email)>0){
		echo " <div style=\"background-color:#ff6666;height:40px;padding : 6px;color:white;\">Email Id already exists</div><script>$(\"#signup\").addClass(\"disabled\");</script>";
	}
	else {
		echo "<div style=\"border-radius:5px;border-width:10px;border-color:#00b33c;color:green;background-color:#4dff88;height:40px;padding : 10px;margin-top:auto;margin-bottom:auto;\">You can signup using this email id.</div><script>$(\"#signup\").removeClass(\"disabled\");$(\"#signup\").addClass(\"active\");</script>";
	}
}else{
	echo "<div style=\"border-radius:5px;background-color:#ff6666;color:white;height:40px;\">Email field cannot be empty</div><script>$(\"#signup\").addClass(\"disabled\");</script>";
}