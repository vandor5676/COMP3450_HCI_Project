
<body>
  <div class="bar">
    <!-- first set or items -->
    <div class="navbarItems">
      <div class="navbarItem">
        <a class="navbarLink" href="/COMP3450_HCL_Project/public/shop">SHOP</a>
      </div>
      <div class="verticalCenterContainer">
        <div class="devider"></div>
      </div>
      <div class="navbarItem">
        <a class="navbarLink" href="/COMP3450_HCL_Project/public/vendors">VENDORS</a>
      </div>
    </div>
    <!-- logo -->
    <div class="navbar__logo-container">
      <div class="logo">
      <a href="/"><img class="navbarLogo" src={{asset("/images/logo.png")}} alt="logo"></a>
      </div>
    </div>
    <!-- second set of items -->
    <div class="navbarItems">

      <div class="navbarItem">
        <a class="navbarLink" href="/COMP3450_HCL_Project/public/vendoraccount">ACCOUNT</a>
      </div>

      <div class="verticalCenterContainer">
        <div class="devider"></div>
      </div>

      <div class="navbarItem">
        <a style="color: white;">
          <a href="cart"><i class="fas fa-shopping-cart"></i></a>
        </a>
      </div>

      <div class="dropdown">
        <i class="fas fa-bars" style="color:white;"></i>
        <div class="dropdown-content">
        <a href="#">Logout</a>
        </div>
      </div>


    </div>
  </div>
</body>
<!-- </body> -->

<!-- </html> -->
