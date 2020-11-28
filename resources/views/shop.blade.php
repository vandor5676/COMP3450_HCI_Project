@extends('layouts.app')
@section('content')
<head>
    <link rel="stylesheet" href="css/shop.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>

<header>
<div class="main-header" style="position: relative;"><img src={{asset("../public/images/shop_banner.jpg")}}>
  <div id="shop_header_text" style="position: absolute;">
    <p><b>SHOP</b></p>
   </div>
 </div>
</header>

<!-- Category Nav Bar -->
<div class="category-bar">
    <div class="category-bar-item">
        <a class="category-bar-link" href="">All Products</a>
        <a class="category-bar-link" href="">Produce</a>
        <a class="category-bar-link" href="">Meat</a>
        <a class="category-bar-link" href="">Dairy</a>
        <a class="category-bar-link" href="">Honey</a>
        <a class="category-bar-link" href="">Bakery</a>
    </div>
</div>

<!-- Filters Bar -->
<div class="content">
    <div class="filterContainer">
        <div class="filterSidebar">
            <ul style="list-style-type: none;">
                <h5>Filters</h5>
                <li><a class="sidebar-link" href="">On Sale</a></li>
                <li><a class="sidebar-link" href="">Newest</a></li>
                <li><a class="sidebar-link" href="">Certified Organic</a></li>
                <li><a class="sidebar-link" href="">By Vendor</a></li>
                <li><a class="sidebar-link" href="">By Price</a></li>
            </ul>
        </div>
    </div>

    <!-- Products -->
    <div class="productContainer">

      <!-- Blanket
      <div id='blanket'>
      </div>
      -->

        <div class="productItem">
            <div class="imageTextContainer">
                <!-- checkmark -->
                <svg class="checkmark" id="checkMark1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                    <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                    <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                </svg>
                <!--  -->
                <div class="image" id="image" style="display: inline-block;">
                    <img class="itemImage" src={{asset("/images/product_eggs.png")}} alt="Product Image">
                </div>

                <div class="text" id="text">
                    <div>
                        <p id="title" class="farm-eggs" style="cursor: pointer;">Farm Eggs</p>
                        <p id="subtitle">Thistle Farm</p>
                        <p id="stock">In Stock</p>
                    </div>
                </div>
            </div>

            <div class="addToCart">
              <div class="quantityWraper">
                <div> <button class="QuantityButton" id="subtract">-</button> </div>
                <div> <input class="QuantityInput" id="quantity" value="1" type="number"></div>
                <div> <button class="QuantityButton" id="add">+</button></div>
              </div>
                <button class="cartitembutton" id="cartItem1" onclick="addItem('Farm Eggs', 'Thistle Farm', 'In Stock', '/images/product_eggs.png',1,2.99,1)" class="addToCart-link removeButton">Add to Cart</button>
            </div>

            <div style="position: relative; width: auto; font-family: 'Segoe UI','Oswald', 'sans-serif';">
                <div style="padding: 2em">
                    <p class="price">$2.99</p>
                </div>
            </div>
            <div class="modal-window" id="eggs-modal">
                <div>
                  <img src={{asset("/images/product_eggs.png")}} style="max-width: 150px; float: left;" alt="Product Image">
                  <h3 style="margin-top: 5px; padding-left: 15px; display: flex; flex:1;">Farm Eggs</h3>
                  <p class="modal-text">Thistle Farm</p>
                  <p class="modal-text">In Stock</p>
                  <p class="modal-text">$2.99</p>
                  <p class="modal-text">A dozen fresh brown farm eggs. These eggs from Thistle Farm are the best in Kamloops!</p>
                  <p class="modal-text" id="eggs-close" style="cursor: pointer;">Close</p>
                </div>
          </div>
        </div>

        <div class="productItem">
            <div class="imageTextContainer">
                <!-- checkmark -->
                <svg class="checkmark" id="checkMark2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                    <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                    <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                </svg>
                <!--  -->
                <div class="image" id="image" style="display: inline-block;">
                    <img class="itemImage" src={{asset("/images/product_lettuce.png")}} alt="Product Image">
                </div>

                <div class="text" id="text">
                    <div>
                        <p id="title" class="lettuce-farm" style="cursor: pointer;">Lettuce</p>
                        <p id="subtitle">Tranquille Farm</p>
                        <p id="stock">In Stock</p>
                    </div>
                </div>
            </div>

            <div class="addToCart">
              <div class="quantityWraper">
                <div> <button class="QuantityButton" id="subtract">-</button> </div>
                <div> <input class="QuantityInput" id="quantity" value="1" type="number"></div>
                <div> <button class="QuantityButton" id="add">+</button></div>
              </div>
                <button class="cartitembutton" id="cartItem2" onclick="addItem('Lettuce', 'Tranquille Farm', 'In Stock', '/images/product_lettuce.png', 1, 1.99, 2)" class="addToCart-link removeButton">Add to Cart</button>
            </div>

            <div style="position: relative; width: auto; font-family: 'Segoe UI','Oswald', 'sans-serif';">
                <div style="padding: 2em">
                    <p class="price">$1.99</p>
                </div>
            </div>
            <div class="modal-window" id="lettuce-modal">
              <div>
                <img src={{asset("/images/product_lettuce.png")}} style="max-width: 150px; float: left;" alt="Product Image">
                <h3 style="margin-top: 5px; padding-left: 15px; display: flex; flex:1;">Lettuce</h3>
                <p class="modal-text">Tranquille Farm</p>
                <p class="modal-text">In Stock</p>
                <p class="modal-text">$1.99</p>
                <p class="modal-text">Fresh Romaine Lettuce from Tranquille Farm. Cultivated and distributed by the Farm Owners themselves, to the community of Kamloops.</p>
                <p class="modal-text" id="lettuce-close" style="cursor: pointer;">Close</p>
              </div>
            </div>
        </div>

        <div class="productItem">
            <div class="imageTextContainer">
                <!-- checkmark -->
                <svg class="checkmark" id="checkMark1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                    <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                    <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                </svg>
                <!--  -->
                <div class="image" id="image" style="display: inline-block;">
                    <img class="itemImage" src={{asset("/images/product_sausage.png")}} alt="Product Image">
                </div>

                <div class="text" id="text">
                    <div>
                        <p id="title" class="italian-sausage" style="cursor: pointer;">Italian Sausage</p>
                        <p id="subtitle">Sullindeo Farm</p>
                        <p id="stock">In Stock</p>
                    </div>
                </div>
            </div>

            <div class="addToCart">
              <div class="quantityWraper">
                <div> <button class="QuantityButton" id="subtract">-</button> </div>
                <div> <input class="QuantityInput" id="quantity" value="1" type="number"></div>
                <div> <button class="QuantityButton" id="add">+</button></div>
              </div>
                <button class="cartitembutton" id="cartItem1" onclick="addItem('Italian Sausage', 'Sullindeo Farm', 'In Stock', '/images/product_sausage.png',1,2.99,3)" class="addToCart-link removeButton">Add to Cart</button>
            </div>

            <div style="position: relative; width: auto; font-family: 'Segoe UI','Oswald', 'sans-serif';">
                <div style="padding: 2em">
                    <p class="price">$2.99</p>
                </div>
            </div>
            <div class="modal-window" id="sausage-modal">
              <div>
                <img src={{asset("/images/product_sausage.png")}} style="max-width: 150px; float: left;" alt="Product Image">
                <h3 style="margin-top: 5px; padding-left: 15px; display: flex; flex:1;">Italian Sausage</h3>
                <p class="modal-text">Sullindeo Farm</p>
                <p class="modal-text">In Stock</p>
                <p class="modal-text">$2.99</p>
                <p class="modal-text">Italian Sausage (2 per pack), sourced and produced at Sullindeo Farm.</p>
                <p class="modal-text" id="sausage-close" style="cursor: pointer;">Close</p>
              </div>
            </div>
        </div>
    </div>

