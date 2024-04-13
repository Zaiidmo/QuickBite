function displayNavigator() {
    var navigator = document.getElementById("ScreenNavigator");
    navigator.classList.toggle('hidden');
}

document.getElementById("Hamburger").addEventListener("click", displayNavigator);
