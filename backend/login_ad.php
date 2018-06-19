<?php

session_start();

if (isset($_POST['submit'])) {
	
	include 'db.php';

	$vid = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['passw']);

	if (empty($vid) || empty($pwd)) {
		header("Location: ../index.php?login=empty");
		exit();
	} else {
		$sql = "SELECT * FROM admin WHERE admin_email='$vid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../index.php?login=error");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				
				$hashedPwdCheck = md5($pwd);
				if ($hashedPwdCheck != $row['admin_pwd']) {
					header("Location: ../index.php?login=error");
					exit();
				} elseif ($hashedPwdCheck == $row['admin_pwd']) {
					
					$_SESSION['a_id'] = $row['admin_id'];
					$_SESSION['a_first'] = $row['admin_first'];
					$_SESSION['a_last'] = $row['admin_last'];
					$_SESSION['a_email'] = $row['admin_email'];
					header("Location: ../views/view_data_voter.php");
					exit();
				}
			}
		}
	}
} else {
	header("Location: ../index.php?login=error");
	exit();
}