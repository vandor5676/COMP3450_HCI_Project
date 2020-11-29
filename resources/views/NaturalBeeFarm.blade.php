@include('inc.navbar')
@extends('layouts.app')
@section('content')
<header>
  <link rel="stylesheet" href="css/naturalBeeFarm.css">
    <link rel="stylesheet" href="css/account.css">
  <link rel="stylesheet" href="css/productModal.css">
  <!-- <link rel="stylesheet" href="css/banners.css"> -->
  <!-- <link rel="stylesheet" href="css/banners.css"> -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet"> -->



  <section class="profile">
    <div class="flex-grid">
      <div class="row">
        <div class="col profile_img">
          <img alt="Avatar" class="avatar" src={{asset("/images/vendorLogos/bee_dark.png")}}>

        </div>
        <div class="col">
          <div id="vendor_shop_name">Natural Bee Farm</div>
          <div id="vendor_date">
            <p><i class="fas fa-user-circle" style="color:#426a5a;"></i> &nbsp;Vendor since 10/19/2020</p>
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
            <p>We aim to provide our customers with the highest quality honeybee products packaged on our farm in the Okanagan Valley and sourced from passionate local beekeepers. We aim to educate and inspire customers with the amazing world of the honeybee, supporting honeybee health and awareness around the world.</p>

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
          <div class="preview_img_container"><img class="product_img" src="../public/images/vendorProducts/honey_jar.png" alt=""><span class="preview_img_text">Pasturized Honey</span></div>
          <div class="preview_img_container"><img class="product_img" src="../public/images/vendorProducts/honey_comb.jpg" alt=""><span class="preview_img_text">Honey Treats</span></div>
          <div class="preview_img_container"><img class="product_img" src="../public/images/vendorProducts/honey_stick.jpg" alt=""><span class="preview_img_text">Honey Dippers</span></div>
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
     "<div style='text-align:center; margin: 1%; max-width:20%;'><img class='product_img' src='../public/images/vendorProducts/honey_soap.png' alt=''><span style='font-size: 20px; color:#464646;'>Honey Oatmeal Soap</span></div>");
   }

  $('#update_order').on('click', (function() {
    $(this).closest('.accordion-wrap').find('.order_status_text').text('COMPLETE');
    $(this).closest('.accordion-wrap').find('.status_badge').css('background-color', ' #426a5a')
    $(this).hide();
  }));

  </script>


  @endsection
