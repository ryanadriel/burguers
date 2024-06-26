@include('system.includes.header')
<div class="sidebar close">
  <div class="logo-details">
    <i class='bx bxl-c-plus-plus'></i>
    <span class="logo_name">CodingLab</span>
  </div>
  <ul class="nav-links">
    <li>
      <a href="#">
        <i class='bx bx-grid-alt' ></i>
        <span class="link_name">Dashboard</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="#">Itens</a></li>
      </ul>
    </li>
    <li>
      <div class="iocn-link">
        <a href="#">
          <i class='bx bx-collection' ></i>
          <span class="link_name">Itens</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
      </div>
      <ul class="sub-menu">
        <li><a class="link_name" href="#">Itens</a></li>
        <li><a href="#">Hamburgueres</a></li>
        <li><a href="#">Batatas</a></li>
        <li><a href="#">Bebidas</a></li>
      </ul>
    </li>
    <li>
      <div class="iocn-link">
        <a href="#">
          <i class='bx bx-book-alt' ></i>
          <span class="link_name">Posts</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
      </div>
      <ul class="sub-menu">
        <li><a class="link_name" href="#">Posts</a></li>
        <li><a href="#">Web Design</a></li>
        <li><a href="#">Login Form</a></li>
        <li><a href="#">Card Design</a></li>
      </ul>
    </li>
    <li>
      <a href="#">
        <i class='bx bx-pie-chart-alt-2' ></i>
        <span class="link_name">Pedidos</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="#">Pedidos</a></li>
      </ul>
    </li>
    <li>
      <a href="#">
        <i class='bx bx-line-chart' ></i>
        <span class="link_name">Chart</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="#">Chart</a></li>
      </ul>
    </li>
    <li>
      <div class="iocn-link">
        <a href="#">
          <i class='bx bx-plug' ></i>
          <span class="link_name">Plugins</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
      </div>
      <ul class="sub-menu">
        <li><a class="link_name" href="#">Plugins</a></li>
        <li><a href="#">UI Face</a></li>
        <li><a href="#">Pigments</a></li>
        <li><a href="#">Box Icons</a></li>
      </ul>
    </li>
    <li>
      <a href="#">
        <i class='bx bx-compass' ></i>
        <span class="link_name">Explore</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="#">Explore</a></li>
      </ul>
    </li>
    <li>
      <a href="#">
        <i class='bx bx-history'></i>
        <span class="link_name">History</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="#">History</a></li>
      </ul>
    </li>
    <li>
      <a href="#">
        <i class='bx bx-cog' ></i>
        <span class="link_name">Setting</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="#">Setting</a></li>
      </ul>
    </li>
    <li>
  <div class="profile-details">
    <div class="profile-content">
      <img src="{{url("images/users/3eaa245d923949b6f662b8ba07b7a3b2.jpg")}}" alt="profileImg">
    </div>
    <div class="name-job">
      <div class="profile_name">Prem Shahi</div>
      <div class="job">Web Desginer</div>
    </div>
    
      <i class='bx bx-log-out'></i>
  
  </div>
</li>
</ul>
</div>
<section class="home-section">
  <div class="home-content">
    <i class='bx bx-menu' ></i>
    <span class="text">Drop Down Sidebar</span>
  </div>
</section>
<script>
let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e)=>{
 let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
 arrowParent.classList.toggle("showMenu");
  });
}
let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".bx-menu");
console.log(sidebarBtn);
sidebarBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("close");
});
</script>
<script>
  document.getElementById("logoutForm").addEventListener("submit", function(event) {
      event.preventDefault(); // Prevent the default form submission
      
      // Create a new XMLHttpRequest
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "/logout", true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      
      // Define what happens on successful data submission
      xhr.onload = function () {
          if (xhr.status >= 200 && xhr.status < 400) {
              // Redirect to login page or handle logout success
              window.location.href = '/login'; // Alterar conforme necessário
          } else {
              // Handle error
              console.error("Logout failed");
          }
      };
      
      // Define what happens in case of error
      xhr.onerror = function () {
          console.error("Request failed");
      };
      
      // Send the data
      xhr.send();
  });
</script>
@include('system.includes.footer')