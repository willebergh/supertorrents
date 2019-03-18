<?php
  session_start();

  if ($_SESSION['loggedin'] == true) {
    header("Location: ./index.php");
  }
?>

<div class="formContainer">
  <h1>Login</h1>
  <form class="form" action="./assets/login.script.php" method="post">
    <div class="form_username">
      <label for="username">Username</label>
      <input type="text" name="username" placeholder="username">
    </div>
    <div class="form_password">
      <label for="passowrd">Password</label>
      <input type="password" name="password" placeholder="password">
    </div>
    <div class="form_extra_links">
      <a href="./signup.php">Forgot password?</a>
      <a href="./signup.php">Signup now!</a>
    </div>
    <div class="form_button">
      <button type="submit" name="login_button">Login</button>
    </div>
  </form>
</div>