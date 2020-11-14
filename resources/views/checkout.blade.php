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
                <div class="creditCardInject">
                    <div class="creditCardContainer" onmouseover="">
                        <i class="far fa-check-circle checkCircle fa-2x"></i>
                        <div class="creditcartImage"><img src={{asset("images/checkout/creditCardOrange.png")}} alt="logo"></div>
                        <div class="creditCardNumber">
                            <p>XXXX-XXXX-XXXX-1234</p>
                        </div>
                        <div class="creditCardDelete"><i class="fas fa-times fa-lg creditcardX"></i></div>
                    </div>
                    <div class="checkoutDevider"></div>
                </div>
                <!-- new card -->
                <div class="newCreditCardContainer">
                    <p class="headerP">New Card</p>
                    <input class="creditCardInput" id="cardNumber" type="text" placeholder="Card Number">
                    <div class="checkoutDevider"></div>
                    <input class="creditCardInput" id="cardHoldersName" type="text" placeholder="Cardholders Name">
                    <div class="checkoutDevider"></div>
                    <input class="creditCardInput" id="cardExpDate" type="text" placeholder="Exp. Date">
                    <div class="checkoutDevider"></div>
                    <button class="addButton" id="card" onclick="addCreditCard()">Add</button>
                </div>
                <!-- address -->
                <p class="headerP">Address</p>
                <div class="checkoutDevider"></div>
                <div class="addressInject">
                    <div class="creditCardContainer">
                        <div class="addressClick">
                            <div class="creditcartImage"><i class="fas fa-home fa-lg"></i></div>
                            <div class="creditCardNumber">
                                <p>1740 18th ave NE</p>
                            </div>
                        </div>
                        <div class="creditCardDelete"><i class="fas fa-times fa-lg creditcardX"></i></div>
                    </div>
                    <div class="checkoutDevider"></div>
                </div>
                <!-- new address -->
                <p class="headerP">New Address</p>
                <input class="creditCardInput" id="addressInput" type="text" placeholder="Address" value="1740 18th ave NE">
                <div class="checkoutDevider"></div>
                <button class="addButton" id="address" onclick="addAddress()">Add</button>


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
            <button id="placeOrder" class="procedeToCheckout"><i class="fas fa-shield-alt"></i>Place Order</button>

        </div>
    </div>
    <!-- end total -->
</div>
<div>
    <button onclick="addItem('Farm Eggs', 'Thistle Farm', 'In Stock', '/images/logo.png',1,2.99)" style="width: 100px; height:100px;"></button>
</div>

