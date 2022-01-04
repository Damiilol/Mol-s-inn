<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <script src="https://kit.fontawesome.com/a8b14fc7a1.js" crossorigin="anonymous"></script>
 <link rel="stylesheet"  type = "text/css"href="ts.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="topnav" id="myTopnav">
  <img class="logo" src="mylogo.png">
  <a href="index.html" style="color:#006666;">Home</a>
  <a href="adults.html"  style="color:#006666;">Adults</a>
  <a href="accomodation.html"  style="color:#006666;">Accomodation</a>
  <a href="reservationpage.html" style="color:#006666;">Dates of Stay</a>
  <a href="total.php"  style="color:#006666;">Total</a>
</div>
<form>
<div class="header">
	<h1 style="color: white;">DATES OF STAY </h1>
</div>
<div>
	
		<p ><h2 style="font-size: 150%;">Select your dates of stay:</h2></p>
</div>
<div>
	<label style="font-size:150%">Choose the month:
		<select>
			<option selected="selected">January</option>
			<option >February</option>
			<option >March</option>
			<option >April</option>
			<option>May</option>
			<option>June</option>
			<option>July</option>
			<option>August</option>
			<option>September</option>
			<option>October</option>
			<option>November</option>
			<option>December</option>
		</select>
	</label>
</div>
<form action="index.php" method="post" >
	<input type="text" id="fdate" name="fdate" placeholder="Check-In date" style="border:2px solid; width:50%; margin-top:20px;">
	<input type="text" id="ldate" name="ldate" placeholder="Check-out date" style="border:2px solid; width:50%;margin-top:20px;">
     <input type="text" id="txtresult"placeholder="Your Days of stay?" name="TextBox3" style="border:2px solid; width:50%; margin-top:20px;">
     <br><br>
         <input type="button" id="same" name="clickbtn" value="Display Result"  onclick="dayStay()">
         <input type="submit" value="Total">
</div>
	</form>
	<br><br><br>
<footer>
<div class="footer_bottom">
    <div class="container1">
      <p>Copyright © 2020 Mol's Inn. </p>
    </div>
  </div>
 <script src="ts.js"></script>
</footer>
</body>
</html>