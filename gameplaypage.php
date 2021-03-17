<!DOCTYPE HTML>
<?php
$playerturn = file_get_contents('playerturn.txt');
$remainingquestions = 4;
$turnboxtext = "";
$questionlock = "";
$questionweight = "";
$questiontype = "";
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
	$questiontext = "placeholder question 1?";
}
else if(isset($_POST['hist']) && $_POST['hist'] == "200"){
	$questionlock = "disabled";
	$questiontype = "hist200";
	$questionweight = 200;
	$questiontext = "placeholder question 2?";
}
else if(isset($_POST['hist']) && $_POST['hist'] == "300"){
	$questionlock = "disabled";
	$questiontype = "hist300";
	$questionweight = 300;
	$questiontext = "placeholder question 3?";
}
else if(isset($_POST['hist']) && $_POST['hist'] == "400"){
	$questionlock = "disabled";
	$questiontype = "hist400";
	$questionweight = 400;
	$questiontext = "placeholder question 4?";
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
						<td><input type = "submit" name = "hist" value = "100" <?= $questionlock ?>></td>
					</tr>
					<tr>
						<td><input type = "submit" name = "hist"  value = "200" <?= $questionlock ?>></td>
					</tr>
					<tr>
						<td><input type = "submit" name = "hist"  value = "300" <?= $questionlock ?>></td>
					</tr>
					<tr>
						<td><input type = "submit" name = "hist"  value = "400"  <?= $questionlock ?>></td>
					</tr>
				</table>
			</form>
		</div
		<br/>
		<br/>
		<div class = "flexdiv">
			<div id = "questionbox">
				<?= $questiontext ?>
					<br/>
					<br/>
				<form action = "leaderboard.php" method = "POST">
				    <input type = "hidden" name = "questiontype" value = <?= $questiontype ?> >
					<input type = "hidden" name = "questionweight" value = <?= $questionweight ?> >
					<input type = "text" name = "answer">
					<br/>
					<br/>
					<input type = "submit" value = "Submit answer!">
				</form>
			</div>
		</div>
	</body>
</html>