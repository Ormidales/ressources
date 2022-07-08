<?php 

$bdd = new PDO("mysql:host=localhost;dbname=hugodoueil-station;charset=utf8", "root", "");

$palette_id = htmlspecialchars($_GET['id']);

if(isset($_GET['id']) AND !empty($_GET['id'])){
	
	$paletteObject = $bdd->prepare('SELECT * FROM colors_palettes WHERE id = ?');
	$paletteObject->execute(array($palette_id));

	if($paletteObject->rowCount() == 1){
		$paletteObject = $paletteObject->fetch();
		$paletteId = $paletteObject['id'];
		$paletteNom = $paletteObject['nom'];
		$paletteDatePublication = $paletteObject['date_time_publication'];
	}
	else{
		die('Cette playlist n\'existe pas !');
	}
}
else{
	die('Erreur');
}

$palettes = $bdd->query('SELECT * FROM colors_palettes ORDER BY date_time_publication');

$colors = $bdd->prepare('SELECT * FROM colors_colors WHERE palette LIKE ? ORDER BY date_time_publication');
$colors->execute(array($paletteNom));

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

				<a href="../../portfolio"><div class="w-[5vh] h-[5vh] border border-[#454545] rounded-md md:mt-5 mt-0 bg-white/5 flex items-center justify-center text-white hover:scale-95 hover:bg-white/10 transition-all shadow shadow-white/10">
					
					<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
					  	<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
					  	<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
					</svg>

				</div></a>

				<a href="#"><div class="w-[5vh] h-[5vh] border border-[#454545] rounded-md md:mt-5 mt-0 bg-white/5 flex items-center justify-center text-white hover:scale-95 hover:bg-white/10 transition-all shadow shadow-white/10">
					
					<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
					  	<path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
					  	<path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
					</svg>

				</div></a>

				<a href="#"><div class="w-[5vh] h-[5vh] border border-[#454545] rounded-md md:mt-5 mt-0 bg-white/5 flex items-center justify-center text-white hover:scale-95 hover:bg-white/10 transition-all shadow shadow-white/10">
					
					<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
					  	<path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/>
					  	<path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/>
					  	<path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/>
					</svg>

				</div></a>

				<a href="#"><div class="w-[5vh] h-[5vh] border border-[#454545] rounded-md md:mt-5 mt-0 bg-white/5 flex items-center justify-center text-white hover:scale-95 hover:bg-white/10 transition-all shadow shadow-white/10">
					
					<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
					  	<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
					</svg>

				</div></a>

				<a href="../../ressources"><div class="w-[5vh] h-[5vh] border border-[#454545] rounded-md md:mt-5 mt-0 bg-white/5 flex items-center justify-center text-white hover:scale-95 hover:bg-white/10 transition-all shadow shadow-white/10">
					
					<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
					  	<path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z"/>
					</svg>

				</div></a>

				<a href="../index.php"><div class="w-[5vh] h-[5vh] border border-[#454545] rounded-md md:mt-5 mt-0 bg-white/5 flex items-center justify-center text-white hover:scale-95 hover:bg-white/10 transition-all shadow shadow-white/10">
					
					<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
					  	<path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
					</svg>

				</div></a>

			</div>

			<div class="md:w-[16%] w-full md:h-[100vh] md:py-5 md:px-6 py-5 px-5 bg-[#151515] border-r border-[#454545] py-5 px-6 animate__animated animate__fadeInUp">
				
				<div class="w-full flex items-center">
					
					<a href="../index.php"><p class="text-white text-[20px] font-bold">Palettes de couleurs</p></a>

				</div>

				<div class="w-full border-t border-[#454545] mt-6 mb-6"></div>

				<div class="w-full flex items-center">
					
					<a href="../palette-new.php"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="text-gray-400 w-4 h-4 hover:text-white transition-all" viewBox="0 0 16 16">
					  	<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
					</svg></a>

				</div>

				<div class="w-full border-t border-[#454545] mt-6 mb-6"></div>

				<?php while($palette = $palettes->fetch()) { ?>

				<div class="w-full p-2 rounded-md bg-white/5 border border-[#454545] flex items-center justify-between hover:bg-white/10 transition-all mb-3 group">

					<div class="flex items-center">

						<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="text-gray-400 w-4 h-4 mr-2" viewBox="0 0 16 16">
						  	<path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
						</svg>
						
						<p class="text-gray-400 text-[11px]"><?= $palette['nom'] ?></p>

					</div>

					<div class="flex items-center">

						<a href="palette.php?id=<?= $palette['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" class="opacity-0 group-hover:opacity-100 text-gray-400 w-4 h-4 hover:text-white transition-all mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						  	<path stroke-linecap="round" stroke-linejoin="round" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg></a>

						<!--<a href="playlist-modification.php?id="><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="opacity-0 group-hover:opacity-100 text-gray-400 w-4 h-4 hover:text-white transition-all mr-2" viewBox="0 0 16 16">
						  	<path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
						  	<path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
						</svg></a>-->
						
						<a href="index.php?supprimer-palette=<?= $palette['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="opacity-0 group-hover:opacity-100 text-gray-400 w-4 h-4 hover:text-white transition-all" viewBox="0 0 16 16">
						  	<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
						  	<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
						</svg></a>

					</div>


				</div>

				<?php } ?>

			</div>

			<div class="md:w-[79%] w-full h-[100vh] bg-[#151515] grid grid-cols-1 gap-5 animate__animated animate__fadeInDown">

				<div class="w-full h-[5vh] border-b border-[#454545] flex items-center justify-between px-5">
					
					<p class="text-white text-[12px]">Palette de couleur /// <?= $paletteNom ?></p>

					<a href="../color-new.php"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="text-gray-400 w-4 h-4 hover:text-white transition-all" viewBox="0 0 16 16">
					  	<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
					</svg></a>

				</div>

				<div class="w-full overflow-y-auto">

					<?php while($color = $colors->fetch()) { ?>
						
					<p class="text-white text-[18px] mt-8 text-center">Palette : <?= $color['nom'] ?></p>
				
					<div class="w-full p-5 mt-5">

						<div class="flex items-center justify-center overflow-hidden">
						
							<div class="w-[10vh] h-[15vh] bg-[<?= $color['color1'] ?>] rounded-l-md flex items-center justify-center group overflow-hidden">

								<div class="p-2 bg-white rounded-md opacity-0 group-hover:opacity-100 transition-all shadow shadow-black/25">
									
									<p class="text-gray-900 text-[11px] text-center font-bold">50</p>

									<p class="text-gray-900 text-[11px] text-center font-bold"><?= $color['color1'] ?></p>

								</div>

							</div>

							<div class="w-[10vh] h-[15vh] bg-[<?= $color['color2'] ?>] flex items-center justify-center group overflow-hidden">
								
								<div class="p-2 bg-white rounded-md opacity-0 group-hover:opacity-100 transition-all shadow shadow-black/25">
									
									<p class="text-gray-900 text-[11px] text-center font-bold">100</p>

									<p class="text-gray-900 text-[11px] text-center font-bold"><?= $color['color2'] ?></p>

								</div>

							</div>

							<div class="w-[10vh] h-[15vh] bg-[<?= $color['color3'] ?>] flex items-center justify-center group overflow-hidden">
								
								<div class="p-2 bg-white rounded-md opacity-0 group-hover:opacity-100 transition-all shadow shadow-black/25">
									
									<p class="text-gray-900 text-[11px] text-center font-bold">200</p>

									<p class="text-gray-900 text-[11px] text-center font-bold"><?= $color['color3'] ?></p>

								</div>

							</div>

							<div class="w-[10vh] h-[15vh] bg-[<?= $color['color4'] ?>] flex items-center justify-center group overflow-hidden">
								
								<div class="p-2 bg-white rounded-md opacity-0 group-hover:opacity-100 transition-all shadow shadow-black/25">
									
									<p class="text-gray-900 text-[11px] text-center font-bold">300</p>

									<p class="text-gray-900 text-[11px] text-center font-bold"><?= $color['color4'] ?></p>

								</div>

							</div>

							<div class="w-[10vh] h-[15vh] bg-[<?= $color['color5'] ?>] flex items-center justify-center group overflow-hidden">
								
								<div class="p-2 bg-white rounded-md opacity-0 group-hover:opacity-100 transition-all shadow shadow-black/25">
									 
									<p class="text-gray-900 text-[11px] text-center font-bold">400</p>

									<p class="text-gray-900 text-[11px] text-center font-bold"><?= $color['color5'] ?></p>

								</div>

							</div>

							<div class="w-[10vh] h-[15vh] bg-[<?= $color['color6'] ?>] flex items-center justify-center group overflow-hidden">
								
								<div class="p-2 bg-white rounded-md opacity-0 group-hover:opacity-100 transition-all shadow shadow-black/25">
									
									<p class="text-gray-900 text-[11px] text-center font-bold">500</p>

									<p class="text-gray-900 text-[11px] text-center font-bold"><?= $color['color6'] ?></p>

								</div>

							</div>

							<div class="w-[10vh] h-[15vh] bg-[<?= $color['color7'] ?>] flex items-center justify-center group overflow-hidden">
								
								<div class="p-2 bg-white rounded-md opacity-0 group-hover:opacity-100 transition-all shadow shadow-black/25">
									
									<p class="text-gray-900 text-[11px] text-center font-bold">600</p>

									<p class="text-gray-900 text-[11px] text-center font-bold"><?= $color['color7'] ?></p>

								</div>

							</div>

							<div class="w-[10vh] h-[15vh] bg-[<?= $color['color8'] ?>] flex items-center justify-center group overflow-hidden">
								
								<div class="p-2 bg-white rounded-md opacity-0 group-hover:opacity-100 transition-all shadow shadow-black/25">
									
									<p class="text-gray-900 text-[11px] text-center font-bold">700</p>

									<p class="text-gray-900 text-[11px] text-center font-bold"><?= $color['color8'] ?></p>

								</div>

							</div>

							<div class="w-[10vh] h-[15vh] bg-[<?= $color['color9'] ?>] flex items-center justify-center group overflow-hidden">
								
								<div class="p-2 bg-white rounded-md opacity-0 group-hover:opacity-100 transition-all shadow shadow-black/25">
									
									<p class="text-gray-900 text-[11px] text-center font-bold">800</p>

									<p class="text-gray-900 text-[11px] text-center font-bold"><?= $color['color9'] ?></p>

								</div>

							</div>

							<div class="w-[10vh] h-[15vh] rounded-r-md bg-[<?= $color['color10'] ?>] flex items-center justify-center group overflow-hidden">
								
								<div class="p-2 bg-white rounded-md opacity-0 group-hover:opacity-100 transition-all shadow shadow-black/25">
									
									<p class="text-gray-900 text-[11px] text-center font-bold">900</p>

									<p class="text-gray-900 text-[11px] text-center font-bold"><?= $color['color10'] ?></p>

								</div>

							</div>

						</div>

						<div class="w-full flex items-center justify-center">
							
							<div class="p-5">

								<p class="text-white text-[13px] mb-2">Code à mettre dans le CSS :</p>
								
								<p class="text-white text-[11px]">--<?= $color['nom'] ?>-50: <?= $color['color1'] ?>;</p>

								<p class="text-white text-[11px]">--<?= $color['nom'] ?>-100: <?= $color['color2'] ?>;</p>

								<p class="text-white text-[11px]">--<?= $color['nom'] ?>-200: <?= $color['color3'] ?>;</p>

								<p class="text-white text-[11px]">--<?= $color['nom'] ?>-300: <?= $color['color4'] ?>;</p>

								<p class="text-white text-[11px]">--<?= $color['nom'] ?>-400: <?= $color['color5'] ?>;</p>

								<p class="text-white text-[11px]">--<?= $color['nom'] ?>-500: <?= $color['color6'] ?>;</p>

								<p class="text-white text-[11px]">--<?= $color['nom'] ?>-600: <?= $color['color7'] ?>;</p>

								<p class="text-white text-[11px]">--<?= $color['nom'] ?>-700: <?= $color['color8'] ?>;</p>

								<p class="text-white text-[11px]">--<?= $color['nom'] ?>-800: <?= $color['color9'] ?>;</p>

								<p class="text-white text-[11px]">--<?= $color['nom'] ?>-900: <?= $color['color10'] ?>;</p>

							</div>

						</div>

					</div>

					<div class="w-full border-t border-stone-700 mt-5"></div>

					<?php } ?>

				</div>

			</div>

		</div>

	</body>
</html>