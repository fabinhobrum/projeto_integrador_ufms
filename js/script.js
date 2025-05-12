/*script*/
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
    logo.src = 'img/fb_black.png'; // Substitua pelo caminho correto da imagem da logo preta
  } else {
    logo.src = 'img/fb_white.png'; // Substitua pelo caminho correto da imagem da logo branca
  }
});


// Função para trocar a frase a cada 5 segundos
function changeText() {
  const textContainer = document.getElementById('textContainer');
  textContainer.style.opacity = '0'; // Tornar o texto transparente

  setTimeout(() => {
    if (textContainer.textContent === 'Desenvolvimento Web') {
      textContainer.textContent = 'Programação Front End, HTML, CSS, JS';              
    } else if (textContainer.textContent === 'Programação Front End, HTML, CSS, JS') {
      textContainer.textContent = 'Foto, Filmagem e Edição Grafica';
    } else {
      textContainer.textContent = 'Desenvolvimento Web';
    }

    textContainer.style.opacity = '1'; // Tornar o texto visível novamente

    setTimeout(changeText, 5000); // Chamar a função novamente após 5 segundos
  }, 1000); // Tempo da transição (1 segundo)
}


//Função aplicar mascara ao compo de telefone/celular
function aplicarMascaraCelular() {
  var celularInput = document.getElementById("celular");
  var celularMask = IMask(celularInput, {mask: "(00) 00000-0000"});
}


//Função para validar campo de email
function validateEmail(input) {
  const email = input.value;
  const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  const emailError = document.getElementById('email-error');

  if (emailPattern.test(email)) {
      emailError.textContent = '';
      input.setCustomValidity('');
  } else {
      emailError.textContent = 'Digite um e-mail válido.';
      input.setCustomValidity('Digite um e-mail válido.');
      input.focus(); // Focar novamente no campo de e-mail
      
  }
}


//Abrir e fechar o menu hamburguer
var hamburguer = document.querySelector(".hamburguer");
hamburguer.addEventListener("click", function(){
    document.querySelector(".container").classList.toggle("show-menu");
});


