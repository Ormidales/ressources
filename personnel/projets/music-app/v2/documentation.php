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