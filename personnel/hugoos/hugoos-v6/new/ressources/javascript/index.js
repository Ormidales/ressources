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
















// FENETRE BIENVENUE
function fermer_fenetreBienvenue(){
    document.getElementById("fenetreBienvenue").style.visibility = "hidden";
    document.getElementById("fenetreBienvenue").style.opacity = "0";
    document.getElementById("fenetreBienvenue").style.transition = "opacity 200ms, visibility 0ms 200ms";
}

// FENETRE BIENVENUE 2
function fermer_fenetreBienvenue2(){
    document.getElementById("fenetreBienvenue2").style.visibility = "hidden";
    document.getElementById("fenetreBienvenue2").style.opacity = "0";
    document.getElementById("fenetreBienvenue2").style.transition = "opacity 200ms, visibility 0ms 200ms";
}























// APPLICATION MENU
function ouvrir_app_menu(){
    document.getElementById("app-menu").style.visibility = "visible";
    document.getElementById("app-menu").style.opacity = "1";
    document.getElementById("app-menu").style.transition = "opacity 200ms";
}
function fermer_app_menu(){
    document.getElementById("app-menu").style.visibility = "hidden";
    document.getElementById("app-menu").style.opacity = "0";
    document.getElementById("app-menu").style.transition = "opacity 200ms, visibility 0ms 200ms";
}

// APPLICATION WELCOME
function ouvrir_app_welcome(){
    document.getElementById("app-welcome").style.visibility = "visible";
    document.getElementById("app-welcome").style.opacity = "1";
    document.getElementById("app-welcome").style.transition = "opacity 200ms";
}
function fermer_app_welcome(){
    document.getElementById("app-welcome").style.visibility = "hidden";
    document.getElementById("app-welcome").style.opacity = "0";
    document.getElementById("app-welcome").style.transition = "opacity 200ms, visibility 0ms 200ms";
}

// APPLICATION PROJETS
function ouvrir_app_projets(){
    document.getElementById("app-projets").style.visibility = "visible";
    document.getElementById("app-projets").style.opacity = "1";
    document.getElementById("app-projets").style.transition = "opacity 200ms";
    document.getElementById("fenetreBienvenue2").style.visibility = "hidden";
    document.getElementById("fenetreBienvenue2").style.opacity = "0";
    document.getElementById("fenetreBienvenue2").style.transition = "opacity 200ms, visibility 0ms 200ms";
}
function fermer_app_projets(){
    document.getElementById("app-projets").style.visibility = "hidden";
    document.getElementById("app-projets").style.opacity = "0";
    document.getElementById("app-projets").style.transition = "opacity 200ms, visibility 0ms 200ms";
}

// APPLICATION STAGES
function ouvrir_app_stages(){
    document.getElementById("app-stages").style.visibility = "visible";
    document.getElementById("app-stages").style.opacity = "1";
    document.getElementById("app-stages").style.transition = "opacity 200ms";
}
function fermer_app_stages(){
    document.getElementById("app-stages").style.visibility = "hidden";
    document.getElementById("app-stages").style.opacity = "0";
    document.getElementById("app-stages").style.transition = "opacity 200ms, visibility 0ms 200ms";
}

// APPLICATION MAGASIN APP
function ouvrir_app_magasin(){
    document.getElementById("app-magasin").style.visibility = "visible";
    document.getElementById("app-magasin").style.opacity = "1";
    document.getElementById("app-magasin").style.transition = "opacity 200ms";
}
function fermer_app_magasin(){
    document.getElementById("app-magasin").style.visibility = "hidden";
    document.getElementById("app-magasin").style.opacity = "0";
    document.getElementById("app-magasin").style.transition = "opacity 200ms, visibility 0ms 200ms";
}

// APPLICATION BACKGROUND
function ouvrir_app_background(){
    document.getElementById("app-background").style.visibility = "visible";
    document.getElementById("app-background").style.opacity = "1";
    document.getElementById("app-background").style.transition = "opacity 200ms";
}
function fermer_app_background(){
    document.getElementById("app-background").style.visibility = "hidden";
    document.getElementById("app-background").style.opacity = "0";
    document.getElementById("app-background").style.transition = "opacity 200ms, visibility 0ms 200ms";
}

// APPLICATION OPTIONS
function ouvrir_app_options(){
    document.getElementById("app-options").style.visibility = "visible";
    document.getElementById("app-options").style.opacity = "1";
    document.getElementById("app-options").style.transition = "opacity 200ms";
}
function fermer_app_options(){
    document.getElementById("app-options").style.visibility = "hidden";
    document.getElementById("app-options").style.opacity = "0";
    document.getElementById("app-options").style.transition = "opacity 200ms, visibility 0ms 200ms";
}

