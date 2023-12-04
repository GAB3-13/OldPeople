<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor's Appointment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button.cancel {
            background-color: #f44336;
        }
    </style>
</head>

<body>
    <form action="reload()">
        <h2>Doctor's Appointment</h2>

        <label for="date">Date:</label>
        <select id="dates" name="date" onchange="getDoctor()" required>
            <option value="" disabled selected hidden>Select a date</option>
            @foreach ($dates as $date)
                <option>{{ $date->scheduleDate }}</option>
            @endforeach
        </select>

        <label for="doctor">Doctor:</label>
        <select id="doctor">
            @foreach ($doctors as $data)
                <option value={{ $data->individualID }}>Dr. {{ $data->lName }}</option>
            @endforeach
        </select>

        <label for="patientID">Patient ID:</label>
        <input type="text" id="patientID" placeholder="Enter Patient ID" required>

        <label for="patientName">Patient's Name:</label>
        <input type="text" id="patientName" disabled>

        <input value="OK" type="submit">
        <input class="cancel" value="Cancel" type="reset">
    </form>
    <script>
        function submitForm() {
            // Add your logic here to handle form submission and updating information
            alert("Appointment information submitted!");
        }

        function resetForm() {
            // Add your logic here to reset the form
            document.getElementById("patientID").value = "";
            document.getElementById("date").value = "";
            document.getElementById("doctor").selectedIndex = 0; // Reset the dropdown to the first option
            document.getElementById("patientName").value = "";
        }
    </script>

</body>

</html>
