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
		<title>Music-app | Création d'un compte</title>
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
			
			<nav class="bg-gray-800 px-2 sm:px-4 py-2.5 border-b border-gray-700">
			  <div class="container flex flex-wrap justify-between items-center mx-auto">
			  <a href="../index.php" class="flex items-center">
			      <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Music-app</span>
			  </a>
			  <div class="flex items-center md:order-2">
			      <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" type="button" data-dropdown-toggle="dropdown">
			        <span class="sr-only">Open user menu</span>
			        <img class="w-8 h-8 rounded-full" src="https://vetref.fr/wp-content/uploads/2021/02/blank-profile-picture-973460_640.png" alt="user photo">
			      </button>
			      <!-- Dropdown menu -->
			      <div class="hidden z-50 my-4 text-base list-none border border-gray-700 bg-gray-800 rounded divide-y divide-gray-700 shadow" id="dropdown">
			        <div class="py-3 px-4">
			          <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
			          <span class="block text-sm font-medium text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
			        </div>
			        <ul class="py-1" aria-labelledby="dropdown">
			          <li>
			            <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Mon profil</a>
			          </li>
			          <li>
			            <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Mes playlists</a>
			          </li>
			          <li>
			            <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Mes musiques</a>
			          </li>
			          <li>
			            <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Proposer une nouvelle playlist</a>
			          </li>
			          <li>
			            <a href="pages/new-music.php" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Proposer une nouvelle musique</a>
			          </li>
			        </ul>
			      </div>
			      <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
			      <span class="sr-only">Open main menu</span>
			      <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
			      <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
			    </button>
			  </div>
			  <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
			    <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
			      <li>
			        <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Accueil</a>
			      </li>
			      <li>
			        <a href="" class="block py-2 pr-4 pl-3 text-gray-700 rounded border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Playlists</a>
			      </li>
			      <li>
			        <a href="" class="block py-2 pr-4 pl-3 text-gray-700 rounded border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Musiques</a>
			      </li>
			      <li>
			        <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Prix</a>
			      </li>
			      <li>
			        <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
			      </li>
			    </ul>
			  </div>
			  </div>
			</nav>

			<div class="md:p-20 p-8 flex items-center justify-center">
				
				<div class="p-4 w-[60vh] bg-gray-800 rounded-lg border border-gray-700 shadow-md sm:p-6 lg:p-8">
			    <form class="space-y-6" method="POST">
			        <h5 class="text-xl font-medium text-gray-900 dark:text-white">Créer un compte</h5>
			        <div>
			            <label for="music_titre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nom de la musique :</label>
			            <input type="text" name="music_titre" placeholder="Titre de la musique" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
			        </div>
			        <div>
			            <label for="music_link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Lien vers la musique :</label>
			            <textarea name="music_link" placeholder="Lien vers la musique" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required></textarea><br>
			        </div>
			        <input type="submit" value="Ajouter la musique" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
			    </form>
				</div>

			</div>

			<?php include('../ressources/footer.php'); ?>

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