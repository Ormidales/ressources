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
function boutonMenuAppsHover(){
    
}
function boutonMenuAppsHover2(){
    
}



















function boutonPersonnalBarClickedIn(){
    document.getElementById("personnal-bar").style.display = "flex";
    document.getElementById("personnal-bar").style.animationName = "menuIn4";
    document.getElementById("personnal-bar").style.animationDuration = "0.5s";
}
function boutonPersonnalBarClickedOut(){
    document.getElementById("personnal-bar").style.display = "none";
    document.getElementById("personnal-bar-sub").style.display = "none";
}
function boutonPersonnalBarSubClickedIn(){
    document.getElementById("personnal-bar-sub").style.display = "flex";
    document.getElementById("personnal-bar-sub").style.animationName = "menuIn4";
    document.getElementById("personnal-bar-sub").style.animationDuration = "0.5s";
}
function boutonPersonnalBarSubClickedOut(){
    document.getElementById("personnal-bar-sub").style.display = "none";
}




















/* APPLICATION WELCOME */
function boutonAppWelcomeClickedIn(){
    document.getElementById("application-welcome").style.display = "block";
    document.getElementById("application-welcome").style.animationName = "applicationIn";
    document.getElementById("application-welcome").style.animationDuration = "0.5s";
}
function boutonAppWelcomeClickedOut(){
    document.getElementById("application-welcome").style.display = "none";
}
function boutonAppWelcomeZoomIn(){
    document.getElementById("application-welcome").style.width = "120vh";
    document.getElementById("application-welcome").style.height = "75vh";
    document.getElementById("application-welcome-body").style.height = "64vh";
    document.getElementById("application-welcome-header-zoomIn").style.display = "none";
    document.getElementById("application-welcome-header-zoomOut").style.display = "flex";
    document.getElementById("application-welcome").style.transition = "width 0.2s, height 0.2s";
    document.getElementById("application-welcome-body").style.transition = "width 0.2s, height 0.2s";
}
function boutonAppWelcomeZoomOut(){
    document.getElementById("application-welcome").style.width = "100vh";
    document.getElementById("application-welcome").style.height = "65vh";
    document.getElementById("application-welcome-body").style.height = "54vh";
    document.getElementById("application-welcome-header-zoomIn").style.display = "flex";
    document.getElementById("application-welcome-header-zoomOut").style.display = "none";
    document.getElementById("application-welcome").style.transition = "width 0.2s, height 0.2s";
    document.getElementById("application-welcome-body").style.transition = "width 0.2s, height 0.2s";
}
function boutonAppWelcomePinnedIn(){
    document.getElementById("application-welcome-header-pinnedIn").style.display = "none";
    document.getElementById("application-welcome-header-pinnedOut").style.display = "flex";
    document.getElementById("application-welcome-header-close").style.display = "none";
    document.getElementById("application-welcome-header-zoomIn").style.display = "none";
    document.getElementById("application-welcome-header-zoomOut").style.display = "none";
    document.getElementById("application-welcome").style.transition = "width 0.2s, height 0.2s";
    DragAppWelcome[0].disable();
}
function boutonAppWelcomePinnedOut(){
    document.getElementById("application-welcome-header-pinnedIn").style.display = "flex";
    document.getElementById("application-welcome-header-pinnedOut").style.display = "none";
    document.getElementById("application-welcome-header-close").style.display = "flex";
    document.getElementById("application-welcome-header-zoomIn").style.display = "flex";
    DragAppWelcome[0].enable();
}
























