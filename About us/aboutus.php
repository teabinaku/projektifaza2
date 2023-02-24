
<!DOCTYPE html>
<html>
<head>
  
    <title>About us/Contact us</title>
    
    <link rel="stylesheet" href="cssau.css">
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
                    <form action="../About us/aboutus.php">
                    <li class="menu-list-item" ><button class="seriale">About us</button></li>
                  </form>
                   

                </ul>
            </div>
            <input  id="tea" ;type="text" placeholder="Kerko.." name="search">
    <button id="butoni2" ><img src="./searchpurple.png" id="avatar2"></button>
    <form action="../profili/profilii.php">
    <button id="butoni"> <img  src="./avatar test.webp" id="avatar"></button>
    <form action="../watchlater/index.php">
                  <button id="butoni3"><img src="watchlater.webp" id="avatar4"></button>
                  <form>
 

                  </div>
               
            </div>


  <div id = "contactform">
      <h3 style="color: blueviolet ;font-size: xx-large;  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"> Contact form </h3>
         <label class="font"> Emri :</label>
         <input type ="text" id = "name"  placeholder="Shkruani emrin tuaj">
         <br> <br>
         <label class="font"> Mbiemri :</label>
         <input type = "text" id = "surname" placeholder="Shkruani mbiemrin tuaj ">
         <br> <br>
         <label class="font"> Shteti :</label>
         <select id = "country" name = "country">
           <option value = "Kosova"> Kosova </option>
           <option value = "Albania"> Albania </option> 
           <option value = "Albania"> Germany </option> 
           <option value = "Albania"> France </option> 
           <option value = "Albania"> Swizerland </option> 
           <option value = "Albania"> Macedonia</option> 
         </select>
         <br> <br>
         <label class="font" >Email adresa: </label>
         <input type = "email" id = "email" placeholder="Shkruani email-in tuaj">
         <br> <br>
         
      <textarea id ="subject"  name ="subject" placeholder="Shkruani nje mesazh" style=" color:palevioletred; height:50px;"></textarea>
      <br> <br>  <br> <br>
        <button id ="submit"  onclick="auth(event)"  type = "button" onclick="validoLogin()"> Submit </button>
     </div>
   

     <div id="firstdiv">
    <p id="tekst2"><h1>
        WEBMOVIE është një faqe filmash me shërbime 24 orë ku mund të gjeni filmat, serialet dhe dokumentarët më të fundit.
        Faqja jonë mbulon një shumëllojshmëri filmash duke filluar nga zhanri horror,komedi,dramë,aksion,romancë dhe fantazi.
        Shërbimet tona janë falas për të gjithë dhe juve ju duhet vetëm të qaseni në llogarinë tuaj  për të pasur mundësinë e shikimit të filmave në cdo orë dhe në cdo moment të ditës! </h1></p>
        <br> 
   
    </div>


  

</body>
<script src="./aboujs.js">
    </script>

</html> 