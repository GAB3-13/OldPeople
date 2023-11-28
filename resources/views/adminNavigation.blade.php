<!DOCTYPE html>
<?php
session_start();
$email = "";
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="/css/adminNav.css">
</head>

<body>

  @include('header')

  <aside class="sidebar">
    <ul class="sidebar-menu">
      <li><a href="#">Dashboard</a></li>
      <li><a href="#">Profile Manager</a></li>
      <li><a href="#">User Payments</a></li>
      <li><a href="#">Salaries</a></li>
      <li><a href="#">Logout</a></li>
    </ul>
  </aside>
</body>

</html>
