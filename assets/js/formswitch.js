

var signup = document.querySelector(".signup-btn");
var signin = document.querySelector(".signin-btn");
var formbox_1 = document.querySelector(".form-box-1");
var formbox_2 = document.querySelector(".form-box-2");

signup.addEventListener("click",signupbox);
signin.addEventListener("click",signinbox);


function signupbox(){
    formbox_1.style.left="0";
    formbox_2.style.left = "150%";
}


function signinbox(){
    formbox_1.style.left = "150%";
    formbox_2.style.left = "0%";
}