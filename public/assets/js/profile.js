function showModal(orderId) {
    console.log(orderId );
    var modal = document.getElementById("details-" + orderId );
    if (modal) {
        modal.classList.remove("hidden");
    } else {
        console.error("Modal not found");
    }
}

function hideModal(orderId) {
    var modal = document.getElementById("details-" + orderId);
    if (modal) {
        modal.classList.add("hidden");
    } else {
        console.error("Modal not found");
    }
}

// Call this function to attach event listeners to the edit buttons
function attachEventListeners() {
    var editButtons = document.querySelectorAll(".view-details");
    editButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            var orderId = button.getAttribute("data-placed-id");
            console.log(orderId);
            showModal(orderId);
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
            var orderId = button.getAttribute("data-placed-id");
            hideModal(orderId);
        });
    });
});
