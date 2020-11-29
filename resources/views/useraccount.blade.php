@include('inc.navbar')
@extends('layouts.app')
@section('content')

<head>
    <link rel="stylesheet" href="css/account.css">
</head>

<header>
<div class="main-header" style="position: relative;"><img src={{asset("/images/headerImages/vendor_header.jpg")}}>
  <div id="header_text" style="position: absolute;">
    <p><b>WELCOME BACK</b></p>
   </div>
 </div>
</header>

<section class ="profile">
  <div class="flex-grid">
    <div class="row profile_info">
    <div class="col profile_img">
      <img class="avatar-user" src={{asset("/images/vendorLogos/user.png")}}>
      <div class="profile-btn-container">
        <input type="file" id="upload" hidden/>
        <label id="upload_label" for="upload" class="btn btn-primary">UPLOAD IMAGE</label>
      <a id="update_profile" class="btn btn-primary">UPDATE PROFILE</a>
    </div>
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
        <div id="vendor_shop_name">Marty Eggplant</div>
        <div id="vendor_date"><p><i class="fas fa-user-circle" style="color:#426a5a;"></i> &nbsp;User since 10/19/2020</p></div>
        <div><img src={{asset("/images/banners/location_banner.png")}}></div>
        <div id="vendor_shop_address">
          <p><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;<span id="address_val">574 Fortune Dr, Kamloops BC V2B3E6</span></p>
        </div>
        <div><img src={{asset("/images/banners/contact_banner.png")}}></div>
        <div id="vendor_shop_email">
          <p><i class="fas fa-phone"></i> &nbsp;&nbsp;<span id="phone_val">250-852-1567</p></span>
        </div>
        <div id="vendor_shop_phone">
          <p><i class="fas fa-envelope"></i> &nbsp;&nbsp;<span id="email_val">m_eggplants.gmail.com</p></span>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<section class="orders">
      <div>
        <img id="orders_banner" src={{asset("/images/banners/orders_banner.png")}}>
        <img id="orders_900_banner" src={{asset("/images/banners/orders_900_banner.png")}}>
        <img id="orders_700_banner" src={{asset("/images/banners/orders_700_banner.png")}}>
      </div>
<div class="orders-wrap">
  <div class="accordion-wrap">
      <button class="accordion">Order #: 124<i class="fas fa fa-plus plus"></i><span class="status_badge">PROCESSING</span></button>
      <div class="panel">
        <p class="order_vendor"><b>Vendor: </b>NATURAL BEE FARM</p>
        <p class="order_items" id="customer_name"><b>CUSTOMER: </b>Marty Eggplant</p>
        <p class="order_items" id="shipto_address"><b>SHIP TO: </b>
          <p>Marty Eggplant<p>
            <p>574 Fortune Dr</p>
            <p>Kamloops, BC V2B3E6</p>
        </p>
        <hr class="solid">
        <p class="order_items" id="order_id"><b>ORDER #:</b> 121</p>
        <hr class="solid">
        <p class="order_desc"><b>ORDER DESCRIPTION</b></p>
        <div class="order-img-container">
            <div class="order_img"><img class="product_img" src={{asset("/images/vendorProducts/honey_stick.jpg")}} alt=""><span class="order_img_text">Dippers</span></div>
          <div class="order_img">  <img class="product_img" src={{asset("/images/vendorProducts/lip_product.jpg")}} alt=""><span class="order_img_text">Beeswax Lip Balm</span></div>
        </div>

        <hr class="solid">
        <p class="order_items" id="order_total"><b>TOTAL:</b> $58.47</p>
        <hr class="solid">
        <p class="order_items" id="order_status"><b>STATUS:</b> <span class="order_status_text">PROCESSING</span></p>
      </div>
    </div>
    <div class="accordion-wrap">
      <button class="accordion">Order #: 122<i class="fas fa fa-plus plus"></i><span class="status_badge_shipped">COMPLETE</span></button>
      <div class="panel">
        <p class="order_vendor"><b>Vendor: </b>FAR FARM MEATS</p>
        <p class="order_items" id="customer_name"><b>CUSTOMER: </b>Marty Eggplant</p>
        <p class="order_items" id="shipto_address"><b>SHIP TO: </b>
          <p>Marty Eggplant<p>
            <p>574 Fortune Dr</p>
            <p>Kamloops, BC V2B3E6</p>
        </p>
        <hr class="solid">
        <p class="order_items" id="order_id"><b>ORDER #:</b> 123</p>
        <hr class="solid">
        <p class="order_desc"><b>ORDER DESCRIPTION</b></p>
            <div class="order-img-container">
        <div class="order_img"><img class="product_img" src={{asset("/images/vendorProducts/steak.jpg")}} alt=""><span class="order_img_text">Steak</span></div>
        <div class="order_img"><img class="product_img" src={{asset("/images/vendorProducts/sausage.jpg")}} alt=""><span class="order_img_text">Sausage</span></div>
      </div>
        <hr class="solid">
        <p class="order_items" id="order_total"><b>TOTAL:</b>$15.24</p>
        <hr class="solid">
        <p class="order_items" id="order_status"><b>STATUS:</b> COMPLETE</p>
      </div>
      </div>
    <div class="accordion-wrap">
      <button class="accordion">Order #: 121<i class="fas fa fa-plus plus"></i><span class="status_badge_shipped">COMPLETE</span></button>
      <div class="panel">
        <p class="order_vendor"><b>Vendor: </b>MARKET FRESH FARM</p>
        <hr class="solid">
        <p class="order_items" id="customer_name"><b>CUSTOMER: </b>Marty Eggplant</p>
        <p class="order_items" id="shipto_address"><b>SHIP TO: </b>
          <p>Marty Eggplant<p>
            <p>574 Fortune Dr</p>
            <p>Kamloops, BC V2B3E6</p>
        </p>
        <hr class="solid">
        <p class="order_items" id="order_id"><b>ORDER #:</b> 124</p>
        <hr class="solid">
        <p class="order_desc"><b>ORDER DESCRIPTION</b></p>
            <div class="order-img-container">
      <div class="order_img"><img class="product_img" src={{asset("/images/vendorProducts/carrots.jpg")}} alt=""><span class="order_img_text">Carrots</span></div>
      <div class="order_img"><img class="product_img" src={{asset("/images/vendorProducts/grapes.jpg")}} alt=""><span class="order_img_text">Grapes</span></div>
      </div>
        <hr class="solid">
        <p class="order_items" id="order_total"><b>TOTAL:</b> $34.58</p>
        <hr class="solid">
        <p class="order_items" id="order_status"><b>STATUS:</b> COMPLETE</p>
      </div>
    </div>
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

$('#update_order').on('click', (function() {
  $(this).closest('.accordion-wrap').find('.order_status_text').text('COMPLETE');
  $(this).closest('.accordion-wrap').find('.status_badge').css('background-color', ' #426a5a')
  $(this).hide();
}));

</script>

@endsection
