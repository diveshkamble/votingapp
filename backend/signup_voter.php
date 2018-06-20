<?php
 if (isset($_POST['submit'])) {
 	

 	include_once 'db.php';

 	$FirstName = mysqli_real_escape_string($conn,$_POST['first_name']);
 	$MiddleName = mysqli_real_escape_string($conn,$_POST['middle_name']);
 	$LastName = mysqli_real_escape_string($conn,$_POST['last_name']);
 	$EmailID = mysqli_real_escape_string($conn,$_POST['email_id']);
 	$Branch = mysqli_real_escape_string($conn,$_POST['branch']);
 	$passwd = mysqli_real_escape_string($conn,$_POST['pwd']);
 	$passwd2 = mysqli_real_escape_string($conn,$_POST['pwdc']);
 	$PhoneNo = mysqli_real_escape_string($conn,$_POST['phno']);
 	$UINPin = mysqli_real_escape_string($conn,$_POST['uinp']);

 	//error handlers
 	//Check for empty fields
 	if (empty($FirstName)||empty($MiddleName)||empty($LastName)||empty($EmailID)||empty($Branch)||empty($passwd)||empty($passwd2)||empty($PhoneNo)||empty($UINPin)) {
		header("Location: ../views/registration_voter.php?registration_voter=empty");
 		exit();
 	} else {
 		//check if input characters are valid
 		if (!preg_match("/^[a-zA-Z]*$/", $FirstName)|| !preg_match("/^[a-zA-Z]*$/", $MiddleName)|| !preg_match("/^[a-zA-Z]*$/", $LastName)) {
 			header("Location: ../views/registration_voter.php?signup_voter=invalid");
 			exit();
 			
 		} else{
 			//check if email is valid
 			if (!filter_var($EmailID, FILTER_VALIDATE_EMAIL)) {
 				header("Location: ../views/registration_voter.php?registration_voter=email");
 				exit();
 		}
 		else{
 			$sql = "SELECT * FROM voters where voter_uin='$UINPin'";
 			$result = mysqli_query($conn, $sql);
 			$resultcheck = mysqli_num_rows($result);

 			if ($resultcheck>0) {

 				header("Location: ../views/registration_voter.php?registration_voter=usernameTaken");
 				exit();
 			}else {
 					if ($passwd!=$passwd2) {

 						header("Location: ../views/registration_voter.php?registration_voter=PasswordMismatch");
 				exit();
 					} else{


 				$hashedPwd = password_hash($passwd, PASSWORD_DEFAULT);
					//Insert the user into the database
					$sql = "INSERT INTO voters (voter_first, voter_middle,voter_last, voter_email, voter_branch, voter_pwd,voter_mobile,voter_uin) VALUES ('$FirstName', '$MiddleName', '$LastName', '$EmailID', '$Branch', '$hashedPwd', '$PhoneNo', '$UINPin');";
					mysqli_query($conn, $sql);
					header("Location: ../views/success.php");
					exit();
						}
 				}
 			}
 		}
 	}

 } else {
 	header("Location: ../views/registration_voter.php");
 	exit();
 }