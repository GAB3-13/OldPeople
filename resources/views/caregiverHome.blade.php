<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caregiver's Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
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
    </style>
</head>
<body>
    <div class="container">
        <!-- Sample data, replace with dynamic data from the server -->
        <div class="box">
            <h2>Patient: John Doe</h2>
            <p>Morning Medication: Med A</p>
            <p>Afternoon Medication: Med B</p>
            <p>Night Medication: Med C</p>
            <p>Breakfast: Toast</p>
            <p>Lunch: Salad</p>
            <p>Dinner: Chicken</p>
        </div>

        <!-- Add more patient boxes as needed -->

        <div class="button-container">
            <button onclick="updatePatientDetails()">Ok</button>
            <button onclick="refreshPage()">Cancel</button>
        </div>
    </div>

    <script>
        function updatePatientDetails() {
            // Add logic to update patient details on the server
            alert("Patient details updated successfully!");
        }

        function refreshPage() {
            // Add logic to refresh the page
            location.reload();
        }
    </script>
</body>
</html>
