<!DOCTYPE HTML>
<?php
$playerturn = file_get_contents('playerturn.txt');
$player1score = file_get_contents("player1score.txt");
$player2score = file_get_contents("player2score.txt");
$player3score = file_get_contents("player3score.txt");
$player4score = file_get_contents("player4score.txt");
$correctText = "Incorrect! No points added!";
if(isset($_POST['questiontype'])){
	if($playerturn == 1){ // Answers for Q1-Q4 for Player 1
		switch($_POST['questiontype']){
			case "hist100":
						if(isset($_POST['answer']) && $_POST['answer'] == "1776"){
							$correctText = "1776, is Correct! +100";
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
							$correctText = "Winston Churchill, is Correct! +200";
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
							$correctText = "Fertile Crescent, is Correct! +300";
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
							$correctText = "1992, is Correct! +400";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player1score = file_get_contents("player1score.txt");
							file_put_contents('player1score.txt', $player1score + $_POST['questionweight']);
							$player1score = file_get_contents("player1score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			//Movie
			case "movi100":
				if(isset($_POST['answer']) && strtolower($_POST['answer']) == "ironman"){ 
					$correctText = "Iron Man is Correct! +100 Points";
					file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
					$player1score = file_get_contents("player1score.txt");
					file_put_contents('player1score.txt', $player1score + $_POST['questionweight']);
					$player1score = file_get_contents("player1score.txt");
					$remainingquestions = file_get_contents("remainingquestions.txt");
					file_put_contents('remainingquestions.txt', $remainingquestions - 1);
				}
				break;
			case "movi200":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "disney"){
							$correctText = "Disney is Correct! +200 Points";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player1score = file_get_contents("player1score.txt");
							file_put_contents('player1score.txt', $player1score + $_POST['questionweight']);
							$player1score = file_get_contents("player1score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "movi300":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "false"){
							$correctText = "False is Correct! +300 Points";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player1score = file_get_contents("player1score.txt");
							file_put_contents('player1score.txt', $player1score + $_POST['questionweight']);
							$player1score = file_get_contents("player1score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "movi400":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "true"){ 
							$correctText = "True is Correct! +400 Points";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player1score = file_get_contents("player1score.txt");
							file_put_contents('player1score.txt', $player1score + $_POST['questionweight']);
							$player1score = file_get_contents("player1score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			//Animal
			case "ani100":
				if(isset($_POST['answer']) && strtolower($_POST['answer']) == "tortoise"){ 
					$correctText = "Tortoise is Correct! +100 Points";
					file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
					$player1score = file_get_contents("player1score.txt");
					file_put_contents('player1score.txt', $player1score + $_POST['questionweight']);
					$player1score = file_get_contents("player1score.txt");
					$remainingquestions = file_get_contents("remainingquestions.txt");
					file_put_contents('remainingquestions.txt', $remainingquestions - 1);
				}
				break;
			case "ani200":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "blue whale"){
							$correctText = "Blue Whale is Correct! +200 Points";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player1score = file_get_contents("player1score.txt");
							file_put_contents('player1score.txt', $player1score + $_POST['questionweight']);
							$player1score = file_get_contents("player1score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "ani300":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "no"){
							$correctText = "No is Correct! +300 Points";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player1score = file_get_contents("player1score.txt");
							file_put_contents('player1score.txt', $player1score + $_POST['questionweight']);
							$player1score = file_get_contents("player1score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "ani400":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "yes"){ 
							$correctText = "Yes is Correct! +400 Points";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player1score = file_get_contents("player1score.txt");
							file_put_contents('player1score.txt', $player1score + $_POST['questionweight']);
							$player1score = file_get_contents("player1score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			//dogs
			case "dogs100":
				if(isset($_POST['answer']) && strtolower($_POST['answer']) == "false"){ 
					$correctText = "False is Correct! +100 Points";
					file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
					$player1score = file_get_contents("player1score.txt");
					file_put_contents('player1score.txt', $player1score + $_POST['questionweight']);
					$player1score = file_get_contents("player1score.txt");
					$remainingquestions = file_get_contents("remainingquestions.txt");
					file_put_contents('remainingquestions.txt', $remainingquestions - 1);
				}
				break;
			case "dogs200":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "dachshund"){
							$correctText = "Dachshund is Correct! +200 Points";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player1score = file_get_contents("player1score.txt");
							file_put_contents('player1score.txt', $player1score + $_POST['questionweight']);
							$player1score = file_get_contents("player1score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "dogs300":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "corgi"){
							$correctText = "Corgi is Correct! +300 Points";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player1score = file_get_contents("player1score.txt");
							file_put_contents('player1score.txt', $player1score + $_POST['questionweight']);
							$player1score = file_get_contents("player1score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "dogs400":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "false"){ 
							$correctText = "False is Correct! +400 Points";
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
	if($playerturn == 2){ // Answers for Q1-Q4 for Player 2
	switch($_POST['questiontype']){
			case "hist100":
						if(isset($_POST['answer']) && $_POST['answer'] == "1776"){ 
							$correctText = "1776, is Correct! +100";
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
							$correctText = "Winston Churchill, is Correct! +200";
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
							$correctText = "Fertile Crescent, is Correct! +300";
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
							$correctText = "1992, is Correct! +400";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player2score = file_get_contents("player2score.txt");
							file_put_contents('player2score.txt', $player2score + $_POST['questionweight']);
							$player2score = file_get_contents("player2score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			//Movie
			case "movi100":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "ironman"){ 
							$correctText = "Iron Man is Correct! +100 Points";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player2score = file_get_contents("player2score.txt");
							file_put_contents('player2score.txt', $player2score + $_POST['questionweight']);
							$player2score = file_get_contents("player2score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "movi200":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "disney"){
							$correctText = "Disney is Correct! +200 Points";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player2score = file_get_contents("player2score.txt");
							file_put_contents('player2score.txt', $player2score + $_POST['questionweight']);
							$player2score = file_get_contents("player2score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "movi300":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "false"){
							$correctText = "False is Correct! +300 Points";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player2score = file_get_contents("player2score.txt");
							file_put_contents('player2score.txt', $player2score + $_POST['questionweight']);
							$player2score = file_get_contents("player2score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "movi400":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "true"){ 
							$correctText = "True is Correct! +400 Points";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player2score = file_get_contents("player2score.txt");
							file_put_contents('player2score.txt', $player2score + $_POST['questionweight']);
							$player2score = file_get_contents("player2score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			//Animals			
			case "ani100":
						if(isset($_POST['answer']) && $_POST['answer'] == "tortoise"){ 
							$correctText = "Tortise, is Correct! +100";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player2score = file_get_contents("player2score.txt");
							file_put_contents('player2score.txt', $player2score + $_POST['questionweight']);
							$player2score = file_get_contents("player2score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "ani200":
						if(isset($_POST['answer']) && $_POST['answer'] == "blue whale"){ 
							$correctText = "Blue Whale, is Correct! +200";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player2score = file_get_contents("player2score.txt");
							file_put_contents('player2score.txt', $player2score + $_POST['questionweight']);
							$player2score = file_get_contents("player2score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "ani300":
						if(isset($_POST['answer']) && $_POST['answer'] == "no"){ 
							$correctText = "No, is Correct! +300";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player2score = file_get_contents("player2score.txt");
							file_put_contents('player2score.txt', $player2score + $_POST['questionweight']);
							$player2score = file_get_contents("player2score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "ani400":
						if(isset($_POST['answer']) && $_POST['answer'] == "yes"){ 
							$correctText = "Yes, is Correct! +400";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player2score = file_get_contents("player2score.txt");
							file_put_contents('player2score.txt', $player2score + $_POST['questionweight']);
							$player2score = file_get_contents("player2score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			//dogs
			case "dogs100":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "false"){ 
							$correctText = "false is Correct! +100 Points";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player2score = file_get_contents("player2score.txt");
							file_put_contents('player2score.txt', $player2score + $_POST['questionweight']);
							$player2score = file_get_contents("player2score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "dogs200":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "dachshund"){
							$correctText = "Dachshund is Correct! +200 Points";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player2score = file_get_contents("player2score.txt");
							file_put_contents('player2score.txt', $player2score + $_POST['questionweight']);
							$player2score = file_get_contents("player2score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "dogs300":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "corgi"){
							$correctText = "Corgi is Correct! +300 Points";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player2score = file_get_contents("player2score.txt");
							file_put_contents('player2score.txt', $player2score + $_POST['questionweight']);
							$player2score = file_get_contents("player2score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "dogs400":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "false"){ 
							$correctText = "False is Correct! +400 Points";
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
	if($playerturn == 3){ // Answers for Q1-Q4 for Player 3
	switch($_POST['questiontype']){
			case "hist100":
						if(isset($_POST['answer']) && $_POST['answer'] == "1776"){ 
							$correctText = "1776, is Correct! +100";
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
							$correctText = "Winston Churchill, is Correct! +200";
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
							$correctText = "Fertile Crescent, is Correct! +300";
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
							$correctText = "1992, is Correct! +400";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player3score = file_get_contents("player3score.txt");
							file_put_contents('player3score.txt', $player3score + $_POST['questionweight']);
							$player3score = file_get_contents("player3score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			//Movie
			case "movi100":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "ironman"){ 
							$correctText = "Iron Man is Correct! +100 Points";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player3score = file_get_contents("player3score.txt");
							file_put_contents('player3score.txt', $player3score + $_POST['questionweight']);
							$player3score = file_get_contents("player3score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "movi200":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "disney"){
							$correctText = "Disney is Correct! +200 Points";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player3score = file_get_contents("player3score.txt");
							file_put_contents('player3score.txt', $player3score + $_POST['questionweight']);
							$player3score = file_get_contents("player3score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "movi300":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "false"){
							$correctText = "False is Correct! +300 Points";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player3score = file_get_contents("player3score.txt");
							file_put_contents('player3score.txt', $player3score + $_POST['questionweight']);
							$player3score = file_get_contents("player3score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "movi400":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "true"){ 
							$correctText = "True is Correct! +400 Points";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player3score = file_get_contents("player3score.txt");
							file_put_contents('player3score.txt', $player3score + $_POST['questionweight']);
							$player3score = file_get_contents("player3score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			//Animals			
			case "ani100":
				if(isset($_POST['answer']) && $_POST['answer'] == "tortoise"){ 
					$correctText = "Tortise, is Correct! +100";
					file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
					$player3score = file_get_contents("player3score.txt");
					file_put_contents('player3score.txt', $player3score + $_POST['questionweight']);
					$player3score = file_get_contents("player3score.txt");
					$remainingquestions = file_get_contents("remainingquestions.txt");
					file_put_contents('remainingquestions.txt', $remainingquestions - 1);
				}
						break;
			case "ani200":
						if(isset($_POST['answer']) && $_POST['answer'] == "blue whale"){ 
							$correctText = "Blue Whale, is Correct! +200";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player3score = file_get_contents("player3score.txt");
							file_put_contents('player3score.txt', $player3score + $_POST['questionweight']);
							$player3score = file_get_contents("player3score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "ani300":
						if(isset($_POST['answer']) && $_POST['answer'] == "no"){ 
							$correctText = "No, is Correct! +300";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player3score = file_get_contents("player3score.txt");
							file_put_contents('player3score.txt', $player3score + $_POST['questionweight']);
							$player3score = file_get_contents("player3score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "ani400":
						if(isset($_POST['answer']) && $_POST['answer'] == "yes"){ 
							$correctText = "Yes, is Correct! +400";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player3score = file_get_contents("player3score.txt");
							file_put_contents('player3score.txt', $player3score + $_POST['questionweight']);
							$player3score = file_get_contents("player3score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			//dogs
			case "dogs100":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "false"){ 
							$correctText = "false is Correct! +100 Points";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player3score = file_get_contents("player3score.txt");
							file_put_contents('player3score.txt', $player3score + $_POST['questionweight']);
							$player3score = file_get_contents("player3score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "dogs200":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "dachshund"){
							$correctText = "Dachshund is Correct! +200 Points";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player3score = file_get_contents("player3score.txt");
							file_put_contents('player3score.txt', $player3score + $_POST['questionweight']);
							$player3score = file_get_contents("player3score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "dogs300":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "corgi"){
							$correctText = "Corgi is Correct! +300 Points";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player3score = file_get_contents("player3score.txt");
							file_put_contents('player3score.txt', $player3score + $_POST['questionweight']);
							$player3score = file_get_contents("player3score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "dogs400":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "false"){ 
							$correctText = "False is Correct! +400 Points";
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
	if($playerturn == 4){ // Answers for Q1-Q4 for Player 4
	switch($_POST['questiontype']){
			//History
			case "hist100":
						if(isset($_POST['answer']) && $_POST['answer'] == "1776"){ 
							$correctText = "1776, is Correct! +100";
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
							$correctText = "Winston Churchill, is Correct! +200";
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
							$correctText = "Fertile Crescent, is Correct! +300";
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
							$correctText = "1992, is Correct! +400";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player4score = file_get_contents("player4score.txt");
							file_put_contents('player4score.txt', $player4score + $_POST['questionweight']);
							$player4score = file_get_contents("player4score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			//Movie
			case "movi100":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "ironman"){ 
							$correctText = "Iron Man is Correct! +100 Points";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player4score = file_get_contents("player4score.txt");
							file_put_contents('player4score.txt', $player4score + $_POST['questionweight']);
							$player4score = file_get_contents("player4score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "movi200":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "disney"){
							$correctText = "Disney is Correct! +200 Points";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player4score = file_get_contents("player4score.txt");
							file_put_contents('player4score.txt', $player4score + $_POST['questionweight']);
							$player4score = file_get_contents("player4score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "movi300":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "false"){
							$correctText = "False is Correct! +300 Points";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player4score = file_get_contents("player4score.txt");
							file_put_contents('player4score.txt', $player4score + $_POST['questionweight']);
							$player4score = file_get_contents("player4score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "movi400":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "true"){ 
							$correctText = "True is Correct! +400 Points";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player4score = file_get_contents("player4score.txt");
							file_put_contents('player4score.txt', $player4score + $_POST['questionweight']);
							$player4score = file_get_contents("player4score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			//Animals			
			case "ani100":
						if(isset($_POST['answer']) && $_POST['answer'] == "tortoise"){ 
							$correctText = "Tortise, is Correct! +100";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player4score = file_get_contents("player4score.txt");
							file_put_contents('player4score.txt', $player4score + $_POST['questionweight']);
							$player4score = file_get_contents("player4score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "ani200":
						if(isset($_POST['answer']) && $_POST['answer'] == "blue whale"){ 
							$correctText = "Blue Whale, is Correct! +200";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player4score = file_get_contents("player4score.txt");
							file_put_contents('player4score.txt', $player4score + $_POST['questionweight']);
							$player4score = file_get_contents("player4score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "ani300":
						if(isset($_POST['answer']) && $_POST['answer'] == "no"){ 
							$correctText = "No, is Correct! +300";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player4score = file_get_contents("player4score.txt");
							file_put_contents('player4score.txt', $player4score + $_POST['questionweight']);
							$player4score = file_get_contents("player4score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "ani400":
						if(isset($_POST['answer']) && $_POST['answer'] == "yes"){ 
							$correctText = "Yes, is Correct! +400";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player4score = file_get_contents("player4score.txt");
							file_put_contents('player4score.txt', $player4score + $_POST['questionweight']);
							$player4score = file_get_contents("player4score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			//dogs
			case "dogs100":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "false"){ 
							$correctText = "false is Correct! +100 Points";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player4score = file_get_contents("player4score.txt");
							file_put_contents('player4score.txt', $player4score + $_POST['questionweight']);
							$player4score = file_get_contents("player4score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "dogs200":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "dachshund"){
							$correctText = "Dachshund is Correct! +200 Points";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player4score = file_get_contents("player4score.txt");
							file_put_contents('player4score.txt', $player4score + $_POST['questionweight']);
							$player4score = file_get_contents("player4score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "dogs300":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "corgi"){
							$correctText = "Corgi is Correct! +300 Points";
							file_put_contents('answeredquestions.txt',$_POST['questiontype'],FILE_APPEND);
							$player4score = file_get_contents("player4score.txt");
							file_put_contents('player4score.txt', $player4score + $_POST['questionweight']);
							$player4score = file_get_contents("player4score.txt");
							$remainingquestions = file_get_contents("remainingquestions.txt");
							file_put_contents('remainingquestions.txt', $remainingquestions - 1);
						}
						break;
			case "dogs400":
						if(isset($_POST['answer']) && strtolower($_POST['answer']) == "false"){ 
							$correctText = "False is Correct! +400 Points";
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
			<p>
					<?= $correctText ?>
				</p>
				<p>Player 1 score:</p><?= $player1score ?><p>Player 2 score:</p><?= $player2score ?><p>Player 3 score:</p><?= $player3score ?><p>Player 4 score:</p><?= $player4score ?>
			</div>
		</div>
	</body>
</html>