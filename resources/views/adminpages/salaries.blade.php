<!DOCTYPE html>
<?php
session_start();
$email = "";
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Salaries Page</title>
  <link rel="stylesheet" href="/css/adminNav.css">
</head>

<body>

  @include('adminpages/header')
  <div class="content-container">
  <h1>Salaries</h1>

  <h2>Doctors</h2>
  <table>
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Role ID</th>
        <th>Salary</th>
        <th>Action</th>
      </tr>
    </thead>
    <form method="post" action="{{ route('updateSalary') }}">
      @csrf
    @foreach($doctorIndividuals as $docs)
    <input type="hidden" name="individualID" value="individual{{ $docs->individualID }}">
    <input type="hidden" name="roleID" value="{{ $docs->roleID }}">
    <tr>
        <td>{{ $docs->fName }}</td>
        <td>{{ $docs->lName }}</td>
        <td>{{ $docs->roleID }}</td>
        <td>
            <input type="text" name="individual{{ $docs->individualID }}Salary" value="{{ $docs->salary }}">
        </td>
        <td>
            <button type="submit">Update</button>
        </td>
    </tr>
@endforeach
  </form>
  </table>

  <h2>Caregivers</h2>
  <table>
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Role ID</th>
        <th>Salary</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <form method="post" action="{{ route('updateSalary') }}">
        @csrf
      @foreach($caregiverIndividuals as $caregiver)
      <input type="hidden" name="individualID" value="individual{{ $caregiver->individualID }}">
    <input type="hidden" name="roleID" value="{{ $caregiver->roleID }}">
      <tr>
          <td>{{ $caregiver->fName }}</td>
          <td>{{ $caregiver->lName }}</td>
          <td>{{ $caregiver->roleID }}</td>
          <td>
              <input type="text" name="individual{{ $caregiver->individualID }}Salary" value="{{ $caregiver->salary }}">
          </td>
          <td>
              <button type="submit">Update</button>
          </td>
      </tr>
  @endforeach
    </tbody>
  </form>
  </table>


  <h2>Supervisor</h2>
  <table>
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Role ID</th>
        <th>Salary</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <form method="post" action="{{ route('updateSalary') }}">
        @csrf
      @foreach($supervisorIndividuals as $supa)
      <input type="hidden" name="individualID" value="individual{{ $supa->individualID }}">
    <input type="hidden" name="roleID" value="{{ $supa->roleID }}">
      <tr>
          <td>{{ $supa->fName }}</td>
          <td>{{ $supa->lName }}</td>
          <td>{{ $supa->roleID }}</td>
         <td>
              <input type="text" name="individual{{ $supa->individualID }}Salary" value="{{ $supa->salary }}">
          </td>
          <td>
         
              <button type="submit">Update</button>
          </td>
      </tr>
  @endforeach
    </tbody>
  </form>
  </table>

  </div>
</body>

</html>
