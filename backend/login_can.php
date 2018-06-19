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
		$sql = "SELECT * FROM candidates WHERE candidate_email='$vid' OR candidate_uin='$vid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../index.php?login=error");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				$hashedPwdCheck = password_verify($pwd, $row['candidate_pwd']);
				if ($hashedPwdCheck == false) {
					header("Location: ../index.php?login=error");
					exit();
				} elseif ($hashedPwdCheck == true) {
					
					$_SESSION['c_id'] = $row['candidate_id'];
					$_SESSION['c_first'] = $row['candidate_first'];
					$_SESSION['c_middle'] = $row['candidate_middle'];
					$_SESSION['c_last'] = $row['candidate_last'];
					$_SESSION['c_email'] = $row['candidate_email'];
					$_SESSION['c_uin'] = $row['candidate_uin'];
					header("Location: ../views/candidate_page.php");
					exit();
				}
			}
		}
	}
} else {
	header("Location: ../index.php?login=error");
	exit();
}