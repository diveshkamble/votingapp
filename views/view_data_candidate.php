<?php
include 'views/headerpart.php';
?>
<?php
include('backend/db.php');
$query1 = "SELECT * FROM candidates";
$result = mysqli_query($conn,$query1);
echo "<div class='voter_table_container'>";
echo "<p><b>Candidate Database Data</b>";
echo "<table border='1' class='voter_table' cellpadding='10'>";
echo "<tr> <th>Candidate_ID</th> <th>First Name</th> <th>Middle Name</th> <th>Last Name</th> <th>Email ID</th> <th>Branch</th> <th>Hashed Pwd</th> <th>Mobile</th> <th>UIN</th> <th>About Me</th> <th></th> <th></th></tr>";
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC )) {
echo "<tr>";
echo '<td>' . $row['candidate_id'] . '</td>';
echo '<td>' . $row['candidate_first'] . '</td>';
echo '<td>' . $row['candidate_middle'] . '</td>';
echo '<td>' . $row['candidate_last'] . '</td>';
echo '<td>' . $row['candidate_email'] . '</td>';
echo '<td>' . $row['candidate_branch'] . '</td>';
echo '<td>' . $row['candidate_pwd'] . '</td>';
echo '<td>' . $row['candidate_mobile'] . '</td>';
echo '<td>' . $row['candidate_uin'] . '</td>';
echo '<td>' . $row['candidate_about'] . '</td>';
echo '<td><a href="views/edit_data_candidate.php?id=' . $row['candidate_id'] . '">Edit</a></td>';
echo '<td><a href="backend/delete_data_voter.php?id=' . $row['candidate_id'] . '">Delete</a></td>';
echo "</tr>";
}
echo "</table>";
?>
</div>
<button class="submit-button" style="margin-left: 3%;" onclick="window.location.href='views/view_data_voter.php'">Voter Data</button>
</body>
</html>