/* APPLICATION PARAMETRES */
function boutonAppParametreClickedIn(){
    document.getElementById("application-parametre").style.display = "block";
    document.getElementById("application-parametre").style.animationName = "applicationIn2";
    document.getElementById("application-parametre").style.animationDuration = "0.5s";
}
function boutonAppParametreClickedOut(){
    document.getElementById("application-parametre").style.display = "none";
}
function boutonAppParametrePinnedIn(){
    document.getElementById("application-parametre-header-pinnedIn").style.display = "none";
    document.getElementById("application-parametre-header-pinnedOut").style.display = "flex";
    document.getElementById("application-parametre-header-close").style.display = "none";
    DragAppParametre[0].disable();
}
function boutonAppParametrePinnedOut(){
    document.getElementById("application-parametre-header-pinnedIn").style.display = "flex";
    document.getElementById("application-parametre-header-pinnedOut").style.display = "none";
    document.getElementById("application-parametre-header-close").style.display = "flex";
    DragAppParametre[0].enable();
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
    DragAppChangementTheme[0].disable();
}
function boutonAppChangementthemePinnedOut(){
    document.getElementById("application-changementtheme-header-pinnedIn").style.display = "flex";
    document.getElementById("application-changementtheme-header-pinnedOut").style.display = "none";
    document.getElementById("application-changementtheme-header-close").style.display = "flex";
    DragAppChangementTheme[0].enable();
}

/* BOUTONS CHANGEMENTS THEMES */
function boutonChangementThemeCyberpunk(){
    document.getElementById("bureau").style.backgroundImage = "url('img/cyberpunk.jpg')";
    document.getElementById("bureau").style.backgroundPosition = "center";
}
function boutonChangementThemeSpace(){
    document.getElementById("bureau").style.backgroundImage = "url('img/space.jpg')";
    document.getElementById("bureau").style.backgroundPosition = "center";
}

/* BOUTONS AFFICHER PNG */
function boutonAfficherPNG(){
    document.getElementById("image-main").style.display = "block";
    document.getElementById("image-main").style.animationName = "applicationIn";
    document.getElementById("image-main").style.animationDuration = "0.5s";

    document.getElementById("image-cloud").style.display = "block";
    document.getElementById("image-cloud").style.animationName = "applicationIn";
    document.getElementById("image-cloud").style.animationDuration = "0.5s";

    document.getElementById("image-bill").style.display = "block";
    document.getElementById("image-bill").style.animationName = "applicationIn";
    document.getElementById("image-bill").style.animationDuration = "0.5s";

    document.getElementById("image-person1").style.display = "block";
    document.getElementById("image-person1").style.animationName = "applicationIn";
    document.getElementById("image-person1").style.animationDuration = "0.5s";

    document.getElementById("image-gabe").style.display = "block";
    document.getElementById("image-gabe").style.animationName = "applicationIn";
    document.getElementById("image-gabe").style.animationDuration = "0.5s";
}
function boutonAfficherPNG2(){
    document.getElementById("image-main").style.display = "none";
    document.getElementById("image-cloud").style.display = "none";
    document.getElementById("image-bill").style.display = "none";
    document.getElementById("image-person1").style.display = "none";
    document.getElementById("image-gabe").style.display = "none";
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
    document.getElementById("application-catalogue").style.width = "120vh";
    document.getElementById("application-catalogue").style.height = "75vh";
    document.getElementById("application-catalogue-body").style.height = "64vh";
    document.getElementById("application-catalogue-header-zoomIn").style.display = "none";
    document.getElementById("application-catalogue-header-zoomOut").style.display = "flex";
    document.getElementById("application-catalogue").style.transition = "width 0.2s, height 0.2s";
    document.getElementById("application-catalogue-body").style.transition = "width 0.2s, height 0.2s";
}
function boutonAppCatalogueZoomOut(){
    document.getElementById("application-catalogue").style.width = "100vh";
    document.getElementById("application-catalogue").style.height = "65vh";
    document.getElementById("application-catalogue-body").style.height = "54vh";
    document.getElementById("application-catalogue-header-zoomIn").style.display = "flex";
    document.getElementById("application-catalogue-header-zoomOut").style.display = "none";
    document.getElementById("application-catalogue").style.transition = "width 0.2s, height 0.2s";
    document.getElementById("application-catalogue-body").style.transition = "width 0.2s, height 0.2s";
}
function boutonAppCataloguePinnedIn(){
    document.getElementById("application-catalogue-header-pinnedIn").style.display = "none";
    document.getElementById("application-catalogue-header-pinnedOut").style.display = "flex";
    document.getElementById("application-catalogue-header-close").style.display = "none";
    document.getElementById("application-catalogue-header-zoomIn").style.display = "none";
    document.getElementById("application-catalogue-header-zoomOut").style.display = "none";
    document.getElementById("application-catalogue").style.transition = "width 0.2s, height 0.2s";
    DragAppCatalogue[0].disable();
}
function boutonAppCataloguePinnedOut(){
    document.getElementById("application-catalogue-header-pinnedIn").style.display = "flex";
    document.getElementById("application-catalogue-header-pinnedOut").style.display = "none";
    document.getElementById("application-catalogue-header-close").style.display = "flex";
    document.getElementById("application-catalogue-header-zoomIn").style.display = "flex";
    DragAppCatalogue[0].enable();
}





























