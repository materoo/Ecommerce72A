function darkMode() {
    var element = document.body;
    element.classList.toggle("dark-mode");
}


var currentImgIndex=0;
var ImgSrcArray = [ //caminho das suas imgs aqui
'imagens/light_mode.png',
'imagens/dark_mode.png'
];

function trocar(){

  if(currentImgIndex == ImgSrcArray.length) //reseta quando o contatador for igual ao tamanho da array e volta a 1° img
  {
    currentImgIndex=0;
  }
  document.getElementById("img").src=ImgSrcArray[currentImgIndex]; //altera a img do elemento "agni" de acordo com o indice
    currentImgIndex++; // incrementa a nossa referencia

}