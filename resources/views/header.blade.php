<header class="blade-header" id="dropdownHeader">
  <h1>Old people care <div><img src="{{ asset('images/wheelchair.png') }}" alt="wheelchair" id="crutch"></div></h1>
</header>

<aside class="sidebar" id="sidebar">
  <ul class="sidebar-menu">
      <li><a href="#">Dashboard</a></li>
      <li><a href="#">Profile Manager</a></li>
      <li><a href="#">User Payments</a></li>
      <li><a href="#">Salaries</a></li>
      <li><a href="#">Logout</a></li>
  </ul>
</aside>

<script>
  document.addEventListener('DOMContentLoaded', function() {
      const dropdownHeader = document.getElementById('dropdownHeader');
      const sidebar = document.getElementById('sidebar');

      dropdownHeader.addEventListener('click', function() {
          sidebar.classList.toggle('active');
      });
  });
</script>

  <style>
    /* Styles for the header */
    .blade-header {
      background-color: #333;
      color: white;
      padding: 20px;
      text-align: center;
      transition: background-color 0.3s ease;
    }
    #crutch {
        max-height: 50px;
        vertical-align: middle; 
        margin-left: 10px; 
    }
    .blade-header.scroll {
      background-color: #555;
      position: fixed;
      width: 100%;
      top: 0;
      left: 0;
      z-index: 1000;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }
  
    h1 {
      margin: 0;
      display: flex;
      align-items: center;
    }
    body,
ul {
  margin: 0;
  padding: 0;
}

/* Style sidebar */
.sidebar {
  width: 250px; /* Set your desired width */
  height: 100vh;
  background-color: #333;
  color: white;
  padding-top: 20px;
}

/* Style sidebar menu */
.sidebar-menu {
  list-style: none;
  padding: 0;
}

/* Style sidebar menu items */
.sidebar-menu li {
  margin-bottom: 10px;
}

/* Style sidebar links */
.sidebar-menu li a {
  display: block;
  color: white;
  text-decoration: none;
  padding: 8px 16px;
  transition: background-color 0.3s ease;
}

/* Hover effect on sidebar links */
.sidebar-menu li a:hover {
  background-color: #555;
}
  </style>
 
  