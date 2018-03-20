
<!DOCTYPE html>
<html>
<head>
	<title>MENU</title>
    <link rel="stylesheet" type="text/css" href="menu.css"/>
</head>
<body>
	<div class="topnav">
<div class="logo">
   <img src="logo.png" width="10px" height="10px">
  </div>

  <a class="active" href="#home">Home</a>
  <a href="#about">About</a>
  <a href="menu.html">Menu</a>
   <a href="reservation">Reservation</a>
 
	
  
</div>

	
	<div id="header">

	</div>

	<form name="add"  method="POST" action="menuphp.php">
	
	<div class="container">
	<img src="wings1.jpg" width="50%" height="35%">
	<div class="overlay">
    <div class="text">
	<center><input type = "submit" name="submit1" class="buttonn btn1_wings" value="ADD TO CART">
			</br>
		<form>
				<label style="padding:1px"> Qty : </label> <input type="number" name="qty_duo" min="1" max="50">
		</form>

	</center>

	<p><center>DUO<br>
	glazed wings<br>
	+ rice 	+ iced tea<br>
	P165</center><p/>
	
	</div>
	</div>
	
	
	</div>
	
	
	
	
	<div class="container">
	<img src="wings2.jpg" width="50%" height="35%">
	<div class="overlay">
    <div class="text">
	<center><input type = "submit" name="submit1" class="buttonn btn2_wings" value="ADD TO CART" name="btn_combo">
		<form>
				<label style="padding:1px"> Qty : </label> <input type="number" name="qty_combo" min="1" max="50">
		</form>
	
	</center>
	<p><center>COMBO<br>
	glazed wings + rice <br>
	+ nachos + iced tea<br>
	P195</center><p/>
	
	
	</div>
	</div>
	</div>
	
	<div class="container">
	<img src="wings3.jpeg" width="50%" height="35%">
	<div class="overlay">
    <div class="text">
	<center><input type = "submit" name="submit3" class="buttonn btn3_wings" value="ADD TO CART" name="btn_overload">
	
		<form>
				<label style="padding:5px"> Qty : </label> <input type="number" name="qty_overload" min="1" max="50">
		</form>
	</center>
	<p><center>OVER LOAD<br>
	glazed wings + fries <br>
	+ nachos + iced tea<br>
	P220</center><p/>
	</div>
	</div>
	</div>
	
	<div class="container">
	<img src="wings4.jpg" width="50%" height="35%">
	<div class="overlay">
    <div class="text">
	<center><input type = "submit" name="submit4" class="buttonn btn4_wings" value="ADD TO CART" name="btn_halfdozen">
		<form>
				<label style="padding:1px"> Qty : </label> <input type="number" name="qty_halfdozen" min="1" max="50">
		</form>
	</center>
	<p><center>HALF DOZEN<br>
	6 pcs glazed wings (alacarte)<br>
	P199</center><p/>
	
	</div>
	</div>
	</div>

	
	<div class="container">
	<img src="wings5.jpg" width="50%" height="35%">
	<div class="overlay">
    <div class="text">
   <center><input type = "submit" name="submit5" class="buttonn btn5_wings" value="ADD TO CART" name="btn_onedozen">
		<form>
				<label style="padding:1px"> Qty : </label> <input type="number" name="qty_onedozen" min="1" max="50">
		</form>
	</center>
	<p><center>ONE DOZEN<br>
	12 pcs glazed wings (alacarte)<br>
	P395</center><p/>
	</div>
	</div>
	</div>
	
	</form>
	
	<div class="button">
	
	<a href="menu.html" class="previous">&laquo; Previous</a>
    <a href="menu1.html" class="next">Next &raquo;</a>
	
	</div>


</body>
</html>