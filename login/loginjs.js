function auth(event) {
    event.preventDefault();

    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    if (email==="" || password==="" || password.length<8) {
         alert('Ky account nuk ekziston');
         return;
         
    } else {
        
        window.location.replace("/Users/apple/Desktop/projektifaza2/Main page/index.html");
        
    }
    
}