<?php 
	
$bdd = new PDO("mysql:host=localhost;dbname=music-app;charset=utf8", "root", "");

$music = $bdd->query('SELECT * FROM music ORDER BY playlist');

$playlist = $bdd->query('SELECT * FROM playlist ORDER BY date_time_publication');

if(isset($_GET['supprimer']) AND !empty($_GET['supprimer'])){
	$supprime = (int) $_GET['supprimer'];
	$req = $bdd->prepare('DELETE FROM music WHERE id = ?');
	$req->execute(array($supprime));
	header('Location: index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Music-app | Accueil</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
</head>
<body style="font-family: Source Code Pro;" class="p-8 bg-[#1A3C40]">

	<a href=index.php><h1 class="text-white text-[25px] font-bold mb-5">Music-app</h1></a>

	<div class="flex items-center flex-wrap">
		
		<a href="music-new.php" class="px-4 py-2 bg-[#1D5C63] hover:bg-[#417D7A] transition-all text-white mr-3">Ajouter une musique</a>

		<a href="playlist-new.php" class="px-4 py-2 bg-[#1D5C63] hover:bg-[#417D7A] transition-all text-white mr-3">Ajouter une playlist</a>

		<input id="searchbar" onkeyup="search_animal()" type="text" name="search" placeholder="Chercher de la musique" class="w-[35vh] h-[3.8vh] px-3">

	</div>

	<div class="w-full py-3 mt-5 flex items-center flex-wrap">

		<?php while($b = $playlist->fetch()) { ?>
		
		<!--<a href="playlist.php?libelle=<?= $b['libelle'] ?>"><div class="w-[38vh] h-[25vh] p-4 bg-[#1D5C63] hover:bg-[#417D7A] transition-all mr-3">
			
			<p class="text-white text-[14px]"><?= $b['nom'] ?></p>

			<p class="text-white text-[12px] mt-2"><?= $b['commentaire'] ?></p>

		</div></a>-->

		<a href="playlist.php?libelle=<?= $b['libelle'] ?>" class="mr-3"><div class="w-[35vh] rounded-lg bg-[url('<?= $b['image_fond'] ?>')] bg-cover overflow-hidden">

			<div class="w-full p-4 pb-14">
				
				<div class="w-[5vh] h-[5vh] flex items-center justify-center bg-white/5 backdrop-blur-md rounded-full">
					
					<svg xmlns="http://www.w3.org/2000/svg" class="h-[2.5vh] w-[2.5vh] text-white" viewBox="0 0 20 20" fill="currentColor">
					  	<path d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z" />
					</svg>

				</div>

			</div>

			<div class="w-full p-4 bg-white/5 backdrop-blur-md">
				
				<p class="text-[16px] text-white"><?= $b['nom'] ?></p>

				<p class="text-[12px] text-gray-300"><?= $b['libelle'] ?></p>

			</div>

		</div></a>

		<?php } ?>

	</div>

	<div class="mt-5" id='list'>
		
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