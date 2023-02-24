<!DOCTYPE html>
<html>
<head>
    
    <title>Movies</title>
    <link rel="stylesheet" href="cssmov.css?v=<?php echo time(); ?>">
</head>
      <body style="background-color:#181818;">
          <div class="navbar">
              <div class="navbar-container">
                  <div class="logo-container">
                      <h1 class="logo">WEBMOVIE</h1>
                  </div>
                  <div class="menu-container">
                      <ul class="menu-list">
                      <form action="../Main page/index1.php">
                           <li class="menu-list-item active"><button class="seriale">Home</button></li>
                          </form>
                          <form action="../Movies/movies.php" >
                          <li class="menu-list-item" ><button class="seriale">Movies</button></li>
                        </form>
                          <form action="../Series/series.php">
                          <li class="menu-list-item"><button class="seriale">Series</button></li>
                          </form>
                          <form action="../About us/aboutus.php">
                          <li class="menu-list-item" ><button class="seriale">About us</button></li>
                        </form>
                       
                          
                           


            
      
                      </ul>
                  </div>
                  <input  id="tea" ;type="text"placeholder="Kerko.." name="search">
                  <button id="butoni2" ><img src="./searchpurple.png" id="avatar2"></button>
                  <form action="../profili/profilii.php">
                  <button id="butoni"> <img  src="./avatar test.webp" id="avatar"></button>
                  </form>
                  <form action="../watchlater/watchlater.php">
                  <button id="butoni3"><img src="watchlater.webp" id="avatar4"></button>
                  <form>
              </div>
          </div>
        
      <div id="filmat">
             <div class="movie-list-item">
              <img class="movie-list-item-img" src="./romance films.jpeg" >
              <span class="movie-list-item-title">Romance Movies</span>
              <form action="../Comingsoon/comingsoon.php">
                <button class="movie-list-item-button">Watch</button>
                 </form>
          </div>
          <div class="movie-list-item">
              <img class="movie-list-item-img" src="./horrorfilms.webp" >
              <span class="movie-list-item-title">Horror Movies</span>
             
              <form action="../Comingsoon/comingsoon.php">
                <button class="movie-list-item-button">Watch</button>
                 </form>
          </div>
          <div class="movie-list-item">
            <img class="movie-list-item-img" src="./action films.jpeg">
            <span class="movie-list-item-title">Action Movies</span>
            <form action="../Comingsoon/comingsoon.php">
              <button class="movie-list-item-button">Watch</button>
               </form>
        </div>
      </div>
      <div id="filmat2">
       
          <div class="movie-list-item">
              <img class="movie-list-item-img" src="./comedy. filma.jpeg">
              <span class="movie-list-item-title">Comedy Movies</span>
              <form action="../Comingsoon/comingsoon.php">
                <button class="movie-list-item-button">Watch</button>
                 </form>
          </div>
       
        
        
          <div class="movie-list-item">
            <img class="movie-list-item-img" src="./history filma.jpeg">
            <span class="movie-list-item-title">History Movies</span>
            <form action="../Comingsoon/comingsoon.php">
              <button class="movie-list-item-button">Watch</button>
               </form>
        </div>
        <div class="movie-list-item">
          <img class="movie-list-item-img" src="./1fbf8a548f08a37a28a8b81c7fdbd1a71f-12-documentaries-of-century.2x.h473.w710.webp">
          <span class="movie-list-item-title">Documentary</span>
          <form action="../Comingsoon/comingsoon.php">
            <button class="movie-list-item-button">Watch</button>
             </form>
      </div>

        </div>
              

         
             




</body>

</html>