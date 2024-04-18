// Function to calculate the total price
function calculateTotalPrice(itemPriceSpans, totalPrice) {
    itemPriceSpans.forEach(priceSpan => {
        totalPrice += parseFloat(priceSpan.textContent);
    });
    if (isNaN(totalPrice)) { 
        totalPrice = 0;
    }
    const total = totalPrice.toFixed(2);
    document.getElementById('total').textContent = `${totalPrice} $`;
}

// Event listener to handle item removal
function attachItemRemoveEventListeners() {
    const removeButtons = document.querySelectorAll('.item-remove');
    removeButtons.forEach((removeButton, index) => {
        removeButton.addEventListener('click', () => {
            removeItem(index);
        });
    });
}



// Function to remove an item from the cartItems array
function removeItem(index) {
    cartItems.splice(index, 1);
    calculateTotalPrice(itemPriceSpans);
    renderCart();
    attachButtonEventListeners(); // Reattach event listeners for quantity adjustment
    attachItemRemoveEventListeners(); // Reattach event listeners after removing an item
}



// Add Item To Cart
const addToCartButtons = document.querySelectorAll('.add-to-cart');
const itemsContainer = document.getElementById('items');
const cartItems = [];
const itemPriceSpans = document.querySelectorAll('.itemPrices');

addToCartButtons.forEach(addToCartButton => {
    addToCartButton.addEventListener('click', () => { 
        const item = {
            name: addToCartButton.parentElement.parentElement.parentElement.querySelector('.meal-name').innerHTML,
            price: addToCartButton.parentElement.parentElement.parentElement.querySelector('.meal-price').innerHTML,
            image: addToCartButton.parentElement.parentElement.parentElement.querySelector('.meal-image').src,
            restaurant: addToCartButton.parentElement.parentElement.parentElement.querySelector('.meal-restaurant').innerHTML
        };
        const itemPriceSpans = document.querySelectorAll('.itemPrices');


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
            let totalPrice = parseFloat(`${item.price}`);
            // console.log(totalPrice);
            // Render items in the cart
            calculateTotalPrice(itemPriceSpans, totalPrice); // Pass itemPriceSpans as an argument
            renderCart();
            attachButtonEventListeners();
            attachItemRemoveEventListeners(); 
        } else {
            window.Notification.requestPermission().then(function (permission) {
                if (permission === 'granted') {
                    var notification = new Notification('Meal Already Exists', {
                        body: `${item.name} already exists in your cart`,
                    });                   
                }
            });
        }
    });
});


// Function to check if a meal already exists in the cartItems array
function mealExistsInCart(meal) {
    return cartItems.some(item => item.name === meal.name && item.restaurant === meal.restaurant);
}

// Function to render items in the cart
function renderCart() {
    const TOTAL = document.getElementById('total');
    itemsContainer.innerHTML = '';
    cartItems.forEach(item => {
        itemsContainer.innerHTML += `
        <div id="item" class="w-full">
        <div
            class="bg-component gap-4 lg:gap-0 p-2 shadow-lg rounded-2xl flex items-start lg:items-center md:justify-between flex-col md:flex-row">
            <div class="flex  gap-2 justify-between items-center">
                <div class=""> <img class="shadow sm:w-12 sm:h-12 w-10 h-10 rounded-full bg-gray-100" src="${item.image}"
                        alt="Avatar" />
                </div>
                <div>
                    <h1 class="text-l font-medium text-white">${item.name}</h1>
                    <p class="text-xs text-gray-400">${item.restaurant}</p>
                </div>
            </div>
    
            <!-- Input Number -->
            <div class="flex justify-between w-fit items-center gap-4">
                <div
                    class=" input max-w-48 w-fit font-extrabold text-white py-2 px-3 border-2 border-secondary rounded-full bg-primary text-center flex justify-evenly items-center">
                    <button class="minus bg-transparent px-2 py-0 ">-</button>
                    <span class="num text-base border-x px-2">1</span>
                    <button class="plus bg-transparent px-2 py-0 ">+</button>
                </div>
    
                <span class=" bg-secondary w-fit hover:opacity-75 text-black font-poppins rounded-full px-2 py-1">
                    <span class="itemPrices text-base">
                        ${item.price}
                    </span>
                </span>
                
                <button class="item-remove text-secondary inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class=" stroke-2 stroke-primary" width="22" height="30" viewBox="0 0 1216 1312"><path fill="currentColor" d="M1202 1066q0 40-28 68l-136 136q-28 28-68 28t-68-28L608 976l-294 294q-28 28-68 28t-68-28L42 1134q-28-28-28-68t28-68l294-294L42 410q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 294l294-294q28-28 68-28t68 28l136 136q28 28 28 68t-28 68L880 704l294 294q28 28 28 68"/></svg>
                </button>
                
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
        calculateTotalPrice(itemPriceSpans);
    }
}

document.getElementById('clear-cart').addEventListener('click', clearCart);

// Function to clear the cart
function clearCart() {
    cartItems.length = 0;
    renderCart();  
    document.getElementById('total').textContent = '0.00 $';
}

// Event listener to handle item removal
function attachItemRemoveEventListeners() {
    const removeButtons = document.querySelectorAll('.item-remove');
    removeButtons.forEach((removeButton, index, itemPriceSpans) => {
        removeButton.addEventListener('click', () => {
            removeItem(index,itemPriceSpans);
        });
    });
}

// Function to remove an item from the cartItems array
function removeItem(index, itemPriceSpans) {
    cartItems.splice(index, 1);
    renderCart();
    calculateTotalPrice(itemPriceSpans);
    attachItemRemoveEventListeners(); // Reattach event listeners after removing an item
}

