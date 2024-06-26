function showModal(roleId) {
    var modal = document.getElementById("updatePopup-" + roleId );
    if (modal) {
        modal.classList.remove("hidden");
    } else {
        console.error("Modal not found");
    }
}

function hideModal(roleId) {
    var modal = document.getElementById("updatePopup-" + roleId);
    if (modal) {
        modal.classList.add("hidden");
    } else {
        console.error("Modal not found");
    }
}

// Call this function to attach event listeners to the edit buttons
function attachEventListeners() {
    var editButtons = document.querySelectorAll(".update-role");
    editButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            var roleId = button.getAttribute("data-role-id");
            showModal(roleId);
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
            var roleId = button.getAttribute("data-role-id");
            hideModal(roleId);
        });
    });
});


// Users Roles
function showModal(userId) {
    console.log(userId);
    var modal = document.getElementById("updateUserRole-" + userId );
    if (modal) {
        modal.classList.remove("hidden");
    } else {
        console.error("Modal not found");
    }
}

function hideModal(userId) {
    var modal = document.getElementById("modalCloser-" + userId);
    if (modal) {
        modal.classList.add("hidden");
    } else {
        console.error("Modal not found");
    }
}

// Call this function to attach event listeners to the edit buttons
function attachEventListeners() {
    var editButtons = document.querySelectorAll(".update-usersRole");
    editButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            var userId = button.getAttribute("data-user-id");
            showModal(userId);
        });
    });
}

// Call the function to attach event listeners when the DOM is loaded
document.addEventListener("DOMContentLoaded", function() {
    attachEventListeners();
});

document.addEventListener("DOMContentLoaded", function() {
    // Get all the close buttons in the modals
    var closeButton = document.querySelectorAll(".update-usersRole");
    
    // Attach event listeners to each close button
    closeButton.forEach(function(button) {
        button.addEventListener("click", function() {
            var userId = button.getAttribute("data-user-id");
            hideModal(userId);
        });
    });
});
