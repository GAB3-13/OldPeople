<header class="blade-header" id="dropdownHeader">
    <h1>Old people care <div><img src="{{ asset('images/wheelchair.png') }}" alt="wheelchair" id="crutch"></div></h1>
  </header>
  
  <aside class="sidebar" id="sidebar">
    <ul class="sidebar-menu">
        <li><a href="/patientNavigation">Dashboard</a></li>
        <li><a href="/patientNavigation/hub">Hub</a></li>
        <li><a href="/patientNavigation/patientschedule">Schedule</a></li>
        <li><a href="#">Logout</a></li>
    </ul>
  </aside>
  
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        const dropdownHeader = document.getElementById('dropdownHeader');
        // const sidebar = document.getElementById('sidebar');
        const caneImage = document.getElementById('cane');
    
        // dropdownHeader.addEventListener('click', function() {
        //     sidebar.classList.toggle('active');
        // });
    
        caneImage.addEventListener('click', function() {
            sidebar.classList.toggle('active');
        });
    
        const logoutLink = document.getElementById('logoutLink');
        logoutLink.addEventListener('click', function(event) {
            event.preventDefault();
            window.location.href = '/';
        });
    });
    
      </script>
    
  
 
   
    