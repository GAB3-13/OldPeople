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

  @include('caregiverpages/caregiverheader')
  <h1>Caregiver nav</h1>
 <p>here the caregiver is abel to select from a dropdown of patients they have been assigned
    once they select a patient  then their medicine breakfast lunch dinner stuff
 </p>

 <p>Optional: there will be a calender tab for future patients where they can see the patient hub on a selected date</p>

</body>

</html>
