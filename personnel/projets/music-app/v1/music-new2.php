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

		header('Location: index2.php');

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
	<body style="font-family: Source Code Pro;" class="bg-gray-700">

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

			<div class="md:p-20 p-8 flex items-center justify-center">
				
				<div class="p-4 w-[60vh] bg-gray-800 rounded-lg border border-gray-700 shadow-md sm:p-6 lg:p-8">
			    <form class="space-y-6" method="POST">
			        <h5 class="text-xl font-medium text-gray-900 dark:text-white">Ajouter une musique</h5>
			        <div>
			            <label for="music_titre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nom de la musique :</label>
			            <input type="text" name="music_titre" placeholder="Titre de la musique" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
			        </div>
			        <div>
			        	<label for="music_playlist" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Playlist de la musique :</label>
			        	<select name="music_playlist" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
									<?php while($b = $playlist->fetch()) { ?>
								    <option value="<?= $b['libelle'] ?>"><?= $b['nom'] ?></option>
									<?php } ?>
								</select><br>
			        </div>
			        <div>
			            <label for="music_link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Lien vers la musique :</label>
			            <textarea name="music_link" placeholder="Lien vers la musique" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required></textarea><br>
			        </div>
			        <input type="submit" value="Ajouter la musique" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
			    </form>
				</div>

			</div>

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