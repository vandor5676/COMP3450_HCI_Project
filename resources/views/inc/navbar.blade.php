
<body>
  <div class="mobile_bar">
    <div class="mobile_logo">
      <a href="#"><img class="navbarLogo" src={{asset("/images/navbar/mobile_logo.png")}} alt="logo"></a>
    </div>
    <div class="fa fa-bars fa-2x hamburger_menu" style="color:white;">

    </div>
    <div class="mobile_menu_items">
      <a href="/COMP3450_HCL_Project/public/home"><div class="menu_items">HOME</div></a>
      <hr class="solid">
      <a href="/COMP3450_HCL_Project/public/shop"><div class="menu_items">SHOP</div></a>
      <hr class="solid">
      <a href="/COMP3450_HCL_Project/public/vendors"><div class="menu_items">VENDORS</div></a>
      <hr class="solid">
      <a href="/COMP3450_HCL_Project/public/vendoraccount"><div class="menu_items">ACCOUNT</div></a>
      <hr class="solid">
      <a href="/COMP3450_HCL_Project/public/cart"><div class="menu_items">CART</div></a>
      <hr class="solid">
      <a href="/COMP3450_HCL_Project/public/"><div class="menu_items">LOGOUT</div></a>
      <hr class="solid">
      <div class="close">&times;</div>
    </div>
  </div>

  <div class="bar">
    <div class="navbarItem">
      <a class="navbarLink" href="/COMP3450_HCL_Project/public/home">HOME</a>
    </div>

    <div class="navbarItem">
      <a class="navbarLink" href="/COMP3450_HCL_Project/public/shop">SHOP</a>
    </div>

    <div class="navbarItem no-right-border">
      <a class="navbarLink" href="/COMP3450_HCL_Project/public/vendors">VENDORS</a>
    </div>

    <div class="navbar__logo-container">
      <div class="logo">
      <a href="#"><img class="navbarLogo" src={{asset("/images/navbar/logo.png")}} alt="logo"></a>
      </div>
    </div>

    <div class="navbarItem no-left-border">
      <a class="navbarLink" href="/COMP3450_HCL_Project/public/vendoraccount">ACCOUNT</a>
    </div>

    <div class="navbarItem">
      <a class="navbarLink" href="/COMP3450_HCL_Project/public/">LOGOUT</a>
    </div>

    <div class="navbarItem">
      <a style="color: white;">
        <a href="cart"><i class="fas fa-shopping-cart"></i></a>
      </a>
    </div>

  </div>
</body>

<script>

  var $close = $('.close');

  $close.on('click', function() {
    $('.mobile_menu_items').hide();
  });

  $('.hamburger_menu').on('click', function() {
    $('.mobile_menu_items').show();
  });
    $('.hamburger_menu_close').on('click', function() {
      $('.mobile_menu_items').hide();
    });
</script>
