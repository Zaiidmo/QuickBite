function displayNavigator() {
    var navigator = document.getElementById("ScreenNavigator");
    navigator.classList.toggle('hidden');
}

document.getElementById("Hamburger").addEventListener("click", displayNavigator);

function displayCart() {
    // console.log('clicked');
    var cart = document.getElementById("ScreenCart");
    cart.classList.toggle('hidden');
    const navbar = document.getElementById("navbar");
    navbar.classList.toggle('lg:mx-auto');
    navbar.classList.toggle('w-1/2');
}

document.getElementById("Cart").addEventListener("click", displayCart);

