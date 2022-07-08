<?php

$bdd = new PDO("mysql:host=localhost;dbname=situation-1;charset=utf8", "root", "");
$classes = $bdd->query('SELECT * FROM classes ORDER BY id DESC');

$get_id = htmlspecialchars($_GET['id']);

$inscription_erreur = ''; // Message en cas d'erreur du formulaire

if(isset($_POST['editCours_submit'])){

	if (!empty($_POST['editCours_nom']) AND !empty($_POST['editCours_classe']) AND !empty($_POST['editCours_auteur']) AND !empty($_POST['editCours_couleur']) AND !empty($_POST['editCours_contenu'])) {
		
		$editCours_nom = htmlspecialchars($_POST['editCours_nom']); // Récupération du "nom du cours"
		$editCours_classe = htmlspecialchars($_POST['editCours_classe']); // Récupération de la "classe qui va recevoir le cours"
		$editCours_auteur = htmlspecialchars($_POST['editCours_auteur']); // Récupération de "l'auteur du cours"
		$editCours_couleur = htmlspecialchars($_POST['editCours_couleur']); // Récupération de "la couleur du cours"
		$editCours_contenu = htmlspecialchars($_POST['editCours_contenu']); // Récupération du "mot de passe 2"

		$ins = $bdd->prepare('INSERT INTO cours (nom, date, auteur, contenu, classe, couleur) VALUES (?, NOW(), ?, ?, ?, ?)');
		$ins->execute(array($editCours_nom, $editCours_auteur, $editCours_contenu, $editCours_classe, $editCours_couleur));

		$ins2 = $bdd->prepare('DELETE FROM cours WHERE `id` = $get_id');
		$ins2->execute();

		header('Location: index.php');

	}

	else{

		$inscription_erreur = '<p class="px-4 py-2">Veuillez saisir tous les champs !</p>';
	}
}

if(isset($_GET['id']) AND !empty($_GET['id'])){
	
	$coursObject = $bdd->prepare('SELECT * FROM cours WHERE id = ?');
	$coursObject->execute(array($get_id));

	if($coursObject->rowCount() == 1){
		$coursObject = $coursObject->fetch();
		$idCours = $coursObject['id'];
		$nomCours = $coursObject['nom'];
		$dateCours = $coursObject['date'];
		$auteurCours = $coursObject['auteur'];
		$contenuCours = $coursObject['contenu'];
		$classeCours = $coursObject['classe'];
		$couleurCours = $coursObject['couleur'];
	}
	else{
		die('Ce cours n\'existe pas !');
	}
}
else{
	die('Erreur');
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Cours de passage | Édition d'un cours</title>
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
					
					<p class="text-white text-[18px]">Modifier le cours "<?= $nomCours ?>"</p>

				</div>

				<form class="mt-5" method="POST" action="">
					
					<input type="text" id="editCours_nom" name="editCours_nom" placeholder="Nom du cours" value="<?= $nomCours ?>" class="w-full h-[5vh] text-black text-[16px] pl-5">

					<select id="editCours_classe" name="editCours_classe" class="mt-3 w-full h-[5vh] text-black text-[16px] pl-5">
						<option value="<?= $classeCours ?>"><?= $classeCours ?></option>
					    <?php 

						while($b = $classes->fetch()){

						?>
					    <option value="<?= $b['nom'] ?>"><?= $b['nom'] ?></option>
					    <?php  

						}

					    ?>
					</select>

					<input type="text" id="editCours_auteur" name="editCours_auteur" placeholder="Auteur du cours" value="<?= $auteurCours ?>" class="mt-3 w-full h-[5vh] text-black text-[16px] pl-5">

					<select id="editCours_couleur" name="editCours_couleur" class="mt-3 w-full h-[5vh] text-black text-[16px] pl-5">
						<option value="<?= $couleurCours ?>"><?= $couleurCours ?></option>
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

					<textarea id="editCours_contenu" name="editCours_contenu" placeholder="Contenu du cours" class="mt-3 w-full h-[15vh] text-black text-[16px] p-5" style="resize: vertical;"><?= $contenuCours ?></textarea>

					<input type="submit" id="editCours_submit" name="editCours_submit" value="Modifier le cours" class="mt-3 w-full h-[5vh] text-white text-[16px] bg-blue-600 hover:bg-blue-500 transition-all">

					<div class="bg-red-600 mt-3">
				
						<?php echo $inscription_erreur; ?>

					</div>

				</form>

			</div>

		</div>

	</body>
</html>