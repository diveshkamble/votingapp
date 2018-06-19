<?php
include 'views/headerpart.php';
?>
<form class="feedback-form" action="backend/feedback_backend.php" method="POST">
<div class="feedback-form-container">

	<br> 
	<label id="name-label"><b>Your Name</b></label>
	<br>
	<input id="name-input" type="text" name="full_name" placeholder="Full Name" autocomplete="off" required>
	<br>
	<label><b>Your Email-ID</b></label>
	<br>
	<input id="email-input" type="text" name="email-id" placeholder="Email Address" autocomplete="off" required>
	<br>
	<label><b>Feedback</b></label>
	<br>
	<textarea id="feedback-input" rows="10" cols="10" type="text" name="feedback-box" autocomplete="off" required></textarea>

	<button class="submit-button" type="submit" name="submit">Submit</button>
	<br>
	<br>
</div>
</form>

<?php
include 'views/footerpart.php';
?>