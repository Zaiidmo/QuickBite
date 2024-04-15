function showModal(restaurantId) {
    console.log(restaurantId);
    var modal = document.getElementById("updatePopup-" + restaurantId );
    if (modal) {
        modal.classList.remove("hidden");
    } else {
        console.error("Modal not found");
    }
}

function hideModal(restaurantId) {
    var modal = document.getElementById("updatePopup-" + restaurantId);
    if (modal) {
        modal.classList.add("hidden");
    } else {
        console.error("Modal not found");
    }
}

// Call this function to attach event listeners to the edit buttons
function attachEventListeners() {
    var editButtons = document.querySelectorAll(".update-restaurant");
    editButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            var restaurantId = button.getAttribute("data-restaurant-id");
            showModal(restaurantId);
        });
    });
}

// Call the function to attach event listeners when the DOM is loaded
document.addEventListener("DOMContentLoaded", function() {
    attachEventListeners();
});

document.addEventListener("DOMContentLoaded", function() {
    // Get all the close buttons in the modals
    var closeButton = document.querySelectorAll(".popup-close");
    
    // Attach event listeners to each close button
    closeButton.forEach(function(button) {
        button.addEventListener("click", function() {
            var restaurantId = button.getAttribute("data-restaurant-id");
            hideModal(restaurantId);
        });
    });
});
