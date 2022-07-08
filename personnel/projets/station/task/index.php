<?php 

$bdd = new PDO("mysql:host=localhost;dbname=task-app;charset=utf8", "root", "");

$tasks = $bdd->query('SELECT * FROM task ORDER BY date_time_publication');

if (isset($_POST['task_submit'])) {
	if (!empty($_POST['task_nom']) AND !empty($_POST['task_dateLimite']) AND !empty($_POST['task_list'])) {

		$task_nom = htmlspecialchars($_POST['task_nom']);
		$task_dateLimite = htmlspecialchars($_POST['task_dateLimite']);
		$task_list = htmlspecialchars($_POST['task_list']);

		$ins = $bdd->prepare('INSERT INTO task (nom, date_time_publication, date_limite, list) VALUES (?, NOW(), ?, ?)');
		$ins->execute(array($task_nom, $task_dateLimite, $task_list));

		header('Location: index.php');

	}
	else{
		$message = 'Veuillez remplir tous les champs';
	}
}

if(isset($_GET['supprimer']) AND !empty($_GET['supprimer'])){
	$supprime = (int) $_GET['supprimer'];
	$req = $bdd->prepare('DELETE FROM task WHERE id = ?');
	$req->execute(array($supprime));
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

			<div class="md:w-[95%] w-full h-[100vh] bg-[url('ressources/UnicornVectorGradient_13.jpg')] bg-cover bg-center animate__animated animate__fadeInDown">
				
				<div class="w-full h-[100vh] p-4 flex justify-between" style="background: rgb(172,172,172); background: linear-gradient(130deg, rgba(172,172,172,1) 0%, rgba(255,255,255,1) 50%, rgba(103,103,103,1) 100%);">
			
					<div class="w-[15%] rounded-xl bg-white p-4 border border-black">
						
						<div class="w-full flex items-center justify-between text-black py-2 px-4 rounded-xl bg-white hover:bg-gray-200 transition-all">
							
							<div class="flex items-center">
								
								<div class="w-3 h-3 bg-blue-500 rounded-full mr-3"></div>

								<p class="text-[14px]">Accueil</p>

							</div>

							<p class="text-[14px] text-gray-600">12</p>

						</div>

						<div class="mt-3 w-full flex items-center justify-between text-black py-2 px-4 rounded-xl bg-white hover:bg-gray-200 transition-all">
							
							<div class="flex items-center">
								
								<div class="w-3 h-3 bg-green-500 rounded-full mr-3"></div>

								<p class="text-[14px]">Aujourd'hui</p>

							</div>

							<p class="text-[14px] text-gray-600">4</p>

						</div>

					</div>

					<div class="w-[83.5%] rounded-xl py-12 px-4 flex justify-center">
						
						<div class="w-[90%]">
							
							<div class="w-full flex">
								
								<div class="w-12 h-12 border-4 border-blue-500 rounded-full"></div>

								<div class="ml-5">
									
									<p class="text-[30px] text-black">Bienvenue dans l'accueil</p>

									<p class="text-[20px] text-gray-600">Nous sommes le samedi 23 avril 2022</p>

								</div>

							</div>

							<div class="w-full mt-8">

								<div class="w-full flex items-center border border-black rounded-xl">

									<form method="POST" class="w-full flex items-center border border-black rounded-xl">
										
										<input type="text" name="task_nom" placeholder="Nom de la tâche" class="w-1/4 pl-3 h-[5vh] rounded-l-xl border-r border-black">

										<input type="text" name="task_dateLimite" placeholder="Date limite de la tâche" class="w-1/4 pl-3 h-[5vh] border-r border-black">

										<input type="text" name="task_list" placeholder="Liste de la tâche" class="w-1/4 pl-3 h-[5vh] border-r border-black">

										<input type="submit" name="task_submit" value="Ajouter la tâche" class="w-1/4 h-[5vh] text-white bg-blue-500 hover:bg-blue-500/75 transition-all rounded-r-xl">

										<?php if(isset($message)) { echo $message; } ?> 

									</form>

								</div>

								<div class="w-full mt-6">

									<?php while($b = $tasks->fetch()) { ?>
									
									<div class="w-full flex items-center justify-between bg-white hover:bg-gray-100 rounded-xl transition-all px-6 py-2 border border-black mt-3">

										<div class="flex items-center">
											
											<p class="text-black text-[18px] mr-5"><?= $b['nom'] ?></p>

											<span class="text-black text-[14px] border border-black rounded-md px-2 py-1"><?= $b['date_time_publication'] ?></span>

										</div>

										<div class="flex items-center">

											<span class="text-black text-[14px] border border-black rounded-md px-2 py-1 mr-5"><?= $b['list'] ?></span>

											<span class="text-black text-[14px] border border-black rounded-md px-2 py-1 mr-5">Date limite : <?= $b['date_limite'] ?></span>

											<a href="index.php?supprimer=<?= $b['id'] ?>" class="px-2 py-1 group-hover:px-4 group-hover:py-2 bg-red-700 hover:bg-red-600 transition-all text-white rounded-md">Supprimer</a>

										</div>



									</div>

									<?php } ?>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</body>
</html>