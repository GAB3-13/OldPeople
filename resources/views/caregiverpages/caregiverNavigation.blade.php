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
  <div class="content-container">
    <h1>Caregiver Dashboard</h1>
    <p>Here the caregiver is able to select from a dropdown of patients they have been assigned.
        Once they select a patient, they can view their medicine schedule for breakfast, lunch, dinner, etc.</p>

    <form id="medicineForm">
        <label for="patientDropdown">Select Patient:</label>
        <select id="patientDropdown" name="patients">
            {{-- example --}}
            <option value="patient1">Patient 1</option>
     
        </select>

        <button type="button" id="calendarButton">Calendar</button>
        <button type="submit">Submit</button>
    </form>

    <table id="medicineTable">
        <thead>
            <tr>
                <th>Breakfast</th>
                <th>Morning Medicine</th>
                <th>Lunch</th>
                <th>Afternoon Medicine</th>
                <th>Dinner</th>
                <th>Night Medicine</th>
            </tr>
        </thead>
        <tbody>
           
        

        </tbody>
    </table>
</div>

</body>

</html>
