@extends('layouts.app')
@section('content')

<head>
    <link rel="stylesheet" href="css/account.css">
</head>

<header>
<div class="main-header" style="position: relative;"><img src={{asset("../public/images/vendor_header.jpg")}}>
  <div id="header_text" style="position: absolute;">
    <p><b>WELCOME BACK</b></p>
   </div>
 </div>
</header>

<section class ="profile">
  <div class="flex-grid">
    <div class="row">
    <div class="col profile_img">
      <img alt="Avatar" class="avatar" src="../public/images/bee_dark.png">
      <span class="profile-btn-container">
        <input type="file" id="upload" hidden/>
        <label id="upload_label" for="upload" class="btn btn-primary">UPLOAD IMAGE</label>
      <a id="update_profile" class="btn btn-primary">UPDATE PROFILE</a>
    </span>
    </div>
    <div id="profile_info" class="col">
      <div id="profile_info_edit">
        <h2>UPDATE YOUR INFO</h2>
        <input id="vendor_name" type="text" placeholder="name">
        <input id="vendor_address" type="text" placeholder="address">
        <input id="vendor_phone" type="tel" placeholder="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}">
        <input id="vendor_email" type="email" placeholder="email">
        <br>
        <button id="save_profile"  class="btn btn-primary" type="button">SAVE</button>
      </div>

      <div id="profile_info_view">
        <div id="vendor_shop_name">Natural Bee Farm</div>
        <div id="vendor_date"><p><i class="fas fa-user-circle" style="color:#426a5a;"></i> &nbsp;Vendor since 10/19/2020</p></div>
        <div><img src="../public/images/location_banner.png"></div>
        <div id="vendor_shop_address">
          <p><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;<span id="address_val">1234 Okanagan Way, Kamloops BC V2B1F8</span></p>
        </div>
        <div><img src="../public/images/contact_banner.png"></div>
        <div id="vendor_shop_email">
          <p><i class="fas fa-phone"></i> &nbsp;&nbsp;<span id="phone_val">250-852-1567</p></span>
        </div>
        <div id="vendor_shop_phone">
          <p><i class="fas fa-envelope"></i> &nbsp;&nbsp;<span id="email_val">info@naturalbeefarms.ca</p></span>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

  <!--Creates the popup body-->
  <div class="popup-overlay">
    <!--Creates the popup content-->
    <div class="popup-content">
      <span class="close">&times;</span>
      <div id="add_product_form">
          <h2>ADD A NEW PRODUCT</h2>
          <input id="new_product_name" type="text" placeholder="product name">
          <input id="new_product_desc" type="text" placeholder="description">
          <input id="new_product_stock" type="number" placeholder="quantity">
          <input id="new_product_unit" type="text" placeholder="unit">
          <input id="new_product_cost" type="number" placeholder="price"><br>

          <input type="checkbox" id="organic_check" value="Organic">
          <label for="organic_check"> Organic</label><br>

          <input type="file" id="upload"/hidden>
          <label id="upload_product_img" for="upload" class="btn btn-primary">UPLOAD IMAGES</label>

          <br>
          <button id="save_new_product"  class="btn btn-primary" type="button" onclick="addCode()">SAVE PRODUCT</button>
        </div>
      </div>
  </div>
<section class="products">
      <div><img id="current_banner" src="../public/images/current_banner.jpg"></div>
      <div  class="flex-grid current_products">
          <div class="preview_img_container"><img class="product_img" src="../public/images/honey_jar.png" alt=""><span class="preview_img_text">Premium Honey</span></div>
          <div class="preview_img_container"><img class="product_img" src="../public/images/honey-treats.png" alt=""><span class="preview_img_text">Flavored Honey Sticks</span></div>
          <div class="preview_img_container"><img class="product_img" src="../public/images/candle.jpg" alt=""><span class="preview_img_text">Beeswax Candles</span></div>
          <div class="preview_img_container"><img class="product_img" src="../public/images/honey_comb.jpg" alt=""><span class="preview_img_text">Honey Comb</span></div>
          <div class="preview_img_container"><img class="product_img" src="../public/images/honey_stick.jpg" alt=""><span class="preview_img_text">Dippers</span></div>
          <div class="preview_img_container"><img class="product_img" src="../public/images/lip_product.jpg" alt=""><span class="preview_img_text">Beeswax Lip Balm</span></div>
          <div class="preview_img_container"><img class="product_img" src="../public/images/foodwrap.jpg" alt=""><span class="preview_img_text">Beeswax Cloth</span></div>
          <div id="insert" class="preview_img_container"><button id="add_product"><img src="../public/images/add_button.png" alt=""><span class="preview_img_text">ADD NEW</span></button></div>
      </div>

      <span class="center">

        <button id="view_store" class="btn btn-primary">VIEW SHOP</button>
      </span>
</section>

<section class="orders">
      <div><img id="orders_banner" src="../public/images/orders_banner.jpg"></div>
