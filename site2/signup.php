<?php include ('process.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="signupcss.css" />
  </head>
  <body>
      <nav class="pages">
        <ul>
          <li><a href="home.php">HOME PAGE</a></li>
          <li><a href="home.php">ABOUT</a></li>
          <li><a href="signup.php">SIGN UP</a></li>
          <li><a href="login.php">LOGIN</a></li>
        </ul>
      </nav>
    <h1>Create an account</h1>
    <form action="signup.php" method="POST">
      <fieldset>
        <label>User Name<br><input type="text" placeholder=" User Name" name="email" /></label>
      </fieldset>
      <fieldset>
        <label>Email<br><input type="email" placeholder=" Email id" name="email" /></label>
      </fieldset>
      <fieldset>
        <label>Password<br><input type="password" placeholder=" Password" name="pwd"/></label>
      </fieldset>
      <fieldset>
        <label>Confirm your password<br><input type="password" placeholder=" Re-enter" /></label>
      </fieldset>
      <fieldset>
          <button class="submit">Submit</button>
          <br>
          <p>Registered User?  <a href="login.php">Login</a><p>
      </fieldset>
    </form>
  </body>
</html>