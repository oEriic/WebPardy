<!DOCTYPE HTML>
<?php
$playerturn = file_get_contents('playerturn.txt');
$player1score = file_get_contents("player1score.txt");
$player2score = file_get_contents("player2score.txt");
$player3score = file_get_contents("player3score.txt");
$player4score = file_get_contents("player4score.txt");
if(isset($_POST['questiontype'])){
	if($playerturn == 1){
	$player1score = file_get_contents("player1score.txt");
	file_put_contents('player1score.txt', $player1score + $_POST['questionweight']);
	$player1score = file_get_contents("player1score.txt");
	file_put_contents("playerturn.txt",2);
	}
	if($playerturn == 2){
	$player2score = file_get_contents("player2score.txt");
	file_put_contents('player2score.txt', $player2score + $_POST['questionweight']);
	$player2score = file_get_contents("player2score.txt");
	file_put_contents("playerturn.txt",3);
	}
	if($playerturn == 3){
	$player3score = file_get_contents("player3score.txt");
	file_put_contents('player3score.txt', $player3score + $_POST['questionweight']);
	$player3score = file_get_contents("player3score.txt");
	file_put_contents("playerturn.txt",4);
	}
	if($playerturn == 4){
	$player4score = file_get_contents("player4score.txt");
	file_put_contents('player4score.txt', $player4score + $_POST['questionweight']);
	$player4score = file_get_contents("player4score.txt");
	file_put_contents("playerturn.txt",1);
	}
}
?>
<html lang = "en">
	<head>
		<meta charset = "UTF-8"/>
		<link rel = "stylesheet" type = "text/css" media = "all" href = "project2styles.css"/>
		<title>WebPardy Leaderboard</title>
	</head>
	<body>
	<a href = "gameplaypage.php">Back to main page</a>
		<div class = "flexdiv">
			<div id = "leaderboard">
				<p>Player 1 score:</p><?= $player1score ?><p>Player 2 score:</p><?= $player2score ?><p>Player 3 score:</p><?= $player3score ?><p>Player 4 score:</p><?= $player4score ?>
			</div>
		</div>
	</body>
</html>