function boutonMenuPrincipalON(){
    document.getElementById("bouton-app-menuPrincipal-1").style.display = "none";
    document.getElementById("bouton-app-menuPrincipal-2").style.display = "flex";
    document.getElementById("app-menuPrincipal").style.display = "block";
    document.getElementById("app-menuPrincipal").style.animationName = "appMenuPrincipalON";
    document.getElementById("app-menuPrincipal").style.animationDuration = "0.5s";
}
function boutonMenuPrincipalOFF(){
    document.getElementById("bouton-app-menuPrincipal-1").style.display = "flex";
    document.getElementById("bouton-app-menuPrincipal-2").style.display = "none";
    document.getElementById("app-menuPrincipal").style.display = "none";
}