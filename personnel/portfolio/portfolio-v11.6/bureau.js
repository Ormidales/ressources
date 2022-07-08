/* MENU APPLICATIONS */
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























/* APPLICATION PARAMETRES */
function boutonAppParametreClickedIn(){
    document.getElementById("application-parametre").style.display = "block";
    document.getElementById("application-parametre").style.animationName = "applicationIn";
    document.getElementById("application-parametre").style.animationDuration = "0.5s";
}
function boutonAppParametreClickedOut(){
    document.getElementById("application-parametre").style.display = "none";
}
function boutonAppParametrePinnedIn(){
    document.getElementById("application-parametre-header-pinnedIn").style.display = "none";
    document.getElementById("application-parametre-header-pinnedOut").style.display = "flex";
    document.getElementById("application-parametre-header-close").style.display = "none";
}
function boutonAppParametrePinnedOut(){
    document.getElementById("application-parametre-header-pinnedIn").style.display = "flex";
    document.getElementById("application-parametre-header-pinnedOut").style.display = "none";
    document.getElementById("application-parametre-header-close").style.display = "flex";
}

/* APPLICATION CHANGEMENT THEME */
function boutonAppChangementthemeClickedIn(){
    document.getElementById("application-changementtheme").style.display = "block";
    document.getElementById("application-changementtheme").style.animationName = "applicationIn";
    document.getElementById("application-changementtheme").style.animationDuration = "0.5s";
}
function boutonAppChangementthemeClickedOut(){
    document.getElementById("application-changementtheme").style.display = "none";
}
function boutonAppChangementthemePinnedIn(){
    document.getElementById("application-changementtheme-header-pinnedIn").style.display = "none";
    document.getElementById("application-changementtheme-header-pinnedOut").style.display = "flex";
    document.getElementById("application-changementtheme-header-close").style.display = "none";
}
function boutonAppChangementthemePinnedOut(){
    document.getElementById("application-changementtheme-header-pinnedIn").style.display = "flex";
    document.getElementById("application-changementtheme-header-pinnedOut").style.display = "none";
    document.getElementById("application-changementtheme-header-close").style.display = "flex";
}

/* BOUTONS CHANGEMENTS THEMES */
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

/* BOUTONS AFFICHER PNG */
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

























/* APPLICATION CATALOGUE */
function boutonAppCatalogueClickedIn(){
    document.getElementById("application-catalogue").style.display = "block";
    document.getElementById("application-catalogue").style.animationName = "applicationIn";
    document.getElementById("application-catalogue").style.animationDuration = "0.5s";
}
function boutonAppCatalogueClickedOut(){
    document.getElementById("application-catalogue").style.display = "none";
}
function boutonAppCatalogueZoomIn(){
    document.getElementById("application-catalogue").style.width = "150vh";
    document.getElementById("application-catalogue").style.height = "85vh";
    document.getElementById("application-catalogue-body").style.height = "74vh";
    document.getElementById("application-catalogue").style.transition = "width 0.2s, height 0.2s";
    document.getElementById("application-catalogue-body").style.transition = "width 0.2s, height 0.2s";
}
function boutonAppCatalogueZoomOut(){
    document.getElementById("application-catalogue").style.width = "100vh";
    document.getElementById("application-catalogue").style.height = "65vh";
    document.getElementById("application-catalogue-body").style.height = "54vh";
    document.getElementById("application-catalogue").style.transition = "width 0.2s, height 0.2s";
    document.getElementById("application-catalogue-body").style.transition = "width 0.2s, height 0.2s";
}
function boutonAppCataloguePinnedIn(){
    document.getElementById("application-catalogue-header-pinnedIn").style.display = "none";
    document.getElementById("application-catalogue-header-pinnedOut").style.display = "flex";
    document.getElementById("application-catalogue-header-close").style.display = "none";
    document.getElementById("application-catalogue").style.transition = "width 0.2s, height 0.2s";
}
function boutonAppCataloguePinnedOut(){
    document.getElementById("application-catalogue-header-pinnedIn").style.display = "flex";
    document.getElementById("application-catalogue-header-pinnedOut").style.display = "none";
    document.getElementById("application-catalogue-header-close").style.display = "flex";
}




























