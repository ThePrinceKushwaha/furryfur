const hamburger  = document.querySelector('.header .nav-bar .nav-list .hamburger');
const mobile_menu  = document.querySelector('.header .nav-bar .nav-list ul');
const menu_item  = document.querySelectorAll('.header .nav-bar .nav-list ul li a');
const header  = document.querySelector('.header.container');
var popup= document.querySelector(".pop_up");
var displaylog = document.querySelector(".login");
var displayreg = document.querySelector(".reg_whole");
var reg_head = document.querySelector(".registration_head");
var login_head= document.querySelector(".login_head");
displayreg.style.display="none";
var log_reg=document.querySelector(".log_in");
var pop_display=document.querySelector(".popdiv");
var cross=document.querySelector(".cross");
hamburger.addEventListener('click',()=>{
    hamburger.classList.toggle('active');
    mobile_menu.classList.toggle('active');
});
function display_reg(){
    reg_head.style.backgroundColor="rgb(171, 32, 60)";
    login_head.style.backgroundColor="bisque";
    displaylog.style.display="none";
    reg_head.style.color="bisque";
    displayreg.style.display="flex";
    login_head.style.color="rgb(171, 32, 60)";
 
}
function display_login(){
    displayreg.style.display="none";
    displaylog.style.display="block";
    reg_head.style.color=" rgb(171, 32, 60)";
    login_head.style.color="bisque";
    reg_head.style.backgroundColor="bisque";
    login_head.style.backgroundColor="rgb(171, 32, 60)";
}

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

document.addEventListener('scroll',()=>{
    var scroll_positon = window.scrollY;
    if(scroll_positon > 250){
        header.style.backgroundColor = '#29323c';
    }
    else{
        header.style.backgroundColor = 'transparent';
    }
});

menu_item.forEach(item=>{
    item.addEventListener('click',() =>{
        hamburger.classList.toggle('active');
        mobile_menu.classList.toggle('active');
    });
});