/* APPLICATION CV */
function boutonAppCVClickedIn(){
    document.getElementById("application-CV").style.display = "block";
    document.getElementById("application-CV").style.animationName = "applicationIn2";
    document.getElementById("application-CV").style.animationDuration = "0.5s";
}
function boutonAppCVClickedOut(){
    document.getElementById("application-CV").style.display = "none";
}
function boutonAppCVZoomIn(){
    document.getElementById("application-CV").style.width = "120vh";
    document.getElementById("application-CV").style.height = "75vh";
    document.getElementById("application-CV-body").style.height = "64vh";
    document.getElementById("application-CV-header-zoomIn").style.display = "none";
    document.getElementById("application-CV-header-zoomOut").style.display = "flex";
    document.getElementById("application-CV").style.transition = "width 0.2s, height 0.2s";
    document.getElementById("application-CV-body").style.transition = "width 0.2s, height 0.2s";
}
function boutonAppCVZoomOut(){
    document.getElementById("application-CV").style.width = "100vh";
    document.getElementById("application-CV").style.height = "65vh";
    document.getElementById("application-CV-body").style.height = "54vh";
    document.getElementById("application-CV-header-zoomIn").style.display = "flex";
    document.getElementById("application-CV-header-zoomOut").style.display = "none";
    document.getElementById("application-CV").style.transition = "width 0.2s, height 0.2s";
    document.getElementById("application-CV-body").style.transition = "width 0.2s, height 0.2s";
}
function boutonAppCVPinnedIn(){
    document.getElementById("application-CV-header-pinnedIn").style.display = "none";
    document.getElementById("application-CV-header-pinnedOut").style.display = "flex";
    document.getElementById("application-CV-header-close").style.display = "none";
    document.getElementById("application-CV-header-zoomIn").style.display = "none";
    document.getElementById("application-CV-header-zoomOut").style.display = "none";
    document.getElementById("application-CV").style.transition = "width 0.2s, height 0.2s";
    DragAppCV[0].disable();
}
function boutonAppCVPinnedOut(){
    document.getElementById("application-CV-header-pinnedIn").style.display = "flex";
    document.getElementById("application-CV-header-pinnedOut").style.display = "none";
    document.getElementById("application-CV-header-close").style.display = "flex";
    document.getElementById("application-CV-header-zoomIn").style.display = "flex";
    DragAppCV[0].enable();
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
    document.getElementById("application-projets").style.width = "120vh";
    document.getElementById("application-projets").style.height = "75vh";
    document.getElementById('application-projets-body-grid').className = "w-full grid gap-6 grid-cols-3 p-6 bg-[#252525]"; 
    document.getElementById("application-projets-body").style.height = "64vh";
    document.getElementById("application-projets-header-zoomIn").style.display = "none";
    document.getElementById("application-projets-header-zoomOut").style.display = "flex";
    document.getElementById("application-projets").style.transition = "width 0.2s, height 0.2s";
    document.getElementById("application-projets-body").style.transition = "width 0.2s, height 0.2s";
}
function boutonAppProjetsZoomOut(){
    document.getElementById("application-projets").style.width = "100vh";
    document.getElementById("application-projets").style.height = "65vh";
    document.getElementById('application-projets-body-grid').className = "w-full grid gap-6 grid-cols-2 p-6 bg-[#252525]";
    document.getElementById("application-projets-body").style.height = "54vh";
    document.getElementById("application-projets-header-zoomIn").style.display = "flex";
    document.getElementById("application-projets-header-zoomOut").style.display = "none";
    document.getElementById("application-projets").style.transition = "width 0.2s, height 0.2s";
    document.getElementById("application-projets-body").style.transition = "width 0.2s, height 0.2s";
}
function boutonAppProjetsPinnedIn(){
    document.getElementById("application-projets-header-pinnedIn").style.display = "none";
    document.getElementById("application-projets-header-pinnedOut").style.display = "flex";
    document.getElementById("application-projets-header-close").style.display = "none";
    document.getElementById("application-projets-header-zoomIn").style.display = "none";
    document.getElementById("application-projets-header-zoomOut").style.display = "none";
    DragAppProjets[0].disable();
}
function boutonAppProjetsPinnedOut(){
    document.getElementById("application-projets-header-pinnedIn").style.display = "flex";
    document.getElementById("application-projets-header-pinnedOut").style.display = "none";
    document.getElementById("application-projets-header-close").style.display = "flex";
    document.getElementById("application-projets-header-zoomIn").style.display = "flex";
    DragAppProjets[0].enable();
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
    document.getElementById("application-stages").style.width = "120vh";
    document.getElementById("application-stages").style.height = "75vh";
    document.getElementById("application-stages-body").style.height = "64vh";
    document.getElementById("application-stages-header-zoomIn").style.display = "none";
    document.getElementById("application-stages-header-zoomOut").style.display = "flex";
    document.getElementById("application-stages").style.transition = "width 0.2s, height 0.2s";
    document.getElementById("application-stages-body").style.transition = "width 0.2s, height 0.2s";
}
function boutonAppStagesZoomOut(){
    document.getElementById("application-stages").style.width = "100vh";
    document.getElementById("application-stages").style.height = "65vh";
    document.getElementById("application-stages-body").style.height = "54vh";
    document.getElementById("application-stages-header-zoomIn").style.display = "flex";
    document.getElementById("application-stages-header-zoomOut").style.display = "none";
    document.getElementById("application-stages").style.transition = "width 0.2s, height 0.2s";
    document.getElementById("application-stages-body").style.transition = "width 0.2s, height 0.2s";
}
function boutonAppStagesPinnedIn(){
    document.getElementById("application-stages-header-pinnedIn").style.display = "none";
    document.getElementById("application-stages-header-pinnedOut").style.display = "flex";
    document.getElementById("application-stages-header-close").style.display = "none";
    document.getElementById("application-stages-header-zoomIn").style.display = "none";
    document.getElementById("application-stages-header-zoomOut").style.display = "none";
    document.getElementById("application-stages").style.transition = "width 0.2s, height 0.2s";
    DragAppStages[0].disable();
}
function boutonAppStagesPinnedOut(){
    document.getElementById("application-stages-header-pinnedIn").style.display = "flex";
    document.getElementById("application-stages-header-pinnedOut").style.display = "none";
    document.getElementById("application-stages-header-close").style.display = "flex";
    document.getElementById("application-stages-header-zoomIn").style.display = "flex";
    DragAppStages[0].enable();
}
































