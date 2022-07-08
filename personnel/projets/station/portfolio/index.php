<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Primary Meta Tags -->
		<title>Hugo Doueil | Portfolio 2022 | Auch, Lycée Pardailhan (32)</title>
		<meta name="title" content="Hugo Doueil | Portfolio 2022 | Auch, Lycée Pardailhan (32)">
		<meta name="description" content="Je m’appelle Hugo Doueil, je suis un étudiant de BTS SIO SLAM dans ma deuxième année au lycée Pardailhan à Auch, France. Je suis passionné par l’informatique et le développement Web et j’aimerai en faire mon métier.">

		<!-- Open Graph / Facebook -->
		<meta property="og:type" content="website">
		<meta property="og:url" content="https://hugodoueil-hugoos.netlify.app">
		<meta property="og:title" content="Hugo Doueil | Portfolio 2022 | Auch, Lycée Pardailhan (32)">
		<meta property="og:description" content="Je m’appelle Hugo Doueil, je suis un étudiant de BTS SIO SLAM dans ma deuxième année au lycée Pardailhan à Auch, France. Je suis passionné par l’informatique et le développement Web et j’aimerai en faire mon métier.">
		<meta property="og:image" content="ressources/images/portfolio.png">

		<!-- Twitter -->
		<meta property="twitter:card" content="summary_large_image">
		<meta property="twitter:url" content="https://hugodoueil-hugoos.netlify.app">
		<meta property="twitter:title" content="Hugo Doueil | Portfolio 2022 | Auch, Lycée Pardailhan (32)">
		<meta property="twitter:description" content="Je m’appelle Hugo Doueil, je suis un étudiant de BTS SIO SLAM dans ma deuxième année au lycée Pardailhan à Auch, France. Je suis passionné par l’informatique et le développement Web et j’aimerai en faire mon métier.">
		<meta property="twitter:image" content="ressources/images/portfolio.png">

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
			.loader .ring{
			  height: 45px;
			  width: 45px;
			  border: 5px solid #ddd;
			  border-radius: 50%;
			  position: relative;
			  display: flex;
			  align-items: center;
			  justify-content: center;
			}
			.loader .ring:after{
			  position: absolute;
			  content: "";
			  height: 100%;
			  width: 100%;
			  border-radius: 50%;
			  border: 5px solid #ff3d00;
			  border-top-color: transparent;
			  animation: rotate 1.5s linear infinite;
			}
			@keyframes rotate {
			  100%{
			    transform: rotate(360deg);
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
	<body style="font-family: Poppins, sans-serif;" class="overflow-hidden bg-[#151515]">

		<div class="w-full h-[100vh] md:overflow-hidden overflow-auto md:flex md:items-center block">
			
			<div class="md:w-[5%] md:h-[100vh] w-full md:p-0 p-5 bg-[#151515] border-r border-white flex md:flex-col items-center md:justify-start justify-evenly z-[99999] shadow shadow-stone-900/75">
				
				<a href="../index.php"><div class="w-[5vh] h-[5vh] border border-[#454545] rounded-md md:mt-5 mt-0 bg-white/5 flex items-center justify-center text-white hover:scale-95 hover:bg-white/10 transition-all shadow shadow-white/10">

					<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
					  	<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
					  	<path d="M11.354 4.646a.5.5 0 0 0-.708 0l-6 6a.5.5 0 0 0 .708.708l6-6a.5.5 0 0 0 0-.708z"/>
					</svg>

				</div></a>

				<a href="index.php"><div class="w-[5vh] h-[5vh] border border-[#454545] rounded-md md:mt-5 mt-0 bg-white/5 flex items-center justify-center text-white hover:scale-95 hover:bg-white/10 transition-all shadow shadow-white/10">
					
					<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
					  	<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
					  	<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
					</svg>

				</div></a>

				<a href="#"><div class="w-[5vh] h-[5vh] border border-[#454545] rounded-md md:mt-5 mt-0 bg-white/5 flex items-center justify-center text-white hover:scale-95 hover:bg-white/10 transition-all shadow shadow-white/10">
					
					<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
					  	<path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
					  	<path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
					</svg>

				</div></a>

				<a href="#"><div class="w-[5vh] h-[5vh] border border-[#454545] rounded-md md:mt-5 mt-0 bg-white/5 flex items-center justify-center text-white hover:scale-95 hover:bg-white/10 transition-all shadow shadow-white/10">
					
					<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
					  	<path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/>
					  	<path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/>
					  	<path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/>
					</svg>

				</div></a>

				<a href="#"><div class="w-[5vh] h-[5vh] border border-[#454545] rounded-md md:mt-5 mt-0 bg-white/5 flex items-center justify-center text-white hover:scale-95 hover:bg-white/10 transition-all shadow shadow-white/10">
					
					<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
					  	<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
					</svg>

				</div></a>

				<a href="../ressources/"><div class="w-[5vh] h-[5vh] border border-[#454545] rounded-md md:mt-5 mt-0 bg-white/5 flex items-center justify-center text-white hover:scale-95 hover:bg-white/10 transition-all shadow shadow-white/10">
					
					<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
					  	<path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z"/>
					</svg>

				</div></a>

				<a href="../colors"><div class="w-[5vh] h-[5vh] border border-[#454545] rounded-md md:mt-5 mt-0 bg-white/5 flex items-center justify-center text-white hover:scale-95 hover:bg-white/10 transition-all shadow shadow-white/10">
					
					<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					  	<path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
					</svg>
					
				</div></a>

			</div>

			<div class="md:w-[95%] w-full h-[100vh] bg-[#151515] overflow-hidden">
				
				<!-- BUREAU -->
				<section id="bureau-xl" class="sm:flex hidden w-full h-[100vh] bg-[url('ressources/images/background-7.jpg')] bg-cover bg-center items-center justify-center flex-wrap overflow-hidden">

					<div class="loader z-[99995] bg-gray-300">
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

										Finition du chargement du bureau :
										
										<div class="mt-4 flex items-center justify-center">
								
											<div class="ring"></div>

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



					<!-- FENETRE DE BIENVENUE -->
					<div id="fenetreBienvenue" class="w-[95%] absolute top-0 right-0 z-[9999] h-[100vh] bg-white/10 backdrop-blur-xl flex items-center justify-center">
						
						<div class="w-[45vh] p-4 rounded-2xl bg-stone-900 border border-stone-700 shadow shadow-stone-900/75 animate__animated animate__fadeInRight">
						
							<div class="w-full flex items-center">
								
								<div class="w-1/3">
									
									

								</div>

								<div class="w-1/3 flex items-center justify-center text-center">
									
									<p class="text-[12px] text-white">Hugo Doueil | Portfolio</p>

								</div>

								<div class="w-1/3 flex items-center justify-end">
									
									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 hover:text-gray-300 transition-all cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									  	<path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
									</svg>

								</div>

							</div>

							<img src="ressources/images/portfolio.png" class="w-full rounded-lg mt-5 mb-5">

							<div class="w-full flex items-center justify-center">
								
								<p class="text-[20px] text-white">Bienvenue sur mon portfolio !</p>

							</div>

							<div class="w-full flex items-center justify-center px-4">
								
								<p class="text-[14px] text-gray-400 text-center">Pour rentrer sur mon portfolio, veuillez cliquer sur le bouton "Entrez dans le bureau". Si vous voulez visiter la documentation technique du portfolio, veuillez cliquer sur l'icone d'aide en haut à droite.</p>

							</div>

							<div class="w-full bg-blue-500 hover:bg-blue-400 transition-all flex items-center justify-center py-2 mt-8 rounded-md cursor-pointer" onclick="fermer_fenetreBienvenue()">
								
								<p class="text-[14px] text-white text-center">Entrez dans le bureau</p>

							</div>

						</div>

					</div>



					<!-- CLIQUE DROIT -->
					<div id="contextMenu" class="context-menu z-[9999999]">
		                <div class="w-[25vh] rounded-lg bg-stone-900 border border-stone-700 overflow-hidden shadow shadow-stone-900/75">
						
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

							<div class="w-full border-t border-stone-700 mt-1 mb-1"></div>

							<div class="px-3 py-2 flex items-center text-white hover:bg-white/10 transition-all cursor-pointer">

								<svg xmlns="http://www.w3.org/2000/svg" class="h-[16px] w-[16px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
								</svg>

								<p class="text-[12px] ml-2">Ouvrir la documentation</p>

							</div>

							<a href="pages/deconnexion.html"><div class="px-3 py-2 flex items-center text-white hover:bg-white/10 transition-all cursor-pointer">

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


					<!-- APPLICATION MENU OPTIONS -->
					<div id="app-options" class="w-[95%] h-[100vh] absolute top-0 right-0 bg-white/10 backdrop-blur-xl z-[9999] flex items-center justify-center">
						
						<div class="w-[40vh] p-2 ml-5 bg-stone-900 rounded-lg border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]">

							<div class="w-full pb-2 px-2 flex items-center justify-between border-b border-stone-700">
								
								<p class="text-[12px] text-white">Options du PC</p>

								<div class="flex items-center">
									
									<div class="ml-2 w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="fermer_app_options()">
								
										<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
										  	<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
										</svg>

									</div>

								</div>

							</div>
							
							<div class="w-full mt-3 p-2">
								
								<a href="pages/deconnexion.html"><div class="w-full p-3 bg-white/5 hover:bg-white/10 border border-stone-700 transition-all rounded-lg flex items-center justify-center cursor-pointer">
									
									<p class="text-[12px] text-white">Éteindre la session</p>

								</div></a>

								<a href="#"><div class="mt-3 w-full p-3 bg-white/5 hover:bg-white/10 border border-stone-700 transition-all rounded-lg flex items-center justify-center cursor-pointer">
									
									<p class="text-[12px] text-white">Ouvrir la documentation</p>

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
					
					

					<!-- MENU -->
					<div class="absolute bottom-0 right-0 w-[95%] pb-6 flex items-center justify-center z-[999] animate__animated animate__fadeInUp">
						
						<div class="px-3 py-2 rounded-lg bg-stone-900 border border-stone-700 flex items-center shadow shadow-stone-900/75">

							<div data-tooltip="Ouvrir l'application Menu" class="w-[4vh] h-[4vh] flex items-center justify-center bg-white/5 rounded-lg border border-white/10 hover:scale-[110%] hover:bg-white/10 hover:border-white/25 transition-all cursor-pointer" onclick="ouvrir_app_menu()" title="Ouvrir l'application Menu" name="Ouvrir l'application Menu">

								<svg xmlns="http://www.w3.org/2000/svg" class="w-[2.5vh] h-[2.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
								</svg>

							</div>

							<div data-tooltip="Ouvrir l'application Mon Profil" class="ml-3 w-[4vh] h-[4vh] flex items-center justify-center bg-white/5 rounded-lg border border-white/10 hover:scale-[110%] hover:bg-white/10 hover:border-white/25 transition-all cursor-pointer" onclick="ouvrir_app_welcome()">

								<svg xmlns="http://www.w3.org/2000/svg" class="w-[2.5vh] h-[2.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
								</svg>

							</div>

							<div data-tooltip="Ouvrir l'application Mes Projets" class="ml-3 w-[4vh] h-[4vh] flex items-center justify-center bg-white/5 rounded-lg border border-white/10 hover:scale-[110%] hover:bg-white/10 hover:border-white/25 transition-all cursor-pointer" onclick="ouvrir_app_projets()">

								<svg xmlns="http://www.w3.org/2000/svg" class="w-[2.5vh] h-[2.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
								</svg>

							</div>

							<div data-tooltip="Ouvrir l'application Mes Stages" class="ml-3 w-[4vh] h-[4vh] flex items-center justify-center bg-white/5 rounded-lg border border-white/10 hover:scale-[110%] hover:bg-white/10 hover:border-white/25 transition-all cursor-pointer" onclick="ouvrir_app_stages()">

								<svg xmlns="http://www.w3.org/2000/svg" class="w-[2.5vh] h-[2.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
								</svg>

							</div>

							<div data-tooltip="Ouvrir l'app Magasins d'apps" class="ml-3 w-[4vh] h-[4vh] flex items-center justify-center bg-white/5 rounded-lg border border-white/10 hover:scale-[110%] hover:bg-white/10 hover:border-white/25 transition-all cursor-pointer" onclick="ouvrir_app_magasin()">

								<svg xmlns="http://www.w3.org/2000/svg" class="w-[2.5vh] h-[2.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								 	<path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
								</svg>

							</div>

						</div>

					</div>



					<!-- APPLICATION MENU -->
					<div id="app-menu" class="absolute top-6 left-24 w-[40vh] p-2 ml-5 bg-stone-900 rounded-lg border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]">

						<div id="app-menu-header" class="w-full pb-2 px-2 flex items-center justify-between border-b border-stone-700">
							
							<p class="text-[12px] text-white">Application menu</p>

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
					<div id="app-projets" class="absolute top-6 left-28 w-[75vh] p-2 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]">
						
						<div id="app-projets-header" class="w-full pb-2 px-2 flex items-center justify-between border-b border-stone-700">
							
							<p class="text-[12px] text-white">Application des projets</p>

							<div class="flex items-center">
								
								<div class="ml-2 w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="fermer_app_projets()">
								
									<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									  	<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
									</svg>

								</div>

							</div>

						</div>

						<div class="w-full h-[45vh] mt-5 overflow-y-scroll bg-stone-800 rounded-lg p-3">

							<!--<div class="w-full overflow-x-scroll flex items-center pb-4">
								
								<div class="w-[35vh] p-3 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden flex-none">
						
									<div class="w-full flex justify-between">
										
										<div class="w-[8vh] h-[8vh] bg-blue-500 rounded-lg"></div>

										<div class="w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all">
											
											<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
											  	<path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
											</svg>

										</div>

									</div>

									<div class="w-full mt-5">
										
										<p class="text-[14px] text-white">Portfolio Hugo Doueil 2022 | Auch Lycée Pardailhan</p>

										<p class="mt-1 text-[12px] text-gray-300 truncate">Pour mes études en BTS SIO SLAM, j'ai du réalisé un portfolio de présentation. J'ai utilisé du HTML / CSS / Javascript avec une utilisation du framework TailwindCSS.</p>

									</div>

									<div class="w-full mt-5 flex items-center">
										
										<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">HTML</span>

										<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">CSS</span>

										<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Javascript</span>

										<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">TailwindCSS</span>

									</div>

									<div class="w-full mt-5 md:flex md:items-center gap-x-3 block">
										
										<span class="md:w-1/2 md:mb-0 w-full mb-2 px-3 py-2 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md">Voir le projet</span>

										<span class="md:w-1/2 w-full px-3 py-2 bg-gray-500 hover:bg-gray-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md">Documentation</span>

									</div>

								</div>

								<div class="ml-3 w-[35vh] p-3 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden flex-none">
						
									<div class="w-full flex justify-between">
										
										<div class="w-[8vh] h-[8vh] bg-blue-500 rounded-lg"></div>

										<div class="w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all">
											
											<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
											  	<path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
											</svg>

										</div>

									</div>

									<div class="w-full mt-5">
										
										<p class="text-[14px] text-white">Sr.Product Designer</p>

										<p class="mt-1 text-[12px] text-gray-300">The user experience designer position exists to create compelling and elegant digital user experiences through design...</p>

									</div>

									<div class="w-full mt-5 flex items-center">
										
										<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">Full Time</span>

										<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Min. 1 Year</span>

										<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Mid Level</span>

									</div>

									<div class="w-full mt-5 md:flex md:items-center gap-x-3 block">
										
										<span class="md:w-1/2 md:mb-0 w-full mb-2 px-3 py-2 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md">Apply Now</span>

										<span class="md:w-1/2 w-full px-3 py-2 bg-gray-500 hover:bg-gray-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md">Messages</span>

									</div>

								</div>

								<div class="ml-3 w-[35vh] p-3 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden flex-none">
						
									<div class="w-full flex justify-between">
										
										<div class="w-[8vh] h-[8vh] bg-blue-500 rounded-lg"></div>

										<div class="w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all">
											
											<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
											  	<path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
											</svg>

										</div>

									</div>

									<div class="w-full mt-5">
										
										<p class="text-[14px] text-white">Sr.Product Designer</p>

										<p class="mt-1 text-[12px] text-gray-300">The user experience designer position exists to create compelling and elegant digital user experiences through design...</p>

									</div>

									<div class="w-full mt-5 flex items-center">
										
										<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">Full Time</span>

										<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Min. 1 Year</span>

										<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Mid Level</span>

									</div>

									<div class="w-full mt-5 md:flex md:items-center gap-x-3 block">
										
										<span class="md:w-1/2 md:mb-0 w-full mb-2 px-3 py-2 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md">Apply Now</span>

										<span class="md:w-1/2 w-full px-3 py-2 bg-gray-500 hover:bg-gray-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md">Messages</span>

									</div>

								</div>

								<div class="ml-3 w-[35vh] p-3 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden flex-none">
						
									<div class="w-full flex justify-between">
										
										<div class="w-[8vh] h-[8vh] bg-blue-500 rounded-lg"></div>

										<div class="w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all">
											
											<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
											  	<path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
											</svg>

										</div>

									</div>

									<div class="w-full mt-5">
										
										<p class="text-[14px] text-white">Sr.Product Designer</p>

										<p class="mt-1 text-[12px] text-gray-300">The user experience designer position exists to create compelling and elegant digital user experiences through design...</p>

									</div>

									<div class="w-full mt-5 flex items-center">
										
										<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">Full Time</span>

										<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Min. 1 Year</span>

										<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Mid Level</span>

									</div>

									<div class="w-full mt-5 md:flex md:items-center gap-x-3 block">
										
										<span class="md:w-1/2 md:mb-0 w-full mb-2 px-3 py-2 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md">Apply Now</span>

										<span class="md:w-1/2 w-full px-3 py-2 bg-gray-500 hover:bg-gray-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md">Messages</span>

									</div>

								</div>

							</div>-->

							<div class="w-full p-5 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
								
								<p class="text-[12px] text-white">Portfolio Hugo Doueil 2022 | Auch Lycée Pardailhan</p>

								<p class="text-[10px] text-white">2022</p>

								<p class="text-[10px] text-white">Projet Scolaire / Personnel</p>

								<div class="mt-5 w-full h-[20vh] rounded-lg bg-[url('ressources/images/portfolio.png')] bg-cover bg-center"></div>

								<p class="mt-5 text-[10px] text-gray-300">Pour mes études en BTS SIO SLAM, j'ai du réalisé un portfolio de présentation. J'ai utilisé du HTML / CSS / Javascript avec une utilisation du framework TailwindCSS.</p>

								<div class="w-full mt-5 flex items-center">
							
									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">HTML</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">CSS</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Javascript</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">TailwindCSS</span>

								</div>

								<div class="w-full mt-5 md:flex md:items-center gap-x-3 block">
							
									<span class="md:w-1/2 md:mb-0 w-full mb-2 px-3 py-2 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md">Voir le projet</span>

									<span class="md:w-1/2 w-full px-3 py-2 bg-gray-500 hover:bg-gray-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md">Voir la documentation du projet</span>

								</div>

							</div>

							<div class="w-full mt-8 border-t border-stone-700"></div>

							<div class="mt-8 w-full p-5 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
								
								<p class="text-[12px] text-white">PPE1 - Versionado | Étude des solutions de versioning</p>

								<p class="text-[10px] text-white">2020 - 2021</p>

								<p class="text-[10px] text-white">Projet Scolaire</p>

								<div class="mt-5 w-full h-[20vh] rounded-lg bg-[url('ressources/images/ppe1.png')] bg-cover bg-center"></div>

								<p class="mt-5 text-[10px] text-gray-300">Pour mes études en BTS SIO SLAM, J'ai du réalisé un projet en groupe de 3 avec mes collègues. Le projet consisté en la réalisation d'une étude des différentes solutions de versioning qu'il existe sur le marché (Git, Github, Gitlab, Bitbucket, etc...).</p>

								<div class="w-full mt-5 flex items-center">
							
									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">Git</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Github</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Gitlab</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Atlassian Bitbucket</span>

								</div>

								<div class="w-full mt-5 md:flex md:items-center gap-x-3 block">
							
									<span class="md:w-1/2 md:mb-0 w-full mb-2 px-3 py-2 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md">Voir le projet</span>

									<span class="md:w-1/2 w-full px-3 py-2 bg-gray-500 hover:bg-gray-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md">Voir la documentation du projet</span>

								</div>

							</div>

							<div class="w-full mt-8 border-t border-stone-700"></div>

							<div class="mt-8 w-full p-5 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
								
								<p class="text-[12px] text-white">PPE2 - BTS SIO SLAM | Réalisation d'un site pour la formation BTS SIO SLAM à Auch (32)</p>

								<p class="text-[10px] text-white">2021</p>

								<p class="text-[10px] text-white">Projet Scolaire</p>

								<div class="mt-5 w-full h-[20vh] rounded-lg bg-[url('ressources/images/ppe2.png')] bg-cover bg-center"></div>

								<p class="mt-5 text-[10px] text-gray-300">Pour mes études en BTS SIO SLAM, J'ai du réalisé un projet en groupe de 3 avec mes collègues. Le projet était de réalisé un site web pour notre formation, le BTS SIO SLAM du lycée Pardailhan de Auch (32).</p>

								<div class="w-full mt-5 flex items-center">
							
									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">HTML</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">CSS</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Javascript</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">UIkit</span>

								</div>

								<div class="w-full mt-5 md:flex md:items-center gap-x-3 block">
							
									<span class="md:w-1/2 md:mb-0 w-full mb-2 px-3 py-2 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md">Voir le projet</span>

									<span class="md:w-1/2 w-full px-3 py-2 bg-gray-500 hover:bg-gray-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md">Voir la documentation du projet</span>

								</div>

							</div>

							<div class="w-full mt-8 border-t border-stone-700"></div>

							<div class="mt-8 w-full p-5 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
								
								<p class="text-[12px] text-white">PPE3 - FaSiLa | Réalisation d'un site web d'une école d'art doté d'une application web d'inscription</p>

								<p class="text-[10px] text-white">2021 - 2022</p>

								<p class="text-[10px] text-white">Projet Scolaire</p>

								<div class="mt-5 w-full h-[20vh] rounded-lg bg-[url('ressources/images/ppe3.png')] bg-cover bg-center"></div>

								<p class="mt-5 text-[10px] text-gray-300">Pour mes études en BTS SIO SLAM, J'ai du réalisé un projet en groupe de 3 avec mes collègues. Le projet était de réalisé un site web d'une école d'art qui devait comportait une application web d'inscription de données dans une base de données et d'un reçu d'inscription sous format PDF.</p>

								<div class="w-full mt-5 flex items-center">
							
									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">HTML</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">CSS</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Javascript</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">PHP</span>

									<span class="px-2 py-1 text-[10px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">MySQL</span>

								</div>

								<div class="w-full mt-5 md:flex md:items-center gap-x-3 block">
							
									<span class="md:w-1/2 md:mb-0 w-full mb-2 px-3 py-2 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md">Voir le projet</span>

									<span class="md:w-1/2 w-full px-3 py-2 bg-gray-500 hover:bg-gray-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md">Voir la documentation du projet</span>

								</div>

							</div>

						</div>

					</div>



					



					<!-- APPLICATION CHANGEMENT BACKGROUND -->
					<div id="app-background" class="absolute top-6 left-24 w-[35vh] p-2 ml-5 bg-stone-900 rounded-lg border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]">

						<div id="app-background-header" class="w-full pb-2 px-2 flex items-center justify-between border-b border-stone-700">
							
							<p class="text-[12px] text-white">Couleur du fond</p>

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
								
									<div class="w-[2vh] h-[2vh] rounded-full bg-blue-500 border border-blue-500 hover:border-white transition-all cursor-pointer" onclick="background_blue()"></div>

									<div class="w-[2vh] h-[2vh] rounded-full bg-green-500 ml-2 border border-green-500 hover:border-white transition-all cursor-pointer" onclick="background_green()"></div>

									<div class="w-[2vh] h-[2vh] rounded-full bg-red-500 ml-2 border border-red-500 hover:border-white transition-all cursor-pointer" onclick="background_red()"></div>

									<div class="w-[2vh] h-[2vh] rounded-full bg-yellow-500 ml-2 border border-yellow-500 hover:border-white transition-all cursor-pointer" onclick="background_yellow()"></div>

									<div class="w-[2vh] h-[2vh] rounded-full bg-violet-500 ml-2 border border-violet-500 hover:border-white transition-all cursor-pointer" onclick="background_violet()"></div>

									<div class="w-[2vh] h-[2vh] rounded-full ml-2 border bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 hover:border-white transition-all cursor-pointer" onclick="background_gradient1()"></div>

									<div class="w-[2vh] h-[2vh] rounded-full ml-2 border bg-gradient-to-r from-green-200 via-green-300 to-blue-500 hover:border-white transition-all cursor-pointer" onclick="background_gradient2()"></div>

									<div class="w-[2vh] h-[2vh] rounded-full ml-2 border bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 hover:border-white transition-all cursor-pointer" onclick="background_gradient3()"></div>

								</div>

								<div class="w-full border-t border-stone-700 mt-1 mb-1"></div>

								<div class="w-full p-3">
								
									<div class="w-full rounded-lg h-[10vh] bg-[url('ressources/images/background-1.webp')] bg-cover bg-center border border-stone-700 hover:border-white transition-all flex items-center justify-center cursor-pointer" onclick="background_image1()">
										
										<span class="px-3 py-2 bg-white/10 rounded-lg backdrop-blur-xl border border-white/25 text-white text-[10px]">Image n°1</span>

									</div>

									<div class="mt-3 w-full rounded-lg h-[10vh] bg-[url('ressources/images/background-2.webp')] bg-cover bg-center border border-stone-700 hover:border-white transition-all flex items-center justify-center cursor-pointer" onclick="background_image2()">
										
										<span class="px-3 py-2 bg-white/10 rounded-lg backdrop-blur-xl border border-white/25 text-white text-[10px]">Image n°2</span>

									</div>

									<div class="mt-3 w-full rounded-lg h-[10vh] bg-[url('ressources/images/background-3.webp')] bg-cover bg-center border border-stone-700 hover:border-white transition-all flex items-center justify-center cursor-pointer" onclick="background_image3()">
										
										<span class="px-3 py-2 bg-white/10 rounded-lg backdrop-blur-xl border border-white/25 text-white text-[10px]">Image n°3</span>

									</div>

									<div class="mt-3 w-full rounded-lg h-[10vh] bg-[url('ressources/images/background-4.webp')] bg-cover bg-center border border-stone-700 hover:border-white transition-all flex items-center justify-center cursor-pointer" onclick="background_image4()">
										
										<span class="px-3 py-2 bg-white/10 rounded-lg backdrop-blur-xl border border-white/25 text-white text-[10px]">Image n°4</span>

									</div>

									<div class="mt-3 w-full rounded-lg h-[10vh] bg-[url('ressources/images/background-5.webp')] bg-cover bg-center border border-stone-700 hover:border-white transition-all flex items-center justify-center cursor-pointer" onclick="background_image5()">
										
										<span class="px-3 py-2 bg-white/10 rounded-lg backdrop-blur-xl border border-white/25 text-white text-[10px]">Image n°5</span>

									</div>

									<div class="mt-3 w-full rounded-lg h-[10vh] bg-[url('ressources/images/background-6.webp')] bg-cover bg-center border border-stone-700 hover:border-white transition-all flex items-center justify-center cursor-pointer" onclick="background_image6()">
										
										<span class="px-3 py-2 bg-white/10 rounded-lg backdrop-blur-xl border border-white/25 text-white text-[10px]">Image n°6</span>

									</div>

									<div class="mt-3 w-full rounded-lg h-[10vh] bg-[url('ressources/images/background-7.jpg')] bg-cover bg-center border border-stone-700 hover:border-white transition-all flex items-center justify-center cursor-pointer" onclick="background_image7()">
										
										<span class="px-3 py-2 bg-white/10 rounded-lg backdrop-blur-xl border border-white/25 text-white text-[10px]">Image n°7</span>

									</div>

								</div>

							</div>

						</div>

					</div>



					<!-- APPLICATION PERSONNELLE -->
					<div id="app-welcome" class="absolute top-6 left-28 w-[40vh] p-3 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]">
						
						<div id="app-welcome-header" class="w-full flex justify-between">
							
							<div class="w-[8vh] h-[8vh] bg-[url('ressources/images/hugo.jpg')] bg-cover bg-center rounded-lg"></div>

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

							<p class="mt-1 text-[12px] text-gray-300">Je m’appelle Hugo Doueil, je suis un étudiant de BTS SIO SLAM dans ma deuxième année au lycée Pardailhan à Auch, France. Je suis passionné par l’informatique et le développement Web et j’aimerai en faire mon métier.</p>

						</div>

						<div class="w-full mt-5 flex items-center">
							
							<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">Développeur Web</span>

							<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Étudiant à Auch (32)</span>

						</div>

						<div class="w-full h-[25vh] mt-5 overflow-y-scroll bg-stone-800 rounded-lg p-3">

							<div class="w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
								
								<p class="text-[12px] text-white">BTS SIO SLAM <span class="ml-3 px-2 py-1 rounded-md bg-blue-500/10 text-blue-500 text-[10px]">Actuel</span></p>

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
							
							<span class="md:w-1/2 md:mb-0 w-full mb-2 px-3 py-2 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer">Me contacter</span>

							<span class="md:w-1/2 w-full px-3 py-2 bg-gray-500 hover:bg-gray-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer">Mes projets</span>

						</div>

					</div>




					<!-- APPLICATION STAGES -->
					<div id="app-stages" class="absolute top-6 left-28 w-[75vh] p-2 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]">
						
						<div id="app-stages-header" class="w-full pb-2 px-2 flex items-center justify-between border-b border-stone-700">
							
							<p class="text-[12px] text-white">Application des stages</p>

							<div class="flex items-center">
								
								<div class="ml-2 w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="fermer_app_stages()">
								
									<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									  	<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
									</svg>

								</div>

							</div>

						</div>

						<div class="w-full h-[45vh] mt-5 overflow-y-scroll bg-stone-800 rounded-lg p-3">

							<div class="w-full p-5 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
								
								<p class="text-[12px] text-white">STAGE BTS SIO SLAM 1 - ENTREPRISE PROSOLUCE</p>

								<p class="text-[10px] text-white">2021</p>

								<p class="text-[10px] text-white">Stage professionnel</p>

								<div class="mt-5 w-full h-[20vh] rounded-lg bg-[url('ressources/images/stage1.png')] bg-cover bg-center"></div>

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

								<div class="mt-5 w-full h-[20vh] rounded-lg bg-[url('ressources/images/stage2.png')] bg-cover bg-center"></div>

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
					<div id="app-magasin" class="absolute top-6 left-28 w-[75vh] p-2 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]">
						
						<div id="app-magasin-header" class="w-full pb-2 px-2 flex items-center justify-between border-b border-stone-700">
							
							<p class="text-[12px] text-white">Magasin d'applications</p>

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
									
									<span class="md:w-1/2 md:mb-0 w-full mb-2 px-3 py-2 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer" onclick="ouvrir_app_cv()">Lancer l'application</span>

									<span class="md:w-1/2 w-full px-3 py-2 bg-gray-500 hover:bg-gray-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md">Documentation de l'application</span>

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
									
									<span class="md:w-1/2 md:mb-0 w-full mb-2 px-3 py-2 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer" onclick="ouvrir_app_certifications()">Lancer l'application</span>

									<span class="md:w-1/2 w-full px-3 py-2 bg-gray-500 hover:bg-gray-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md">Documentation de l'application</span>

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
									
									<span class="md:w-1/2 md:mb-0 w-full mb-2 px-3 py-2 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer" onclick="ouvrir_app_mentionslegales()">Lancer l'application</span>

									<span class="md:w-1/2 w-full px-3 py-2 bg-gray-500 hover:bg-gray-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md">Documentation de l'application</span>

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
									
									<span class="md:w-1/2 md:mb-0 w-full mb-2 px-3 py-2 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer" onclick="ouvrir_app_parametreconfidentialite()">Lancer l'application</span>

									<span class="md:w-1/2 w-full px-3 py-2 bg-gray-500 hover:bg-gray-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md">Documentation de l'application</span>

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
									
									<span class="md:w-1/2 md:mb-0 w-full mb-2 px-3 py-2 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer" onclick="ouvrir_app_plandusite()">Lancer l'application</span>

									<span class="md:w-1/2 w-full px-3 py-2 bg-gray-500 hover:bg-gray-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md">Documentation de l'application</span>

								</div>

							</div>

							<div class="w-full mt-8 border-t border-stone-700"></div>

							<div class="mt-8 w-full p-5 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden">
						
								<div class="w-full flex">
									
									<div class="w-[8vh] h-[8vh] bg-blue-500 rounded-lg flex items-center justify-center">
										
										<svg xmlns="http://www.w3.org/2000/svg" class="h-[5vh] w-[5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
										  	<path stroke-linecap="round" stroke-linejoin="round" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
										</svg>

									</div>

								</div>

								<div class="w-full mt-5">
									
									<p class="text-[14px] text-white">Images à coller sur le bureau</p>

									<p class="mt-1 text-[12px] text-gray-300">Lancer cette application pour coller des images sur le bureau.</p>

								</div>

								<div class="w-full mt-5 flex items-center">
									
									<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all">Taille : 254Gb</span>

									<span class="px-2 py-1 text-[12px] text-white rounded-md bg-white/5 hover:bg-white/10 transition-all ml-2">Ajoutée en 2022</span>

								</div>

								<div class="w-full mt-5 md:flex md:items-center gap-x-3 block">
									
									<span class="md:w-1/2 md:mb-0 w-full mb-2 px-3 py-2 bg-blue-500 hover:bg-blue-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md cursor-pointer" onclick="ouvrir_app_images()">Lancer l'application</span>

									<span class="md:w-1/2 w-full px-3 py-2 bg-gray-500 hover:bg-gray-400 transition-all text-[10px] text-white flex items-center justify-center rounded-md">Documentation de l'application</span>

								</div>

							</div>

						</div>

					</div>



					<!-- APPLICATION CV -->
					<div id="app-cv" class="absolute top-6 left-28 w-[75vh] p-2 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]">
						
						<div id="app-cv-header" class="w-full pb-2 px-2 flex items-center justify-between border-b border-stone-700">
							
							<p class="text-[12px] text-white">Mon CV</p>

							<div class="flex items-center">
								
								<div class="ml-2 w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="fermer_app_cv()">
								
									<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									  	<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
									</svg>

								</div>

							</div>

						</div>

						<div class="w-full h-[55vh] mt-5 bg-stone-800 rounded-lg p-3">

							<embed src="ressources/pdf/cv-hugo.pdf" width="100%" height="100%" class="rounded-lg" type="application/pdf">

						</div>

					</div>



					<!-- APPLICATION CERTIFICATIONS -->
					<div id="app-certifications" class="absolute top-6 left-28 w-[75vh] p-2 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]">
						
						<div id="app-certifications-header" class="w-full pb-2 px-2 flex items-center justify-between border-b border-stone-700">
							
							<p class="text-[12px] text-white">Mes Certifications</p>

							<div class="flex items-center">
								
								<div class="ml-2 w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="fermer_app_certifications()">
								
									<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									  	<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
									</svg>

								</div>

							</div>

						</div>

						<div class="w-full h-[55vh] mt-5 bg-stone-800 rounded-lg p-3 overflow-y-scroll">

							<embed src="ressources/pdf/cnilmooc.pdf" width="100%" height="100%" class="rounded-lg" type="application/pdf">

							<embed src="ressources/pdf/anssimooc.pdf" width="100%" height="100%" class="rounded-lg mt-3" type="application/pdf">

						</div>

					</div>



					<!-- APPLICATION IMAGES -->
					<div id="app-images" class="absolute top-6 left-28 w-[20vh] p-2 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]">
						
						<div id="app-images-header" class="w-full pb-2 px-2 flex items-center justify-between border-b border-stone-700">
							
							<p class="text-[12px] text-white">Images à coller</p>

							<div class="flex items-center">
								
								<div class="w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="fermer_app_images()">
								
									<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									  	<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
									</svg>

								</div>

							</div>

						</div>

						<div class="w-full h-[55vh] mt-5 bg-stone-800 rounded-lg p-3 overflow-y-scroll">

							<div class="w-full py-2 flex items-center justify-center bg-stone-900 border border-stone-700 rounded-lg hover:bg-stone-800 hover:border-stone-600 transition-all text-[12px] text-white" onclick="imagesColler_supprimer()">Tout supprimer</div>

							<div class="mt-3 w-full h-[10vh] bg-stone-900 border border-stone-700 rounded-lg flex items-center justify-center group hover:bg-stone-800 hover:border-stone-600 transition-all" onclick="imagesColler_chapeauNoel()">
								
								<img src="ressources/images/png/chapeau-noel.png" class="h-[6vh] group-hover:scale-[110%] transition-all">

							</div>

							<div class="mt-3 w-full h-[10vh] bg-stone-900 border border-stone-700 rounded-lg flex items-center justify-center group hover:bg-stone-800 hover:border-stone-600 transition-all" onclick="imagesColler_teteGabe()">
								
								<img src="ressources/images/png/tete-gabe.png" class="h-[8vh] group-hover:scale-[110%] transition-all">

							</div>

							<div class="mt-3 w-full h-[10vh] bg-stone-900 border border-stone-700 rounded-lg flex items-center justify-center group hover:bg-stone-800 hover:border-stone-600 transition-all" onclick="imagesColler_lunetteMlg()">
								
								<img src="ressources/images/png/lunette-mlg.png" class="h-[8vh] group-hover:scale-[110%] transition-all">

							</div>

							<div class="mt-3 w-full h-[10vh] bg-stone-900 border border-stone-700 rounded-lg flex items-center justify-center group hover:bg-stone-800 hover:border-stone-600 transition-all" onclick="imagesColler_corpsMacron()">
								
								<img src="ressources/images/png/corps-macron.png" class="h-[8vh] group-hover:scale-[110%] transition-all">

							</div>

							<div class="mt-3 w-full h-[10vh] bg-stone-900 border border-stone-700 rounded-lg flex items-center justify-center group hover:bg-stone-800 hover:border-stone-600 transition-all" onclick="imagesColler_corpsZemmour()">
								
								<img src="ressources/images/png/corps-zemmour.png" class="h-[8vh] group-hover:scale-[110%] transition-all">

							</div>

						</div>

					</div>

					<!-- IMAGES A COLLER -->
					<img id="imagesColler_chapeauNoel" src="ressources/images/png/chapeau-noel.png" class="absolute top-28 right-28 w-[10vh] z-[10]">

					<img id="imagesColler_teteGabe" src="ressources/images/png/tete-gabe.png" class="absolute top-28 right-28 w-[12vh] z-[8]">

					<img id="imagesColler_lunetteMlg" src="ressources/images/png/lunette-mlg.png" class="absolute top-28 right-28 w-[12vh] z-[12]">

					<img id="imagesColler_corpsMacron" src="ressources/images/png/corps-macron.png" class="absolute top-28 right-28 w-[30vh] z-[7]">

					<img id="imagesColler_corpsZemmour" src="ressources/images/png/corps-zemmour.png" class="absolute top-28 right-28 w-[30vh] z-[6]">



					<!-- APPLICATION MENTIONS LEGALES -->
					<div id="app-mentionslegales" class="absolute top-6 left-28 w-[75vh] p-2 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]">
						
						<div id="app-mentionslegales-header" class="w-full pb-2 px-2 flex items-center justify-between border-b border-stone-700">
							
							<p class="text-[12px] text-white">Application des Mentions Légales</p>

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

								<p class="mt-2 text-[10px] text-gray-300">Lycée Pardailhan, 32000 AUCH - 57 Chemin de Baron.</p>

								<p class="mt-1 text-[10px] text-gray-300">Responsable éditoriale : Hugo DOUEIL.</p>

								<p class="mt-1 text-[10px] text-gray-300">32000 AUCH - 57 Chemin de Baron.</p>

								<p class="mt-1 text-[10px] text-gray-300">Téléphone : xx.xx.xx.xx.xx</p>

								<p class="mt-1 text-[10px] text-gray-300">Email : Hugo DOUEIL (hugo.doueil1@lycee-pardailhan.fr) (hugodoueil@gmail.com).</p>

								<p class="mt-1 text-[10px] text-gray-300">Site Web : hugodoueil-hugoos.netlify.app</p>

							</div>

							<div class="w-full mt-3 border-t border-stone-700"></div>

							<div class="mt-3 w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
								
								<p class="text-[12px] text-white">Hébergement du Site :</p>

								<p class="mt-2 text-[10px] text-gray-300">Hébergeur : Netlify.</p>

								<p class="mt-1 text-[10px] text-gray-300">San Francisco, Californie, États-Unis.</p>

								<p class="mt-1 text-[10px] text-gray-300">Site Web : hugodoueil-hugoos.netlify.app</p>

							</div>

							<div class="w-full mt-3 border-t border-stone-700"></div>

							<div class="mt-3 w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
								
								<p class="text-[12px] text-white">Développement du Site :</p>

								<p class="mt-2 text-[10px] text-gray-300">Lycée Pardailhan, Hugo DOUEIL.</p>

								<p class="mt-1 text-[10px] text-gray-300">32000 AUCH - 57 Chemin de Baron.</p>

								<p class="mt-1 text-[10px] text-gray-300">Site Web : hugodoueil-hugoos.netlify.app</p>

							</div>

							<div class="w-full mt-3 border-t border-stone-700"></div>

							<div class="mt-3 w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
								
								<p class="text-[12px] text-white">Conditions d'utilisation :</p>

								<p class="mt-2 text-[10px] text-gray-300">Ce site (hugodoueil-hugoos.netlify.app) est proposé en différents langages web (HTML, HTML5, Javascript, CSS, etc…) pour un meilleur confort d’utilisation et un graphisme plus agréable.</p>

								<p class="mt-1 text-[10px] text-gray-300">Nous vous recommandons de recourir à des navigateurs modernes comme Internet explorer, Safari, Firefox, Google Chrome, etc…</p>

							</div>

							<div class="w-full mt-3 border-t border-stone-700"></div>

							<div class="mt-3 w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
								
								<p class="text-[12px] text-white">Cookies :</p>

								<p class="mt-2 text-[10px] text-gray-300">Le site ppe2-btssio-auch.netlify.app ne comporte aucune demandes de cookies pour des besoins de statistiques et d'affichage. Un cookie est une information déposée sur votre disque dur par le serveur du site que vous visitez. Il contient plusieurs données qui sont stockées sur votre ordinateur dans un simple fichier texte auquel un serveur accède pour lire et enregistrer des informations . Toutes les parties de ce site sont fonctionnelles sans l'utilisation de cookies.</p>

							</div>

							<div class="w-full mt-3 border-t border-stone-700"></div>

							<div class="mt-3 w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
								
								<p class="text-[12px] text-white">Données Personnelles :</p>

								<p class="mt-2 text-[10px] text-gray-300">De manière générale, vous n’êtes pas tenu de nous communiquer vos données personnelles lorsque vous visitez notre site Internet (ppe2-btssio-auch.netlify.app). Cependant, ce principe comporte certaines exceptions. En effet, pour certains services proposés par notre site, vous pouvez être amenés à nous communiquer certaines données telles que : votre nom, votre prénom, votre adresse électronique, et votre numéro de téléphone. Tel est le cas lorsque vous remplissez le formulaire qui vous est proposé en ligne, dans la rubrique « contact ».</p>

							</div>

							<div class="w-full mt-3 border-t border-stone-700"></div>

							<div class="mt-3 w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
								
								<p class="text-[12px] text-white">Outils utilisés :</p>

								<p class="mt-2 text-[10px] text-gray-300">- TailwindCSS / <a href="https://tailwindcss.com" class="underline cursor-pointer">https://tailwindcss.com</a></p>

								<p class="mt-2 text-[10px] text-gray-300">- HeroIcons / <a href="https://heroicons.com" class="underline cursor-pointer">https://heroicons.com</a></p>

								<p class="mt-2 text-[10px] text-gray-300">- Toutes les images utilisées sur ce site proviennent de mes photos personnelles / <a href="#" class="underline cursor-pointer">hugodoueil-ressource.netlify.app</a></p>

							</div>

						</div>

					</div>



					<!-- APPLICATION PARAMETRE DE CONFIDENTIALITE -->
					<div id="app-parametreconfidentialite" class="absolute top-6 left-28 w-[75vh] p-2 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]">
						
						<div id="app-parametreconfidentialite-header" class="w-full pb-2 px-2 flex items-center justify-between border-b border-stone-700">
							
							<p class="text-[12px] text-white">Application des Parametres de Confidentialité</p>

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

								<p class="mt-2 text-[10px] text-gray-300">Lycée Pardailhan, 32000 AUCH - 57 Chemin de Baron.</p>

								<p class="mt-1 text-[10px] text-gray-300">Responsable éditoriale : Hugo DOUEIL.</p>

								<p class="mt-1 text-[10px] text-gray-300">32000 AUCH - 57 Chemin de Baron.</p>

								<p class="mt-1 text-[10px] text-gray-300">Téléphone : xx.xx.xx.xx.xx</p>

								<p class="mt-1 text-[10px] text-gray-300">Email : Hugo DOUEIL (hugo.doueil1@lycee-pardailhan.fr) (hugodoueil@gmail.com).</p>

								<p class="mt-1 text-[10px] text-gray-300">Site Web : hugodoueil-hugoos.netlify.app</p>

							</div>

							<div class="w-full mt-3 border-t border-stone-700"></div>

							<div class="mt-3 w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
								
								<p class="text-[12px] text-white">Hébergement du Site :</p>

								<p class="mt-2 text-[10px] text-gray-300">Hébergeur : Netlify.</p>

								<p class="mt-1 text-[10px] text-gray-300">San Francisco, Californie, États-Unis.</p>

								<p class="mt-1 text-[10px] text-gray-300">Site Web : hugodoueil-hugoos.netlify.app</p>

							</div>

							<div class="w-full mt-3 border-t border-stone-700"></div>

							<div class="mt-3 w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
								
								<p class="text-[12px] text-white">Développement du Site :</p>

								<p class="mt-2 text-[10px] text-gray-300">Lycée Pardailhan, Hugo DOUEIL.</p>

								<p class="mt-1 text-[10px] text-gray-300">32000 AUCH - 57 Chemin de Baron.</p>

								<p class="mt-1 text-[10px] text-gray-300">Site Web : hugodoueil-hugoos.netlify.app</p>

							</div>

							<div class="w-full mt-3 border-t border-stone-700"></div>

							<div class="mt-3 w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
								
								<p class="text-[12px] text-white">Conditions d'utilisation :</p>

								<p class="mt-2 text-[10px] text-gray-300">Ce site (hugodoueil-hugoos.netlify.app) est proposé en différents langages web (HTML, HTML5, Javascript, CSS, etc…) pour un meilleur confort d’utilisation et un graphisme plus agréable.</p>

								<p class="mt-1 text-[10px] text-gray-300">Nous vous recommandons de recourir à des navigateurs modernes comme Internet explorer, Safari, Firefox, Google Chrome, etc…</p>

							</div>

							<div class="w-full mt-3 border-t border-stone-700"></div>

							<div class="mt-3 w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
								
								<p class="text-[12px] text-white">Cookies :</p>

								<p class="mt-2 text-[10px] text-gray-300">Le site ppe2-btssio-auch.netlify.app ne comporte aucune demandes de cookies pour des besoins de statistiques et d'affichage. Un cookie est une information déposée sur votre disque dur par le serveur du site que vous visitez. Il contient plusieurs données qui sont stockées sur votre ordinateur dans un simple fichier texte auquel un serveur accède pour lire et enregistrer des informations . Toutes les parties de ce site sont fonctionnelles sans l'utilisation de cookies.</p>

							</div>

							<div class="w-full mt-3 border-t border-stone-700"></div>

							<div class="mt-3 w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
								
								<p class="text-[12px] text-white">Données Personnelles :</p>

								<p class="mt-2 text-[10px] text-gray-300">De manière générale, vous n’êtes pas tenu de nous communiquer vos données personnelles lorsque vous visitez notre site Internet (ppe2-btssio-auch.netlify.app). Cependant, ce principe comporte certaines exceptions. En effet, pour certains services proposés par notre site, vous pouvez être amenés à nous communiquer certaines données telles que : votre nom, votre prénom, votre adresse électronique, et votre numéro de téléphone. Tel est le cas lorsque vous remplissez le formulaire qui vous est proposé en ligne, dans la rubrique « contact ».</p>

							</div>

							<div class="w-full mt-3 border-t border-stone-700"></div>

							<div class="mt-3 w-full p-2 rounded-lg bg-stone-900 border border-stone-700 hover:bg-stone-900/75 transition-all">
								
								<p class="text-[12px] text-white">Outils utilisés :</p>

								<p class="mt-2 text-[10px] text-gray-300">- TailwindCSS / <a href="https://tailwindcss.com" class="underline cursor-pointer">https://tailwindcss.com</a></p>

								<p class="mt-2 text-[10px] text-gray-300">- HeroIcons / <a href="https://heroicons.com" class="underline cursor-pointer">https://heroicons.com</a></p>

								<p class="mt-2 text-[10px] text-gray-300">- Toutes les images utilisées sur ce site proviennent de mes photos personnelles / <a href="#" class="underline cursor-pointer">hugodoueil-ressource.netlify.app</a></p>

							</div>

						</div>

					</div>



					<!-- APPLICATION PLAN DU SITE -->
					<div id="app-plandusite" class="absolute top-6 left-28 w-[75vh] p-2 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]">
						
						<div id="app-plandusite-header" class="w-full pb-2 px-2 flex items-center justify-between border-b border-stone-700">
							
							<p class="text-[12px] text-white">Application Plan du site</p>

							<div class="flex items-center">
								
								<div class="ml-2 w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="fermer_app_plandusite()">
								
									<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									  	<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
									</svg>

								</div>

							</div>

						</div>

						<div class="w-full h-[45vh] mt-5 overflow-y-scroll bg-stone-800 rounded-lg p-3">

							

						</div>

					</div>

				</section>

			</div>

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








            var dragAppImageColler1 = Draggable.create("#imagesColler_chapeauNoel" , {
                bounds: document.getElementById("bureau-xl"),
                inertia: {top: {min: 0, max: 1000, end: [0,200,400,600]}},
                dragClickables: true,
                trigger: "#imagesColler_chapeauNoel",
                zIndexBoost: false,
                edgeResistance:0.5,
            });

            var dragAppImageColler2 = Draggable.create("#imagesColler_teteGabe" , {
                bounds: document.getElementById("bureau-xl"),
                inertia: {top: {min: 0, max: 1000, end: [0,200,400,600]}},
                dragClickables: true,
                trigger: "#imagesColler_teteGabe",
                zIndexBoost: false,
                edgeResistance:0.5,
            });

            var dragAppImageColler3 = Draggable.create("#imagesColler_lunetteMlg" , {
                bounds: document.getElementById("bureau-xl"),
                inertia: {top: {min: 0, max: 1000, end: [0,200,400,600]}},
                dragClickables: true,
                trigger: "#imagesColler_lunetteMlg",
                zIndexBoost: false,
                edgeResistance:0.5,
            });

            var dragAppImageColler4 = Draggable.create("#imagesColler_corpsMacron" , {
                bounds: document.getElementById("bureau-xl"),
                inertia: {top: {min: 0, max: 1000, end: [0,200,400,600]}},
                dragClickables: true,
                trigger: "#imagesColler_corpsMacron",
                zIndexBoost: false,
                edgeResistance:0.5,
            });

            var dragAppImageColler5 = Draggable.create("#imagesColler_corpsZemmour" , {
                bounds: document.getElementById("bureau-xl"),
                inertia: {top: {min: 0, max: 1000, end: [0,200,400,600]}},
                dragClickables: true,
                trigger: "#imagesColler_corpsZemmour",
                zIndexBoost: false,
                edgeResistance:0.5,
            });

        </script>

	</body>
</html>