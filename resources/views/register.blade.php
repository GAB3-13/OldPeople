<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Page</title>
  <link rel="stylesheet" href="/css/register.css">
</head>
<body>

  <!-- Hero Section 1 -->
  <section class="hero">
    <h1>Register Old People</h1>
    <p>We will take care of you I swear!</p>
    <!-- Add any content for the hero section -->
  </section>

  <!-- Hero Section 2 -->
  <section class="hero-2">
    <h2>Special Offer</h2>
    <p>Exclusive deals just for you!(maybe)</p>
    <!-- Add any content for the second hero section -->
  </section>

  <!-- Vertical List of Input Fields -->
  <section class="input-fields">
    <h2>Register here</h2>
    <form action="{{ route('registerUser') }}" method="post" accept-charset="UTF-8">
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
        </ul>
        <button type="submit">Open Account</button>
    </form>
</section>

  


{{-- once patient is selected the it's going to show up --}}

  {{-- <script>
    function display(event) {
        event.preventDefault();
        var input = document.getElementsByName("phoneNumber2")[0];
        input.style.display = "block";
        input.previousElementSibling.style.display = "block"; // Display the label
    }

</script> --}}



</body>
</html>
