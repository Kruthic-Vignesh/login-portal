<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="logincss.css" />
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
    <h1>Login</h1>
    <form action="login.php">
      <fieldset>
        <label>Email<br><input type="email" placeholder=" Email id" name="email" /></label>
      </fieldset>
      <fieldset>
        <label>Password<br><input type="password" placeholder=" Password" name="pwd"/></label>
      </fieldset>
      <fieldset>
          <button class="submit">Submit</button>
          <br>
          <p>New User?  <a href="signup.php" class="options">Sign up</a><a href="home.php">Forgot Password?</a><p>
      </fieldset>
    </form>
  </body>
</html>