<script>
    //get addresses from sessionVariable
    var addressArray = [];
    if (JSON.parse(sessionStorage.getItem("addresses")) != null)
        addressArray = JSON.parse(sessionStorage.getItem("addresses"));
    displayAddresses();
    displayTotals();

    //get cards
    function updateSessionWithAddresses() {
        sessionStorage.setItem("addresses", JSON.stringify(addressArray));
    }
    //display totals
    function displayTotals() {
        var totals = [];
        if (JSON.parse(sessionStorage.getItem("totals")) != null) {
            totals = JSON.parse(sessionStorage.getItem("totals"));

            $(".subtotal").text("$" + totals.subtotal.toFixed(2));
            $(".deliveryFee").text("$" + totals.deliveryFee.toFixed(2));
            $(".total").text("$" + totals.total.toFixed(2));
        }
        //else
        //display zeros           
    }
    //
    //display addresses
    //
    function displayAddresses() {
        var addressString = ""
        if (addressArray == null || addressArray.length == 0)
            addressString = "No saved addresses";
        if (addressArray != null) {
            for (i = 0; i < addressArray.length; i++) {
                addressString +=
                    "<div class='creditCardContainer'>" +
                    "<div class='addressClick' onclick = 'displayCheckCircleOnAddress(" + i + ")'>" +
                    "<i class='far fa-check-circle checkCircleAddress fa-1x' id='checkCircleAddress" + i + "' ></i>" +
                    "<div class='creditcartImage'><i class='fas fa-home fa-lg'></i></div>" +
                    "<div class='creditCardNumber'>" +
                    "<p>" + addressArray[i].addressValue + "</p>" +
                    "</div>" +
                    "</div>" +
                    "<div class='creditCardDelete'><i class='fas fa-times fa-lg creditcardX' onclick='deleteAddress(" + i + ")'></i></div>" +
                    "</div>" +
                    "<div class='checkoutDevider'></div>"
            }
        }
        $(".addressInject").html(addressString);
        clearAllAddressCheckCircles();
    }

    //
    //add new address
    //
    function addAddress() {
        addressValue = $("#addressInput").val();

        var address = {
            addressValue: addressValue
        };
        addressArray.push(address);
        sessionStorage.setItem("addresses", JSON.stringify(addressArray));
        displayAddresses();
    }

    //display Check mark Address
    function displayCheckCircleOnAddress(i) {
        clearAllAddressCheckCircles();
        $("#checkCircleAddress" + i).css("display", "flex")
    }

    //delete an address
    function deleteAddress(i) {
        addressArray.splice(i, 1);
        updateSessionWithAddresses();
        displayAddresses();
        clearAllAddressCheckCircles();
    }

    //clears all of the checkcircles on the addresses
    function clearAllAddressCheckCircles() {
        $(".checkCircleAddress").each(function() {
            $(this).css("display", "none")
        })
    }


    //
    //vvv for creditcards vvv
    //




    //get cards from sessionVariable
    var cardArray = [];
    if (JSON.parse(sessionStorage.getItem("cards")) != null)
        cardArray = JSON.parse(sessionStorage.getItem("cards"));
    displayCreditcards();

    //get cards
    function updateSessionWithCards() {
        sessionStorage.setItem("cards", JSON.stringify(cardArray));
    }

    //
    //add new credit card
    //
    function addCreditCard() {
        cardNumber = $("#cardNumber").val();
        cardHolderName = $("#cardHoldersName").val();
        expDate = $("#cardExpDate").val();
        if (cardArray != null) {
            if (cardArray.length % 2 == 0) {
                var imageLocation = "images/checkout/creditCardOrange.png"
            } else
                var imageLocation = "images/checkout/creditCardRed.png"
        }
        var card = {
            cardNumber: cardNumber,
            cardHolderName: cardHolderName,
            expDate: expDate,
            imageLocation: imageLocation
        };
        cardArray.push(card);
        sessionStorage.setItem("cards", JSON.stringify(cardArray));
        displayCreditcards();
    }


    //
    //display creditcards
    //
    function displayCreditcards() {
        var cardString = ""
        if (cardArray == null || cardArray.length == 0)
            cardString =
            "<div class='content' id='itemsContainer'>" +
            "<div class='imageTextContainer'>" +
            "<div style='flex: 1;'></div>" +
            "<div class='noItemsContainer'>" +
            "<p>No cards saved</p>" +
            "</div>" +
            "<div style='flex: 1;'></div>" +
            "</div>" +
            "</div>"
        if (cardArray != null) {
            for (i = 0; i < cardArray.length; i++) {
                cardString +=
                    "<div class='creditCardContainer' onclick='displayCheckCircle(" + i + ")' >" +
                    "<i class='far fa-check-circle checkCircle fa-2x' id='checkCircle" + i + "' onclick = 'displayCheckCircle(" + i + ")'></i>" +
                    "<div class='creditcartImage'><img src={{asset('/images/logo.png')}} alt='logo" + i + "'></div>" +
                    "<div class='creditCardNumber'>" +
                    "<p>XXXX-XXXX-XXXX-" + cardArray[i].cardNumber.slice(cardArray[i].cardNumber.length - 4) + "</p>" +
                    "</div>" +
                    "<div class='creditCardDelete' onclick='deleteCreditCard(" + i + ")'><i class='fas fa-times fa-lg creditcardX'></i></div>" +
                    "</div>" +
                    "<div class='checkoutDevider'></div>";
                // blade workaround
                cardString = cardString.replace("images/logo.png alt='logo" + i, cardArray[i].imageLocation + " ' ");
            }
        }
        $(".creditCardInject").html(cardString);
        clearAllCardCheckCircle();
    }



    //display Check mark on cards
    function displayCheckCircle(i) {
        clearAllCardCheckCircle();
        $("#checkCircle" + i).css("display", "flex")
    }

    //delete a card
    function deleteCreditCard(i) {
        cardArray.splice(i, 1);
        updateSessionWithCards();
        displayCreditcards();
        clearAllCardCheckCircle();
    }

    //clears all of the checkcircles on the credit cards
    function clearAllCardCheckCircle() {
        $(".checkCircle").each(function() {
            $(this).css("display", "none")
        })
    }
    //


    //
    //adds a dummy cart item, used for testing
    //

    //in html 
    // <button onclick="addItem('Farm Eggs', 'Thistle Farm', 'In Stock', '/images/logo.png',1,2.99)"
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
    //
    //end add dummy item
    //

    $("#placeOrder").click(function() {
        //sessionStorage.getItem("items")) = null
        sessionStorage.setItem("items", null);
        var orderCompleteText =
            "<div class='orderPacedContainer'>" +
            "<h1>Thank you</h1>" +
            "<p>Your order has been placed</p>" +
            "</div> " 
        $(".MainContainerContent").html(orderCompleteText)
    }) 
</script>
@endsection