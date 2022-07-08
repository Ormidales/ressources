<?php



?>
<html lang="fr">
	<head>
		<!-- INFO -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name='mobile-web-app-capable' content='yes'>
		<meta name='apple-mobile-web-app-capable' content='yes'>
		<title>Témoignages de la Classe | BTS SIO SLAM d'Auch (32)</title>
		<meta name="description" content="Témoignages de la Classe | BTS SIO SLAM d'Auch (32).">
		<meta property="og:title" content="Témoignages de la Classe | BTS SIO SLAM d'Auch (32)">
		<meta property="og:description" content="Témoignages de la Classe | BTS SIO SLAM d'Auch (32).">
		<meta property="og:url" content="https://btssio32ppe2v8.netlify.app">
		<meta name="twitter:title" content="Témoignages de la Classe | BTS SIO SLAM d'Auch (32)">
		<meta name="twitter:description" content="Témoignages de la Classe | BTS SIO SLAM d'Auch (32).">
		<meta name="twitter:url" content="https://btssio32ppe2v8.netlify.app">
		<meta name="version" content="1.0">
		<meta name="author" content="Hugo Doueil, Bertrand Cassagne, Melvin Duquenne">
		<link rel="shortcut icon" href="../img/icon/icon.ico" type="image/x-icon">

		<!-- POUR MOBILE THEME PLUS HAUT QUE LE TITRE DE LA PAGE -->
		<meta name="theme-color" content="#262626">
		<meta name="msapplication-TileColor" content="#262626">

		<!-- UIkit CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/css/uikit.min.css" />

		<!-- UIkit JS -->
		<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/js/uikit.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/js/uikit-icons.min.js"></script>

		<!-- FONT GOOGLE -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

		<!-- ANIMATE CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

		<!-- IMAGES -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

		<!-- STYLE -->
		<style type="text/css">
			:root {
			  --animate-duration: 600ms;
			  --animate-delay: 0.3s;
			}
			*{
				-webkit-font-smoothing: antialiased;
  				-moz-osx-font-smoothing: grayscale;
			}
			@media screen and (max-width: 640px){
				#logo{
					opacity: 0;
					display: none;
					transform: scale(0.1);
				}
				#bouton-menu{
					transform: scale(0.8);
				}
				#conteneur-titre-text{
					transform: scale(0.8);
				}
			}
		</style>
	</head>
	<body>
		<!-- HEADER AVEC LE SIGLE BTS SIO SLAM AUCH -->
		<div class="uk-container uk-container-expand uk-background-cover uk-flex animate__animated animate__fadeInDown" uk-parallax="bgy: -200" style="height: 90vh; display: flex; align-items: center; justify-content: center; background: url(../img/index/bg.svg);">
			<h1 style="color: transparent; font-family: Poppins, sans-serif; text-align: center; -webkit-text-stroke: 1px #CDCDCD; text-shadow: -5px -5px #FFFFFF; font-size: 8vw;">TÉMOIGNAGES DE LA CLASSE</h1>
		</div>

		<!-- MENU NAVBAR AVEC BOUTON ET OFF CANVAS -->
		<div class="uk-container uk-container-expand uk-background-cover uk-flex uk-light animate__animated animate__fadeInLeft" style="height: 10vh; display: flex; align-items: center; justify-content: space-evenly; background-color: #262626;" uk-sticky>
			<img data-src="img\logos\pardailhan.png" width="100px" height="" alt="" uk-img style="filter: drop-shadow(2px 2px 2px #222);" id="logo">
			<button id="bouton-menu" class="uk-button uk-button-default" type="button" uk-toggle="target: #offcanvas-nav-primary" uk-tooltip="Ouvrir le menu pour naviguer sur le site web du BTS SIO SLAM d'Auch (32)"><span class="uk-margin-small-right" uk-icon="icon: grid"></span>Ouvrir le menu</button>
			<img data-src="img\logos\logoSIO.png" width="100px" height="" alt="" uk-img style="filter: drop-shadow(2px 2px 2px #222);" id="logo">
		</div>
		<div id="offcanvas-nav-primary" uk-offcanvas="overlay: true" style="background: rgba( 255, 255, 255, 0.10 ); box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 ); backdrop-filter: blur( 3.0px ); -webkit-backdrop-filter: blur( 3.0px );" uk-overflow-auto>
		    <div class="uk-offcanvas-bar uk-flex uk-flex-column">
		    	<button class="uk-offcanvas-close" type="button" uk-close></button>
		        <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
		            <li><a href="../index.html"><span class="uk-margin-small-right" uk-icon="icon: table"></span>Accueil du BTS</a></li>
		            <hr class="uk-divider-small">
		            <li><a href="poursuiteetude.html"><span class="uk-margin-small-right" uk-icon="icon: plus-circle"></span>Les poursuites d'études possibles et débouchés professionnels</a></li>
		            <hr class="uk-divider-small">
		            <li><a href="sallesdeclasse.html"><span class="uk-margin-small-right" uk-icon="icon: camera"></span>Les salles de classe<span class="uk-badge">360°</span></a></li>
		            <hr class="uk-divider-small">
		            <li><a href="equipement.html"><span class="uk-margin-small-right" uk-icon="icon: desktop"></span>Outils Utilisés</a></li>
		            <hr class="uk-divider-small">
		            <li><a href="equipepedago.html"><span class="uk-margin-small-right" uk-icon="icon: users"></span>Équipe pédagogique / matières</a></li>
		            <hr class="uk-divider-small">
		            <li><a href="competence.html"><span class="uk-margin-small-right" uk-icon="icon: world"></span>Voir les compétences</a></li>
		            <hr class="uk-divider-small">
		            <li><a href="actualite.html"><span class="uk-margin-small-right" uk-icon="icon: warning"></span>Actualités</a></li>
		            <hr class="uk-divider-small">
		            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Témoignages</a></li>
		            <hr class="uk-divider-small">
		            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: commenting"></span>Nous contacter</a></li>
		        </ul>
		    </div>
		</div>

        <!-- CONTENEUR AVEC TITRE -->
		<div class="uk-container uk-container-expand uk-background-cover" style="background-color: #262626;">
			<div class="uk-container uk-container-expand uk-background-cover uk-flex" style="padding-top: 2vh; display: flex; align-items: center; justify-content: center;">
				<p class="uk-text-lead" style="font-family: Poppins, sans-serif; color: white; font-size: 40px; text-align: center;" id="conteneur-titre-text">Les témoignages des élèves actuels et anciens</p>
			</div>
			<div class="uk-container uk-container-expand uk-background-cover uk-flex" style="padding-top: 2vh; padding-bottom: 4vh; display: flex; align-items: center; justify-content: center;">
				<p class="uk-text-meta" style="font-family: Poppins, sans-serif; color: white; font-size: 20px; text-align: center;" id="conteneur-titre-text">Vous pouvez tous les consulter ici</p>
			</div>
		</div>

		<div class="uk-container uk-container-expand uk-background-cover" style="background-color: #ffffff; padding-top: 10vh; padding-bottom: 5vh;">
			<article class="uk-comment uk-comment-primary">
			    <header class="uk-comment-header">
			        <div class="uk-grid-medium uk-flex-middle" uk-grid>
			            <div class="uk-width-auto">
			                <img class="uk-comment-avatar" src="../img/equipement/ordinateur.jpg" width="80" height="80" alt="">
			            </div>
			            <div class="uk-width-expand">
			                <h4 class="uk-comment-title uk-margin-remove">Hugo Doueil</h4>
			                <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
			                    <li>12 days ago</li>
			                </ul>
			            </div>
			        </div>
			    </header>
			    <div class="uk-comment-body">
			        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
			    </div>
			</article>
		</div>

		<div class="uk-container uk-container-expand uk-background-cover" style="background-color: #ffffff; padding-top: 5vh; padding-bottom: 5vh;">
			<article class="uk-comment uk-comment-primary">
			    <header class="uk-comment-header">
			        <div class="uk-grid-medium uk-flex-middle" uk-grid>
			            <div class="uk-width-auto">
			                <img class="uk-comment-avatar" src="../img/equipement/ordinateur.jpg" width="80" height="80" alt="">
			            </div>
			            <div class="uk-width-expand">
			                <h4 class="uk-comment-title uk-margin-remove">Bertrand Cassagne</h4>
			                <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
			                    <li>12 days ago</li>
			                </ul>
			            </div>
			        </div>
			    </header>
			    <div class="uk-comment-body">
			        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
			    </div>
			</article>
		</div>

		<div class="uk-container uk-container-expand uk-background-cover" style="background-color: #ffffff; padding-top: 5vh; padding-bottom: 10vh;">
			<article class="uk-comment uk-comment-primary">
			    <header class="uk-comment-header">
			        <div class="uk-grid-medium uk-flex-middle" uk-grid>
			            <div class="uk-width-auto">
			                <img class="uk-comment-avatar" src="../img/equipement/ordinateur.jpg" width="80" height="80" alt="">
			            </div>
			            <div class="uk-width-expand">
			                <h4 class="uk-comment-title uk-margin-remove">Melwin Duquenne</h4>
			                <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
			                    <li>12 days ago</li>
			                </ul>
			            </div>
			        </div>
			    </header>
			    <div class="uk-comment-body">
			        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
			    </div>
			</article>
		</div>

		<!-- FOOTER -->
		<div class="uk-container uk-container-expand uk-background-cover" style="background-color: #262626; height: 4vh;"></div>
		<div class="uk-container uk-container-expand uk-background-cover" style="padding-top: 4vh; padding-bottom: 4vh; display: flex; align-items: center; justify-content: center; background: url(../img/index/bg.svg);">
			<p class="uk-text-lead" style="font-family: Poppins, sans-serif; color: white; font-size: 15px; text-align: center;">BTS SIO SLAM - Lycée Pardailhan - 57 Chemin de Baron, 32008 Auch - Tél : 05.62.61.42.50 - Conception : Hugo Doueil, Bertrand Cassagne, Melvin Duquenne</p>
		</div>
		<div class="uk-container uk-container-expand uk-background-cover" style="background-color: #262626; padding-top: 4vh; display: flex; align-items: center; justify-content: space-evenly;">
			<a href="#"><p style="font-family: Poppins, sans-serif; color: white; font-size: 15px; text-align: center;">Mentions Légales</p></a>
			<a href="#"><p style="font-family: Poppins, sans-serif; color: white; font-size: 15px; text-align: center;">Charte des Données Personnelles</p></a>
			<a href="#"><p style="font-family: Poppins, sans-serif; color: white; font-size: 15px; text-align: center;">Réalisation du site</p></a>
			<a href="#"><p style="font-family: Poppins, sans-serif; color: white; font-size: 15px; text-align: center;">Plan du site</p></a>
		</div>

		<!-- VANILLA TILT -->
		<script type="text/javascript" src="../javascript/vanilla-tilt.js"></script>

		<!-- IMAGES -->
		<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

	</body>
</html>