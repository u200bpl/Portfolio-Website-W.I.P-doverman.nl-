var myNav = document.getElementById("nav");
window.onscroll = function() {
    "use strict";
    if (document.body.scrollTop >= 10 || document.documentElement.scrollTop >= 10) {
        $("nav").css({"background-color":"#111"});  
    } else {
        $("nav").css({"background-color":"transparent"});
    }
};