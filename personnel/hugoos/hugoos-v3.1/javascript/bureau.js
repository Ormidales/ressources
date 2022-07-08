var sBrowser, sBrowser2, sUsrAg = navigator.userAgent;

if (sUsrAg.indexOf("Firefox") > -1) {
    sBrowser2 = "Vous êtes sur Mozilla Firefox, ce navigateur ne supporte pas certaines technologies utilisées sur le site 'hugodoueil-hugoos.netlify.app' tels que les effets de vitres, qui sont des élements piliers du site. Nous vous recommandons d'utiliser un autre navigateur (Google Chrome, Microsoft Edge, Apple Safari, Opera, etc...) pour avoir une meilleure expérience de notre site.";
    alert(sBrowser2);
    // "Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:61.0) Gecko/20100101 Firefox/61.0"

} else if (sUsrAg.indexOf("SamsungBrowser") > -1) {
    sBrowser2 = "Vous êtes sur Samsumg Browser, ce navigateur ne supporte pas certaines technologies utilisées sur le site 'hugodoueil-hugoos.netlify.app' tels que les effets de vitres, qui sont des élements piliers du site. Nous vous recommandons d'utiliser un autre navigateur (Google Chrome, Microsoft Edge, Apple Safari, Opera, etc...) pour avoir une meilleure expérience de notre site.";
    alert(sBrowser2);
    // "Mozilla/5.0 (Linux; Android 9; SAMSUNG SM-G955F Build/PPR1.180610.011) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/9.4 Chrome/67.0.3396.87 Mobile Safari/537.36

} else if (sUsrAg.indexOf("Opera") > -1 || sUsrAg.indexOf("OPR") > -1) {
    // "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36 OPR/57.0.3098.106"

} else if (sUsrAg.indexOf("Trident") > -1) {
    sBrowser2 = "Vous êtes sur Internet Explorer, ce navigateur ne supporte pas certaines technologies utilisées sur le site 'hugodoueil-hugoos.netlify.app' tels que les effets de vitres, qui sont des élements piliers du site. Nous vous recommandons d'utiliser un autre navigateur (Google Chrome, Microsoft Edge, Apple Safari, Opera, etc...) pour avoir une meilleure expérience de notre site.";
    alert(sBrowser2);
    // "Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; .NET4.0C; .NET4.0E; Zoom 3.6.0; wbx 1.0.0; rv:11.0) like Gecko"

} else if (sUsrAg.indexOf("Edge") > -1) {
    // "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36 Edge/16.16299"

} else if (sUsrAg.indexOf("Edg") > -1) {
    // Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36 Edg/91.0.864.64

} else if (sUsrAg.indexOf("Chrome") > -1) {
    // "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/66.0.3359.181 Chrome/66.0.3359.181 Safari/537.36"

} else if (sUsrAg.indexOf("Safari") > -1) {
    // "Mozilla/5.0 (iPhone; CPU iPhone OS 11_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/11.0 Mobile/15E148 Safari/604.1 980x1306"

} else {
    sBrowser2 = "Vous êtes sur un navigateur non pris en charge, ce navigateur ne supporte pas certaines technologies utilisées sur le site 'hugodoueil-hugoos.netlify.app' tels que les effets de vitres, qui sont des élements piliers du site. Nous vous recommandons d'utiliser un autre navigateur (Google Chrome, Microsoft Edge, Apple Safari, Opera, etc...) pour avoir une meilleure expérience de notre site.";
    alert(sBrowser2);
    // NAVIGATEUR INCONNU
}


/* CLIQUE DROIT */
document.onclick = hideMenu;
document.oncontextmenu = rightClick;
              
function hideMenu() {
    document.getElementById("contextMenu").style.visibility = "hidden";
    document.getElementById("contextMenu").style.opacity = "0";
    document.getElementById("contextMenu").style.transition = "opacity 200ms, visibility 0ms 200ms";
}
          
function rightClick(e) {
    e.preventDefault();
          
    if (document.getElementById("contextMenu").style.visibility == "visible")
        hideMenu();
    else{
        var menu = document.getElementById("contextMenu")
          
        menu.style.visibility = 'visible';
        menu.style.opacity = '1';
        menu.style.transition = "opacity 0ms, visibility 200ms 0ms";
        menu.style.left = e.pageX + "px";
        menu.style.top = e.pageY + "px";
    }
}