// APPLICATION CV
function ouvrir_app_cv(){
    document.getElementById("app-cv").style.visibility = "visible";
    document.getElementById("app-cv").style.opacity = "1";
    document.getElementById("app-cv").style.transition = "opacity 200ms";
}
function fermer_app_cv(){
    document.getElementById("app-cv").style.visibility = "hidden";
    document.getElementById("app-cv").style.opacity = "0";
    document.getElementById("app-cv").style.transition = "opacity 200ms, visibility 0ms 200ms";
}

// APPLICATION CERTIFICATIONS
function ouvrir_app_certifications(){
    document.getElementById("app-certifications").style.visibility = "visible";
    document.getElementById("app-certifications").style.opacity = "1";
    document.getElementById("app-certifications").style.transition = "opacity 200ms";
}
function fermer_app_certifications(){
    document.getElementById("app-certifications").style.visibility = "hidden";
    document.getElementById("app-certifications").style.opacity = "0";
    document.getElementById("app-certifications").style.transition = "opacity 200ms, visibility 0ms 200ms";
}

// APPLICATION VEILLE TECHNOLOGIQUE
function ouvrir_app_veilletechno(){
    document.getElementById("app-veilletechno").style.visibility = "visible";
    document.getElementById("app-veilletechno").style.opacity = "1";
    document.getElementById("app-veilletechno").style.transition = "opacity 200ms";
}
function fermer_app_veilletechno(){
    document.getElementById("app-veilletechno").style.visibility = "hidden";
    document.getElementById("app-veilletechno").style.opacity = "0";
    document.getElementById("app-veilletechno").style.transition = "opacity 200ms, visibility 0ms 200ms";
}

// APPLICATION IMAGES A COLLER
function ouvrir_app_images(){
    document.getElementById("app-images").style.visibility = "visible";
    document.getElementById("app-images").style.opacity = "1";
    document.getElementById("app-images").style.transition = "opacity 200ms";
}
function fermer_app_images(){
    document.getElementById("app-images").style.visibility = "hidden";
    document.getElementById("app-images").style.opacity = "0";
    document.getElementById("app-images").style.transition = "opacity 200ms, visibility 0ms 200ms";
}

// APPLICATION MENTIONS LEGALES
function ouvrir_app_mentionslegales(){
    document.getElementById("app-mentionslegales").style.visibility = "visible";
    document.getElementById("app-mentionslegales").style.opacity = "1";
    document.getElementById("app-mentionslegales").style.transition = "opacity 200ms";
}
function fermer_app_mentionslegales(){
    document.getElementById("app-mentionslegales").style.visibility = "hidden";
    document.getElementById("app-mentionslegales").style.opacity = "0";
    document.getElementById("app-mentionslegales").style.transition = "opacity 200ms, visibility 0ms 200ms";
}

// APPLICATION PARAMETRE CONFIDENTIALITE
function ouvrir_app_parametreconfidentialite(){
    document.getElementById("app-parametreconfidentialite").style.visibility = "visible";
    document.getElementById("app-parametreconfidentialite").style.opacity = "1";
    document.getElementById("app-parametreconfidentialite").style.transition = "opacity 200ms";
}
function fermer_app_parametreconfidentialite(){
    document.getElementById("app-parametreconfidentialite").style.visibility = "hidden";
    document.getElementById("app-parametreconfidentialite").style.opacity = "0";
    document.getElementById("app-parametreconfidentialite").style.transition = "opacity 200ms, visibility 0ms 200ms";
}

// APPLICATION PLAN DU SITE
function ouvrir_app_plandusite(){
    document.getElementById("app-plandusite").style.visibility = "visible";
    document.getElementById("app-plandusite").style.opacity = "1";
    document.getElementById("app-plandusite").style.transition = "opacity 200ms";
}
function fermer_app_plandusite(){
    document.getElementById("app-plandusite").style.visibility = "hidden";
    document.getElementById("app-plandusite").style.opacity = "0";
    document.getElementById("app-plandusite").style.transition = "opacity 200ms, visibility 0ms 200ms";
}

// APPLICATION MENU DE RETROCOMPATIBILITE
function ouvrir_app_retrocomp(){
    document.getElementById("app-retrocomp").style.visibility = "visible";
    document.getElementById("app-retrocomp").style.opacity = "1";
    document.getElementById("app-retrocomp").style.transition = "opacity 200ms";
}
function fermer_app_retrocomp(){
    document.getElementById("app-retrocomp").style.visibility = "hidden";
    document.getElementById("app-retrocomp").style.opacity = "0";
    document.getElementById("app-retrocomp").style.transition = "opacity 200ms, visibility 0ms 200ms";
}


























