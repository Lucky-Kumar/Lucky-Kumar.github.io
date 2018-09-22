// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}


function openNav() {
    var width = document.getElementById("mySidenav").offsetWidth;
    if(width == "0"){
        document.getElementById("mySidenav").style.width = "250px";
    } else {
        document.getElementById("mySidenav").style.width = "0";
    }
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}