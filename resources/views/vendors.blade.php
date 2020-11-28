@extends('layouts.app')
@section('content')
<head>
    <link rel="stylesheet" href="css/vendors.css">
</head>

<header>
<div class="main-header" style="position: relative;"><img src={{asset("../public/images/vendor_banner.jpg")}}>
  <div id="header_text" style="position: absolute;">
    <p><b>VENDORS</b></p>
   </div>
 </div>
</header>

<!-- Filters Bar -->
<div class="content">
  <div class="filterContainer">
      <div class="filterSidebar">
          <ul style="list-style-type: none;">
            <h5>Filters</h5>
            <li><a class="sidebar-link" href="">Newest</a></li>
            <li><a class="sidebar-link" href="">Certified Organic</a></li>
            <li><a class="sidebar-link" href="">Ascending</a></li>
            <li><a class="sidebar-link" href="">Descending</a></li>
          </ul>
      </div>
  </div>




  <div class="cards">
    <div class="cards__item">
      <div class="card">
        <div class="card__image">
          <img class="vendor_logo" src={{asset("/images/bee_dark.png")}} alt="Product Image">
        </div>
        <div class="card__content" style="background-color: #f7b538;">
          <div class="card__title">Flex</div>
          <p class="card__text">This is the shorthand for flex-grow, flex-shrink and flex-basis combined. The second and third parameters (flex-shrink and flex-basis) are optional. Default is 0 1 auto. </p>
          <button class="view_shop_btn">VIEW SHOP</button>
        </div>
      </div>
    </div>
    <div class="cards__item">
      <div class="card">
        <div class="card__image">
          <img class="vendor_logo" src={{asset("/images/farm_dark.png")}} alt="Product Image">
        </div>
        <div class="card__content" style="background-color: #426a5a;">
          <div class="card__title">Flex</div>
          <p class="card__text">This is the shorthand for flex-grow, flex-shrink and flex-basis combined. The second and third parameters (flex-shrink and flex-basis) are optional. Default is 0 1 auto. </p>
          <button class="view_shop_btn">VIEW SHOP</button>
        </div>
      </div>
    </div>
    <div class="cards__item">
      <div class="card">
        <div class="card__image">
          <img class="vendor_logo" src={{asset("/images/bee_dark.png")}} alt="Product Image">
        </div>
        <div class="card__content"  style="background-color: #9e2a2b;">
          <div class="card__title">Flex</div>
          <p class="card__text">This is the shorthand for flex-grow, flex-shrink and flex-basis combined. The second and third parameters (flex-shrink and flex-basis) are optional. Default is 0 1 auto. </p>
          <button class="view_shop_btn">VIEW SHOP</button>
        </div>
      </div>
    </div>
  </div>


        <!-- <div class="productItem">
            <div class="logo_container">
                    <img class="vendor_logo" src={{asset("/images/bee.png")}} alt="Product Image">
                    <div class="vendor_text">
                    <p style="font-size: 35px;"><b> Natural Bee Farm </b></p>
                    <p style="font-size: 20px;">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a ipsum libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
<a id="visit_store" href="#" class="btn btn-primary">VISIT STORE</a>
                  </div>
                  </div>

                <div class="store_preview">
                        <div class="preview_img_container"><img class="product_img_preview" src="../public/images/honey_jar.png" alt=""><span class="preview_img_text">Premium Honey</span></div>
                        <div class="preview_img_container"><img class="product_img_preview" src="../public/images/honey-treats.png" alt=""><span class="preview_img_text">Flavored Honey Sticks</span></div>
                        <div class="preview_img_container"><img class="product_img_preview" src="../public/images/candle.jpg" alt=""><span class="preview_img_text">Beeswax Candles</span></div>
                        <div class="preview_img_container"><img class="product_img_preview" src="../public/images/honey_comb.jpg" alt=""><span class="preview_img_text">Honey Comb</span></div>
                      </div>



                </div> -->

</div>

@endsection
