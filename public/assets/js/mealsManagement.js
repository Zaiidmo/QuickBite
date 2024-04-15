function showModal(mealId) {
    console.log(mealId);
    var modal = document.getElementById("updatePopup-" + mealId );
    if (modal) {
        modal.classList.remove("hidden");
    } else {
        console.error("Modal not found");
    }
}

function hideModal(mealId) {
    var modal = document.getElementById("updatePopup-" + mealId);
    if (modal) {
        modal.classList.add("hidden");
    } else {
        console.error("Modal not found");
    }
}

// Call this function to attach event listeners to the edit buttons
function attachEventListeners() {
    var editButtons = document.querySelectorAll(".update-meal");
    editButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            var mealId = button.getAttribute("data-meal-id");
            showModal(mealId);
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
            var mealId = button.getAttribute("data-meal-id");
            hideModal(mealId);
        });
    });
});
