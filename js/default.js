window.onscroll = function() {myFunction()};

function myFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("header-bar").className = "scrolled";
    } else {
        document.getElementById("header-bar").classList.remove("scrolled");
    }
}