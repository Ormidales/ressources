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
		<title>Hugo Doueil - Station</title>
		<meta name="title" content="Hugo Doueil | Portfolio 2022 | Auch, Lycée Pardailhan (32)">
		<meta name="description" content="Je m’appelle Hugo Doueil, je suis un étudiant de BTS SIO SLAM dans ma deuxième année au lycée Pardailhan à Auch, France. Je suis passionné par l’informatique et le développement Web et j’aimerai en faire mon métier.">

		<!-- Open Graph / Facebook -->
		<meta property="og:type" content="website">
		<meta property="og:url" content="https://hugodoueil-hugoos.netlify.app">
		<meta property="og:title" content="Hugo Doueil | Portfolio 2022 | Auch, Lycée Pardailhan (32)">
		<meta property="og:description" content="Je m’appelle Hugo Doueil, je suis un étudiant de BTS SIO SLAM dans ma deuxième année au lycée Pardailhan à Auch, France. Je suis passionné par l’informatique et le développement Web et j’aimerai en faire mon métier.">
		<meta property="og:image" content="ressources/images/portfolio.png">

		<!-- Twitter -->
		<meta property="twitter:card" content="summary_large_image">
		<meta property="twitter:url" content="https://hugodoueil-hugoos.netlify.app">
		<meta property="twitter:title" content="Hugo Doueil | Portfolio 2022 | Auch, Lycée Pardailhan (32)">
		<meta property="twitter:description" content="Je m’appelle Hugo Doueil, je suis un étudiant de BTS SIO SLAM dans ma deuxième année au lycée Pardailhan à Auch, France. Je suis passionné par l’informatique et le développement Web et j’aimerai en faire mon métier.">
		<meta property="twitter:image" content="ressources/images/portfolio.png">

		<script src="https://cdn.tailwindcss.com"></script>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />

		<style type="text/css">
			
			::-webkit-scrollbar {
			  width: 5px;
			}
			::-webkit-scrollbar-track {
			  background: rgba(255, 255, 255, 0.15);
			  border-radius: 50vh;
			}
			::-webkit-scrollbar-thumb {
			  background-color: rgba(255, 255, 255, 0.30);
			  border-radius: 50vh;
			}

		</style>
	</head>
	<body style="font-family: Poppins, sans-serif;" class="bg-[#151515]">

		<div class="w-full h-[100vh] md:overflow-hidden overflow-auto md:flex md:items-center block">
			
			<div class="md:w-[5%] md:h-[100vh] w-full md:p-0 p-5 bg-[#151515] border-r border-[#454545] flex md:flex-col items-center md:justify-start justify-evenly animate__animated animate__fadeInLeft">
				
				<a href="../index.php"><div class="w-[5vh] h-[5vh] border border-[#454545] rounded-md md:mt-5 mt-0 bg-white/5 flex items-center justify-center text-white hover:scale-95 hover:bg-white/10 transition-all shadow shadow-white/10">

					<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
					  	<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
					  	<path d="M11.354 4.646a.5.5 0 0 0-.708 0l-6 6a.5.5 0 0 0 .708.708l6-6a.5.5 0 0 0 0-.708z"/>
					</svg>

				</div></a>

				<a href="../portfolio"><div class="w-[5vh] h-[5vh] border border-[#454545] rounded-md md:mt-5 mt-0 bg-white/5 flex items-center justify-center text-white hover:scale-95 hover:bg-white/10 transition-all shadow shadow-white/10">
					
					<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
					  	<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
					  	<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
					</svg>

				</div></a>

				<a href="index.php"><div class="w-[5vh] h-[5vh] border border-[#454545] rounded-md md:mt-5 mt-0 bg-white/5 flex items-center justify-center text-white hover:scale-95 hover:bg-white/10 transition-all shadow shadow-white/10">
					
					<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
					  	<path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
					  	<path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
					</svg>

				</div></a>

				<a href="../music"><div class="w-[5vh] h-[5vh] border border-[#454545] rounded-md md:mt-5 mt-0 bg-white/5 flex items-center justify-center text-white hover:scale-95 hover:bg-white/10 transition-all shadow shadow-white/10">
					
					<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
					  	<path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/>
					  	<path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/>
					  	<path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/>
					</svg>

				</div></a>

				<a href="../search"><div class="w-[5vh] h-[5vh] border border-[#454545] rounded-md md:mt-5 mt-0 bg-white/5 flex items-center justify-center text-white hover:scale-95 hover:bg-white/10 transition-all shadow shadow-white/10">
					
					<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
					  	<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
					</svg>

				</div></a>

				<a href="../ressources"><div class="w-[5vh] h-[5vh] border border-[#454545] rounded-md md:mt-5 mt-0 bg-white/5 flex items-center justify-center text-white hover:scale-95 hover:bg-white/10 transition-all shadow shadow-white/10">
					
					<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
					  	<path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z"/>
					</svg>

				</div></a>

				<a href="../colors"><div class="w-[5vh] h-[5vh] border border-[#454545] rounded-md md:mt-5 mt-0 bg-white/5 flex items-center justify-center text-white hover:scale-95 hover:bg-white/10 transition-all shadow shadow-white/10">
					
					<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					  	<path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
					</svg>
					
				</div></a>

			</div>

			<div class="md:w-[95%] w-full h-[100vh] bg-[url('ressources/UnicornVectorGradient_13.jpg')] bg-cover bg-center animate__animated animate__fadeInDown p-8">
				
				<a href=index.php><h1 class="text-white text-[25px] font-bold mb-5">Music-app</h1></a>

					<div class="flex block items-center flex-wrap">
						
						<a href="music-new.php" class="px-4 py-2 bg-[#252525] hover:bg-[#353535] transition-all text-white sm:mr-3 mr-0 mb-3 sm:mb-0 rounded-lg shadow shadow-[#454545]/50 border border-white/10">Ajouter une musique</a>

						<a href="playlist-new.php" class="px-4 py-2 bg-[#252525] hover:bg-[#353535] transition-all text-white sm:mr-3 mr-0 mb-3 sm:mb-0 rounded-lg shadow shadow-[#454545]/50 border border-white/10">Ajouter une playlist</a>

						<input id="searchbar" onkeyup="search_animal()" type="text" name="search" placeholder="Chercher de la musique" class="w-[35vh] h-[3.8vh] px-3 rounded-lg shadow shadow-[#454545]/50 border border-white/10">

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