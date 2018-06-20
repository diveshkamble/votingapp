<?php
include 'headerpart.php';
?>		
		<h1 class="IndexPageIdent">Candidate Login</h1>

	<div id="container">
	<form action="/backend/login_can.php" method="POST" >
		<label><b>Email</b></label>
		<br>
		<input type="text" placeholder="Enter Email" name="email" autocomplete="off" required>
		<br>
		<br>
		<label><b>Password</b></label> 
		<br>
		<input type="Password" placeholder="Enter Password" name="passw" required>
		<br>
		<button id="signupbutton" type="submit" name="submit">Sign in</button>
		<br>
		<button id="register_candidate" type="button" onclick="window.location.href='/index.php'">Voter</button>
		<button id="register_voter" type="button" onclick="window.location.href='/views/admin_login.php'">Admin</button>

	</form>
	</div>

	


	<footer class="indexpage">
		<div id="footer-container-index-page">
		<br>
			Copyright @ 2017
			Created by Divesh Kamble.


		</div>
	</footer>
</body>
</html>