var toPrice = 0;
var price_1 = document.getElementById("price1").innerHTML;
var price_2a = document.getElementById("price2a").innerHTML;
var price_2b = document.getElementById("price2b").innerHTML;
var price_3a = document.getElementById("price3a").innerHTML;
var price_3b = document.getElementById("price3b").innerHTML;

function Price1(event) {
    var quant1 = parseFloat(event.currentTarget.value);
    if ((isNaN(event.currentTarget.value)) || !Number.isInteger(quant1)) {
        alert("Please enter an integer for quantity.");
        event.currentTarget.focus();
        event.currentTarget.select();
        var prices1 = 0;
        var price = prices1.toFixed(2);
        document.getElementById("subPrice1").innerHTML = price;
        totalPrice();
        return false;
    }
    else if (event.currentTarget.value.length == 0) {
        alert("Please enter a number for quantity.");
        event.currentTarget.focus();
        event.currentTarget.select();
        var prices1 = 0;
        var price = prices1.toFixed(2);
        document.getElementById("subPrice1").innerHTML = price;
        totalPrice();
        return false;
    }
    else {

        var quant1 = parseFloat(event.currentTarget.value);
        var prices1 = quant1 * price_1;

        var price = prices1.toFixed(2);

        document.getElementById("subPrice1").innerHTML = price;
        totalPrice();
    }
}

function Price2(event) {
    var quant2 = parseFloat(event.currentTarget.value);
    if ((isNaN(event.currentTarget.value)) || !Number.isInteger(quant2)) {
        alert("Please enter an integer for quantity.");
        event.currentTarget.focus();
        event.currentTarget.select();
        var prices2 = 0;
        var price = prices2.toFixed(2);
        document.getElementById("subPrice2").innerHTML = price;
        totalPrice();
        return false;
    }
    else if (event.currentTarget.value.length == 0) {
        alert("Please enter a number for quantity.");
        event.currentTarget.focus();
        event.currentTarget.select();
        var prices2 = 0;
        var price = prices2.toFixed(2);
        document.getElementById("subPrice2").innerHTML = price;
        totalPrice();
        return false;
    }
    else {
        var quant2 = parseFloat(event.currentTarget.value);
        if (document.getElementById("single1").checked) {
            var prices2 = quant2 * price_2a;
        } else if (document.getElementById("double1").checked) {
            var prices2 = quant2 * price_2b;
        }
        var price = prices2.toFixed(2);
        document.getElementById("subPrice2").innerHTML = price;
        totalPrice();
    }
}

function Price2a() {
    var quant = document.getElementById("Quantity2");

    if (quant.value.length == 0 || isNaN(quant.value)) {
        alert("Please enter a number for quantity.");
        quant.focus();
        quant.select();
        var prices2 = 0;
        var price = prices2.toFixed(2);
        document.getElementById("subPrice2").innerHTML = price;
        totalPrice();
        return false;
    }
    var quant2 = quant.value;

    var prices2 = quant2 * price_2a;
    var price = prices2.toFixed(2);
    document.getElementById("subPrice2").innerHTML = price;
    totalPrice();
}

function Price2b() {
    var quant = document.getElementById("Quantity2");

    if (quant.value.length == 0 || isNaN(quant.value)) {
        alert("Please enter a number for quantity.");
        quant.focus();
        quant.select();
        var prices2 = 0;
        var price = prices2.toFixed(2);
        document.getElementById("subPrice2").innerHTML = price;
        totalPrice();
        return false;
    }
    var quant2 = quant.value;

    var prices2 = quant2 * price_2b;
    var price = prices2.toFixed(2);
    document.getElementById("subPrice2").innerHTML = price;
    totalPrice();
}

function Price3(event) {
    var quant3 = parseFloat(event.currentTarget.value);
    if ((isNaN(event.currentTarget.value)) || !Number.isInteger(quant3)) {
        alert("Please enter an integer for quantity.");
        event.currentTarget.focus();
        event.currentTarget.select();
        var prices3 = 0;
        var price = prices3.toFixed(2);
        document.getElementById("subPrice3").innerHTML = price;
        totalPrice();
        return false;
    }
    else if (event.currentTarget.value.length == 0) {
        alert("Please enter a number for quantity.");
        event.currentTarget.focus();
        event.currentTarget.select();
        var prices3 = 0;
        var price = prices3.toFixed(2);
        document.getElementById("subPrice3").innerHTML = price;
        totalPrice();
        return false;
    }
    else {
        var quant3 = parseFloat(event.currentTarget.value);
        if (document.getElementById("single2").checked) {
            var prices3 = quant3 * price_3a;
        } else if (document.getElementById("double2").checked) {
            var prices3 = quant3 * price_3b;
        }
        var price = prices3.toFixed(2);
        document.getElementById("subPrice3").innerHTML = price;
        totalPrice();
    }
}

function Price3a() {
    var quant = document.getElementById("Quantity3");

    if (quant.value.length == 0 || isNaN(quant.value)) {
        alert("Please enter a number for quantity.");
        quant.focus();
        quant.select();
        var prices3 = 0;
        var price = prices3.toFixed(2);
        document.getElementById("subPrice3").innerHTML = price;
        totalPrice();
        return false;
    }
    var quant3 = quant.value;

    var prices3 = quant3 * price_3a;
    var price = prices3.toFixed(2);
    document.getElementById("subPrice3").innerHTML = price;
    totalPrice();
}

function Price3b() {
    var quant = document.getElementById("Quantity3");

    if (quant.value.length == 0 || isNaN(quant.value)) {
        alert("Please enter a number for quantity.");
        quant.focus();
        quant.select();
        var prices3 = 0;
        var price = prices3.toFixed(2);
        document.getElementById("subPrice3").innerHTML = price;
        totalPrice();
        return false;
    }
    var quant3 = quant.value;

    var prices3 = quant3 * price_3b;
    var price = prices3.toFixed(2);
    document.getElementById("subPrice3").innerHTML = price;
    totalPrice();
}

function totalPrice() {
    
    var SubPrice1 = document.getElementById("subPrice1");
    var SubPrice2 = document.getElementById("subPrice2");
    var SubPrice3 = document.getElementById("subPrice3");

    toPrice = parseFloat(SubPrice1.innerHTML) + parseFloat(SubPrice2.innerHTML) + parseFloat(SubPrice3.innerHTML);

    var toPrice2 = toPrice.toFixed(2);
    document.getElementById("totalPrice3").innerHTML = toPrice2;
}

