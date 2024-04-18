// Quantity 
const plusButtons = document.querySelectorAll('.plus');
const minusButtons = document.querySelectorAll('.minus');
const number = document.querySelectorAll('.num');

// Initial price
const itemPriceSpans = document.querySelectorAll('.itemPrices');
const originalPrices = Array.from(itemPriceSpans).map(priceSpan => parseFloat(priceSpan.textContent));

plusButtons.forEach(plusButton => {
    plusButton.addEventListener("click", () => {
        updateQuantity(1);
    });
});

minusButtons.forEach(minusButton => {
    minusButton.addEventListener('click', () => {
        updateQuantity(-1);
    });
});

function updateQuantity(change) {
    let currentQuantity = parseInt(number[0].innerHTML) + change;
    currentQuantity = Math.max(0, currentQuantity); // Ensure quantity doesn't go below 0
    number.forEach(num => {
        num.innerHTML = currentQuantity;
    });

    // Update prices
    updatePrices(currentQuantity);
}

function updatePrices(quantity) {
    itemPriceSpans.forEach((priceSpan, index) => {
        const originalPrice = originalPrices[index];
        const totalPrice = quantity * originalPrice;
        priceSpan.textContent = totalPrice;
    });
}

// JavaScript 
const cart = []; // Array to store items in the cart
const checkoutBtn = document.getElementById("checkoutBtn");
const totalPriceSpan = document.getElementById("price");

// Function to add an item to the cart
function addItemToCart(item) {
    const existingItem = cart.find(cartItem => cartItem.name === item.name);
    if (existingItem) {
        existingItem.quantity++;
    } else {
        cart.push({ ...item, quantity: 1 });
    }
    updateCartDisplay();
}

// Function to update the cart display
function updateCartDisplay() {
    const itemsContainer = document.getElementById("items");
    itemsContainer.innerHTML = ""; // Clear existing items

    let totalPrice = 0;

    cart.forEach(item => {
        const itemDiv = document.createElement("div");
        itemDiv.classList.add("bg-component", "gap-4", "p-6", "shadow-lg", "rounded-full", "flex", "items-start", "flex-col", "md:flex-row");

        const itemInfoDiv = document.createElement("div");
        itemInfoDiv.classList.add("flex", "gap-2", "justify-between");

        const itemImage = document.createElement("img");
        itemImage.classList.add("shadow", "sm:w-12", "sm:h-12", "w-14", "h-14", "rounded-full", "bg-gray-100");
        itemImage.src = item.imageSrc; // Set item image source
        itemImage.alt = "Avatar";

        const itemDetailsDiv = document.createElement("div");
        const itemName = document.createElement("h1");
        itemName.classList.add("text-xl", "font-medium", "text-white");
        itemName.textContent = item.name; // Set item name
        const restaurantName = document.createElement("p");
        restaurantName.classList.add("text-gray-400");
        restaurantName.textContent = item.restaurant; // Set restaurant name

        itemDetailsDiv.appendChild(itemName);
        itemDetailsDiv.appendChild(restaurantName);

        itemInfoDiv.appendChild(itemImage);
        itemInfoDiv.appendChild(itemDetailsDiv);

        const quantityDiv = document.createElement("div");
        quantityDiv.classList.add("flex", "justify-between", "items-center", "gap-8");

        const inputGroupDiv = document.createElement("div");
        inputGroupDiv.classList.add("input", "max-w-48", "w-fit", "font-extrabold", "text-white", "py-2", "px-3", "border-2", "border-secondary", "rounded-full", "bg-primary", "text-center", "flex", "justify-evenly", "items-center");

        const minusBtn = document.createElement("button");
        minusBtn.classList.add("minus", "bg-transparent", "px-2", "py-0", "text-2xl");
        minusBtn.textContent = "-";
        minusBtn.addEventListener("click", () => decreaseQuantity(item));
        
        const quantitySpan = document.createElement("span");
        quantitySpan.classList.add("num", "text-lg", "border-x", "px-2");
        quantitySpan.textContent = item.quantity;

        const plusBtn = document.createElement("button");
        plusBtn.classList.add("plus", "bg-transparent", "px-2", "py-0", "text-2xl");
        plusBtn.textContent = "+";
        plusBtn.addEventListener("click", () => increaseQuantity(item));

        inputGroupDiv.appendChild(minusBtn);
        inputGroupDiv.appendChild(quantitySpan);
        inputGroupDiv.appendChild(plusBtn);

        const priceSpan = document.createElement("span");
        priceSpan.classList.add("bg-secondary", "hover:opacity-75", "text-black", "font-poppins", "rounded-full", "px-4", "py-2");
        priceSpan.textContent = `${item.price * item.quantity} $`;

        quantityDiv.appendChild(inputGroupDiv);
        quantityDiv.appendChild(priceSpan);

        itemDiv.appendChild(itemInfoDiv);
        itemDiv.appendChild(quantityDiv);

        itemsContainer.appendChild(itemDiv);

        totalPrice += item.price * item.quantity;
    });

    totalPriceSpan.textContent = `${totalPrice} $`;
}
