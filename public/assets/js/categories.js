function showModal(categoryId) {
    console.log(categoryId);
    var modal = document.getElementById("updatePopup-" + categoryId );
    if (modal) {
        modal.classList.remove("hidden");
    } else {
        console.error("Modal not found");
    }
}

function hideModal(categoryId) {
    var modal = document.getElementById("updatePopup-" + categoryId);
    if (modal) {
        modal.classList.add("hidden");
    } else {
        console.error("Modal not found");
    }
}

// Call this function to attach event listeners to the edit buttons
function attachEventListeners() {
    var editButtons = document.querySelectorAll(".update-category");
    editButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            var categoryId = button.getAttribute("data-category-id");
            showModal(categoryId);
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
            var categoryId = button.getAttribute("data-category-id");
            hideModal(categoryId);
        });
    });
});
