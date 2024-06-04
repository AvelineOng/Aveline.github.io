<!DOCTYPE html>
<html>
<head>
  <title>User Profile - Atlantic Fishing</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-food.css">
  <style>
    .w3-sidebar a { font-family: "Roboto", sans-serif }
    body,h1,h2,h3,h4,h5,h6,.w3-wide { font-family: "Open Sans", sans-serif; }
    .profile-card {
      background-color: #f2f2f2;
      padding: 30px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 400px;
      margin: 0 auto;
      text-align: center;
    }
    .profile-image {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      margin: 0 auto 20px;
    }
    .profile-info {
      line-height: 1.8;
    }
    .profile-info span {
      font-weight: bold;
    }
  </style>
</head>
<body class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-food-egg w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <a href="home.html"><img src="gambar/logo.web.png" alt="Logo" style="width: 200px; height: auto;"></a>  
  </div>
  <div class="w3-padding-16 w3-large w3-text-grey" style="font-weight:bold;">
    <a href="reel.html" class="w3-bar-item w3-button">Reel</a>
    <a href="rod.html" class="w3-bar-item w3-button">Rod</a>
    <a href="bait.html" class="w3-bar-item w3-button">Bait</a>
    <a href="float.html" class="w3-bar-item w3-button">Float</a>
    <a href="hook.html" class="w3-bar-item w3-button">Hook</a>
    <a href="line.html" class="w3-bar-item w3-button">Line</a>
  </div>
  <hr>
  <div class="w3-padding-16 w3-large w3-text-grey" style="font-weight:bold;">
    <a href="contact.html" class="w3-bar-item w3-button">Contact</a>
    <a href="address.html" class="w3-bar-item w3-button">Address</a>
    <a href="aboutus.html" class="w3-bar-item w3-button">About Us</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">LOGO</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">
  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>

 <!-- Top header -->
<div class="w3-bar-item w3-right">
  <!-- Cart icon -->
  <a href="#" class="w3-bar-item w3-button w3-padding-24"><i class="fa fa-shopping-cart"></i></a>
  <!-- Search icon -->
  <a href="#" class="w3-bar-item w3-button w3-padding-24"><i class="fa fa-search"></i></a>
  <!-- Dropdown content for user profile -->
  <div class="w3-dropdown-hover">
    <button class="w3-button">
      <img src="gambar/profile.icon.png" alt="Profile icon" style="width: 20px; height: auto;">
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
      <div class="w3-bar-item w3-text">Logged in as <span id="username"><?php echo isset($_GET['userid']) ? $_GET['userid'] : ''; ?></span></div>
      <a href="home.html" class="w3-bar-item w3-button">Logout</a>
    </div>
  </div>
</div>



  <!-- Profile Content -->
  <div class="w3-container w3-padding-32">
    <h1>User Profile</h1>

    <div class="profile-card">
      <img src="gambar/profile.icon.png" alt="Profile icon" class="profile-image">
      <div class="profile-info">
      <p>User ID: <?php echo $_SESSION['userid']; ?></p>
      <p>Username: <?php echo $_SESSION['username']; ?></p>
      <p>Email: <?php echo $_SESSION['email']; ?></p>
      <p>Gender: <?php echo $_SESSION['gender']; ?></p>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="w3-padding-32 w3-light-grey w3-small w3-center" id="footer" style="font-size: 14px;">
    <!-- Footer content -->
  </footer>  

  <div class="w3-black w3-center w3-padding-16" style="font-size: 12px;">© 2024 by Atlantic Fishing</div>

  <!-- End page content -->
</div>

<!-- Newsletter Modal -->
<div id="newsletter" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
      <h2 class="w3-wide">NEWSLETTER</h2>
      <p>Join our mailing list to receive updates on new arrivals and special offers.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('newsletter').style.display='none'">Subscribe</button>
    </div>
  </div>
</div>

<script>
// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Fetch user data and update the DOM
window.onload = function() {
  fetch('get_username.php')
    .then(response => response.json())
    .then(data => {
      if (data.error) {
        console.error(data.error);
        return;
      }
      document.getElementById('username').textContent = data.username;
      document.getElementById('userId').textContent = data.userid;
      document.getElementById('userName').textContent = data.username;
      document.getElementById('email').textContent = data.email;
      document.getElementById('gender').textContent = data.gender;
    })
    .catch(error => console.error('Error fetching user data:', error));
};
</script>
</body>
</html>
