<?php 

$phrase = "ezljne rnk jrebg jr grnjg nrteuig tgjn troignt o er gnig ntr jkfnrej ber gerjk gbtrjg btr g";

$test1 = 30;
$test2 = 20;
$test3 = 10;
$test4 = 0;
$test5 = 5;

$CalcTest1 = $test1 * $test2;
$CalcTest2 = $test3 + $test2;

$tableau = ["prenom" => "hugo", "nom" => "doueil", "age" => "19", "localisation" => "villeneuve"];

?>

<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php 
            $longphrase = strlen($phrase);
            echo 'La phrase ci-dessous comporte ' . $longphrase . ' caractères :<br />' . $phrase . "<br><br>";
            echo "Dans la phrase en dessous, touts les B ont étaient remplacés par des P :" . "<br>";
            $ma_variable = str_replace('b', 'p', $phrase);
            echo $ma_variable . "<br><br>";
            echo "Dans la phrase en dessous, touts les mots sont mélangés :" . "<br>";
            $chaine = $ma_variable . "<br>";
            $chaine = str_shuffle($ma_variable);
            echo $chaine;
        ?>
        <p>Le résultat de la multiplication entre <?php echo $test1 ?> et <?php echo $test2 ?> est de <?php echo $CalcTest1 ?> !</p>
        <p>Le résultat de l'addition entre <?php echo $test3 ?> et <?php echo $test2 ?> est de <?php echo $CalcTest2 ?> !</p>

        <?php 
            var_dump($tableau);
        ?>

        <div style="width: 100%; height: 10vh;"></div>

        <form method="post">
            <input type='text' name="name" placeholder="Ton nom de famille..." style="background-color: white; border: 2px solid blue; font-family: Arial, sans-serif;"/>
            <input type='text' name="subname" placeholder="Ton prénom..." style="background-color: white; border: 2px solid green; font-family: Arial, sans-serif;"/>
            <input type='text' name="age" placeholder="Ton age..." style="background-color: white; border: 2px solid red; font-family: Arial, sans-serif;"/>
            <input type="submit" name="go" placeholder="Envoyer" style="background-color: yellow; color: black; border: 2px solid black;"/>
        </form>

        <?php
            if(isset($_REQUEST['name'])){
                        $name = $_REQUEST['name'];
                        if(isset($_REQUEST['subname'])){
                            $subname = $_REQUEST['subname'];
                            if(isset($_REQUEST['age'])){
                                $age = $_REQUEST['age'];
                                echo "Tu t'appelle ", $subname, " ", $name, " et tu as ", $age, " ans !";
                                echo "   [ Dernière connexion le ", date('d/m/Y h:i:s'), "]";
                            }
                        }
            }
        ?>

        <div style="width: 100%; height: 10vh;"></div>

        <?php phpinfo() ?>
    </body>
</html>