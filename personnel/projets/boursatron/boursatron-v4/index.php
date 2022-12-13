<?php 

$bdd = new PDO("mysql:host=localhost;dbname=boursatron_mercato;charset=utf8", "root", "");

$bulles = $bdd->query('SELECT * FROM mercato_bulle ORDER BY date_time_publication DESC');

$entreprises = $bdd->query('SELECT * FROM mercato_entreprise');

?>



<!DOCTYPE html>
<html lang="fr">
	<head>
		<!-- INFOS IMPORTANTES -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="theme-color" content="#317EFB"/>
		<link rel="apple-touch-icon" href="https://hugodoueil.fr/img/img-profile.webp">
		<link rel="icon" type="image/ico" href="https://hugodoueil.fr/img/img-profile.ico"/>
		<title>Boursatron - Mercato Time</title>

		<!-- DESCRIPTION DU SITE + FORMATS LIENS DANS LES RESEAUX SOCIAUX -->
		<meta name="title" content="Boursatron - Mercato Time">
		<meta name="description" content="Boursatron - Mercato Time">
		<meta name="keywords" content="Boursatron, boursatron, mercato, Mercato, Time, time, hugo, HUGO, Hugo, doueil, Doueil, DOUEIL, Hugo Doueil, hugo doueil, HUGO DOUEIL, portfolio, développement, dev, web, html, css, php, tailwind, tailwindcss, dev web, developpement, developpement web, bts, sio, 2022, 2023, BTS, SIO, Pardailhan, pardailhan, saint, gaudens, SAINT, GAUDENS, Saint, Gaudens, Saint-Gaudens, saint-gaudens, villeneuve, rivière, VILLENEUVE, RIVIERE, Villeneuve, Rivière, Villeneuve de Rivière, 31800">
		<meta property="og:type" content="website">
		<meta property="og:url" content="">
		<meta property="og:title" content="Boursatron - Mercato Time">
		<meta property="og:description" content="Boursatron - Mercato Time">
		<meta property="og:image" content="https://hugodoueil.fr/img/bg.webp">
		<meta property="twitter:card" content="summary_large_image">
		<meta property="twitter:url" content="">
		<meta property="twitter:title" content="Boursatron - Mercato Time">
		<meta property="twitter:description" content="Boursatron - Mercato Time">
		<meta property="twitter:image" content="https://hugodoueil.fr/img/bg.webp">

		<script src="https://cdn.tailwindcss.com"></script>

		<!-- UIkit CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.8/dist/css/uikit.min.css" />

		<!-- UIkit JS -->
		<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.8/dist/js/uikit.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/uikit@3.15.8/dist/js/uikit-icons.min.js"></script>

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

		<style type="text/css">
			
			table, th, td {
			  	border:1px solid white;
			}

		</style>
	</head>
	<body style="font-family: Poppins;">

		<div class="p-8 bg-stone-900">
			
			<p class="text-white text-[50px]">BOURSATRON - MERCATO</p>

		</div>

		<div class="p-8 bg-stone-800">
			
			<div class="uk-overflow-auto uk-padding text-white">
			    <table class="uk-table uk-table-small uk-table-divider">
			        <thead>
			            <tr>
			                <th>Entreprise qui rachète</th>
			                <th>Entreprise rachetée</th>
			                <th>Montant du Deal (€)</th>
			                <th>Tag</th>
			                <th>Statut du Deal</th>
			                <th>Actions</th>
			            </tr>
			        </thead>
			        <tbody>
			        	<?php while($bulle = $bulles->fetch()) { ?>
			            <tr class="hover:bg-stone-700/50">
				            <td class="px-6 py-4">
				            	<img src="<?= $bulle['entreprise_1_logo'] ?>" class="h-8">
				            	<p class="text-white text-[15px] mt-1"><?= $bulle['entreprise_1'] ?></p>
				            </td>
				            <td class="px-6 py-4">
				            	<img src="<?= $bulle['entreprise_2_logo'] ?>" class="h-8">
				            	<p class="text-white text-[15px] mt-1"><?= $bulle['entreprise_2'] ?></p>
				            </td>
				            <td class="px-6 py-4"><?= $bulle['montant'] ?> €</td>
				            <td class="px-6 py-4"><?= $bulle['tag'] ?></td>
				            <td class="px-6 py-4"><span class="uk-label uk-label-<?= $bulle['validation'] ?>"><?= $bulle['validation_2'] ?></span></td>
				            <td class="px-6 py-4">

				            	<p>
								    <button class="uk-button uk-button-primary">Modifier</button>
								    <button class="uk-button uk-button-danger">Supprimer</button>
								</p>

				            </td>
				        </tr>
				        <?php } ?>
			        </tbody>
			    </table>
			</div>

		</div>
		
	</body>
</html>
				        