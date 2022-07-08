<!DOCTYPE html>
<html lang="fr">
	<head>
		<!-- INFO -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name='mobile-web-app-capable' content='yes'>
		<meta name='apple-mobile-web-app-capable' content='yes'>
		<link rel="canonical" href="https://btssio32ppe2v8.netlify.app">
		<title>BTS SIO SLAM Auch | Page d'accueil</title>
		<meta name="title" content="BTS SIO SLAM Auch | Page d'accueil">
		<meta name="description" content="Page d'accueil du BTS SIO SLAM situé au lycée Pardailhan à Auch (32).">
		<meta property="og:type" content="website">
		<meta property="og:url" content="https://btssio32ppe2v8.netlify.app">
		<meta property="og:title" content="BTS SIO SLAM Auch | Page d'accueil">
		<meta property="og:description" content="Page d'accueil du BTS SIO SLAM situé au lycée Pardailhan à Auch (32).">
		<meta property="og:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">
		<meta property="twitter:card" content="summary_large_image">
		<meta property="twitter:url" content="https://btssio32ppe2v8.netlify.app">
		<meta property="twitter:title" content="BTS SIO SLAM Auch | Page d'accueil">
		<meta property="twitter:description" content="Page d'accueil du BTS SIO SLAM situé au lycée Pardailhan à Auch (32).">
		<meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">
		<meta name="version" content="1.0">
		<meta name="author" content="Hugo Doueil, Bertrand Cassagne, Melvin Duquenne">
		<link rel="shortcut icon" href="img/icon/icon.ico" type="image/x-icon">

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
			#text-a-baisser{
				transition: all 0.2s ease;
				padding: 2vh;
				border-radius: 2vh;
				background-color: transparent;
			}
			#a-hover:hover #text-a-baisser{
				transform: rotateZ(-2.5deg) scale(1.1);
				background-color: #262626;
				transition: all 0.2s ease;
			}
			#a-hover:active #text-a-baisser{
				transform: rotateZ(0deg);
				transition: all 0.2s ease;
			}
			#text-a-baisser2{
				transition: all 0.2s ease;
				padding: 2vh;
				border-radius: 2vh;
				background-color: transparent;
			}
			#a-hover2:hover #text-a-baisser2{
				transform: rotateZ(2.5deg) scale(1.1);
				background-color: #262626;
				transition: all 0.2s ease;
			}
			#a-hover2:active #text-a-baisser2{
				transform: rotateZ(0deg);
				transition: all 0.2s ease;
			}
			@media screen and (max-width: 640px){
				#logo{
					opacity: 0;
					display: none;
				}
				#bouton-menu{
					transform: scale(0.8);
				}
				#conteneur-titre-text{
					transform: scale(0.8);
				}
				#text-a-baisser{
					transition: all 0.2s ease;
					padding: 1vh;
					border-radius: 2vh;
					background-color: transparent;
				}
				#text-a-baisser2{
					transition: all 0.2s ease;
					padding: 1vh;
					border-radius: 2vh;
					background-color: transparent;
				}
				#a-hover:hover #text-a-baisser{
					transform: scale(1.0);
					background-color: #262626;
					transition: all 0.2s ease;
				}
				#a-hover2:hover #text-a-baisser2{
					transform: scale(1.0);
					background-color: #262626;
					transition: all 0.2s ease;
				}
			}
		</style>
	</head>
	<body>
		<!-- HEADER AVEC LE SIGLE BTS SIO SLAM AUCH -->
		<div class="uk-container uk-container-expand uk-background-cover uk-flex animate__animated animate__fadeInDown" uk-parallax="bgy: -200" style="height: 90vh; display: flex; align-items: center; justify-content: center; background: url(img/index/bg.svg);">
			<h1 style="color: transparent; font-family: Poppins, sans-serif; text-align: center; -webkit-text-stroke: 1px #CDCDCD; text-shadow: -5px -5px #FFFFFF; font-size: 8vw;">BTS SIO SLAM AUCH</h1>
		</div>

		<!-- MENU NAVBAR AVEC BOUTON ET OFF CANVAS -->
		<div class="uk-container uk-container-expand uk-background-cover uk-flex uk-light animate__animated animate__fadeInLeft" style="height: 10vh; display: flex; align-items: center; justify-content: space-evenly; background-color: #262626;" uk-sticky>
			<a href="https://pardailhan.mon-ent-occitanie.fr" onclick="window.open(this.href); return false;">
				<img data-src="img\logos\pardailhan.png" width="100px" height="" alt="Logo du lycée Pardailhan" name="Logo du lycée Pardailhan" uk-img style="filter: drop-shadow(2px 2px 2px #222);" id="logo">
			</a>
			<button id="bouton-menu" class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #offcanvas-nav-primary" uk-tooltip="Ouvrir le menu pour naviguer sur le site web du BTS SIO SLAM d'Auch (32)"><span class="uk-margin-small-right" uk-icon="icon: grid"></span>Ouvrir le menu</button>
			<a href="index.html" onclick="window.open(this.href); return false;">
				<img data-src="img\logos\logoSIO.png" width="100px" height="" alt="Logo du BTS SIO SLAM Auch" name="Logo du BTS SIO SLAM Auch" uk-img style="filter: drop-shadow(3px 3px 3px 3px #3BFF58);" id="logo">
			</a>
		</div>
		<div id="offcanvas-nav-primary" uk-offcanvas="overlay: true" style="background: rgba( 255, 255, 255, 0.10 ); box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 ); backdrop-filter: blur( 3.0px ); -webkit-backdrop-filter: blur( 3.0px );" uk-overflow-auto>
		    <div class="uk-offcanvas-bar uk-flex uk-flex-column">
		    	<button class="uk-offcanvas-close" type="button" uk-close></button>
		        <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
		            <li><a href="index.html"><span class="uk-margin-small-right" uk-icon="icon: table"></span>Accueil du BTS</a></li>
		            <hr class="uk-divider-small">
		            <li><a href="html/poursuiteetude.html"><span class="uk-margin-small-right" uk-icon="icon: plus-circle"></span>Les poursuites d'études possibles et débouchés professionnels</a></li>
		            <hr class="uk-divider-small">
		            <li><a href="html/sallesdeclasse.html"><span class="uk-margin-small-right" uk-icon="icon: camera"></span>Les salles de classe<span class="uk-badge">360°</span></a></li>
		            <hr class="uk-divider-small">
		            <li><a href="html/equipement.html"><span class="uk-margin-small-right" uk-icon="icon: desktop"></span>Outils Utilisés</a></li>
		            <hr class="uk-divider-small">
		            <li><a href="html/equipepedago.html"><span class="uk-margin-small-right" uk-icon="icon: users"></span>Équipe pédagogique / matières</a></li>
		            <hr class="uk-divider-small">
		            <li><a href="html/competence.html"><span class="uk-margin-small-right" uk-icon="icon: world"></span>Voir les compétences</a></li>
		            <hr class="uk-divider-small">
		            <li><a href="html/actualite.html"><span class="uk-margin-small-right" uk-icon="icon: warning"></span>Actualités</a></li>
		            <hr class="uk-divider-small">
		            <li><a href="html/temoignage.html"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Témoignages</a></li>
		            <hr class="uk-divider-small">
		            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: commenting"></span>Nous contacter</a></li>
		        </ul>
		    </div>
		</div>

		<!-- ALERTE POUR LE COVID 19 -->
		<!--<div class="uk-alert-primary" uk-alert style="margin-bottom: 0; margin-top: 0;">
		    <a class="uk-alert-close" uk-close></a>
		    <p><span class="uk-margin-small-right" uk-icon="info"></span>La vie étudiante avec le COVID-19, comment s'y prendre ?</p>
		</div>-->

		<!-- ALERTE AVEC DATE DE RENTRÉE -->
		<!--<div class="uk-alert-primary" uk-alert style="margin-bottom: 0; margin-top: 0; padding: 2.5rem;">
		    <a class="uk-alert-close" uk-close></a>
		    <p>Timer avant la rentrée :</p>
		    <p>
		    	<div class="uk-grid-small uk-child-width-auto" uk-grid uk-countdown="date: 2021-09-06T10:00:45+00:00">
					<div>
						<div class="uk-countdown-number uk-countdown-days"></div>
						<div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Jours</div>
					</div>
					<div class="uk-countdown-separator">:</div>
					<div>
						<div class="uk-countdown-number uk-countdown-hours"></div>
						<div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Heures</div>
					</div>
					<div class="uk-countdown-separator">:</div>
					<div>
						<div class="uk-countdown-number uk-countdown-minutes"></div>
						<div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Minutes</div>
					</div>
					<div class="uk-countdown-separator">:</div>
					<div>
						<div class="uk-countdown-number uk-countdown-seconds"></div>
						<div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Secondes</div>
					</div>
				</div>
		    </p>
		    <p>Rendez vous le 6 septembre à 8h pour les internes et à 9h pour les autres !</p>
		</div>-->

		<!-- CONTENEUR AVEC TITRE -->
		<div class="uk-container uk-container-expand uk-background-cover" style="background-color: #262626;">
			<div class="uk-container uk-container-expand uk-background-cover uk-flex" style="padding-top: 2vh; display: flex; align-items: center; justify-content: center;">
				<p class="uk-text-lead" style="font-family: Poppins, sans-serif; color: white; font-size: 40px; text-align: center;" id="conteneur-titre-text">C'est quoi le BTS SIO SLAM ?</p>
			</div>
			<div class="uk-container uk-container-expand uk-background-cover uk-flex" style="padding-top: 2vh; padding-bottom: 1vh; display: flex; align-items: center; justify-content: center;">
				<a href="https://www.onisep.fr/Ressources/Univers-Formation/Formations/Post-bac/bts-services-informatiques-aux-organisations-option-b-solutions-logicielles-et-applications-metiers" onclick="window.open(this.href); return false;">
					<p class="uk-text-meta" style="font-family: Poppins, sans-serif; color: white; font-size: 20px; text-align: center;" id="conteneur-titre-text">Tout savoir grâce au site de l'Onisep (cliquez sur ce lien pour aller sur le site de l'Onisep)</p>
				</a>
			</div>
		</div>

		<!-- CONTENEUR AVEC DES LIENS VERS D'AUTRES PAGES -->
		<div class="uk-container uk-container-expand uk-background-cover uk-flex" style="padding-top: 10vh; display: flex; align-items: center; justify-content: space-evenly; flex-grow: row; flex-wrap: wrap; background: url(img/index/bg2.svg);" uk-parallax="bgy: -200">

			<!-- CARTE COURS PROPOSÉS -->
			<div class="uk-card uk-card-default uk-width-1-4@m" style="margin-bottom: 10vh; transform-style: preserve-3d; transform: perspective(1000px); border-radius: 1vh;" data-tilt data-tilt-scale="0.9">
			    <div class="uk-card-header">
			        <div class="uk-grid-small uk-flex-middle" uk-grid>
			            <div class="uk-width-auto">
			                <p class="uk-card-title uk-margin-remove-bottom" style="transform: translateZ(20px); font-family: Poppins, sans-serif;">Les cours proposés :</p>
			            </div>
			        </div>
			    </div>
			    <div class="uk-card-body">
			        <p style="transform: translateZ(20px); font-family: Poppins, sans-serif;">Il y a plusieurs cours proposés dans la classe du BTS SIO SLAM à Auch (32), cliquez sur le lien en bas pour les voir.</p>
			    </div>
			    <div class="uk-card-footer">
			        <a href="html/equipepedago.html" class="uk-button uk-button-default" style="transform: translateZ(20px); font-family: Poppins, sans-serif;">Voir les cours proposés</a>
			    </div>
			</div>

			<!-- CARTE SALLES DE CLASSES -->
			<div class="uk-card uk-card-default uk-width-1-4@m" style="margin-bottom: 10vh; transform-style: preserve-3d; transform: perspective(1000px); border-radius: 1vh;" data-tilt data-tilt-scale="0.9">
			    <div class="uk-card-header">
			        <div class="uk-grid-small uk-flex-middle" uk-grid>
			            <div class="uk-width-auto">
			                <p class="uk-card-title uk-margin-remove-bottom" style="transform: translateZ(20px); font-family: Poppins, sans-serif;">Les salles de classes :</p>
			            </div>
			        </div>
			    </div>
			    <div class="uk-card-body">
			        <p style="transform: translateZ(20px); font-family: Poppins, sans-serif;">Dans le BTS SIO SLAM d'Auch (32), nous utilisons deux salles de cours entièrements équipés, cliquez sur le lien en bas pour les voir en 360°.</p>
			    </div>
			    <div class="uk-card-footer">
			        <a href="html/sallesdeclasse.html" class="uk-button uk-button-default" style="transform: translateZ(20px); font-family: Poppins, sans-serif;">Voir les salles de classes</a>
			    </div>
			</div>

			<!-- CARTE TÉMOIGNAGES -->
			<div class="uk-card uk-card-default uk-width-1-4@m" style="margin-bottom: 10vh; transform-style: preserve-3d; transform: perspective(1000px); border-radius: 1vh;" data-tilt data-tilt-scale="0.9">
			    <div class="uk-card-header">
			        <div class="uk-grid-small uk-flex-middle" uk-grid>
			            <div class="uk-width-auto">
			                <p class="uk-card-title uk-margin-remove-bottom" style="transform: translateZ(20px); font-family: Poppins, sans-serif;">Les témoignages :</p>
			            </div>
			        </div>
			    </div>
			    <div class="uk-card-body">
			        <p style="transform: translateZ(20px); font-family: Poppins, sans-serif;">Pour voir les témoignages des anciens élèves et des anciens professeurs, cliquez sur le lien en bas.</p>
			    </div>
			    <div class="uk-card-footer">
			        <a href="html/temoignage.html" class="uk-button uk-button-default" style="transform: translateZ(20px); font-family: Poppins, sans-serif;">Voir les témoignages</a>
			    </div>
			</div>
		</div>

		<!-- CONTENEUR AVEC TITRE -->
		<div class="uk-container uk-container-expand uk-background-cover" style="background-color: #262626;">
			<div class="uk-container uk-container-expand uk-background-cover uk-flex" style="padding-top: 2vh; display: flex; align-items: center; justify-content: center;">
				<p class="uk-text-lead" style="font-family: Poppins, sans-serif; color: white; font-size: 40px; text-align: center;" id="conteneur-titre-text">En savoir plus sur la formation</p>
			</div>
			<div class="uk-container uk-container-expand uk-background-cover uk-flex" style="padding-top: 2vh; padding-bottom: 4vh; display: flex; align-items: center; justify-content: center;">
				<p class="uk-text-meta" style="font-family: Poppins, sans-serif; color: white; font-size: 20px; text-align: center;" id="conteneur-titre-text">Quelques autres informations complémentaires</p>
			</div>
		</div>

		<!-- CONTENEUR AVEC TITRE -->
		<a href="html/contact.html" class="uk-link-heading" id="a-hover">
			<div class="uk-container uk-container-expand uk-background-cover" style="background-image: radial-gradient( circle farthest-corner at 18.5% 28.5%,  rgba(4,71,88,1) 0%, rgba(12,141,190,1) 90% ); padding-top: 8vh; padding-bottom: 8vh; display: flex; align-items: center; justify-content: center;">
				<p class="uk-text-lead" style="font-family: Poppins, sans-serif; color: white; font-size: 25px; text-align: center;" id="text-a-baisser"><span uk-icon="icon: location" class="uk-margin-small-right"></span>La localisation du BTS à Auch</p>
			</div>
		</a>

		<!-- CONTENEUR AVEC TITRE -->
		<a href="html/actualite.html" class="uk-link-heading" id="a-hover2">
			<div class="uk-container uk-container-expand uk-background-cover" style="background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(255,171,0,1) 0%, rgba(255,139,0,1) 90.1% ); padding-top: 8vh; padding-bottom: 8vh; display: flex; align-items: center; justify-content: center;">
				<p class="uk-text-lead" style="font-family: Poppins, sans-serif; color: white; font-size: 25px; text-align: center;" id="text-a-baisser2"><span uk-icon="icon: warning" class="uk-margin-small-right"></span>Les actualités du Lycée et du BTS</p>
			</div>
		</a>

		<!-- CONTENEUR AVEC TITRE -->
		<a href="html/competence.html#epreuve" class="uk-link-heading" id="a-hover">
			<div class="uk-container uk-container-expand uk-background-cover" style="background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(151,10,130,1) 0%, rgba(33,33,33,1) 100.2% ); padding-top: 8vh; padding-bottom: 8vh; display: flex; align-items: center; justify-content: center;">
				<p class="uk-text-lead" style="font-family: Poppins, sans-serif; color: white; font-size: 25px; text-align: center;" id="text-a-baisser"><span uk-icon="icon: star" class="uk-margin-small-right"></span>Présentation des Épreuves de BTS SIO SLAM</p>
			</div>
		</a>

		<!-- CONTENEUR AVEC TITRE -->
		<a href="html/poursuiteetude.html" class="uk-link-heading" id="a-hover2">
			<div class="uk-container uk-container-expand uk-background-cover" style="background-image: linear-gradient( 109.6deg,  rgba(255,98,98,0.71) 11.3%, rgba(255,6,6,1) 100.2% ); padding-top: 8vh; padding-bottom: 8vh; display: flex; align-items: center; justify-content: center;">
				<p class="uk-text-lead" style="font-family: Poppins, sans-serif; color: white; font-size: 25px; text-align: center;" id="text-a-baisser2"><span uk-icon="icon: forward" class="uk-margin-small-right"></span>Les poursuites d'études possibles</p>
			</div>
		</a>

		<!-- CONTENEUR AVEC TITRE -->
		<a href="html/competence.html" class="uk-link-heading" id="a-hover">
			<div class="uk-container uk-container-expand uk-background-cover" style="background-image: linear-gradient( 107.2deg,  rgba(18,38,170,1) 12.9%, rgba(0,187,180,1) 77.6%, rgba(255,255,255,1) 125.9% ); padding-top: 8vh; padding-bottom: 8vh; display: flex; align-items: center; justify-content: center;">
				<p class="uk-text-lead" style="font-family: Poppins, sans-serif; color: white; font-size: 25px; text-align: center;" id="text-a-baisser"><span uk-icon="icon: world" class="uk-margin-small-right"></span>Présentation des Blocs de compétences</p>
			</div>
		</a>

		<!-- CONTENEUR AVEC TITRE -->
		<a href="html/temoignage.html" class="uk-link-heading" id="a-hover2">
			<div class="uk-container uk-container-expand uk-background-cover" style="background-image: linear-gradient( 113.3deg,  rgba(217,9,27,1) 6.9%, rgba(22,68,150,1) 75% ); padding-top: 8vh; padding-bottom: 8vh; display: flex; align-items: center; justify-content: center;">
				<p class="uk-text-lead" style="font-family: Poppins, sans-serif; color: white; font-size: 25px; text-align: center;" id="text-a-baisser2"><span uk-icon="icon: users" class="uk-margin-small-right"></span>Les témoignages des anciens élèves</p>
			</div>
		</a>

		<!-- CONTENEUR AVEC TITRE -->
		<a href="html/contact.html" class="uk-link-heading" id="a-hover">
			<div class="uk-container uk-container-expand uk-background-cover" style="background-image: linear-gradient( 109.6deg,  rgba(116,18,203,1) 11.2%, rgba(230,46,131,1) 91.2% ); padding-top: 8vh; padding-bottom: 8vh; display: flex; align-items: center; justify-content: center;">
				<p class="uk-text-lead" style="font-family: Poppins, sans-serif; color: white; font-size: 25px; text-align: center;" id="text-a-baisser"><span uk-icon="icon: comments" class="uk-margin-small-right"></span>Nous contacter</p>
			</div>
		</a>

		<!-- FOOTER -->
		<div class="uk-container uk-container-expand uk-background-cover" style="background-color: #262626; height: 4vh;"></div>
		<div class="uk-container uk-container-expand uk-background-cover" style="padding-top: 4vh; padding-bottom: 4vh; display: flex; align-items: center; justify-content: center; background: url(img/index/bg.svg);">
			<p class="uk-text-lead" style="font-family: Poppins, sans-serif; color: white; font-size: 15px; text-align: center;">BTS SIO SLAM - Lycée Pardailhan - 57 Chemin de Baron, 32008 Auch - Tél : 05.62.61.42.50 - Conception : Hugo Doueil, Bertrand Cassagne, Melvin Duquenne</p>
		</div>
		<div class="uk-container uk-container-expand uk-background-cover" style="background-color: #262626; padding-top: 4vh; display: flex; align-items: center; justify-content: space-evenly; flex-grow: row; flex-wrap: wrap;">
			<a href="html/mentionslegales.html"><p style="font-family: Poppins, sans-serif; color: white; font-size: 15px; text-align: center;">Mentions Légales</p></a>
			<a href="html/chartedonnees.html"><p style="font-family: Poppins, sans-serif; color: white; font-size: 15px; text-align: center;">Charte des Données Personnelles</p></a>
			<a href="html/realsite.html"><p style="font-family: Poppins, sans-serif; color: white; font-size: 15px; text-align: center;">Réalisation du site</p></a>
			<a href="html/plansite.html"><p style="font-family: Poppins, sans-serif; color: white; font-size: 15px; text-align: center;">Plan du site</p></a>
		</div>

		<!-- VANILLA TILT -->
		<script type="text/javascript" src="javascript/vanilla-tilt.js"></script>

	</body>
</html>