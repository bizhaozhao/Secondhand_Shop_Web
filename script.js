//swiper function is refered to https://www.youtube.com/watch?v=34MBVXsDOtA&t=5s
//This swiper is for homepage image
var swiper = new Swiper(".home-slider", {
    loop:true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

//Go back to Register window
function goRegister(){
    document.getElementById("signup-window").style.display = "block";
    document.getElementById("login-window").style.display = "none";
}

//Go back to Login window
function goLogin(){
    document.getElementById("signup-window").style.display = "none";
    document.getElementById("login-window").style.display = "block";
}





