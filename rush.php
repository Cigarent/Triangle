<!DOCTYPE HTML>
<html>

	<head>
		<title>Triangle UW-Madison</title>

		<?php include("includes.php"); ?>

	</head>

	<body align="center">

		<?php include("header.php"); ?>

		<div id="content" align="center">
		<h1>UPCOMING EVENTS</h1>
                <h3>All events at 6:30pm unless otherwise specified</h3>

		<h3>1/22 BOWLING @ The Sett</h3>
		<p>A great place to hang out with friends and brothers alike is the Sett! Stop on by to enjoy some pizza and bowling with Triangle Fraternity!</p>
		<h3>1/25 INFO SESSION @ Triangle</h3>
		<p>If you were interested by anything you heard at our previous events or just found out about us and want to learn more about our Fraternity, this is where you want to go.</p>
		<h3>1/26 GAME NIGHT @ Triangle</h3>
		<p>We will be hosting a video game, board game, and card game night at Triangle Fraternity. If you enjoy Smash Bros, Pool, and other various board games stop on by</p>
		<h3>1/27 Classy Poker Night/Pool Tournament @ Triangle</h3>
		<p>Bring your finest pool face and poker shots to the house to take on Triangles best. Semi-formal attire recommended.</p>
		<h3>1/29 Movie Night @ Triangle</h3>
		<p>Enjoy a cinematic experience with the brothers, as well as Tacos</p>
		<h3>1/29 Steak Dinner with the Brothers @ Triangle, followed by Info Session @ ECB</h3>
		<p>If you didn't get everything you wanted to know about triangle at our events, this session will help fill those gaps.</p>

		</div>

		<div id="content" align="center" class="form" style="margin-top:20px">
			<link rel="stylesheet" type="text/css" href="css/form.css">
			<script src="js/form.js"></script>
			<h1>Subscribe to Our Mailing List</h1>

			<form id="form" action="mailingList.php" method="post">
			  <div class="group name">
				<input type="text" name="name">
				<span class="highlight"></span>
				<span class="bar"></span>
				<label>Name</label>
			  </div>

			  <div class="group email">
				<input type="email" name="email">
				<span class="highlight"></span>
				<span class="bar"></span>
				<label>Email</label>
			  </div>

			  <button type="submit" class="button buttonBlue">Subscribe
				<div class="ripples buttonRipples">
					<span class="ripplesCircle"></span>
				</div>
			  </button>
			</form>
			<div id="overlay">
				<span>Thank you for subscribing. Our recruitment officer will be in touch with you shortly.</span><br><br>
				<span id="back" href="">Return</span>
			</div>
		</div>
		<?php include("contact.php"); ?>
	</body>

</html>
