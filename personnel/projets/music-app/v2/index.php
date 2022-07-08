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
	<body style="font-family: Source Code Pro;">

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
			  <a href="index.php" class="flex items-center">
			      <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Musica-app</span>
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
			            <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Ouvrir l'application web</a>
			          </li>
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

			<section class="text-white bg-gray-900">
			  <div class="max-w-screen-xl px-4 py-20 mx-auto lg:items-center lg:flex">
			    <div class="max-w-3xl mx-auto text-center">
			      <h1 class="text-3xl font-extrabold text-transparent sm:text-5xl bg-clip-text bg-gradient-to-r from-green-300 via-blue-500 to-purple-600">
			        Écouter de la musique.

			        <span class="sm:block">
			          La mettre dans une playlist.
			        </span>
			      </h1>

			      <p class="max-w-xl mx-auto mt-4 sm:leading-relaxed sm:text-xl">
			        Avec Music-app, ajouter et écouter vos musiques préférées, créer des playlists et faites vous des amis.
			      </p>

			      <div class="flex flex-wrap justify-center gap-4 mt-8">
			        <a class="block w-full px-12 py-3 text-sm font-medium text-white bg-blue-600 border border-blue-600 rounded sm:w-auto active:text-opacity-75 hover:bg-transparent hover:text-white focus:outline-none focus:ring transition-all" href="/get-started">
			          Inscription / Connexion
			        </a>

			        <a class="block w-full px-12 py-3 text-sm font-medium text-white border border-blue-600 rounded sm:w-auto hover:bg-blue-600 active:bg-blue-500 focus:outline-none focus:ring transition-all" href="documentation.php">
			          Documentation
			        </a>
			      </div>
			    </div>
			  </div>
			</section>

			<div class="bg-gray-900 flex items-center justify-center">

        <svg width="146" height="24" class="mr-5" viewBox="0 0 146 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 22.7391C3.2493 18.6212 9.36901 3.15474 13.1781 13.8771C13.5772 15.0005 14.5729 21.0983 15.773 21.2495C16.8445 21.3844 18.9903 7.78201 22.1436 5.98981C26.938 3.26488 28.4723 10.151 30.0999 13.0396C35.0639 21.8494 33.2842 15.9415 35.8594 9.90254C38.3383 4.0895 41.493 12.3267 42.889 14.4125C46.0529 19.1395 46.437 9.45775 49.1634 6.60421C51.8321 3.81116 54.3934 5.2678 55.9596 8.11779C59.2847 14.1687 59.9155 15.1943 62.2752 7.79515C65.2247 -1.45377 68.0072 10.2381 70.3173 13.4171C73.7248 18.1065 73.9382 1.87789 77.8068 2.98317C78.9914 3.32163 84.5475 17.5554 86.2093 13.9697C89.5418 6.77907 88.7822 9.75336 92.3498 16.1423C96.5607 23.6832 98.8714 6.9014 101.109 5.39262C103.359 3.87582 104.814 19.0214 109.258 8.66009C114.387 -3.29835 113.063 3.08672 118.261 10.2046C122.705 16.2905 123.024 -5.82656 127.697 3.19256C132.875 13.1865 134.911 9.78693 144.275 11.4333" stroke="white" stroke-width="2" stroke-linecap="round"></path>
        </svg>
      
        <svg width="146" height="24" class="mr-5" viewBox="0 0 146 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 22.7391C3.2493 18.6212 9.36901 3.15474 13.1781 13.8771C13.5772 15.0005 14.5729 21.0983 15.773 21.2495C16.8445 21.3844 18.9903 7.78201 22.1436 5.98981C26.938 3.26488 28.4723 10.151 30.0999 13.0396C35.0639 21.8494 33.2842 15.9415 35.8594 9.90254C38.3383 4.0895 41.493 12.3267 42.889 14.4125C46.0529 19.1395 46.437 9.45775 49.1634 6.60421C51.8321 3.81116 54.3934 5.2678 55.9596 8.11779C59.2847 14.1687 59.9155 15.1943 62.2752 7.79515C65.2247 -1.45377 68.0072 10.2381 70.3173 13.4171C73.7248 18.1065 73.9382 1.87789 77.8068 2.98317C78.9914 3.32163 84.5475 17.5554 86.2093 13.9697C89.5418 6.77907 88.7822 9.75336 92.3498 16.1423C96.5607 23.6832 98.8714 6.9014 101.109 5.39262C103.359 3.87582 104.814 19.0214 109.258 8.66009C114.387 -3.29835 113.063 3.08672 118.261 10.2046C122.705 16.2905 123.024 -5.82656 127.697 3.19256C132.875 13.1865 134.911 9.78693 144.275 11.4333" stroke="white" stroke-width="2" stroke-linecap="round"></path>
        </svg>

        <svg width="146" height="24" viewBox="0 0 146 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 22.7391C3.2493 18.6212 9.36901 3.15474 13.1781 13.8771C13.5772 15.0005 14.5729 21.0983 15.773 21.2495C16.8445 21.3844 18.9903 7.78201 22.1436 5.98981C26.938 3.26488 28.4723 10.151 30.0999 13.0396C35.0639 21.8494 33.2842 15.9415 35.8594 9.90254C38.3383 4.0895 41.493 12.3267 42.889 14.4125C46.0529 19.1395 46.437 9.45775 49.1634 6.60421C51.8321 3.81116 54.3934 5.2678 55.9596 8.11779C59.2847 14.1687 59.9155 15.1943 62.2752 7.79515C65.2247 -1.45377 68.0072 10.2381 70.3173 13.4171C73.7248 18.1065 73.9382 1.87789 77.8068 2.98317C78.9914 3.32163 84.5475 17.5554 86.2093 13.9697C89.5418 6.77907 88.7822 9.75336 92.3498 16.1423C96.5607 23.6832 98.8714 6.9014 101.109 5.39262C103.359 3.87582 104.814 19.0214 109.258 8.66009C114.387 -3.29835 113.063 3.08672 118.261 10.2046C122.705 16.2905 123.024 -5.82656 127.697 3.19256C132.875 13.1865 134.911 9.78693 144.275 11.4333" stroke="white" stroke-width="2" stroke-linecap="round"></path>
        </svg>
        
     </div>

			<section class="text-white bg-gray-900">
			  <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
			    <div class="max-w-lg mx-auto text-center">
			      <h2 class="text-3xl font-bold sm:text-4xl">Kickstart your marketing</h2>

			      <p class="mt-4 text-gray-300">
			        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur
			        aliquam doloribus nesciunt eos fugiat. Vitae aperiam fugit consequuntur
			        saepe laborum.
			      </p>
			    </div>

			    <div class="grid grid-cols-1 gap-8 mt-8 md:grid-cols-2 lg:grid-cols-3">
			      <a
			        class="block p-8 transition border border-gray-800 shadow-xl rounded-xl hover:shadow-blue-500/10 hover:border-blue-500/10"
			        href="/services/digital-campaigns"
			      >
			        <svg
			          xmlns="http://www.w3.org/2000/svg"
			          class="w-10 h-10 text-blue-500"
			          fill="none"
			          viewBox="0 0 24 24"
			          stroke="currentColor"
			        >
			          <path d="M12 14l9-5-9-5-9 5 9 5z" />
			          <path
			            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
			          />
			          <path
			            stroke-linecap="round"
			            stroke-linejoin="round"
			            stroke-width="2"
			            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
			          />
			        </svg>

			        <h3 class="mt-4 text-xl font-bold text-white">Digital campaigns</h3>

			        <p class="mt-1 text-sm text-gray-300">
			          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
			          possimus adipisci distinctio alias voluptatum blanditiis laudantium.
			        </p>
			      </a>

			      <a
			        class="block p-8 transition border border-gray-800 shadow-xl rounded-xl hover:shadow-blue-500/10 hover:border-blue-500/10"
			        href="/services/digital-campaigns"
			      >
			        <svg
			          xmlns="http://www.w3.org/2000/svg"
			          class="w-10 h-10 text-blue-500"
			          fill="none"
			          viewBox="0 0 24 24"
			          stroke="currentColor"
			        >
			          <path d="M12 14l9-5-9-5-9 5 9 5z" />
			          <path
			            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
			          />
			          <path
			            stroke-linecap="round"
			            stroke-linejoin="round"
			            stroke-width="2"
			            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
			          />
			        </svg>

			        <h3 class="mt-4 text-xl font-bold text-white">Digital campaigns</h3>

			        <p class="mt-1 text-sm text-gray-300">
			          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
			          possimus adipisci distinctio alias voluptatum blanditiis laudantium.
			        </p>
			      </a>

			      <a
			        class="block p-8 transition border border-gray-800 shadow-xl rounded-xl hover:shadow-blue-500/10 hover:border-blue-500/10"
			        href="/services/digital-campaigns"
			      >
			        <svg
			          xmlns="http://www.w3.org/2000/svg"
			          class="w-10 h-10 text-blue-500"
			          fill="none"
			          viewBox="0 0 24 24"
			          stroke="currentColor"
			        >
			          <path d="M12 14l9-5-9-5-9 5 9 5z" />
			          <path
			            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
			          />
			          <path
			            stroke-linecap="round"
			            stroke-linejoin="round"
			            stroke-width="2"
			            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
			          />
			        </svg>

			        <h3 class="mt-4 text-xl font-bold text-white">Digital campaigns</h3>

			        <p class="mt-1 text-sm text-gray-300">
			          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
			          possimus adipisci distinctio alias voluptatum blanditiis laudantium.
			        </p>
			      </a>

			      <a
			        class="block p-8 transition border border-gray-800 shadow-xl rounded-xl hover:shadow-blue-500/10 hover:border-blue-500/10"
			        href="/services/digital-campaigns"
			      >
			        <svg
			          xmlns="http://www.w3.org/2000/svg"
			          class="w-10 h-10 text-blue-500"
			          fill="none"
			          viewBox="0 0 24 24"
			          stroke="currentColor"
			        >
			          <path d="M12 14l9-5-9-5-9 5 9 5z" />
			          <path
			            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
			          />
			          <path
			            stroke-linecap="round"
			            stroke-linejoin="round"
			            stroke-width="2"
			            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
			          />
			        </svg>

			        <h3 class="mt-4 text-xl font-bold text-white">Digital campaigns</h3>

			        <p class="mt-1 text-sm text-gray-300">
			          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
			          possimus adipisci distinctio alias voluptatum blanditiis laudantium.
			        </p>
			      </a>

			      <a
			        class="block p-8 transition border border-gray-800 shadow-xl rounded-xl hover:shadow-blue-500/10 hover:border-blue-500/10"
			        href="/services/digital-campaigns"
			      >
			        <svg
			          xmlns="http://www.w3.org/2000/svg"
			          class="w-10 h-10 text-blue-500"
			          fill="none"
			          viewBox="0 0 24 24"
			          stroke="currentColor"
			        >
			          <path d="M12 14l9-5-9-5-9 5 9 5z" />
			          <path
			            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
			          />
			          <path
			            stroke-linecap="round"
			            stroke-linejoin="round"
			            stroke-width="2"
			            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
			          />
			        </svg>

			        <h3 class="mt-4 text-xl font-bold text-white">Digital campaigns</h3>

			        <p class="mt-1 text-sm text-gray-300">
			          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
			          possimus adipisci distinctio alias voluptatum blanditiis laudantium.
			        </p>
			      </a>

			      <a
			        class="block p-8 transition border border-gray-800 shadow-xl rounded-xl hover:shadow-blue-500/10 hover:border-blue-500/10"
			        href="/services/digital-campaigns"
			      >
			        <svg
			          xmlns="http://www.w3.org/2000/svg"
			          class="w-10 h-10 text-blue-500"
			          fill="none"
			          viewBox="0 0 24 24"
			          stroke="currentColor"
			        >
			          <path d="M12 14l9-5-9-5-9 5 9 5z" />
			          <path
			            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
			          />
			          <path
			            stroke-linecap="round"
			            stroke-linejoin="round"
			            stroke-width="2"
			            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
			          />
			        </svg>

			        <h3 class="mt-4 text-xl font-bold text-white">Digital campaigns</h3>

			        <p class="mt-1 text-sm text-gray-300">
			          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex ut quo
			          possimus adipisci distinctio alias voluptatum blanditiis laudantium.
			        </p>
			      </a>
			    </div>

			    <div class="mt-12 text-center">
			      <a
			        class="inline-flex items-center px-8 py-3 mt-8 text-white bg-blue-600 border border-blue-600 rounded hover:bg-transparent focus:outline-none focus:ring transition-all"
			        href="/get-started"
			      >
			        <span class="text-sm font-medium"> Inscription / Connexion </span>
              
			      </a>
			    </div>
			  </div>
			</section>

			<div class="space-y-4 bg-gray-800 md:p-20 p-8">
			  <details class="p-6 border-2 border-blue-500 bg-gray-800 group rounded" open>
			    <summary class="flex items-center justify-between cursor-pointer">
			      <p class="text-lg font-medium text-white">
			        Lorem ipsum dolor sit amet consectetur adipisicing?
			      </p>

			      <span
			        class="flex-shrink-0 ml-1.5 p-1.5 text-gray-900 bg-white rounded-full sm:p-3"
			      >
			        <svg
			          xmlns="http://www.w3.org/2000/svg"
			          class="flex-shrink-0 w-5 h-5 transition duration-300 group-open:-rotate-45"
			          viewBox="0 0 20 20"
			          fill="currentColor"
			        >
			          <path
			            fill-rule="evenodd"
			            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
			            clip-rule="evenodd"
			          />
			        </svg>
			      </span>
			    </summary>

			    <p class="mt-4 leading-relaxed text-gray-100">
			      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis
			      molestias culpa in, recusandae laboriosam neque aliquid libero nesciunt
			      voluptate dicta quo officiis explicabo consequuntur distinctio corporis
			      earum similique!
			    </p>
			  </details>

			  <details class="p-6 border-2 border-blue-500 bg-gray-800 group rounded">
			    <summary class="flex items-center justify-between cursor-pointer">
			      <p class="text-lg font-medium text-white">
			        Lorem ipsum dolor sit amet consectetur adipisicing?
			      </p>

			      <span
			        class="flex-shrink-0 ml-1.5 p-1.5 text-gray-900 bg-white rounded-full sm:p-3"
			      >
			        <svg
			          xmlns="http://www.w3.org/2000/svg"
			          class="flex-shrink-0 w-5 h-5 transition duration-300 group-open:-rotate-45"
			          viewBox="0 0 20 20"
			          fill="currentColor"
			        >
			          <path
			            fill-rule="evenodd"
			            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
			            clip-rule="evenodd"
			          />
			        </svg>
			      </span>
			    </summary>

			    <p class="mt-4 leading-relaxed text-gray-100">
			      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab hic veritatis
			      molestias culpa in, recusandae laboriosam neque aliquid libero nesciunt
			      voluptate dicta quo officiis explicabo consequuntur distinctio corporis
			      earum similique!
			    </p>
			  </details>
			</div>

			<?php include('ressources/footer.php'); ?>

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

	</body>
</html>