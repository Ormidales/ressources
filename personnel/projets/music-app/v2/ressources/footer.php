<?php 

try
{
$bdd = new PDO("mysql:host=localhost;dbname=music-app;charset=utf8", "root", "");
$logoErreur = '<span class="w-3 h-3 bg-green-400 rounded-full"></span>';
$messageErreur = '<span class="font-medium text-green-400">Tous les services fonctionnent</span>';
}
catch (Exception $e)
{
$logoErreur = '<span class="w-3 h-3 bg-red-400 rounded-full"></span>';
$messageErreur = '<span class="font-medium text-red-400">Connection à la base de donnée impossible</span>';
}

?>
<footer class="bg-gray-800 border-t border-gray-700">
  <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">

    <div class="grid grid-cols-1 gap-8 mt-8 sm:grid-cols-2 lg:grid-cols-4">
        <div>
          <p class="font-medium text-white">
            Company
          </p>

          <nav class="flex flex-col mt-4 space-y-2 text-sm text-white">
            <a class="hover:opacity-75" href="pages/about.php"> A propos </a>
            <a class="hover:opacity-75" href="pages/team.php"> Team de développement </a>
            <a class="hover:opacity-75" href="pages/update.php"> Note de mises à jour </a>
            <a class="hover:opacity-75" href="pages/career.php"> Carrières </a>
          </nav>
        </div>

        <div>
          <p class="font-medium text-white">
            Services
          </p>

          <nav class="flex flex-col mt-4 space-y-2 text-sm text-white">
            <a class="hover:opacity-75" href="documentation.php"> Documentation </a>
            <a class="hover:opacity-75" href="help.php"> Aides </a>
          </nav>
        </div>

        <div>
          <p class="font-medium text-white">
            Liens utiles
          </p>

          <nav class="flex flex-col mt-4 space-y-2 text-sm text-white">
            <a class="hover:opacity-75" href="pages/contact.php"> Contact </a>
            <a class="hover:opacity-75" href="pages/faq.php"> FAQ </a>
          </nav>
        </div>

        <div>
          <p class="font-medium text-white">
            Légals
          </p>

          <nav class="flex flex-col mt-4 space-y-2 text-sm text-white">
            <a class="hover:opacity-75" href="legal/mentionslegales.php"> Mentions légales </a>
            <a class="hover:opacity-75" href="legal/plansite.php"> Plan du site </a>
            <a class="hover:opacity-75" href="legal/conditions.php"> Conditions et termes d'utilisations </a>
            <a class="hover:opacity-75" href="legal/access.php"> Accessibilité </a>
          </nav>
        </div>
      </div>

    <div class="pt-8 mt-12 border-t border-gray-700 sm:items-center sm:justify-between sm:flex">
      <p class="text-xs text-white">
        &copy; 2022 Music-app Inc
      </p>

      <strong class="inline-flex items-center p-2 space-x-2 text-sm font-medium border border-gray-200 rounded">
        <span class="text-white"> Status: </span>

        <?= $logoErreur ?>

        <?= $messageErreur ?>
      </strong>
    </div>
  </div>
</footer>