function boutonMenuAppsClickedIn(){
    document.getElementById("menu-apps").style.display = "grid";
    document.getElementById("menu-apps").style.animationName = "menuIn3";
    document.getElementById("menu-apps").style.animationDuration = "0.5s";
    document.getElementById("bouton-menu-apps").style.display = "none";
}
function boutonMenuAppsClickedOut(){
    document.getElementById("menu-apps").style.display = "none";
    document.getElementById("bouton-menu-apps").style.display = "flex";
}



function boutonAppParametreClickedIn(){
    document.getElementById("application-parametre").style.display = "block";
    document.getElementById("application-parametre").style.animationName = "applicationIn";
    document.getElementById("application-parametre").style.animationDuration = "0.5s";
}
function boutonAppParametreClickedOut(){
    document.getElementById("application-parametre").style.display = "none";
}



function boutonAppCatalogueClickedIn(){
    document.getElementById("application-catalogue").style.display = "block";
    document.getElementById("application-catalogue").style.animationName = "applicationIn";
    document.getElementById("application-catalogue").style.animationDuration = "0.5s";
}
function boutonAppCatalogueClickedOut(){
    document.getElementById("application-catalogue").style.display = "none";
}



function boutonAppProjetsClickedIn(){
    document.getElementById("application-projets").style.display = "block";
    document.getElementById("application-projets").style.animationName = "applicationIn";
    document.getElementById("application-projets").style.animationDuration = "0.5s";
}
function boutonAppProjetsClickedOut(){
    document.getElementById("application-projets").style.display = "none";
}



function boutonAppStagesClickedIn(){
    document.getElementById("application-stages").style.display = "block";
    document.getElementById("application-stages").style.animationName = "applicationIn";
    document.getElementById("application-stages").style.animationDuration = "0.5s";
}
function boutonAppStagesClickedOut(){
    document.getElementById("application-stages").style.display = "none";
}



function boutonAppChangementthemeClickedIn(){
    document.getElementById("application-changementtheme").style.display = "block";
    document.getElementById("application-changementtheme").style.animationName = "applicationIn";
    document.getElementById("application-changementtheme").style.animationDuration = "0.5s";
}
function boutonAppChangementthemeClickedOut(){
    document.getElementById("application-changementtheme").style.display = "none";
}



function boutonMenuRetrocompClickedIn(){
    document.getElementById("menu-retrocomp").style.display = "flex";
    document.getElementById("menu-retrocomp").style.animationName = "menuIn";
    document.getElementById("menu-retrocomp").style.animationDuration = "0.5s";
}
function boutonMenuRetrocompClickedOut(){
    document.getElementById("menu-retrocomp").style.display = "none";
    document.getElementById("sub-retrocomp").style.display = "none";
}
function boutonSubRetrocompClickedIn(){
    document.getElementById("sub-retrocomp").style.display = "flex";
    document.getElementById("sub-retrocomp").style.animationName = "menuIn2";
    document.getElementById("sub-retrocomp").style.animationDuration = "0.5s";
}



function boutonChangementThemeTropical(){
    document.getElementById("bureau").style.backgroundImage = "url('img/background9.png')";
}
function boutonChangementThemeRoseetbleu(){
    document.getElementById("bureau").style.backgroundImage = "url('img/background2.png')";
}
function boutonChangementThemeRoseetjaune(){
    document.getElementById("bureau").style.backgroundImage = "url('img/background14.png')";
}
function boutonChangementThemeLicorne(){
    document.getElementById("bureau").style.backgroundImage = "url('img/licorne.jpg')";
}



function boutonAfficherPNG(){
    document.getElementById("image-main").style.display = "block";
    document.getElementById("image-main").style.animationName = "applicationIn";
    document.getElementById("image-main").style.animationDuration = "0.5s";

    document.getElementById("image-cloud").style.display = "block";
    document.getElementById("image-cloud").style.animationName = "applicationIn";
    document.getElementById("image-cloud").style.animationDuration = "0.5s";
}
function boutonAfficherPNG2(){
    document.getElementById("image-main").style.display = "none";
    document.getElementById("image-cloud").style.display = "none";
}