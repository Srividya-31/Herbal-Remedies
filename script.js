document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('menu-toggle').addEventListener('click', toggleMenu);
});

function toggleMenu() {
    var menuContainer = document.getElementById('menu-container');
    var content = document.getElementById('content');

    if (menuContainer.style.width === '250px') {
        menuContainer.style.width = '0';
        content.style.marginLeft = '0';
    } else {
        menuContainer.style.width = '250px';
        content.style.marginLeft = '250px';
    }
}

function loadPage(page) {
    document.getElementById('pageFrame').src = page;

    
}
