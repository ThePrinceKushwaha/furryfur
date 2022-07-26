var usernameInput = document.querySelector(".inputtext");
var passwordInput = document.querySelector(".inputps");
var formText = document.querySelectorAll(".text");

usernameInput.addEventListener("blur",()=>{
    if(usernameInput.value){
            formText[0].style.top = -5+"px";
            formText[0].style.color="rgb(19, 19, 103)";
    }

});
passwordInput.addEventListener("blur",()=>{
    if(passwordInput.value){
            formText[1].style.top = -5+"px";
            formText[0].style.color="rgb(19, 19, 103)";
    }
});
// registration part
function validate(){
    var name_pattern=/^[a-zA-Z]{5,30}$/;
    var phoneno_pattern=/^98+[0-9]{8}$/;
    var email_patter=/^w+\@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
    var password_pattern=/^W+$/;
    var name=document.getElementsById(".name").value;
    var phoneno=document.getElementsById(".phoneno").value;
    var email=document.getElementsById(".email").value;
    var password=document.getElementsById(".password").value;
    var confirmpw=document.getElementsById(".confirmpw").value;
    if(name.search(name_pattern)<0){
        alert("name pattern didn't match.");
        document.getElementsByClassName(".one").innerHTML="*name pattern didnt match";
        return false;
    }
    if(email.search(email_pattern)<0){
        alert("email pattern didn't match");
        document.getElementsByClassName(".three").innerHTML="*email pattern didnt match";
        return false;
    }
    if(phoneno.search(phoneno_pattern)<0){
        document.getElementsByClassName(".two").innerHTML="* phone number should be 10 digits";
        return false;
    }
    if(password!=confirmpw){
        document.getElementsByClassName(".five").innerHTML="* two password didn't match"; 
       return false;
    }   
}