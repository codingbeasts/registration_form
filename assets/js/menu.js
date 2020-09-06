
var displayMenu = document.querySelector(".navigation-menu");

document.querySelector(".open-btn").addEventListener("click",()=>{
    displayMenu.classList.add("navbar-show");
});

document.querySelector(".close-btn").addEventListener("click",()=>{
    displayMenu.classList.remove("navbar-show");
});

var adminShow = document.querySelector(".admin-profile");
document.querySelector(".profile-open").addEventListener("click",()=>{
    adminShow.classList.add("admin-profile-show");
});

document.querySelector(".profile-close").addEventListener("click", () => {
    adminShow.classList.remove("admin-profile-show");
});

var navBtn = document.querySelectorAll(".nav-btn");

navBtn.forEach(active_button =>  {
    active_button.addEventListener("click",function(){
        navBtn.forEach(btn => {
            btn.classList.remove("active-nav-menu")
        });
        this.classList.add("active-nav-menu");
    });
});


