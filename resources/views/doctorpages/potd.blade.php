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

  @include('doctorpages/doctorheader')
  <div class="content-container">
  <h1>Patient Of the Day</h1>

  <table>
    <thead>
      <tr>
        <th>Patient ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Schedule Date</th>
        <th>AppointmentID</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($appointments as $appointment)
        <tr>
          <td>{{ $appointment->patientID }}</td>
          <td>{{ $appointment->fName }}</td>
          <td>{{ $appointment->lName }}</td>
          <td>{{ $appointment->scheduleDate }}</td>
          <td>{{ $appointment->appointmentID }}</td>
        </tr>
        @endforeach
      </tbody>
  </table>
  <br>
  <form action="/doctorNavigation/set" method="POST">
    @csrf
    <input type="hidden" name="patientID" value="{{  $appointment->patientID  }}">
    <input type="hidden" name="appointmentID" value="{{  $appointment->appointmentID  }}">
  <table>
    <thead>
      <tr>
        <th>CareGivers</th>
        <th>Morning Meds</th>
        <th>Afternoon Meds</th>
        <th>Night Meds</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
            <select name="caregiverID">
                <option value="">Select Caregiver</option>
                @foreach($caregiversDetails as $individualID => $caregiver)
                    <option value="{{ $individualID }}" @if($individualID == $appointments[0]->caregiverID) selected @endif>
                        {{ $caregiver->fName }} {{ $caregiver->lName }}
                    </option>
                @endforeach
            </select>    
    </td>
    <td><input type="text" name="morning_meds" value="{{ $appointments[0]->morningMeds }}"></td>
    <td><input type="text" name="afternoon_meds" value="{{ $appointments[0]->afternoonMeds }}"></td>
    <td><input type="text" name="night_meds" value="{{ $appointments[0]->nightMeds }}"></td>
      </tr>
    </tbody>
  </table>
  <br>
  <table>
    <thead>
      <tr>
        <th>Breakfast</th>
        <th>Lunch</th>
        <th>Dinner</th>
        <th>Comments</th>
      </tr>
    </thead>
    <tbody>
      <tr>
    <td><input type="text" name="breakfast" value="{{ $appointments[0]->breakfast }}"></td>
    <td><input type="text" name="lunch" value="{{ $appointments[0]->lunch }}"></td>
    <td><input type="text" name="dinner" value="{{ $appointments[0]->dinner }}"></td>
    <td><input type="text" name="comment" value="{{ $appointments[0]->comment }}"></td>
     
</tr>
    </tbody>
  </table>
  <br>
  <button type="submit">Submit</button>
</form>
  </div>
</body>

</html>
