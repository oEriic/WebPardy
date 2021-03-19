<!DOCTYPE HTML>
<?php
$playerturn = file_get_contents('playerturn.txt');
$turnboxtext = "";
$questionlock = "";
$questionweight = 0;
$questiontype = "";
$hist100tag1 = "";
$hist100tag2 = "";
$hist200tag1 = "";
$hist200tag2 = "";
$hist300tag1 = "";
$hist300tag2 = "";
$hist400tag1 = "";
$hist400tag2 = "";
$finaltag1 = "";
$finaltag2 = "";
$finaltag3 = "<!--";
$finaltag4 = "-->";
$finaltag5 = "";
$finaltag6 = "";
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
if(file_get_contents('remainingquestions.txt') == 0){
		$finaltag1 = "<!--";
		$finaltag2 = "-->";
		$finaltag3 = "";
		$finaltag4 = "";
		$finaltag5 = "<!--";
		$finaltag6 = "-->";
}
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
						<td>History</td>
					</tr>
					<tr>
						<?= $hist100tag1 ?> <td><input type = "submit" name = "hist" value = "100" <?= $questionlock ?> ></td> <?= $hist100tag2 ?>
					</tr>
					<tr>
						<?= $hist200tag1 ?> <td><input type = "submit" name = "hist"  value = "200" <?= $questionlock ?>></td> <?= $hist200tag2 ?>
					</tr>
					<tr>
						<?= $hist300tag1 ?> <td><input type = "submit" name = "hist"  value = "300" <?= $questionlock ?>></td> <?= $hist300tag2 ?>
					</tr>
					<tr>
						<?= $hist400tag1 ?> <td><input type = "submit" name = "hist"  value = "400" <?= $questionlock ?>></td> <?= $hist400tag2 ?>
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