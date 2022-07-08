<?php 
	
$bdd = new PDO("mysql:host=localhost;dbname=music-app;charset=utf8", "root", "");

$playlist_id = htmlspecialchars($_GET['libelle']);

if(isset($_GET['libelle']) AND !empty($_GET['libelle'])){
	
	$playlistObject = $bdd->prepare('SELECT * FROM playlist WHERE libelle = ?');
	$playlistObject->execute(array($playlist_id));

	if($playlistObject->rowCount() == 1){
		$playlistObject = $playlistObject->fetch();
		$playlistId = $playlistObject['id'];
		$playlistNom = $playlistObject['nom'];
		$playlistLibelle = $playlistObject['libelle'];
		$playlistCommentaire = $playlistObject['commentaire'];
		$playlistDatePublication = $playlistObject['date_time_publication'];
		$playlistImageFond = $playlistObject['image_fond'];
	}
	else{
		die('Cette playlist n\'existe pas !');
	}
}
else{
	die('Erreur');
}

$music = $bdd->prepare('SELECT * FROM music WHERE playlist LIKE ? ORDER BY titre');
$music->execute(array($playlistLibelle));

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Music-app | Playlist</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
</head>
<body style="font-family: Source Code Pro;" class="p-8 bg-[#1A3C40]">

	<a href=index.php><h1 class="text-white text-[25px] font-bold mb-5">Music-app</h1></a>

	<div class="w-full p-4 bg-[#1D5C63]/50">

		<div class="w-full h-[45vh] bg-[url(<?= $playlistImageFond ?>)] bg-cover bg-center"></div>
		
		<h4 class="text-white text-[18px] mb-1 mt-3"><?= $playlistNom ?></h4>

		<p class="text-white text-[14px]">@<?= $playlistLibelle ?></p>

		<input id="searchbar" onkeyup="search_animal()" type="text" name="search" placeholder="Chercher de la musique" class="w-[35vh] h-[3.8vh] px-3 mt-3">

	</div>

	<div class="w-full bg-[#1D5C63]/50 p-5">

		<div id='list'>
		
			<?php while($a = $music->fetch()) { ?>

				<div class="w-full px-4 h-[8vh] mt-3 bg-[#1D5C63] hover:bg-[#417D7A] text-white transition-all md:flex md:items-center md:justify-between block group animals">
					
					<p class="text-[14px] group-hover:text-[16px] transition-all"><?= $a['titre'] ?></p>

					<div class="flex items-center flex-wrap md:mt-0 mt-3 md:gap-0 gap-3">

						<a data-fancybox="<?= $a['id'] ?>" href="<?= $a['link'] ?>" data-caption="<?= $a['titre'] ?>" class="px-2 py-1 group-hover:px-4 group-hover:py-2 border border-white hover:bg-white/10 transition-all text-white mr-3">Écouter la musique</a>
						
						<a href="music-edit.php?id=<?= $a['id'] ?>" class="px-2 py-1 group-hover:px-4 group-hover:py-2 border border-white hover:bg-white/10 transition-all text-white mr-3">Modifier</a>

						<a href="index.php?supprimer=<?= $a['id'] ?>" class="px-2 py-1 group-hover:px-4 group-hover:py-2 border border-white hover:bg-white/10 transition-all text-white">Supprimer</a>

					</div>

				</div>

			<?php } ?>

		</div>

	</div>

	<script type="text/javascript">
		
		// JavaScript code
		function search_animal() {
		    let input = document.getElementById('searchbar').value
		    input=input.toLowerCase();
		    let x = document.getElementsByClassName('animals');
		      
		    for (i = 0; i < x.length; i++) { 
		        if (!x[i].innerHTML.toLowerCase().includes(input)) {
		            x[i].style.display="none";
		        }
		        else {
		            x[i].style.display="flex";                 
		        }
		    }
		}

	</script>

	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
	<script>
	    //  JavaScript will go here
	</script>

</body>
</html>