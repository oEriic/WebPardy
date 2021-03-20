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
          $user_input = strstr($file1[$i], $username);
          if($user_input !== false) {
            break;
          }
        }
        if ($user_input != ''){
        ?>
            <div class = center>
              <h2> Sorry, that username already exists </h2>
              <a href = "homepage.php"> Go back and try again </a>
            </div>
        <?php
        } else{
          $data = $username.",".$password.","."0"."\n";
          $file2 = fopen('users.txt', 'a');
          fwrite ($file2, $data);
          fclose ($file2);
          ?>
            <div class = center>
              <h2> You've been registered! </h2>
              <a href = "homepage.php"> Go back to log in </a>
            </div>
          <?php
        }
      }

    ?>
  </body>
</html>
