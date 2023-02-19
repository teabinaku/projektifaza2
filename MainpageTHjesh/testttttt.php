<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.slider {
  width: 100%;
  overflow: hidden;
}

.slider ul {
  display: flex;
  list-style: none;
  margin: 0;
  padding: 0;
}

.slider li {
  flex: 1 0 0;
}

.slider img {
  width: 100%;
  height: auto;
  display: block;
}
</style>
</head>
<body>
<div class="slider">
  <ul>
    <?php
    $files = scandir("/Applications/XAMPP/xamppfiles/htdocs/projektifaza2/Main page/batman23.jpeg",
    "/Applications/XAMPP/xamppfiles/htdocs/projektifaza2/Main page/starwars23.jpeg",
    "/Applications/XAMPP/xamppfiles/htdocs/projektifaza2/Main page/moonfall23.jpeg",
    "/Applications/XAMPP/xamppfiles/htdocs/projektifaza2/Main page/intestellar23.jpeg",
    "/Applications/XAMPP/xamppfiles/htdocs/projektifaza2/Main page/avatar23.jpeg");
    foreach($files as $file) {
      if($file !== '.' && $file !== '..') {
        echo "<li><img src='images/$file'></li>";
      }
    }
    ?>
  </ul>
</div>
    
</body>
<script>
  $(document).ready(function() {
    $('.slider ul').slick({
      autoplay: true,
      autoplaySpeed: 3000,
      arrows: false,
      dots: true
    });
  });
</script>
</html>