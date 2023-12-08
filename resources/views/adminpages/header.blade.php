<header class="blade-header" id="dropdownHeader">
  <div class="header-left">
      <img src="{{ asset('images/cane.png') }}" alt="cane" id="cane" class="header-image">
  </div>
  <div class="header-middle">
      <h1>Graceful Haven Care Home<div><img src="{{ asset('images/wheelchair.png') }}" alt="wheelchair" id="crutch"></div></h1>
  </div>
  <div class="header-right">
      <a href="/login" id="logoutLink">Logout</a>
  </div>
</header>

<aside class="sidebar" id="sidebar">
  <ul class="sidebar-menu">
      <li><a href="/adminNavigation">Dashboard</a></li>
      <li><a href="/adminNavigation/profileManager">Profile Manager</a></li>
      <li><a href="/adminNavigation/userPayments">User Payments</a></li>
      <li><a href="/adminNavigation/salaries">Salaries</a></li>
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


