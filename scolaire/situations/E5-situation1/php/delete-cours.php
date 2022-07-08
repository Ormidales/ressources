<?php

$host = 'localhost';
$dbname = 'situation-1';
$username = 'root';
$password = '';

$get_id = ($_GET['id']);

$dsn = "mysql:host=$host;dbname=$dbname";
// récupérer tous les utilisateurs
$sql = "DELETE FROM cours WHERE id = $get_id ";

try {
  $pdo = new PDO($dsn, $username, $password);
  $stmt = $pdo->query($sql);

  header('Location: index.php');
  
  if ($stmt === false) {
    die("Erreur");
  }
} catch (PDOException $e) {
  echo $e->getMessage();
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Cours de passage | Édition d'un cours</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=9" />
		<script src="https://cdn.tailwindcss.com"></script>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

		<style type="text/css">
				
			::-webkit-scrollbar {
			  	width: 5px;
			}
			::-webkit-scrollbar-track {
			  	background: rgba(255, 255, 255, 0.15);
			}
			::-webkit-scrollbar-thumb {
			  	background-color: rgba(255, 255, 255, 0.30);
			}

		</style>
	</head>
	<body style="font-family: Source Code Pro;">

		<div class="w-full h-screen bg-[#1c1c1c] flex items-center justify-center">
			
			<div class="w-[60vh] px-8 py-6 bg-[#252525] border border-zinc-700 animate__animated animate__fadeInDown">

				<div class="w-full flex items-center justify-between border-b border-zinc-700 mb-4 pb-4">
					
					<p class="text-white text-[18px]">Cours de passage</p>

					<a href="index.php"><div class="px-4 py-2 border text-white text-[12px] border-white hover:bg-white/10 transition-all cursor-pointer hover:scale-95 transition-all">Page d'accueil</div></a>

				</div>
				
				<div class="flex items-center">
					
					<p class="text-white text-[18px]">Supprimer le cours</p>

				</div>

				<form class="mt-5" method="POST" action="">

					<input type="submit" id="deleteCours_submit" name="deleteCours_submit" value="Etes vous sur de supprimer ce cours" class="mt-3 w-full h-[5vh] text-white text-[16px] bg-red-600 hover:bg-red-500 transition-all">

				</form>

			</div>

		</div>

	</body>
</html>