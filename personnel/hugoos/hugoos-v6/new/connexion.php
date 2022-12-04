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
			.shapes-7 {
			  width: 40px;
			  height: 40px;
			  color:rgb(87 83 78);
			  position: relative;
			  background:
			    conic-gradient(from 134deg at top   ,currentColor 92deg,#0000 0) top,
			    conic-gradient(from -46deg at bottom,currentColor 92deg,#0000 0) bottom;
			  background-size:100% 50%;
			  background-repeat: no-repeat;
			}
			.shapes-7:before {
			  content:'';
			  position: absolute;
			  inset:0;
			  background:
			    conic-gradient(from  -135deg at top 0    left   22px ,#0000 ,currentColor 1deg 90deg,#0000 0),
			    conic-gradient(from  -45deg  at right 0  top    22px ,#0000 ,currentColor 1deg 90deg,#0000 0),
			    conic-gradient(from   45deg  at bottom 0 right  22px ,#0000 ,currentColor 1deg 90deg,#0000 0),
			    conic-gradient(from  135deg  at left  0  bottom 20px ,#0000 ,currentColor 1deg 90deg,#0000 0);
			   animation: sh7 1.5s infinite cubic-bezier(0.3,1,0,1);
			}
			@keyframes sh7 {
			   33%  {inset:-10px;transform: rotate(0deg)}
			   66%  {inset:-10px;transform: rotate(90deg)}
			   100% {inset:0    ;transform: rotate(90deg)}
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
					
								<div class="shapes-7"></div>

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

	    <div class="w-full h-[100vh] bg-[url('ressources/images/bg-2.webp')] bg-cover bg-center items-center justify-center overflow-hidden">
	    	
	    	<div class="absolute w-full h-[100vh] top-0 left-0 z-[9999] flex items-center justify-center">
				
				<div class="w-[40vh] p-2 ml-5 bg-stone-900 rounded-lg border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]">

					<div class="w-full pb-2 px-2 flex items-center justify-between border-b border-stone-700">
						
						<div class="flex items-center">
							
							<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
							</svg>

							<p class="text-[12px] text-white ml-2">Options du PC</p>

						</div>

					</div>
					
					<div class="w-full mt-3 p-2">

						<a href="https://www.linkedin.com/in/hugodoueil" onclick="window.open(this.href); return false;"><div class="w-full p-3 bg-white/5 hover:bg-white/10 border border-stone-700 transition-all rounded-lg flex items-center justify-center cursor-pointer">
							
							<p class="text-[12px] text-white">Aller sur ma page Linkedin</p>

						</div></a>

						<a href="https://github.com/Ormidales/" onclick="window.open(this.href); return false;"><div class="mt-3 w-full p-3 bg-white/5 hover:bg-white/10 border border-stone-700 transition-all rounded-lg flex items-center justify-center cursor-pointer">
							
							<p class="text-[12px] text-white">Aller sur ma page Github</p>

						</div></a>

						<a href="https://hugodoueil.fr/"><div class="mt-3 w-full p-3 bg-white/5 hover:bg-white/10 border border-stone-700 transition-all rounded-lg flex items-center justify-center cursor-pointer">
							
							<p class="text-[12px] text-white">Allumer la session</p>

						</div></a>

					</div>

				</div>

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
