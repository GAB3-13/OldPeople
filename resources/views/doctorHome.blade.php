<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor's Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
        }
        .box {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-top: 5px;
        }
        .button-container {
            text-align: right;
            margin-top: 15px;
        }
        .button-container button {
            margin-left: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <label for="searchName">Search by Name:</label>
            <input type="text" id="searchName" placeholder="Enter Patient Name">
        </div>

        <div class="box">
            <label for="searchDate">Search by Date:</label>
            <input type="date" id="searchDate">
        </div>

        <div class="box">
            <label for="searchComment">Search by Comment:</label>
            <input type="text" id="searchComment" placeholder="Enter Comment">
        </div>

        <div class="box">
            <label for="searchMorningMed">Search by Morning Med:</label>
            <input type="text" id="searchMorningMed" placeholder="Enter Morning Medication">
        </div>

        <div class="box">
            <label for="searchAfternoonMed">Search by Afternoon Med:</label>
            <input type="text" id="searchAfternoonMed" placeholder="Enter Afternoon Medication">
        </div>

        <div class="box">
            <label for="searchNightMed">Search by Night Med:</label>
            <input type="text" id="searchNightMed" placeholder="Enter Night Medication">
        </div>

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Comment</th>
                    <th>Morning Med</th>
                    <th>Afternoon Med</th>
                    <th>Night Med</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Sample data, replace with dynamic data from the server -->
                <tr>
                    <td>John Doe</td>
                    <td>2023-01-15</td>
                    <td>Follow-up</td>
                    <td>Med A</td>
                    <td>Med B</td>
                    <td>Med C</td>
                    <td><a href="/patient/appointments/1">View Details</a></td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>

        <div class="box">
            <label for="tillDate">Till Date for Appointments:</label>
            <input type="date" id="tillDate">
        </div>

        <div class="button-container">
            <button onclick="submitTillDate()">Submit</button>
        </div>

        <div class="box">
            <h3>Upcoming Appointments</h3>
            <div>
                <label for="upcomingPatient">Patient:</label>
                <input type="text" id="upcomingPatient" readonly value="John Doe">
            </div>
            <div>
                <label for="upcomingDate">Date:</label>
                <input type="date" id="upcomingDate" readonly value="2023-01-20">
            </div>
        </div>
    </div>

    <script>
        function submitTillDate() {
            // Add logic to handle submitting Till Date
        }
    </script>
</body>
</html>