<div class="orders-wrap">
  <div class="accordion-wrap">
      <button class="accordion">Order #: 124<i class="fas fa fa-plus plus"></i></button>
      <div class="panel">
        <p class="order_items" id="customer_name"><b>CUSTOMER: </b>Anna Hive</p>
        <p class="order_items" id="shipto_address"><b>SHIP TO: </b>
          <p>Anna Hive<p>
            <p>856 Windfield Crescent</p>
            <p>Kamloops, BC V2E1A1</p>
        </p>
        <p class="order_items" id="order_id"><b>ORDER #:</b> 121</p>
        <p class="order_items" id="order_total"><b>TOTAL:</b> $58.47</p>
        <p class="order_items" id="order_status"><b>STATUS:</b> PROCESSING</p>
        <a id="update_order" href="#" class="btn btn-primary">UPDATE ORDER</a>
      </div>
    </div>
  <div class="accordion-wrap">
      <button class="accordion">Order #: 123<i class="fas fa fa-plus plus"></i></button>
      <div class="panel">
        <p class="order_items" id="customer_name"><b>CUSTOMER: </b>Kimberly Bovine</p>
        <p class="order_items" id="shipto_address"><b>SHIP TO: </b>
          <p>Henry Fields<p>
            <p>365 Springhill Dr</p>
            <p>Kamloops, BC V2B1G2</p>
        </p>
        <p class="order_items" id="order_id"><b>ORDER #:</b> 122</p>
        <p class="order_items" id="order_total"><b>TOTAL:</b> $28.11</p>
        <p class="order_items" id="order_status"><b>STATUS:</b> SHIPPED</p>
        <a id="update_order" href="#" class="btn btn-primary">UPDATE ORDER</a>
      </div>
      </div>
    <div class="accordion-wrap">
      <button class="accordion">Order #: 122<i class="fas fa fa-plus plus"></i></button>
      <div class="panel">
        <p class="order_items" id="customer_name"><b>CUSTOMER: </b>Quinton Beets</p>
        <p class="order_items" id="shipto_address"><b>SHIP TO: </b>
          <p>Quinton Beets<p>
            <p>856 Windfield Crescent</p>
            <p>Kamloops, BC V2E1A1</p>
        </p>
        <p class="order_items" id="order_id"><b>ORDER #:</b> 123</p>
        <p class="order_items" id="order_total"><b>TOTAL:</b>$15.24</p>
    <p class="order_items" id="order_status"><b>STATUS:</b> SHIPPED</p>
        <a id="update_order" href="#" class="btn btn-primary">UPDATE ORDER</a>
      </div>
      </div>
    <div class="accordion-wrap">
      <button class="accordion">Order #: 121<i class="fas fa fa-plus plus"></i></button>
      <div class="panel">
        <p class="order_items" id="customer_name"><b>CUSTOMER: </b>Greg Rancher</p>
        <p class="order_items" id="shipto_address"><b>SHIP TO: </b>
          <p>Greg Rancher<p>
            <p>574 Fortune Dr</p>
            <p>Kamloops, BC V2B3E6</p>
        </p>
        <p class="order_items" id="order_id"><b>ORDER #:</b> 124</p>
        <p class="order_items" id="order_total"><b>TOTAL:</b> $34.58</p>
    <p class="order_items" id="order_status"><b>STATUS:</b> SHIPPED</p>
        <a id="update_order" href="#" class="btn btn-primary">UPDATE ORDER</a>
      </div>
    </div>
  </div>

  <div class="center">
    <a id="viewall_orders_btn" href="#" class="btn btn-primary">VIEW ALL</a>
  </div>
</section>

<script>
  var $updateProfileButton = $('#update_profile');
  var $saveProfileButton = $('#save_profile');

  var $editProfileContainer = $('#profile_info_edit');
  var $viewProfileContainer = $('#profile_info_view');
  var $close = $('.close');

  $updateProfileButton.on('click', function() {
    switchToEditProfile();
  });

  $saveProfileButton.on('click', function() {
    switchToViewProfile();
  });

  $close.on('click', function() {
    $('.popup-overlay').hide();
  });

  function switchToEditProfile() {

    $editProfileContainer.show();
    $viewProfileContainer.hide();
  }

  function switchToViewProfile() {

    var name = $('#vendor_name').val();
    var address = $('#vendor_address').val();
    var phone = $('#vendor_phone').val();
    var email = $('#vendor_email').val();

    $('#vendor_shop_name').text(name);
    $('#address_val').text(address);
    $('#phone_val').text(phone);
    $('#email_val').text(email);

    $editProfileContainer.hide();
    $viewProfileContainer.show();
  }



    //appends an "active" class to .popup and .popup-content when the "Open" button is clicked
$("#add_product").on("click", function() {
  $(".popup-overlay, .popup-content").addClass("active");
  $('.popup-overlay').show();
});

//removes the "active" class to .popup and .popup-content when the "Close" button is clicked
$("#save_new_product").on("click", function() {

  $(".popup-overlay, .popup-content").removeClass("active");
});

function addCode() {
   document.getElementById("insert").insertAdjacentHTML("beforebegin",
   "<div style='text-align:center; margin: 1%; max-width:20%;'><img class='product_img' src='../public/images/honey_soap.png' alt=''><span style='font-size: 20px; color:#464646;'>Honey Oatmeal Soap</span></div>");
 }

</script>

@endsection
