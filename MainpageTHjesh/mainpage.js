var i = 0;
var imgArray = [
"/Users/apple/Desktop/projektifinal/Main page/intestellar23.jpeg",
"/Users/apple/Desktop/projektifinal/Main page/batman23.jpeg",
"/Users/apple/Desktop/projektifinal/Main page/avatar23.jpeg",
"/Users/apple/Desktop/projektifinal/Main page/moonfall23.jpeg",
"/Users/apple/Desktop/projektifinal/Main page/starwars23.jpeg"

];
function ndrroImg() {
document.getElementById('slideshow').src = imgArray[i];
if (i < imgArray.length - 1) {
i++;
} else {
      i = 0;
}
setTimeout("ndrroImg()", 2600)
}
document.body.addEventListener('load', ndrroImg());

