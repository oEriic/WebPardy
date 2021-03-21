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
//Animals
$ani100tag1 = "";
$ani100tag2 = "";
$ani200tag1 = "";
$ani200tag2 = "";
$ani300tag1 = "";
$ani300tag2 = "";
$ani400tag1 = "";
$ani400tag2 = "";
//Dogs
$dogs100tag1 = "";
$dogs100tag2 = "";
$dogs200tag1 = "";
$dogs200tag2 = "";
$dogs300tag1 = "";
$dogs300tag2 = "";
$dogs400tag1 = "";
$dogs400tag2 = "";

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

//Questions 
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

//Animal
if(isset($_POST['ani']) && $_POST['ani'] == "100"){
	$questionlock = "disabled";
	$questiontype = "ani100";
	$questionweight = 100;
	$questiontext = "What is the longest living land animal?";
}
else if(isset($_POST['ani']) && $_POST['ani'] == "200"){
	$questionlock = "disabled";
	$questiontype = "ani200";
	$questionweight = 200;
	$questiontext = "What is the largest mammal?";
}
else if(isset($_POST['ani']) && $_POST['ani'] == "300"){
	$questionlock = "disabled";
	$questiontype = "ani300";
	$questionweight = 300;
	$questiontext = "Can the Basenji dog bark?";
}
else if(isset($_POST['ani']) && $_POST['ani'] == "400"){
	$questionlock = "disabled";
	$questiontype = "ani400";
	$questionweight = 400;
	$questiontext = "Are a group of orcas called a pod?";
}

//Dog
if(isset($_POST['dogs']) && $_POST['dogs'] == "100"){
	$questionlock = "disabled";
	$questiontype = "dogs100";
	$questionweight = 100;
	$questiontext = "True or False, Is chocolate good for dogs?";
}
else if(isset($_POST['dogs']) && $_POST['dogs'] == "200"){
	$questionlock = "disabled";
	$questiontype = "dogs200";
	$questionweight = 200;
	$questiontext = "What breed is known to be a wiener dog?";
}
else if(isset($_POST['dogs']) && $_POST['dogs'] == "300"){
	$questionlock = "disabled";
	$questiontype = "dogs300";
	$questionweight = 300;
	$questiontext = "What breed is known for having a heart butt?";
}
else if(isset($_POST['dogs']) && $_POST['dogs'] == "400"){
	$questionlock = "disabled";
	$questiontype = "dogs400";
	$questionweight = 400;
	$questiontext = "True or False, can dogs only see in black and white?";
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
						<td>Animals</td>
						<td>Dogs</td>
					</tr>
					<tr>
						<!--100 Topics-->
						 <td> <?= $hist100tag1 ?> <input type = "submit" name = "hist" value = "100" <?= $questionlock ?>> <?= $hist100tag2 ?> </td>
						 <td> <?= $movi100tag1 ?> <input type = "submit" name = "movi" value = "100" <?= $questionlock ?>> <?= $movi100tag2 ?> </td>
						 <td> <?= $ani100tag1 ?> <input type = "submit" name = "ani" value = "100" <?= $questionlock ?>> <?= $ani100tag2 ?> </td>
						 <td> <?= $dogs100tag1 ?> <input type = "submit" name = "dogs" value = "100" <?= $questionlock ?>> <?= $dogs100tag2 ?> </td>
					</tr>
					<tr>
						<!--200 Topics-->
						 <td> <?= $hist200tag1 ?> <input type = "submit" name = "hist"  value = "200" <?= $questionlock ?>> <?= $hist200tag2 ?> </td>
						 <td> <?= $movi200tag1 ?> <input type = "submit" name = "movi"  value = "200" <?= $questionlock ?>> <?= $movi200tag2 ?> </td> 
						 <td> <?= $ani200tag1 ?> <input type = "submit" name = "ani"  value = "200" <?= $questionlock ?>> <?= $ani200tag2 ?> </td> 
						 <td> <?= $dogs200tag1 ?> <input type = "submit" name = "dogs"  value = "200" <?= $questionlock ?>> <?= $dogs200tag2 ?> </td> 
					</tr>
					<tr>
						<!-- 300 Topics-->
						 <td> <?= $hist300tag1 ?> <input type = "submit" name = "hist"  value = "300" <?= $questionlock ?>> <?= $hist300tag2 ?> </td>
						 <td> <?= $movi300tag1 ?> <input type = "submit" name = "movi"  value = "300" <?= $questionlock ?>> <?= $movi300tag2 ?> </td>
						 <td> <?= $ani300tag1 ?> <input type = "submit" name = "ani"  value = "300" <?= $questionlock ?>> <?= $ani300tag2 ?> </td>
						 <td> <?= $dogs300tag1 ?> <input type = "submit" name = "dogs"  value = "300" <?= $questionlock ?>> <?= $dogs300tag2 ?> </td>
					</tr>
					<tr>
						<!--400 Topics-->
						 <td> <?= $hist400tag1 ?> <input type = "submit" name = "hist"  value = "400" <?= $questionlock ?>> <?= $hist400tag2 ?> </td>
						 <td> <?= $movi400tag1 ?> <input type = "submit" name = "movi"  value = "400" <?= $questionlock ?>> <?= $movi400tag2 ?> </td>
						 <td> <?= $ani400tag1 ?> <input type = "submit" name = "ani"  value = "400" <?= $questionlock ?>> <?= $ani400tag2 ?> </td> 
						 <td> <?= $dogs400tag1 ?> <input type = "submit" name = "dogs"  value = "400" <?= $questionlock ?>> <?= $dogs400tag2 ?> </td>
					</tr>
				</table>
			</form>
		</div>
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