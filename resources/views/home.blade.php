@include('inc.navbar')
@extends('layouts.app')
@section('content')

<head>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/banners.css">
</head>

<header>
<div class="main-header" ><img src={{asset("/images/headerImages/main_header.png")}}></div>
<div class="banner" ><img src={{asset("/images/banners/banner.png")}}></div>
<div class="mobile_banner"><img src={{asset("/images/banners/mobile_banner.png")}}></div>
</header>

<main class="container">

  <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="card">
        <div class="card-img">
          <img class="card_img" src={{asset("/images/homeCarousel/cheese.png")}}>
          <img class="card_img_mobile" src={{asset("/images/homeCarousel/cheese_mobile.png")}}>
        </div>
        <div class="vendor-card" style="background-color:#9e2a2b">
          <div class="card-body">
            <p class="card-title-featured">FEATURED<br>VENDORS</p>
            <p class="card-text featured-desc"></p>
              <a id="featured_btn" href="#">VIEW VENDORS</a>
          </div>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="card">
        <div class="card-img">
          <img class="card_img" src={{asset("/images/homeCarousel/honey.png")}}>
          <img class="card_img_mobile" src={{asset("/images/homeCarousel/honey_mobile.png")}}>
        </div>
        <div class="vendor-card" style="background-color:#f7b538">
          <div class="card-body">
            <div class="vendor-logo">
              <img src={{asset("/images/vendorLogos/bee_dark.png")}}>
            </div>
            <p  id="vendor1-title" class="card-title-featured">Natural Bee Farm</p>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              <a id="vendor1-btn" href="#">VIEW SHOP</a>
          </div>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="card">
        <div class="card-img">
          <img class="card_img" src={{asset("/images/homeCarousel/veggies.png")}}>
          <img class="card_img_mobile" src={{asset("/images/homeCarousel/veggies_mobile.png")}}>
        </div>
        <div class="vendor-card" style="background-color: #426a5a">
          <div class="card-body">
            <div class="vendor-logo">
              <img src={{asset("/images/vendorLogos/farm.png")}}>
            </div>
            <p  id="vendor2-title" class="card-title-featured">MARKET FRESH FARM</p>
            <p class="card-text" style="color:white;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
              <a id="vendor2-btn" href="#">VIEW SHOP</a>
          </div>
        </div>
      </div>
    </div>

    <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
      <i id="next-3x" class="fas fa-3x fa-arrow-circle-left"></i>
      <i id="next-2x" class="fas fa-2x fa-arrow-circle-left"></i>
      <i id="next-1x" class="fas fa-arrow-circle-left"></i>
       <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
      <i id="next-3x" class="fas fa-3x fa-arrow-circle-right"></i>
      <i id="next-2x" class="fas fa-2x fa-arrow-circle-right"></i>
      <i id="next-1x" class="fas fa-arrow-circle-right"></i>
       <span class="sr-only">Next</span>
    </a>

  </div>
</div>



  <div class="category">
      <img id="cat_banner" src={{asset("/images/banners/category_banner.png")}}>
      <img id="cat_900_banner" src={{asset("/images/banners/category_900_banner.png")}}>
      <img id="cat_700_banner" src={{asset("/images/banners/category_700_banner.png")}}>
  </div>

  <div class="cat_buttons">
        <a id="produce_btn" href="/shop" class="category-button">PRODUCE</a>
        <a id="meat_btn" href="/shop" class="category-button">MEAT</a>
        <a id="dairy_btn" href="/shop" class="category-button">DAIRY</a>
        <a id="honey_btn" href="/shop" class="category-button">HONEY</a>
        <a id="bakery_btn" href="/shop" class="category-button">BAKERY</a>
        <a id="viewall_btn" href="/shop" class="category-button">VIEW ALL</a>
    </div>

</main>
@endsection
