<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Website</title>
  <link href="/css/welcome.css" rel="stylesheet" >
  
</head>
<body>

  <header class="header">
    <div class="header-content">
      <h1>Graceful Haven Care Home</h1>
      <div class="buttons">
        <button class="signup" ><a href="/register">Sign Up</a></button>
        <button class="login"><a href="/login">Login</a></button>
      </div>
    </div>
  </header>

  <section class="home">
  </section>

  <section class="services">
  </section>

  <section class="contact">
  </section>


  <script>
    window.addEventListener('scroll', function() {
      var header = document.querySelector('.header');
      if (window.scrollY > 50) { /* Adjust 50 to the scroll position where you want the color to appear */
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });
  </script>
</body>
</html>

<style>
body {
    margin: 0;
    padding: 0;
    background-size: cover;
    background-position: center;
    background-color: #EAE3EA; 
}
.header {
  background-color: transparent;
  color: #be59496e;
  padding: 20px;
  text-align: center;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1000;
  transition: background-color 0.3s ease;
}
.header.scrolled {
  background-color: #eae3eaa0;
  color: #be5949
}
.header-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.header h1 {
  font-family: 'Cambria', serif;  margin: 0;
}

.buttons button {
  padding: 10px 40px;
  margin-left: 10px;
  border: none;
  cursor: pointer;
  background-color: #BE5949; 
  color: #ffffff; 
  transition: background-color 0.5s ease; 
  text-decoration: none; 
}
.buttons a {
  text-decoration: none; 
  color: inherit; 
}

.buttons button:hover {
  background-color: #85463B; 
}

.home, .services, .contact {
    background-size: cover;
    background-position: center;
    height: 100vh;
}

.home {
    background-image: url('/images/canva/Home.png');
}

.services {
    background-image: url('/images/canva/services.png');
}

.contact {
    background-image: url('/images/canva/contact.png');
}

html, body {
    height: 100%;
}


</style>