/* APPLICATION MENTIONS LEGALES */
function boutonAppMentionsLegalesClickedIn(){
    document.getElementById("application-mentionslegales").style.display = "block";
    document.getElementById("application-mentionslegales").style.animationName = "applicationIn2";
    document.getElementById("application-mentionslegales").style.animationDuration = "0.5s";
}
function boutonAppMentionsLegalesClickedOut(){
    document.getElementById("application-mentionslegales").style.display = "none";
}
function boutonAppMentionsLegalesZoomIn(){
    document.getElementById("application-mentionslegales").style.width = "120vh";
    document.getElementById("application-mentionslegales").style.height = "75vh";
    document.getElementById("application-mentionslegales-body").style.height = "64vh";
    document.getElementById("application-mentionslegales-header-zoomIn").style.display = "none";
    document.getElementById("application-mentionslegales-header-zoomOut").style.display = "flex";
    document.getElementById("application-mentionslegales").style.transition = "width 0.2s, height 0.2s";
    document.getElementById("application-mentionslegales-body").style.transition = "width 0.2s, height 0.2s";
}
function boutonAppMentionsLegalesZoomOut(){
    document.getElementById("application-mentionslegales").style.width = "100vh";
    document.getElementById("application-mentionslegales").style.height = "65vh";
    document.getElementById("application-mentionslegales-body").style.height = "54vh";
    document.getElementById("application-mentionslegales-header-zoomIn").style.display = "flex";
    document.getElementById("application-mentionslegales-header-zoomOut").style.display = "none";
    document.getElementById("application-mentionslegales").style.transition = "width 0.2s, height 0.2s";
    document.getElementById("application-mentionslegales-body").style.transition = "width 0.2s, height 0.2s";
}
function boutonAppMentionsLegalesPinnedIn(){
    document.getElementById("application-mentionslegales-header-pinnedIn").style.display = "none";
    document.getElementById("application-mentionslegales-header-pinnedOut").style.display = "flex";
    document.getElementById("application-mentionslegales-header-close").style.display = "none";
    document.getElementById("application-mentionslegales-header-zoomIn").style.display = "none";
    document.getElementById("application-mentionslegales-header-zoomOut").style.display = "none";
    document.getElementById("application-mentionslegales").style.transition = "width 0.2s, height 0.2s";
    DragAppMentionsLegales[0].disable();
}
function boutonAppMentionsLegalesPinnedOut(){
    document.getElementById("application-mentionslegales-header-pinnedIn").style.display = "flex";
    document.getElementById("application-mentionslegales-header-pinnedOut").style.display = "none";
    document.getElementById("application-mentionslegales-header-close").style.display = "flex";
    document.getElementById("application-mentionslegales-header-zoomIn").style.display = "flex";
    DragAppMentionsLegales[0].enable();
}






























