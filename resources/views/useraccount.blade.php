@extends('layouts.app')
@section('content')
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
        <a id="upload_img" href="#" class="btn btn-primary">UPLOAD IMAGE</a>
      <a id="update_profile" href="#" class="btn btn-primary">UPDATE PROFILE</a>
    </span>
    </div>
    <div class="col">
      <div id="vendor_shop_name">Natural Bee Farm</div>
      <div id="vendor_date"><p><i class="fas fa-user-circle" style="color:#426a5a;"></i> &nbsp;Vendor since 10/19/2020</p></div>
      <div><img src="../public/images/location_banner.png"></div>
      <div id="vendor_address">
        <p><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;1234 Okanagan Way, Kamloops BC V2B1F8</p>
      </div>
      <div><img src="../public/images/contact_banner.png"></div>
      <div id="vendor_contact">
        <p><i class="fas fa-phone"></i> &nbsp;&nbsp;250-852-1567</p>
        <p><i class="fas fa-envelope"></i> &nbsp;&nbsp;info@naturalbeefarms.ca</p>
      </div>

    </div>
  </div>
</div>
</section>

<section class="products">
      <div><img id="current_banner" src="../public/images/current_banner.jpg"></div>
      <div class="flex-grid current_products">
          <img class="product_img" src="../public/images/honey_jar.png" alt="">
          <img class="product_img" src="../public/images/honey-treats.png" alt="">
          <img class="product_img" src="../public/images/candle.jpg" alt="">
          <img class="product_img" src="../public/images/honey_comb.jpg" alt="">
          <img class="product_img" src="../public/images/honey_stick.jpg" alt="">
          <img class="product_img" src="../public/images/lip_product.jpg" alt="">
          <img class="product_img" src="../public/images/foodwrap.jpg" alt="">
          <img class="product_img" src="../public/images/beeswax.png" alt="">
      </div>

      <span class="center">
        <a id="add_product" href="#" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;ADD PRODUCT</a>
        <a id="view_store" href="#" class="btn btn-primary">VIEW SHOP</a>
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
@endsection
