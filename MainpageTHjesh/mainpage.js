var i = 0;
var imgArray = [
      "/Applications/XAMPP/xamppfiles/htdocs/projektifaza2/Main page/batman23.jpeg",
      "/Applications/XAMPP/xamppfiles/htdocs/projektifaza2/Main page/starwars23.jpeg",
      "/Applications/XAMPP/xamppfiles/htdocs/projektifaza2/Main page/moonfall23.jpeg",
      "/Applications/XAMPP/xamppfiles/htdocs/projektifaza2/Main page/intestellar23.jpeg",
      "/Applications/XAMPP/xamppfiles/htdocs/projektifaza2/Main page/avatar23.jpeg"

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

