<?php include 'connect_db.php';
$username=$_POST['name'];
$query_username=mysqli_query($conn,"SELECT * from users where username='$username'");
if(!empty($username)){
	if( mysqli_num_rows($query_username)>0){
		echo " <div style=\"border-radius:5px;background-color:#ff6666;color:white;height:40px;padding : 6px;\">Username already exists...</div><script>$(\"#signup\").addClass(\"disabled\");</script>";
	}
	else {
		echo "<div style=\"border-radius:5px;border-width:10px;border-color:#00b33c;color:green;background-color:#4dff88;height:40px;padding : 10px;font-size:15px;\">Username Available</div><script>$(\"#signup\").removeClass(\"disabled\");$(\"#signup\").addClass(\"active\");</script>";
	}
}
else{
	echo "<div style=\"border-radius:5px;background-color:#ff6666;color:white;height:40px;padding : 6px;\">Username cannot be empty</div><script>$(\"#signup\").addClass(\"disabled\");</script>";
}