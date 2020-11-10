@extends('layouts.app')
@section('cart')

<head>
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/banners.css">
    <link rel="stylesheet" href="css/checkout.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

</head>

<div class="banner" id="checkout">
    <div class="bannerTitle">
        <p>Checkout</p>
    </div>
</div>
<div class="cartContainer" id="cart">

    <div class="content" id="itemsContainer">
        <div class="mainContainer">
            <div class="MainContainerContent">
                <div class="paymentOptionsContainer">
                    <p class="paymentOptions">Payment options</p>
                </div>
                <div class="checkoutDevider"></div>
                <div class="creditCardContainer">
                    <div class="creditcartImage"><img src={{asset("images/checkout/creditCardOrange.png")}} alt="logo"></div>
                    <div class="creditCardNumber">
                        <p>XXXX-XXXX-XXXX-1234</p>
                    </div>
                    <div class="creditCardDelete"><i class="fas fa-times fa-lg creditcardX"></i></div>
                </div>
                <div class="checkoutDevider"></div>
                <div class="newCreditCardContainer">
                    <p class="newCardP">New Card</p>
                    <input class="creditCardInput" type="text" placeholder="Card Number">
                    <div class="checkoutDevider"></div>
                    <input class="creditCardInput" type="text" placeholder="Cardholders Name">
                    <div class="checkoutDevider"></div>
                    <input class="creditCardInput" type="text" placeholder="Exp. Date">
                    <div class="checkoutDevider"></div>
                </div>
            </div>
        </div>
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
<div>
    <button onclick="addItem('Farm Eggs', 'Thistle Farm', 'In Stock', '/images/logo.png',1,2.99)" style="width: 100px; height:100px;"></button>
</div>

<script>
    var itemArray = [];
    if (JSON.parse(sessionStorage.getItem("items")) != null)
        itemArray = JSON.parse(sessionStorage.getItem("items"));

    function addItem(itemName, farmName, stockText, imageLocation, quantity, price) {
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
    }
</script>
@endsection