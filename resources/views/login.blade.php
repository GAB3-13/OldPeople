<!DOCTYPE html>
<?PHP
session_start();
$email = "";
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="/css/login.css">
</head>

<body>
  <div class="login-container">
    <form class="login-form" method="GET">
      <h2>Login</h2>
      <div class="input-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php echo $email;?>" required>
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <input type="submit" name="submit" value="login" class="login">
      <a href="/register">Register</a>
    </form>
  </div>
</body>

</html>
