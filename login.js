function myFunction(){
    var username = document.forms["myForm"]["username"].value;
    var password = document.forms["myForm"]["password"].value;
    if (username == "kelompok7" && password == "kelompok7"){
        window.location.href="Projek tic tac toe.html";
    }
    else {
        alert("Username dan Password Salah");
    }
}