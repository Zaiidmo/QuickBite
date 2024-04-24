// Declare cartItems using let instead of const
let cartItems = [];

// Function to store cart items in localStorage
function storeCartItems() {
    localStorage.setItem('cartItems', JSON.stringify(cartItems));
}

// Function to retrieve cart items from localStorage
function retrieveCartItems(itemPriceSpans) {
    const storedItems = localStorage.getItem('cartItems');
    if (storedItems) {
        cartItems = JSON.parse(storedItems);
        renderCart(); // Render the cart items after retrieving them
        calculateTotalPrice(itemPriceSpans);
        attachButtonEventListeners();
        attachItemRemoveEventListeners(); 
        populateForm();
    }
}

// Function to clear cart items from storage
function clearStoredCartItems() {
    localStorage.removeItem('cartItems');
}

// Call retrieveCartItems when the page loads to populate the cart
window.addEventListener('DOMContentLoaded', () => {
    const itemPriceSpans = document.querySelectorAll('.itemPrices');
    retrieveCartItems(itemPriceSpans);
});


// Function to calculate the total price
function calculateTotalPrice(itemPriceSpans) {
    // console.log('Being Calculated :::');
    let totalPrice = 0;
    itemPriceSpans.forEach(priceSpan => {
        totalPrice += parseFloat(priceSpan.textContent);
    });
    if (isNaN(totalPrice)) { 
        totalPrice = 0;
    }
    const total = totalPrice.toFixed(2);
    document.getElementById('total').textContent = `${totalPrice} $`;
}

// Function to remove an item from the cartItems array
function removeItem(index, itemPriceSpans) {
    cartItems.splice(index, 1);
    storeCartItems();
    renderCart();
    attachButtonEventListeners();
    attachItemRemoveEventListeners(); 
    calculateTotalPrice(itemPriceSpans);
    populateForm();
}

// Function to update prices
function updatePrices(index, quantity) {
    const originalPrice = originalPrices[index];
    const totalPrice = quantity * originalPrice;
    itemPriceSpans[index].textContent = totalPrice;
    calculateTotalPrice(itemPriceSpans); // Calculate total after updating prices
}

// Event listener to handle item removal
function attachItemRemoveEventListeners() {
    const removeButtons = document.querySelectorAll('.item-remove');
    removeButtons.forEach((removeButton, index) => {
        removeButton.addEventListener('click', () => {
            removeItem(index, itemPriceSpans);
        });
    });
}

// Function to attach event listeners to plus and minus buttons
function attachButtonEventListeners() {
    const plusButtons = document.querySelectorAll('.plus');
    const minusButtons = document.querySelectorAll('.minus');
    const numberInputs = document.querySelectorAll('.num');
    const itemPriceSpans = document.querySelectorAll('.itemPrices');
    
    // Define originalPrices here
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
        updatePrices(index, currentQuantity, originalPrices); // Pass originalPrices as an argument
    }

    // Function to update prices
    function updatePrices(index, quantity, originalPrices) {
        const originalPrice = originalPrices[index];
        const totalPrice = quantity * originalPrice;
        itemPriceSpans[index].textContent = totalPrice;
        calculateTotalPrice(itemPriceSpans); // Calculate total after updating prices
    }
}
// Add Item To Cart
const addToCartButtons = document.querySelectorAll('.add-to-cart');
const itemsContainer = document.getElementById('items');
// const cartItems = []; // Remove this line to declare cartItems using let
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
            calculateTotalPrice(itemPriceSpans); // Calculate total after adding an item
            renderCart();
            storeCartItems();
            attachButtonEventListeners();
            attachItemRemoveEventListeners(); 
            populateForm();
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

    if (cartItems.length === 0) {
        itemsContainer.innerHTML = `
                    <div class="flex flex-col gap-4 items-center">
                        <h1 class="text-4xl font-bold font-passero text-center text-white ">
                            Your Cart is Empty
                        </h1>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full text-secondary" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M22.73 22.73L1.27 1.27L0 2.54l4.39 4.39l2.21 4.66l-1.35 2.45c-.16.28-.25.61-.25.96a2 2 0 0 0 2 2h7.46l1.38 1.38c-.5.36-.84.95-.84 1.62a2 2 0 0 0 2 2c.67 0 1.26-.33 1.62-.84L21.46 24zM7.42 15a.25.25 0 0 1-.25-.25l.03-.12l.9-1.63h2.36l2 2zm8.13-2c.75 0 1.41-.41 1.75-1.03l3.58-6.47c.08-.16.12-.33.12-.5a1 1 0 0 0-1-1H6.54zM7 18a2 2 0 0 0-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2" />
                        </svg>
                        <a href="/meals"
                            class="inline-block rounded-full border-4 hover:text-black border-secondary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-yellow-200  focus:text-white focus:outline-none focus:ring-0 active:text-white motion-reduce:transition-none">
                            Discover Meals
                        </a>
                    </div>
                </div>`;
        //Hide the buttom of the cart
        document.getElementById('bottomCart').classList.add('hidden');
    } else {
        cartItems.forEach(item => {
        itemsContainer.innerHTML += `
        <div id="item" class="w-full">
        <div
            class="bg-component gap-4 lg:gap-0 p-2 shadow-lg rounded-2xl flex items-start lg:items-center md:justify-between flex-col md:flex-row">
            <div class="w-full flex justify-between">
                <div class="flex w-fit gap-2 justify-between items-center">
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
                        <span class="num text-base border-x px-2">0</span>
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
        </div>
        `;
        });
        //Display the buttom of the cart
        document.getElementById('bottomCart').classList.remove('hidden');
        }
    
}

// Function to attach event listener for clearing the cart
document.getElementById('clear-cart').addEventListener('click', clearCart);

// Function to clear the cart
function clearCart() {
    cartItems.length = 0;
    storeCartItems();
    renderCart();  
    document.getElementById('total').textContent = '0.00 $';
    calculateTotalPrice(itemPriceSpans); 
}
function populateForm() {
    const form = document.getElementById('form-inputs');
    form.innerHTML = '';

    cartItems.forEach(item => {
        // Create hidden input elements
        const nameInput = document.createElement('input');
        nameInput.type = 'hidden';
        nameInput.name = 'names[]';
        nameInput.value = item.name;

        const priceInput = document.createElement('input');
        priceInput.type = 'hidden';
        priceInput.name = 'prices[]';
        priceInput.value = item.price;

        // Append input elements to the form
        form.appendChild(nameInput);
        form.appendChild(priceInput);
    });
}

function handleSubmit() {
    clearCart();
}

function addFromSinglePage() {
        // console.log('haha');
    const item = {
        name: document.getElementById('item-name').innerHTML,
        price: document.getElementById('item-price').innerHTML,
        image: document.getElementById('item-image').src,
        restaurant: document.getElementById('item-restaurant').innerHTML,    
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
        let totalPrice = parseFloat(`${item.price}`);
        calculateTotalPrice(itemPriceSpans); // Calculate total after adding an item
        renderCart();
        storeCartItems();
        attachButtonEventListeners();
        attachItemRemoveEventListeners(); 
        populateForm();
    } else {
        window.Notification.requestPermission().then(function (permission) {
            if (permission === 'granted') {
                var notification = new Notification('Meal Already Exists', {
                    body: `${item.name} already exists in your cart`,
                });                   
            }
        });
    }
}

if(document.getElementById('add-single-item')) {
    document.getElementById('add-single-item').addEventListener('click', addFromSinglePage);

}
