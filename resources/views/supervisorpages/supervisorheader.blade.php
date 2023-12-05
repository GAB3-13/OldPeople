<header class="blade-header" id="dropdownHeader">
  <div class="header-left">
      <img src="{{ asset('images/cane.png') }}" alt="cane" id="cane" class="header-image">
  </div>
  <div class="header-middle">
      <h1>Elderly Care<div><img src="{{ asset('images/wheelchair.png') }}" alt="wheelchair" id="crutch"></div></h1>
  </div>
  <div class="header-right">
      <a href="#" id="logoutLink">Logout</a>
  </div>
</header>
  
  <aside class="sidebar" id="sidebar">
    <ul class="sidebar-menu">
        <li><a href="/supervisorNavigation">Dashboard</a></li>
        <li><a href="/supervisorNavigation/activity">Activity</a></li>
        <li><a href="/supervisorNavigation/roster">Roster</a></li>
       
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
   
    