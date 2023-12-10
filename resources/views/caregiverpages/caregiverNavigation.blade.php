<!DOCTYPE html>
<?php
session_start();
$email = '';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="/css/adminNav.css">
    <script>
        function getForChange() {
            var patientInformation = document.getElementById('patientInformation');
            var updatePatient = document.getElementById('updateTable');
            if (patientInformation.value != '') {
                updatePatient.style.display = 'block';
            } else {
                updatePatient.style.display = 'none';
            }
        }
    </script>

</head>

<body>

    @include('caregiverpages/caregiverheader')
    <div class="content-container">
        <h1>

            {{ $cgI[0]->fName }} {{ $cgI[0]->lName }}'s Caregiver Dashboard</h1>
        <p>Here the caregiver is able to select from a dropdown of patients they have been assigned.
            Once they select a patient, they can view their medicine schedule for breakfast, lunch, dinner, etc.</p>

        <table id="patientHistory">
            <thead>
                <tr>
                    <th>Patient Name</th>
                    <th>Date</th>
                    <th>Breakfast</th>
                    <th>Morning Medicine</th>
                    <th>Lunch</th>
                    <th>Afternoon Medicine</th>
                    <th>Dinner</th>
                    <th>Night Medicine</th>
                </tr>
                @foreach ($caregiverPatients as $cgP)
                    <tr>
                        <td>{{ $cgP->fName }} {{ $cgP->lName }}</td>
                        <td>{{ $cgP->appointmentDate }}</td>
                        <td>{{ $cgP->breakfast }}</td>
                        <td>{{ $cgP->morningMeds }}</td>
                        <td>{{ $cgP->lunch }}</td>
                        <td>{{ $cgP->afternoonMeds }}</td>
                        <td>{{ $cgP->dinner }}</td>
                        <td>{{ $cgP->nightMeds }}</td>
                    </tr>
                @endforeach
                </tr>
            </thead>
        </table>


        <br>
        <form id="patientInformation" action="{{ route('createCheckUpdate') }}" method="post" accept-charset="UTF-8">
            {{ csrf_field() }}
            <label for="patientDropdown">Select Patient:</label>
            <select id="patientDropdown" name="patients" onchange="getForChange()">
                <option value="" disabled selected hidden>Select Patient - Date</option>
                @foreach ($caregiverPatients as $patient)
                    <option value={{ $patient->appointmentID }}>{{ $patient->fName }}
                        {{ $patient->lName }} - {{ $patient ->appointmentDate }}</option>
                @endforeach
            </select>
            <input type="submit">

            <table id="updateTable" style="display: none">
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
                        <td><input type="date" id="date" required></td>
                        <td><input type="checkbox" id="breakfast"></td>
                        <td><input type="checkbox" id="morning_meds"></td>
                        <td><input type="checkbox" id="lunch"></td>
                        <td><input type="checkbox" id="afternoon_meds"></td>
                        <td><input type="checkbox" id="dinner"></td>
                        <td><input type="checkbox" id="night_Medicine"></td>
        </form>
        </tr>
        </thead>
        </table>
    </div>

</body>

</html>
