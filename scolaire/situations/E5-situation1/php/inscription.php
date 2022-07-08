<?php

$inscription_erreur = ''; // Message en cas d'erreur du formulaire

// Méthode d'inscription dans la base de données
if (isset($_POST['inscription_submit'])){
	$inscription_compte = htmlspecialchars(trim($_POST['inscription_compte'])); // Récupération du "compte"
	$inscription_nom = htmlspecialchars(trim($_POST['inscription_nom'])); // Récupération du "nom"
	$inscription_prenom = htmlspecialchars(trim($_POST['inscription_prenom'])); // Récupération du "prenom"
	$inscription_password1 = htmlspecialchars(trim($_POST['inscription_password1'])); // Récupération du "mot de passe 1"
	$inscription_password2 = htmlspecialchars(trim($_POST['inscription_password2'])); // Récupération du "mot de passe 2"

	if ($inscription_compte && $inscription_nom && $inscription_prenom && $inscription_password1 && $inscription_password2){

		if (strlen($inscription_password1)>=6){

			if ($inscription_password1 == $inscription_password2){

				//$inscription_password1 = md5($inscription_password1); // On crypte le mot de passe
				$c = new mysqli ("localhost","root","","situation-1"); // On se connecte à la base de données "situation-1"
				$sql = "INSERT INTO membres VALUES ('','$inscription_compte','$inscription_nom','$inscription_prenom','$inscription_password1')"; // On créer la requête
				$res = $c->query($sql); // On envoie la requête
				mysqli_close($c); // On ferme la connexion à la base de données "situation-1"

				header('Location: index.php');
				exit;
			}

			else{

				$inscription_erreur = '<p class="px-4 py-2">Les mots de passe ne sont pas identiques</p>';
			}
		}

		else{

			$inscription_erreur = '<p class="px-4 py-2">Le mot de passe est trop court !</p>';
		}
	}

	else{

		$inscription_erreur = '<p class="px-4 py-2">Veuillez saisir tous les champs !</p>';
	}
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
	</head>
	<body style="font-family: Source Code Pro;">

		<div class="w-full h-screen bg-[#1c1c1c] flex items-center justify-evenly flex-wrap">
			
			<div class="w-[60vh] px-8 py-6 bg-[#252525] border border-zinc-700 m-5">

				<div class="w-full flex items-center justify-between border-b border-zinc-700 mb-4 pb-4">
					
					<p class="text-white text-[18px]">Cours de passage</p>

					<a href="index.php"><div class="px-4 py-2 border text-white text-[12px] border-white hover:bg-white/10 transition-all cursor-pointer hover:scale-95 transition-all">Page d'accueil</div></a>

				</div>

				<div class="flex items-center">
					
					<p class="text-white text-[18px]">Inscription</p>

				</div>

				<form class="mt-5" method="post" action="inscription.php">
					
					<input type="text" id="inscription_compte" name="inscription_compte" placeholder="Nom du compte" class="w-full h-[5vh] text-black text-[16px] pl-5">

					<input type="text" id="inscription_nom" name="inscription_nom" placeholder="Votre nom" class="mt-3 w-full h-[5vh] text-black text-[16px] pl-5">

					<input type="text" id="inscription_prenom" name="inscription_prenom" placeholder="Votre prénom" class="mt-3 w-full h-[5vh] text-black text-[16px] pl-5">

					<input type="password" id="inscription_password1" name="inscription_password1" placeholder="Mot de passe" class="mt-3 w-full h-[5vh] text-black text-[16px] pl-5">

					<input type="password" id="inscription_password2" name="inscription_password2" placeholder="Validation du mot de passe" class="mt-3 w-full h-[5vh] text-black text-[16px] pl-5">

					<input type="submit" id="inscription_submit" name="inscription_submit" value="Inscription" class="mt-3 w-full h-[5vh] text-white text-[16px] bg-blue-600 hover:bg-blue-500 transition-all">

					<div class="bg-red-600 mt-3">
						
						<?php echo $inscription_erreur; ?>

					</div>

				</form>

			</div>

			<div class="w-[60vh] px-8 py-6 bg-[#252525] border border-zinc-700 m-5">

				<div class="w-full h-[25vh]" style="background: rgb(251,239,63); background: radial-gradient(circle, rgba(251,239,63,1) 0%, rgba(252,186,70,1) 100%);"></div>

				<div class="w-full mt-3">
					
					<span class="px-4 py-2 bg-yellow-500/25 text-white text-[12px]">INTRODUCTION | 1/5</span>

					<p class="text-white text-[16px] mt-3 fonts-bold">Bienvenue sur Cours de Passage !</p>

					<p class="text-gray-300 text-[14px] mt-2">Nous sommes fières de vous avoir parmis nous. Voici quelques exemples du fonctionnement de notre plateforme.</p>

					<div class="mt-14 flex items-center">
						
						<div class="w-2 h-2 rounded-full bg-yellow-500"></div>

						<div class="ml-3 w-2 h-2 rounded-full bg-yellow-500/25"></div>

						<div class="ml-3 w-2 h-2 rounded-full bg-yellow-500/25"></div>

						<div class="ml-3 w-2 h-2 rounded-full bg-yellow-500/25"></div>

						<div class="ml-3 w-2 h-2 rounded-full bg-yellow-500/25"></div>

					</div>

					<div class="flex items-center mt-5">
						
						<span class="px-4 py-2 border border-white text-white text-[12px] hover:bg-white/10 transition-all">Précédent</span>

						<span class="ml-3 px-4 py-2 bg-blue-600 hover:bg-blue-500 border border-blue-600 hover:border-blue-500 text-white text-[12px] transition-all">Continuer</span>

					</div>

				</div>

			</div>

		</div>

	</body>
</html>