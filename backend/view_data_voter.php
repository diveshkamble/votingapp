<?php
include 'views/headerpart.php';
?>
<?php
include('db.php');
$query1 = "SELECT * FROM voters";
$query2 = "SELECT * FROM voters where voter_voted = 'voted'";
$result = mysqli_query($conn,$query1);
$result2 = mysqli_query($conn,$query2);
$row_count = mysqli_num_rows($result);
$vote_count = mysqli_num_rows($result2);
echo "<H1> Total Voter = $row_count Voted = $vote_count";
echo "<div class='voter_table_container'>";
echo "<p><b>Voter Database Data</b>";
echo "<table align='center' border='1' class='voter_table' cellpadding='10'>";
echo "<tr> <th>Voter_ID</th> <th>First Name</th> <th>Middle Name</th> <th>Last Name</th> <th>Email ID</th> <th>Branch</th> <th>Hashed Pwd</th> <th>Mobile</th> <th>UIN</th> <th>Voted</th> <th></th> <th></th></tr>";
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC )) {
echo "<tr>";
echo '<td>' . $row['voter_id'] . '</td>';
echo '<td>' . $row['voter_first'] . '</td>';
echo '<td>' . $row['voter_middle'] . '</td>';
echo '<td>' . $row['voter_last'] . '</td>';
echo '<td>' . $row['voter_email'] . '</td>';
echo '<td>' . $row['voter_branch'] . '</td>';
echo '<td>' . $row['voter_pwd'] . '</td>';
echo '<td>' . $row['voter_mobile'] . '</td>';
echo '<td>' . $row['voter_uin'] . '</td>';
echo '<td>' . $row['voter_voted'] . '</td>';

echo '<td><a href="views/edit_data_voter.php?id=' . $row['voter_id'] . '">Edit</a></td>';
echo '<td><a href="backend/delete_data_voter.php?id=' . $row['voter_id'] . '">Delete</a></td>';
echo "</tr>";
}
echo "</table>";
?>
</div>
<button class="submit-button" style="margin-left: 3%" onclick="window.location.href='view_data_candidate.php'">Candidate Data</button>
</body>
</html>