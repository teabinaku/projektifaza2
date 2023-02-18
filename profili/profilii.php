<?php
if(isset($_POST['home'])){
    header('Location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profili</title>
    <link rel="stylesheet" href="profilicss.css">
</head>
<body style="background-color: blueviolet;">
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <h1 class="logo">WEBMOVIE</h1>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                <form method="post" action="new_page.php">
                     <li class="menu-list-item active"><button class="seriale" >Home</button></li>
                         </form>
                    <form action="movies.php" >
                    <li class="menu-list-item" ><button class="seriale">Movies</button></li>
                  </form>
                    <form action="series.php">
                    <li class="menu-list-item"><button class="seriale">Series</button></li>
                    </form>
                    <form action="aboutus.php">
                    <li class="menu-list-item" ><button class="seriale">About us</button></li>
                  </form>
                   

                </ul>
            </div>
            <input  id="tea" ;type="text"placeholder="Kerko.." name="search">
                  <button id="butoni2" ><img src="./searchpurple.png" id="avatar2"></button>
                  <form action="profili.php">
                  <button id="butoni"> <img  src="./avatar test.webp" id="avatar"></button>
                  </form>

                </div>
               
            </div>
        </div>
    </div>
    <div id="divipar">
        <img src="./User-Avatar-Profile-Transparent-Isolated-PNG.png" id="avatar3">
        
      <div id="dividyt">
            <span class="info">Username:</span>
            <span class="info">Emri:</span>
            <span class="info">Mbiemri:</span>
            <span class="info">Email:</span>
            <span class="info">Age:</span>
            <span class="info">Shteti:</span>
            <span class="info">Nr.tel:</span>
        </div>
            
  



    </div>
   

    
</body>
</html>