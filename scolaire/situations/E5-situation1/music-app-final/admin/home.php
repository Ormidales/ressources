<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: ../connexion.php");
    exit(); 
  }

  $bdd = new PDO("mysql:host=localhost;dbname=music-app;charset=utf8", "root", "");

  $music = $bdd->query('SELECT * FROM music ORDER BY nombre_ecoute DESC');

  if (isset($_POST['nombre_ecoute'])) {

    $nombre_ecoute = $a['nombre_ecoute'];

    $nombre_ecoute++;

    $ins = $bdd->prepare('UPDATE music SET nombre_ecoute = ? WHERE id = ?');
    $ins->execute(array($nombre_ecoute, ));

    header('Location: index.php');

  }
?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="../style.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
  </head>
  <body class="p-8">
    <div class="sucess">
    <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
    <p>C'est votre espace admin.</p>
    <a href="add_user.php">Ajouter un utilisateur</a> |  
    <a href="../logout.php">Déconnexion</a>
    </ul>
    </div>

    <p class="mt-8 text-white text-[25px]">Liste des musiques les plus écoutées :</p>

    <?php while($a = $music->fetch()) { ?>

    <div class="w-full rounded-lg p-4 mt-3 bg-[#252525] hover:bg-[#353535] text-white transition-all md:flex md:items-center md:justify-between block animals shadow shadow-[#454545]/50 border border-white/10">

      <div class="flex items-center">

        <p class="text-[14px] transition-all"><?= $a['titre'] ?></p>
        
        <span class="ml-3 text-green-300 text-[14px] py-1 px-3 rounded-lg bg-green-300/5 border border-green-300/10">@<?= $a['playlist'] ?></span>

      </div>

      <div class="flex items-center flex-wrap md:mt-0 mt-3 md:gap-0 gap-3">

        <form method="post" action="" >
          
          <input data-fancybox="<?= $a['id'] ?>" href="<?= $a['link'] ?>" data-caption="<?= $a['titre'] ?>" type="submit" name="nombre_ecoute" value="Écouter la musique" class="px-3 py-1 border border-white hover:bg-white/10 transition-all text-white mr-3 rounded-lg cursor-pointer">

        </form>
        
        <a href="../music-edit.php?id=<?= $a['id'] ?>" class="px-3 py-1 border border-white hover:bg-white/10 transition-all text-white mr-3 rounded-lg">Modifier</a>

        <a href="../index.php?supprimer-music=<?= $a['id'] ?>" class="px-3 py-1 border border-white hover:bg-white/10 transition-all text-white rounded-lg">Supprimer</a>

      </div>

    </div>

  <?php } ?>

  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
  <script>
      //  JavaScript will go here
  </script>
  </body>
</html>