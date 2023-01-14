function auth(event) {
    event.preventDefault();

    var country = document.getElementById("country").value;
    var surname = document.getElementById("surname").value;
    var name =document.getElementById('name').value;
    var email=document.getElementById('email').value;

    

    if (country==="" || surname==="" || name==="" || email===""  ){
         alert('Ju nuk i keni plotesu te gjitha kushtet');
         return;
         
    } else {
        
        alert('Forma juaj pranohet');
        
    }
    
}