function openNav(e) {
    e.preventDefault();
    if (window.innerWidth < 576) {
        document.getElementById("mySidenav").style.width = "100vw";
    } else {
        document.getElementById("mySidenav").style.width = "35vw";
        let overlay = document.querySelector('.overlay');
        overlay.style.height = "100vh";

    }
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    let overlay = document.querySelector('.overlay');
    overlay.style.height = "0";
}

function openProjectNav(project_id) {

    document.querySelectorAll('.sidenav').forEach(element => {
        element.style.width = "0";
    });;

    if (window.innerWidth < 576) {
        document.querySelector("#sideNavProject" + project_id).style.width = "100vw";
    } else {
        document.querySelector("#sideNavProject" + project_id).style.width = "35vw";
        let overlay = document.querySelector('.overlay');
        overlay.style.height = "100vh";
    }
}

function closeProjectNav(project_id) {
    document.querySelector("#sideNavProject" + project_id).style.width = "0";
    let overlay = document.querySelector('.overlay');
    overlay.style.height = "0";
}


var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    let navbar = document.querySelector(".navbar");
    let navElements = document.querySelectorAll('.navbar-nav .nav-item a');
    let logo = document.querySelector('#logo');
    
    if (currentScrollPos > 100) {
        navbar.style.background = "#fff";
        navElements.forEach((e) => {
            e.style.color = "#000";
        });
        logo.src = "/images/logo-black.png";
    } else {
        navbar.style.background = "transparent";
        navElements.forEach((e) => {
            e.style.color = "#FFF";
        });
        logo.src = "/images/logo.png";
    }

    if (prevScrollpos > currentScrollPos) {
        navbar.style.top = "0";
    } else {
        navbar.style.top = "-200px";
    }
    prevScrollpos = currentScrollPos;
}