/* APPLICATION WELCOME */
function menuAppWelcome(){
    document.getElementById("app-welcome").style.visibility = "visible";
    document.getElementById("app-welcome").style.opacity = "1";
    document.getElementById("app-welcome").style.transition = "opacity 200ms";
}
function appWelcomeClose(){
    document.getElementById("app-welcome").style.visibility = "hidden";
    document.getElementById("app-welcome").style.opacity = "0";
    document.getElementById("app-welcome").style.transition = "opacity 200ms, visibility 0ms 200ms";
}



/* APPLICATION ACCUEIL */
function menuAppAccueil(){
    document.getElementById("app-accueil").style.visibility = "visible";
    document.getElementById("app-accueil").style.opacity = "1";
    document.getElementById("app-accueil").style.transition = "opacity 200ms";
}
function appAccueilClose(){
    document.getElementById("app-accueil").style.visibility = "hidden";
    document.getElementById("app-accueil").style.opacity = "0";
    document.getElementById("app-accueil").style.transition = "opacity 200ms, visibility 0ms 200ms";
}



/* APPLICATION BACKGROUND */
function menuAppBackground(){
    document.getElementById("app-background").style.visibility = "visible";
    document.getElementById("app-background").style.opacity = "1";
    document.getElementById("app-background").style.transition = "opacity 200ms";
}
function appBackgroundClose(){
    document.getElementById("app-background").style.visibility = "hidden";
    document.getElementById("app-background").style.opacity = "0";
    document.getElementById("app-background").style.transition = "opacity 200ms, visibility 0ms 200ms";
}
function ChangementBackground1(){
    document.getElementById("bureau-xl").style.background = "url('ressources/img/webp/background-1.webp')";
    document.getElementById("bureau-xl").style.backgroundPosition = "center";
    document.getElementById("bureau-xl").style.backgroundSize = "cover";
}
function ChangementBackground2(){
    document.getElementById("bureau-xl").style.background = "url('ressources/img/webp/background-2.webp')";
    document.getElementById("bureau-xl").style.backgroundPosition = "center";
    document.getElementById("bureau-xl").style.backgroundSize = "cover";
}
function ChangementBackground3(){
    document.getElementById("bureau-xl").style.background = "url('ressources/img/webp/background-3.webp')";
    document.getElementById("bureau-xl").style.backgroundPosition = "center";
    document.getElementById("bureau-xl").style.backgroundSize = "cover";
}
function ChangementBackground4(){
    document.getElementById("bureau-xl").style.background = "url('ressources/img/webp/background-4.webp')";
    document.getElementById("bureau-xl").style.backgroundPosition = "center";
    document.getElementById("bureau-xl").style.backgroundSize = "cover";
}
function ChangementBackground5(){
    document.getElementById("bureau-xl").style.background = "url('ressources/img/webp/background-5.webp')";
    document.getElementById("bureau-xl").style.backgroundPosition = "center";
    document.getElementById("bureau-xl").style.backgroundSize = "cover";
}
function ChangementBackground6(){
    document.getElementById("bureau-xl").style.background = "url('ressources/img/webp/background-6.webp')";
    document.getElementById("bureau-xl").style.backgroundPosition = "center";
    document.getElementById("bureau-xl").style.backgroundSize = "cover";
}
function ChangementBackground7(){
    document.getElementById("bureau-xl").style.background = "url('ressources/img/webp/background-7.webp')";
    document.getElementById("bureau-xl").style.backgroundPosition = "center";
    document.getElementById("bureau-xl").style.backgroundSize = "cover";
}
function ChangementBackground8(){
    document.getElementById("bureau-xl").style.background = "url('ressources/img/webp/background-8.webp')";
    document.getElementById("bureau-xl").style.backgroundPosition = "center";
    document.getElementById("bureau-xl").style.backgroundSize = "cover";
}
function ChangementBackground9(){
    document.getElementById("bureau-xl").style.background = "url('ressources/img/webp/background-9.webp')";
    document.getElementById("bureau-xl").style.backgroundPosition = "center";
    document.getElementById("bureau-xl").style.backgroundSize = "cover";
}
function ChangementBackground10(){
    document.getElementById("bureau-xl").style.background = "url('ressources/img/webp/background-10.webp')";
    document.getElementById("bureau-xl").style.backgroundPosition = "center";
    document.getElementById("bureau-xl").style.backgroundSize = "cover";
}



