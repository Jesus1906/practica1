const formulario = document.getElementById('login');
const mensajes = document.getElementById('mensajes');
const button = document.getElementById('submit');

formulario.addEventListener('submit', (e) => {
    e.preventDefault();
    login_fetch();
});

function login_fetch() {
    let username = document.getElementById("user"),
        password = document.getElementById("password");

    if (username.value.trim() != '' && password.value.trim() != '') {
        let form_login = new FormData(formulario);
        fetch(base_url + "login/check_login", {
            method: 'POST',
            body: form_login,
        }).then(response => response.text()).then(data => {
            var data = JSON.parse(data);
            if (data.code == 200) {
                button.disabled = true;
                view_mensaje(data.code, data.mensaje);
                setTimeout(function () { window.location.href = base_url + "datos"; }, 1000);
            } else if (data.code == 407) {
                view_mensaje(data.code, data.mensaje);
            }
        }).catch(err => console.error(err));
    } else {
        view_mensaje(407, "Los campos no pueden estar vacios.");
    }
}

function view_mensaje(code, mensaje) {
    mensajes.style.display = 'block';
    mensajes.innerHTML = mensaje;
    if (code == 200) {
        if (mensajes.classList.contains('error')) {
            mensajes.classList.remove('error');
        }
        mensajes.classList.add('exito');
    } else if (code == 407) {
        if (mensajes.classList.contains('exito')) {
            mensajes.classList.remove('exito');
        }
        mensajes.classList.add('error');
    }
}