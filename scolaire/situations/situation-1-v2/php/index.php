<?php

$bdd = new PDO("mysql:host=localhost;dbname=situation-1;charset=utf8", "root", "");
$cours = $bdd->query('SELECT * FROM cours ORDER BY date DESC');
$classes = $bdd->query('SELECT * FROM classes ORDER BY id DESC');

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Cours de passage | Accueil</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=9" />
		<script src="https://cdn.tailwindcss.com"></script>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

		<style type="text/css">
				
			::-webkit-scrollbar {
			  	width: 5px;
			}
			::-webkit-scrollbar-track {
			  	background: rgba(255, 255, 255, 0.15);
			}
			::-webkit-scrollbar-thumb {
			  	background-color: rgba(255, 255, 255, 0.30);
			}

			

		</style>

		<script type="text/javascript">

			// MENU INFORMATION COURS
			function openMenuInformationCours(){
				document.getElementById("menuInformationCours").className = "w-full mb-3 px-2 py-2 border border-<?= $couleurCours ?>/50 bg-<?= $couleurCours ?>/25 text-white text-[12px]";
			}
			function closeMenuInformationCours(){
				document.getElementById("menuInformationCours").className = "hidden";
			}

		</script>
	</head>
	<body style="font-family: Source Code Pro;" class="bg-[#1c1c1c] overflow-hidden">

		<div id="app-xl" class="w-full h-screen bg-[#1c1c1c] md:block hidden animate__animated animate__fadeInUp">

			<div class="w-full h-[6vh] bg-[#252525] border-b border-zinc-700 flex items-center">
				
				<div class="w-[15%] h-[6vh] bg-[#202020] border-r border-zinc-700 flex items-center">
					
					<a href="index.php"><p class="text-white text-[18px] ml-5" style="line-height: 18px;"><span class="text-white text-[18px] mr-2 font-bold">Cours</span>de passage</p></a>

				</div>

				<div class="w-[85%] h-[6vh] flex justify-between">

					<div class="ml-5 flex items-center">
						
						<p class="text-white text-[16px]">Accueil</p>

					</div>
						
					<div class="h-[6vh] py-[1.25vh] flex items-center pr-5">

						<a href="redaction-cours.php"><div class="px-4 py-2 border text-white text-[12px] border-white hover:bg-white/10 transition-all cursor-pointer hover:scale-95 transition-all mr-3">Rédiger un cours</div></a>

						<a href="creation-classe.php"><div class="px-4 py-2 border text-white text-[12px] border-white hover:bg-white/10 transition-all cursor-pointer hover:scale-95 transition-all mr-3">Créer une classe</div></a>

						<a href="connexion.php"><div class="px-4 py-2 border text-white text-[12px] border-white hover:bg-white/10 transition-all cursor-pointer hover:scale-95 transition-all mr-3">Connexion</div></a>

						<a href="inscription.php"><div class="px-4 py-2 border text-white text-[12px] border-white hover:bg-white/10 transition-all cursor-pointer hover:scale-95 transition-all">Inscription</div></a>

					</div>

				</div>

			</div>

			<div class="w-full h-[94vh] flex items-center">
				
				<div class="w-[15%] h-[94vh] bg-[#252525] border-r border-zinc-700 flex items-between justify-center flex-wrap">
					
					<div class="w-full pt-10">

						<div class="w-full px-5 py-5 bg-[#202020] border-t border-b border-zinc-700 transition-all">

							<div class="flex items-center">
								
								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-zinc-300 group-hover:text-white mr-2 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
								</svg>

								<p class="text-white text-[16px] transition-all" style="line-height: 16px;">Classes</p>

							</div>
							
							<div class="w-full max-h-[35vh] py-2 overflow-y-scroll">

								<?php 

								while($b = $classes->fetch()){

								?>

								<div class="mt-5">
									
									<div class="flex items-center transition-all">

										<div class="w-2 h-2 rounded-full bg-<?= $b['couleur'] ?> mr-2"></div>
										
										<a href="classe.php?id=<?= $b['id'] ?>"><p class="text-zinc-300 text-[12px] hover:text-white transition-all cursor-pointer"><?= $b['nom'] ?></p></a>

									</div>

									<div class="w-full">
										
										<a href="classe.php?id=<?= $b['id'] ?>#enseignant"><p class="ml-4 mt-1 text-zinc-300 text-[10px] hover:text-white transition-all cursor-pointer">Enseignant</p></a>

										<a href="classe.php?id=<?= $b['id'] ?>#cours"><p class="ml-4 mt-1 text-zinc-300 text-[10px] hover:text-white transition-all cursor-pointer">Cours</p></a>

										<a href="classe.php?id=<?= $b['id'] ?>#eleves"><p class="ml-4 mt-1 text-zinc-300 text-[10px] hover:text-white transition-all cursor-pointer">Élèves</p></a>

									</div>

								</div>

								<?php 

								}

								?>

							</div>

						</div>

					</div>

					<div class="w-full pl-5 pb-10 flex items-end">

						<div>
							
							<div class="flex items-center group transition-all cursor-pointer">
								
								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-zinc-300 group-hover:text-white mr-2 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
								</svg>

								<p class="text-zinc-300 group-hover:text-white text-[16px] transition-all" style="line-height: 16px;">Documentation</p>

							</div>

							<div class="w-full flex items-center mt-5">
								
								<svg xmlns="http://www.w3.org/2000/svg" class="text-white" viewBox="0 0 24 24" fill="currentColor" width="18" height="18">
									
									<path d="M18.7 6.4c-1.3-.6-2.6-1-4-1.3-.2.3-.4.7-.5 1.1-1.5-.2-3-.2-4.4 0-.2-.3-.4-.7-.5-1.1-1.4.2-2.8.7-4 1.3C2.7 10.2 2 14 2.4 17.7c1.7 1.3 3.3 2 4.9 2.5.4-.5.7-1.1 1.1-1.7-.6-.2-1.1-.5-1.7-.8.1-.1.3-.2.4-.3 3.2 1.5 6.7 1.5 9.8 0 .1.1.3.2.4.3-.5.3-1.1.6-1.7.8.3.6.7 1.2 1.1 1.7 1.6-.5 3.2-1.3 4.9-2.5.4-4.3-.7-8-2.9-11.3zm-9.9 9c-1 0-1.7-.9-1.7-2s.8-2 1.7-2c1 0 1.8.9 1.7 2 0 1.1-.8 2-1.7 2zm6.4 0c-1 0-1.7-.9-1.7-2s.8-2 1.7-2c1 0 1.8.9 1.7 2 .1 1.1-.7 2-1.7 2z"></path>

								</svg>

								<svg xmlns="http://www.w3.org/2000/svg" class="text-white ml-3" fill="currentColor" viewBox="0 0 24 24" width="18" height="18">

									<path d="M22.2 6c-.8.3-1.6.6-2.4.7.9-.5 1.5-1.3 1.8-2.3-.8.5-1.7.8-2.7 1C18.3 4.5 17.2 4 16 4c-2.3 0-4.2 1.9-4.2 4.2 0 .3 0 .6.1 1C8.4 9 5.3 7.3 3.3 4.8c-.4.6-.6 1.3-.6 2.1 0 1.5.7 2.7 1.9 3.5-.7 0-1.3-.2-1.9-.5v.1c0 2 1.4 3.7 3.4 4.1-.4.1-.7.1-1.1.1-.3 0-.5 0-.8-.1.5 1.6 2 2.8 3.8 2.9-1.4 1.1-3.2 1.8-5.2 1.8-.3 0-.7 0-1-.1 1.9 1.2 4.1 1.9 6.4 1.9 7.7 0 11.9-6.4 11.9-11.9v-.5c.9-.7 1.6-1.4 2.1-2.2"></path>

								</svg>

								<svg xmlns="http://www.w3.org/2000/svg" class="text-white ml-3" fill="currentColor" viewBox="0 0 24 24" width="18" height="18">

									<path d="M12 2C6.2 2 1.5 6.7 1.5 12.5c0 4.6 3 8.5 7.2 9.9.5.1.7-.2.7-.5V20c-2.9.6-3.5-1.2-3.5-1.2-.5-1.2-1.2-1.5-1.2-1.5-.9-.6.1-.6.1-.6 1.1.1 1.6 1.1 1.6 1.1.9 1.6 2.4 1.1 3 .9.1-.7.4-1.1.7-1.4-2.3-.3-4.8-1.2-4.8-5.2 0-1.1.4-2.1 1.1-2.8-.1-.5-.5-1.5.1-3 0 0 .9-.3 2.9 1.1.8-.2 1.7-.3 2.6-.4.9 0 1.8.1 2.6.4 2-1.4 2.9-1.1 2.9-1.1.6 1.4.2 2.5.1 2.8.7.7 1.1 1.7 1.1 2.8 0 4-2.4 4.9-4.8 5.2.4.3.7 1 .7 1.9v2.9c0 .3.2.6.7.5 4.2-1.4 7.1-5.3 7.1-9.9C22.4 6.7 17.7 2 12 2"></path>

								</svg>

							</div>

						</div>

					</div>

				</div>

				<div class="w-[85%] h-[94vh]">
					
					<div class="w-full flex items-center">

						<div class="w-[25%] h-[94vh] flex items-center justify-center flex-wrap p-4 overflow-y-scroll border-r border-zinc-700">

							<?php 

							while($a = $cours->fetch()){

							?>
							
							<!-- COURS -->
							<a href="cours.php?id=<?= $a['id'] ?>"><div class="w-[30vh] px-6 py-4 bg-[#202020] border border-zinc-700 group hover:border-zinc-300 transition-all m-6">

								<div class="flex items-center justify-between">
									
									<div class="flex items-center">

										<div>
											
											<p class="text-[12px] text-white"><?= $a['nom'] ?></p>

											<p class="text-[11px] text-gray-300"><?= $a['auteur'] ?></p>

											<p class="text-[11px] text-gray-300"><?= $a['date'] ?></p>

											<p class="text-[11px] text-gray-300"><?= $a['classe'] ?></p>

										</div>

									</div>

								</div>

								<!--<div class="w-full pt-2 border-t border-zinc-700 mt-5">

									<div class="flex items-center">
										
										<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
										  	<path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
										</svg>

										<p class="ml-2 text-gray-300 text-[12px]">6 documents</p>

									</div>
									
									<div class="flex items-center mt-1">
										
										<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
										  	<path stroke-linecap="round" stroke-linejoin="round" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
										</svg>

										<p class="ml-2 text-gray-300 text-[12px]">1 document audio</p>

									</div>

									<div class="flex items-center mt-1">
										
										<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
										  	<path stroke-linecap="round" stroke-linejoin="round" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
										</svg>

										<p class="ml-2 text-gray-300 text-[12px]">1 document vidéo</p>

									</div>

								</div>-->

								<div class="w-full pt-2 border-t border-zinc-700 mt-5">
									
									<a href="#" class="group"><p class="text-gray-300 text-[12px] group-hover:text-white transition-all">Modifier le cours</p></a>

									<a href="#" class="group"><p class="mt-1 text-gray-300 text-[12px] group-hover:text-white transition-all">Supprimer le cours</p></a>

								</div>

							</div></a>

							<?php 

							}

							?>

						</div>

						<div class="w-[75%] h-[94vh] px-8 py-10 overflow-y-scroll">

							<div class="w-full bg-[#252525] border border-zinc-700 py-2 px-4 flex items-center">
								
								<p class="text-white text-[12px]"><span class="hover:underline">Conditions d'utilisations</span> / <span class="hover:underline">Contact</span> / <span class="hover:underline">Cookies</span> / <span class="hover:underline">Charte des données</span></p>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</body>
</html>