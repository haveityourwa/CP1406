<html>
<head>
<?php include("Header.php"); ?>
<style>
label{	margin-left: 20px;
		color: white;
		}
input{	margin-left: 20;}
</style>
</head>
<body>
	<h3>
	Sign-Up
	</h3>
	<ul class="red">
		<img src="BeachVolleyball/BeachVolleyball/600px-Beach_Volleyball_Classic_2007_(1444259070).jpg"style="float:right; margin: 15px 15px 15px 15px;" width="280"></image>
		<label style="padding-top:20px">Contact Person Name </label>
		<input  placeholder="Enter Name">
		<label>Contact Phone Number</label>
		<input  placeholder="Enter Phone Number">  		
		<label>Contact Email Address</label>
		<input  placeholder="Enter Email Address">  
		<label>Competition Day (choose Monday - Saturday)</label>
		<input  placeholder="Enter Day">  
		<label>Competition Time (choose afternoon or evening)</label>
		<input placeholder="Enter Time">
		<label>I have read and agree with our playing guidelines (below)</label>
		<input type="checkbox">
		<label>Playing Guidelines</label>
		<p>	
			Participants in Slammers Beach Volleyball play at their own risk. Anyone playing is responsible for their own safety and should only play if they are capable. Check with your doctor before you begin.
			Game fees must be paid prior to the start of the game. Games may be cancelled by players up to 4 hours before hand to get a refund. Without 4 hours' notice, participants will forfeit the game and be charged 50% of the game fee.
		</p>
		<form action="Signup.php" method="get">
		<input type="submit" value="Submit" style="margin-bottom:20px"/>
		</form>
		

	</ul>
</body>
</html>