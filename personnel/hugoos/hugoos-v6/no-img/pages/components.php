<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Hugo Doueil | Portfolio 2022 | Auch, Lycée Pardailhan (32)</title>
		<script src="https://cdn.tailwindcss.com"></script>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
		<style type="text/css">
			.loader{
			  position: fixed;
			  height: 100vh;
			  width: 100%;
			  display: flex;
			  align-items: center;
			  justify-content: center;
			  background: #252525;
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
			  border-radius: 50px;
			}
			::-webkit-scrollbar-thumb {
			  background-color: rgba(255, 255, 255, 0.30);
			  border-radius: 50px;
			}
		</style>
	</head>
	<body style="font-family: Poppins, sans-serif;">

		<div class="loader">
			<div class="block">
				
				<p class="text-lg text-white mb-5">Chargement de la page</p>

				<div class="flex items-center justify-center">
					
					<div class="ring"></div>

				</div>
			</div>
	    </div>

		<section class="w-full h-[100vh] bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 bg-cover bg-center flex items-center justify-center flex-wrap">
			
			<!--<div class="w-[45vh] p-4 rounded-2xl bg-stone-900 border border-stone-700">
				
				<div class="w-full flex items-center">
					
					<div class="w-1/3">
						
						

					</div>

					<div class="w-1/3 flex items-center justify-center text-center">
						
						<p class="text-[12px] text-white">Create a new wallet</p>

					</div>

					<div class="w-1/3 flex items-center justify-end">
						
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 hover:text-gray-300 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						  	<path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg>

					</div>

				</div>

				<div class="w-full flex items-center justify-center py-6">
					
					<img src="ressources/images/1.png" class="w-full rounded-2xl">

				</div>

				<div class="w-full flex items-center justify-center">
					
					<p class="text-[20px] text-white">Create a new wallet</p>

				</div>

				<div class="w-full flex items-center justify-center px-4">
					
					<p class="text-[14px] text-gray-400 text-center">In the next step we will show you 12 words, your recovery phrase, with wich you can restore your wallet.</p>

				</div>

				<div class="w-full bg-blue-500 border border-blue-400 hover:bg-blue-400 hover:border-blue-300 transition-all flex items-center justify-center py-2 mt-8 rounded-md">
					
					<p class="text-[14px] text-white text-center">Continuer</p>

				</div>

			</div>-->

			<!--<div class="w-[45vh] p-4 rounded-2xl bg-stone-900 border border-stone-700 ml-5">
				
				<div class="w-full flex items-center">
					
					<div class="w-1/3 flex items-center justify-start">

						<div class="w-10 h-10 rounded-full flex items-center justify-center bg-white/10">
							
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 hover:text-gray-300 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							  	<path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
							</svg>

						</div>

					</div>

					<div class="w-1/3 flex items-center justify-center text-center">
						
						<p class="text-[12px] text-white">Your recovery phase</p>

					</div>

					<div class="w-1/3 flex items-center justify-end">
						
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 hover:text-gray-300 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						  	<path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg>

					</div>

				</div>

				<div class="w-full flex items-center justify-center py-6">
					
					<img src="ressources/images/1.png" class="w-full rounded-2xl">

				</div>

				<div class="w-full flex items-center justify-center">
					
					<p class="text-[20px] text-white">Create a new wallet</p>

				</div>

				<div class="w-full flex items-center justify-center px-4">
					
					<p class="text-[14px] text-gray-400 text-center">In the next step we will show you 12 words, your recovery phrase, with wich you can restore your wallet.</p>

				</div>

				<div class="w-full bg-blue-500 border border-blue-400 hover:bg-blue-400 hover:border-blue-300 transition-all flex items-center justify-center py-2 mt-8 rounded-md">
					
					<p class="text-[14px] text-white text-center">Continuer</p>

				</div>

			</div>-->

			<div class="w-[35vh] rounded-lg bg-stone-900 border border-stone-700 overflow-hidden">
				
				<div class="w-full h-[15vh] bg-[url('../ressources/images/background-1.webp')] bg-cover bg-center"></div>

				<div class="w-full p-3">
					
					<p class="text-[14px] text-white">Apple Website Update</p>

					<p class="text-[12px] text-gray-400">Phase 2 of apple website design where we focus to improve branding...</p>

					<div class="mt-5 w-full flex items-end justify-between">
						
						<p class="text-[10px] text-gray-400">28/05/20 - 25/06/20</p>

						<div class="mt-3 flex -space-x-2">
						    
						    <img class="inline-block h-[3vh] w-[3vh] rounded-full ring-1 ring-white" src="../ressources/images/background-2.webp" />

						    <img class="inline-block h-[3vh] w-[3vh] rounded-full ring-1 ring-white" src="../ressources/images/background-3.webp" />

						    <img class="inline-block h-[3vh] w-[3vh] rounded-full ring-1 ring-white" src="../ressources/images/background-4.webp" />

						    <img class="inline-block h-[3vh] w-[3vh] rounded-full ring-1 ring-white" src="../ressources/images/background-5.webp" />
						   
						</div>

					</div>

				</div>

			</div>

			<div class="ml-3 w-[35vh] p-3 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden">
				
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

			<div class="ml-5 w-[20vh] rounded-lg bg-stone-900 border border-stone-700 overflow-hidden">
				
				<div class="px-3 py-2 flex items-center text-white hover:bg-white/10 transition-all mt-1">
					
					<svg xmlns="http://www.w3.org/2000/svg" class="h-[16px] w-[16px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					  	<path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
					</svg>

					<p class="text-[12px] ml-2">Ajouter aux favoris</p>

				</div>

				<div class="px-3 py-2 flex items-center text-white hover:bg-white/10 transition-all">
					
					<svg xmlns="http://www.w3.org/2000/svg" class="h-[16px] w-[16px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					  	<path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
					</svg>

					<p class="text-[12px] ml-2">Mentionner</p>

				</div>

				<div class="px-3 py-2 flex items-center text-white hover:bg-white/10 transition-all">
					
					<svg xmlns="http://www.w3.org/2000/svg" class="h-[16px] w-[16px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					  	<path stroke-linecap="round" stroke-linejoin="round" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
					</svg>

					<p class="text-[12px] ml-2">Ouvrir l'app</p>

				</div>

				<div class="px-3 py-2 flex items-center text-white hover:bg-white/10 transition-all">
					
					<svg xmlns="http://www.w3.org/2000/svg" class="h-[16px] w-[16px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					  	<path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
					</svg>

					<p class="text-[12px] ml-2">Langages</p>

				</div>

				<div class="w-full border-t border-stone-700 mt-1 mb-1"></div>

				<div class="px-3 py-2 flex items-center text-white hover:bg-white/10 transition-all">
					
					<svg xmlns="http://www.w3.org/2000/svg" class="h-[16px] w-[16px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					  	<path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
					</svg>

					<p class="text-[12px] ml-2">Ajouter aux favoris</p>

				</div>

				<div class="px-3 py-2 flex items-center text-white hover:bg-white/10 transition-all">
					
					<svg xmlns="http://www.w3.org/2000/svg" class="h-[16px] w-[16px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					  	<path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
					</svg>

					<p class="text-[12px] ml-2">Mentionner</p>

				</div>

				<div class="px-3 py-2 flex items-center text-white hover:bg-white/10 transition-all">
					
					<svg xmlns="http://www.w3.org/2000/svg" class="h-[16px] w-[16px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					  	<path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
					</svg>

					<p class="text-[12px] ml-2">Langages</p>

				</div>

				<div class="w-full border-t border-stone-700 mt-1 mb-1"></div>

				<div class="px-3 py-2 flex items-center text-white hover:bg-white/10 transition-all">
					
					<svg xmlns="http://www.w3.org/2000/svg" class="h-[16px] w-[16px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					  	<path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
					</svg>

					<p class="text-[12px] ml-2">Ajouter aux favoris</p>

				</div>

				<div class="px-3 py-2 flex items-center text-white hover:bg-white/10 transition-all mb-1">
					
					<svg xmlns="http://www.w3.org/2000/svg" class="h-[16px] w-[16px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					  	<path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
					</svg>

					<p class="text-[12px] ml-2">Langages</p>

				</div>

			</div>

			<div class="w-[25vh] p-2 ml-5 bg-stone-900 rounded-lg border border-stone-700 overflow-hidden">

				<div class="w-full pb-2 px-2 flex items-center justify-between border-b border-stone-700">
					
					<p class="text-[12px] text-white">Couleur du fond</p>

					<div class="flex items-center">
						
						<div class="w-[1.5vh] h-[1.5vh] rounded-full bg-green-500 mr-2"></div>

						<div class="w-[1.5vh] h-[1.5vh] rounded-full bg-yellow-500 mr-2"></div>

						<div class="w-[1.5vh] h-[1.5vh] rounded-full bg-red-500 mr-1"></div>

					</div>

				</div>
				
				<div class="w-full h-[40vh] overflow-y-scroll pr-2 mt-2">
					
					<div class="w-full">
				
						<div class="w-full p-3 flex items-center justify-evenly">
						
							<div class="w-[2vh] h-[2vh] rounded-full bg-blue-500 border border-blue-500 hover:border-white transition-all"></div>

							<div class="w-[2vh] h-[2vh] rounded-full bg-green-500 ml-2 border border-green-500 hover:border-white transition-all"></div>

							<div class="w-[2vh] h-[2vh] rounded-full bg-red-500 ml-2 border border-red-500 hover:border-white transition-all"></div>

							<div class="w-[2vh] h-[2vh] rounded-full bg-yellow-500 ml-2 border border-yellow-500 hover:border-white transition-all"></div>

							<div class="w-[2vh] h-[2vh] rounded-full bg-violet-500 ml-2 border border-violet-500 hover:border-white transition-all"></div>

							<div class="w-[2vh] h-[2vh] rounded-full bg-pink-500 ml-2 border border-pink-500 hover:border-white transition-all"></div>

						</div>

						<div class="w-full border-t border-stone-700 mt-1 mb-1"></div>

						<div class="w-full p-3">
						
							<div class="w-full rounded-lg h-[10vh] bg-[url('ressources/images/background.webp')] bg-cover bg-center border border-stone-700 hover:border-white transition-all flex items-center justify-center">
								
								<span class="px-3 py-2 bg-white/25 rounded-lg backdrop-blur-xl text-white text-[10px]">Désert</span>

							</div>

							<div class="mt-3 w-full rounded-lg h-[10vh] bg-[url('ressources/images/background.webp')] bg-cover bg-center border border-stone-700 hover:border-white transition-all flex items-center justify-center">
								
								<span class="px-3 py-2 bg-white/25 rounded-lg backdrop-blur-xl text-white text-[10px]">Chaos</span>

							</div>

							<div class="mt-3 w-full rounded-lg h-[10vh] bg-[url('ressources/images/background.webp')] bg-cover bg-center border border-stone-700 hover:border-white transition-all flex items-center justify-center">
								
								<span class="px-3 py-2 bg-white/25 rounded-lg backdrop-blur-xl text-white text-[10px]">Chaos</span>

							</div>

							<div class="mt-3 w-full rounded-lg h-[10vh] bg-[url('ressources/images/background.webp')] bg-cover bg-center border border-stone-700 hover:border-white transition-all flex items-center justify-center">
								
								<span class="px-3 py-2 bg-white/25 rounded-lg backdrop-blur-xl text-white text-[10px]">Chaos</span>

							</div>

						</div>

					</div>

				</div>

			</div>

		</section>

		<section class="w-full h-[100vh] bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 bg-cover bg-center flex items-center justify-center flex-wrap">
			
			<div class="w-[75vh] p-2 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden">
				
				<div class="w-full pb-2 px-2 flex items-center justify-between border-b border-stone-700">
					
					<p class="text-[12px] text-white">Application de bienvenue</p>

					<div class="flex items-center">
						
						<div class="w-[1.5vh] h-[1.5vh] rounded-full bg-green-500 mr-2"></div>

						<div class="w-[1.5vh] h-[1.5vh] rounded-full bg-yellow-500 mr-2"></div>

						<div class="w-[1.5vh] h-[1.5vh] rounded-full bg-red-500 mr-1"></div>

					</div>

				</div>

				<div class="w-full h-[40vh] overflow-y-scroll mt-2 pr-2">
					
					<div class="w-full bg-stone-800 py-56 border border-stone-700">
						 
						

					</div>

				</div>

			</div>

			<div class="absolute top-5 left-5 px-3 py-2 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden flex items-center">

				<div class="w-[4vh] h-[4vh] flex items-center justify-center bg-white/5 rounded-lg border border-white/10 hover:scale-[110%] hover:bg-white/10 hover:border-white/25 transition-all">

					<svg xmlns="http://www.w3.org/2000/svg" class="w-[2.5vh] h-[2.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					  	<path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
					</svg>

				</div>

				<div class="ml-3 w-[4vh] h-[4vh] flex items-center justify-center bg-white/5 rounded-lg border border-white/10 hover:scale-[110%] hover:bg-white/10 hover:border-white/25 transition-all">

					<svg xmlns="http://www.w3.org/2000/svg" class="w-[2.5vh] h-[2.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					  	<path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
					</svg>

				</div>

				<div class="ml-3 w-[4vh] h-[4vh] flex items-center justify-center bg-white/5 rounded-lg border border-white/10 hover:scale-[110%] hover:bg-white/10 hover:border-white/25 transition-all">

					<svg xmlns="http://www.w3.org/2000/svg" class="w-[2.5vh] h-[2.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					  	<path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
					</svg>

				</div>

				<div class="ml-3 w-[4vh] h-[4vh] flex items-center justify-center bg-white/5 rounded-lg border border-white/10 hover:scale-[110%] hover:bg-white/10 hover:border-white/25 transition-all">

					<svg xmlns="http://www.w3.org/2000/svg" class="w-[2.5vh] h-[2.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					  	<path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
					</svg>

				</div>

				<div class="ml-3 w-[4vh] h-[4vh] flex items-center justify-center bg-white/5 rounded-lg border border-white/10 hover:scale-[110%] hover:bg-white/10 hover:border-white/25 transition-all">

					<svg xmlns="http://www.w3.org/2000/svg" class="w-[2.5vh] h-[2.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					 	<path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
					</svg>

				</div>

				<div class="ml-3 w-[4vh] h-[4vh] flex items-center justify-center bg-white/5 rounded-lg border border-white/10 hover:scale-[110%] hover:bg-white/10 hover:border-white/25 transition-all">

					<svg xmlns="http://www.w3.org/2000/svg" class="w-[2.5vh] h-[2.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					  	<path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
					</svg>

				</div>

			</div>

			<div class="w-full bg-gray-300">

				<div class="w-full h-[10vh] flex items-center justify-center">
					
					<button class="px-2 py-1 rounded-lg bg-violet-600 border border-violet-700/50 text-[10px] text-white">bouton simple</button>
				
					<button class="ml-3 px-3 py-2 rounded-lg bg-violet-600 border border-violet-700/50 text-[10px] text-white">bouton simple</button>

					<button class="ml-3 px-4 py-2 rounded-lg bg-violet-600 border border-violet-700/50 text-[10px] text-white">bouton simple</button>

					<button class="ml-3 px-3 py-2 rounded-lg bg-violet-600 border border-violet-700/50 text-[12px] text-white">bouton simple</button>

					<button class="ml-3 px-4 py-2 rounded-lg bg-violet-600 border border-violet-700/50 text-[12px] text-white">bouton simple</button>

				</div>

				<div class="w-full h-[10vh] flex items-center justify-center bg-stone-800">
					
					<button class="px-2 py-1 rounded-lg bg-gray-200 border border-gray-300 text-[10px] text-violet-600">bouton simple</button>
				
					<button class="ml-3 px-3 py-2 rounded-lg bg-gray-200 border border-gray-300 text-[10px] text-violet-600">bouton simple</button>

					<button class="ml-3 px-4 py-2 rounded-lg bg-gray-200 border border-gray-300 text-[10px] text-violet-600">bouton simple</button>

					<button class="ml-3 px-3 py-2 rounded-lg bg-gray-200 border border-gray-300 text-[12px] text-violet-600">bouton simple</button>

					<button class="ml-3 px-4 py-2 rounded-lg bg-gray-200 border border-gray-300 text-[12px] text-violet-600">bouton simple</button>

				</div>

				<div class="w-full h-[10vh] flex items-center justify-center">
					
					<div class="rounded-lg overflow-hidden border border-stone-700 flex items-center">
						
						<button class="px-4 py-2 bg-stone-900 text-[10px] text-white hover:bg-stone-800 hover:border-stone-600 transition-all">bouton simple</button>

						<button class="px-4 py-2 bg-stone-900 text-[10px] text-white border-x border-stone-700 hover:bg-stone-800 hover:border-stone-600 transition-all">bouton simple</button>

						<button class="px-4 py-2 bg-stone-900 text-[10px] text-white hover:bg-stone-800 hover:border-stone-600 transition-all">bouton simple</button>

					</div>

				</div>

			</div>

			<div id="my-background" class="w-full py-56 flex items-center justify-center">

				<div class="rounded-lg overflow-hidden border border-stone-700 flex items-center">
						
					<button class="px-4 py-2 bg-stone-900 text-[10px] text-white hover:bg-stone-800 hover:border-stone-600 transition-all">bouton simple</button>

					<button class="px-4 py-2 bg-stone-900 text-[10px] text-white border-x border-stone-700 hover:bg-stone-800 hover:border-stone-600 transition-all">bouton simple</button>

					<button class="px-4 py-2 bg-stone-900 text-[10px] text-white hover:bg-stone-800 hover:border-stone-600 transition-all">bouton simple</button>

				</div>

			</div>

			<div class="w-full h-[100vh] flex items-center justify-center">
				
				<!-- APPLICATION test size -->
				<div id="app-testsize" class="min-w-[45vh] p-2 rounded-lg bg-stone-900 border border-stone-700 overflow-hidden shadow shadow-stone-900/75 z-[50] hover:z-[60]">
					
					<div id="app-testsize-header" class="w-full pb-2 px-2 flex items-center justify-between border-b border-stone-700">
						
						<p class="text-[12px] text-white">Application test size</p>

						<div class="flex items-center">

							<div class="ml-2 w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="zoomOut_app_testsize()">
							
								<svg xmlns="http://www.w3.org/2000/svg" class="h-[1.5vh] w-[1.5vh] text-white" fill="currentColor" viewBox="0 0 16 16">
								  	<path fill-rule="evenodd" d="M.172 15.828a.5.5 0 0 0 .707 0l4.096-4.096V14.5a.5.5 0 1 0 1 0v-3.975a.5.5 0 0 0-.5-.5H1.5a.5.5 0 0 0 0 1h2.768L.172 15.121a.5.5 0 0 0 0 .707zM15.828.172a.5.5 0 0 0-.707 0l-4.096 4.096V1.5a.5.5 0 1 0-1 0v3.975a.5.5 0 0 0 .5.5H14.5a.5.5 0 0 0 0-1h-2.768L15.828.879a.5.5 0 0 0 0-.707z"/>
								</svg>

							</div>

							<div class="ml-2 w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="zoomIn_app_testsize()">
							
								<svg xmlns="http://www.w3.org/2000/svg" class="h-[1.5vh] w-[1.5vh] text-white" fill="currentColor" viewBox="0 0 16 16">
								  	<path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707z"/>
								</svg>

							</div>
							
							<div class="ml-2 w-[3vh] h-[3vh] flex items-center justify-center rounded-md bg-white/5 hover:bg-white/10 transition-all border border-white/10 hover:border-white/25 cursor-pointer" onclick="fermer_app_testsize()">
							
								<svg xmlns="http://www.w3.org/2000/svg" class="h-[2vh] w-[2vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
								</svg>

							</div>

						</div>

					</div>

					<div id="app-testsize-body" class="min-w-[45vh] min-h-[45vh] mt-5 overflow-y-scroll bg-stone-800 rounded-lg p-3" style="resize: both;">

						

					</div>

				</div>

			</div>

		</section>

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

      	<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/vanta@0.5.21/dist/vanta.waves.min.js"></script>
		<script>
		  	VANTA.WAVES('#my-background')
		</script>

	</body>
</html>