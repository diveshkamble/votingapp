<?php
include('db.php');
if (isset($_GET['id']) && is_numeric($_GET['id']))
{
$id = $_GET['id'];
$result = mysqli_query($conn,"DELETE FROM voters WHERE voter_id=$id");
}
else
{
header("Location: ../views/view_data_voter.php");
}
?>