/* APPLICATION PROJETS */
function menuAppProjets(){
    document.getElementById("app-projets").style.visibility = "visible";
    document.getElementById("app-projets").style.opacity = "1";
    document.getElementById("app-projets").style.transition = "opacity 200ms";
}
function appProjetsClose(){
    document.getElementById("app-projets").style.visibility = "hidden";
    document.getElementById("app-projets").style.opacity = "0";
    document.getElementById("app-projets").style.transition = "opacity 200ms, visibility 0ms 200ms";
}



/* APPLICATION STAGES */
function menuAppStages(){
    document.getElementById("app-stages").style.visibility = "visible";
    document.getElementById("app-stages").style.opacity = "1";
    document.getElementById("app-stages").style.transition = "opacity 200ms";
}
function appStagesClose(){
    document.getElementById("app-stages").style.visibility = "hidden";
    document.getElementById("app-stages").style.opacity = "0";
    document.getElementById("app-stages").style.transition = "opacity 200ms, visibility 0ms 200ms";
}



/* APPLICATION TACHES */
function menuAppTaches(){
    document.getElementById("app-taches").style.visibility = "visible";
    document.getElementById("app-taches").style.opacity = "1";
    document.getElementById("app-taches").style.transition = "opacity 200ms";
}
function appTachesClose(){
    document.getElementById("app-taches").style.visibility = "hidden";
    document.getElementById("app-taches").style.opacity = "0";
    document.getElementById("app-taches").style.transition = "opacity 200ms, visibility 0ms 200ms";
}



/* APPLICATION CATALOGUE APP */
function menuAppCatalog(){
    document.getElementById("app-catalog").style.visibility = "visible";
    document.getElementById("app-catalog").style.opacity = "1";
    document.getElementById("app-catalog").style.transition = "opacity 200ms";
}
function appCatalogClose(){
    document.getElementById("app-catalog").style.visibility = "hidden";
    document.getElementById("app-catalog").style.opacity = "0";
    document.getElementById("app-catalog").style.transition = "opacity 200ms, visibility 0ms 200ms";
}



/* APPLICATION CV */
function appCV(){
    document.getElementById("app-cv").style.visibility = "visible";
    document.getElementById("app-cv").style.opacity = "1";
    document.getElementById("app-cv").style.transition = "opacity 200ms";
}
function appCVClose(){
    document.getElementById("app-cv").style.visibility = "hidden";
    document.getElementById("app-cv").style.opacity = "0";
    document.getElementById("app-cv").style.transition = "opacity 200ms, visibility 0ms 200ms";
}



/* APPLICATION CERTIFICATIONS */
function appCertifications(){
    document.getElementById("app-certifications").style.visibility = "visible";
    document.getElementById("app-certifications").style.opacity = "1";
    document.getElementById("app-certifications").style.transition = "opacity 200ms";
}
function appCertificationsClose(){
    document.getElementById("app-certifications").style.visibility = "hidden";
    document.getElementById("app-certifications").style.opacity = "0";
    document.getElementById("app-certifications").style.transition = "opacity 200ms, visibility 0ms 200ms";
}



/* MENU RETROCOMPATIBILITE */
function menuRetrocomp(){
    document.getElementById("menu-retrocomp").style.display = "block";
    document.getElementById("menu-retrocomp").style.animationName = "menuRetrocompIn";
    document.getElementById("menu-retrocomp").style.animationDuration = "0.4s";
}
function menuRetrocompClose(){
    document.getElementById("menu-retrocomp").style.display = "none";
}



/* MENU COMPTE SUB */
function menuCompte1(){
    document.getElementById("menu-compte-sub").style.display = "block";
    document.getElementById("menu-compte-sub").style.animationName = "menuRetrocompIn";
    document.getElementById("menu-compte-sub").style.animationDuration = "0.4s";
}
function menuCompteClose(){
    document.getElementById("menu-compte-sub").style.display = "none";
}