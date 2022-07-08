<?php 
	
$bdd = new PDO("mysql:host=localhost;dbname=music-app;charset=utf8", "root", "");

$edit_id = htmlspecialchars($_GET['id']);

if(isset($_GET['id']) AND !empty($_GET['id'])){
	
	$musicObject = $bdd->prepare('SELECT * FROM music WHERE id = ?');
	$musicObject->execute(array($edit_id));

	if($musicObject->rowCount() == 1){
		$musicObject = $musicObject->fetch();
		$musicId = $musicObject['id'];
		$musicTitre = $musicObject['titre'];
		$musicPlaylist = $musicObject['playlist'];
		$musicLink = $musicObject['link'];
		$musicDatePublication = $musicObject['date_time_publication'];
	}
	else{
		die('Cette musique n\'existe pas !');
	}
}
else{
	die('Erreur');
}

if (isset($_POST['music_titre'], $_POST['music_link'], $_POST['music_playlist'])) {
	if (!empty($_POST['music_titre']) AND !empty($_POST['music_link']) AND !empty($_POST['music_playlist'])) {

		$music_titre = htmlspecialchars($_POST['music_titre']);
		$music_link = htmlspecialchars($_POST['music_link']);
		$music_playlist = htmlspecialchars($_POST['music_playlist']);

		$ins = $bdd->prepare('UPDATE music SET titre = ?, playlist = ?, link = ? WHERE id = ?');
		$ins->execute(array($music_titre, $music_playlist, $music_link, $musicId));

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
	<title>Music-app | Édition de musique</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300&display=swap" rel="stylesheet">
</head>
<body style="font-family: Source Code Pro;" class="p-8 bg-[#202020]">

	<a href=index.php><h1 class="text-white text-[25px] font-bold mb-5">Music-app</h1></a>

	<form method="post">
		
		<input type="text" name="music_titre" placeholder="Titre de la musique" value="<?= $musicTitre ?>" class="border border-gray-300 w-[50vh] h-[8vh] p-3"><br>

		<input type="text" name="music_playlist" placeholder="Playlist de la musique" value="<?= $musicPlaylist ?>" class="border border-gray-300 w-[50vh] h-[8vh] p-3 mt-3"><br>

		<textarea name="music_link" placeholder="Lien vers la musique" class="border border-gray-300 w-[50vh] h-[15vh] mt-3 p-3"><?= $musicLink ?>"</textarea><br>

		<input type="submit" value="Modifier la musique" class="px-4 py-2 bg-blue-600 hover:bg-blue-500 transition-all text-white mt-3">

		<?php if(isset($message)) { echo $message; } ?>  

	</form>

</body>
</html>