/*politicas*/
// Função para verificar se o menu deve ser alterado ao rolar a tela
function updateMenu() {
    const menu = document.getElementById('menu');
    if (window.scrollY > 0) {
      menu.classList.add('scrolled');
    } else {
      menu.classList.remove('scrolled');
    }
  }

// Função para troca de cor do menu
const menuItems = document.querySelectorAll('.menu li a', '.menu.scrolled li a');

menuItems.forEach(item => {
item.addEventListener('click', () => {
    menuItems.forEach(item => item.classList.remove('active'));
    item.classList.add('active');
});
});


// Função para fazer a troca da logo no header
const logo = document.getElementById('logo');
const scrollThreshold = 5; // Defina aqui a posição de rolagem em que a mudança ocorrerá

window.addEventListener('scroll', () => {
  if (window.scrollY > scrollThreshold) {
    logo.src = '..//img/fb_black.png'; // Substitua pelo caminho correto da imagem da logo preta
  } else {
    logo.src = '..//img/fb_white.png'; // Substitua pelo caminho correto da imagem da logo branca
  }
});



//Abrir e fechar o menu hamburguer
var hamburguer = document.querySelector(".hamburguer");
hamburguer.addEventListener("click", function(){
    document.querySelector(".container").classList.toggle("show-menu");
});