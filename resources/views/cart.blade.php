@extends('layouts.app')
@section('cart')

<head>
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/banners.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

</head>

<div class="banner" id="cart">
    <div class="bannerTitle">
        <p>Cart</p>
    </div>
</div>
<div class="cartContainer" id="cart">
    <!-- cart item -->
    <div class="content" id="itemsContainer">
        <div class="cartItem">
            <div class="imageTextContainer">
                <div class="image" id="image" style="display: inline-block;">
                    <img class="cartItemImage" src={{asset("/images/logo.png")}} alt="logo">
                </div>
                <div class="text" id="text">
                    <div>
                        <p id="title">Farm Eggs</p>
                        <p id="subtitle">Thistle Farm</p>
                        <p id="stock">In Stock</p>
                    </div>
                </div>
            </div>

            <div class="quantity" id="quantity">
                <div class="quantityWraper">

                    <div> <button class="QuantityButton">-</button> </div>
                    <div> <input class="QuantityInput" value="1" type="number"></div>
                    <div> <button class="QuantityButton">+</button></div>
                </div>
            </div>
            <div class="priceRemove" id="priceRemove">
                <div class="price">
                    <p>$2.99</p>
                </div>
                <div class="remove">
                    <i class="fa fa-trash" aria-hidden="true"></i>Remove
                </div>
            </div>
        </div>
        <!-- cart item -->
        <div class="content" id="itemsContainer">
            <div class="cartItem">
                <div class="imageTextContainer">
                    <div class="image" id="image" style="display: inline-block;">
                        <img class="cartItemImage" src={{asset('/images/logo.png')}} alt="logo">
                    </div>
                    <div class="text" id="text">
                        <div>
                            <p id="title">Farm Eggs</p>
                            <p id="subtitle">Thistle Farm</p>
                            <p id="stock">In Stock</p>
                        </div>
                    </div>
                </div>

                <div class="quantity" id="quantity">
                    <div class="quantityWraper">

                        <div> <button class="QuantityButton" id="subtract">-</button> </div>
                        <div> <input class="QuantityInput" value="1" type="number"></div>
                        <div> <button class="QuantityButton" id="add">+</button></div>
                    </div>
                </div>
                <div class="priceRemove" id="priceRemove">
                    <div class="price">
                        <p>$2.99</p>
                    </div>
                    <div class="remove">
                        <button class='removeButton' onclick=''> <i class='fa fa-trash' aria-hidden='true'></i>Remove</button>

                    </div>
                </div>
            </div>

        </div>
        <!-- cart item -->
        <div class="content" id="itemsContainer">
            <div class="cartItem">
                <div class="imageTextContainer">
                    <div style="flex: 1;"></div>
                    <div class="noItemsContainer">
                        <p>Your cart is empty</p>
                    </div>
                    <div style="flex: 1;"></div>
                </div>
            </div>
        </div>
        <!-- end of cart items -->
    </div>
    <!-- total -->
    <div class="totalWraper">
        <div class="totalcontainer" id="totalcontainer">
            <div class="totalItemCost">
                <div class="totalText">
                    <p>Item(s):</p>
                </div>
                <div class="totalPrice">
                    <p class="subtotal">$34.99</p>
                </div>
            </div>
            <div class="totalDeliveryFee">
                <div class="totalText">
                    <p>Delivery fee:</p>
                </div>
                <div class="totalPrice">
                    <p class="deliveryFee">$5.99</p>
                </div>
            </div>
            <!-- devider -->
            <div class="totalDevider"></div>
            <div class="totalTotalCost">
                <div class="totalText">
                    <p>Total:</p>
                </div>
                <div class="totalPrice">
                    <p class="total">$40.98</p>
                </div>
            </div>
            <a href="checkout"><button class="procedeToCheckout"><i class="fas fa-shield-alt"></i>Proceed to Checkout</button></a>

        </div>
    </div>
    <!-- end total -->

</div>



