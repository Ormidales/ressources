function menuOptions1(){
    document.getElementById("menu-options-bouton-1").style.display = "none";
    document.getElementById("menu-options-bouton-2").style.display = "flex";
    document.getElementById("menu-options").style.display = "block";
    document.getElementById("menu-options").style.animationName = "menu-options-1";
    document.getElementById("menu-options").style.animationDuration = "0.2s";
}
function menuOptions2(){
    document.getElementById("menu-options-bouton-1").style.display = "flex";
    document.getElementById("menu-options-bouton-2").style.display = "none";
    document.getElementById("menu-options").style.display = "none";
}