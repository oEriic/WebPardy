<?php
  session_start();
  //clears session variable 
  session_destroy();
?>

<html>
  <head>
    <title> Jeopardy </title>
    <link rel = "stylesheet" href = "css.css">
  </head>

  <body>
    <h1> Jeopardy HomePage </h1>

    <div class = align>
    <img class = "image" src = "jeopardy.jpg" alt = "jeopardy image">

    <div class = login>
      <form action = "log-in_submit.php" method = "POST">
        <fieldset style = "margin-bottom: 10px">
          <legend> Log In </legend>
          <ul>
            <li>
              Username
              <br>
              <input class = "inputBox" type = "text" maxlength = "20" name = "username" placeholder = "Username">
            </li>
            <br>
            <li>
              Password
              <br>
              <input class = "inputBox" type = "text" maxlength = "20" name = "password" placeholder = "Password">
            </li>
            <br>
            <input class = "submitButton" type = "submit" value = "Log in">
          </ul>
        </fieldset>
      </form>

      <form action = "register_submit.php" method = "POST">
        <fieldset>
          <legend> Need to Register? </legend>
          <ul>
            <li>
              Username
              <br>
              <input class = "inputBox" type = "text" maxlength = "20" name = "username" placeholder = "Username">
            </li>
            <br>
            <li>
              Password
              <br>
              <input class = "inputBox" type = "text" maxlength = "20" name = "password" placeholder = "Password">
            </li>
            <br>
            <input class = "submitButton" type = "submit" value = "Log in">
          </ul>
        </fieldset>
      </form>
    </div>
  </div>

  </body>

</html>
