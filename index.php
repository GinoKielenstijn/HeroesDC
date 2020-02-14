<?php

// include functions form inc/functions.php
include("includes/functions.php");

$teams = getTeams();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="description" content="DC Heroes">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>DC Heroes - Code Example Layout</title>
</head>
<body>
	<header id="header">
		<div class = "headerBackground">
		<lu>
			<li><img class="logo" src="images/dclogo.png"></img></li>
			<li><p class="title">Heroes</p></li>
		</lu>
		</div>
		<div class="blueHeaderBG"></div>
	</header>
	
<div id="mainContainer">
	<div class="mainLeft">
	<!-- Left column shows team name -->
	<div class="teamContainer">
		<h1 class="teamTitle">Teams</h1>
		<nav class="teamNav">

		<ul>
			<?php
			foreach($teams as $key => $team)
			{
			?>
				<li class="teamTitleText"><?php echo $team["teamName"];?></li>
			<?php
			}
			?>
		</ul>

		</nav>
		</div>
	</div>
	<div class="verticalLine"></div>
	<div class="mainCenter">
		<!-- Maijn column shows team characters -->
		<div class="menuAlign">
			<img class="characterMenuBanner" src="images/header_bg.jpg"></img>
			<img class="characterMenuPicture" src="images/superman.jpg"></img>
			<div class="menuTextAlign">
			<h3 class="menuTitle">Superman</h3>
			<p class="menuDescription">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
			<a href="index.php"><div class="menuMoreInfo">More Info</a></div>
			</div>
		</div>

		<div class="menuAlign">
			<img class="characterMenuBanner" src="images/header_bg_even.jpg"></img>
			<img class="characterMenuPicture" src="images/loislane.jpg"></img>
			<div class="menuTextAlign">
			<h3 class="menuTitle">Lois Lane</h3>
			<p class="menuDescription">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
			<a href="index.php"><div class="menuMoreInfo">More Info</a></div>
			</div>
		</div>

		<div class="menuAlign">
			<img class="characterMenuBanner" src="images/header_bg.jpg"></img>
			<img class="characterMenuPicture" src="images/green_lantern.jpg"></img>
			<div class="menuTextAlign">
			<h3 class="menuTitle">Green Lantern</h3>
			<p class="menuDescription">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
			<a href="index.php"><div class="menuMoreInfo">More Info</a></div>
			</div>
		</div>
	</div>
	<div class="mainRight">
		<!-- right column shows character information -->
		<header class="bannerCharacter">
			<img class="backgroundCharacter" src="images/header_bg.jpg">
			<img class="starsCharacter" src="images/stars.png">
			<h1 class="starText">Above Average</h1>
			<img class="pictureCharacter" src="images/superman2.jpg">
		</header>
		<div class="infoAlign">
			<div class="info">
				<h1 class="infoCharacter">Info</h1>
				<p class="infoCharacterText">
				Lorem ipsum dolor sit amet consectetur adipisicing elit.
				Ipsum autem quisquam assumenda laborum, nulla, ipsam ea, 
				harum quaerat minima nostrum consequuntur doloribus? 
				Ipsa ullam omnis neque laborum vero mollitia voluptatum.
				Lorem ipsum dolor sit amet consectetur adipisicing elit.
				Ipsum autem quisquam assumenda laborum, nulla, ipsam ea, 
				harum quaerat minima nostrum consequuntur doloribus? 
				Ipsa ullam omnis neque laborum vero mollitia voluptatum.
				</p>
			</div>
		</div>
	</div>
</div>
</body>
</html>