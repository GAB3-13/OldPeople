<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Website</title>
  <link href="/css/welcome.css" rel="stylesheet" >
  
</head>
<body>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <h1>Welcome to Old People Care</h1>
      <div class="buttons">
        <a href="/registerUserRoute" class="btn btn-register">Register</a>
        <a href="/loginUserRoute" class="btn btn-login">Login</a>
      </div>
    </div>
  </section>

  <section class="home">
    <h2>Great services</h2>
    <div class="slideshow-container">
      <div class="mySlides fade">
        <img src="https://media.istockphoto.com/id/585617626/photo/this-is-better-than-the-real-thing.jpg?s=612x612&w=0&k=20&c=iw1YxZBKGnVVSnoEvqj66FN02N7Yb8LxN4zcBK62SYQ=" alt="Image 1">
      </div>
      <div class="mySlides fade">
        <img src="https://external-preview.redd.it/mpM0tB2LGdMsHhDlYykMVlqpzgSOqwUNG-XPJCEDR2o.jpg?auto=webp&s=e34e8ce224b6dc4db05f099e7193d01f1db7c337" alt="Image 2">
      </div>
      <div class="mySlides fade">
        <img src="https://starecat.com/content/wp-content/uploads/when-the-whole-squad-ends-up-in-the-same-nursing-home-party.jpg" alt="Image 3">
      </div>
      <!-- Add more slides as needed -->
    </div>
  </section>


  <script>
    // JavaScript for slideshow functionality
    let slideIndex = 0;
    showSlides();

    function showSlides() {
      let i;
      const slides = document.getElementsByClassName("mySlides");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) { slideIndex = 1 }
      slides[slideIndex - 1].style.display = "block";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
  </script>




</body>
</html>