<script>
    var items;
    displayItems();
    //
    //quantity validation and display update
    //

    //quantity subtract
    function subtractQuantity(i) {
        var curentVal = $(".cartItem#" + i + " .QuantityInput").val();
        curentVal--;
        if (curentVal < 1) {
            curentVal = 1;
        }
        $(".cartItem#" + i + " .QuantityInput").val(curentVal);
        updateQuantityInModel(i, curentVal);
    }
    //quantity add
    function addQuantity(i) {
        var curentVal = $(".cartItem#" + i + " .QuantityInput").val();
        curentVal++;
        $(".cartItem#" + i + " .QuantityInput").val(curentVal);
        updateQuantityInModel(i, curentVal);
    }
    //quantity input loses focus
    function checkValidQuantity(i) {
        var curentVal = $(".cartItem#" + i + " .QuantityInput").val();
        if (curentVal < 1) {
            curentVal = 1;
        }
        $(".cartItem#" + i + " .QuantityInput").val(curentVal);
        updateQuantityInModel(i, curentVal);
    }

    function updateQuantityInModel(i, quantity) {
        items[i].quantity = quantity;
        var price = items[i].price;
        $(".cartItem#" + i + " #price" + i).text("$" + (price * quantity).toFixed(2));
        setModel();
        calculateAndDisplayTotals();
    }
    //
    //end quantity validation
    //

    function deleteFromModel(i) {
        items.splice(i, 1);
        setModel();
        displayItems();
    }

    function setModel() {
        sessionStorage.setItem("items", JSON.stringify(items));
    }

    function calculateAndDisplayTotals() {
        var subTotal = 0;
        var deliveryFee = 0;
        if (items != null) {
            for (i = 0; i < items.length; i++) {
                subTotal += (items[i].quantity * items[i].price);
            }
        }
        if(subTotal!=0)
        deliveryFee = 2.99;
        var total = subTotal + deliveryFee;        
        $(".subtotal").text("$" + subTotal.toFixed(2));
        $(".deliveryFee").text("$" + deliveryFee.toFixed(2));
        $(".total").text("$" + total.toFixed(2));

        var totals = {
            subtotal: subTotal,
            total: total,
            deliveryFee: deliveryFee
        };
        sessionStorage.setItem("totals", JSON.stringify(totals));

    }

    //
    //for displaing data
    //

    //build an html display string
    function displayItems() {
        //get items from session storge
        items = JSON.parse(sessionStorage.getItem("items"));

        var displayString = ""
        if (items == null || items.length == 0)
            var displayString =
                "<div class='content' id='itemsContainer'>" +
                "<div class='cartItem'>" +
                "<div class='imageTextContainer'>" +
                "<div style='flex: 1;'></div>" +
                "<div class='noItemsContainer'>" +
                "<p>Your cart is empty</p>" +
                "</div>" +
                "<div style='flex: 1;'></div>" +
                "</div>" +
                "</div>" +
                "</div>"

        if (items != null)
            for (i = 0; i < items.length; i++) {
                //wierd blade workaround
                document.cookie = "imageSrc=" + items[i].imageLocation + ";";
                displayString += " <div class='content' id='itemsContainer'>" +
                    "<div class='cartItem' id = '" + i + "'>" +
                    "<div class='imageTextContainer'>" +
                    "<div class='image' id='image' style='display: inline-block;'>" +
                    "<img class='cartItemImage' src={{asset((isset($_COOKIE['imageSrc'])?$_COOKIE['imageSrc']:'/images/logo.png'))}} alt='logo'>" +
                    "</div>" +
                    "<div class='text' id='text'>" +
                    "<div>" +
                    "<p id='title'>" + items[i].itemName + "</p>" +
                    "<p id='subtitle'>" + items[i].farmName + "</p>" +
                    "<p id='stock'>" + items[i].stockText + "</p>" +
                    "</div>" +
                    "</div>" +
                    "</div>" +

                    "<div class='quantity' id='quantity'>" +
                    "<div class='quantityWraper'>" +

                    "<div> <button class='QuantityButton' onclick='subtractQuantity(" + i + ")'>-</button> </div>" +
                    "<div> <input class='QuantityInput' onfocusout = 'checkValidQuantity(" + i + ")' value='" + items[i].quantity + "' type='number'></div>" +
                    "<div> <button class='QuantityButton' onclick='addQuantity(" + i + ")'>+</button></div>" +
                    "</div>" +
                    "</div>" +
                    "<div class='priceRemove' id='priceRemove'>" +
                    "<div class='price'>" +
                    "<p id='price" + i + "'>$" + (items[i].quantity * items[i].price).toFixed(2) + "</p>" +
                    "</div>" +
                    "<div class='remove'>" +
                    "<button class='removeButton' onclick = 'deleteFromModel(" + i + ")'> <i class='fa fa-trash' aria-hidden='true'></i> Remove</button>" +
                    "</div>" +
                    "</div>" +
                    "</div>"

            }
        //display the string
        $(".content#itemsContainer").html(displayString);
        calculateAndDisplayTotals();
    }

    //
    // end displaing data
    //
</script>
</body>



</html>
@endsection