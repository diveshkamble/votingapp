<?php

session_start();

$votecheck = $_SESSION['votedornot'];

if ($votecheck == 'voted') {

	echo "Voted Already. Cannot Vote";
	echo"<h1>Voted Already</h1>";
	echo "<script type=\"text/javascript\"> window.alert('Voted Already Cannot vote'); window.location.href='../voting.php';</script>";
	//header("Location: ../voting.php?voted=yes");
	$msg = "Already voted. Cannot Vote";
	echo $msg;
	//header("Location: ../voting.php?votingerror");
}

else{
if (isset($_POST['submit'])&&isset($_POST['vote'])) {
	
	include 'db.php';
	$voterid = $_SESSION['v_id'];
	$branchin = $_POST['vote'];

	$voted = mysqli_real_escape_string($conn, $_POST['vote']);




	
	$sql = "UPDATE voters set voter_voted = 'voted' where voter_id = '$voterid'";
	$sql2 = "UPDATE result set rc_vote = 'rc_vote' + 1 where rc_branch = '$branchin'";
$result = mysqli_query($conn, $sql);
$result = mysqli_query($conn, $sql2);

			header("Location: ../views/success.php");

	}else
	{
		header("Location: ../views/voting.php?voting=error");
	}
}