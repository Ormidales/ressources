<?php

$bdd = new PDO("mysql:host=localhost;dbname=situation-1;charset=utf8", "root", "");
$cours = $bdd->query('SELECT * FROM cours INNER JOIN classes ON classes.id = cours.classes_cours WHERE classes.id = cours.classes_cours ORDER BY date DESC');
$classes = $bdd->query('SELECT * FROM classes ORDER BY id DESC');

if(isset($_GET['id']) AND !empty($_GET['id'])){
	$get_id = htmlspecialchars($_GET['id']);

	$classesObject2 = $bdd->prepare('SELECT * FROM classes WHERE id = ?');
	$classesObject2->execute(array($get_id));

	if($classesObject2->rowCount() == 1){
		$classesObject2 = $classesObject2->fetch();
		$idClasse = $classesObject2['id'];
		$nomClasse = $classesObject2['nom'];
		$profClasse = $classesObject2['prof'];
		$couleurClasse = $classesObject2['couleur'];
	}
	else{
		die('Cette classe n\'existe pas !');
	}
}
else{
	die('Erreur');
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Station</title>
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
				document.getElementById("menuInformationCours").className = "w-full mb-3 px-2 py-2 border border-<?= $couleurCours ?>/50 bg-<?= $couleurCours ?>/25 text-white text-[12px] animate__animated animate__fadeInLeft";
			}
			function closeMenuInformationCours(){
				document.getElementById("menuInformationCours").className = "hidden";
			}

		</script>
	</head>
	<body style="font-family: Source Code Pro;" class="bg-[#1c1c1c] overflow-hidden">

		<div id="app-xl" class="w-full h-screen bg-[#1c1c1c] md:block hidden">

			<div class="w-full h-[6vh] bg-[#252525] border-b border-zinc-700 flex items-center">
				
				<div class="w-[15%] h-[6vh] bg-[#202020] border-r border-zinc-700 flex items-center">
					
					<a href="index.php"><p class="text-white text-[18px] ml-5" style="line-height: 18px;"><span class="text-white text-[18px] mr-2 font-bold">Cours</span>de passage</p></a>

				</div>

				<div class="w-[85%] h-[6vh] flex justify-between">

					<div class="ml-5 flex items-center">

						<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-zinc-300 hover:text-white transition-all cursor-pointer mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						  	<path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
						  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
						</svg>
						
						<p class="text-white text-[16px]"><?= $nomClasse ?> | Créer par <?= $profClasse ?></p>

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

				<!-- LISTE DES COURS -->
				<div class="w-[85%] h-[94vh]">
					
					<div class="w-full flex items-center">

						<div class="w-full h-[94vh] px-8 py-10 overflow-y-scroll animate__animated animate__fadeInRight">

							<div class="w-full h-[25vh] flex items-end justify-between px-6 py-4 bg-<?= $couleurClasse ?>">
								
								<p class="text-white text-[35px]"><?= $nomClasse ?></p>

								<p class="text-white border border-white px-2 py-1 text-[14px]"><?= $profClasse ?></p>

							</div>

							<div class="w-full h-[5vh] bg-[#252525] border border-zinc-700 mt-3 flex items-center justify-end pr-5">
								
								<div><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-zinc-300 hover:text-white transition-all cursor-pointer mr-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
								</svg></div>

								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-zinc-300 hover:text-white transition-all cursor-pointer mr-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
								</svg>

								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-zinc-300 hover:text-white transition-all cursor-pointer mr-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
								</svg>

								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-zinc-300 hover:text-white transition-all cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
								</svg>

							</div>

							<div id="#enseignant" class="w-full px-6 py-4 bg-[#252525] border border-zinc-700 mt-3">
								
								<p class="text-white text-[14px]">Administrateur de la page : <?= $profClasse ?></p>

							</div>

							<div id="#cours" class="w-full p-6 bg-[#252525] border border-zinc-700 mt-3">

								<?php 

								while($a = $cours->fetch()){

								?>
								
								<div class="w-full px-4 py-2 border border-zinc-700 bg-white/10 hover:bg-white/25 transition-all">
									
									<p class="text-white text-[14px]">Nom du cours : <?= $a['nom'] ?></p>

								</div>

								<?php

								}

								?>

							</div>

							<!--

							<div class="w-full h-[5vh] bg-[#252525] border border-zinc-700 mb-3 flex items-center justify-end pr-5">
								
								<div onclick="openMenuInformationCours()"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-zinc-300 hover:text-white transition-all cursor-pointer mr-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
								</svg></div>

								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-zinc-300 hover:text-white transition-all cursor-pointer mr-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
								</svg>

								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-zinc-300 hover:text-white transition-all cursor-pointer mr-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
								</svg>

								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-zinc-300 hover:text-white transition-all cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								  	<path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
								</svg>

							</div>
							
							<div class="w-full h-[25vh] flex items-end px-6 py-4 bg-<?= $couleurCours ?>">
								
								<p class="text-white text-[35px]"><?= $nomCours ?></p>

							</div>

							<div class="w-full mt-3">
								
								<p class="text-white text-[14px]"><span class="mr-3 text-white border border-white px-2 py-1"><?= $dateCours ?></span><?= $auteurCours ?></p>

							</div>

							<div class="w-full mt-8">
								
								<p class="text-white text-[14px]"><?= $contenuCours ?></p>

							</div>

							<div class="w-full bg-[#252525] border border-zinc-700 mt-8 py-2 px-4 flex items-center">
								
								<p class="text-white text-[12px]"><span class="hover:underline">Conditions d'utilisations</span> / <span class="hover:underline">Contact</span> / <span class="hover:underline">Cookies</span> / <span class="hover:underline">Charte des données</span></p>

							</div>-->

						</div>

					</div>

				</div>

			</div>

		</div>

	</body>
</html>