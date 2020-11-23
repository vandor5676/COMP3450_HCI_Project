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
                <li><a class="sidebar-link" href="">Just Added</a></li>
                <li><a class="sidebar-link" href="">Special Offers</a></li>
                <li><a class="sidebar-link" href="">By Vendor</a></li>
                <li><a class="sidebar-link" href="">By Price</a></li>
            </ul>
        </div>
    </div>

    <!-- Products -->
    <div class="productContainer">
        <div class="productItem">
            <div class="imageTextContainer">
                <!-- checkmark -->
                <svg class="checkmark" id="checkMark1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                    <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                    <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                </svg>
                <!--  -->
                <div class="image" id="image" style="display: inline-block;">
                    <img class="itemImage" src={{asset("/images/logo.png")}} alt="Product Image">
                </div>

                <div class="text" id="text">
                    <div>
                        <p id="title">Farm Eggs</p>
                        <p id="subtitle">Thistle Farm</p>
                        <p id="stock">In Stock</p>
                    </div>
                </div>
            </div>

            <div class="addToCart">
              <div class="quantityWraper">
                <div> <button class="QuantityButton" id="subtract">-</button> </div>
                <div> <input class="QuantityInput" value="1" type="number"></div>
                <div> <button class="QuantityButton" id="add">+</button></div>
              </div>
                <button class="cartitembutton" id="cartItem1" onclick="addItem('Farm Eggs', 'Thistle Farm', 'In Stock', '/images/logo.png',1,2.99,1)" class="addToCart-link removeButton">Add to Cart</button>
            </div>

            <div style="position: relative; width: auto; font-family: 'Segoe UI','Oswald', 'sans-serif';">
                <div style="padding: 2em">
                    <p class="price">$2.99</p>
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
                    <img class="itemImage" src={{asset("/images/logo.png")}} alt="Product Image">
                </div>

                <div class="text" id="text">
                    <div>
                        <p id="title">Lettuce</p>
                        <p id="subtitle">Tranquil Farm</p>
                        <p id="stock">In Stock</p>
                    </div>
                </div>
            </div>

            <div class="addToCart">
              <div class="quantityWraper">
                <div> <button class="QuantityButton" id="subtract">-</button> </div>
                <div> <input class="QuantityInput" value="1" type="number"></div>
                <div> <button class="QuantityButton" id="add">+</button></div>
              </div>
                <button class="cartitembutton" id="cartItem2" onclick="addItem('Lettuce', 'Tranquil Farm', 'In Stock', '/images/logo.png', 2, 1.99, 2)" class="addToCart-link removeButton">Add to Cart</button>
            </div>

            <div style="position: relative; width: auto; font-family: 'Segoe UI','Oswald', 'sans-serif';">
                <div style="padding: 2em">
                    <p class="price">$1.99</p>
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

</script>

@endsection
