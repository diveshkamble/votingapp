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
		$sql = "SELECT * FROM voters WHERE voter_email='$vid' OR voter_uin='$vid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../index.php?login=error");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				$hashedPwdCheck = password_verify($pwd, $row['voter_pwd']);
				if ($hashedPwdCheck == false) {
					header("Location: ../index.php?login=error");
					exit();
				} elseif ($hashedPwdCheck == true) {
					$_SESSION['v_id'] = $row['voter_id'];
					$_SESSION['v_first'] = $row['voter_first'];
					$_SESSION['v_middle'] = $row['voter_middle'];
					$_SESSION['v_last'] = $row['voter_last'];
					$_SESSION['v_email'] = $row['voter_email'];
					$_SESSION['v_uin'] = $row['voter_uin'];
					header("Location: ../views/candidate_page.php");
					exit();
				}
			}
		}
	}
} else {
	header("Location: /index.php?login=error");
	exit();
}