// FONCTION DE RESIZE DE L'APPLICATION PROJETS
function zoomIn_app_projets(){
    document.getElementById("app-projets").className = "absolute top-6 left-6 w-[115vh] p-2 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]";
    document.getElementById("app-projets-body").className = "w-full h-[65vh] overflow-y-scroll mt-5 bg-stone-800 rounded-lg p-3";
    document.getElementById("app-projets-body-grid").className = "w-full grid grid-cols-3 gap-5";
    document.getElementById("app-projets").style.transition = "width 0.2s";
    document.getElementById("app-projets-body").style.transition = "height 0.2s";
}
function zoomOut_app_projets(){
    document.getElementById("app-projets").className = "absolute top-6 left-6 w-[77vh] p-2 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]";
    document.getElementById("app-projets-body").className = "w-full h-[55vh] overflow-y-scroll mt-5 bg-stone-800 rounded-lg p-3";
    document.getElementById("app-projets-body-grid").className = "w-full grid grid-cols-2 gap-5";
    document.getElementById("app-projets").style.transition = "width 0.2s";
    document.getElementById("app-projets-body").style.transition = "height 0.2s";
}

// FONCTION DE RESIZE DE L'APPLICATION STAGES
function zoomIn_app_stages(){
    document.getElementById("app-stages").className = "absolute top-6 left-6 w-[100vh] p-2 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]";
    document.getElementById("app-stages-body").className = "w-full h-[60vh] mt-5 overflow-y-scroll bg-stone-800 rounded-lg p-3";
    document.getElementById("app-stages").style.transition = "width 0.2s";
    document.getElementById("app-stages-body").style.transition = "height 0.2s";
}
function zoomOut_app_stages(){
    document.getElementById("app-stages").className = "absolute top-6 left-6 w-[75vh] p-2 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]";
    document.getElementById("app-stages-body").className = "w-full h-[45vh] mt-5 overflow-y-scroll bg-stone-800 rounded-lg p-3";
    document.getElementById("app-stages").style.transition = "width 0.2s";
    document.getElementById("app-stages-body").style.transition = "height 0.2s";
}

// FONCTION DE RESIZE DE L'APPLICATION CV
function zoomIn_app_cv(){
    document.getElementById("app-cv").className = "absolute top-6 left-6 w-[95vh] p-2 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]";
    document.getElementById("app-cv-body").className = "w-full h-[75vh] mt-5 bg-stone-800 rounded-lg p-3 overflow-y-scroll";
    document.getElementById("app-cv").style.transition = "width 0.2s";
    document.getElementById("app-cv-body").style.transition = "height 0.2s";
}
function zoomOut_app_cv(){
    document.getElementById("app-cv").className = "absolute top-6 left-6 w-[75vh] p-2 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]";
    document.getElementById("app-cv-body").className = "w-full h-[55vh] mt-5 bg-stone-800 rounded-lg p-3 overflow-y-scroll";
    document.getElementById("app-cv").style.transition = "width 0.2s";
    document.getElementById("app-cv-body").style.transition = "height 0.2s";
}

// FONCTION DE RESIZE DE L'APPLICATION CERTIFICATIONS
function zoomIn_app_certifications(){
    document.getElementById("app-certifications").className = "absolute top-6 left-6 w-[95vh] p-2 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]";
    document.getElementById("app-certifications-body").className = "w-full h-[75vh] mt-5 bg-stone-800 rounded-lg p-3 overflow-y-scroll";
    document.getElementById("app-certifications").style.transition = "width 0.2s";
    document.getElementById("app-certifications-body").style.transition = "height 0.2s";
}
function zoomOut_app_certifications(){
    document.getElementById("app-certifications").className = "absolute top-6 left-6 w-[75vh] p-2 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]";
    document.getElementById("app-certifications-body").className = "w-full h-[55vh] mt-5 bg-stone-800 rounded-lg p-3 overflow-y-scroll";
    document.getElementById("app-certifications").style.transition = "width 0.2s";
    document.getElementById("app-certifications-body").style.transition = "height 0.2s";
}




























// CHANGEMENT BACKGROUND (COULEUR VERT)
function background_green(){
    document.getElementById("bureau-xl").className = " md:flex hiddenw-full h-[100vh] bg-green-500 bg-cover bg-center flex items-center justify-center flex-wrap overflow-hidden";
    document.getElementById("bureau-xl").style.transition = "background 200ms";
}

// CHANGEMENT BACKGROUND (COULEUR JAUNE)
function background_yellow(){
    document.getElementById("bureau-xl").className = "md:flex hidden w-full h-[100vh] bg-yellow-500 bg-cover bg-center flex items-center justify-center flex-wrap overflow-hidden";
    document.getElementById("bureau-xl").style.transition = "background 200ms";
}

