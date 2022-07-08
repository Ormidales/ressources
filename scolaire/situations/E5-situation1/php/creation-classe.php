<?php

/*$inscription_erreur = ''; // Message en cas d'erreur du formulaire

// Méthode d'enegistrement du nouveau cours dans la base de données
if (isset($_POST['redactionCours_submit'])){
	$redactionCours_nom = htmlspecialchars(trim($_POST['redactionCours_nom'])); // Récupération du "nom du cours"
	$redactionCours_classe = htmlspecialchars(trim($_POST['redactionCours_classe'])); // Récupération de la "classe qui va recevoir le cours"
	$redactionCours_date = htmlspecialchars(trim($_POST['redactionCours_date'])); // Récupération de la "date du cours"
	$redactionCours_auteur = htmlspecialchars(trim($_POST['redactionCours_auteur'])); // Récupération de "l'auteur du cours"
	$redactionCours_contenu = htmlspecialchars(trim($_POST['redactionCours_contenu'])); // Récupération du "mot de passe 2"

	if ($redactionCours_nom && $redactionCours_classe && $redactionCours_date && $redactionCours_auteur && $redactionCours_contenu){

		$c = new mysqli ("localhost","root","","situation-1"); // On se connecte à la base de données "situation-1"
		// On créer la requête
		$sql = "INSERT INTO cours VALUES ('','$redactionCours_nom','$redactionCours_date','$redactionCours_auteur','$redactionCours_contenu','$redactionCours_classe')";
		$res = $c->query($sql); // On envoie la requête
		mysqli_close($c); // On ferme la connexion à la base de données "situation-1"

		header('Location: index.php');
		exit;
	}

	else{

		$inscription_erreur = '<p class="px-4 py-2">Veuillez saisir tous les champs !</p>';
	}
}*/

$bdd = new PDO("mysql:host=localhost;dbname=situation-1;charset=utf8", "root", "");

$inscription_erreur = ''; // Message en cas d'erreur du formulaire

if(isset($_POST['creationClasse_submit'])){

	if (!empty($_POST['creationClasse_nom']) AND !empty($_POST['creationClasse_prof']) AND !empty($_POST['creationClasse_couleur'])) {
		
		$creationClasse_nom = htmlspecialchars($_POST['creationClasse_nom']); // Récupération du "nom de la classe"
		$creationClasse_prof = htmlspecialchars($_POST['creationClasse_prof']); // Récupération du "professeur"
		$creationClasse_couleur = htmlspecialchars($_POST['creationClasse_couleur']); // Récupération de la "couleur du cours"

		$ins = $bdd->prepare('INSERT INTO classes (nom, prof, couleur) VALUES (?, ?, ?)');
		$ins->execute(array($creationClasse_nom, $creationClasse_prof, $creationClasse_couleur));

		header('Location: index.php');

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
	</head>
	<body style="font-family: Source Code Pro;">

		<div class="w-full h-screen bg-[#1c1c1c] flex items-center justify-center">
			
			<div class="w-[60vh] px-8 py-6 bg-[#252525] border border-zinc-700 animate__animated animate__fadeInDown">

				<div class="w-full flex items-center justify-between border-b border-zinc-700 mb-4 pb-4">
					
					<p class="text-white text-[18px]">Cours de passage</p>

					<a href="index.php"><div class="px-4 py-2 border text-white text-[12px] border-white hover:bg-white/10 transition-all cursor-pointer hover:scale-95 transition-all">Page d'accueil</div></a>

				</div>
				
				<div class="flex items-center">
					
					<p class="text-white text-[18px]">Créer une nouvelle classe</p>

				</div>

				<form class="mt-5" method="POST" action="creation-classe.php">
					
					<input type="text" id="creationClasse_nom" name="creationClasse_nom" placeholder="Nom de la classe" class="w-full h-[5vh] text-black text-[16px] pl-5">

					<input type="text" id="creationClasse_prof" name="creationClasse_prof" placeholder="Nom du professeur" class="mt-3 w-full h-[5vh] text-black text-[16px] pl-5">

					<input type="text" id="creationClasse_couleur" name="creationClasse_couleur" placeholder="Coulmeur du cours" class="mt-3 w-full h-[5vh] text-black text-[16px] pl-5">

					<input type="submit" id="creationClasse_submit" name="creationClasse_submit" value="Mettre la classe en ligne" class="mt-3 w-full h-[5vh] text-white text-[16px] bg-blue-600 hover:bg-blue-500 transition-all">

					<input type="reset" value="Effacer les valeurs du formulaire" class="mt-3 w-full h-[5vh] text-white text-[16px] border border-white hover:bg-white/10 transition-all">

					<div class="bg-red-600 mt-3">
				
						<?php echo $inscription_erreur; ?>

					</div>

				</form>

			</div>

		</div>

	</body>
</html>