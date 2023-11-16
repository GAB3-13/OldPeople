<!DOCTYPE html>

<?php
session_start();

?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="/css/login.css">
</head>

<body>

  <?php
  if (!isset($_POST['login'])) {
      $email = "";
      $password = "";
  } else {
      $email = $_POST['email'];
      $password = $_POST['password'];
  }
      ?>

  <div class="login-container">
    <form class="login-form">
      <h2>Login</h2>
      <div class="input-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php echo $email;?>" required>
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" value="<?php echo $password;?>" required>
      </div>
      <input type="submit" name="login" value="login" class="login"/>
    </form>
  </div>
</body>

</html>
