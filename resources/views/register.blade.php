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
    {{-- <form action="{{ route('registerUser') }}" method="post" accept-charset="UTF-8"> --}}
        {{ csrf_field() }}
    <ul>
      <li><input type="text" placeholder="Field 1"></li>
      <li><input type="text" placeholder="Field 2"></li>
      <li><input type="text" placeholder="Field 3"></li>
      <li><input type="text" placeholder="Field 4"></li>
      <li><input type="text" placeholder="Field 5"></li>
      <li><input type="text" placeholder="Field 6"></li>
      <li><input type="text" placeholder="Field 7"></li>
      <li><input type="text" placeholder="Field 8"></li>
    </ul>
    <button type="submit">Open Account</button>
                            {{-- </form> --}}
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