/* APPLICATION PARAMETRE CONFIDENTIALITE */
function boutonAppParametreConfidentialiteClickedIn(){
    document.getElementById("application-parametreconfidentialite").style.display = "block";
    document.getElementById("application-parametreconfidentialite").style.animationName = "applicationIn";
    document.getElementById("application-parametreconfidentialite").style.animationDuration = "0.5s";
}
function boutonAppParametreConfidentialiteClickedOut(){
    document.getElementById("application-parametreconfidentialite").style.display = "none";
}
function boutonAppParametreConfidentialiteZoomIn(){
    document.getElementById("application-parametreconfidentialite").style.width = "120vh";
    document.getElementById("application-parametreconfidentialite").style.height = "75vh";
    document.getElementById("application-parametreconfidentialite-body").style.height = "64vh";
    document.getElementById("application-parametreconfidentialite-header-zoomIn").style.display = "none";
    document.getElementById("application-parametreconfidentialite-header-zoomOut").style.display = "flex";
    document.getElementById("application-parametreconfidentialite").style.transition = "width 0.2s, height 0.2s";
    document.getElementById("application-parametreconfidentialite-body").style.transition = "width 0.2s, height 0.2s";
}
function boutonAppParametreConfidentialiteZoomOut(){
    document.getElementById("application-parametreconfidentialite").style.width = "100vh";
    document.getElementById("application-parametreconfidentialite").style.height = "65vh";
    document.getElementById("application-parametreconfidentialite-body").style.height = "54vh";
    document.getElementById("application-parametreconfidentialite-header-zoomIn").style.display = "flex";
    document.getElementById("application-parametreconfidentialite-header-zoomOut").style.display = "none";
    document.getElementById("application-parametreconfidentialite").style.transition = "width 0.2s, height 0.2s";
    document.getElementById("application-parametreconfidentialite-body").style.transition = "width 0.2s, height 0.2s";
}
function boutonAppParametreConfidentialitePinnedIn(){
    document.getElementById("application-parametreconfidentialite-header-pinnedIn").style.display = "none";
    document.getElementById("application-parametreconfidentialite-header-pinnedOut").style.display = "flex";
    document.getElementById("application-parametreconfidentialite-header-close").style.display = "none";
    document.getElementById("application-parametreconfidentialite-header-zoomIn").style.display = "none";
    document.getElementById("application-parametreconfidentialite-header-zoomOut").style.display = "none";
    document.getElementById("application-parametreconfidentialite").style.transition = "width 0.2s, height 0.2s";
    DragAppParametreConfidentialite[0].disable();
}
function boutonAppParametreConfidentialitePinnedOut(){
    document.getElementById("application-parametreconfidentialite-header-pinnedIn").style.display = "flex";
    document.getElementById("application-parametreconfidentialite-header-pinnedOut").style.display = "none";
    document.getElementById("application-parametreconfidentialite-header-close").style.display = "flex";
    document.getElementById("application-parametreconfidentialite-header-zoomIn").style.display = "flex";
    DragAppParametreConfidentialite[0].enable();
}





























