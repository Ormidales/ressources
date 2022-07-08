<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: connexion.php");
    exit(); 
  }
?>
<?php 
	
$bdd = new PDO("mysql:host=localhost;dbname=music-app;charset=utf8", "root", "");

$music = $bdd->query('SELECT * FROM music ORDER BY playlist');

$playlist = $bdd->query('SELECT * FROM playlist ORDER BY date_time_publication');

if(isset($_GET['supprimer-music']) AND !empty($_GET['supprimer-music'])){
	$supprime = (int) $_GET['supprimer-music'];
	$req = $bdd->prepare('DELETE FROM music WHERE id = ?');
	$req->execute(array($supprime));
	header('Location: index.php');
}

if(isset($_GET['supprimer-playlist']) AND !empty($_GET['supprimer-playlist'])){
	$supprimer_playlist = (int) $_GET['supprimer-playlist'];
	$req = $bdd->prepare('DELETE FROM playlist WHERE id = ?');
	$req->execute(array($supprimer_playlist));
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

	<style type="text/css">
		::-webkit-scrollbar {
		  width: 3px;
		}
		::-webkit-scrollbar-track {
		  background: #252525;
		  border-radius: 50vh;
		}
		::-webkit-scrollbar-thumb {
		  background-color: #353535;
		  border-radius: 50vh;
		}
	</style>
</head>
<body style="font-family: Source Code Pro;" class="p-8 bg-[#151515]">

	<div class="p-4 bg-[#252525] transition-all text-white sm:mr-3 mr-0 mb-3 sm:mb-0 rounded-lg shadow shadow-[#454545]/50 border border-white/10">

		Bienvenue <?php echo $_SESSION['username']; ?>!

		<a href="logout.php" class="px-4 py-2 bg-[#252525] hover:bg-[#353535] transition-all text-white sm:mr-3 mr-0 mb-3 sm:mb-0 rounded-lg shadow shadow-[#454545]/50 border border-white/10">Se déconnecter</a>

	</div>

	<a href=index.php><h1 class="text-white text-[25px] font-bold mb-5 mt-5">Music-app</h1></a>

	<div class="flex block items-center justify-between flex-wrap">
 
		<div class="flex items-center">
			
			<a href="music-new.php" class="px-4 py-2 bg-[#252525] hover:bg-[#353535] transition-all text-white sm:mr-3 mr-0 mb-3 sm:mb-0 rounded-lg shadow shadow-[#454545]/50 border border-white/10">Ajouter une musique</a>

			<a href="playlist-new.php" class="px-4 py-2 bg-[#252525] hover:bg-[#353535] transition-all text-white sm:mr-3 mr-0 mb-3 sm:mb-0 rounded-lg shadow shadow-[#454545]/50 border border-white/10">Ajouter une playlist</a>

			<input id="searchbar" onkeyup="search_animal()" type="text" name="search" placeholder="Chercher de la musique" class="w-[35vh] h-[3.8vh] px-3 rounded-lg shadow shadow-[#454545]/50 border border-white/10">

		</div>

		<div class="flex items-center">
			
			<a href="connexion.php" class="px-4 py-2 bg-[#252525] hover:bg-[#353535] transition-all text-white sm:mr-3 mr-0 mb-3 sm:mb-0 rounded-lg shadow shadow-[#454545]/50 border border-white/10">Se connecter</a>

			<a href="inscription.php" class="px-4 py-2 bg-[#252525] hover:bg-[#353535] transition-all text-white sm:mr-3 mr-0 mb-3 sm:mb-0 rounded-lg shadow shadow-[#454545]/50 border border-white/10">S'inscrire</a>

		</div>

	</div>

	<div class="w-full pt-3 pb-6 mt-5 flex items-center overflow-x-auto">

		<?php while($b = $playlist->fetch()) { ?>

		<div class="mr-6 w-[35vh] rounded-lg bg-[url('<?= $b['image_fond'] ?>')] bg-cover overflow-hidden group flex-none shadow shadow-[#454545]/50">

			<div class="w-full p-4 pb-14 flex items-start justify-between transition-all">
				
				<div class="w-[5vh] h-[5vh] flex items-center justify-center bg-white/5 backdrop-blur-md rounded-full border border-white/10">
					
					<svg xmlns="http://www.w3.org/2000/svg" class="h-[2.5vh] w-[2.5vh] text-white" viewBox="0 0 20 20" fill="currentColor">
					  	<path d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z" />
					</svg>

				</div>

				<div class="flex items-center">

					<a href="playlist.php?libelle=<?= $b['libelle'] ?>" class="w-[3vh] h-[3vh] flex items-center justify-center bg-white/5 backdrop-blur-md rounded-full opacity-0 group-hover:opacity-100 hover:bg-white/10 transition-all mr-3 m-0 border border-white/10" name="Voir la playlist" title="Voir la playlist">
					
						<svg xmlns="http://www.w3.org/2000/svg" class="h-[1.5vh] w-[1.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						  	<path stroke-linecap="round" stroke-linejoin="round" d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z" />
						</svg>

					</a>
					
					<a href="index.php?supprimer-playlist=<?= $b['id'] ?>" class="w-[3vh] h-[3vh] flex items-center justify-center bg-white/5 backdrop-blur-md rounded-full opacity-0 group-hover:opacity-100 hover:bg-white/10 transition-all m-0 border border-white/10" name="Supprimer la playlist" title="Supprimer la playlist">
					
						<svg xmlns="http://www.w3.org/2000/svg" class="h-[1.5vh] w-[1.5vh] text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						  	<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
						</svg>

					</a>

				</div>

			</div>

			<div class="w-full p-4 bg-white/5 backdrop-blur-md border-t border-white/10">
				
				<p class="text-[16px] text-white"><?= $b['nom'] ?> <span class=" mt-5 text-white text-[14px] py-1 px-3 rounded-lg bg-white/10 border border-white/25">@<?= $b['libelle'] ?></span></p>

			</div>

		</div>

		<?php } ?>

	</div>

	<div class="mt-8" id='list'>
		
	<?php while($a = $music->fetch()) { ?>

		<div class="w-full rounded-lg p-4 mt-3 bg-[#252525] hover:bg-[#353535] text-white transition-all md:flex md:items-center md:justify-between block animals shadow shadow-[#454545]/50 border border-white/10">

			<div class="flex items-center">

				<p class="text-[14px] transition-all"><?= $a['titre'] ?></p>
				
				<span class="ml-3 text-green-300 text-[14px] py-1 px-3 rounded-lg bg-green-300/5 border border-green-300/10">@<?= $a['playlist'] ?></span>

			</div>

			<div class="flex items-center flex-wrap md:mt-0 mt-3 md:gap-0 gap-3">

				<form action="" method="post">
					
					<input data-fancybox="<?= $a['id'] ?>" href="<?= $a['link'] ?>" data-caption="<?= $a['titre'] ?>" type="submit" name="nombre_ecoute" value="Écouter la musique" class="px-3 py-1 border border-white hover:bg-white/10 transition-all text-white mr-3 rounded-lg cursor-pointer">

				</form>

				<?php 

				if (isset($_POST['nombre_ecoute'])) {

					$nombre_ecoute = $a['nombre_ecoute'];

					$nombre_ecoute++;

					$ins = $bdd->prepare('INSERT INTO music (nombre_ecoute) VALUES (?)');
					$ins->execute(array($nombre_ecoute));

				}

				?>
				
				<a href="music-edit.php?id=<?= $a['id'] ?>" class="px-3 py-1 border border-white hover:bg-white/10 transition-all text-white mr-3 rounded-lg">Modifier</a>

				<a href="index.php?supprimer-music=<?= $a['id'] ?>" class="px-3 py-1 border border-white hover:bg-white/10 transition-all text-white rounded-lg">Supprimer</a>

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