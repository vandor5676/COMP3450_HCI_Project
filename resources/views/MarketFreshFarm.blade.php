@include('inc.navbar')
@extends('layouts.app')
@section('content')
<head>
  <link rel="stylesheet" href="css/naturalBeeFarm.css">
    <link rel="stylesheet" href="css/account.css">
  <!-- <link rel="stylesheet" href="css/banners.css"> -->
  <!-- <link rel="stylesheet" href="css/banners.css"> -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet"> -->

</head>

  <section class="profile leftRightMargin">
    <div class="flex-grid">
      <div class="row">
        <div class="col profile_img">
          <img alt="Avatar" class="avatar" src={{asset("/images/vendorLogos/farm_dark.png")}}>

        </div>
        <div class="col">
          <div id="vendor_shop_name">Fresh Market Farm</div>
          <div id="vendor_date">
            <p><i class="fas fa-user-circle" style="color:#426a5a;"></i> &nbsp;Vendor since 11/25/2020</p>
          </div>
          <!-- section banner -->
          <div class="sectionBanner">
            <p class="sectionBannerText" id="location">LOCATION</p>
            <div class="sectionBanner" id="greyBar"></div>
            <div class="sectionBanner" id="yellowBar"></div>
            <div class="sectionBanner" id="orangeBar"></div>
            <div class="sectionBanner" id="redBar"></div>
            <div class="sectionBanner" id="greenBar"></div>
          </div>
          <!-- end section banner -->
          <div id="vendor_address">
            <p><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;1234 Okanagan Way, Kamloops BC V2B1F8</p>
          </div>
          <!-- section banner -->
          <div class="sectionBanner">
            <p class="sectionBannerText">ABOUT</p>
            <div class="sectionBanner" id="greyBar"></div>
            <div class="sectionBanner" id="yellowBar"></div>
            <div class="sectionBanner" id="orangeBar"></div>
            <div class="sectionBanner" id="redBar"></div>
            <div class="sectionBanner" id="greenBar"></div>
          </div>
          <!-- end section banner -->
          <div id="vendor_contact">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
      <div>
        <img id="product_banner" src="../public/images/banners/products_banner.png">
        <img id="product_900_banner" src="../public/images/banners/products_900_banner.png">
        <img id="product_700_banner" src="../public/images/banners/products_700_banner.png">
      </div>
      <div  class="flex-grid current_products">
          <div class="preview_img_container"><img class="product_img" src="../public/images/vendorProducts/strawberrys.jpg" alt=""><span class="preview_img_text">Strawberries</span></div>
          <div class="preview_img_container"><img class="product_img" src="../public/images/vendorProducts/grapes.jpg" alt=""><span class="preview_img_text">Grapes</span></div>
          <div class="preview_img_container"><img class="product_img" src="../public/images/vendorProducts/carrots.jpg" alt=""><span class="preview_img_text">Carrots</span></div>
          <div id="insert" class="preview_img_container"><button id="add_product"><img id="product_plus_btn" src="../public/images/add_button.png" alt=""><span class="preview_img_text">ADD NEW</span></button></div>
      </div>

</section>
<script>

  var $close = $('.close');


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
   "<div style='text-align:center; margin: 1%; max-width:20%;'><img class='product_img' src='../public/images/vendorProducts/cherrys.jpg' alt=''><span style='font-size: 20px; color:#464646;'>Cherries</span></div>");
 }

$('#update_order').on('click', (function() {
  $(this).closest('.accordion-wrap').find('.order_status_text').text('COMPLETE');
  $(this).closest('.accordion-wrap').find('.status_badge').css('background-color', ' #426a5a')
  $(this).hide();
}));

</script>

  @endsection
