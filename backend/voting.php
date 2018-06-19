<?php
session_start();
?>




<?php
include 'views/headerpart.php';
?>



<style type="text/css">
input[type="radio"]{
  width: 30px; /*Desired width*/
  height: 30px; /*Desired height*/
}

.vote-table-container{
  margin-left: 25px;

}

.vote-button{
   background-color: #f44336;
    color: white;
    padding: 14px 20px;
    margin-left: 0px;
    border: none;
    cursor: pointer;
    width:150px;
    display: inline-block;
    font-family: 'Open Sans Condensed',sans-serif;
    margin-right: 2%;
    margin-top: 10px;
    float: right;
    clear: right;

}

body
{
	
	color: #000000;

}

h2
{
	color: #FF3333;
}
header img
{
margin-left: 25%;
}
table{
	font-size: 25px;
  font-family: 'Open Sans Condensed',sans-serif;
    
}

  th,td{
    text-align: center;
  }

  th{
    font-size: 25px;
    background-color: #373737;
    color: white;
    font-family: 'Open Sans Condensed',sans-serif;
    padding: 5px;
  }

body{
	background-position: center;
	background-repeat: no-repeat;
	/*background-size: 1376px
	*/
	margin:0;
	padding: 0;
	font-family: 'Open Sans Condensed',sans-serif;
}

footer{
   bottom: 0;
   left: 0;
   width:100%;
   height:110px;
   background-color: rgba(00,00,00,0.6);
   /*background-size: stretch;*/
   margin-left: 0px;
   text-align: center;
   margin-top: 150px;
   color: rgba(255,255,255,0.3);
   font-family: 'Oef='success_voting.php'">Vote</button>Sans Condensed',sans-serif;
}



#footer-container{ef='success_voting.php'">Vote</button>
	font-style: Helvetica;
	font-size: 20px;
	margin-top: 100px;
	}

<script>
var errormsg = <?php echo json_encode($msg); ?>;
alert(errormsg); 
</style>
</style>
<body> 
<marquee direction="left"><h2>WARNING: Choose Wisely!</h2></marquee>
<br>
<form action="backend/votingback.php" method="POST">
<div class="vote-table-container">
<table style="width:98%" cellspacing="15px" border="1px">
  <tr align="center">
    <th align="center">Candidates</th>
    <th>Department</th>
    <th>Select one:</th> 
  </tr>
  <tr align="center">
    <td style="column-width: 600px" align="left">Shreyas Nair</td>
    <td><img src="images/comp.png" height=5% width=6%></td>
    <td style="column-width: 200px"><input type="radio" name="vote" value="comps"></td> 
  </tr>
  <tr align="center">
    <td align="left">Zeeshan Shaikh</td>
    <td><img src="images/civil.png" height=17% width=7%></td>
    <td><input type="radio" name="vote" value="civil"></td> 
  </tr>
  <tr align="center">
    <td align="left">Mudassir Moolji</td>
    <td><img src="images/mech.png" height=20% width=6.5%></td>
    <td><input type="radio" name="vote" value="mech"></td> 
  </tr>
  <tr align="center">
    <td align="left">Hamza Ghajoria</td>
    <td><img src="images/extc2.png" height=7% width=6%></td>
    <td><input type="radio" name="vote" value="extc"></td> 
  </tr>
  <tr align="center">
    <td align="left">Taher Rajkotwala</td>
    <td><img src="images/etrx.png" height=8% width=6%></td>
    <td><input type="radio" name="vote" value="etrx"></td> 
  </tr>
  <tr align="center">
    <td align="left">Somansh Kumar</td>
    <td><img src="images/chicken.png" height=3.5% width=6%></td>
    <td><input type="radio" name="vote" value="bio"></td> 
  </tr>
</table>


<button type="submit" name="submit" class="vote-button" onclick="window.location.href='views/success_voting.php'">Vote</button>
</div>
</form>
<footer>
		<div id="footer-container">
		<br>
			<p>Copyright @ 2017</p>
      <p>Made by Divesh Kamble, Prasanna Bakshi, Sagar Borhade, Taufeeq Samnani.</p>




		</div>
	</footer>
</body>
</html>