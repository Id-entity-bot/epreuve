<?php session_start();
include 'connect_db.php';
// if(isset($_SESSION['user'])!="")
// {
//     header("Location: play.php");
// }

$email=$_POST['email'];
$passwor=$_POST['pass'];
// echo $email;
    if(!empty($email) && !empty($passwor))
    {
        $email=addslashes($email);
        $password=addslashes($passwor);
        $salt_extract = "SELECT salt FROM users WHERE email='$email'";
        $salt_extract_run = mysqli_query($conn,$salt_extract);
        $row = mysqli_fetch_array($salt_extract_run);
        // echo $row;
        if(mysqli_num_rows($salt_extract_run)>0)
        {
            $salt = $row['salt'];
        

        $salted_pw = $password.$salt ;
        $hashed_pw = hash('sha256', $salted_pw);

        $query1 ="SELECT * FROM users WHERE email='$email' AND password='$hashed_pw'";
        $query1_run=mysqli_query($conn,$query1);
        $query_row=mysqli_fetch_array($query1_run);

        $hashed_pw1 = hash('sha256', $salted_pw);
        $query11 ="SELECT * FROM users WHERE email='$email' AND password='$hashed_pw1'";
        $query11_run=mysqli_query($conn,$query11);
        $query11_row=mysqli_fetch_array($query11_run);
        if(mysqli_num_rows($query1_run)>0)
        {  
                $_SESSION['usertype']='player';
                $_SESSION['user'] = $query_row['username'];
                $_SESSION['email']=$query_row['email'];
                session_regenerate_id(true);
                $_SESSION['userhome']='play.php';
                echo 'success';
            
        }
        else
        {
            echo "check password";
        }
        }
        /*else if(mysqli_num_rows($query11_run)>0)
        {
            header("Location:hack.php");
        }*/
        
        else
        {   
            echo 'check';
        }
    }
    else
    {
        echo 'empty';
    }

    mysqli_close($conn);
?>