// CHANGEMENT BACKGROUND (COULEUR VIOLET)
function background_violet(){
    document.getElementById("bureau-xl").className = "md:flex hidden w-full h-[100vh] bg-violet-500 bg-cover bg-center flex items-center justify-center flex-wrap overflow-hidden";
    document.getElementById("bureau-xl").style.transition = "background 200ms";
}

// CHANGEMENT BACKGROUND (GRADIENT 1)
function background_gradient1(){
    document.getElementById("bureau-xl").className = "md:flex hidden w-full h-[100vh] bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 bg-cover bg-center flex items-center justify-center flex-wrap overflow-hidden";
    document.getElementById("bureau-xl").style.transition = "background 200ms";
}

// CHANGEMENT BACKGROUND (GRADIENT 2)
function background_gradient2(){
    document.getElementById("bureau-xl").className = "md:flex hidden w-full h-[100vh] bg-gradient-to-r from-green-200 via-green-300 to-blue-500 bg-cover bg-center flex items-center justify-center flex-wrap overflow-hidden";
    document.getElementById("bureau-xl").style.transition = "background 200ms";
}

// CHANGEMENT BACKGROUND (GRADIENT 3)
function background_gradient3(){
    document.getElementById("bureau-xl").className = "md:flex hidden w-full h-[100vh] bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-cover bg-center flex items-center justify-center flex-wrap overflow-hidden";
    document.getElementById("bureau-xl").style.transition = "background 200ms";
}

// CHANGEMENT BACKGROUND (GRADIENT 4)
function background_gradient4(){
    document.getElementById("bureau-xl").className = "md:flex hidden w-full h-[100vh] bg-gradient-to-r from-[#43e97b] to-[#38f9d7] bg-cover bg-center flex items-center justify-center flex-wrap overflow-hidden";
    document.getElementById("bureau-xl").style.transition = "background 200ms";
}

// CHANGEMENT BACKGROUND (GRADIENT 5)
function background_gradient5(){
    document.getElementById("bureau-xl").className = "md:flex hidden w-full h-[100vh] bg-gradient-to-r from-[#fa709a] to-[#fee140] bg-cover bg-center flex items-center justify-center flex-wrap overflow-hidden";
    document.getElementById("bureau-xl").style.transition = "background 200ms";
}

// CHANGEMENT BACKGROUND (IMAGE 1)
function background_image1(){
    document.getElementById("bureau-xl").className = "md:flex hidden w-full h-[100vh] bg-[url('ressources/images/bg-1.webp')] bg-cover bg-center flex items-center justify-center flex-wrap overflow-hidden";
    document.getElementById("bureau-xl").style.transition = "background 200ms";
}

// CHANGEMENT BACKGROUND (IMAGE 2)
function background_image2(){
    document.getElementById("bureau-xl").className = "md:flex hidden w-full h-[100vh] bg-[url('ressources/images/bg-2.webp')] bg-cover bg-center flex items-center justify-center flex-wrap overflow-hidden";
    document.getElementById("bureau-xl").style.transition = "background 200ms";
}

// CHANGEMENT BACKGROUND (IMAGE 3)
function background_image3(){
    document.getElementById("bureau-xl").className = "md:flex hidden w-full h-[100vh] bg-[url('ressources/images/bg-3.webp')] bg-cover bg-center flex items-center justify-center flex-wrap overflow-hidden";
    document.getElementById("bureau-xl").style.transition = "background 200ms";
}

// CHANGEMENT BACKGROUND (IMAGE 4)
function background_image4(){
    document.getElementById("bureau-xl").className = "md:flex hidden w-full h-[100vh] bg-[url('ressources/images/bg-4.webp')] bg-cover bg-center flex items-center justify-center flex-wrap overflow-hidden";
    document.getElementById("bureau-xl").style.transition = "background 200ms";
}

// CHANGEMENT BACKGROUND (IMAGE 5)
function background_image5(){
    document.getElementById("bureau-xl").className = "md:flex hidden w-full h-[100vh] bg-[url('ressources/images/bg-5.webp')] bg-cover bg-center flex items-center justify-center flex-wrap overflow-hidden";
    document.getElementById("bureau-xl").style.transition = "background 200ms";
}

// CHANGEMENT BACKGROUND (IMAGE 6)
function background_image6(){
    document.getElementById("bureau-xl").className = "md:flex hidden w-full h-[100vh] bg-[url('ressources/images/bg-6.webp')] bg-cover bg-center flex items-center justify-center flex-wrap overflow-hidden";
    document.getElementById("bureau-xl").style.transition = "background 200ms";
}