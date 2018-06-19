<!DOCTYPE html>
<html>
<head>
	<title>Registration page</title>
	<link href="http://eng.rizvi.edu.in/wp-content/uploads/2013/07/favicon.ico" rel="icon" type="image/x-icon" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">

 
</head>
<style type="text/css">
	ul{
		list-style-type: none;
		float: left;
		width: 400px;
		font-family: 'Open Sans Condensed',sans-serif;
	}


	ul li{
		float: left; 
	    width:150px;
		font-family: 'Open Sans Condensed',sans-serif;
	
		margin-top: 15px;
	}

	ul li input,select, textarea{
		padding: 4px 4px;
		border: 1px solid #ccc;
		box-sizing: border-box;
    	font-size: 20px;
    	font-family: 'Open Sans Condensed',sans-serif;
		
		width: 220px;
		margin-right:100px;
		margin-left: 25px;
	}


	header{
		left: 0;
		right: 0;
		width: 100%;
		background-size: stretch;
		height: 100px;
		background: url('images/pinkdust.png');

	}

	header img
	{
		margin-left: 27%;

	}


body{
	background-position: center;
	background-repeat: no-repeat;
	/*background-size: 1376px*/
		margin:0;
	padding: 0;
	background-color: #8c9eff;
	font-family: 'Open Sans Condensed',sans-serif;


}

button{
	background-color: #f44336;
    color: white;
    padding: 14px 20px;
    margin-left: 175px;
    border: none;
    cursor: pointer;
    width:150px;
    display: inline-block;
    font-family: 'Open Sans Condensed',sans-serif;

}
	

footer{
   bottom: 0;
   left: 0;
   width:100%;
   height:130px; 
   background-color: rgba(00,00,00,0.6);
   /*background-size: stretch;*/
   margin-left: 0px;
   text-align: center;
   margin-top: 800px;
   color: rgba(255,255,255,0.3);
   font-family: 'Open Sans Condensed',sans-serif;
}

#footer-container{
	font-style: Helvetica;
	font-size: 18px;
	margin-top: 100px;
	}



	ul.navigation-pane{
		left: 0;
		margin-left: 0;
	top: 0;
    list-style-type: none;
    width: 100%;
    height: 10%;
    margin: 0 auto;
    padding: 0 ;
	font-family: 'Open Sans Condensed',sans-serif;
    
    background-color: #333;
}

ul.navigation-pane li{
    float: left;
    width: 25%;
    padding: 0;
    margin: 0;
}

ul.navigation-pane li a {
    display: block;
    color: white;
    text-align: center;
    padding: 8px 16px;
    text-decoration: none;
	font-family: 'Open Sans Condensed',sans-serif;
    
}


ul.navigation-pane li a:hover {
    background-color: #f44336;
}


.dropdown-register{
    display: none;
    position: absolute;
    background-color: #cc0000;
    min-width: 100%;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}


li.register-dropdown-container
{
	position: relative;
    display: inline-block;
}

ul li.register-dropdown-container:hover .dropdown-register {
    display: block;
}


.dropdown-register a{
	color:black
	padding 12px 16px;
	text-decoration: none;
	display: block;

}

.dropdown-register a:hover{
	background-color: #f1f1f1;
}

li.register-dropdown-container{
	display: inline-block;
}
.register-dropdown-container:hover  {
    background-color: #333;
}

#about-me-input{
	height: 100px;
	width: 300px;
}
</style>

<body>
<header>
	<img src="images/header.png">


</header>

<ul class="navigation-pane" style="font-family: 'Open Sans Condensed',sans-serif;
">
  <li><a href="index.php">Home</a></li>
  <li class="register-dropdown-container"><a href="">Register</a>
  <div class="dropdown-register">
  	<a href="views/registration_voter.php">Voter Registration</a>
  	<a href="views/registration_candidate.php">Candidate Registration</a>

  </div>
  <li><a href="views/feedback.php">Feedback</a></li> <!--feedback page pending-->
  <li><a href="views/contactus.php">Contact</a></li>	<!--Contact Us page pending-->		
</ul>

<div id="form-container" align="right">
<form action="backend/signup_candidate.php" method="POST" >
	<ul>
		<li>First Name:</li>
		<li><input type="text" name="first_name"></li>
		<li>Middle Name:</li>
		<li><input type="text" name="middle_name"></li>
		<li>Last Name:</li>
		<li><input type="text" name="last_name"></li>
		<li>Email-id:</li>
		<li><input type="text" name="email_id" placeholder="eg: john@email.com"></li>
		<li>Branch:</li>
		<li><select name="branch">
			<option value="no branch" hidden>Select your branch</option>
			<option value="computer">Computer Engineering</option>
			<option value="electronics">Electronics Engineering</option>
			<option value="biotech">Biotechnology Engineering</option>
			<option value="etrx">Electronics and Telecommunications Engineering</option>
			<option value="civil">Civil Engineering</option>
			<option value="mechanical">Mechanical Engineering</option>
		</select></li>
		<li>UIN Pin:</li>
		<li><input type="text" name="uinp"></li>
		<li>Password:</li>
		<li><input type="password" name="pwd"></li>
		<li>Confirm password:</li>
		<li><input type="password" name="pwdc"></li>
		<li>Mobile phone:</li>
		<li><input type="tel" name="phno" placeholder="+91 XXX-XXX-XXXX"></li>
		<li>About Me:</li>
		<li><textarea id="about-me-input" rows="10" cols="10" name="about_me" placeholder="Achievements, Interests, Et cetra"></textarea></li>
		 
		<li><button type="submit" name="submit">Sign Up!</button></li>

		
	
	</ul>


</form>
</div>
<footer>
		<div id="footer-container">
		<br>
			<p>Copyright @ 2017</p>
			<p>Made by Divesh Kamble, Prasanna Bakshi, Sagar Borhade, Taufeeq Samnani.</p>


		</div>
	</footer>


</body>
</html>