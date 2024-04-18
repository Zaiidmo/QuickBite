function displayNavigator() {
    var navigator = document.getElementById("ScreenNavigator");
    navigator.classList.toggle('hidden');
}

document.getElementById("Hamburger").addEventListener("click", displayNavigator);

function displayCart() {
    console.log('clicked');
    var cart = document.getElementById("ScreenCart");
    cart.classList.toggle('hidden');
}

document.getElementById("Cart").addEventListener("click", displayCart);

