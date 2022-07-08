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
		<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
		<title>Music-app | Accueil</title>
		<script src="https://cdn.tailwindcss.com"></script>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.4/dist/flowbite.min.css" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />

		<style type="text/css">
			.loader{
			  position: fixed;
			  height: 100vh;
			  width: 100%;
			  display: flex;
			  align-items: center;
			  justify-content: center;
			  background: #252525;
			  transition: all 0.5s;
			}
			.loader .ring{
			  height: 45px;
			  width: 45px;
			  border: 5px solid #ddd;
			  border-radius: 50%;
			  position: relative;
			  display: flex;
			  align-items: center;
			  justify-content: center;
			}
			.loader .ring:after{
			  position: absolute;
			  content: "";
			  height: 100%;
			  width: 100%;
			  border-radius: 50%;
			  border: 5px solid #ff3d00;
			  border-top-color: transparent;
			  animation: rotate 1.5s linear infinite;
			}
			@keyframes rotate {
			  100%{
			    transform: rotate(360deg);
			  }
			}
		</style>
	</head>
	<body style="font-family: Source Code Pro;" class="bg-gray-800">

		<div class="loader">
			<div class="block">
				
				<p class="text-lg text-white mb-5">Chargement de la page</p>

				<div class="flex items-center justify-center">
					
					<div class="ring"></div>

				</div>
			</div>
	    </div>

		<div class="w-full">
			
			<?php include('header.php'); ?>

			<section class="text-white bg-gray-900">
			  <div class="max-w-screen-xl px-4 py-24 mx-auto sm:px-6 lg:px-8">
			    <div class="max-w-lg mx-auto text-center">
			      <h2 class="text-3xl font-bold sm:text-4xl">Toutes les musiques disponibles</h2>

			      <p class="mt-4 text-gray-300">
			        Voici toutes les musiques disponible sur notre site.
			      </p>
			    </div>

			    <div class="grid grid-cols-1 gap-8 mt-12 md:grid-cols-2 lg:grid-cols-3">

			    	<?php while($a = $music->fetch()) { ?>
			      <div class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
						    <h5 class="mb text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?= $a['titre'] ?></h5>
						    <p class="font-normal text-gray-700 dark:text-gray-400">Proposé par @</p>
						    <p class="font-normal text-gray-700 dark:text-gray-400">Playlist <?= $a['playlist'] ?></p>
						    <a data-fancybox="<?= $a['id'] ?>" href="<?= $a['link'] ?>" data-caption="<?= $a['titre'] ?>" class="mt-3 inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
						        Écouter la musique
						        <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
						    </a>
						</div>
						<?php } ?>

			    </div>
			  </div>
			</section>

			<?php include('footer.php'); ?>

		</div>

		<script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
		<script>
       const loader = document.querySelector(".loader");
       window.onload = function(){
         setTimeout(function(){
           loader.style.opacity = "0";
           setTimeout(function(){
             loader.style.display = "none";
           }, 500);
         },1500);
       }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
		<script>
		    //  JavaScript will go here
		</script>

	</body>
</html>