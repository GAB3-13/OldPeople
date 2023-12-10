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

  @include('patientpages/patientheader')
  <div class="content-container">

  <h1>New Appointment</h1>
  <div class="roster-table">
    <form id="dateForm" action="{{ route('search') }}" method="POST" >
        @csrf
        <ul class="fields">
            <li>
                <label for="rosterDate">Roster Date:</label>
                <input type="text" name="rosterDate" id="rosterDate" class="form-control">
            </li>
            <li>
                <button type="submit">Fetch Appointments</button>
            </li>
        </ul>
    </form>
    

    <table>    <table class="custom-table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Doctor on Duty</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($setRosters as $roster)
            <tr>
                <td>{{ $roster->rosterDate }}</td>
                <td>{{ $roster->doctor->fName }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  <script>
  $(document).ready(function(){
      $('#rosterDate').datepicker({
          format: 'yyyy/mm/dd', 
          autoclose: true
      }).on('show', function(e){
          $('.datepicker').wrap('<div class="datepicker-popup"></div>');
      }).on('hide', function(e){
          $('.datepicker-popup').remove(); 
      });
  });
  
  
  
  
    const urlParams = new URLSearchParams(window.location.search);
  const errorMessage = urlParams.get('error');
  if (errorMessage) {
      const errorDiv = document.getElementById('errorMessage');
      errorDiv.textContent = errorMessage;
      errorDiv.style.display = 'block'; // Show the error message
  
      setTimeout(() => {
          errorDiv.style.opacity = '0'; 
          setTimeout(() => {
              errorDiv.style.display = 'none'; // Hide the error message after fading out
          }, 400); 
      }, 3000);
  }
  
  
  </script>


</body>

</html>
