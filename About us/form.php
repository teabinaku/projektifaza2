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
  <form action="../watchlater/index.php">
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
        WEBMOVIE ??sht?? nj?? faqe filmash me sh??rbime 24 or?? ku mund t?? gjeni filmat, serialet dhe dokumentar??t m?? t?? fundit.
        Faqja jon?? mbulon nj?? shum??llojshm??ri filmash duke filluar nga zhanri horror,komedi,dram??,aksion,romanc?? dhe fantazi.
        Sh??rbimet tona jan?? falas p??r t?? gjith?? dhe juve ju duhet vet??m t?? qaseni n?? llogarin?? tuaj  p??r t?? pasur mund??sin?? e shikimit t?? filmave n?? cdo or?? dhe n?? cdo moment t?? dit??s! </h1></p>
        <br> 
   
    </div>
</body>

</html>