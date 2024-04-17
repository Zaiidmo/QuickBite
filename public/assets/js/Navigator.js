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

// Quantity 

const plusButtons = document.querySelectorAll('.plus');
const minusButtons = document.querySelectorAll('.minus');
const number = document.querySelectorAll('.num');

var a = 1;

plusButtons.forEach(plusButton => {
    plusButton.addEventListener("click", () => {
        a++;
        // console.log(a);
        number.forEach(num => {
            num.innerHTML = a;
        });
    });
});

minusButtons.forEach(minusButton => {
    minusButton.addEventListener('click', () => {
        if (a > 0) {
            a--;
        } else { a = 0 }
        number.forEach(num => {
            num.innerHTML = a;
        });
    });
});