</div>

<script>
    //
    //adds a cart item
    //
    var itemArray = [];
    if (JSON.parse(sessionStorage.getItem("items")) != null)
        itemArray = JSON.parse(sessionStorage.getItem("items"));

    function addItem(itemName, farmName, stockText, imageLocation, quantity, price, cardNumber) {
        var item = {
            itemName: itemName,
            farmName: farmName,
            stockText: stockText,
            imageLocation: imageLocation,
            quantity: quantity,
            price: price
        };
        itemArray.push(item);
        sessionStorage.setItem("items", JSON.stringify(itemArray));

        $("#checkMark"+cardNumber).css("display","initial");
        $("#cartItem"+cardNumber).blur();
    }
    //
    //end add item
    //

    $(function() {

        $(".farm-eggs").click(function() {
          $("#eggs-modal").show();
          //$("#blanket").show();
          $("#lettuce-modal").hide();
          $("#sausage-modal").hide();
        });

        $("#eggs-close").click(function() {
          $("#eggs-modal").hide();
          //$("#blanket").hide();
          $("#lettuce-modal").hide();
          $("#sausage-modal").hide();
        });


        $(".lettuce-farm").click(function() {
          $("#lettuce-modal").show();
          //$("#blanket").show();
          $("#sausage-modal").hide();
          $("#eggs-modal").hide();
        });

        $("#lettuce-close").click(function() {
          $("#eggs-modal").hide();
          //$("#blanket").hide();
          $("#lettuce-modal").hide();
          $("#sausage-modal").hide();
        });


        $(".italian-sausage").click(function() {
          $("#sausage-modal").show();
          //$("#blanket").show();
          $("#eggs-modal").hide();
          $("#lettuce-modal").hide();
        });

        $("#sausage-close").click(function() {
          $("#eggs-modal").hide();
          //$("#blanket").hide();
          $("#lettuce-modal").hide();
          $("#sausage-modal").hide();
        });

        /*
        $("#blanket").click(function() {
          $("#eggs-modal").hide();
          $("#blanket").hide();
          $("#lettuce-modal").hide();
          $("#sausage-modal").hide();
        });
        */
        
        $("#add").click(function(){
          var num = parseInt($('#quantity').val(), 10);
          $('#quantity').val(num+1);
        });

        $("#subtract").click(function(){
          var num = parseInt($('#quantity').val(), 10);
          if(num > 0){
            $('#quantity').val(num-1);
          }
        });

      });

</script>

@endsection
