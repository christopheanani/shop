<?php 
session_start();
include "conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);

	if (empty($email)) {
		header("Location: login.php?error=User email is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
		$result = $conn ->prepare($sql);
		$result ->execute();

		if ($result) {
			$row = $result->fetch();

            if ($row['email'] === $email && $row['password'] === $pass) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['lastname'] = $row['lastname'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: home.php");
		        exit();
            }else{
				 header("Location: login.php?error=Incorect User email or password");
		         exit();
			}
		}else{
			 header("Location: login.php?error=Incorect User email or password");
	         exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}