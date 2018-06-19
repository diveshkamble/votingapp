<?php
include 'views/headerpart.php';
?>		
		<h1 class="IndexPageIdent">Candidate Login</h1>

	<div id="container">
	<form action="login_can.php" method="POST" >
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
		<!--<button id="registerbutton" type="button" onclick ="window.location.href='registration_page.html'">Register</button>-->
		<br>
		<!--<a href="registration_page.html">Register as a Candidate</a>
		<br><br>
		<a href="registration_page.html">Register as a Voter</a>
		-->
		<button id="register_candidate" type="button" onclick="window.location.href='index.php'">Voter</button>
		<button id="register_voter" type="button" onclick="window.location.href='admin_login.php'">Admin</button>

	</form>
	</div>

	


	<footer class="indexpage">
		<div id="footer-container-index-page">
		<br>
			Copyright @ 2017
			Made by Jon Snow.


		</div>
	</footer>
</body>
</html>