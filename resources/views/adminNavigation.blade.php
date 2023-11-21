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
    <div class="login-form">
      <input type="submit" name="submit" value="login" class="login">
      <a href="/register">Register</a>
    </div>
  </div>
</body>

</html>
