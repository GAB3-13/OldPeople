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
            {{-- <option value="patient1">Patient 1</option> --}}
            <option value="" disabled selected hidden>Select a patient</option>
            @foreach ($patients as $patient)
                <option value={{ $patient->individualID }}>{{ $patient->fName }}
                    {{ $patient->lName }}</option>
            @endforeach

        </select>

        <button type="button" id="calendarButton">Calendar</button>
        <button type="submit">Submit</button>
    </form>

    <table id="medicineTable">
        <thead>
            <tr>
                <th>Date</th>
                <th>Breakfast</th>
                <th>Morning Medicine</th>
                <th>Lunch</th>
                <th>Afternoon Medicine</th>
                <th>Dinner</th>
                <th>Night Medicine</th>
            </tr>
            <tr>
                <td><input type="date"></td>
                <td><input type="checkbox" id="breakfast"></td>
                <td><input type="checkbox" id="morning_meds"></td>
                <td><input type="checkbox" id="lunch"></td>
                <td><input type="checkbox" id="afternoon_meds"></td>
                <td><input type="checkbox" id="dinner"></td>
                <td><input type="checkbox" id="night_Medicine"></td>
                <td><input type="button" name="" id=""></td>
            </tr>
        </thead>
        <tbody>



        </tbody>
    </table>
</div>

</body>

</html>
