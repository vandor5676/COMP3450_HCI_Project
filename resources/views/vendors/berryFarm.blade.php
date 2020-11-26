@extends('layouts.app')
@section('content')
<header>
  <link rel="stylesheet" href="css/naturalBeeFarm.css">
  <!-- <link rel="stylesheet" href="css/banners.css"> -->
  <!-- <link rel="stylesheet" href="css/banners.css"> -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet"> -->



  <section class="profile">
    <div class="flex-grid">
      <div class="row">
        <div class="col profile_img">
          <img alt="Avatar" class="avatar" src={{asset("/images/berryBlack.png")}}>

        </div>
        <div class="col">
          <div id="vendor_shop_name">Berry Farm</div>
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
            <p>We aim to provide our customers with the highest quality berry products packaged on our farm in the Okanagan Valley and sourced from passionate local berrypickers. We aim to educate and inspire customers with the amazing world of the berry, supporting berry health and awareness around the world.</p>

          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="products">
    <!-- big section banner -->
    <div class="bigSectionBanner">
      <p class="bigSectionBannerText">Products</p>
      <div class="bigSectionBanner" id="greyBar"></div>
      <div class="bigSectionBanner bannerColors" id="yellowBar"></div>
      <div class="bigSectionBanner bannerColors" id="orangeBar"></div>
      <div class="bigSectionBanner bannerColors" id="redBar"></div>
      <div class="bigSectionBanner bannerColors" id="greenBar"></div>
    </div>
    <!-- end big section banner -->
    <div class="flex-grid current_products">
      <img class="product_img" src={{asset("images/vendorProduce/Blackberries.jpg")}} alt="">
      <img class="product_img" src={{asset("/images/vendorProduce/cherrys.jpg")}} alt="">
      <img class="product_img" src={{asset("/images/vendorProduce/grapes.jpg")}} alt="">
      <img class="product_img" src={{asset("/images/vendorProduce/strawberrys.jpg")}} alt="">
      <img class="product_img" src={{asset("/images/honey_stick.jpg")}} alt="">
      <img class="product_img" src={{asset("/images/lip_product.jpg")}} alt="">
      <img class="product_img" src={{asset("/images/foodwrap.jpg")}} alt="">
      <img class="product_img" src={{asset("/images/beeswax.png")}} alt="">
    </div>


  </section>


  @endsection