<!DOCTYPE HTML>
<?php
$playerturn = file_get_contents('playerturn.txt');
$turnboxtext = "";
$questionlock = "";
$questionweight = 0;
$questiontype = "";
//Topic Tags
  //History
$hist100tag1 = "";
$hist100tag2 = "";
$hist200tag1 = "";
$hist200tag2 = "";
$hist300tag1 = "";
$hist300tag2 = "";
$hist400tag1 = "";
$hist400tag2 = "";
  //Movies
$movi100tag1 = "";
$movi100tag2 = "";
$movi200tag1 = "";
$movi200tag2 = "";
$movi300tag1 = "";
$movi300tag2 = "";
$movi400tag1 = "";
$movi400tag2 = "";

//Final
$finaltag1 = "";
$finaltag2 = "";
$finaltag3 = "<!--";
$finaltag4 = "-->";
$finaltag5 = "";
$finaltag6 = "";

//Checking If Answered

  //History
if(str_contains(file_get_contents('answeredquestions.txt'),"hist100")){
		$hist100tag1 = "<!--";
		$hist100tag2 = "-->";
}
if(str_contains(file_get_contents('answeredquestions.txt'),"hist200")){
		$hist200tag1 = "<!--";
		$hist200tag2 = "-->";
}
if(str_contains(file_get_contents('answeredquestions.txt'),"hist300")){
		$hist300tag1 = "<!--";
		$hist300tag2 = "-->";
}
if(str_contains(file_get_contents('answeredquestions.txt'),"hist400")){
		$hist400tag1 = "<!--";
		$hist400tag2 = "-->";
}

  //Movies
if(str_contains(file_get_contents('answeredquestions.txt'),"movi100")){
	$movi100tag1 = "<!--";
	$movi100tag2 = "-->";
}
if(str_contains(file_get_contents('answeredquestions.txt'),"movi200")){
	$movi200tag1 = "<!--";
	$movi200tag2 = "-->";
}
if(str_contains(file_get_contents('answeredquestions.txt'),"movi300")){
	$movi300tag1 = "<!--";
	$movi300tag2 = "-->";
}
if(str_contains(file_get_contents('answeredquestions.txt'),"movi400")){
	$movi400tag1 = "<!--";
	$movi400tag2 = "-->";
}

// Final Round
if(file_get_contents('remainingquestions.txt') == 0){
		$finaltag1 = "<!--";
		$finaltag2 = "-->";
		$finaltag3 = "";
		$finaltag4 = "";
		$finaltag5 = "<!--";
		$finaltag6 = "-->";
}

//Player Turn Rotation
if($playerturn == 1){
	$turnboxtext = "<p>Player 1's turn</p>";
	$questiontext = "Player 1, pick a question!";
}
if($playerturn == 2){
	$turnboxtext = "<p>Player 2's turn</p>";
	$questiontext = "Player 2, pick a question!";
}
if($playerturn == 3){
	$turnboxtext = "<p>Player 3's turn</p>";
	$questiontext = "Player 3, pick a question!";
}
if($playerturn == 4){
	$turnboxtext = "<p>Player 4's turn</p>";
	$questiontext = "Player 4, pick a question!";
}

// History 
if(isset($_POST['hist']) && $_POST['hist'] == "100"){
	$questionlock = "disabled";
	$questiontype = "hist100";
	$questionweight = 100;
	$questiontext = "What year was the declaration of independence signed?";
}
else if(isset($_POST['hist']) && $_POST['hist'] == "200"){
	$questionlock = "disabled";
	$questiontype = "hist200";
	$questionweight = 200;
	$questiontext = "Who led the united kindom during world war II?";
}
else if(isset($_POST['hist']) && $_POST['hist'] == "300"){
	$questionlock = "disabled";
	$questiontype = "hist300";
	$questionweight = 300;
	$questiontext = "What was the name of the area of the middle east where early human civiliazations developed?";
}
else if(isset($_POST['hist']) && $_POST['hist'] == "400"){
	$questionlock = "disabled";
	$questiontype = "hist400";
	$questionweight = 400;
	$questiontext = "What year was the latest amemendment to the United States constitution added?";
}

