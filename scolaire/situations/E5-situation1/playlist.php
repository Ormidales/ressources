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
<body style="font-family: Source Code Pro;" class="p-8 bg-[#151515]">

	<a href=index.php><h1 class="text-white text-[25px] font-bold mb-5">Music-app</h1></a>

	<div class="w-full shadow shadow-[#454545]/50 rounded-lg overflow-hidden">
		
		<div class="w-full p-4 bg-[#252525]/50 rounded-t-lg">

			<div class="w-full h-[45vh] bg-[url(<?= $playlistImageFond ?>)] bg-cover bg-center rounded-lg shadow shadow-[#454545]/50"></div>
			
			<h4 class="text-white text-[18px] mb-2 mt-3"><?= $playlistNom ?><span class="ml-3 text-green-300 text-[14px] py-1 px-3 rounded-lg bg-green-300/5 border border-green-300/10">@<?= $playlistLibelle ?></span></h4>

			<p class="text-white text-[14px]"><?= $playlistCommentaire ?></p>

			<input id="searchbar" onkeyup="search_animal()" type="text" name="search" placeholder="Chercher de la musique" class="w-[35vh] h-[3.8vh] px-3 mt-3 rounded-lg">

		</div>

		<div class="w-full bg-[#252525]/50 p-5 rounded-b-lg">

			<div id='list'>
			
				<?php while($a = $music->fetch()) { ?>

					<div class="w-full rounded-lg p-4 mt-3 bg-[#252525] hover:bg-[#353535] text-white transition-all md:flex md:items-center md:justify-between block animals shadow shadow-[#454545]/50">
				
						<p class="text-[14px] transition-all"><?= $a['titre'] ?></p>

						<div class="flex items-center flex-wrap md:mt-0 mt-3 md:gap-0 gap-3">

							<a data-fancybox="<?= $a['id'] ?>" href="<?= $a['link'] ?>" data-caption="<?= $a['titre'] ?>" class="px-3 py-1 border border-white hover:bg-white/10 transition-all text-white mr-3 rounded-lg">Écouter la musique</a>
							
							<a href="music-edit.php?id=<?= $a['id'] ?>" class="px-3 py-1 border border-white hover:bg-white/10 transition-all text-white mr-3 rounded-lg">Modifier</a>

							<a href="index.php?supprimer-music=<?= $a['id'] ?>" class="px-3 py-1 border border-white hover:bg-white/10 transition-all text-white rounded-lg">Supprimer</a>

						</div>

					</div>

				<?php } ?>

			</div>

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