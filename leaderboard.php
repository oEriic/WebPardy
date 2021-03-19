<!DOCTYPE HTML>
<?php
$playerturn = file_get_contents('playerturn.txt');
$player1score = file_get_contents("player1score.txt");
$player2score = file_get_contents("player2score.txt");
$player3score = file_get_contents("player3score.txt");
$player4score = file_get_contents("player4score.txt");
if(isset($_POST['questiontype'])){
	if($playerturn == 1){
		switch($_POST['questiontype']){
			case "hist100":
						if(isset($_POST['answer']) && $_POST['answer'] == "1776"){
						    file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player1score = file_get_contents("player1score.txt");
							file_put_contents('player1score.txt', $player1score + $_POST['questionweight']);
							$player1score = file_get_contents("player1score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "hist200":
						if(isset($_POST['answer']) && $_POST['answer'] == "Winston Churchill"){ 
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player1score = file_get_contents("player1score.txt");
							file_put_contents('player1score.txt', $player1score + $_POST['questionweight']);
							$player1score = file_get_contents("player1score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "hist300":
			            if(isset($_POST['answer']) && $_POST['answer'] == "Fertile Crescent"){ 
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player1score = file_get_contents("player1score.txt");
							file_put_contents('player1score.txt', $player1score + $_POST['questionweight']);
							$player1score = file_get_contents("player1score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "hist400":
						if(isset($_POST['answer']) && $_POST['answer'] == "1992"){ 
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player1score = file_get_contents("player1score.txt");
							file_put_contents('player1score.txt', $player1score + $_POST['questionweight']);
							$player1score = file_get_contents("player1score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
		}
	file_put_contents("playerturn.txt",2);
	}
	if($playerturn == 2){
	switch($_POST['questiontype']){
			case "hist100":
						if(isset($_POST['answer']) && $_POST['answer'] == "1776"){ 
						    file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player2score = file_get_contents("player2score.txt");
							file_put_contents('player2score.txt', $player2score + $_POST['questionweight']);
							$player2score = file_get_contents("player2score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "hist200":
						if(isset($_POST['answer']) && $_POST['answer'] == "Winston Churchill"){ 
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player2score = file_get_contents("player2score.txt");
							file_put_contents('player2score.txt', $player2score + $_POST['questionweight']);
							$player2score = file_get_contents("player2score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "hist300":
			            if(isset($_POST['answer']) && $_POST['answer'] == "Fertile Crescent"){ 
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player2score = file_get_contents("player2score.txt");
							file_put_contents('player2score.txt', $player2score + $_POST['questionweight']);
							$player2score = file_get_contents("player2score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "hist400":
						if(isset($_POST['answer']) && $_POST['answer'] == "1992"){ 
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player2score = file_get_contents("player2score.txt");
							file_put_contents('player2score.txt', $player2score + $_POST['questionweight']);
							$player2score = file_get_contents("player2score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
		}
	file_put_contents("playerturn.txt",3);
	}
	if($playerturn == 3){
	switch($_POST['questiontype']){
			case "hist100":
						if(isset($_POST['answer']) && $_POST['answer'] == "1776"){ 
						    file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player3score = file_get_contents("player3score.txt");
							file_put_contents('player3score.txt', $player3score + $_POST['questionweight']);
							$player3score = file_get_contents("player3score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "hist200":
						if(isset($_POST['answer']) && $_POST['answer'] == "Winston Churchill"){ 
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player3score = file_get_contents("player3score.txt");
							file_put_contents('player3score.txt', $player3score + $_POST['questionweight']);
							$player3score = file_get_contents("player3score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "hist300":
			            if(isset($_POST['answer']) && $_POST['answer'] == "Fertile Crescent"){
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player3score = file_get_contents("player3score.txt");
							file_put_contents('player3score.txt', $player3score + $_POST['questionweight']);
							$player3score = file_get_contents("player3score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "hist400":
						if(isset($_POST['answer']) && $_POST['answer'] == "1992"){ 
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player3score = file_get_contents("player3score.txt");
							file_put_contents('player3score.txt', $player3score + $_POST['questionweight']);
							$player3score = file_get_contents("player3score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
		}
	file_put_contents("playerturn.txt",4);
	}
	if($playerturn == 4){
	switch($_POST['questiontype']){
			case "hist100":
						if(isset($_POST['answer']) && $_POST['answer'] == "1776"){ 
						    file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player4score = file_get_contents("player4score.txt");
							file_put_contents('player4score.txt', $player4score + $_POST['questionweight']);
							$player4score = file_get_contents("player4score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "hist200":
						if(isset($_POST['answer']) && $_POST['answer'] == "Winston Churchill"){
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player4score = file_get_contents("player4score.txt");
							file_put_contents('player4score.txt', $player4score + $_POST['questionweight']);
							$player4score = file_get_contents("player4score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "hist300":
			            if(isset($_POST['answer']) && $_POST['answer'] == "Fertile Crescent"){
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player4score = file_get_contents("player4score.txt");
							file_put_contents('player4score.txt', $player4score + $_POST['questionweight']);
							$player4score = file_get_contents("player4score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "hist400":
						if(isset($_POST['answer']) && $_POST['answer'] == "1992"){ 
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player4score = file_get_contents("player4score.txt");
							file_put_contents('player4score.txt', $player4score + $_POST['questionweight']);
							$player4score = file_get_contents("player4score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
		}
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