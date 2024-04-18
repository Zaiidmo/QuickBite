// Add Item To Cart
const addToCartButtons = document.querySelectorAll('.add-to-cart');
const itemsContainer = document.getElementById('items');
const cartItems = [];

addToCartButtons.forEach(addToCartButton => {
    addToCartButton.addEventListener('click', () => {
        const item = {
            name: addToCartButton.parentElement.parentElement.parentElement.querySelector('.meal-name').innerHTML,
            price: addToCartButton.parentElement.parentElement.parentElement.querySelector('.meal-price').innerHTML,
            image: addToCartButton.parentElement.parentElement.parentElement.querySelector('.meal-image').src,
            restaurant: addToCartButton.parentElement.parentElement.parentElement.querySelector('.meal-restaurant').innerHTML
        };

        if (!mealExistsInCart(item)) {
            cartItems.push(item);
            window.Notification.requestPermission().then(function (permission) {
                if (permission === 'granted') {
                    var notification = new Notification('Meal added to cart', {
                        body: `${item.name} has been added to your cart`,
                        icon: `${item.image}`
                    });
                }
            });
        } else {
            window.Notification.requestPermission().then(function (permission) {
                if (permission === 'granted') {
                    var notification = new Notification('Meal Already Exists');                   
                }
            });
            }
        // Render items in the cart
        renderCart();
        attachButtonEventListeners();
    });
});

// Function to check if a meal already exists in the cartItems array
function mealExistsInCart(meal) {
    return cartItems.some(item => item.name === meal.name && item.restaurant === meal.restaurant);
}

// Function to render items in the cart
function renderCart() {
    itemsContainer.innerHTML = '';
    cartItems.forEach(item => {
        itemsContainer.innerHTML += `
        <div id="item">
        <div
            class="bg-component gap-4 lg:gap-0 p-6 shadow-lg rounded-full flex items-start lg:items-center md:justify-between flex-col md:flex-row">
            <div class="flex  gap-2 justify-between">
                <div class=""> <img class="shadow sm:w-12 sm:h-12 w-14 h-14 rounded-full bg-gray-100" src="${item.image}"
                        alt="Avatar" />
                </div>
                <div>
                    <h1 class="text-xl font-medium text-white">${item.name}</h1>
                    <p class="text-gray-400">${item.restaurant}</p>
                </div>
            </div>
    
            <!-- Input Number -->
            <div class="flex justify-between items-center gap-8">
                <div
                    class=" input max-w-48 w-fit font-extrabold text-white py-2 px-3 border-2 border-secondary rounded-full bg-primary text-center flex justify-evenly items-center">
                    <button class="minus bg-transparent px-2 py-0 text-2xl">-</button>
                    <span class="num text-lg border-x px-2">01</span>
                    <button class="plus bg-transparent px-2 py-0 text-2xl">+</button>
                </div>
    
                <span class=" bg-secondary hover:opacity-75 text-black font-poppins rounded-full px-4 py-2">
                    <span class="itemPrices">
                        ${item.price}
                    </span>
                    $
                </span>
            </div>
        </div>
        </div>
        `;
    });
}


// Function to attach event listeners to plus and minus buttons
function attachButtonEventListeners() {
    const plusButtons = document.querySelectorAll('.plus');
    const minusButtons = document.querySelectorAll('.minus');
    const numberInputs = document.querySelectorAll('.num');
    const itemPriceSpans = document.querySelectorAll('.itemPrices');
    const originalPrices = Array.from(itemPriceSpans).map(priceSpan => parseFloat(priceSpan.textContent));

    plusButtons.forEach((plusButton, index) => {
        plusButton.addEventListener("click", () => {
            updateQuantity(index, 1);
        });
    });

    minusButtons.forEach((minusButton, index) => {
        minusButton.addEventListener('click', () => {
            updateQuantity(index, -1);
        });
    });

    // Function to update quantity
    function updateQuantity(index, change) {
        let currentQuantity = parseInt(numberInputs[index].textContent) + change;
        currentQuantity = Math.max(1, currentQuantity);
        numberInputs[index].textContent = currentQuantity;
        updatePrices(index, currentQuantity);
    }

    // Function to update prices
    function updatePrices(index, quantity) {
        const originalPrice = originalPrices[index];
        const totalPrice = quantity * originalPrice;
        itemPriceSpans[index].textContent = totalPrice;
        calculateTotalPrice();
    }


    // Function to calculate the total price
    function calculateTotalPrice() {
    let totalPrice = 0;
    itemPriceSpans.forEach(priceSpan => {
        totalPrice += parseFloat(priceSpan.textContent);
    });
    const total = totalPrice.toFixed(2);
    document.getElementById('total').textContent = `${total} $`; 
    }

}

function clearCart() {
    const clearer = document.getElementById('clear-cart');
    clearer.addEventListener('click', () => {
        console.log('cart cleared');
        renderCart();
        calculateTotalPrice();
    });
}



