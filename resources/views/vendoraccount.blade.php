@extends('layouts.app')
@section('content')
<header>
<div class="main-header" ><img src="../public/images/main_header.png"></div>
<div class="banner" ><img src="../public/images/banner.png"></div>
</header>

<main class="container">
  <div class="flex-grid">
    <div class="col"><img alt="Avatar" class="avatar" src="../public/images/bee_dark.png"></div>
    <a id="upload_img" href="#" class="btn btn-primary">UPLOAD IMAGE</a>
    <div class="col">
      <div id="vendor_shop_name"><h2>Natural Bee Farm<h2></div>
      <div id="vendor_date"><p>Vendor since 10/19/2020</p></div>
      <div><img src="../public/images/location_banner.png"></div>
      <div id="vendor_address">
        <p>1234 Okanagan Way</p>
        <p>Kamloops, BC</p>
      </div>
      <div><img src="../public/images/contact_banner.png"></div>
      <div id="vendor_contact">
        <p>Phone: 250-852-1567</p>
        <p>Email: info@naturalbeefarms.ca</p>
      </div>
    </div>
  </div>

  <div>
    <h2>CURRENT PRODUCTS</h2>
      <div class="flex-grid">
        <div class="col">
          <img class="product_img" src="../public/images/honey_jar.png" alt="">
          <img class="product_img" src="../public/images/honey_treats.png" alt="">
          <img class="product_img" src="../public/images/candle.jpg" alt="">
          <img class="product_img" src="../public/images/honey_comb.jpg" alt="">
        </div>
        <div class="col">
          <img class="product_img" src="../public/images/honey_stick.jpg" alt="">
          <img class="product_img" src="../public/images/lip_product.jpg" alt="">
          <img class="product_img" src="../public/images/foodwrap.jpg" alt="">
          <img class="product_img" src="../public/images/beeswax.png" alt="">
        </div>
      </div>
          <a id="upload_img" href="#" class="btn btn-primary">ADD PRODUCT</a>
  </div>

  <div>
    <h2>ORDERS</h2>
      <div class="flex-grid">
        <div class="col">
          <p id="customer_name">Anna Buzz</p>
          <p id="customer_name">Kimberly Cattle</p>
          <p id="customer_name">Quinton Beets</p>
          <p id="customer_name">Greg Rancher</p>
        </div>
        <div class="col">
          <p id="order_id">Order #: 124</p>
          <p id="order_id">Order #: 123</p>
          <p id="order_id">Order #: 122</p>
          <p id="order_id">Order #: 121</p>
        </div>
        <div class="col">
          <p id="order_total"><b>TOTAL:</b> $45.47</p>
          <p id="order_total"><b>TOTAL:</b> $27.85</p>
          <p id="order_total"><b>TOTAL:</b> $15.24</p>
          <p id="order_total"><b>TOTAL:</b> $34.58</p>
        </div>
        <div class="col">
          <p id="order_status">PROCESSED</p>
          <p id="order_status">SHIPPED</p>
          <p id="order_status">SHIPPED</p>
          <p id="order_status">SHIPPED</p>
        </div>
      </div>
          <a id="upload_img" href="#" class="btn btn-primary">VIEW ALL</a>
  </div>

</main>
@endsection
