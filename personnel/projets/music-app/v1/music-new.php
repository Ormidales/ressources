<?php 
	
$bdd = new PDO("mysql:host=localhost;dbname=music-app;charset=utf8", "root", "");

$playlist = $bdd->query('SELECT * FROM playlist ORDER BY date_time_publication');

if (isset($_POST['music_titre'], $_POST['music_link'], $_POST['music_playlist'])) {
	if (!empty($_POST['music_titre']) AND !empty($_POST['music_link']) AND !empty($_POST['music_playlist'])) {

		$music_titre = htmlspecialchars($_POST['music_titre']);
		$music_link = htmlspecialchars($_POST['music_link']);
		$music_playlist = htmlspecialchars($_POST['music_playlist']);

		$ins = $bdd->prepare('INSERT INTO music (titre, playlist, link, date_time_publication) VALUES (?, ?, ?, NOW())');
		$ins->execute(array($music_titre, $music_playlist, $music_link));

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
	<title>Music-app | Nouvelle musique</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300&display=swap" rel="stylesheet">
</head>
<body style="font-family: Source Code Pro;" class="p-8 bg-[#202020]">

	<a href=index.php><h1 class="text-white text-[25px] font-bold mb-5">Music-app</h1></a>

	<form method="post">
		
		<input type="text" name="music_titre" placeholder="Titre de la musique" class="border border-gray-300 w-[50vh] h-[8vh] p-3"><br>

		<select name="music_playlist" class="border border-gray-300 w-[50vh] h-[8vh] p-3 mt-3">
			<?php while($b = $playlist->fetch()) { ?>
		    <option value="<?= $b['libelle'] ?>"><?= $b['nom'] ?></option>
			<?php } ?>
		</select><br>

		<textarea name="music_link" placeholder="Lien vers la musique" class="border border-gray-300 w-[50vh] h-[15vh] mt-3 p-3"></textarea><br>

		<input type="submit" value="Ajouter la musique" class="px-4 py-2 bg-blue-600 hover:bg-blue-500 transition-all text-white mt-3">

		<?php if(isset($message)) { echo $message; } ?>  

	</form>

</body>
</html>