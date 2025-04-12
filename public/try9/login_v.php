<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body class="cyberpunk-bg">
    <div class="login-box">
      <form action="login.php" method="POST">
        <label for="email">E-Mail:</label>
        <input type="text" id="email" name="email" placeholder="Enter your e-mail...">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password...">
        <input type="hidden" id="url" name="url" value="<?php echo $_GET['url']; ?>">
        <button type="submit">Login</button>
      </form>
    </div>
  </body>
</html>
