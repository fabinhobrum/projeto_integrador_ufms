/*cookies*/
var msgCookies = document.getElementById('cookies-msg');

function cookiesAceito() {
    localStorage.lgpdCookies = "aceito";
    msgCookies.classList.remove('mostrar');
}

if(localStorage.lgpdCookies == 'aceito'){
    msgCookies.classList.remove('mostrar');
}else {
    msgCookies.classList.add('mostrar');
}