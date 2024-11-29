function toggleMenu() {
    var menu = document.getElementById('menu');
    if (menu.style.display === 'flex') {
        menu.style.display = 'none'; // Ocultar el menú
    } else {
        menu.style.display = 'flex'; // Mostrar el menú
    }
}
