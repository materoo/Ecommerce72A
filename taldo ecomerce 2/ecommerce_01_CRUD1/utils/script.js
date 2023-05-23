function darkMode() {
    var element = document.body;
    element.classList.toggle("dark-mode");
}


var currentImgIndex=0;
var ImgSrcArray = [ 
'img/light_mode.png',
'img/dark_mode.png'
];

function trocar(){

  if(currentImgIndex == ImgSrcArray.length)
  {
    currentImgIndex=0;
  }
  document.getElementById("img").src=ImgSrcArray[currentImgIndex];
    currentImgIndex++;

}

var currentImgIndex2=0;
var ImgSrcArray2 = [
'../img/light_mode.png',
'../img/dark_mode.png'
];

function trocar2(){

  if(currentImgIndex2 == ImgSrcArray2.length)
  {
    currentImgIndex2=0;
  }
  document.getElementById("img").src=ImgSrcArray2[currentImgIndex2];
    currentImgIndex2++;

}