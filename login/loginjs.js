function auth(event) {
    event.preventDefault();

    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    if (email==="" || password==="" || password.length<8) {
         alert('Ky account nuk ekziston');
         return;
         
    } else {
        
        window.location.replace("file:///Users/apple/Desktop/Projekt/Main%20page/index.html");
        
    }
    
}