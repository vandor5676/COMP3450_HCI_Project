@extends('layouts.app')
@section('content')
<header>
<div class="main-header" ><img src={{asset("/images/main_header.png")}}></div>
<div class="banner" ><img src={{asset("/images/banner.png")}}></div>
</header>

<section class ="profile">
  <div class="flex-grid">
    <div class="row">
    <div class="col profile_img">
      <img alt="Avatar" class="avatar" src={{asset("/images/bee_dark.png")}}>
      
    </div>
    <div class="col">
      <div id="vendor_shop_name">Natural Bee Farm</div>
      <div id="vendor_date"><p><i class="fas fa-user-circle" style="color:#426a5a;"></i> &nbsp;Vendor since 10/19/2020</p></div>
      <div><img src={{asset("/images/location_banner.png")}}></div>
      <div id="vendor_address">
        <p><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;1234 Okanagan Way, Kamloops BC V2B1F8</p>
      </div>
      <div><img src={{asset("/images/contact_banner.png")}}></div>
      <div id="vendor_contact">
        <p><i class="fas fa-phone"></i> &nbsp;&nbsp;250-852-1567</p>
        <p><i class="fas fa-envelope"></i> &nbsp;&nbsp;info@naturalbeefarms.ca</p>
      </div>

    </div>
  </div>
</div>
</section>

<section class="products">
      <div><img id="current_banner" src={{asset("/images/current_banner.jpg")}}></div>
      <div class="flex-grid current_products">
          <img class="product_img" src={{asset("images/honey_jar.png")}} alt="">
          <img class="product_img" src={{asset("/images/honey-treats.png")}} alt="">
          <img class="product_img" src={{asset("/images/candle.jpg")}} alt="">
          <img class="product_img" src={{asset("/images/honey_comb.jpg")}} alt="">
          <img class="product_img" src={{asset("/images/honey_stick.jpg")}} alt="">
          <img class="product_img" src={{asset("/images/lip_product.jpg")}} alt="">
          <img class="product_img" src={{asset("/images/foodwrap.jpg")}} alt="">
          <img class="product_img" src={{asset("/images/beeswax.png")}} alt="">
      </div>

      
</section>


@endsection