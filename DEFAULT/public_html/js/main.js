function remove_loader() {
    var loader = document.getElementById('loader');
    loader.classList.remove('loader');
    var contenedor = document.getElementById('contenedor');
    contenedor.style.display = 'block';
};

function view_loader() {
    var loader = document.getElementById('loader');
    loader.classList.add('loader');
    var contenedor = document.getElementById('contenedor');
    contenedor.style.display = 'none';
};