/* APPLICATION PLAN DU SITE */
function boutonAppPlanSiteClickedIn(){
    document.getElementById("application-plandusite").style.display = "block";
    document.getElementById("application-plandusite").style.animationName = "applicationIn2";
    document.getElementById("application-plandusite").style.animationDuration = "0.5s";
}
function boutonAppPlanSiteClickedOut(){
    document.getElementById("application-plandusite").style.display = "none";
}
function boutonAppPlanSiteZoomIn(){
    document.getElementById("application-plandusite").style.width = "120vh";
    document.getElementById("application-plandusite").style.height = "75vh";
    document.getElementById("application-plandusite-body").style.height = "64vh";
    document.getElementById("application-plandusite-header-zoomIn").style.display = "none";
    document.getElementById("application-plandusite-header-zoomOut").style.display = "flex";
    document.getElementById("application-plandusite").style.transition = "width 0.2s, height 0.2s";
    document.getElementById("application-plandusite-body").style.transition = "width 0.2s, height 0.2s";
}
function boutonAppPlanSiteZoomOut(){
    document.getElementById("application-plandusite").style.width = "100vh";
    document.getElementById("application-plandusite").style.height = "65vh";
    document.getElementById("application-plandusite-body").style.height = "54vh";
    document.getElementById("application-plandusite-header-zoomIn").style.display = "flex";
    document.getElementById("application-plandusite-header-zoomOut").style.display = "none";
    document.getElementById("application-plandusite").style.transition = "width 0.2s, height 0.2s";
    document.getElementById("application-plandusite-body").style.transition = "width 0.2s, height 0.2s";
}
function boutonAppPlanSitePinnedIn(){
    document.getElementById("application-plandusite-header-pinnedIn").style.display = "none";
    document.getElementById("application-plandusite-header-pinnedOut").style.display = "flex";
    document.getElementById("application-plandusite-header-close").style.display = "none";
    document.getElementById("application-plandusite-header-zoomIn").style.display = "none";
    document.getElementById("application-plandusite-header-zoomOut").style.display = "none";
    document.getElementById("application-plandusite").style.transition = "width 0.2s, height 0.2s";
    DragAppPlanSite[0].disable();
}
function boutonAppPlanSitePinnedOut(){
    document.getElementById("application-plandusite-header-pinnedIn").style.display = "flex";
    document.getElementById("application-plandusite-header-pinnedOut").style.display = "none";
    document.getElementById("application-plandusite-header-close").style.display = "flex";
    document.getElementById("application-plandusite-header-zoomIn").style.display = "flex";
    DragAppPlanSite[0].enable();
}































function boutonAppTRUDUCUClickedIn(){
    document.getElementById("application-welcome").style.top = "10%";
    document.getElementById("application-welcome").style.left = "10%";

    document.getElementById("application-catalogue").style.top = "10%";
    document.getElementById("application-catalogue").style.left = "10%";

    document.getElementById("application-CV").style.top = "10%";
    document.getElementById("application-CV").style.left = "10%";

    document.getElementById("application-parametre").style.top = "10%";
    document.getElementById("application-parametre").style.left = "10%";

    document.getElementById("application-changementtheme").style.top = "10%";
    document.getElementById("application-changementtheme").style.left = "10%";

    document.getElementById("application-projets").style.top = "10%";
    document.getElementById("application-projets").style.left = "10%";

    document.getElementById("application-stages").style.top = "10%";
    document.getElementById("application-stages").style.left = "10%";

    document.getElementById("application-mentionslegales").style.top = "10%";
    document.getElementById("application-mentionslegales").style.left = "10%";

    document.getElementById("application-parametreconfidentialite").style.top = "10%";
    document.getElementById("application-parametreconfidentialite").style.left = "10%";

    document.getElementById("application-plandusite").style.top = "10%";
    document.getElementById("application-plandusite").style.left = "10%";
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




















