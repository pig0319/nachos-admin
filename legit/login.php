<html>
	<head>
		<title> Login </title>
		<link rel = "stylesheet" href = "login.css">
	</head>

	<body>
		<!-- <div class = "container">
			<img src = "">;
			<form method = "POST" action = "#">
				<div class = "form-input">
					<input type = "text" name = "username" placeholder = "Enter username">
				</div>
				<div class = "form-input">
					<input type = "password" name = "password" placeholder = "Enter password">
				</div>
				<input type = "submit" name = "submit" value = "LOGIN" class = "btn-login"/>

				<div class = "forgot">
					<button type = "button">Cancel</button>
					<span class = "pw"><a href = "#">Forgot Password</a></span>
				</div>
			</form>
		</div> -->

		<form action="action_page.php">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
	</body>
</html>