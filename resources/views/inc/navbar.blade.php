<!-- This is our main navbar -->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <script src="https://kit.fontawesome.com/f85ff1d3ed.js" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <link rel="stylesheet" href="css/navBar.css">
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=BenchNine:wght@300;700&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/script.js"></script>
</head>

<body>
  <div class="bar">
    <!-- first set or items -->
    <div class="navbarItems">
      <div class="navbarItem">
        <a class="navbarLink" href="shop">SHOP</a>
      </div>
      <div class="verticalCenterContainer">
        <div class="devider"></div>
      </div>
      <div class="navbarItem">
        <a class="navbarLink" href="vendors">VENDORS</a>
      </div>
    </div>
    <!-- logo -->
    <div class="navbar__logo-container">
      <div class="logo">
        <img class="navbarLogo" src={{asset("/images/logo.png")}} alt="logo">
      </div>
    </div>
    <!-- second set of items -->
    <div class="navbarItems">

      <div class="navbarItem">
        <a class="navbarLink" href="account">ACCOUNT</a>
      </div>

      <div class="verticalCenterContainer">
        <div class="devider"></div>
      </div>

      <div class="navbarItem">
        <a style="color: white;">
          <i class="fas fa-shopping-cart"></i>
        </a>
      </div>
    </div>
  </div>


<!-- </body> -->

<!-- </html> -->