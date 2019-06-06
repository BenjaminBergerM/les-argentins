function openNav() {
    if (window.innerWidth < 576) {
        document.getElementById("mySidenav").style.width = "100vw";
    } else {
        document.getElementById("mySidenav").style.width = "35vw";
    }
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

function openProjectNav(project_id) {
    if (window.innerWidth < 576) {
        document.querySelector("#sideNavProject" + project_id).style.width = "100vw";
    } else {
        document.querySelector("#sideNavProject" + project_id).style.width = "35vw";
    }
}

function closeProjectNav(project_id) {
    document.querySelector("#sideNavProject" + project_id).style.width = "0";
}