// LOADER
$(window).on("load",function(){
    alert("Hello visitor, this is a demo website. That means that the site is still under construction. Please don't try to login or register. Thank you!");
    $(".loader-container").fadeOut(1000);
});

// NAVBAR SCROLL
var myNav = document.getElementById("nav");
window.onscroll = function() {
    "use strict";
    if (document.body.scrollTop >= 10 || document.documentElement.scrollTop >= 10) {
        $("nav").css({"background-color":"#111"});  
    } else {
        $("nav").css({"background-color":"transparent"});
    }
};

$("#sec-1").click(function() {
    $('html, body').animate({
        scrollTop: $("#home")
    }, 1000);
    return false;
});

$("#sec-2").click(function() {
    $('html, body').animate({
        scrollTop: $("#about")
    }, 1000);
    return false;
});

$("#sec-3").click(function() {
    $('html, body').animate({
        scrollTop: $("#skills")
    }, 1000);
    return false;
});

$("#sec-4").click(function() {
    $('html, body').animate({
        scrollTop: $("#projects")
    }, 1000);
    return false;
});