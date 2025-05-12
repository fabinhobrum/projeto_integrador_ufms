/*popup*/
// Função para abrir o popup
function openPopup() {
    window.open("popup.html", "Popup", "width=400,height=300");
  }
  
  // Adiciona um ouvinte de evento ao botão para abrir o popup
  var openButton = document.getElementById("openPopupButton");
  openButton.addEventListener("click", openPopup);


//Função fecha janela  
function fecharJanelaAutomaticamente() {
    setTimeout(function () {
        window.close();
    }, 3000); // 3000 milissegundos = 3 segundos
}

