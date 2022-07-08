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
$classes = $bdd->query('SELECT * FROM classes ORDER BY id DESC');

$inscription_erreur = ''; // Message en cas d'erreur du formulaire

if(isset($_POST['redactionCours_submit'])){

	if (!empty($_POST['redactionCours_nom']) AND !empty($_POST['redactionCours_classe']) AND !empty($_POST['redactionCours_auteur']) AND !empty($_POST['redactionCours_couleur']) AND !empty($_POST['redactionCours_contenu'])) {
		
		$redactionCours_nom = htmlspecialchars($_POST['redactionCours_nom']); // Récupération du "nom du cours"
		$redactionCours_classe = htmlspecialchars($_POST['redactionCours_classe']); // Récupération de la "classe qui va recevoir le cours"
		$redactionCours_auteur = htmlspecialchars($_POST['redactionCours_auteur']); // Récupération de "l'auteur du cours"
		$redactionCours_couleur = htmlspecialchars($_POST['redactionCours_couleur']); // Récupération de "la couleur du cours"
		$redactionCours_contenu = htmlspecialchars($_POST['redactionCours_contenu']); // Récupération du "mot de passe 2"

		$ins = $bdd->prepare('INSERT INTO cours (nom, date, auteur, contenu, classe, couleur) VALUES (?, NOW(), ?, ?, ?, ?)');
		$ins->execute(array($redactionCours_nom, $redactionCours_auteur, $redactionCours_contenu, $redactionCours_classe, $redactionCours_couleur));

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
					
					<p class="text-white text-[18px]">Rédiger un nouveau cours</p>

				</div>

				<form class="mt-5" method="POST" action="redaction-cours.php">
					
					<input type="text" id="redactionCours_nom" name="redactionCours_nom" placeholder="Nom du cours" class="w-full h-[5vh] text-black text-[16px] pl-5">

					<select id="redactionCours_classe" name="redactionCours_classe" class="mt-3 w-full h-[5vh] text-black text-[16px] pl-5">
					    <?php 

						while($b = $classes->fetch()){

						?>
					    <option value="<?= $b['nom'] ?>"><?= $b['nom'] ?></option>
					    <?php  

						}

					    ?>
					</select>

					<input type="text" id="redactionCours_auteur" name="redactionCours_auteur" placeholder="Auteur du cours" class="mt-3 w-full h-[5vh] text-black text-[16px] pl-5">

					<select id="redactionCours_couleur" name="redactionCours_couleur" class="mt-3 w-full h-[5vh] text-black text-[16px] pl-5">
						<optgroup label="Vert">
							<option value="green-300">Vert light</option>
						    <option value="green-500">Vert</option>
						    <option value="green-700">Vert dark</option>
						</optgroup>
					    <optgroup label="Rouge">
							<option value="red-300">Rouge light</option>
						    <option value="red-500">Rouge</option>
						    <option value="red-700">Rouge dark</option>
						</optgroup>
						<optgroup label="Bleu">
							<option value="blue-300">Bleu light</option>
						    <option value="blue-500">Bleu</option>
						    <option value="blue-700">Bleu dark</option>
						</optgroup>
						<optgroup label="Jaune">
							<option value="yellow-300">Jaune light</option>
						    <option value="yellow-500">Jaune</option>
						    <option value="yellow-700">Jaune dark</option>
						</optgroup>
					</select>

					<textarea id="redactionCours_contenu" name="redactionCours_contenu" placeholder="Contenu du cours" class="mt-3 w-full h-[15vh] text-black text-[16px] p-5" style="resize: vertical;"></textarea>

					<input type="submit" id="redactionCours_submit" name="redactionCours_submit" value="Mettre le cours en ligne" class="mt-3 w-full h-[5vh] text-white text-[16px] bg-blue-600 hover:bg-blue-500 transition-all">

					<div class="bg-red-600 mt-3">
				
						<?php echo $inscription_erreur; ?>

					</div>

				</form>

			</div>

		</div>

	</body>
</html>