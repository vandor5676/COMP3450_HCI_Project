@include('inc.navbar')
@extends('layouts.app')
@section('content')
<head>
    <link rel="stylesheet" href="css/vendors.css">
</head>

<header>
<div class="main-header" style="position: relative;"><img  src={{asset("images/headerImages/vendor_banner.jpg")}}>
  <div id="header_text" style="position: absolute;">
    <p><b>VENDORS</b></p>
   </div>
 </div>
</header>

    <div class="content">
          <div class="dropdown">
            <button class="dropbtn">FILTER&nbsp;&nbsp;<i class="fas fa-chevron-down"></i></button>
            <div class="dropdown-content">
            <a href="">Newest</a>
            <a href="">Certified Organic</a>
            <a href="">Ascending</a>
            <a href="">Descending</a>
            </div>
        </div>
    </div>

  <div class="cards">
    <div class="cards__item">
      <div class="card">
        <div class="card__image">
          <img class="vendor_logo" src={{asset("/images/vendorLogos/bee_dark.png")}} alt="Product Image">
        </div>
        <div class="card__content" style="background-color: #f7b538;">
          <div class="card__title">Natural Bee Farm</div>
          <p class="card__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <a class="view_shop_btn" href="/NaturalBeeFarm">VIEW SHOP</a>
          <p class="featured_title">Featured Products</p>
          <div class="product_preview_container">
            <div class="product_img_preview">
            <img  class="bee_img" src="images/vendorProducts/honey_jar.png" alt="">
          </div>
          <div class="product_img_preview">
            <img  class="bee_img" src="images/vendorProducts/honey_comb.jpg" alt="">
          </div>
            <div class="product_img_preview">
            <img class="bee_img" src="images/vendorProducts/candle.jpg" alt="">
          </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cards__item">
      <div class="card">
        <div class="card__image">
          <img class="vendor_logo" src={{asset("/images/vendorLogos/farm_dark.png")}} alt="Product Image">
        </div>
        <div class="card__content" style="background-color: #426a5a;">
          <div class="card__title">Market Fresh Farm</div>
          <p class="card__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <a class="view_shop_btn" href="/MarketFreshFarm">VIEW SHOP</a>
          <p class="featured_title">Featured Products</p>
          <div class="product_preview_container">
            <div class="product_img_preview">
            <img  class="farm_img" src="images/vendorProducts/carrots.jpg" alt="">
          </div>
          <div class="product_img_preview">
            <img  class="farm_img" src="images/vendorProducts/grapes.jpg" alt="">
          </div>
            <div class="product_img_preview">
            <img class="farm_img" src="images/vendorProducts/strawberrys.jpg" alt="">
          </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cards__item">
      <div class="card">
        <div class="card__image">
          <img class="vendor_logo" src={{asset("/images/vendorLogos/meatfarm.png")}} alt="Product Image">
        </div>
        <div class="card__content" style="background-color: #9e2a2b;">
          <div class="card__title">Far Farm Meats</div>
          <p class="card__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <a class="view_shop_btn" href="/FarFarmMeats">VIEW SHOP</a>
          <p class="featured_title">Featured Products</p>
          <div class="product_preview_container">
            <div class="product_img_preview">
            <img  class="meat_img" src="images/vendorProducts/steak.jpg" alt="">
          </div>
          <div class="product_img_preview">
            <img  class="meat_img" src="images/vendorProducts/ground_meat.jpg" alt="">
          </div>
            <div class="product_img_preview">
            <img class="meat_img" src="images/vendorProducts/sausage.jpg" alt="">
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