/* APPLICATION PROJETS */
function boutonAppProjetsClickedIn(){
    document.getElementById("application-projets").style.display = "block";
    document.getElementById("application-projets").style.animationName = "applicationIn";
    document.getElementById("application-projets").style.animationDuration = "0.5s";
}
function boutonAppProjetsClickedOut(){
    document.getElementById("application-projets").style.display = "none";
}
function boutonAppProjetsZoomIn(){
    document.getElementById("application-projets").style.width = "150vh";
    document.getElementById("application-projets").style.height = "85vh";
    document.getElementById('application-projets-body-grid').className = "w-full grid gap-6 grid-cols-3 p-6 bg-[#252525]"; 
    document.getElementById("application-projets-body").style.height = "74vh";
    document.getElementById("application-projets").style.transition = "width 0.2s, height 0.2s";
    document.getElementById("application-projets-body").style.transition = "width 0.2s, height 0.2s";
}
function boutonAppProjetsZoomOut(){
    document.getElementById("application-projets").style.width = "100vh";
    document.getElementById("application-projets").style.height = "65vh";
    document.getElementById('application-projets-body-grid').className = "w-full grid gap-6 grid-cols-2 p-6 bg-[#252525]";
    document.getElementById("application-projets-body").style.height = "54vh";
    document.getElementById("application-projets").style.transition = "width 0.2s, height 0.2s";
    document.getElementById("application-projets-body").style.transition = "width 0.2s, height 0.2s";
}
function boutonAppProjetsPinnedIn(){
    document.getElementById("application-projets-header-pinnedIn").style.display = "none";
    document.getElementById("application-projets-header-pinnedOut").style.display = "flex";
    document.getElementById("application-projets-header-close").style.display = "none";
}
function boutonAppProjetsPinnedOut(){
    document.getElementById("application-projets-header-pinnedIn").style.display = "flex";
    document.getElementById("application-projets-header-pinnedOut").style.display = "none";
    document.getElementById("application-projets-header-close").style.display = "flex";
}



























/* APPLICATION STAGES */
function boutonAppStagesClickedIn(){
    document.getElementById("application-stages").style.display = "block";
    document.getElementById("application-stages").style.animationName = "applicationIn";
    document.getElementById("application-stages").style.animationDuration = "0.5s";
}
function boutonAppStagesClickedOut(){
    document.getElementById("application-stages").style.display = "none";
}
function boutonAppStagesZoomIn(){
    document.getElementById("application-stages").style.width = "150vh";
    document.getElementById("application-stages").style.height = "85vh";
    document.getElementById("application-stages-body").style.height = "74vh";
    document.getElementById("application-stages").style.transition = "width 0.2s, height 0.2s";
    document.getElementById("application-stages-body").style.transition = "width 0.2s, height 0.2s";
}
function boutonAppStagesZoomOut(){
    document.getElementById("application-stages").style.width = "100vh";
    document.getElementById("application-stages").style.height = "65vh";
    document.getElementById("application-stages-body").style.height = "54vh";
    document.getElementById("application-stages").style.transition = "width 0.2s, height 0.2s";
    document.getElementById("application-stages-body").style.transition = "width 0.2s, height 0.2s";
}
function boutonAppStagesPinnedIn(){
    document.getElementById("application-stages-header-pinnedIn").style.display = "none";
    document.getElementById("application-stages-header-pinnedOut").style.display = "flex";
    document.getElementById("application-stages-header-close").style.display = "none";
    document.getElementById("application-stages").style.transition = "width 0.2s, height 0.2s";
}
function boutonAppStagesPinnedOut(){
    document.getElementById("application-stages-header-pinnedIn").style.display = "flex";
    document.getElementById("application-stages-header-pinnedOut").style.display = "none";
    document.getElementById("application-stages-header-close").style.display = "flex";
}



































/* MENU RETROCOMPATIBILITE */
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




















