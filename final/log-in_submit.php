<?php 
  // session start
  session_start();
?>
<html>
  <head>
    <title> Jeopardy </title>
    <link rel = "stylesheet" href = "css.css">
  </head>

  <body>
    <?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $file1 = file("users.txt");
    $user_input = '';

    if ($username == ''){
    ?>
        <div class = center>
          <h2> Please type in the username </h2>
          <a href = "homepage.php"> Go back and try again </a>
        </div>
    <?php
    } else if ($password == ''){
    ?>
        <div class = center>
          <h2> Please type in the password </h2>
          <a href = "homepage.php"> Go back and try again </a>
        </div>
    <?php
    } else{
      for ($i = 0; $i < count($file1); $i++){
        $_SESSION['userApprove'] = "approve";
        $user_input = strstr($file1[$i], $username);
        if($user_input !== false) {
          break;
        }
      }
      if ($user_input == ''){
        ?>
          <div class = center>
            <h2> Sorry, that username does not exist. Please try again </h2>
            <a href = "homepage.php"> Go back and try again </a>
          </div>
        <?php
      } else{
        $user_inputArr = explode(",", $user_input);
        $input_password = $user_inputArr[1];

        if ($password != $input_password){
          ?>
            <div class = center>
              <h2> Sorry, that password does not match with the username. Please try again </h2>
              <a href = "homepage.php"> Go back and try again </a>
            </div>
          <?php
        } else{
          header("Location: gameplaypage.php");
        }
      }
    }
    ?>
  </body>

</html>
