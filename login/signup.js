function auth(event) {
    event.preventDefault();

    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var nrtel = document.getElementById("nrtel").value;

    var shteti = document.getElementById("shteti").value;

    var emri = document.getElementById("emri").value;
    var mbiemri = document.getElementById("mbiemri").value;
    var mosha = document.getElementById("mosha").value;






    if (email==="" || password==="" || password.length<8) {
         alert('Ju nuk i keni plotesu te gjitha kushtet');
         return;
         
   
     
    } else {
        
        window.location.replace("file:///Users/apple/Desktop/Projekt/Main%20page/index.html");
        
    }
    
}