<html>
<head>
    <title>About us</title>
    <link rel="stylesheet" href="cssau.css?v=<?php echo time(); ?>">
 
</head>
<body style="background-color:blueviolet">
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
                  <form action="../About us/form.php">
                  <li class="menu-list-item" ><button class="seriale">About us</button></li>
                </form>
                 

              </ul>
          </div>
          <input  id="tea" ;type="text" placeholder="Kerko.." name="search">
  <button id="butoni2" ><img src="./searchpurple.png" id="avatar2"></button>
<form>
                <button id="butoni3"><img src="watchlater.webp" id="avatar4"></button>
</form>
</div>
              
</div>
</div>
    <div class="contactform">
        <h3 id="kontaktoni">Na kontaktoni</h3>
        <form action="form-process.php" method="POST">
        
                <label for="firstname">Emri:</label>
                <input placeholder="Shkruani emrin tuaj"type="text" name="firstname" id="firstname" class="kushtet" required>
   
            <br>
  
                <label for="lastname">Mbiemri:</label>
                <input placeholder="Shkruani mbiemrin tuaj " type="text" name="lastname" id="lastname" class="kushtet" required>
        
            <br>
         
                <label for="phone">Nrtel:</label>
                <input placeholder="Shkruani numrin e telefonit" type="tel" name="phone" id="phone" class="kushtet" required>
            
            <br>
            
                <label for="email">Email:</label>
                <input placeholder="Shkruani emailen tuaj " type="email" name="email" id="email" class="kushtet" required>
            
            <br>
        
                <label for="message">Mesazh:</label>
                <input type="text" name="message" id="message" class="kushtet" placeholder="Shkruani nje mesazh" required>
            
       
        <button class="submit" type="submit">Klikoni Ketu</button>
        
    </div>
        </form>
    </div>
    <div id="firstdiv">
    <p id="tekst2"><h1>
        WEBMOVIE është një faqe filmash me shërbime 24 orë ku mund të gjeni filmat, serialet dhe dokumentarët më të fundit.
        Faqja jonë mbulon një shumëllojshmëri filmash duke filluar nga zhanri horror,komedi,dramë,aksion,romancë dhe fantazi.
        Shërbimet tona janë falas për të gjithë dhe juve ju duhet vetëm të qaseni në llogarinë tuaj  për të pasur mundësinë e shikimit të filmave në cdo orë dhe në cdo moment të ditës! </h1></p>
        <br> 
   
    </div>
</body>

</html>