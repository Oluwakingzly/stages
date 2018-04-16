<!DOCTYPE html>
<html>
	<head>
		<title>
			me doing better
		</title>

		<style type="text/css">
			header li{
				display: inline-block;
			}
			header ul{
				margin: 0px;
				padding: 5px 0px 5px 30px;
			}
			header{
				text-align: center;
				font-size: 25px;
				color: black;
				background-color:;
				border-style: ;
				clear: both;
			}
			body{
				width: 95%;
				background-image: url("6.jpg");
				
				padding: 2px 2px;
			}
			nav{
				float: left;
				text-align: justify;
				width: 30%;
				//height: 500px;
			}
			article{
				width: 35%;
				text-align: left;
				float: left;
				//background-color: #CD6155;
				//height: 500px;

			}
			aside{
				width: 35%;
				text-align: justify;
				float: left;
				//height: 500px;
			}

			
			footer{
				padding: 25px 50px 25px 50px;
				text-align: center;
				font-size: 30px;
				color: black;
				//border-style: dashed;

			}
			h3, h2, h1,p{
				color: black ;
			}
			date{
				font-size: 30px;
			}
		</style>
	</head>
	<body>
	<div>
		<header>
			<h3>Welcome To Hotels.ng</h3>
				<ul>
					<li>**About Us</li>
					<li>**Gallery</li>
					<li>**Classes</li>
					<li>**Courses</li>
				</ul>
		</header>

		<nav>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<h2>Subscribe to Our Newsletter</h2>
			<fieldset>
				<legend>Subscribe</legend>
				<label><input type="Textbox" name="Email" placeholder="Email Address"></label>
				<label><input type="Submit" value="Subscribe"></label>
			</fieldset>

			<?php
				echo "the time is".
				date("h:i:sa");
			?>

			
			
		</nav>

		<article>
			<figure>
				<img src="programmer.jpg" alt="Programmer">
			</figure>

			<fieldset>
				<legend>Register Here</legend>
				<label><input type="textbox" name="Surname" placeholder="Surname"></label>
				<label><input type="textbox" name="Firstname" placeholder="Firstname"></label>
				<label><input type="textbox" name="Email" placeholder="Email Address"></label>
				<label><input type="textbox" name="Phone" placeholder="Phone Number"></label>
				<label><input type="textbox" name="country" placeholder="Country"></label>
				<label><input type="textbox" name="city" placeholder="City"></label>
				<label><input type="Submit" value="Register"></label>
			</fieldset>
		</article>

		<aside>
			<h1>What Do We Do?</h1>
			<p>Basically we teach programming<br>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		
			<h1>What Do We Hope to Achieve</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</aside>

		<footer>
			&copy; Hotels.ng &trade;
		</footer>
	</div>
	</body>
</html>