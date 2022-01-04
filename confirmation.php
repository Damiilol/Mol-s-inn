<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://kit.fontawesome.com/a8b14fc7a1.js" crossorigin="anonymous"></script>
 <link rel="stylesheet"  type = "text/css"href="ts.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div>
	<img class="logo" src="mylogo.png">
</div>
<div class="header">
	<h1 style="color: white;">CONFIRMATION</h1>
</div>
<div class="containerR" style="width:1000px; background-color:#ffccff;">
<p style="font-style:bold; font-size: 20px; font-family:cursive;">
	<?php
      $name = $_POST['firstname'];
      echo "Thank you  ".$name." for booking a room with us.";
	?>
</p>
<p style="font-style:bold; font-size:20px; font-family:cursive;">
	We hope you enjoy for stay with us!<br>
     A confimatory email has been sent to you at<?php echo "  " .$_POST['email'];?> <br>
     including a reciept for your payment.<br>
     We cannot wait to have you with us!
</p>
</div>
<a href="total.php" class="awe-btn awe-btn-13">Back</a>
<a href="index.html" class="awe-btn awe-btn-13">Home</a>
<br><br><br>
<script src="ts.js"></script>
<footer>
<div class="footer_bottom">
    <div class="container1">
      <p>Copyright © 2020 Mol's Inn. </p>
    </div>
  </div>
</footer>
</body>
</html>