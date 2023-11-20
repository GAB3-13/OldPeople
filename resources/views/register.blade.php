<!DOCTYPE html>
<html lang="en">
    <?php
    
    ?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Page</title>
  <link rel="stylesheet" href="/css/register.css">
</head>
<body>

  <section class="hero">
    <h1>Register Old People</h1>
    <p>We will take care of you I swear!</p>
  </section>
  <section class="input-fields">
    <h2>Register here</h2>
    <form action="{{ route('register.submit') }}" method="post" accept-charset="UTF-8">
        {{ csrf_field() }}
        <ul>
            <li>
                <label for="fName">First Name</label>
                <input type="text" id="fName" name="fName" placeholder="Enter your first name" required>
            </li>
            <li>
                <label for="lName">Last Name</label>
                <input type="text" id="lName" name="lName" placeholder="Enter your last name" required>
            </li>
            <li>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email address" required>
            </li>
            <li>
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
            </li>
            <li>
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" placeholder="Enter your date of birth" required>
            </li>
            <li>
                <label for="password">Password</label>
                <input type="text" id="password" name="password" placeholder="Enter your Password" required>
            </li>
            <li>
                <label for="role">Role</label>
                <select name="roleID" id="roleID" onchange="showPatientFields()">
                    <option>Choose an option</option> 
                    <option value="1">Patient</option>
                    <option value="2">Caregiver</option>
                    <option value="3">Doctor</option>
                    <option value="4">Family Member</option>
                    <option value="5">Supervisor</option>

                </select>
            </li>

            <li id="patientFields" style="display: none;">

                <label for="patientCondition">Family Code</label>
                <input type="text" id="familyCode" name="familyCode" placeholder="Enter Family Code">

                <label for="patientHistory">Emergency Contact</label>
                <input type="text" id="emergencyContact" name="emergencyContact" placeholder="emergencyContact">

                <label for="insurance">Relationship to Emergency Contact</label>
                <input type="text" id="ecRelationship" name="ecRelationship" placeholder="Relationship to Emergency Contact">
            </li>
        </ul>
        <button type="submit">Open Account</button>
    </form>
</section>
<a href="/login">Login</a>

  


<script>
    function showPatientFields() {
        var role = document.getElementById('roleID');
        var patientFields = document.getElementById('patientFields');

        if (role.value === '1') {
            patientFields.style.display = 'block';
        } else {
            patientFields.style.display = 'none';
        }
    }
</script>



</body>
</html>
