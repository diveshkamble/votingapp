<?php

if (isset($_POST['submit'])) {
 	

 	include_once 'db.php';

 	$FirstName = mysqli_real_escape_string($conn,$_POST['first_name']);
 	$MiddleName = mysqli_real_escape_string($conn,$_POST['middle_name']);
 	$LastName = mysqli_real_escape_string($conn,$_POST['last_name']);
 	$EmailID = mysqli_real_escape_string($conn,$_POST['email_id']);
 	$Branch = mysqli_real_escape_string($conn,$_POST['branch']);
 	$UINPin = mysqli_real_escape_string($conn,$_POST['uinp']);
 	$passwd = mysqli_real_escape_string($conn,$_POST['pwd']);
 	$passwd2 = mysqli_real_escape_string($conn,$_POST['pwdc']);
 	$PhoneNo = mysqli_real_escape_string($conn,$_POST['phno']);
 	$AboutMe = mysqli_real_escape_string($conn,$_POST['about_me']);

 	if (empty($FirstName)||empty($MiddleName)||empty($LastName)||empty($EmailID)||empty($Branch)||empty($UINPin)||empty($passwd)||empty($passwd2)||empty($PhoneNo)||empty($AboutMe)) {
		header("Location: ../views/registration_candidate.php?registration_candidate=empty");
 		exit();
 	} else {
 		if (!preg_match("/^[a-zA-Z]*$/", $FirstName)|| !preg_match("/^[a-zA-Z]*$/", $MiddleName)|| !preg_match("/^[a-zA-Z]*$/", $LastName)) {
 			header("Location: ../views/registration_candidate.php?signup_voter=invalid");
 			exit();
 			
 		} else{
 			
 			if (!filter_var($EmailID, FILTER_VALIDATE_EMAIL)) {
 				header("Location: ../views/registration_candidate.php?registration_voter=email");
 				exit();
 		}
 		else{
 			$sql = "SELECT * FROM candidates where candidate_uin='$UINPin'";
 			$result = mysqli_query($conn, $sql);
 			$resultcheck = mysqli_num_rows($result);

 			if ($resultcheck>0) {

 				header("Location: ../views/registration_voter.php?registration_voter=UserAlreadyExists");
 				exit();
 			}else {
 					if ($passwd!=$passwd2) {

 						header("Location: ../views/registration_voter.php?registration_voter=PasswordMismatch");
 				exit();
 					} else{


 				$hashedPwd = password_hash($passwd, PASSWORD_DEFAULT);
								$sql = "INSERT INTO candidates (candidate_first, candidate_middle,candidate_last, candidate_email, candidate_branch, candidate_uin, candidate_pwd,candidate_mobile,candidate_about) VALUES ('$FirstName', '$MiddleName', '$LastName', '$EmailID', '$Branch', '$UINPin', '$hashedPwd', '$PhoneNo','$AboutMe');";
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