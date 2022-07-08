<?php 
	
$bdd = new PDO("mysql:host=localhost;dbname=music-app;charset=utf8", "root", "");

if (isset($_POST['playlist_nom'], $_POST['playlist_commentaire'], $_POST['playlist_libelle'], $_POST['playlist_imageFond'])) {
	if (!empty($_POST['playlist_nom']) AND !empty($_POST['playlist_commentaire']) AND !empty($_POST['playlist_libelle']) AND !empty($_POST['playlist_imageFond'])) {

		$playlist_nom = htmlspecialchars($_POST['playlist_nom']);
		$playlist_libelle = htmlspecialchars($_POST['playlist_libelle']);
		$playlist_commentaire = htmlspecialchars($_POST['playlist_commentaire']);
		$playlist_imageFond = htmlspecialchars($_POST['playlist_imageFond']);

		$ins = $bdd->prepare('INSERT INTO playlist (nom, libelle, commentaire, date_time_publication, image_fond) VALUES (?, ?, ?, NOW(), ?)');
		$ins->execute(array($playlist_nom, $playlist_libelle, $playlist_commentaire, $playlist_imageFond));

		header('Location: index.php');

	}
	else{
		$message = 'Veuillez remplir tous les champs';
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Music-app | Nouvelle playlist</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300&display=swap" rel="stylesheet">
</head>
<body style="font-family: Source Code Pro;" class="p-8 bg-[#151515]">

	<a href=index.php><h1 class="text-white text-[25px] font-bold mb-5">Music-app</h1></a>

	<form method="post">
		
		<input type="text" name="playlist_nom" placeholder="Titre de la playlist" class="border border-gray-300 w-[50vh] h-[8vh] p-3 rounded-lg"><br>

		<input type="text" name="playlist_libelle" placeholder="Libelle de la playlist" class="border border-gray-300 w-[50vh] h-[8vh] p-3 mt-3 rounded-lg"><br>

		<input type="text" name="playlist_imageFond" placeholder="Image de fond de la playlist" class="border border-gray-300 w-[50vh] h-[8vh] p-3 mt-3 rounded-lg"><br>

		<textarea name="playlist_commentaire" placeholder="Commentaire de la playlist" class="border border-gray-300 w-[50vh] h-[15vh] mt-3 p-3 rounded-lg"></textarea><br>

		<input type="submit" value="Ajouter la playlist" class="px-4 py-2 bg-blue-600 hover:bg-blue-500 transition-all text-white mt-3 rounded-lg">

		<?php if(isset($message)) { echo $message; } ?>  

	</form>

</body>
</html>