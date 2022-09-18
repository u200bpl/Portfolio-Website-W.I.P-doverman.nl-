var myNav = document.getElementById("nav");
window.onscroll = function() {
    "use strict";
    if (document.body.scrollTop >= 280 || document.documentElement.scrollTop >= 280) {
        $("nav").css({"background-color":"#111"});  
    } else {
        $("nav").css({"background-color":"transparent"});
    }
};