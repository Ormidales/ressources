<!DOCTYPE html>
<html lang="fr">
	<head>
		<!-- INFOS IMPORTANTES -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="theme-color" content="#317EFB"/>
		<link rel="apple-touch-icon" href="https://hugodoueil.fr/img/img-profile.webp">
		<link rel="icon" type="image/ico" href="https://hugodoueil.fr/img/img-profile.ico"/>
		<title>Hugo Doueil | Portfolio 2022 (MODE BUREAU) | Développeur Web / Fullstack</title>

		<!-- DESCRIPTION DU SITE + FORMATS LIENS DANS LES RESEAUX SOCIAUX -->
		<meta name="title" content="Hugo Doueil | Portfolio 2022 (MODE BUREAU) | Développeur Web / Fullstack">
		<meta name="description" content="Hugo Doueil | Portfolio 2022 (MODE BUREAU) | Développeur Web / Fullstack">
		<meta name="keywords" content="hugo, HUGO, Hugo, doueil, Doueil, DOUEIL, Hugo Doueil, hugo doueil, HUGO DOUEIL, portfolio, développement, dev, web, html, css, php, tailwind, tailwindcss, dev web, developpement, developpement web, bts, sio, 2022, 2023, BTS, SIO, Pardailhan, pardailhan, saint, gaudens, SAINT, GAUDENS, Saint, Gaudens, Saint-Gaudens, saint-gaudens, villeneuve, rivière, VILLENEUVE, RIVIERE, Villeneuve, Rivière, Villeneuve de Rivière, 31800, Toulouse, DQL, dql, Licence, licence, bac+3, bac, +3, BAC, Paul Sabatier, Informatique, département, Bureau, desktop">
		<meta property="og:type" content="website">
		<meta property="og:url" content="https://hugodoueil.fr/">
		<meta property="og:title" content="Hugo Doueil | Portfolio 2022 (MODE BUREAU) | Développeur Web / Fullstack">
		<meta property="og:description" content="Hugo Doueil | Portfolio 2022 (MODE BUREAU) | Développeur Web / Fullstack">
		<meta property="og:image" content="https://hugodoueil.fr/img/bg.webp">
		<meta property="twitter:card" content="summary_large_image">
		<meta property="twitter:url" content="https://hugodoueil.fr/">
		<meta property="twitter:title" content="Hugo Doueil | Portfolio 2022 (MODE BUREAU) | Développeur Web / Fullstack">
		<meta property="twitter:description" content="Hugo Doueil | Portfolio 2022 (MODE BUREAU) | Développeur Web / Fullstack">
		<meta property="twitter:image" content="https://hugodoueil.fr/img/bg.webp">

		<script src="https://cdn.tailwindcss.com"></script>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="ressources/css/index.css">

		<!-- GSAP -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/Draggable.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

		<style type="text/css">
			.loader{
			  position: fixed;
			  height: 100vh;
			  width: 100%;
			  display: flex;
			  align-items: center;
			  justify-content: center;
			  transition: all 0.5s;
			}
			.spinner {
			   width: 44.8px;
			   height: 44.8px;
			   animation: spinner-y0fdc1 2s infinite ease;
			   transform-style: preserve-3d;
			}

			.spinner > div {
			   background-color: #3f3f46;
			   height: 100%;
			   position: absolute;
			   width: 100%;
			   border: 2.2px solid #71717a;
			}

			.spinner div:nth-of-type(1) {
			   transform: translateZ(-22.4px) rotateY(180deg);
			}

			.spinner div:nth-of-type(2) {
			   transform: rotateY(-270deg) translateX(50%);
			   transform-origin: top right;
			}

			.spinner div:nth-of-type(3) {
			   transform: rotateY(270deg) translateX(-50%);
			   transform-origin: center left;
			}

			.spinner div:nth-of-type(4) {
			   transform: rotateX(90deg) translateY(-50%);
			   transform-origin: top center;
			}

			.spinner div:nth-of-type(5) {
			   transform: rotateX(-90deg) translateY(50%);
			   transform-origin: bottom center;
			}

			.spinner div:nth-of-type(6) {
			   transform: translateZ(22.4px);
			}

			@keyframes spinner-y0fdc1 {
			   0% {
			      transform: rotate(45deg) rotateX(-25deg) rotateY(25deg);
			   }

			   50% {
			      transform: rotate(45deg) rotateX(-385deg) rotateY(25deg);
			   }

			   100% {
			      transform: rotate(45deg) rotateX(-385deg) rotateY(385deg);
			   }
			}

			::-webkit-scrollbar {
			  width: 5px;
			}
			::-webkit-scrollbar-track {
			  background: rgba(255, 255, 255, 0.15);
			  border-radius: 50vh;
			}
			::-webkit-scrollbar-thumb {
			  background-color: rgba(255, 255, 255, 0.30);
			  border-radius: 50vh;
			}
		</style>
	</head>
	<body style="font-family: Poppins, sans-serif;" class="md:overflow-hidden">

		<div class="loader z-[99999] bg-stone-700">
			<div class="block">

				<div class="w-[45vh] p-3 bg-stone-900 border border-stone-700 rounded-lg shadow shadow-stone-900 animate__animated animate__fadeInRight">
					
					<div class="w-full pb-2 px-2 flex items-center border-b border-stone-700">
						
						<p class="text-[12px] text-white">Portfolio de Hugo Doueil - Initialisation du Bureau</p>

					</div>

					<div class="w-full mt-3 p-2">
						
						<div class="w-full p-3 bg-white/5 border border-stone-700 transition-all rounded-lg">
							
							<div class="text-[12px] text-white flex items-center">

								<svg xmlns="http://www.w3.org/2000/svg" class="h-[18px] w-[18px] mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
								</svg>
								
								Début de la séquence matricielle

							</div>

							<div class="text-[10px] text-gray-300 flex items-center mt-2">

								Détail du processus : terminé (0.008ms)

								<svg xmlns="http://www.w3.org/2000/svg" class="h-[15px] w-[15px] ml-3 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
								</svg>

							</div>

						</div>

						<div class="mt-3 w-full p-3 bg-white/5 border border-stone-700 transition-all rounded-lg">
							
							<div class="text-[12px] text-white flex items-center">

								<svg xmlns="http://www.w3.org/2000/svg" class="h-[18px] w-[18px] mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
								</svg>
								
								Création du bureau via cube temporel

							</div>

							<div class="text-[10px] text-gray-300 flex items-center mt-2">

								Détail du processus : terminé (0.0016ms)

								<svg xmlns="http://www.w3.org/2000/svg" class="h-[15px] w-[15px] ml-3 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
								</svg>

							</div>

						</div>

						<div class="mt-3 w-full p-3 bg-white/5 border border-stone-700 transition-all rounded-lg">
							
							<div class="text-[12px] text-white flex items-center">

								<svg xmlns="http://www.w3.org/2000/svg" class="h-[18px] w-[18px] mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
								</svg>
								
								Importation quantique des applications

							</div>

							<div class="text-[10px] text-gray-300 flex items-center mt-2">

								Détail du processus : terminé (0.054ms)

								<svg xmlns="http://www.w3.org/2000/svg" class="h-[15px] w-[15px] ml-3 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
								</svg>

							</div>

						</div>

						<div class="mt-3 w-full p-3 bg-white/5 border border-stone-700 transition-all rounded-lg text-[12px] text-white">

							Chargement intensif du bureau :
							
							<div class="mt-4 flex items-center justify-center h-[10vh]">
					
								<div class="spinner">
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
									<div></div>
								</div>

							</div>

						</div>

					</div>

				</div>
				
				<!--<p class="text-lg text-white mb-5">Chargement de la page</p>

				<div class="flex items-center justify-center">
					
					<div class="ring"></div>

				</div>-->
			</div>
	    </div>



	    <!-- BUREAU -->
		<section id="bureau-xl" class="md:flex hidden w-full h-[100vh] bg-[url('ressources/images/bg-2.webp')] bg-cover bg-center items-center justify-center flex-wrap overflow-hidden">



			<!-- FENETRE DE BIENVENUE -->
			<div id="fenetreBienvenue" class="w-full absolute z-[9999] top-0 left-0 h-[100vh] bg-white/10 backdrop-blur-xl flex items-center justify-center">
				
				<div class="w-[45vh] p-4 rounded-2xl bg-stone-900 border border-stone-700 shadow shadow-stone-900/75 animate__animated animate__fadeInRight">
				
					<div class="w-full flex items-center">
						
						<div class="w-1/3">
							
							

						</div>

						<div class="w-1/3 flex items-center justify-center text-center">
							
							<p class="text-[12px] text-white">Hugo Doueil | Portfolio</p>

						</div>

						<div class="w-1/3 flex items-center justify-end">
							
							

						</div>

					</div>

					<img src="ressources/images/portfolio.png" class="w-full rounded-lg mt-5 mb-5" alt="Représentation du portfolio">

					<div class="w-full flex items-center justify-center">
						
						<p class="text-[20px] text-white">Bienvenue sur mon portfolio !</p>

					</div>

					<div class="w-full flex items-center justify-center px-6 mt-2">
						
						<p class="text-[14px] text-gray-400 text-center">Pour rentrer sur mon portfolio, veuillez cliquer sur le bouton "Entrez dans le bureau".</p>

					</div>

					<div class="w-full bg-blue-500 hover:bg-blue-400 transition-all flex items-center justify-center py-2 mt-8 rounded-md cursor-pointer" onclick="fermer_fenetreBienvenue()">
						
						<p class="text-[14px] text-white text-center">Entrez dans le bureau</p>

					</div>

				</div>

			</div>



			<!-- CLIQUE DROIT -->
			<div id="contextMenu" class="context-menu z-[9999999] p-1">
				<div class="flex items-center">
					
					<div id="contextMenu_sub1" class="w-[25vh] rounded-lg bg-stone-900 border border-stone-700 shadow shadow-stone-900/75 overflow-y-auto">
				
						<div class="px-3 py-2 flex items-center text-white hover:bg-white/10 transition-all cursor-pointer mt-1" onclick="ouvrir_app_menu()">
							
							<svg xmlns="http://www.w3.org/2000/svg" class="h-[16px] w-[16px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
							</svg>

							<p class="text-[12px] ml-2">Ouvrir l'app Menu</p>

						</div>

						<div class="px-3 py-2 flex items-center text-white hover:bg-white/10 transition-all cursor-pointer" onclick="ouvrir_app_welcome()">
							
							<svg xmlns="http://www.w3.org/2000/svg" class="h-[16px] w-[16px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
							</svg>

							<p class="text-[12px] ml-2">Ouvrir l'app Bienvenue</p>

						</div>

						<div class="px-3 py-2 flex items-center text-white hover:bg-white/10 transition-all cursor-pointer" onclick="ouvrir_app_projets()">
							
							<svg xmlns="http://www.w3.org/2000/svg" class="h-[16px] w-[16px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
							</svg>

							<p class="text-[12px] ml-2">Ouvrir l'app Projets</p>

						</div>

						<div class="px-3 py-2 flex items-center text-white hover:bg-white/10 transition-all cursor-pointer" onclick="ouvrir_app_stages()">
							
							<svg xmlns="http://www.w3.org/2000/svg" class="h-[16px] w-[16px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
							</svg>

							<p class="text-[12px] ml-2">Ouvrir l'app Stages</p>

						</div>

						<div class="px-3 py-2 flex items-center text-white hover:bg-white/10 transition-all cursor-pointer" onclick="ouvrir_app_magasin()">
							
							<svg xmlns="http://www.w3.org/2000/svg" class="h-[16px] w-[16px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							 	<path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
							</svg>

							<p class="text-[12px] ml-2">Ouvrir l'app Magasin</p>

						</div>

						<div class="px-3 py-2 flex items-center text-white hover:bg-white/10 transition-all cursor-pointer" onclick="ouvrir_app_background()">
							
							<svg xmlns="http://www.w3.org/2000/svg" class="h-[16px] w-[16px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								 <path stroke-linecap="round" stroke-linejoin="round" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
							</svg>

							<p class="text-[12px] ml-2">Changement de Background</p>

						</div>

						<div class="w-full border-t border-stone-700 mt-1 mb-1"></div>

						<a href="https://hugodoueil.fr/connexion.php"><div class="px-3 py-2 flex items-center text-white hover:bg-white/10 transition-all cursor-pointer">

							<svg xmlns="http://www.w3.org/2000/svg" class="h-[16px] w-[16px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
							</svg>

							<p class="text-[12px] ml-2">Éteindre le PC</p>

						</div></a>

						<div class="w-full border-t border-stone-700 mt-1 mb-1"></div>

						<div class="px-3 py-2 flex items-center text-white hover:bg-white/10 transition-all cursor-pointer" onclick="ouvrir_app_mentionslegales()">

							<svg xmlns="http://www.w3.org/2000/svg" class="h-[16px] w-[16px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
							</svg>

							<p class="text-[12px] ml-2">Mentions légales</p>

						</div>

						<div class="px-3 py-2 flex items-center text-white hover:bg-white/10 transition-all cursor-pointer" onclick="ouvrir_app_parametreconfidentialite()">

							<svg xmlns="http://www.w3.org/2000/svg" class="h-[16px] w-[16px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
							</svg>

							<p class="text-[12px] ml-2">Paramètres de confidentialité</p>

						</div>

						<div class="px-3 py-2 flex items-center text-white hover:bg-white/10 transition-all cursor-pointer mb-1" onclick="ouvrir_app_plandusite()">

							<svg xmlns="http://www.w3.org/2000/svg" class="h-[16px] w-[16px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
							</svg>

							<p class="text-[12px] ml-2">Plan du site</p>

						</div>

					</div>

				</div>

				<!--<div id="contextMenu_sub2" onmouseover="ouvrir_contextMenu_sub2()" onmouseout="fermer_contextMenu_sub2()">
					
					<div class="px-3 py-2 flex items-center text-white hover:bg-white/10 transition-all cursor-pointer mt-1" onclick="ouvrir_app_menu()">
						
						<svg xmlns="http://www.w3.org/2000/svg" class="h-[16px] w-[16px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						  	<path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
						</svg>

						<p class="text-[12px] ml-2">Ouvrir l'app Menu</p>

					</div>

					<div class="px-3 py-2 flex items-center text-white hover:bg-white/10 transition-all cursor-pointer" onclick="ouvrir_app_welcome()">
						
						<svg xmlns="http://www.w3.org/2000/svg" class="h-[16px] w-[16px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						  	<path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
						</svg>

						<p class="text-[12px] ml-2">Ouvrir l'app Bienvenue</p>

					</div>

					<div class="px-3 py-2 flex items-center text-white hover:bg-white/10 transition-all cursor-pointer" onclick="ouvrir_app_projets()">
						
						<svg xmlns="http://www.w3.org/2000/svg" class="h-[16px] w-[16px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						  	<path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
						</svg>

						<p class="text-[12px] ml-2">Ouvrir l'app Projets</p>

					</div>

				</div>

				<div id="contextMenu_sub3" onmouseover="ouvrir_contextMenu_sub3()" onmouseout="fermer_contextMenu_sub3()">
					
					<div class="px-3 py-2 flex items-center text-white hover:bg-white/10 transition-all cursor-pointer mt-1" onclick="ouvrir_app_menu()">
						
						<svg xmlns="http://www.w3.org/2000/svg" class="h-[16px] w-[16px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						  	<path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
						</svg>

						<p class="text-[12px] ml-2">Ouvrir l'app Menu</p>

					</div>

					<div class="px-3 py-2 flex items-center text-white hover:bg-white/10 transition-all cursor-pointer" onclick="ouvrir_app_welcome()">
						
						<svg xmlns="http://www.w3.org/2000/svg" class="h-[16px] w-[16px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						  	<path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
						</svg>

						<p class="text-[12px] ml-2">Ouvrir l'app Bienvenue</p>

					</div>

					<div class="px-3 py-2 flex items-center text-white hover:bg-white/10 transition-all cursor-pointer" onclick="ouvrir_app_projets()">
						
						<svg xmlns="http://www.w3.org/2000/svg" class="h-[16px] w-[16px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						  	<path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
						</svg>

						<p class="text-[12px] ml-2">Ouvrir l'app Projets</p>

					</div>

				</div>-->
            </div>


            <!-- MENU DE RETROCOMPATIBILITE -->
            <div id="app-retrocomp" class="absolute top-0 left-0 w-full p-5 bg-stone-900 border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[9998] rounded-b-md">
            	
            	<div class="w-full flex items-center justify-between">

            		<div class="flex items-center">
            			
            			<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						  	<path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
						</svg>

						<p class="text-white text-[15px] ml-2">Menu de Retrocompatibilité</p>

						<span class="ml-3 text-blue-500 bg-blue-500/10 rounded-md px-2 py-1 text-[11px] border border-blue-500/25">Version AlphaBuild.SDK.HugoOS-v6.3</span>

            		</div>

            		<div class="ml-2 w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="fermer_app_retrocomp()">
						
						<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						  	<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
						</svg>

					</div>

            	</div>

            	<div class="w-full mt-3 mb-3 border-t border-stone-700 rounded-full"></div>

            	<div class="w-full flex items-center pb-3" style="overflow-x:scroll; overflow-y:hidden; white-space: nowrap;">
            		
            		<a href="https://hugodoueil-ressources.netlify.app/personnel/hugoos/hugoos-v1/desktop.html" onclick="window.open(this.href); return false;"><span class="px-4 py-2 rounded-md bg-stone-800 hover:bg-stone-700 text-white text-[13px] mr-3 transition-all cursor-pointer" style="flex-shrink: 0;">HugoOS-v1</span></a>

            		<a href="https://hugodoueil-ressources.netlify.app/personnel/hugoos/hugoos-v2" onclick="window.open(this.href); return false;"><span class="px-4 py-2 rounded-md bg-stone-800 hover:bg-stone-700 text-white text-[13px] mr-3 transition-all cursor-pointer" style="flex-shrink: 0;">HugoOS-v2</span></a>

            		<a href="https://hugodoueil-ressources.netlify.app/personnel/hugoos/hugoos-v3" onclick="window.open(this.href); return false;"><span class="px-4 py-2 rounded-md bg-stone-800 hover:bg-stone-700 text-white text-[13px] mr-3 transition-all cursor-pointer" style="flex-shrink: 0;">HugoOS-v3</span></a>

            		<a href="https://hugodoueil-ressources.netlify.app/personnel/hugoos/hugoos-v4" onclick="window.open(this.href); return false;"><span class="px-4 py-2 rounded-md bg-stone-800 hover:bg-stone-700 text-white text-[13px] mr-3 transition-all cursor-pointer" style="flex-shrink: 0;">HugoOS-v4</span></a>

            		<a href="https://hugodoueil-ressources.netlify.app/personnel/hugoos/hugoos-v5" onclick="window.open(this.href); return false;"><span class="px-4 py-2 rounded-md bg-stone-800 hover:bg-stone-700 text-white text-[13px] mr-3 transition-all cursor-pointer" style="flex-shrink: 0;">HugoOS-v5</span></a>

            		<a href="https://hugodoueil-ressources.netlify.app/personnel/hugoos/hugoos-v6/normal" onclick="window.open(this.href); return false;"><span class="px-4 py-2 rounded-md bg-stone-800 hover:bg-stone-700 text-white text-[13px] mr-3 transition-all cursor-pointer" style="flex-shrink: 0;">HugoOS-v6 - Normal</span></a>

            		<a href="https://hugodoueil-ressources.netlify.app/personnel/hugoos/hugoos-v6/transparent" onclick="window.open(this.href); return false;"><span class="px-4 py-2 rounded-md bg-stone-800 hover:bg-stone-700 text-white text-[13px] mr-3 transition-all cursor-pointer" style="flex-shrink: 0;">HugoOS-v6 - Transparent</span></a>

            		<a href="https://hugodoueil-ressources.netlify.app/personnel/hugoos/hugoos-v6/no-img" onclick="window.open(this.href); return false;"><span class="px-4 py-2 rounded-md bg-stone-800 hover:bg-stone-700 text-white text-[13px] mr-3 transition-all cursor-pointer" style="flex-shrink: 0;">HugoOS-v6 - No-img</span></a>

            		<a href="https://hugodoueil-ressources.netlify.app/personnel/portfolio/portfolio-maquette/" onclick="window.open(this.href); return false;"><span class="px-4 py-2 rounded-md bg-stone-800 hover:bg-stone-700 text-white text-[13px] mr-3 transition-all cursor-pointer" style="flex-shrink: 0;">Maquette</span></a>

            		<a href="https://hugodoueil-ressources.netlify.app/personnel/portfolio/portfolio-v0/" onclick="window.open(this.href); return false;"><span class="px-4 py-2 rounded-md bg-stone-800 hover:bg-stone-700 text-white text-[13px] mr-3 transition-all cursor-pointer" style="flex-shrink: 0;">Portfolio v0</span></a>

            		<a href="https://hugodoueil-ressources.netlify.app/personnel/portfolio/portfolio-v1/" onclick="window.open(this.href); return false;"><span class="px-4 py-2 rounded-md bg-stone-800 hover:bg-stone-700 text-white text-[13px] mr-3 transition-all cursor-pointer" style="flex-shrink: 0;">Portfolio v1</span></a>

            		<a href="https://hugodoueil-ressources.netlify.app/personnel/portfolio/portfolio-v1.5/" onclick="window.open(this.href); return false;"><span class="px-4 py-2 rounded-md bg-stone-800 hover:bg-stone-700 text-white text-[13px] mr-3 transition-all cursor-pointer" style="flex-shrink: 0;">Portfolio v1.5</span></a>

            		<a href="https://hugodoueil-ressources.netlify.app/personnel/portfolio/portfolio-v2/" onclick="window.open(this.href); return false;"><span class="px-4 py-2 rounded-md bg-stone-800 hover:bg-stone-700 text-white text-[13px] mr-3 transition-all cursor-pointer" style="flex-shrink: 0;">Portfolio v2</span></a>

            		<a href="https://hugodoueil-ressources.netlify.app/personnel/portfolio/portfolio-v3/" onclick="window.open(this.href); return false;"><span class="px-4 py-2 rounded-md bg-stone-800 hover:bg-stone-700 text-white text-[13px] mr-3 transition-all cursor-pointer" style="flex-shrink: 0;">Portfolio v3</span></a>

            		<a href="https://hugodoueil-ressources.netlify.app/personnel/portfolio/portfolio-v4/" onclick="window.open(this.href); return false;"><span class="px-4 py-2 rounded-md bg-stone-800 hover:bg-stone-700 text-white text-[13px] mr-3 transition-all cursor-pointer" style="flex-shrink: 0;">Portfolio v4</span></a>

            		<a href="https://hugodoueil-ressources.netlify.app/personnel/portfolio/portfolio-v5/" onclick="window.open(this.href); return false;"><span class="px-4 py-2 rounded-md bg-stone-800 hover:bg-stone-700 text-white text-[13px] mr-3 transition-all cursor-pointer" style="flex-shrink: 0;">Portfolio v5</span></a>

            		<a href="https://hugodoueil-ressources.netlify.app/personnel/portfolio/portfolio-v6/" onclick="window.open(this.href); return false;"><span class="px-4 py-2 rounded-md bg-stone-800 hover:bg-stone-700 text-white text-[13px] mr-3 transition-all cursor-pointer" style="flex-shrink: 0;">Portfolio v6</span></a>

            		<a href="https://hugodoueil-ressources.netlify.app/personnel/portfolio/portfolio-v7/" onclick="window.open(this.href); return false;"><span class="px-4 py-2 rounded-md bg-stone-800 hover:bg-stone-700 text-white text-[13px] mr-3 transition-all cursor-pointer" style="flex-shrink: 0;">Portfolio v7</span></a>

            		<span class="px-4 py-2 rounded-md bg-red-500/10 border border-red-500/25 text-red-500 text-[13px] mr-3 transition-all cursor-not-allowed" style="flex-shrink: 0;">Portfolio v8 (indisponible - test only)</span>

            		<span class="px-4 py-2 rounded-md bg-red-500/10 border border-red-500/25 text-red-500 text-[13px] mr-3 transition-all cursor-not-allowed" style="flex-shrink: 0;">Portfolio v9 (indisponible - test only)</span>

            		<span class="px-4 py-2 rounded-md bg-red-500/10 border border-red-500/25 text-red-500 text-[13px] mr-3 transition-all cursor-not-allowed" style="flex-shrink: 0;">Portfolio v10 (indisponible - test only)</span>

            		<a href="https://hugodoueil-ressources.netlify.app/personnel/portfolio/portfolio-v11/bureau.html" onclick="window.open(this.href); return false;"><span class="px-4 py-2 rounded-md bg-stone-800 hover:bg-stone-700 text-white text-[13px] mr-3 transition-all cursor-pointer" style="flex-shrink: 0;">Portfolio v11</span></a>

            		<a href="https://hugodoueil-ressources.netlify.app/personnel/portfolio/portfolio-v12/bureau-themenormal" onclick="window.open(this.href); return false;"><span class="px-4 py-2 rounded-md bg-stone-800 hover:bg-stone-700 text-white text-[13px] mr-3 transition-all cursor-pointer" style="flex-shrink: 0;">Portfolio v12</span></a>

            		<a href="https://hugodoueil-ressources.netlify.app/personnel/portfolio/portfolio-v13/" onclick="window.open(this.href); return false;"><span class="px-4 py-2 rounded-md bg-stone-800 hover:bg-stone-700 text-white text-[13px] mr-3 transition-all cursor-pointer" style="flex-shrink: 0;">Portfolio v13</span></a>

            		<a href="https://hugodoueil-ressources.netlify.app/personnel/portfolio/portfolio-v14/" onclick="window.open(this.href); return false;"><span class="px-4 py-2 rounded-md bg-stone-800 hover:bg-stone-700 text-white text-[13px] mr-3 transition-all cursor-pointer" style="flex-shrink: 0;">Portfolio v14</span></a>

            		<a href="https://hugodoueil-ressources.netlify.app/personnel/portfolio/portfolio-v15/" onclick="window.open(this.href); return false;"><span class="px-4 py-2 rounded-md bg-stone-800 hover:bg-stone-700 text-white text-[13px] mr-3 transition-all cursor-pointer" style="flex-shrink: 0;">Portfolio v15</span></a>

            		<a href="https://hugodoueil-ressources.netlify.app/personnel/portfolio/portfolio-v16/" onclick="window.open(this.href); return false;"><span class="px-4 py-2 rounded-md bg-stone-800 hover:bg-stone-700 text-white text-[13px] mr-3 transition-all cursor-pointer" style="flex-shrink: 0;">Portfolio v16</span></a>

            		<a href="https://hugodoueil-ressources.netlify.app/personnel/portfolio/portfolio-v17/" onclick="window.open(this.href); return false;"><span class="px-4 py-2 rounded-md bg-stone-800 hover:bg-stone-700 text-white text-[13px] mr-3 transition-all cursor-pointer" style="flex-shrink: 0;">Portfolio v17</span></a>

            		<a href="https://hugodoueil-ressources.netlify.app/personnel/portfolio/portfolio-v18/" onclick="window.open(this.href); return false;"><span class="px-4 py-2 rounded-md bg-stone-800 hover:bg-stone-700 text-white text-[13px] mr-3 transition-all cursor-pointer" style="flex-shrink: 0;">Portfolio v18</span></a>

            		<a href="https://hugodoueil-ressources.netlify.app/personnel/portfolio/portfolio-v18.1/" onclick="window.open(this.href); return false;"><span class="px-4 py-2 rounded-md bg-stone-800 hover:bg-stone-700 text-white text-[13px] mr-3 transition-all cursor-pointer" style="flex-shrink: 0;">Portfolio v18.1</span></a>

            	</div>

            </div>


			<!-- APPLICATION MENU OPTIONS -->
			<div id="app-options" class="absolute w-full h-[100vh] top-0 left-0 bg-white/10 backdrop-blur-xl z-[9999] flex items-center justify-center">
				
				<div class="w-[40vh] p-2 ml-5 bg-stone-900 rounded-lg border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]">

					<div class="w-full pb-2 px-2 flex items-center justify-between border-b border-stone-700">
						
						<div class="flex items-center">
							
							<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
							</svg>

							<p class="text-[12px] text-white ml-2">Options du PC</p>

						</div>

						<div class="flex items-center">
							
							<div class="ml-2 w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="fermer_app_options()">
						
								<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
								</svg>

							</div>

						</div>

					</div>
					
					<div class="w-full mt-3 p-2">

						<a href="https://www.linkedin.com/in/hugodoueil" onclick="window.open(this.href); return false;"><div class="w-full p-3 bg-white/5 hover:bg-white/10 border border-stone-700 transition-all rounded-lg flex items-center justify-center cursor-pointer">
							
							<p class="text-[12px] text-white">Aller sur ma page Linkedin</p>

						</div></a>

						<a href="https://github.com/Ormidales/" onclick="window.open(this.href); return false;"><div class="mt-3 w-full p-3 bg-white/5 hover:bg-white/10 border border-stone-700 transition-all rounded-lg flex items-center justify-center cursor-pointer">
							
							<p class="text-[12px] text-white">Aller sur ma page Github</p>

						</div></a>

						<a href="https://hugodoueil.fr/connexion.php"><div class="mt-3 w-full p-3 bg-white/5 hover:bg-white/10 border border-stone-700 transition-all rounded-lg flex items-center justify-center cursor-pointer">
							
							<p class="text-[12px] text-white">Éteindre la session</p>

						</div></a>

					</div>

				</div>

			</div>



			<!-- MENU EN HAUT A DROITE -->
			<div id="fenetreBienvenue2" class="absolute right-6 top-6 w-[45vh] bg-stone-900 border border-stone-700 shadow shadow-stone-900/75 rounded-lg p-4 z-[1001]">

				<div class="w-full">
					
					<div class="flex items-center justify-between">
						
						<p class="text-white text-[14px]">Nouveaux projets disponibles</p>

						<div class="w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="fermer_fenetreBienvenue2()">
						
							<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
							</svg>

						</div>

					</div>

					<p class="mt-1 text-white text-[11px]">Pour les voirs, ils suffient d'aller sur l'application Mes Projets !</p>

					<div class="mt-3 w-full p-2 bg-white/5 hover:bg-white/10 border border-stone-700 transition-all rounded-lg flex items-center justify-center cursor-pointer" onclick="ouvrir_app_projets()">
							
						<p class="text-[12px] text-white">Aller dans l'application Mes Projets</p>

					</div>

				</div>

			</div>



			<!-- BOUTONS D'APPLICATIONS SUR LE BUREAU -->
			<div class="absolute top-6 left-6 z-[1] flex items-start">

				<div class="p-4 bg-stone-900/25 backdrop-blur-md rounded-md border border-white/[15%] shadow shadow-stone-900/10">

					<div class="w-full text-white text-[12px] pb-2 mb-4 border-b border-white/[15%]">
						
						Applications - Basiques

					</div>
					
					<div class="w-full grid grid-cols-3 gap-4">
				
						<div class="w-[6.5vh] h-[6.5vh] bg-stone-900 flex items-center justify-center rounded-lg border border-white/10 hover:scale-[110%] hover:bg-stone-900/95 hover:border-white/25 transition-all cursor-pointer shadow shadow-stone-900/75" onclick="ouvrir_app_menu()" title="Ouvrir l'application Menu" name="Ouvrir l'application Menu">

							<svg xmlns="http://www.w3.org/2000/svg" class="w-[3.5vh] h-[3.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
							</svg>

						</div>

						<div class="w-[6.5vh] h-[6.5vh] flex items-center justify-center bg-stone-900 rounded-lg border border-white/10 hover:scale-[110%] hover:bg-stone-900/95 hover:border-white/25 transition-all cursor-pointer shadow shadow-stone-900/75" onclick="ouvrir_app_welcome()" title="Ouvrir l'application Personnelle" name="Ouvrir l'application Personnelle">

							<svg xmlns="http://www.w3.org/2000/svg" class="w-[3.5vh] h-[3.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
							</svg>

						</div>

						<div class="w-[6.5vh] h-[6.5vh] flex items-center justify-center bg-stone-900 rounded-lg border border-white/10 hover:scale-[110%] hover:bg-stone-900/95 hover:border-white/25 transition-all cursor-pointer shadow shadow-stone-900/75" onclick="ouvrir_app_projets()" title="Ouvrir l'application Mes Projets" name="Ouvrir l'application Mes Projets">

							<svg xmlns="http://www.w3.org/2000/svg" class="w-[3.5vh] h-[3.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
							</svg>

						</div>

						<div class="w-[6.5vh] h-[6.5vh] flex items-center justify-center bg-stone-900 rounded-lg border border-white/10 hover:scale-[110%] hover:bg-stone-900/95 hover:border-white/25 transition-all cursor-pointer shadow shadow-stone-900/75" onclick="ouvrir_app_stages()" title="Ouvrir l'application Mes Stages" name="Ouvrir l'application Mes Stages">

							<svg xmlns="http://www.w3.org/2000/svg" class="w-[3.5vh] h-[3.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
							</svg>

						</div>

						<div class="w-[6.5vh] h-[6.5vh] flex items-center justify-center bg-stone-900 rounded-lg border border-white/10 hover:scale-[110%] hover:bg-stone-900/95 hover:border-white/25 transition-all cursor-pointer shadow shadow-stone-900/75" onclick="ouvrir_app_magasin()" title="Ouvrir l'application Magasin d'apps" name="Ouvrir l'application Magasin d'apps">

							<svg xmlns="http://www.w3.org/2000/svg" class="w-[3.5vh] h-[3.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							 	<path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
							</svg>

						</div>

						<div class="w-[6.5vh] h-[6.5vh] flex items-center justify-center bg-stone-900 rounded-lg border border-white/10 hover:scale-[110%] hover:bg-stone-900/95 hover:border-white/25 transition-all cursor-pointer shadow shadow-stone-900/75" onclick="ouvrir_app_cv()" title="Ouvrir l'application Mon CV" name="Ouvrir l'application Mon CV">

							<svg xmlns="http://www.w3.org/2000/svg" class="w-[3.5vh] h-[3.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
							</svg>

						</div>

						<div class="w-[6.5vh] h-[6.5vh] flex items-center justify-center bg-stone-900 rounded-lg border border-white/10 hover:scale-[110%] hover:bg-stone-900/95 hover:border-white/25 transition-all cursor-pointer shadow shadow-stone-900/75" onclick="ouvrir_app_certifications()" title="Ouvrir l'application Mes Certifications" name="Ouvrir l'application Mes Certifications">

							<svg xmlns="http://www.w3.org/2000/svg" class="w-[3.5vh] h-[3.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
							</svg>

						</div>

						<div class="w-[6.5vh] h-[6.5vh] flex items-center justify-center bg-stone-900 rounded-lg border border-white/10 hover:scale-[110%] hover:bg-stone-900/95 hover:border-white/25 transition-all cursor-pointer shadow shadow-stone-900/75" onclick="ouvrir_app_veilletechno()" title="Ouvrir l'application Ma Veille Technologique" name="Ouvrir l'application Ma Veille Technologique">

							<svg xmlns="http://www.w3.org/2000/svg" class="w-[3.5vh] h-[3.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
							</svg>

						</div>

						<div class="w-[6.5vh] h-[6.5vh] flex items-center justify-center bg-stone-900 rounded-lg border border-white/10 hover:scale-[110%] hover:bg-stone-900/95 hover:border-white/25 transition-all cursor-pointer shadow shadow-stone-900/75" onclick="ouvrir_app_background()" title="Ouvrir l'application Changement de background" name="Ouvrir l'application Changement de background">

							<svg xmlns="http://www.w3.org/2000/svg" class="w-[3.5vh] h-[3.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								<path stroke-linecap="round" stroke-linejoin="round" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
							</svg>

						</div>

						<div class="w-[6.5vh] h-[6.5vh] flex items-center justify-center bg-stone-900 rounded-lg border border-white/10 hover:scale-[110%] hover:bg-stone-900/95 hover:border-white/25 transition-all cursor-pointer shadow shadow-stone-900/75" onclick="ouvrir_app_options()" title="Ouvrir l'application Options du PC" name="Ouvrir l'application Options du PC">

							<svg xmlns="http://www.w3.org/2000/svg" class="w-[3.5vh] h-[3.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
							</svg>

						</div>

						<div class="w-[6.5vh] h-[6.5vh] flex items-center justify-center bg-stone-900 rounded-lg border border-white/10 hover:scale-[110%] hover:bg-stone-900/95 hover:border-white/25 transition-all cursor-pointer shadow shadow-stone-900/75" onclick="ouvrir_app_retrocomp()" title="Ouvrir l'application de Retrocompatibilité du portfolio" name="Ouvrir l'application de Retrocompatibilité du portfolio">

							<svg xmlns="http://www.w3.org/2000/svg" class="w-[3.5vh] h-[3.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
							</svg>

						</div>

						<a href="https://hugodoueil.fr/connexion.php"><div class="w-[6.5vh] h-[6.5vh] flex items-center justify-center bg-stone-900 rounded-lg border border-white/10 hover:scale-[110%] hover:bg-stone-900/95 hover:border-white/25 transition-all cursor-pointer shadow shadow-stone-900/75" title="Déconnexion du mode bureau" name="Déconnexion du mode bureau">

							<svg xmlns="http://www.w3.org/2000/svg" class="w-[3.5vh] h-[3.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
							</svg>

						</div></a>

					</div>

				</div>

				<div class="w-[30vh] ml-6 p-4 bg-stone-900/25 backdrop-blur-md rounded-md border border-white/[15%] shadow shadow-stone-900/10">

					<div class="w-full text-white text-[12px] pb-2 mb-4 border-b border-white/[15%]">
						
						Applications - Liens utiles

					</div>
					
					<div class="w-full h-[22.5vh] overflow-y-scroll pr-4 grid grid-cols-1 gap-4">
				
						<a href="https://hugodoueil-ressources.netlify.app" onclick="window.open(this.href); return false;"><div class="w-full p-4 bg-stone-900 rounded-lg border border-white/10 hover:scale-[95%] hover:bg-stone-900/95 hover:border-white/25 transition-all cursor-pointer shadow shadow-stone-900/75" title="Ouvrir hugodoueil-ressource.netlify.app" name="Ouvrir hugodoueil-ressource.netlify.app">

							<p class="text-white text-[15px] truncate">Hugo Doueil - Ressources</p>

							<p class="text-gray-400 text-[10px] truncate mt-1">https://hugodoueil-ressources.netlify.app</p>

						</div></a>

						<a href="https://github.com/Ormidales/ressources" onclick="window.open(this.href); return false;"><div class="w-full p-4 bg-stone-900 rounded-lg border border-white/10 hover:scale-[95%] hover:bg-stone-900/95 hover:border-white/25 transition-all cursor-pointer shadow shadow-stone-900/75" title="Ouvrir hugodoueil-ressource.netlify.app" name="Ouvrir hugodoueil-ressource.netlify.app">

							<p class="text-white text-[15px] truncate">Hugo Doueil - Ressources</p>

							<p class="text-gray-400 text-[10px] truncate mt-1">https://github.com/Ormidales/ressources</p>

						</div></a>

						<a href="https://github.com/Ormidales" onclick="window.open(this.href); return false;"><div class="w-full p-4 bg-stone-900 rounded-lg border border-white/10 hover:scale-[95%] hover:bg-stone-900/95 hover:border-white/25 transition-all cursor-pointer shadow shadow-stone-900/75" title="Ouvrir hugodoueil-ressource.netlify.app" name="Ouvrir hugodoueil-ressource.netlify.app">

							<p class="text-white text-[15px] truncate">Hugo Doueil - Github</p>

							<p class="text-gray-400 text-[10px] truncate mt-1">https://github.com/Ormidales</p>

						</div></a>

						<a href="https://www.linkedin.com/in/hugodoueil/" onclick="window.open(this.href); return false;"><div class="w-full p-4 bg-stone-900 rounded-lg border border-white/10 hover:scale-[95%] hover:bg-stone-900/95 hover:border-white/25 transition-all cursor-pointer shadow shadow-stone-900/75" title="Ouvrir hugodoueil-ressource.netlify.app" name="Ouvrir hugodoueil-ressource.netlify.app">

							<p class="text-white text-[15px] truncate">Hugo Doueil - Linkedin</p>

							<p class="text-gray-400 text-[10px] truncate mt-1">https://www.linkedin.com/in/hugodoueil/</p>

						</div></a>

					</div>

				</div>

				<div class="ml-6 p-4 bg-stone-900/25 backdrop-blur-md rounded-md border border-white/[15%] shadow shadow-stone-900/10">

					<div class="w-full text-white text-[12px] pb-2 mb-4 border-b border-white/[15%]">
						
						Applications - Utilitaires

					</div>
					
					<div class="w-full grid grid-cols-3 gap-4">
				
						<div class="w-[6.5vh] h-[6.5vh] flex items-center justify-center bg-stone-900 rounded-lg border border-white/10 hover:scale-[110%] hover:bg-stone-900/95 hover:border-white/25 transition-all cursor-pointer shadow shadow-stone-900/75" onclick="ouvrir_app_mentionslegales()" title="Ouvrir l'application Mentions Légales" name="Ouvrir l'application Mentions Légales">

							<svg xmlns="http://www.w3.org/2000/svg" class="w-[3.5vh] h-[3.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
							</svg>

						</div>

						<div class="w-[6.5vh] h-[6.5vh] flex items-center justify-center bg-stone-900 rounded-lg border border-white/10 hover:scale-[110%] hover:bg-stone-900/95 hover:border-white/25 transition-all cursor-pointer shadow shadow-stone-900/75" onclick="ouvrir_app_parametreconfidentialite()" title="Ouvrir l'application Paramètres de confidentialité" name="Ouvrir l'application Paramètres de confidentialité">

							<svg xmlns="http://www.w3.org/2000/svg" class="w-[3.5vh] h-[3.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
							</svg>

						</div>

						<div class="w-[6.5vh] h-[6.5vh] flex items-center justify-center bg-stone-900 rounded-lg border border-white/10 hover:scale-[110%] hover:bg-stone-900/95 hover:border-white/25 transition-all cursor-pointer shadow shadow-stone-900/75" onclick="ouvrir_app_plandusite()" title="Ouvrir l'application Plan du site" name="Ouvrir l'application Plan du site">

							<svg xmlns="http://www.w3.org/2000/svg" class="w-[3.5vh] h-[3.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
							</svg>

						</div>

					</div>

				</div>

			</div>
			
			

			<!-- MENU -->
			<div class="absolute bottom-0 left-0 w-full pb-6 flex items-center justify-center z-[999] animate__animated animate__fadeInUp">
				
				<div class="px-3 py-2 rounded-lg bg-stone-900 border border-stone-700 flex items-center shadow shadow-stone-900/75">

					<div data-tooltip="Ouvrir l'application Menu" class="w-[4vh] h-[4vh] flex items-center justify-center bg-white/5 rounded-lg border border-white/10 hover:scale-[110%] hover:bg-white/10 hover:border-white/25 transition-all cursor-pointer" onclick="ouvrir_app_menu()" title="Ouvrir l'application Menu" name="Ouvrir l'application Menu">

						<svg xmlns="http://www.w3.org/2000/svg" class="w-[2.5vh] h-[2.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						  	<path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
						</svg>

					</div>

					<div data-tooltip="Ouvrir l'application Mon Profil" class="ml-3 w-[4vh] h-[4vh] flex items-center justify-center bg-white/5 rounded-lg border border-white/10 hover:scale-[110%] hover:bg-white/10 hover:border-white/25 transition-all cursor-pointer" onclick="ouvrir_app_welcome()" title="Ouvrir l'application Mon Profil" name="Ouvrir l'application Mon Profil">

						<svg xmlns="http://www.w3.org/2000/svg" class="w-[2.5vh] h-[2.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						  	<path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
						</svg>

					</div>

					<div data-tooltip="Ouvrir l'application Mes Projets" class="ml-3 w-[4vh] h-[4vh] flex items-center justify-center bg-white/5 rounded-lg border border-white/10 hover:scale-[110%] hover:bg-white/10 hover:border-white/25 transition-all cursor-pointer" onclick="ouvrir_app_projets()" title="Ouvrir l'application Mes Projets" name="Ouvrir l'application Mes Projets">

						<svg xmlns="http://www.w3.org/2000/svg" class="w-[2.5vh] h-[2.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						  	<path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
						</svg>

					</div>

					<div data-tooltip="Ouvrir l'application Mes Stages" class="ml-3 w-[4vh] h-[4vh] flex items-center justify-center bg-white/5 rounded-lg border border-white/10 hover:scale-[110%] hover:bg-white/10 hover:border-white/25 transition-all cursor-pointer" onclick="ouvrir_app_stages()" title="Ouvrir l'application Mes Stages" name="Ouvrir l'application Mes Stages">

						<svg xmlns="http://www.w3.org/2000/svg" class="w-[2.5vh] h-[2.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						  	<path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
						</svg>

					</div>

					<div data-tooltip="Ouvrir l'app Magasins d'apps" class="ml-3 w-[4vh] h-[4vh] flex items-center justify-center bg-white/5 rounded-lg border border-white/10 hover:scale-[110%] hover:bg-white/10 hover:border-white/25 transition-all cursor-pointer" onclick="ouvrir_app_magasin()" title="Ouvrir l'application Magasins d'apps" name="Ouvrir l'application Magasins d'apps">

						<svg xmlns="http://www.w3.org/2000/svg" class="w-[2.5vh] h-[2.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						 	<path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
						</svg>

					</div>

				</div>

			</div>



			<!-- APPLICATION MENU -->
			<div id="app-menu" class="absolute bottom-6 left-6 w-[40vh] p-2 bg-stone-900 rounded-lg border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]">

				<div id="app-menu-header" class="w-full pb-2 px-2 flex items-center justify-between border-b border-stone-700">
					
					<div class="flex items-center">
						
						<svg xmlns="http://www.w3.org/2000/svg" class="w-[2vh] h-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						  	<path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
						</svg>

						<p class="ml-2 text-[12px] text-white">Application menu</p>

					</div>

					<div class="flex items-center">
						
						<div class="ml-2 w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="fermer_app_menu()">
						
							<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
							</svg>

						</div>

					</div>

				</div>
				
				<div class="w-full mt-3 p-2">
					
					<div class="w-full p-3 bg-white/5 hover:bg-white/10 border border-stone-700 transition-all rounded-lg flex items-center justify-center cursor-pointer" onclick="ouvrir_app_background()">
						
						<p class="text-[12px] text-white">Changer le fond d'écran</p>

					</div>

					<div class="mt-3 w-full p-3 bg-white/5 hover:bg-white/10 border border-stone-700 transition-all rounded-lg flex items-center justify-center cursor-pointer" onclick="ouvrir_app_mentionslegales()">
						
						<p class="text-[12px] text-white">Ouvrir l'application Mentions Légales</p>

					</div>

					<div class="mt-3 w-full p-3 bg-white/5 hover:bg-white/10 border border-stone-700 transition-all rounded-lg flex items-center justify-center cursor-pointer" onclick="ouvrir_app_parametreconfidentialite()">
						
						<p class="text-[12px] text-white">Ouvrir l'application Paramètres de confidentialités</p>

					</div>

					<div class="mt-3 w-full p-3 bg-white/5 hover:bg-white/10 border border-stone-700 transition-all rounded-lg flex items-center justify-center cursor-pointer" onclick="ouvrir_app_plandusite()">
						
						<p class="text-[12px] text-white">Ouvrir l'application Plan du site</p>

					</div>

					<div class="mt-3 w-full p-3 bg-white/5 hover:bg-white/10 border border-stone-700 transition-all rounded-lg flex items-center justify-center cursor-pointer" onclick="ouvrir_app_options()">
						
						<p class="text-[12px] text-white">Ouvrir l'application Options du PC</p>

					</div>

				</div>

			</div>



			<!-- APPLICATION PROJETS -->
			<div id="app-projets" class="absolute top-6 left-6 w-[77vh] p-2 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]">
				
				<div id="app-projets-header" class="w-full pb-2 px-2 flex items-center justify-between border-b border-stone-700">
					
					<div class="flex items-center">
						
						<svg xmlns="http://www.w3.org/2000/svg" class="w-[2vh] h-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						  	<path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
						</svg>

						<p class="text-[12px] text-white ml-2">Application des projets</p>

					</div>

					<div class="flex items-center">

						<div class="ml-2 w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="zoomOut_app_projets()">
						
							<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M20 12H4" />
							</svg>

						</div>
						
						<div class="ml-2 w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="zoomIn_app_projets()">
						
							<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
							</svg>

						</div>

						<div class="ml-2 w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="fermer_app_projets()">
						
							<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
							</svg>

						</div>

					</div>

				</div>

				<div id="app-projets-body" class="w-full h-[55vh] overflow-y-scroll mt-5 bg-stone-800 rounded-lg p-3">

					<div class="w-full">

						<input id="searchbar" onkeyup="search_reminder()" type="text" name="search" placeholder="Chercher un projets" class="w-full h-[3.8vh] px-3 rounded-lg bg-stone-900 border border-stone-800/50 text-white" autocomplete="off">

						<div class="w-full border-t border-stone-700 mt-4 mb-8 rounded-full"></div>

					</div>

					<div id="app-projets-body-grid" class="w-full grid grid-cols-2 gap-5">

						<!-- CARD D'UN PROJET -->
						<div class="w-[35vh] rounded-lg bg-stone-900 border border-stone-700 overflow-hidden cursor-pointer group animals">
						
							<div class="w-full h-[15vh] bg-[url('ressources/images/moneyconvertor.png')] bg-cover bg-center p-3">
								
								<a href="https://github.com/Ormidales/JAVA-moneyConvertor" onclick="window.open(this.href); return false;"><p class="text-[11px] text-[11px] text-white bg-stone-800/50 hover:bg-stone-800/75 border border-stone-700/75 hover:border-stone-900/75 px-2 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition-all flex items-center shadow shadow-black/10 backdrop-blur-xl">

									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									  	<path stroke-linecap="round" stroke-linejoin="round" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
									</svg>

									Voir le projet
								</p></a>

								<a href="https://github.com/Ormidales/JAVA-moneyConvertor#readme" onclick="window.open(this.href); return false;"><p class="mt-2 text-[11px] text-[11px] text-white bg-stone-800/50 hover:bg-stone-800/75 border border-stone-700/75 hover:border-stone-900/75 px-2 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition-all flex items-center shadow shadow-black/10 backdrop-blur-xl">

									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									  	<path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
									</svg>

									Voir la documentation du projet

								</p></a>

							</div>

							<div class="w-full p-3">
								
								<p class="text-[14px] text-white">moneyConvertor - JAVA</p>

								<div class="w-full">
									
									<p class="text-[12px] text-gray-400">La classe moneyConvertor est une implémentation Java simple d'un convertisseur de devise. Elle permet de convertir des euros européens (EURO) en dollars américains (USD) et vice versa.</p>

								</div>

								<div class="w-full mt-5 flex items-center">
									
									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">JAVA</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Junit</span>

								</div>

							</div>

						</div>

						<!-- CARD D'UN PROJET -->
						<div class="w-[35vh] rounded-lg bg-stone-900 border border-stone-700 overflow-hidden cursor-pointer group animals">
						
							<div class="w-full h-[15vh] bg-[url('ressources/images/tictactoe.png')] bg-cover bg-center p-3">
								
								<a href="https://github.com/Ormidales/JAVA-TicTacToe" onclick="window.open(this.href); return false;"><p class="text-[11px] text-[11px] text-white bg-stone-800/50 hover:bg-stone-800/75 border border-stone-700/75 hover:border-stone-900/75 px-2 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition-all flex items-center shadow shadow-black/10 backdrop-blur-xl">

									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									  	<path stroke-linecap="round" stroke-linejoin="round" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
									</svg>

									Voir le projet
								</p></a>

								<a href="https://github.com/Ormidales/JAVA-TicTacToe#readme" onclick="window.open(this.href); return false;"><p class="mt-2 text-[11px] text-[11px] text-white bg-stone-800/50 hover:bg-stone-800/75 border border-stone-700/75 hover:border-stone-900/75 px-2 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition-all flex items-center shadow shadow-black/10 backdrop-blur-xl">

									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									  	<path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
									</svg>

									Voir la documentation du projet

								</p></a>

							</div>

							<div class="w-full p-3">
								
								<p class="text-[14px] text-white">TicTacToe - JAVA</p>

								<div class="w-full">
									
									<p class="text-[12px] text-gray-400">This is a simple implementation of the Tic-Tac-Toe game in Java. It allows two players to play the game in the command line by taking turns entering the row and column where they want to place their mark.</p>

								</div>

								<div class="w-full mt-5 flex items-center">
									
									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">JAVA</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Junit</span>

								</div>

							</div>

						</div>

						<!-- CARD D'UN PROJET -->
						<div class="w-[35vh] rounded-lg bg-stone-900 border border-stone-700 overflow-hidden cursor-pointer group animals">
						
							<div class="w-full h-[15vh] bg-[url('ressources/images/passwordgenerator.png')] bg-cover bg-center p-3">
								
								<a href="https://github.com/Ormidales/JAVA-PasswordGenerator" onclick="window.open(this.href); return false;"><p class="text-[11px] text-[11px] text-white bg-stone-800/50 hover:bg-stone-800/75 border border-stone-700/75 hover:border-stone-900/75 px-2 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition-all flex items-center shadow shadow-black/10 backdrop-blur-xl">

									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									  	<path stroke-linecap="round" stroke-linejoin="round" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
									</svg>

									Voir le projet
								</p></a>

								<a href="https://github.com/Ormidales/JAVA-PasswordGenerator#readme" onclick="window.open(this.href); return false;"><p class="mt-2 text-[11px] text-[11px] text-white bg-stone-800/50 hover:bg-stone-800/75 border border-stone-700/75 hover:border-stone-900/75 px-2 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition-all flex items-center shadow shadow-black/10 backdrop-blur-xl">

									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									  	<path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
									</svg>

									Voir la documentation du projet

								</p></a>

							</div>

							<div class="w-full p-3">
								
								<p class="text-[14px] text-white">PasswordGenerator - JAVA</p>

								<div class="w-full">
									
									<p class="text-[12px] text-gray-400">Ce projet permet de générer des mots de passe aléatoires et sécurisés en java.</p>

								</div>

								<div class="w-full mt-5 flex items-center">
									
									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">JAVA</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Junit</span>

								</div>

							</div>

						</div>

						<!-- CARD D'UN PROJET -->
						<div class="w-[35vh] rounded-lg bg-stone-900 border border-stone-700 overflow-hidden cursor-pointer group animals">
						
							<div class="w-full h-[15vh] bg-[url('ressources/images/hugoos.png')] bg-cover bg-center p-3">
								
								<a href="https://github.com/Ormidales/ressources/tree/main/personnel/hugoos" onclick="window.open(this.href); return false;"><p class="text-[11px] text-[11px] text-white bg-stone-800/50 hover:bg-stone-800/75 border border-stone-700/75 hover:border-stone-900/75 px-2 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition-all flex items-center shadow shadow-black/10 backdrop-blur-xl">

									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									  	<path stroke-linecap="round" stroke-linejoin="round" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
									</svg>

									Voir le projet
								</p></a>

								<a href="https://github.com/Ormidales/ressources/tree/main/personnel/hugoos" onclick="window.open(this.href); return false;"><p class="mt-2 text-[11px] text-[11px] text-white bg-stone-800/50 hover:bg-stone-800/75 border border-stone-700/75 hover:border-stone-900/75 px-2 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition-all flex items-center shadow shadow-black/10 backdrop-blur-xl">

									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									  	<path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
									</svg>

									Voir la documentation du projet

								</p></a>

							</div>

							<div class="w-full p-3">
								
								<p class="text-[14px] text-white">HugoOS</p>

								<div class="w-full">
									
									<p class="text-[12px] text-gray-400">Exemple de portfolio fonctionnant avec le même principe qu'un système d'exploitation Windows / Linux / MacOS. Le site sur lequel vous vous trouvé est la sixième version de HugoOS.</p>

								</div>

								<div class="w-full mt-5 flex items-center">
									
									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">HTML</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">CSS</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Javascript</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">TailwindCSS</span>

								</div>

							</div>

						</div>

						<!-- CARD D'UN PROJET -->
						<div class="w-[35vh] rounded-lg bg-stone-900 border border-stone-700 overflow-hidden cursor-pointer group animals">
						
							<div class="w-full h-[15vh] bg-[url('ressources/images/portfolio.png')] bg-cover bg-center p-3">
								
								<a href="https://hugodoueil.fr/" onclick="window.open(this.href); return false;"><p class="text-[11px] text-[11px] text-white bg-stone-800/50 hover:bg-stone-800/75 border border-stone-700/75 hover:border-stone-900/75 px-2 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition-all flex items-center shadow shadow-black/10 backdrop-blur-xl">

									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									  	<path stroke-linecap="round" stroke-linejoin="round" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
									</svg>

									Voir le projet
								</p></a>

								<a href="https://github.com/Ormidales/ressources/tree/main/personnel/portfolio" onclick="window.open(this.href); return false;"><p class="mt-2 text-[11px] text-[11px] text-white bg-stone-800/50 hover:bg-stone-800/75 border border-stone-700/75 hover:border-stone-900/75 px-2 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition-all flex items-center shadow shadow-black/10 backdrop-blur-xl">

									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									  	<path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
									</svg>

									Voir la documentation du projet

								</p></a>

							</div>

							<div class="w-full p-3">
								
								<p class="text-[14px] text-white">Portfolio Hugo Doueil 2022</p>

								<div class="w-full">
									
									<p class="text-[12px] text-gray-400">Pour mes études en BTS SIO SLAM, j'ai du réalisé un portfolio de présentation. J'ai utilisé du HTML / CSS / Javascript avec une utilisation du framework TailwindCSS.</p>

								</div>

								<div class="w-full mt-5 flex items-center">
									
									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">HTML</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">CSS</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Javascript</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">TailwindCSS</span>

								</div>

							</div>

						</div>

						<!-- CARD D'UN PROJET -->
						<div class="w-[35vh] rounded-lg bg-stone-900 border border-stone-700 overflow-hidden cursor-pointer group animals">
						
							<div class="w-full h-[15vh] bg-[url('ressources/images/ppe1.png')] bg-cover bg-center p-3">
								
								<a href="https://github.com/Ormidales/ressources/tree/main/scolaire/ppe1" onclick="window.open(this.href); return false;"><p class="text-[11px] text-[11px] text-white bg-stone-800/50 hover:bg-stone-800/75 border border-stone-700/75 hover:border-stone-900/75 px-2 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition-all flex items-center shadow shadow-black/10 backdrop-blur-xl">

									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									  	<path stroke-linecap="round" stroke-linejoin="round" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
									</svg>

									Voir le projet
								</p></a>

								<a href="ressources/pdf/ppe1.pdf" onclick="window.open(this.href); return false;"><p class="mt-2 text-[11px] text-[11px] text-white bg-stone-800/50 hover:bg-stone-800/75 border border-stone-700/75 hover:border-stone-900/75 px-2 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition-all flex items-center shadow shadow-black/10 backdrop-blur-xl">

									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									  	<path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
									</svg>

									Voir la documentation du projet

								</p></a>

							</div>

							<div class="w-full p-3">
								
								<p class="text-[14px] text-white">PPE1 - Étude des solutions de versioning</p>

								<div class="w-full">
									
									<p class="text-[12px] text-gray-400">Pour mes études en BTS SIO SLAM, J'ai du réalisé un projet en groupe de 3 avec mes collègues. Le projet consisté en la réalisation d'une étude des différentes solutions de versioning qu'il existe sur le marché (Git, Github, Gitlab, Bitbucket, etc...).</p>

								</div>

								<div class="w-full mt-5 flex items-center">
									
									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">Git</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Github</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Gitlab</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Atlassian Bitbucket</span>

								</div>

							</div>

						</div>

						<!-- CARD D'UN PROJET -->
						<div class="w-[35vh] rounded-lg bg-stone-900 border border-stone-700 overflow-hidden cursor-pointer group animals">
						
							<div class="w-full h-[15vh] bg-[url('ressources/images/ppe2.png')] bg-cover bg-center p-3">
								
								<a href="https://github.com/Ormidales/ressources/tree/main/scolaire/ppe2" onclick="window.open(this.href); return false;"><p class="text-[11px] text-white bg-stone-800/50 hover:bg-stone-800/75 border border-stone-700/75 hover:border-stone-900/75 px-2 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition-all flex items-center shadow shadow-black/10 backdrop-blur-xl">

									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									  	<path stroke-linecap="round" stroke-linejoin="round" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
									</svg>

									Voir le projet
								</p></a>

								<a href="ressources/pdf/ppe2.pdf" onclick="window.open(this.href); return false;"><p class="mt-2 text-[11px] text-white bg-stone-800/50 hover:bg-stone-800/75 border border-stone-700/75 hover:border-stone-900/75 px-2 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition-all flex items-center shadow shadow-black/10 backdrop-blur-xl">

									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									  	<path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
									</svg>

									Voir la documentation du projet

								</p></a>

							</div>

							<div class="w-full p-3">
								
								<p class="text-[13px] text-white">PPE2 - Réalisation d'un site pour la formation</p>

								<div class="w-full">
									
									<p class="text-[12px] text-gray-400">Pour mes études en BTS SIO SLAM, J'ai du réalisé un projet en groupe de 3 avec mes collègues. Le projet était de réalisé un site web pour notre formation, le BTS SIO SLAM du lycée Pardailhan de Auch (32).</p>

								</div>

								<div class="w-full mt-5 flex items-center">
									
									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">HTML</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">CSS</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Javascript</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">UIkit</span>

								</div>

							</div>

						</div>

						<!-- CARD D'UN PROJET -->
						<div class="w-[35vh] rounded-lg bg-stone-900 border border-stone-700 overflow-hidden cursor-pointer group animals">
						
							<div class="w-full h-[15vh] bg-[url('ressources/images/ppe3.png')] bg-cover bg-center p-3">
								
								<a href="https://github.com/Ormidales/ressources/tree/main/scolaire/ppe3" onclick="window.open(this.href); return false;"><p class="text-[11px] text-white bg-stone-800/50 hover:bg-stone-800/75 border border-stone-700/75 hover:border-stone-900/75 px-2 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition-all flex items-center shadow shadow-black/10 backdrop-blur-xl">

									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									  	<path stroke-linecap="round" stroke-linejoin="round" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
									</svg>

									Voir le projet
								</p></a>

								<a href="ressources/pdf/ppe3.pdf" onclick="window.open(this.href); return false;"><p class="mt-2 text-[11px] text-white bg-stone-800/50 hover:bg-stone-800/75 border border-stone-700/75 hover:border-stone-900/75 px-2 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition-all flex items-center shadow shadow-black/10 backdrop-blur-xl">

									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									  	<path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
									</svg>

									Voir la documentation du projet

								</p></a>

							</div>

							<div class="w-full p-3">
								
								<p class="text-[12px] text-white">PPE3 - Réalisation d'un site web d'une école d'art</p>

								<div class="w-full">
									
									<p class="text-[12px] text-gray-400">Pour mes études en BTS SIO SLAM, J'ai du réalisé un projet en groupe de 3 avec mes collègues. Le projet était de réalisé un site web d'une école d'art qui devait comportait une application web d'inscription de données dans une base de données et d'un reçu d'inscription sous format PDF.</p>

								</div>

								<div class="w-full mt-3 flex items-center">
									
									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">HTML</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">CSS</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Javascript</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">PHP</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">MySQL</span>

								</div>

							</div>

						</div>

						<!-- CARD D'UN PROJET -->
						<div class="w-[35vh] rounded-lg bg-stone-900 border border-stone-700 overflow-hidden cursor-pointer group animals">
						
							<div class="w-full h-[15vh] bg-[url('ressources/images/situations.png')] bg-cover bg-center p-3">
								
								<a href="https://github.com/Ormidales/ressources/tree/main/scolaire/situations" onclick="window.open(this.href); return false;"><p class="text-[11px] text-white bg-stone-800/50 hover:bg-stone-800/75 border border-stone-700/75 hover:border-stone-900/75 px-2 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition-all flex items-center shadow shadow-black/10 backdrop-blur-xl">

									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									  	<path stroke-linecap="round" stroke-linejoin="round" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
									</svg>

									Voir le projet
								</p></a>

								<a href="https://github.com/Ormidales/ressources/tree/main/scolaire/situations" onclick="window.open(this.href); return false;"><p class="mt-2 text-[11px] text-white bg-stone-800/50 hover:bg-stone-800/75 border border-stone-700/75 hover:border-stone-900/75 px-2 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition-all flex items-center shadow shadow-black/10 backdrop-blur-xl">

									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									  	<path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
									</svg>

									Voir la documentation du projet

								</p></a>

							</div>

							<div class="w-full p-3">
								
								<p class="text-[12px] text-white">BTS SIO SLAM - Situations</p>

								<div class="w-full">
									
									<p class="text-[12px] text-gray-400">Pour mes études en BTS SIO SLAM, J'ai du réalisé deux situations. La première est une application web permettant de lister des vidéos youtubes dynamiquement avec PHP et MySQL et d'écouter ces vidéos. La deuxième situation est une application mobile créer pour montrer nos connaissances sur le développement Android.</p>

								</div>

								<div class="w-full mt-5 flex items-center">
									
									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">HTML</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">CSS</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Javascript</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">PHP</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">MySQL</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Android</span>

								</div>

							</div>

						</div>

						<!-- CARD D'UN PROJET -->
						<div class="w-[35vh] rounded-lg bg-stone-900 border border-stone-700 overflow-hidden cursor-pointer group animals">
						
							<div class="w-full h-[15vh] bg-[url('ressources/images/stage1.png')] bg-cover bg-center p-3">
								
								<a href="https://github.com/Ormidales/ressources/tree/main/scolaire/stage-1" onclick="window.open(this.href); return false;"><p class="text-[11px] text-white bg-stone-800/50 hover:bg-stone-800/75 border border-stone-700/75 hover:border-stone-900/75 px-2 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition-all flex items-center shadow shadow-black/10 backdrop-blur-xl">

									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									  	<path stroke-linecap="round" stroke-linejoin="round" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
									</svg>

									Voir le projet
								</p></a>

								<a href="https://github.com/Ormidales/ressources/tree/main/scolaire/stage-1" onclick="window.open(this.href); return false;"><p class="mt-2 text-[11px] text-white bg-stone-800/50 hover:bg-stone-800/75 border border-stone-700/75 hover:border-stone-900/75 px-2 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition-all flex items-center shadow shadow-black/10 backdrop-blur-xl">

									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									  	<path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
									</svg>

									Voir la documentation du projet

								</p></a>

							</div>

							<div class="w-full p-3">
								
								<p class="text-[12px] text-white">BTS SIO SLAM - Stage 2021</p>

								<div class="w-full">
									
									<p class="text-[12px] text-gray-400">Pour mes études en BTS SIO SLAM, J'ai du réalisé un stage dans l'entreprise Prosoluce. J'y ai réalisé un outil interne permettant de lister des entreprises clientes ainsi que les utilisateurs étant abonnés au service de Prosoluce dans l'entreprise.</p>

								</div>

								<div class="w-full mt-5 flex items-center">
									
									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">HTML</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">CSS</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Javascript</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">PHP</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">MySQL</span>

								</div>

							</div>

						</div>

						<!-- CARD D'UN PROJET -->
						<div class="w-[35vh] rounded-lg bg-stone-900 border border-stone-700 overflow-hidden cursor-pointer group animals">
						
							<div class="w-full h-[15vh] bg-[url('ressources/images/stage2.png')] bg-cover bg-center p-3">
								
								<a href="https://github.com/Ormidales/ressources/tree/main/scolaire/stage-2" onclick="window.open(this.href); return false;"><p class="text-[11px] text-white bg-stone-800/50 hover:bg-stone-800/75 border border-stone-700/75 hover:border-stone-900/75 px-2 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition-all flex items-center shadow shadow-black/10 backdrop-blur-xl">

									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									  	<path stroke-linecap="round" stroke-linejoin="round" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
									</svg>

									Voir le projet
								</p></a>

								<a href="https://github.com/Ormidales/ressources/tree/main/scolaire/stage-2" onclick="window.open(this.href); return false;"><p class="mt-2 text-[11px] text-white bg-stone-800/50 hover:bg-stone-800/75 border border-stone-700/75 hover:border-stone-900/75 px-2 py-1 rounded-lg opacity-0 group-hover:opacity-100 transition-all flex items-center shadow shadow-black/10 backdrop-blur-xl">

									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									  	<path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
									</svg>

									Voir la documentation du projet

								</p></a>

							</div>

							<div class="w-full p-3">
								
								<p class="text-[12px] text-white">BTS SIO SLAM - Stage 2022</p>

								<div class="w-full">
									
									<p class="text-[12px] text-gray-400">Pour mes études en BTS SIO SLAM, J'ai du réalisé un stage au Conseil Départemental du Gers. J'y ai réalisé deux projets : Le premier est une modification de leurs outils GLPI permettant de créer des évènements et des tickets en fonction de formulaires. Le deuxième projet est un outil de Newsletter interne développé sous Symfony et SendInBlue.</p>

								</div>

								<div class="w-full mt-5 flex items-center">
									
									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">GLPI</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Plugins GLPI</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Symfony</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">PHP</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">API</span>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>



			



			<!-- APPLICATION CHANGEMENT BACKGROUND -->
			<div id="app-background" class="absolute top-6 left-6 w-[35vh] p-2 bg-stone-900 rounded-lg border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]">

				<div id="app-background-header" class="w-full pb-2 px-2 flex items-center justify-between border-b border-stone-700">
					
					<div class="flex items-center">
							
						<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							 <path stroke-linecap="round" stroke-linejoin="round" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
						</svg>

						<p class="text-[12px] text-white ml-2">Modification du Fond d'écran</p>

					</div>

					<div class="flex items-center">
						
						<div class="ml-2 w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="fermer_app_background()">
						
							<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
							</svg>

						</div>

					</div>

				</div>
				
				<div class="w-full h-[40vh] overflow-y-scroll pr-2 mt-2">
					
					<div class="w-full">
				
						<div class="w-full p-3 flex items-center justify-evenly">

							<div class="w-[2vh] h-[2vh] rounded-full bg-green-500 border border-green-500 hover:border-white transition-all cursor-pointer" onclick="background_green()"></div>

							<div class="w-[2vh] h-[2vh] rounded-full bg-yellow-500 border border-yellow-500 hover:border-white transition-all cursor-pointer" onclick="background_yellow()"></div>

							<div class="w-[2vh] h-[2vh] rounded-full bg-violet-500 border border-violet-500 hover:border-white transition-all cursor-pointer" onclick="background_violet()"></div>

							<div class="w-[2vh] h-[2vh] rounded-full border bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 hover:border-white transition-all cursor-pointer" onclick="background_gradient1()"></div>

							<div class="w-[2vh] h-[2vh] rounded-full border bg-gradient-to-r from-green-200 via-green-300 to-blue-500 hover:border-white transition-all cursor-pointer" onclick="background_gradient2()"></div>

							<div class="w-[2vh] h-[2vh] rounded-full border bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 hover:border-white transition-all cursor-pointer" onclick="background_gradient3()"></div>

							<div class="w-[2vh] h-[2vh] rounded-full border bg-gradient-to-r from-[#43e97b] to-[#38f9d7] hover:border-white transition-all cursor-pointer" onclick="background_gradient4()"></div>

							<div class="w-[2vh] h-[2vh] rounded-full border bg-gradient-to-r from-[#fa709a] to-[#fee140] hover:border-white transition-all cursor-pointer" onclick="background_gradient5()"></div>

						</div>

						<div class="w-full border-t border-stone-700 mt-1 mb-1"></div>

						<div class="w-full p-3">
						
							<div class="w-full rounded-lg h-[10vh] bg-[url('ressources/images/bg-1.webp')] bg-cover bg-center border border-stone-700 hover:border-white transition-all flex items-center justify-center cursor-pointer" onclick="background_image1()">
								
								<span class="px-3 py-2 bg-white/10 rounded-lg backdrop-blur-xl border border-white/25 text-white text-[10px]">Plage de Vieux-Boucau-les-Bains</span>

							</div>

							<div class="mt-3 w-full rounded-lg h-[10vh] bg-[url('ressources/images/bg-2.webp')] bg-cover bg-center border border-stone-700 hover:border-white transition-all flex items-center justify-center cursor-pointer" onclick="background_image2()">
								
								<span class="px-3 py-2 bg-white/10 rounded-lg backdrop-blur-xl border border-white/25 text-white text-[10px]">Plage de Seignosse 1</span>

							</div>

							<div class="mt-3 w-full rounded-lg h-[10vh] bg-[url('ressources/images/bg-3.webp')] bg-cover bg-center border border-stone-700 hover:border-white transition-all flex items-center justify-center cursor-pointer" onclick="background_image3()">
								
								<span class="px-3 py-2 bg-white/10 rounded-lg backdrop-blur-xl border border-white/25 text-white text-[10px]">Plage de Seignosse 2</span>

							</div>

							<div class="mt-3 w-full rounded-lg h-[10vh] bg-[url('ressources/images/bg-4.webp')] bg-cover bg-center border border-stone-700 hover:border-white transition-all flex items-center justify-center cursor-pointer" onclick="background_image4()">
								
								<span class="px-3 py-2 bg-white/10 rounded-lg backdrop-blur-xl border border-white/25 text-white text-[10px]">Forêt de Seignosse 1</span>

							</div>

							<div class="mt-3 w-full rounded-lg h-[10vh] bg-[url('ressources/images/bg-5.webp')] bg-cover bg-center border border-stone-700 hover:border-white transition-all flex items-center justify-center cursor-pointer" onclick="background_image5()">
								
								<span class="px-3 py-2 bg-white/10 rounded-lg backdrop-blur-xl border border-white/25 text-white text-[10px]">Forêt de Seignosse 2</span>

							</div>

							<div class="mt-3 w-full rounded-lg h-[10vh] bg-[url('ressources/images/bg-6.webp')] bg-cover bg-center border border-stone-700 hover:border-white transition-all flex items-center justify-center cursor-pointer" onclick="background_image6()">
								
								<span class="px-3 py-2 bg-white/10 rounded-lg backdrop-blur-xl border border-white/25 text-white text-[10px]">Coucher de soleil</span>

							</div>

						</div>

					</div>

				</div>

			</div>



			<!-- APPLICATION PERSONNELLE -->
			<div id="app-welcome" class="absolute bottom-6 left-6 w-[40vh] p-3 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]">
				
				<div id="app-welcome-header" class="w-full flex justify-between">
					
					<div class="w-[8vh] h-[8vh] bg-[url('ressources/images/hugo.png')] bg-cover bg-center rounded-lg"></div>

					<div class="flex">

						<div class="w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="fermer_app_welcome()">
						
							<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
							</svg>

						</div>

					</div>

				</div>

				<div class="w-full mt-5">
					
					<p class="text-[14px] text-white">Hugo Doueil</p>

					<p class="mt-1 text-[12px] text-gray-300">Je m’appelle Hugo Doueil, je suis un étudiant en Licence Bac+3 DQL à l'IUT Paul Sabatier Département Informatique de Toulouse, France. Je suis passionné par l’informatique et le développement Web et j’aimerai en faire mon métier.</p>

				</div>

				<div class="w-full mt-5 flex items-center">
					
					<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">Développeur Web / Fullstack</span>

					<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Étudiant</span>

				</div>

				<div class="w-full mt-3 flex items-center">
					
					<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">hugodoueil@gmail.com</span>

				</div>

				<div class="w-full mt-3 flex items-center">

					<a href="https://github.com/Ormidales" onclick="window.open(this.href); return false;" class="p-2 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">
						
						<svg role="img" class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>

					</a>

					<a href="https://www.linkedin.com/in/hugodoueil/" onclick="window.open(this.href); return false;" class="p-2 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">
						
						<svg role="img" class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>

					</a>

					<a href="https://dribbble.com/Ormidales" onclick="window.open(this.href); return false;" class="p-2 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">
						
						<svg role="img" class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><title>Dribbble</title><path d="M12 24C5.385 24 0 18.615 0 12S5.385 0 12 0s12 5.385 12 12-5.385 12-12 12zm10.12-10.358c-.35-.11-3.17-.953-6.384-.438 1.34 3.684 1.887 6.684 1.992 7.308 2.3-1.555 3.936-4.02 4.395-6.87zm-6.115 7.808c-.153-.9-.75-4.032-2.19-7.77l-.066.02c-5.79 2.015-7.86 6.025-8.04 6.4 1.73 1.358 3.92 2.166 6.29 2.166 1.42 0 2.77-.29 4-.814zm-11.62-2.58c.232-.4 3.045-5.055 8.332-6.765.135-.045.27-.084.405-.12-.26-.585-.54-1.167-.832-1.74C7.17 11.775 2.206 11.71 1.756 11.7l-.004.312c0 2.633.998 5.037 2.634 6.855zm-2.42-8.955c.46.008 4.683.026 9.477-1.248-1.698-3.018-3.53-5.558-3.8-5.928-2.868 1.35-5.01 3.99-5.676 7.17zM9.6 2.052c.282.38 2.145 2.914 3.822 6 3.645-1.365 5.19-3.44 5.373-3.702-1.81-1.61-4.19-2.586-6.795-2.586-.825 0-1.63.1-2.4.285zm10.335 3.483c-.218.29-1.935 2.493-5.724 4.04.24.49.47.985.68 1.486.08.18.15.36.22.53 3.41-.43 6.8.26 7.14.33-.02-2.42-.88-4.64-2.31-6.38z"/></svg>

					</a>

				</div>

				<div class="w-full h-[25vh] mt-5 overflow-y-scroll bg-stone-800 rounded-lg p-3">

					<p class="text-[13px] text-white">Mon parcours scolaire :</p>

					<div class="mt-3 w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">

						<span class="px-2 py-1 border border-blue-500/25 rounded-md bg-blue-500/10 text-blue-500 text-[10px]">En cours</span>
						
						<p class="text-[12px] text-white mt-3">Licence Bac+3 DQL</p>

						<p class="text-[10px] text-white">2022 - 2023</p>

						<p class="text-[10px] text-white">Toulouse / IUT Paul Sabatier Département Informatique – France</p>

						<p class="mt-2 text-[10px] text-gray-300">Je suis actuellement à la recherche d'une alternance afin de réaliser une Licence Bac+3 DQL à l'IUT Paul Sabatier Département Informatique de Toulouse.</p>

					</div>

					<div class="w-full mt-3 border-t border-stone-700"></div>

					<div class="mt-3 w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
						
						<p class="text-[12px] text-white mt-3">BTS SIO SLAM</p>

						<p class="text-[10px] text-white">2020 - 2022</p>

						<p class="text-[10px] text-white">Auch – France</p>

						<p class="mt-2 text-[10px] text-gray-300">BTS SIO (Services Informatiques aux Organisations) SLAM (Solutions Logicielles et Applications Métier) au Lycée Pardailhan de AUCH 32000.</p>

						<p class="mt-2 text-[10px] text-gray-300">Certifié Atelier RGPD (CNIL) et certifié ANSSI (SecNumAcadémie).</p>

					</div>

					<div class="w-full mt-3 border-t border-stone-700"></div>

					<div class="mt-3 w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
						
						<p class="text-[12px] text-white">BAC TECHNOLOGIQUE STI2D EE</p>

						<p class="text-[10px] text-white">2018 - 2020</p>

						<p class="text-[10px] text-white">Gourdan Polignan - France</p>

						<p class="mt-2 text-[10px] text-gray-300">Sciences et Technologies de l’indurstrie et du Développement Durable option Énergie et Environnement au Lycée Paul Mathou à GOURDAN POLIGNAN 31800, Mention Assez Bien.</p>

						<p class="mt-2 text-[10px] text-gray-300">Projet en Terminal STI2D EE : Abri à vélo électrique avec panneaux solaires intégrés et rotatif suivant la position du soleil dans le ciel.</p>

					</div>

					<div class="w-full mt-3 border-t border-stone-700"></div>

					<div class="mt-3 w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
						
						<p class="text-[12px] text-white">Brevet des Collèges</p>

						<p class="text-[10px] text-white">2015</p>

						<p class="text-[10px] text-white">Saint-Gaudens - France</p>

						<p class="mt-2 text-[10px] text-gray-300">Brevet des Collèges en 2015 au Collège Didier Daurat à SAINT-GAUDENS 31800.</p>

					</div>

				</div>

				<div class="w-full mt-5 md:flex md:items-center gap-x-3 block">
					
					<a href="mailto:hugodoueil@gmail.com" onclick="window.open(this.href); return false;" class="md:w-1/2 md:mb-0 w-full mb-2 px-3 py-2 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer">Me contacter</a>

					<span onclick="ouvrir_app_projets()" class="md:w-1/2 w-full px-3 py-2 bg-gray-500 hover:bg-gray-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer">Mes projets</span>

				</div>

			</div>




			<!-- APPLICATION STAGES -->
			<div id="app-stages" class="absolute top-6 left-6 w-[75vh] p-2 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]">
				
				<div id="app-stages-header" class="w-full pb-2 px-2 flex items-center justify-between border-b border-stone-700">
					
					<div class="flex items-center">
							
						<svg xmlns="http://www.w3.org/2000/svg" class="w-[2vh] h-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						  	<path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
						</svg>

						<p class="text-[12px] text-white ml-2">Application des stages</p>

					</div>

					<div class="flex items-center">

						<div class="ml-2 w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="zoomOut_app_stages()">
						
							<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M20 12H4" />
							</svg>

						</div>
						
						<div class="ml-2 w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="zoomIn_app_stages()">
						
							<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
							</svg>

						</div>
						
						<div class="ml-2 w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="fermer_app_stages()">
						
							<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
							</svg>

						</div>

					</div>

				</div>

				<div id="app-stages-body" class="w-full h-[45vh] mt-5 overflow-y-scroll bg-stone-800 rounded-lg p-3">

					<div class="w-full p-5 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
						
						<p class="text-[12px] text-white">STAGE BTS SIO SLAM 1 - ENTREPRISE PROSOLUCE</p>

						<p class="text-[10px] text-white">2021</p>

						<p class="text-[10px] text-white">Stage professionnel</p>

						<a href="ressources/images/stage1.png" onclick="window.open(this.href); return false;"><div class="mt-5 w-full h-[20vh] rounded-lg bg-[url('ressources/images/stage1.png')] bg-cover bg-center"></div></a>

						<p class="mt-5 text-[10px] text-gray-300">J'ai réalisé un mon premier stage professionnel dans l'entreprise PROSOLUCE SAS, à Encausse-les-Thermes, en Haute-Garonne (31). J'ai du réalisé une application web qui consisté en un annuaire téléphonique des clients de l'entreprise ou les utilisateurs peuvent modifier, supprimer et ajoutés des contacts ainsi que des entreprises dans lequelles peuvent ce trouver plusieurs contacts. Cette application web était une application interne à l'entreprise.</p>

						<div class="w-full mt-5 flex items-center">
					
							<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">HTML</span>

							<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">CSS</span>

							<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Javascript</span>

							<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Bootstrap</span>

							<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">PHP</span>

							<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">MySQL</span>

						</div>

						<embed src="ressources/pdf/rapport-stage-1.pdf" width="100%" class="rounded-lg mt-5 h-[45vh]" type="application/pdf">

						<div class="w-full mt-5 md:flex md:items-center gap-x-3 block">
					
							<a href="ressources/pdf/rapport-stage-1.pdf" class="w-full" onclick="window.open(this.href); return false;"><span class="w-full mb-2 px-3 py-2 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md">Voir la documentation du stage</span></a>

						</div>

					</div>

					<div class="w-full mt-8 border-t border-stone-700"></div>

					<div class="mt-8 w-full p-5 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
						
						<p class="text-[12px] text-white">STAGE BTS SIO SLAM 2 - CONSEIL DÉPARTEMENTAL DU GERS</p>

						<p class="text-[10px] text-white">2022</p>

						<p class="text-[10px] text-white">Stage professionnel</p>

						<a href="ressources/images/stage2.png" onclick="window.open(this.href); return false;"><div class="mt-5 w-full h-[20vh] rounded-lg bg-[url('ressources/images/stage2.png')] bg-cover bg-center"></div></a>

						<p class="mt-5 text-[10px] text-gray-300">J'ai réalisé mon deuxième stage au Conseil Départemental du Gers, à Auch dans le Gers (32). j'ai participé à deux projets internes au Conseil. Le premier était un formulaire de création d'évènement dans GLPI, ou un utilisateur pouvait créer une demande pour des affiches ou pour des livraisons en rapport avec un évènement qui allait se dérouler. Le deuxième projet était une newsletter créer avec Symfony et SendInBlue. Il était question d'une newsletter interne au pôle DOSIN (là ou j'ai réalisé mon stage) du Conseil.</p>

						<div class="w-full mt-5 flex items-center">
					
							<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">GLPI</span>

							<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Symfony</span>

							<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">PHP</span>

							<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">API</span>

						</div>

						<embed src="ressources/pdf/rapport-stage-2.pdf" width="100%" class="rounded-lg mt-5 h-[45vh]" type="application/pdf">

						<div class="w-full mt-5 md:flex md:items-center gap-x-3 block">
					
							<a href="ressources/pdf/rapport-stage-2.pdf" class="w-full" onclick="window.open(this.href); return false;"><span class="w-full mb-2 px-3 py-2 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md">Voir la documentation du stage</span></a>

						</div>

					</div>

				</div>

			</div>




			<!-- APPLICATION MAGASIN APP -->
			<div id="app-magasin" class="absolute bottom-6 left-6 w-[60vh] p-2 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]">
				
				<div id="app-magasin-header" class="w-full pb-2 px-2 flex items-center justify-between border-b border-stone-700">
					
					<div class="flex items-center">
						
						<svg xmlns="http://www.w3.org/2000/svg" class="w-[2vh] h-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						 	<path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
						</svg>

						<p class="text-[12px] text-white ml-2">Magasin d'applications</p>

					</div>

					<div class="flex items-center">
						
						<div class="ml-2 w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="fermer_app_magasin()">
						
							<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
							</svg>

						</div>

					</div>

				</div>

				<div class="w-full h-[45vh] mt-5 overflow-y-scroll bg-stone-800 rounded-lg p-3">

					<div class="w-full p-5 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden">
				
						<div class="w-full flex">
							
							<div class="w-[8vh] h-[8vh] bg-blue-500 rounded-lg flex items-center justify-center">
								
								<svg xmlns="http://www.w3.org/2000/svg" class="h-[5vh] w-[5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
								</svg>

							</div>

						</div>

						<div class="w-full mt-5">
							
							<p class="text-[14px] text-white">Mon CV</p>

							<p class="mt-1 text-[12px] text-gray-300">Lancer cette application pour voir mon curriculum vitae (CV).</p>

						</div>

						<div class="w-full mt-5 flex items-center">
							
							<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">Taille : 3.06Mb</span>

							<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Ajoutée en 2022</span>

						</div>

						<div class="w-full mt-5 md:flex md:items-center gap-x-3 block">
							
							<span class="w-full px-3 py-2 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer" onclick="ouvrir_app_cv()">Lancer l'application</span>

						</div>

					</div>

					<div class="w-full mt-8 border-t border-stone-700"></div>

					<div class="mt-8 w-full p-5 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden">
				
						<div class="w-full flex">
							
							<div class="w-[8vh] h-[8vh] bg-blue-500 rounded-lg flex items-center justify-center">
								
								<svg xmlns="http://www.w3.org/2000/svg" class="h-[5vh] w-[5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
								</svg>

							</div>

						</div>

						<div class="w-full mt-5">
							
							<p class="text-[14px] text-white">Mes Certifications</p>

							<p class="mt-1 text-[12px] text-gray-300">Lancer cette application pour voir les différentes certifications que j'ai obtenus lors de mes études.</p>

						</div>

						<div class="w-full mt-5 flex items-center">
							
							<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">Taille : 5.18Mb</span>

							<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Ajoutée en 2022</span>

						</div>

						<div class="w-full mt-5 md:flex md:items-center gap-x-3 block">
							
							<span class="w-full px-3 py-2 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer" onclick="ouvrir_app_certifications()">Lancer l'application</span>

						</div>

					</div>

					<div class="w-full mt-8 border-t border-stone-700"></div>

					<div class="mt-8 w-full p-5 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden">
				
						<div class="w-full flex">
							
							<div class="w-[8vh] h-[8vh] bg-blue-500 rounded-lg flex items-center justify-center">

								<svg xmlns="http://www.w3.org/2000/svg" class="h-[5vh] w-[5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
								</svg>

							</div>

						</div>

						<div class="w-full mt-5">
							
							<p class="text-[14px] text-white">Veille Technologique</p>

							<p class="mt-1 text-[12px] text-gray-300">Lancer cette application pour voir ma solution de veille technologique.</p>

						</div>

						<div class="w-full mt-5 flex items-center">
							
							<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">Taille : 0.845Mb</span>

							<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Ajoutée en 2022</span>

						</div>

						<div class="w-full mt-5 md:flex md:items-center gap-x-3 block">
							
							<span class="w-full px-3 py-2 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer" onclick="ouvrir_app_veilletechno()">Lancer l'application</span>

						</div>

					</div>

					<div class="w-full mt-8 border-t border-stone-700"></div>

					<div class="mt-8 w-full p-5 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden">
				
						<div class="w-full flex">
							
							<div class="w-[8vh] h-[8vh] bg-blue-500 rounded-lg flex items-center justify-center">
								
								<svg xmlns="http://www.w3.org/2000/svg" class="h-[5vh] w-[5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
								</svg>

							</div>

						</div>

						<div class="w-full mt-5">
							
							<p class="text-[14px] text-white">Mentions Légales</p>

							<p class="mt-1 text-[12px] text-gray-300">Lancer cette application pour voir les mentions légales du site.</p>

						</div>

						<div class="w-full mt-5 flex items-center">
							
							<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">Taille : 2.85Mb</span>

							<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Ajoutée en 2022</span>

						</div>

						<div class="w-full mt-5 md:flex md:items-center gap-x-3 block">
							
							<span class="w-full px-3 py-2 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer" onclick="ouvrir_app_mentionslegales()">Lancer l'application</span>

						</div>

					</div>

					<div class="w-full mt-8 border-t border-stone-700"></div>

					<div class="mt-8 w-full p-5 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden">
				
						<div class="w-full flex">
							
							<div class="w-[8vh] h-[8vh] bg-blue-500 rounded-lg flex items-center justify-center">
								
								<svg xmlns="http://www.w3.org/2000/svg" class="h-[5vh] w-[5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
								</svg>

							</div>

						</div>

						<div class="w-full mt-5">
							
							<p class="text-[14px] text-white">Paramètres de confidentialité</p>

							<p class="mt-1 text-[12px] text-gray-300">Lancer cette application pour voir les paramètres de confidentialité du site.</p>

						</div>

						<div class="w-full mt-5 flex items-center">
							
							<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">Taille : 1.25Mb</span>

							<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Ajoutée en 2022</span>

						</div>

						<div class="w-full mt-5 md:flex md:items-center gap-x-3 block">
							
							<span class="w-full px-3 py-2 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer" onclick="ouvrir_app_parametreconfidentialite()">Lancer l'application</span>

						</div>

					</div>

					<div class="w-full mt-8 border-t border-stone-700"></div>

					<div class="mt-8 w-full p-5 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden">
				
						<div class="w-full flex">
							
							<div class="w-[8vh] h-[8vh] bg-blue-500 rounded-lg flex items-center justify-center">
								
								<svg xmlns="http://www.w3.org/2000/svg" class="h-[5vh] w-[5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
								</svg>

							</div>

						</div>

						<div class="w-full mt-5">
							
							<p class="text-[14px] text-white">Plan du site</p>

							<p class="mt-1 text-[12px] text-gray-300">Lancer cette application pour voir le plan du site.</p>

						</div>

						<div class="w-full mt-5 flex items-center">
							
							<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">Taille : 0.254Mb</span>

							<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Ajoutée en 2022</span>

						</div>

						<div class="w-full mt-5 md:flex md:items-center gap-x-3 block">
							
							<span class="w-full px-3 py-2 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer" onclick="ouvrir_app_plandusite()">Lancer l'application</span>

						</div>

					</div>

					<div class="w-full mt-8 border-t border-stone-700"></div>

					<div class="mt-8 w-full p-5 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden">
				
						<div class="w-full flex">
							
							<div class="w-[8vh] h-[8vh] bg-blue-500 rounded-lg flex items-center justify-center">

								<svg xmlns="http://www.w3.org/2000/svg" class="h-[5vh] w-[5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
								</svg>

							</div>

						</div>

						<div class="w-full mt-5">
							
							<p class="text-[14px] text-white">Menu de retrocompatibilité</p>

							<p class="mt-1 text-[12px] text-gray-300">Lancer cette application pour voir le menu de retrocompatibilité.</p>

						</div>

						<div class="w-full mt-5 flex items-center">
							
							<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">Taille : 25Gb</span>

							<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Ajoutée en 2022</span>

						</div>

						<div class="w-full mt-5 md:flex md:items-center gap-x-3 block">
							
							<span class="w-full px-3 py-2 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer" onclick="ouvrir_app_retrocomp()">Lancer l'application</span>

						</div>

					</div>

				</div>

			</div>



			<!-- APPLICATION CV -->
			<div id="app-cv" class="absolute top-6 left-6 w-[75vh] p-2 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]">
				
				<div id="app-cv-header" class="w-full pb-2 px-2 flex items-center justify-between border-b border-stone-700">
					
					<div class="flex items-center">
						 
						<svg xmlns="http://www.w3.org/2000/svg" class="w-[2vh] h-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						  	<path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
						</svg>

						<p class="text-[12px] text-white ml-2">Mon CV</p>

					</div>

					<div class="flex items-center">

						<div class="ml-2 w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="zoomOut_app_cv()">
						
							<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M20 12H4" />
							</svg>

						</div>
						
						<div class="ml-2 w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="zoomIn_app_cv()">
						
							<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
							</svg>

						</div>
						
						<div class="ml-2 w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="fermer_app_cv()">
						
							<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
							</svg>

						</div>

					</div>

				</div>

				<div id="app-cv-body" class="w-full h-[55vh] mt-5 bg-stone-800 rounded-lg p-3 overflow-y-scroll">

					<div class="w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all mb-5">

						<a href="ressources/pdf/cv-hugo.pdf" class="px-3 py-2 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer" onclick="window.open(this.href); return false;">Voir mon CV dans une autre page</a>

					</div>

					<embed src="ressources/pdf/cv-hugo.pdf" width="100%" height="100%" class="rounded-lg" type="application/pdf">

				</div>

			</div>



			<!-- APPLICATION CERTIFICATIONS -->
			<div id="app-certifications" class="absolute top-6 left-6 w-[75vh] p-2 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]">
				
				<div id="app-certifications-header" class="w-full pb-2 px-2 flex items-center justify-between border-b border-stone-700">
					
					<div class="flex items-center">
						
						<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						  	<path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
						</svg>

						<p class="text-[12px] text-white ml-2">Mes Certifications</p>

					</div>

					<div class="flex items-center">

						<div class="ml-2 w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="zoomOut_app_certifications()">
						
							<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M20 12H4" />
							</svg>

						</div>
						
						<div class="ml-2 w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="zoomIn_app_certifications()">
						
							<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
							</svg>

						</div>
						
						<div class="ml-2 w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="fermer_app_certifications()">
						
							<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
							</svg>

						</div>

					</div>

				</div>

				<div id="app-certifications-body" class="w-full h-[55vh] mt-5 bg-stone-800 rounded-lg p-3 overflow-y-scroll">

					<div class="w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all mb-5">

						<a href="ressources/pdf/cnilmooc.pdf" class="px-3 py-2 mb-3 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer" onclick="window.open(this.href); return false;">Voir ma certification "MOOC L'Atelier RGPD - CNIL"</a>

						<a href="ressources/pdf/anssimooc.pdf" class="px-3 py-2 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer" onclick="window.open(this.href); return false;">Voir ma certification "MOOC SecNum académie - ANSSI"</a>

					</div>

					<embed src="ressources/pdf/cnilmooc.pdf" width="100%" height="100%" class="rounded-lg" type="application/pdf">

					<embed src="ressources/pdf/anssimooc.pdf" width="100%" height="100%" class="rounded-lg mt-3" type="application/pdf">

				</div>

			</div>



			<!-- APPLICATION VEILLE TECHNOLOGIQUE -->
			<div id="app-veilletechno" class="absolute bottom-6 left-6 w-[75vh] p-2 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]">
				
				<div id="app-veilletechno-header" class="w-full pb-2 px-2 flex items-center justify-between border-b border-stone-700">
					
					<div class="flex items-center">
						
						<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						  	<path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
						</svg>

						<p class="text-[12px] text-white ml-2">Ma Veille technologique</p>

					</div>

					<div class="flex items-center">
						
						<div class="ml-2 w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="fermer_app_veilletechno()">
						
							<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
							</svg>

						</div>

					</div>

				</div>

				<div class="w-full h-[45vh] mt-5 bg-stone-800 rounded-lg p-3 overflow-y-scroll">

					<div class="w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
						
						<p class="text-[12px] text-white">Solution retenue :</p>

						<p class="mt-2 text-[10px] text-gray-300">Feedly (<a href="https://feedly.com">https://feedly.com</a>)</p>

					</div>

					<div class="w-full mt-3 border-t border-stone-700"></div>

					<div class="mt-3 w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
						
						<a href="ressources/images/feedly-1.png" onclick="window.open(this.href); return false;"><img src="ressources/images/feedly-1.png" class="w-full rounded-lg"></a>

					</div>

					<div class="w-full mt-3 border-t border-stone-700"></div>

					<div class="mt-3 w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
						
						<a href="ressources/images/feedly-2.png" onclick="window.open(this.href); return false;"><img src="ressources/images/feedly-2.png" class="w-full rounded-lg"></a>

					</div>

					<embed src="ressources/pdf/veilletechno-1.pdf" width="100%" height="100%" class="rounded-lg mt-3" type="application/pdf">

					<embed src="ressources/pdf/veilletechno-2.pdf" width="100%" height="100%" class="rounded-lg mt-3" type="application/pdf">

				</div>

			</div>



			<!-- APPLICATION MENTIONS LEGALES -->
			<div id="app-mentionslegales" class="absolute top-6 left-6 w-[75vh] p-2 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]">
				
				<div id="app-mentionslegales-header" class="w-full pb-2 px-2 flex items-center justify-between border-b border-stone-700">
					
					<div class="flex items-center">
						
						<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						  	<path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg>

						<p class="text-[12px] text-white ml-2">Application des Mentions Légales</p>

					</div>

					<div class="flex items-center">
						
						<div class="ml-2 w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="fermer_app_mentionslegales()">
						
							<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
							</svg>

						</div>

					</div>

				</div>

				<div class="w-full h-[45vh] mt-5 overflow-y-scroll bg-stone-800 rounded-lg p-3">

					<div class="w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
						
						<p class="text-[12px] text-white">Éditeur du Site :</p>

						<p class="mt-2 text-[10px] text-gray-300">Hugo Doueil.</p>

						<p class="mt-1 text-[10px] text-gray-300">Responsable éditoriale : Hugo DOUEIL.</p>

						<p class="mt-1 text-[10px] text-gray-300">22 Rue du Moulin d'Aulné, Villeneuve de Rivière</p>

						<p class="mt-1 text-[10px] text-gray-300">Email : Hugo DOUEIL (hugodoueil@gmail.com).</p>

						<p class="mt-1 text-[10px] text-gray-300">Site Web : hugodoueil.fr</p>

					</div>

					<div class="w-full mt-3 border-t border-stone-700"></div>

					<div class="mt-3 w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
						
						<p class="text-[12px] text-white">Hébergement du Site :</p>

						<p class="mt-2 text-[10px] text-gray-300">Hébergeur : Pulseheberg.</p>

						<p class="mt-1 text-[10px] text-gray-300">9, Boulevard de Strasbourg, 83000 Toulon, France.</p>

						<p class="mt-1 text-[10px] text-gray-300">Site Web : hugodoueil.fr</p>

					</div>

					<div class="w-full mt-3 border-t border-stone-700"></div>

					<div class="mt-3 w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
						
						<p class="text-[12px] text-white">Développement du Site :</p>

						<p class="mt-2 text-[10px] text-gray-300">Hugo DOUEIL.</p>

						<p class="mt-1 text-[10px] text-gray-300">22 Rue du Moulin d'Aulné, Villeneuve de Rivière</p>

						<p class="mt-1 text-[10px] text-gray-300">Site Web : hugodoueil.fr</p>

					</div>

					<div class="w-full mt-3 border-t border-stone-700"></div>

					<div class="mt-3 w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
						
						<p class="text-[12px] text-white">Conditions d'utilisation :</p>

						<p class="mt-2 text-[10px] text-gray-300">Ce site (hugodoueil.fr) est proposé en différents langages web (HTML, HTML5, Javascript, CSS, etc…) pour un meilleur confort d’utilisation et un graphisme plus agréable.</p>

						<p class="mt-1 text-[10px] text-gray-300">Nous vous recommandons de recourir à des navigateurs modernes comme Microsoft Edge, Safari, Google Chrome, Firefox, etc…</p>

					</div>

					<div class="w-full mt-3 border-t border-stone-700"></div>

					<div class="mt-3 w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
						
						<p class="text-[12px] text-white">Cookies :</p>

						<p class="mt-2 text-[10px] text-gray-300">Le site hugodoueil.fr ne comporte aucune demandes de cookies pour des besoins de statistiques et d'affichage. Un cookie est une information déposée sur votre disque dur par le serveur du site que vous visitez. Il contient plusieurs données qui sont stockées sur votre ordinateur dans un simple fichier texte auquel un serveur accède pour lire et enregistrer des informations . Toutes les parties de ce site sont fonctionnelles sans l'utilisation de cookies.</p>

					</div>

					<div class="w-full mt-3 border-t border-stone-700"></div>

					<div class="mt-3 w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
						
						<p class="text-[12px] text-white">Données Personnelles :</p>

						<p class="mt-2 text-[10px] text-gray-300">De manière générale, vous n’êtes pas tenu de nous communiquer vos données personnelles lorsque vous visitez notre site Internet (hugodoueil.fr). Cependant, ce principe comporte certaines exceptions. En effet, pour certains services proposés par notre site, vous pouvez être amenés à nous communiquer certaines données telles que : votre nom, votre prénom, votre adresse électronique, et votre numéro de téléphone. Tel est le cas lorsque vous remplissez le formulaire qui vous est proposé en ligne, dans la rubrique « contact ».</p>

					</div>

					<div class="w-full mt-3 border-t border-stone-700"></div>

					<div class="mt-3 w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
						
						<p class="text-[12px] text-white">Outils utilisés :</p>

						<p class="mt-2 text-[10px] text-gray-300">- TailwindCSS / <a href="https://tailwindcss.com" class="underline cursor-pointer">https://tailwindcss.com</a></p>

						<p class="mt-2 text-[10px] text-gray-300">- HeroIcons / <a href="https://heroicons.com" class="underline cursor-pointer">https://heroicons.com</a></p>

						<p class="mt-2 text-[10px] text-gray-300">- Toutes les images utilisées sur ce site proviennent de mes photos personnelles / <a href="https://hugodoueil.fr" class="underline cursor-pointer">hugodoueil.fr</a></p>

					</div>

				</div>

			</div>



			<!-- APPLICATION PARAMETRE DE CONFIDENTIALITE -->
			<div id="app-parametreconfidentialite" class="absolute top-6 left-6 w-[75vh] p-2 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]">
				
				<div id="app-parametreconfidentialite-header" class="w-full pb-2 px-2 flex items-center justify-between border-b border-stone-700">
					
					<div class="flex items-center">
						
						<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						  	<path stroke-linecap="round" stroke-linejoin="round" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
						</svg>

						<p class="text-[12px] text-white ml-2">Application des Parametres de Confidentialité</p>

					</div>

					<div class="flex items-center">
						
						<div class="ml-2 w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="fermer_app_parametreconfidentialite()">
						
							<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
							</svg>

						</div>

					</div>

				</div>

				<div class="w-full h-[45vh] mt-5 overflow-y-scroll bg-stone-800 rounded-lg p-3">

					<div class="w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
						
						<p class="text-[12px] text-white">Éditeur du Site :</p>

						<p class="mt-2 text-[10px] text-gray-300">Hugo Doueil.</p>

						<p class="mt-1 text-[10px] text-gray-300">Responsable éditoriale : Hugo DOUEIL.</p>

						<p class="mt-1 text-[10px] text-gray-300">22 Rue du Moulin d'Aulné, Villeneuve de Rivière</p>

						<p class="mt-1 text-[10px] text-gray-300">Email : Hugo DOUEIL (hugodoueil@gmail.com).</p>

						<p class="mt-1 text-[10px] text-gray-300">Site Web : hugodoueil.fr</p>

					</div>

					<div class="w-full mt-3 border-t border-stone-700"></div>

					<div class="mt-3 w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
						
						<p class="text-[12px] text-white">Hébergement du Site :</p>

						<p class="mt-2 text-[10px] text-gray-300">Hébergeur : Pulseheberg.</p>

						<p class="mt-1 text-[10px] text-gray-300">9, Boulevard de Strasbourg, 83000 Toulon, France.</p>

						<p class="mt-1 text-[10px] text-gray-300">Site Web : hugodoueil.fr</p>

					</div>

					<div class="w-full mt-3 border-t border-stone-700"></div>

					<div class="mt-3 w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
						
						<p class="text-[12px] text-white">Développement du Site :</p>

						<p class="mt-2 text-[10px] text-gray-300">Hugo DOUEIL.</p>

						<p class="mt-1 text-[10px] text-gray-300">22 Rue du Moulin d'Aulné, Villeneuve de Rivière</p>

						<p class="mt-1 text-[10px] text-gray-300">Site Web : hugodoueil.fr</p>

					</div>

					<div class="w-full mt-3 border-t border-stone-700"></div>

					<div class="mt-3 w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
						
						<p class="text-[12px] text-white">Conditions d'utilisation :</p>

						<p class="mt-2 text-[10px] text-gray-300">Ce site (hugodoueil.fr) est proposé en différents langages web (HTML, HTML5, Javascript, CSS, etc…) pour un meilleur confort d’utilisation et un graphisme plus agréable.</p>

						<p class="mt-1 text-[10px] text-gray-300">Nous vous recommandons de recourir à des navigateurs modernes comme Microsoft Edge, Safari, Google Chrome, Firefox, etc…</p>

					</div>

					<div class="w-full mt-3 border-t border-stone-700"></div>

					<div class="mt-3 w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
						
						<p class="text-[12px] text-white">Cookies :</p>

						<p class="mt-2 text-[10px] text-gray-300">Le site hugodoueil.fr ne comporte aucune demandes de cookies pour des besoins de statistiques et d'affichage. Un cookie est une information déposée sur votre disque dur par le serveur du site que vous visitez. Il contient plusieurs données qui sont stockées sur votre ordinateur dans un simple fichier texte auquel un serveur accède pour lire et enregistrer des informations . Toutes les parties de ce site sont fonctionnelles sans l'utilisation de cookies.</p>

					</div>

					<div class="w-full mt-3 border-t border-stone-700"></div>

					<div class="mt-3 w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
						
						<p class="text-[12px] text-white">Données Personnelles :</p>

						<p class="mt-2 text-[10px] text-gray-300">De manière générale, vous n’êtes pas tenu de nous communiquer vos données personnelles lorsque vous visitez notre site Internet (hugodoueil.fr). Cependant, ce principe comporte certaines exceptions. En effet, pour certains services proposés par notre site, vous pouvez être amenés à nous communiquer certaines données telles que : votre nom, votre prénom, votre adresse électronique, et votre numéro de téléphone. Tel est le cas lorsque vous remplissez le formulaire qui vous est proposé en ligne, dans la rubrique « contact ».</p>

					</div>

					<div class="w-full mt-3 border-t border-stone-700"></div>

					<div class="mt-3 w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
						
						<p class="text-[12px] text-white">Outils utilisés :</p>

						<p class="mt-2 text-[10px] text-gray-300">- TailwindCSS / <a href="https://tailwindcss.com" class="underline cursor-pointer">https://tailwindcss.com</a></p>

						<p class="mt-2 text-[10px] text-gray-300">- HeroIcons / <a href="https://heroicons.com" class="underline cursor-pointer">https://heroicons.com</a></p>

						<p class="mt-2 text-[10px] text-gray-300">- Toutes les images utilisées sur ce site proviennent de mes photos personnelles / <a href="https://hugodoueil.fr" class="underline cursor-pointer">hugodoueil.fr</a></p>

					</div>

				</div>

			</div>



			<!-- APPLICATION PLAN DU SITE -->
			<div id="app-plandusite" class="absolute bottom-6 left-6 w-[75vh] p-2 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]">
				
				<div id="app-plandusite-header" class="w-full pb-2 px-2 flex items-center justify-between border-b border-stone-700">
					
					<div class="flex items-center">
							
						<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						  	<path stroke-linecap="round" stroke-linejoin="round" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
						</svg>

						<p class="text-[12px] text-white ml-2">Application Plan du site</p>

					</div>

					<div class="flex items-center">
						
						<div class="ml-2 w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="fermer_app_plandusite()">
						
							<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
							</svg>

						</div>

					</div>

				</div>

				<div class="w-full h-[45vh] mt-5 overflow-y-scroll bg-stone-800 rounded-lg p-3">

					<div class="w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">

						<span class="px-3 py-2 mb-3 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer" onclick="ouvrir_app_menu()">Application Menu</span>

						<span class="px-3 py-2 mb-3 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer" onclick="ouvrir_app_background()">Application Changer le fond d'écran</span>

						<span class="px-3 py-2 mb-3 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer" onclick="ouvrir_app_welcome()">Application Personnelle</span>

						<span class="px-3 py-2 mb-3 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer" onclick="ouvrir_app_projets()">Application Projets</span>

						<span class="px-3 py-2 mb-3 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer" onclick="ouvrir_app_stages()">Application Stages</span>

						<span class="px-3 py-2 mb-3 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer" onclick="ouvrir_app_magasin()">Application Magasin d'applications</span>

						<span class="px-3 py-2 mb-3 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer" onclick="ouvrir_app_cv()">Application CV</span>

						<span class="px-3 py-2 mb-3 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer" onclick="ouvrir_app_certifications()">Application Certifications</span>

						<span class="px-3 py-2 mb-3 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer" onclick="ouvrir_app_veilletechno()">Application Veille Technologique</span>

						<span class="px-3 py-2 mb-3 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer" onclick="ouvrir_app_mentionslegales()">Application Mentions Légales</span>

						<span class="px-3 py-2 mb-3 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer" onclick="ouvrir_app_parametreconfidentialite()">Application Paramètres de confidentialité</span>

						<span class="px-3 py-2 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer" onclick="ouvrir_app_plandusite()">Application Plan du site</span>

					</div>

				</div>

			</div>

		</section>



		<div id="bureau-md" class="md:hidden block w-full">
                
            <section class="lg:w-[75%] w-[100%] bg-[url('ressources/images/bg-2.webp')] bg-cover bg-center bg-fixed lg:p-[8vh] md:p-[6vh] sm:p-[4vh] p-[2vh] text-white">
			
				<div tabindex="0" class="flex items-center p-4 rounded-xl bg-white/10 backdrop-blur-xl border border-stone-100/25 animate__animated animate__fadeInDown">
					
					<div class="w-[10vh] h-[10vh] sm:block hidden rounded-xl border border-stone-100/25 bg-[url('img/img-profile.webp')] bg-cover bg-center hover:bg-[length:300%] transition-all"></div>

					<div class="sm:ml-4 ml-0">
						
						<p class="sm:text-[45px] text-[35px] font-bold" style="line-height: 60px;">HUGO DOUEIL</p>

						<p class="text-[25px]" style="line-height: 25px;">Dev Web / Fullstack</p>

					</div>

				</div>

				<div class="flex lg:hidden md:mt-8 sm:mt-6 mt-4 items-center p-4 rounded-xl bg-white/10 backdrop-blur-xl border border-stone-100/25 group cursor-pointer animate__animated animate__fadeInLeft" onclick="ouvrir_menumobile()">

					<svg xmlns="http://www.w3.org/2000/svg" class="w-[18px] h-[18px] text-white group-hover:translate-x-2 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					  	<path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
					</svg>
					
					<p class="ml-2 text-[18px] group-hover:translate-x-2 transition-all">Ouvrir le menu</p>

				</div>

				<a href="https://bureau.hugodoueil.fr" accesskey="b"><div class="md:mt-8 sm:mt-6 mt-4 lg:flex hidden items-center p-4 rounded-xl bg-white/10 backdrop-blur-xl border border-stone-100/25 group cursor-pointer animate__animated animate__fadeInLeft">

					<svg xmlns="http://www.w3.org/2000/svg" class="w-[18px] h-[18px] text-white group-hover:translate-x-2 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					  	<path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
					</svg>
					
					<p class="ml-2 text-[18px] group-hover:translate-x-2 transition-all">Ouvrir le mode bureau</p>

				</div></a>

				<div class="md:mt-8 sm:mt-6 mt-4 p-4 rounded-xl bg-white/10 backdrop-blur-xl border border-stone-100/25 animate__animated animate__fadeInLeft">
					
					<p class="text-[18px] font-bold">Projets réalisés :</p>

					<div class="mt-4 p-4 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">
					
						<p class="text-[18px]">Portfolio Hugo Doueil 2022</p>

						<p class="text-[18px]">2022</p>

						<p class="text-[18px]">Projet Scolaire / Personnel</p>

						<div class="mt-3 w-full md:h-[45vh] h-[20vh] bg-[url('https://hugodoueil.fr/img/portfolio.png')] bg-cover bg-center rounded-xl border border-stone-100/25"></div>

						<p class="mt-3 text-[18px]">Pour mes études en BTS SIO SLAM, j'ai du réalisé un portfolio de présentation. J'ai utilisé du HTML / CSS / Javascript avec une utilisation du framework TailwindCSS.</p>

						<div class="mt-5 w-full md:flex items-center hidden">
							
							<span class="px-3 py-2 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">HTML</span>

							<span class="ml-3 px-3 py-2 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">CSS</span>

							<span class="ml-3 px-3 py-2 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">Javascript</span>

							<span class="ml-3 px-3 py-2 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">TailwindCSS</span>

						</div>

					</div>

					<div class="mt-8 mb-8 w-full flex items-center justify-center">
						
		                <svg width="146" height="24" viewBox="0 0 146 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		                  	<path d="M1 22.7391C3.2493 18.6212 9.36901 3.15474 13.1781 13.8771C13.5772 15.0005 14.5729 21.0983 15.773 21.2495C16.8445 21.3844 18.9903 7.78201 22.1436 5.98981C26.938 3.26488 28.4723 10.151 30.0999 13.0396C35.0639 21.8494 33.2842 15.9415 35.8594 9.90254C38.3383 4.0895 41.493 12.3267 42.889 14.4125C46.0529 19.1395 46.437 9.45775 49.1634 6.60421C51.8321 3.81116 54.3934 5.2678 55.9596 8.11779C59.2847 14.1687 59.9155 15.1943 62.2752 7.79515C65.2247 -1.45377 68.0072 10.2381 70.3173 13.4171C73.7248 18.1065 73.9382 1.87789 77.8068 2.98317C78.9914 3.32163 84.5475 17.5554 86.2093 13.9697C89.5418 6.77907 88.7822 9.75336 92.3498 16.1423C96.5607 23.6832 98.8714 6.9014 101.109 5.39262C103.359 3.87582 104.814 19.0214 109.258 8.66009C114.387 -3.29835 113.063 3.08672 118.261 10.2046C122.705 16.2905 123.024 -5.82656 127.697 3.19256C132.875 13.1865 134.911 9.78693 144.275 11.4333" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
		                </svg>

		                <svg class="ml-5" width="146" height="24" viewBox="0 0 146 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		                  	<path d="M1 22.7391C3.2493 18.6212 9.36901 3.15474 13.1781 13.8771C13.5772 15.0005 14.5729 21.0983 15.773 21.2495C16.8445 21.3844 18.9903 7.78201 22.1436 5.98981C26.938 3.26488 28.4723 10.151 30.0999 13.0396C35.0639 21.8494 33.2842 15.9415 35.8594 9.90254C38.3383 4.0895 41.493 12.3267 42.889 14.4125C46.0529 19.1395 46.437 9.45775 49.1634 6.60421C51.8321 3.81116 54.3934 5.2678 55.9596 8.11779C59.2847 14.1687 59.9155 15.1943 62.2752 7.79515C65.2247 -1.45377 68.0072 10.2381 70.3173 13.4171C73.7248 18.1065 73.9382 1.87789 77.8068 2.98317C78.9914 3.32163 84.5475 17.5554 86.2093 13.9697C89.5418 6.77907 88.7822 9.75336 92.3498 16.1423C96.5607 23.6832 98.8714 6.9014 101.109 5.39262C103.359 3.87582 104.814 19.0214 109.258 8.66009C114.387 -3.29835 113.063 3.08672 118.261 10.2046C122.705 16.2905 123.024 -5.82656 127.697 3.19256C132.875 13.1865 134.911 9.78693 144.275 11.4333" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
		                </svg>

		                <svg class="ml-5" width="146" height="24" viewBox="0 0 146 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		                  	<path d="M1 22.7391C3.2493 18.6212 9.36901 3.15474 13.1781 13.8771C13.5772 15.0005 14.5729 21.0983 15.773 21.2495C16.8445 21.3844 18.9903 7.78201 22.1436 5.98981C26.938 3.26488 28.4723 10.151 30.0999 13.0396C35.0639 21.8494 33.2842 15.9415 35.8594 9.90254C38.3383 4.0895 41.493 12.3267 42.889 14.4125C46.0529 19.1395 46.437 9.45775 49.1634 6.60421C51.8321 3.81116 54.3934 5.2678 55.9596 8.11779C59.2847 14.1687 59.9155 15.1943 62.2752 7.79515C65.2247 -1.45377 68.0072 10.2381 70.3173 13.4171C73.7248 18.1065 73.9382 1.87789 77.8068 2.98317C78.9914 3.32163 84.5475 17.5554 86.2093 13.9697C89.5418 6.77907 88.7822 9.75336 92.3498 16.1423C96.5607 23.6832 98.8714 6.9014 101.109 5.39262C103.359 3.87582 104.814 19.0214 109.258 8.66009C114.387 -3.29835 113.063 3.08672 118.261 10.2046C122.705 16.2905 123.024 -5.82656 127.697 3.19256C132.875 13.1865 134.911 9.78693 144.275 11.4333" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
		                </svg>

					</div>

					<div class="p-4 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">
					
						<p class="text-[18px]">PPE1 - Étude des solutions de versioning</p>

						<p class="text-[18px]">2021</p>

						<p class="text-[18px]">Projet Scolaire</p>

						<div class="mt-3 w-full md:h-[45vh] h-[20vh] bg-[url('https://hugodoueil.fr/img/ppe1.webp')] bg-cover bg-center rounded-xl border border-stone-100/25"></div>

						<p class="mt-3 text-[18px]">Pour mes études en BTS SIO SLAM, J'ai du réalisé un projet en groupe de 3 avec mes collègues. Le projet consisté en la réalisation d'une étude des différentes solutions de versioning qu'il existe sur le marché (Git, Github, Gitlab, Bitbucket, etc...).</p>

						<div class="mt-5 w-full md:flex items-center hidden">
							
							<span class="px-3 py-2 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">Git</span>

							<span class="ml-3 px-3 py-2 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">Gitlab</span>

							<span class="ml-3 px-3 py-2 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">Github</span>

							<span class="ml-3 px-3 py-2 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">Atlassian Bitbucket</span>

						</div>

					</div>

					<div class="mt-8 mb-8 w-full flex items-center justify-center">
						
		                <svg width="146" height="24" viewBox="0 0 146 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		                  	<path d="M1 22.7391C3.2493 18.6212 9.36901 3.15474 13.1781 13.8771C13.5772 15.0005 14.5729 21.0983 15.773 21.2495C16.8445 21.3844 18.9903 7.78201 22.1436 5.98981C26.938 3.26488 28.4723 10.151 30.0999 13.0396C35.0639 21.8494 33.2842 15.9415 35.8594 9.90254C38.3383 4.0895 41.493 12.3267 42.889 14.4125C46.0529 19.1395 46.437 9.45775 49.1634 6.60421C51.8321 3.81116 54.3934 5.2678 55.9596 8.11779C59.2847 14.1687 59.9155 15.1943 62.2752 7.79515C65.2247 -1.45377 68.0072 10.2381 70.3173 13.4171C73.7248 18.1065 73.9382 1.87789 77.8068 2.98317C78.9914 3.32163 84.5475 17.5554 86.2093 13.9697C89.5418 6.77907 88.7822 9.75336 92.3498 16.1423C96.5607 23.6832 98.8714 6.9014 101.109 5.39262C103.359 3.87582 104.814 19.0214 109.258 8.66009C114.387 -3.29835 113.063 3.08672 118.261 10.2046C122.705 16.2905 123.024 -5.82656 127.697 3.19256C132.875 13.1865 134.911 9.78693 144.275 11.4333" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
		                </svg>

		                <svg class="ml-5" width="146" height="24" viewBox="0 0 146 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		                  	<path d="M1 22.7391C3.2493 18.6212 9.36901 3.15474 13.1781 13.8771C13.5772 15.0005 14.5729 21.0983 15.773 21.2495C16.8445 21.3844 18.9903 7.78201 22.1436 5.98981C26.938 3.26488 28.4723 10.151 30.0999 13.0396C35.0639 21.8494 33.2842 15.9415 35.8594 9.90254C38.3383 4.0895 41.493 12.3267 42.889 14.4125C46.0529 19.1395 46.437 9.45775 49.1634 6.60421C51.8321 3.81116 54.3934 5.2678 55.9596 8.11779C59.2847 14.1687 59.9155 15.1943 62.2752 7.79515C65.2247 -1.45377 68.0072 10.2381 70.3173 13.4171C73.7248 18.1065 73.9382 1.87789 77.8068 2.98317C78.9914 3.32163 84.5475 17.5554 86.2093 13.9697C89.5418 6.77907 88.7822 9.75336 92.3498 16.1423C96.5607 23.6832 98.8714 6.9014 101.109 5.39262C103.359 3.87582 104.814 19.0214 109.258 8.66009C114.387 -3.29835 113.063 3.08672 118.261 10.2046C122.705 16.2905 123.024 -5.82656 127.697 3.19256C132.875 13.1865 134.911 9.78693 144.275 11.4333" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
		                </svg>

		                <svg class="ml-5" width="146" height="24" viewBox="0 0 146 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		                  	<path d="M1 22.7391C3.2493 18.6212 9.36901 3.15474 13.1781 13.8771C13.5772 15.0005 14.5729 21.0983 15.773 21.2495C16.8445 21.3844 18.9903 7.78201 22.1436 5.98981C26.938 3.26488 28.4723 10.151 30.0999 13.0396C35.0639 21.8494 33.2842 15.9415 35.8594 9.90254C38.3383 4.0895 41.493 12.3267 42.889 14.4125C46.0529 19.1395 46.437 9.45775 49.1634 6.60421C51.8321 3.81116 54.3934 5.2678 55.9596 8.11779C59.2847 14.1687 59.9155 15.1943 62.2752 7.79515C65.2247 -1.45377 68.0072 10.2381 70.3173 13.4171C73.7248 18.1065 73.9382 1.87789 77.8068 2.98317C78.9914 3.32163 84.5475 17.5554 86.2093 13.9697C89.5418 6.77907 88.7822 9.75336 92.3498 16.1423C96.5607 23.6832 98.8714 6.9014 101.109 5.39262C103.359 3.87582 104.814 19.0214 109.258 8.66009C114.387 -3.29835 113.063 3.08672 118.261 10.2046C122.705 16.2905 123.024 -5.82656 127.697 3.19256C132.875 13.1865 134.911 9.78693 144.275 11.4333" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
		                </svg>

					</div>

					<div class="p-4 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">
					
						<p class="text-[18px]">PPE2 - Réalisation d'un site pour la formation</p>

						<p class="text-[18px]">2021</p>

						<p class="text-[18px]">Projet Scolaire</p>

						<div class="mt-3 w-full md:h-[45vh] h-[20vh] bg-[url('https://hugodoueil.fr/img/ppe2.webp')] bg-cover bg-center rounded-xl border border-stone-100/25"></div>

						<p class="mt-3 text-[18px]">Pour mes études en BTS SIO SLAM, J'ai du réalisé un projet en groupe de 3 avec mes collègues. Le projet était de réalisé un site web pour notre formation, le BTS SIO SLAM du lycée Pardailhan de Auch (32).</p>

						<div class="mt-5 w-full md:flex items-center hidden">
							
							<span class="px-3 py-2 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">HTML</span>

							<span class="ml-3 px-3 py-2 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">CSS</span>

							<span class="ml-3 px-3 py-2 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">Javascript</span>

							<span class="ml-3 px-3 py-2 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">UIKit</span>

						</div>

					</div>

					<div class="mt-8 mb-8 w-full flex items-center justify-center">
						
		                <svg width="146" height="24" viewBox="0 0 146 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		                  	<path d="M1 22.7391C3.2493 18.6212 9.36901 3.15474 13.1781 13.8771C13.5772 15.0005 14.5729 21.0983 15.773 21.2495C16.8445 21.3844 18.9903 7.78201 22.1436 5.98981C26.938 3.26488 28.4723 10.151 30.0999 13.0396C35.0639 21.8494 33.2842 15.9415 35.8594 9.90254C38.3383 4.0895 41.493 12.3267 42.889 14.4125C46.0529 19.1395 46.437 9.45775 49.1634 6.60421C51.8321 3.81116 54.3934 5.2678 55.9596 8.11779C59.2847 14.1687 59.9155 15.1943 62.2752 7.79515C65.2247 -1.45377 68.0072 10.2381 70.3173 13.4171C73.7248 18.1065 73.9382 1.87789 77.8068 2.98317C78.9914 3.32163 84.5475 17.5554 86.2093 13.9697C89.5418 6.77907 88.7822 9.75336 92.3498 16.1423C96.5607 23.6832 98.8714 6.9014 101.109 5.39262C103.359 3.87582 104.814 19.0214 109.258 8.66009C114.387 -3.29835 113.063 3.08672 118.261 10.2046C122.705 16.2905 123.024 -5.82656 127.697 3.19256C132.875 13.1865 134.911 9.78693 144.275 11.4333" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
		                </svg>

		                <svg class="ml-5" width="146" height="24" viewBox="0 0 146 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		                  	<path d="M1 22.7391C3.2493 18.6212 9.36901 3.15474 13.1781 13.8771C13.5772 15.0005 14.5729 21.0983 15.773 21.2495C16.8445 21.3844 18.9903 7.78201 22.1436 5.98981C26.938 3.26488 28.4723 10.151 30.0999 13.0396C35.0639 21.8494 33.2842 15.9415 35.8594 9.90254C38.3383 4.0895 41.493 12.3267 42.889 14.4125C46.0529 19.1395 46.437 9.45775 49.1634 6.60421C51.8321 3.81116 54.3934 5.2678 55.9596 8.11779C59.2847 14.1687 59.9155 15.1943 62.2752 7.79515C65.2247 -1.45377 68.0072 10.2381 70.3173 13.4171C73.7248 18.1065 73.9382 1.87789 77.8068 2.98317C78.9914 3.32163 84.5475 17.5554 86.2093 13.9697C89.5418 6.77907 88.7822 9.75336 92.3498 16.1423C96.5607 23.6832 98.8714 6.9014 101.109 5.39262C103.359 3.87582 104.814 19.0214 109.258 8.66009C114.387 -3.29835 113.063 3.08672 118.261 10.2046C122.705 16.2905 123.024 -5.82656 127.697 3.19256C132.875 13.1865 134.911 9.78693 144.275 11.4333" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
		                </svg>

		                <svg class="ml-5" width="146" height="24" viewBox="0 0 146 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		                  	<path d="M1 22.7391C3.2493 18.6212 9.36901 3.15474 13.1781 13.8771C13.5772 15.0005 14.5729 21.0983 15.773 21.2495C16.8445 21.3844 18.9903 7.78201 22.1436 5.98981C26.938 3.26488 28.4723 10.151 30.0999 13.0396C35.0639 21.8494 33.2842 15.9415 35.8594 9.90254C38.3383 4.0895 41.493 12.3267 42.889 14.4125C46.0529 19.1395 46.437 9.45775 49.1634 6.60421C51.8321 3.81116 54.3934 5.2678 55.9596 8.11779C59.2847 14.1687 59.9155 15.1943 62.2752 7.79515C65.2247 -1.45377 68.0072 10.2381 70.3173 13.4171C73.7248 18.1065 73.9382 1.87789 77.8068 2.98317C78.9914 3.32163 84.5475 17.5554 86.2093 13.9697C89.5418 6.77907 88.7822 9.75336 92.3498 16.1423C96.5607 23.6832 98.8714 6.9014 101.109 5.39262C103.359 3.87582 104.814 19.0214 109.258 8.66009C114.387 -3.29835 113.063 3.08672 118.261 10.2046C122.705 16.2905 123.024 -5.82656 127.697 3.19256C132.875 13.1865 134.911 9.78693 144.275 11.4333" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
		                </svg>

					</div>

					<div class="p-4 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">
					
						<p class="text-[18px]">PPE3 - Réalisation d'un site web d'une école d'art</p>

						<p class="text-[18px]">2022</p>

						<p class="text-[18px]">Projet Scolaire</p>

						<div class="mt-3 w-full md:h-[45vh] h-[20vh] bg-[url('https://hugodoueil.fr/img/ppe3.webp')] bg-cover bg-center rounded-xl border border-stone-100/25"></div>

						<p class="mt-3 text-[18px]">Pour mes études en BTS SIO SLAM, J'ai du réalisé un projet en groupe de 3 avec mes collègues. Le projet était de réalisé un site web d'une école d'art qui devait comportait une application web d'inscription de données dans une base de données et d'un reçu d'inscription sous format PDF.</p>

						<div class="mt-5 w-full md:flex items-center hidden">
							
							<span class="px-3 py-2 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">HTML</span>

							<span class="ml-3 px-3 py-2 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">CSS</span>

							<span class="ml-3 px-3 py-2 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">Javascript</span>

							<span class="ml-3 px-3 py-2 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">PHP</span>

							<span class="ml-3 px-3 py-2 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">MySQL</span>

						</div>

					</div>

				</div>

				<div class="md:mt-8 sm:mt-6 mt-4 p-4 rounded-xl bg-white/10 backdrop-blur-xl border border-stone-100/25 animate__animated animate__fadeInLeft">
					
					<p class="text-[18px] font-bold">Études :</p>

					<div class="mt-4 p-4 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">
					
						<p class="text-[18px]">Licence Bac+3 DQL</p>

						<p class="text-[18px]">2022 - 2023</p>

						<p class="text-[18px]">Toulouse / IUT Paul Sabatier Département Informatique – France</p>

						<p class="mt-2 text-[18px]">Je suis actuellement à la recherche d'une alternance afin de réaliser une Licence Bac+3 DQL à l'IUT Paul Sabatier pôle Informatique de Toulouse.</p>

					</div>

					<div class="mt-8 mb-8 w-full flex items-center justify-center">
						
		                <svg width="146" height="24" viewBox="0 0 146 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		                  	<path d="M1 22.7391C3.2493 18.6212 9.36901 3.15474 13.1781 13.8771C13.5772 15.0005 14.5729 21.0983 15.773 21.2495C16.8445 21.3844 18.9903 7.78201 22.1436 5.98981C26.938 3.26488 28.4723 10.151 30.0999 13.0396C35.0639 21.8494 33.2842 15.9415 35.8594 9.90254C38.3383 4.0895 41.493 12.3267 42.889 14.4125C46.0529 19.1395 46.437 9.45775 49.1634 6.60421C51.8321 3.81116 54.3934 5.2678 55.9596 8.11779C59.2847 14.1687 59.9155 15.1943 62.2752 7.79515C65.2247 -1.45377 68.0072 10.2381 70.3173 13.4171C73.7248 18.1065 73.9382 1.87789 77.8068 2.98317C78.9914 3.32163 84.5475 17.5554 86.2093 13.9697C89.5418 6.77907 88.7822 9.75336 92.3498 16.1423C96.5607 23.6832 98.8714 6.9014 101.109 5.39262C103.359 3.87582 104.814 19.0214 109.258 8.66009C114.387 -3.29835 113.063 3.08672 118.261 10.2046C122.705 16.2905 123.024 -5.82656 127.697 3.19256C132.875 13.1865 134.911 9.78693 144.275 11.4333" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
		                </svg>

		                <svg class="ml-5" width="146" height="24" viewBox="0 0 146 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		                  	<path d="M1 22.7391C3.2493 18.6212 9.36901 3.15474 13.1781 13.8771C13.5772 15.0005 14.5729 21.0983 15.773 21.2495C16.8445 21.3844 18.9903 7.78201 22.1436 5.98981C26.938 3.26488 28.4723 10.151 30.0999 13.0396C35.0639 21.8494 33.2842 15.9415 35.8594 9.90254C38.3383 4.0895 41.493 12.3267 42.889 14.4125C46.0529 19.1395 46.437 9.45775 49.1634 6.60421C51.8321 3.81116 54.3934 5.2678 55.9596 8.11779C59.2847 14.1687 59.9155 15.1943 62.2752 7.79515C65.2247 -1.45377 68.0072 10.2381 70.3173 13.4171C73.7248 18.1065 73.9382 1.87789 77.8068 2.98317C78.9914 3.32163 84.5475 17.5554 86.2093 13.9697C89.5418 6.77907 88.7822 9.75336 92.3498 16.1423C96.5607 23.6832 98.8714 6.9014 101.109 5.39262C103.359 3.87582 104.814 19.0214 109.258 8.66009C114.387 -3.29835 113.063 3.08672 118.261 10.2046C122.705 16.2905 123.024 -5.82656 127.697 3.19256C132.875 13.1865 134.911 9.78693 144.275 11.4333" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
		                </svg>

		                <svg class="ml-5" width="146" height="24" viewBox="0 0 146 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		                  	<path d="M1 22.7391C3.2493 18.6212 9.36901 3.15474 13.1781 13.8771C13.5772 15.0005 14.5729 21.0983 15.773 21.2495C16.8445 21.3844 18.9903 7.78201 22.1436 5.98981C26.938 3.26488 28.4723 10.151 30.0999 13.0396C35.0639 21.8494 33.2842 15.9415 35.8594 9.90254C38.3383 4.0895 41.493 12.3267 42.889 14.4125C46.0529 19.1395 46.437 9.45775 49.1634 6.60421C51.8321 3.81116 54.3934 5.2678 55.9596 8.11779C59.2847 14.1687 59.9155 15.1943 62.2752 7.79515C65.2247 -1.45377 68.0072 10.2381 70.3173 13.4171C73.7248 18.1065 73.9382 1.87789 77.8068 2.98317C78.9914 3.32163 84.5475 17.5554 86.2093 13.9697C89.5418 6.77907 88.7822 9.75336 92.3498 16.1423C96.5607 23.6832 98.8714 6.9014 101.109 5.39262C103.359 3.87582 104.814 19.0214 109.258 8.66009C114.387 -3.29835 113.063 3.08672 118.261 10.2046C122.705 16.2905 123.024 -5.82656 127.697 3.19256C132.875 13.1865 134.911 9.78693 144.275 11.4333" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
		                </svg>

					</div>

					<div class="mt-4 p-4 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">
					
						<p class="text-[18px]">BTS SIO SLAM</p>

						<p class="text-[18px]">2020 - 2022</p>

						<p class="text-[18px]">Auch – France</p>

						<p class="mt-2 text-[18px]">BTS SIO (Services Informatiques aux Organisations) SLAM (Solutions Logicielles et Applications Métier) au Lycée Pardailhan à AUCH 32000. Certifié Atelier RGPD (CNIL) et certifié ANSSI (SecNumAcadémie).</p>

					</div>

					<div class="mt-8 mb-8 w-full flex items-center justify-center">
						
		                <svg width="146" height="24" viewBox="0 0 146 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		                  	<path d="M1 22.7391C3.2493 18.6212 9.36901 3.15474 13.1781 13.8771C13.5772 15.0005 14.5729 21.0983 15.773 21.2495C16.8445 21.3844 18.9903 7.78201 22.1436 5.98981C26.938 3.26488 28.4723 10.151 30.0999 13.0396C35.0639 21.8494 33.2842 15.9415 35.8594 9.90254C38.3383 4.0895 41.493 12.3267 42.889 14.4125C46.0529 19.1395 46.437 9.45775 49.1634 6.60421C51.8321 3.81116 54.3934 5.2678 55.9596 8.11779C59.2847 14.1687 59.9155 15.1943 62.2752 7.79515C65.2247 -1.45377 68.0072 10.2381 70.3173 13.4171C73.7248 18.1065 73.9382 1.87789 77.8068 2.98317C78.9914 3.32163 84.5475 17.5554 86.2093 13.9697C89.5418 6.77907 88.7822 9.75336 92.3498 16.1423C96.5607 23.6832 98.8714 6.9014 101.109 5.39262C103.359 3.87582 104.814 19.0214 109.258 8.66009C114.387 -3.29835 113.063 3.08672 118.261 10.2046C122.705 16.2905 123.024 -5.82656 127.697 3.19256C132.875 13.1865 134.911 9.78693 144.275 11.4333" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
		                </svg>

		                <svg class="ml-5" width="146" height="24" viewBox="0 0 146 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		                  	<path d="M1 22.7391C3.2493 18.6212 9.36901 3.15474 13.1781 13.8771C13.5772 15.0005 14.5729 21.0983 15.773 21.2495C16.8445 21.3844 18.9903 7.78201 22.1436 5.98981C26.938 3.26488 28.4723 10.151 30.0999 13.0396C35.0639 21.8494 33.2842 15.9415 35.8594 9.90254C38.3383 4.0895 41.493 12.3267 42.889 14.4125C46.0529 19.1395 46.437 9.45775 49.1634 6.60421C51.8321 3.81116 54.3934 5.2678 55.9596 8.11779C59.2847 14.1687 59.9155 15.1943 62.2752 7.79515C65.2247 -1.45377 68.0072 10.2381 70.3173 13.4171C73.7248 18.1065 73.9382 1.87789 77.8068 2.98317C78.9914 3.32163 84.5475 17.5554 86.2093 13.9697C89.5418 6.77907 88.7822 9.75336 92.3498 16.1423C96.5607 23.6832 98.8714 6.9014 101.109 5.39262C103.359 3.87582 104.814 19.0214 109.258 8.66009C114.387 -3.29835 113.063 3.08672 118.261 10.2046C122.705 16.2905 123.024 -5.82656 127.697 3.19256C132.875 13.1865 134.911 9.78693 144.275 11.4333" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
		                </svg>

		                <svg class="ml-5" width="146" height="24" viewBox="0 0 146 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		                  	<path d="M1 22.7391C3.2493 18.6212 9.36901 3.15474 13.1781 13.8771C13.5772 15.0005 14.5729 21.0983 15.773 21.2495C16.8445 21.3844 18.9903 7.78201 22.1436 5.98981C26.938 3.26488 28.4723 10.151 30.0999 13.0396C35.0639 21.8494 33.2842 15.9415 35.8594 9.90254C38.3383 4.0895 41.493 12.3267 42.889 14.4125C46.0529 19.1395 46.437 9.45775 49.1634 6.60421C51.8321 3.81116 54.3934 5.2678 55.9596 8.11779C59.2847 14.1687 59.9155 15.1943 62.2752 7.79515C65.2247 -1.45377 68.0072 10.2381 70.3173 13.4171C73.7248 18.1065 73.9382 1.87789 77.8068 2.98317C78.9914 3.32163 84.5475 17.5554 86.2093 13.9697C89.5418 6.77907 88.7822 9.75336 92.3498 16.1423C96.5607 23.6832 98.8714 6.9014 101.109 5.39262C103.359 3.87582 104.814 19.0214 109.258 8.66009C114.387 -3.29835 113.063 3.08672 118.261 10.2046C122.705 16.2905 123.024 -5.82656 127.697 3.19256C132.875 13.1865 134.911 9.78693 144.275 11.4333" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
		                </svg>

					</div>

					<div class="mt-4 p-4 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">
					
						<p class="text-[18px]">BAC TECHNOLOGIQUE STI2D EE</p>

						<p class="text-[18px]">2018 - 2020</p>

						<p class="text-[18px]">Gourdan Polignan - France</p>

						<p class="mt-2 text-[18px]">Sciences et Technologies de l’industrie et du Développement Durable option Énergie et Environnement au Lycée Paul Mathou à GOURDAN POLIGNAN 31800, Mention Assez Bien. Projet en Terminal STI2D EE : Abri à vélo électrique avec panneaux solaires intégrés et rotatif suivant la position du soleil dans le ciel.</p>

					</div>

					<div class="mt-8 mb-8 w-full flex items-center justify-center">
						
		                <svg width="146" height="24" viewBox="0 0 146 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		                  	<path d="M1 22.7391C3.2493 18.6212 9.36901 3.15474 13.1781 13.8771C13.5772 15.0005 14.5729 21.0983 15.773 21.2495C16.8445 21.3844 18.9903 7.78201 22.1436 5.98981C26.938 3.26488 28.4723 10.151 30.0999 13.0396C35.0639 21.8494 33.2842 15.9415 35.8594 9.90254C38.3383 4.0895 41.493 12.3267 42.889 14.4125C46.0529 19.1395 46.437 9.45775 49.1634 6.60421C51.8321 3.81116 54.3934 5.2678 55.9596 8.11779C59.2847 14.1687 59.9155 15.1943 62.2752 7.79515C65.2247 -1.45377 68.0072 10.2381 70.3173 13.4171C73.7248 18.1065 73.9382 1.87789 77.8068 2.98317C78.9914 3.32163 84.5475 17.5554 86.2093 13.9697C89.5418 6.77907 88.7822 9.75336 92.3498 16.1423C96.5607 23.6832 98.8714 6.9014 101.109 5.39262C103.359 3.87582 104.814 19.0214 109.258 8.66009C114.387 -3.29835 113.063 3.08672 118.261 10.2046C122.705 16.2905 123.024 -5.82656 127.697 3.19256C132.875 13.1865 134.911 9.78693 144.275 11.4333" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
		                </svg>

		                <svg class="ml-5" width="146" height="24" viewBox="0 0 146 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		                  	<path d="M1 22.7391C3.2493 18.6212 9.36901 3.15474 13.1781 13.8771C13.5772 15.0005 14.5729 21.0983 15.773 21.2495C16.8445 21.3844 18.9903 7.78201 22.1436 5.98981C26.938 3.26488 28.4723 10.151 30.0999 13.0396C35.0639 21.8494 33.2842 15.9415 35.8594 9.90254C38.3383 4.0895 41.493 12.3267 42.889 14.4125C46.0529 19.1395 46.437 9.45775 49.1634 6.60421C51.8321 3.81116 54.3934 5.2678 55.9596 8.11779C59.2847 14.1687 59.9155 15.1943 62.2752 7.79515C65.2247 -1.45377 68.0072 10.2381 70.3173 13.4171C73.7248 18.1065 73.9382 1.87789 77.8068 2.98317C78.9914 3.32163 84.5475 17.5554 86.2093 13.9697C89.5418 6.77907 88.7822 9.75336 92.3498 16.1423C96.5607 23.6832 98.8714 6.9014 101.109 5.39262C103.359 3.87582 104.814 19.0214 109.258 8.66009C114.387 -3.29835 113.063 3.08672 118.261 10.2046C122.705 16.2905 123.024 -5.82656 127.697 3.19256C132.875 13.1865 134.911 9.78693 144.275 11.4333" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
		                </svg>

		                <svg class="ml-5" width="146" height="24" viewBox="0 0 146 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		                  	<path d="M1 22.7391C3.2493 18.6212 9.36901 3.15474 13.1781 13.8771C13.5772 15.0005 14.5729 21.0983 15.773 21.2495C16.8445 21.3844 18.9903 7.78201 22.1436 5.98981C26.938 3.26488 28.4723 10.151 30.0999 13.0396C35.0639 21.8494 33.2842 15.9415 35.8594 9.90254C38.3383 4.0895 41.493 12.3267 42.889 14.4125C46.0529 19.1395 46.437 9.45775 49.1634 6.60421C51.8321 3.81116 54.3934 5.2678 55.9596 8.11779C59.2847 14.1687 59.9155 15.1943 62.2752 7.79515C65.2247 -1.45377 68.0072 10.2381 70.3173 13.4171C73.7248 18.1065 73.9382 1.87789 77.8068 2.98317C78.9914 3.32163 84.5475 17.5554 86.2093 13.9697C89.5418 6.77907 88.7822 9.75336 92.3498 16.1423C96.5607 23.6832 98.8714 6.9014 101.109 5.39262C103.359 3.87582 104.814 19.0214 109.258 8.66009C114.387 -3.29835 113.063 3.08672 118.261 10.2046C122.705 16.2905 123.024 -5.82656 127.697 3.19256C132.875 13.1865 134.911 9.78693 144.275 11.4333" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
		                </svg>

					</div>

					<div class="mt-4 p-4 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">
					
						<p class="text-[18px]">Brevet des Collèges</p>

						<p class="text-[18px]">2015</p>

						<p class="text-[18px]">Saint-Gaudens - France</p>

						<p class="mt-2 text-[18px]">Brevet des Collèges en 2015 au Collège Didier Daurat à SAINT-GAUDENS 31800.</p>

					</div>

				</div>

				<div class="md:mt-10 sm:mt-6 mt-4 p-4 rounded-xl bg-white/10 backdrop-blur-xl border border-stone-100/25 animate__animated animate__fadeInLeft">
					
					<p class="text-[18px] font-bold">Expériences professionelles :</p>

					<div class="mt-4 p-4 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">
					
						<p class="text-[18px]">STAGE BTS SIO SLAM 1 - ENTREPRISE PROSOLUCE</p>

						<p class="text-[18px]">2021</p>

						<p class="text-[18px]">Stage professionnel</p>

						<div class="mt-3 w-full md:h-[45vh] h-[20vh] bg-[url('https://hugodoueil.fr/img/stage1.webp')] bg-cover bg-center rounded-xl border border-stone-100/25"></div>

						<p class="mt-3 text-[18px]">J'ai réalisé mon premier stage professionnel dans l'entreprise PROSOLUCE SAS, à Encausse-les-Thermes, en Haute-Garonne (31). J'ai du réaliser une application web qui consistait en un annuaire téléphonique des clients de l'entreprise dans lequel les utilisateurs peuvent modifier, supprimer et ajouter des contacts ainsi que des entreprises dans lesquelles peuvent ce trouver plusieurs contacts. Cette application web est une application interne à l'entreprise.</p>

						<div class="mt-5 w-full md:flex items-center hidden">
							
							<span class="px-3 py-2 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">HTML</span>

							<span class="ml-3 px-3 py-2 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">CSS</span>

							<span class="ml-3 px-3 py-2 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">Javascript</span>

							<span class="ml-3 px-3 py-2 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">Bootstrap</span>

							<span class="ml-3 px-3 py-2 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">PHP</span>

							<span class="ml-3 px-3 py-2 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">MySQL</span>

						</div>

						<a href="https://hugodoueil.fr/bureau/ressources/pdf/rapport-stage-1.pdf" onclick="window.open(this.href); return false;"><div class="mt-6 items-center p-4 rounded-xl bg-white/10 backdrop-blur-xl border border-stone-100/25 group cursor-pointer">
							
							<p class="ml-2 text-[18px] group-hover:translate-x-2 transition-all">Ouvrir la documentation du stage</p>

						</div></a>

					</div>

					<div class="mt-8 mb-8 w-full flex items-center justify-center">
						
		                <svg width="146" height="24" viewBox="0 0 146 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		                  	<path d="M1 22.7391C3.2493 18.6212 9.36901 3.15474 13.1781 13.8771C13.5772 15.0005 14.5729 21.0983 15.773 21.2495C16.8445 21.3844 18.9903 7.78201 22.1436 5.98981C26.938 3.26488 28.4723 10.151 30.0999 13.0396C35.0639 21.8494 33.2842 15.9415 35.8594 9.90254C38.3383 4.0895 41.493 12.3267 42.889 14.4125C46.0529 19.1395 46.437 9.45775 49.1634 6.60421C51.8321 3.81116 54.3934 5.2678 55.9596 8.11779C59.2847 14.1687 59.9155 15.1943 62.2752 7.79515C65.2247 -1.45377 68.0072 10.2381 70.3173 13.4171C73.7248 18.1065 73.9382 1.87789 77.8068 2.98317C78.9914 3.32163 84.5475 17.5554 86.2093 13.9697C89.5418 6.77907 88.7822 9.75336 92.3498 16.1423C96.5607 23.6832 98.8714 6.9014 101.109 5.39262C103.359 3.87582 104.814 19.0214 109.258 8.66009C114.387 -3.29835 113.063 3.08672 118.261 10.2046C122.705 16.2905 123.024 -5.82656 127.697 3.19256C132.875 13.1865 134.911 9.78693 144.275 11.4333" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
		                </svg>

		                <svg class="ml-5" width="146" height="24" viewBox="0 0 146 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		                  	<path d="M1 22.7391C3.2493 18.6212 9.36901 3.15474 13.1781 13.8771C13.5772 15.0005 14.5729 21.0983 15.773 21.2495C16.8445 21.3844 18.9903 7.78201 22.1436 5.98981C26.938 3.26488 28.4723 10.151 30.0999 13.0396C35.0639 21.8494 33.2842 15.9415 35.8594 9.90254C38.3383 4.0895 41.493 12.3267 42.889 14.4125C46.0529 19.1395 46.437 9.45775 49.1634 6.60421C51.8321 3.81116 54.3934 5.2678 55.9596 8.11779C59.2847 14.1687 59.9155 15.1943 62.2752 7.79515C65.2247 -1.45377 68.0072 10.2381 70.3173 13.4171C73.7248 18.1065 73.9382 1.87789 77.8068 2.98317C78.9914 3.32163 84.5475 17.5554 86.2093 13.9697C89.5418 6.77907 88.7822 9.75336 92.3498 16.1423C96.5607 23.6832 98.8714 6.9014 101.109 5.39262C103.359 3.87582 104.814 19.0214 109.258 8.66009C114.387 -3.29835 113.063 3.08672 118.261 10.2046C122.705 16.2905 123.024 -5.82656 127.697 3.19256C132.875 13.1865 134.911 9.78693 144.275 11.4333" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
		                </svg>

		                <svg class="ml-5" width="146" height="24" viewBox="0 0 146 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		                  	<path d="M1 22.7391C3.2493 18.6212 9.36901 3.15474 13.1781 13.8771C13.5772 15.0005 14.5729 21.0983 15.773 21.2495C16.8445 21.3844 18.9903 7.78201 22.1436 5.98981C26.938 3.26488 28.4723 10.151 30.0999 13.0396C35.0639 21.8494 33.2842 15.9415 35.8594 9.90254C38.3383 4.0895 41.493 12.3267 42.889 14.4125C46.0529 19.1395 46.437 9.45775 49.1634 6.60421C51.8321 3.81116 54.3934 5.2678 55.9596 8.11779C59.2847 14.1687 59.9155 15.1943 62.2752 7.79515C65.2247 -1.45377 68.0072 10.2381 70.3173 13.4171C73.7248 18.1065 73.9382 1.87789 77.8068 2.98317C78.9914 3.32163 84.5475 17.5554 86.2093 13.9697C89.5418 6.77907 88.7822 9.75336 92.3498 16.1423C96.5607 23.6832 98.8714 6.9014 101.109 5.39262C103.359 3.87582 104.814 19.0214 109.258 8.66009C114.387 -3.29835 113.063 3.08672 118.261 10.2046C122.705 16.2905 123.024 -5.82656 127.697 3.19256C132.875 13.1865 134.911 9.78693 144.275 11.4333" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
		                </svg>

					</div>

					<div class="p-4 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">
					
						<p class="text-[18px]">STAGE BTS SIO SLAM 2 - CONSEIL DÉPARTEMENTAL DU GERS</p>

						<p class="text-[18px]">2022</p>

						<p class="text-[18px]">Stage professionnel</p>

						<div class="mt-3 w-full md:h-[45vh] h-[20vh] bg-[url('https://hugodoueil.fr/img/stage2.webp')] bg-cover bg-center rounded-xl border border-stone-100/25"></div>

						<p class="mt-3 text-[18px]">J'ai réalisé mon deuxième stage au Conseil Départemental du Gers, à Auch dans le Gers (32). Participation à deux projets internes au Conseil. Le premier était un formulaire de création d'évènements dans GLPI, grâce auquel un utilisateur pouvait créer une demande pour des affiches ou des livraisons en rapport avec un évènement futur. Le deuxième projet était une newsletter créée avec Symfony et SendInBlue. Il était question d'une newsletter interne au pôle DOSIN (lieu où j'ai réalisé mon stage) du Conseil.</p>

						<div class="mt-5 w-full md:flex items-center hidden">
							
							<span class="px-3 py-2 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">GLPI</span>

							<span class="ml-3 px-3 py-2 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">Symfony</span>

							<span class="ml-3 px-3 py-2 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">PHP</span>

							<span class="ml-3 px-3 py-2 rounded-xl bg-white/[2%] backdrop-blur-xl border border-stone-100/25">API</span>

						</div>

						<a href="https://hugodoueil.fr/bureau/ressources/pdf/rapport-stage-2.pdf" onclick="window.open(this.href); return false;"><div class="mt-6 items-center p-4 rounded-xl bg-white/10 backdrop-blur-xl border border-stone-100/25 group cursor-pointer">
							
							<p class="ml-2 text-[18px] group-hover:translate-x-2 transition-all">Ouvrir la documentation du stage</p>

						</div></a>

					</div>

				</div>

				<div class="md:mt-8 sm:mt-6 mt-4 p-4 rounded-xl bg-white/10 backdrop-blur-xl border border-stone-100/25 animate__animated animate__fadeInLeft">

					<div class="w-full px-4 py-2 rounded-xl bg-white/10 backdrop-blur-xl border border-stone-100/25 md:flex sm:block md:items-center md:justify-between">
						
						<p class="text-white text-[15px]">Hugo Doueil | Dev Web / Fullstack</p>

						<p class="md:mt-0 mt-2 text-white text-[15px]">2022, France</p>

					</div>

					<div class="w-full mt-[2vh]">
						
						<p class="text-[18px] text-stone-100 font-bold">Contact :</p>

						<a href="mailto:hugodoueil@gmail.com" onclick="window.open(this.href); return false;" class="group" accesskey="m"><p class="mt-1 text-[16px] text-stone-100 group-hover:translate-x-2 transition-all">- hugodoueil@gmail.com</p></a>

						<a href="https://github.com/Ormidales" onclick="window.open(this.href); return false;" class="group" accesskey="g"><p class="mt-1 text-[16px] text-stone-100 group-hover:translate-x-2 transition-all">- Github</p></a>

						<a href="https://www.linkedin.com/in/hugodoueil/" onclick="window.open(this.href); return false;" class="group" accesskey="l"><p class="mt-1 text-[16px] text-stone-100 group-hover:translate-x-2 transition-all">- Linkedin</p></a>

						<a href="https://dribbble.com/Ormidales" onclick="window.open(this.href); return false;" class="group" accesskey="l"><p class="mt-1 text-[16px] text-stone-100 group-hover:translate-x-2 transition-all">- Dribbble</p></a>

					</div>

				</div>

			</section>

			<section class="lg:w-[25%] h-[100vh] lg:block hidden h-[100vh] bg-stone-900 bg-cover bg-center pt-[8vh] pb-[8vh] pl-14 pr-14 fixed right-0 top-0 animate__animated animate__fadeInUp overflow-y-auto">
				
				<p class="text-[18px] text-stone-100 font-bold">A propos :</p>

				<p class="mt-1 text-[16px] text-stone-100">Je m’appelle Hugo Doueil, je suis un étudiant en Licence Bac+3 DQL à l'IUT Paul Sabatier Département Informatique de Toulouse, France. Je suis passionné par l’informatique et le développement Web et j’aimerai en faire mon métier.</p>

				<p class="mt-8 text-[18px] text-stone-100 font-bold">Compétences :</p>

				<p class="mt-1 text-[16px] text-stone-100">- Dev Frontend</p>

				<p class="mt-1 text-[16px] text-stone-100">- Dev Backend</p>

				<p class="mt-1 text-[16px] text-stone-100">- UI / UX</p>

				<p class="mt-1 text-[16px] text-stone-100">- HTML / CSS / Javascript</p>

				<p class="mt-1 text-[16px] text-stone-100">- MySQL / PHP</p>

				<p class="mt-1 text-[16px] text-stone-100">- Frameworks (Tailwind, etc...)</p>

				<p class="mt-8 text-[18px] text-stone-100 font-bold">Contact :</p>

				<a href="mailto:hugodoueil@gmail.com" onclick="window.open(this.href); return false;" class="group" accesskey="m"><p class="mt-1 text-[16px] text-stone-100 group-hover:translate-x-2 transition-all">- hugodoueil@gmail.com</p></a>

				<a href="https://github.com/Ormidales" onclick="window.open(this.href); return false;" class="group" accesskey="g"><p class="mt-1 text-[16px] text-stone-100 group-hover:translate-x-2 transition-all">- Github</p></a>

				<a href="https://www.linkedin.com/in/hugodoueil/" onclick="window.open(this.href); return false;" class="group" accesskey="l"><p class="mt-1 text-[16px] text-stone-100 group-hover:translate-x-2 transition-all">- Linkedin</p></a>

				<a href="https://dribbble.com/Ormidales" onclick="window.open(this.href); return false;" class="group" accesskey="l"><p class="mt-1 text-[16px] text-stone-100 group-hover:translate-x-2 transition-all">- Dribbble</p></a>

				<div class="px-4 py-2 rounded-xl bg-white/10 backdrop-blur-xl border border-stone-100/25 mt-10 text-white">

					<svg xmlns="http://www.w3.org/2000/svg" class="h-[3vh] w-[3vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					  	<path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
					</svg>
					
					<p class="text-[15px] mt-2">Je suis actuellement à la recherche d'une alternance afin de réaliser une Licence Bac+3 DQL à l'IUT Paul Sabatier Département Informatique de Toulouse.</p>

				</div>

			</section>

			<section id="menu-mobile" class="fixed top-0 right-0 z-[10] w-[85%] h-[100vh] bg-stone-900 bg-cover bg-center py-[8vh] pl-14 pr-14 right-0 top-0 animate__animated animate__fadeInRight overflow-y-scroll">

				<span class="text-[18px] text-stone-100 border border-stone-100 rounded-lg px-3 py-2 hover:bg-stone-100/10 transition-all cursor-pointer" onclick="fermer_menumobile()">Fermer le menu</span>
				
				<p class="mt-9 text-[18px] text-stone-100 font-bold">A propos :</p>

				<p class="mt-1 text-[16px] text-stone-100">Je m’appelle Hugo Doueil, je suis un étudiant en Licence Bac+3 DQL à l'IUT Paul Sabatier Département Informatique de Toulouse, France. Je suis passionné par l’informatique et le développement Web et j’aimerai en faire mon métier.</p>

				<p class="mt-8 text-[18px] text-stone-100 font-bold">Compétences :</p>

				<p class="mt-1 text-[16px] text-stone-100">- Dev Frontend</p>

				<p class="mt-1 text-[16px] text-stone-100">- Dev Backend</p>

				<p class="mt-1 text-[16px] text-stone-100">- UI / UX</p>

				<p class="mt-1 text-[16px] text-stone-100">- HTML / CSS / Javascript</p>

				<p class="mt-1 text-[16px] text-stone-100">- MySQL / PHP</p>

				<p class="mt-1 text-[16px] text-stone-100">- Frameworks (Tailwind, etc...)</p>

				<p class="mt-8 text-[18px] text-stone-100 font-bold">Contact :</p>

				<a href="mailto:hugodoueil@gmail.com" onclick="window.open(this.href); return false;" class="group"><p class="mt-1 text-[16px] text-stone-100 group-hover:translate-x-2 transition-all">- hugodoueil@gmail.com</p></a>

				<a href="https://github.com/Ormidales" onclick="window.open(this.href); return false;" class="group"><p class="mt-1 text-[16px] text-stone-100 group-hover:translate-x-2 transition-all">- Github</p></a>

				<a href="https://www.linkedin.com/in/hugodoueil/" onclick="window.open(this.href); return false;" class="group"><p class="mt-1 text-[16px] text-stone-100 group-hover:translate-x-2 transition-all">- Linkedin</p></a>

				<a href="https://dribbble.com/Ormidales" onclick="window.open(this.href); return false;" class="group" accesskey="l"><p class="mt-1 text-[16px] text-stone-100 group-hover:translate-x-2 transition-all">- Dribbble</p></a>

				<div class="px-4 py-2 rounded-xl bg-white/10 backdrop-blur-xl border border-stone-100/25 mt-10 text-white">

					<svg xmlns="http://www.w3.org/2000/svg" class="h-[3vh] w-[3vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					  	<path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
					</svg>
					
					<p class="text-[15px] mt-2">Je suis actuellement à la recherche d'une alternance afin de réaliser une Licence Bac+3 DQL à l'IUT Paul Sabatier Département Informatique de Toulouse.</p>

				</div>

			</section>

        </div>

		

		<script>
	         const loader = document.querySelector(".loader");
	         window.onload = function(){
	           setTimeout(function(){
	             loader.style.opacity = "0";
	             setTimeout(function(){
	               loader.style.display = "none";
	             }, 500);
	           },1500);
	         }
      	</script>

      	<script type="text/javascript" src="ressources/javascript/index.js"></script>

      	<!-- SCRIPT DRAG GSAP -->
        <script>

            var dragAppMenu = Draggable.create("#app-menu" , {
                bounds: document.getElementById("bureau-xl"),
                inertia: {top: {min: 0, max: 1000, end: [0,200,400,600]}},
                dragClickables: true,
                trigger: "#app-menu-header",
                zIndexBoost: false,
                edgeResistance:0.5,
            });

            var dragAppWelcome = Draggable.create("#app-welcome" , {
                bounds: document.getElementById("bureau-xl"),
                inertia: {top: {min: 0, max: 1000, end: [0,200,400,600]}},
                dragClickables: true,
                trigger: "#app-welcome-header",
                zIndexBoost: false,
                edgeResistance:0.5,
            });

            var dragAppProjets = Draggable.create("#app-projets" , {
                bounds: document.getElementById("bureau-xl"),
                inertia: {top: {min: 0, max: 1000, end: [0,200,400,600]}},
                dragClickables: true,
                trigger: "#app-projets-header",
                zIndexBoost: false,
                edgeResistance:0.5,
            });

            var dragAppStages = Draggable.create("#app-stages" , {
                bounds: document.getElementById("bureau-xl"),
                inertia: {top: {min: 0, max: 1000, end: [0,200,400,600]}},
                dragClickables: true,
                trigger: "#app-stages-header",
                zIndexBoost: false,
                edgeResistance:0.5,
            });

            var dragAppMagasin = Draggable.create("#app-magasin" , {
                bounds: document.getElementById("bureau-xl"),
                inertia: {top: {min: 0, max: 1000, end: [0,200,400,600]}},
                dragClickables: true,
                trigger: "#app-magasin-header",
                zIndexBoost: false,
                edgeResistance:0.5,
            });

            var dragAppBackground = Draggable.create("#app-background" , {
                bounds: document.getElementById("bureau-xl"),
                inertia: {top: {min: 0, max: 1000, end: [0,200,400,600]}},
                dragClickables: true,
                trigger: "#app-background-header",
                zIndexBoost: false,
                edgeResistance:0.5,
            });

            var dragAppCV = Draggable.create("#app-cv" , {
                bounds: document.getElementById("bureau-xl"),
                inertia: {top: {min: 0, max: 1000, end: [0,200,400,600]}},
                dragClickables: true,
                trigger: "#app-cv-header",
                zIndexBoost: false,
                edgeResistance:0.5,
            });

            var dragAppCertifications = Draggable.create("#app-certifications" , {
                bounds: document.getElementById("bureau-xl"),
                inertia: {top: {min: 0, max: 1000, end: [0,200,400,600]}},
                dragClickables: true,
                trigger: "#app-certifications-header",
                zIndexBoost: false,
                edgeResistance:0.5,
            });

            var dragAppVeilleTechno = Draggable.create("#app-veilletechno" , {
                bounds: document.getElementById("bureau-xl"),
                inertia: {top: {min: 0, max: 1000, end: [0,200,400,600]}},
                dragClickables: true,
                trigger: "#app-veilletechno-header",
                zIndexBoost: false,
                edgeResistance:0.5,
            });

            var dragAppImages = Draggable.create("#app-images" , {
                bounds: document.getElementById("bureau-xl"),
                inertia: {top: {min: 0, max: 1000, end: [0,200,400,600]}},
                dragClickables: true,
                trigger: "#app-images-header",
                zIndexBoost: false,
                edgeResistance:0.5,
            });

            var dragAppMentionsLegales = Draggable.create("#app-mentionslegales" , {
                bounds: document.getElementById("bureau-xl"),
                inertia: {top: {min: 0, max: 1000, end: [0,200,400,600]}},
                dragClickables: true,
                trigger: "#app-mentionslegales-header",
                zIndexBoost: false,
                edgeResistance:0.5,
            });

            var dragAppParametreConfidentialite = Draggable.create("#app-parametreconfidentialite" , {
                bounds: document.getElementById("bureau-xl"),
                inertia: {top: {min: 0, max: 1000, end: [0,200,400,600]}},
                dragClickables: true,
                trigger: "#app-parametreconfidentialite-header",
                zIndexBoost: false,
                edgeResistance:0.5,
            });

            var dragAppPlanSite = Draggable.create("#app-plandusite" , {
                bounds: document.getElementById("bureau-xl"),
                inertia: {top: {min: 0, max: 1000, end: [0,200,400,600]}},
                dragClickables: true,
                trigger: "#app-plandusite-header",
                zIndexBoost: false,
                edgeResistance:0.5,
            });

        </script>

        <script type="text/javascript">
			
			function ouvrir_menumobile(){
				document.getElementById("menu-mobile").style.visibility = "visible";
				document.getElementById("menu-mobile").style.display = "block";
				document.getElementById("menu-mobile").style.opacity = "1";
			}

			function fermer_menumobile(){
				document.getElementById("menu-mobile").style.visibility = "hidden";
				document.getElementById("menu-mobile").style.display = "none";
				document.getElementById("menu-mobile").style.opacity = "0";
			}

		</script>

		<script type="text/javascript">
			
			// JavaScript code
			function search_reminder() {
			    let input = document.getElementById('searchbar').value
			    input=input.toLowerCase();
			    let x = document.getElementsByClassName('animals');
			      
			    for (i = 0; i < x.length; i++) { 
			        if (!x[i].innerHTML.toLowerCase().includes(input)) {
			            x[i].style.display="none";
			        }
			        else {
			            x[i].style.display="grid";                 
			        }
			    }
			}

		</script>

	</body>
</html>



<!-- 

PORTFOLIO HUGO DOUEIL 2022
DEVELOPPER PAR HUGO DOUEIL
LYCEE PARDAILHAN AUCH 2022

TailwindCss
HTML
CSS
Javascript

-->