//Movies
if(isset($_POST['movi']) && $_POST['movi'] == "100"){
	$questionlock = "disabled";
	$questiontype = "movi100";
	$questionweight = 100;
	$questiontext = "Who died at the END of End Game? (No Spaces)";
}
else if(isset($_POST['movi']) && $_POST['movi'] == "200"){
	$questionlock = "disabled";
	$questiontype = "movi200";
	$questionweight = 200;
	$questiontext = "What studio created Lion King?";
}
else if(isset($_POST['movi']) && $_POST['movi'] == "300"){
	$questionlock = "disabled";
	$questiontype = "movi300";
	$questionweight = 300;
	$questiontext = "At the end of Toy Story 6 Buzz sacrifice himself to save Woody. True or False";
}
else if(isset($_POST['movi']) && $_POST['movi'] == "400"){
	$questionlock = "disabled";
	$questiontype = "movi400";
	$questionweight = 400;
	$questiontext = "There was no Toy Story 6. True or False";
}

?>
<html lang = "en">
	<head>
		<meta charset = "UTF-8"/>
		<link rel = "stylesheet" type = "text/css" media = "all" href = "project2styles.css"/>
		<title>WebPardy</title>
	</head>
	<body>
		<div class = "flexdiv">
			<div id = "playerturnbox">
				<?= $turnboxtext ?>
			</div>
		</div>
		<br/>
		<br/>
		<div class = "flexdiv">
			<form action = "gameplaypage.php" method = "POST">
				<table>
					<tr>
						<!--Topic-->
						<td>History</td>
						<td>Movies</td>
					</tr>
					<tr>
						<!--100 Topics-->
						<?= $hist100tag1 ?> <td><input type = "submit" name = "hist" value = "100" <?= $questionlock ?> ></td> <?= $hist100tag2 ?>
						<?= $movi100tag1 ?> <td><input type = "submit" name = "movi" value = "100" <?= $questionlock ?> ></td> <?= $movi100tag2 ?>
					</tr>
					<tr>
						<!--200 Topics-->
						<?= $hist200tag1 ?> <td><input type = "submit" name = "hist"  value = "200" <?= $questionlock ?>></td> <?= $hist200tag2 ?>
						<?= $movi200tag1 ?> <td><input type = "submit" name = "movi"  value = "200" <?= $questionlock ?>></td> <?= $movi200tag2 ?>
					</tr>
					<tr>
						<!-- 300 Topics-->
						<?= $hist300tag1 ?> <td><input type = "submit" name = "hist"  value = "300" <?= $questionlock ?>></td> <?= $hist300tag2 ?>
						<?= $movi300tag1 ?> <td><input type = "submit" name = "movi"  value = "300" <?= $questionlock ?>></td> <?= $movi300tag2 ?>
					</tr>
					<tr>
						<!--400 Topics-->
						<?= $hist400tag1 ?> <td><input type = "submit" name = "hist"  value = "400" <?= $questionlock ?>></td> <?= $hist400tag2 ?>
						<?= $movi400tag1 ?> <td><input type = "submit" name = "movi"  value = "400" <?= $questionlock ?>></td> <?= $movi400tag2 ?>
					</tr>
				</table>
			</form>
		</div
		<br/>
		<br/>
		<div class = "flexdiv">
			<div id = "questionbox">
				<?= $finaltag5?><?= $questiontext ?><?= $finaltag6 ?>
					<br/>
					<br/>
				<form action = "leaderboard.php" method = "POST">
				    <?= $finaltag1 ?><input type = "hidden" name = "questiontype" value = <?= $questiontype ?> >
					<input type = "hidden" name = "questionweight" value = <?= $questionweight ?> >
					<input type = "text" name = "answer">
					<br/>
					<br/>
					<input type = "submit" value = "Submit answer!"><?= $finaltag2 ?>
					<?= $finaltag3 ?><input type = "submit" value = "See final scores!"> <? = $finaltag4 ?>
				</form>
			</div>
		</div>
	</body>
</html>