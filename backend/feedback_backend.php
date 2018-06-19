<?php
 if (isset($_POST['submit'])) {
 	

 	include_once 'db.php';

 	$name = mysqli_real_escape_string($conn,$_POST['full_name']);
 	$email_id = mysqli_real_escape_string($conn,$_POST['email-id']);
 	$feedback = mysqli_real_escape_string($conn,$_POST['feedback-box']);

 	if (empty($name)||empty($email_id)||empty($feedback)) {
		header("Location: ../views/feedback.php?feedback=empty");
		
 		exit();

 		} else {
 		if (!preg_match("/^[a-zA-Z]*$/", $name)) {
 			header("Location: ../views/feedback.php?feedback=invalid");
 			
 			exit();

 			} else {
 			if (!filter_var($email_id, FILTER_VALIDATE_EMAIL)) {
 				header("Location: ../views/feedback.php?feedback=email");
 				exit();
 			}
 			else{
 	
 	$sql = "INSERT INTO feedback (name, email,feedback) VALUES ('$name', '$email_id', '$feedback');";
					mysqli_query($conn, $sql);
					header("Location: ../views/feedback.php?feedback=success");
				
					exit();
				}
			}
}
}
else {
 	header("Location: ../views/feedback.php");
 	exit();
 }