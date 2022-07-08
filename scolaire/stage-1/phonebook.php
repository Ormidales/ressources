<?php
require(dirname(__FILE__) . '/config.php');
$DB = new Db(DBHost, DBName, DBUser, DBPassword);
$CC = new Customers($DB);
$userId = $_GET['userId'];


$bdd = new PDO('mysql:host=127.0.0.1;dbname=asterisk', 'root', '');
if(isset($_POST['BlockAjouterConfirmer']))
{
    $nomClient = htmlspecialchars($_POST['BlockAjouterNom']);
    $numeroFixe = htmlspecialchars($_POST['BlockAjouterNF']);
    $numeroPortable = htmlspecialchars($_POST['BlockAjouterNP']);
    $numeroTravail = htmlspecialchars($_POST['BlockAjouterNT']);
    $sonnerie = htmlspecialchars($_POST['BlockAjouterSonnerie']);

    if(!empty($_POST['BlockAjouterNom']) AND !empty($_POST['BlockAjouterNF']) AND !empty($_POST['BlockAjouterNP']) AND !empty($_POST['BlockAjouterNT']) AND !empty($_POST['BlockAjouterSonnerie']))
    {
        $insertmbr = $bdd->prepare("INSERT INTO phone_book(name, home_phone, mobile_phone, work_phone, ring_tone) VALUES (?, ?, ?, ?, ?)");
        $insertmbr->execute(array($nomClient, $numeroFixe, $numeroPortable, $numeroTravail, $sonnerie));
        header("Location: index.php");
    }
}

//if(isset($_POST['BlockLienConfirmer']))
//{
//    $IDTABLE = htmlspecialchars($_POST['BlockLienIDTABLE']);
//    $IDCLIENT = htmlspecialchars($_POST['BlockLienIDCLIENT']);
//
//    if(!empty($_POST['BlockLienIDTABLE']) AND !empty($_POST['BlockLienIDCLIENT']))
//    {
//        $insertmbr = $bdd->prepare("INSERT INTO user_phonebook(id_cli, id_phonebook) SELECT VALUES (id_cli = $IDTABLE, id_phonebook = $IDCLIENT");
//        $insertmbr->execute(array($IDTABLE, $IDCLIENT));
//        header("Location: index.php");
//    }
//}

if(isset($_POST['BlockSupprimerValidation1']))
{
    $supprimerID->deletePhoneBook($line['id']);
    $supprimerID->execute();
    header("Location: index.php");
}
?>

<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gestion des répertoires</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <!--<link href="https://unpkg.com/@primer/css@^16.0.0/dist/primer.css" rel="stylesheet" />-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />  
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
    </head>
    <body>
        <main class="container" style="margin-top: 8vh; margin-bottom: 8vh;">
            <div class="row">
                <section class="col-12">
                    <a href="index.php"><button type="button" class="btn btn-primary btn-sm" style="margin-bottom: 3vh;"><i class="bi bi-arrow-left-circle" style="margin-right: 1vh;"></i>Retour à la liste des clients</button></a>
                    <h1 style="margin-bottom: 3vh;"><i class="bi bi-folder" style="margin-right: 2vh;"></i>Répertoire de <?= $CC->getName($userId)?></h1>
                    <div class="btn-group" role="group" aria-label="Basic example" style="margin-bottom: 3vh;">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ajouter"><i class="bi bi-person-plus" style="margin-right: 1vh;"></i>Ajouter un contact</button>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#lien"><i class="bi bi-person" style="margin-right: 1vh;"></i>Lier un contact</button>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#copier"><i class="bi bi-clipboard" style="margin-right: 1vh;"></i>Copier un contact</button>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modify1"><i class="bi bi-gear" style="margin-right: 1vh;"></i>Modifier un contact</button>
                    </div>
                    <table class="table table-striped table-dark" style="border-radius: 1.5vh; overflow: hidden;">
                        <thead>
                            <th scope="col">(id) #</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Numéro Fixe</th>
                            <th scope="col">Numéro Portable</th>
                            <th scope="col">Numéro Travail</th>
                            <th scope="col">Sonnerie</th>
                        </thead>
                        <tbody>
                        <?php
                            $CC = new PhoneBook($DB);
                            $n = $CC->getRowNumber($userId);

                            $self = $_SERVER['REQUEST_URI'];

                            if(isset($_GET['page']) && !empty($_GET['page'])){
                                $currentPage = (int) strip_tags($_GET['page']);
                                $first = ($currentPage * PAGIN) - PAGIN;
                            }else{
                                $currentPage = 1;
                                $first = 0;
                            }

                            $nbPages = ceil($n/PAGIN);
        
                            $phoneBook = $CC->getPhoneBook($userId, $first);
                            //$CC->insertPhoneBook(array(1,2,3,4,5), 1);
                            foreach ($phoneBook as $line) {
                        ?>
                                <tr>
                                    <th scope="row">#&nbsp;<?= $line['id'] ?></td>
                                    <td><?= $userId ?></td>
                                    <td><?= $line['name'] ?></td>
                                    <td><?= $line['home_phone'] ?></td>
                                    <td><?= $line['mobile_phone'] ?></td>
                                    <td><?= $line['work_phone'] ?></td>
                                    <td><?= $line['ring_tone'] ?></td>
                                    <td><button type="button" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#delete1"><i class="bi bi-trash" style="margin-right: 1vh;"></i>Supprimer un contact</button></td>
                                </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
                                <a class="page-link" href="<?= $self ?>&page=<?= $currentPage - 1 ?>" tabindex="-1"><i class="bi bi-arrow-left-circle" style="margin-right: 1vh;"></i>Précédent</a>
                            </li>
                            <?php
                            for($i = 1; $i <= $nbPages; $i++){?>
                                <li class="page-item <?= ($currentPage == $i) ? "active" : "" ?>"><a class="page-link" href="<?= $self ?>&page=<?= $i ?>"><?= $i ?></a></li>
                            <?php
                            }
                            ?>
                            <li class="page-item <?= ($currentPage == $nbPages) ? "disabled" : "" ?>">
                                <a class="page-link" href="<?= $self ?>&page=<?= $currentPage + 1 ?>">Suivant<i class="bi bi-arrow-right-circle" style="margin-left: 1vh;"></i></a>
                            </li>
                        </ul>
                        </nav>
                </section>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="ajouter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ajouter un contact</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="display: flex; align-items: center; justify-content: center;">
                        <form method="POST" action="">
                            <br>
                            <div class="row">
                                <div class="col">
                                <input type="text" class="form-control" placeholder="Nom" name="BlockAjouterNom" id="BlockAjouterNom">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                <input type="text" class="form-control" placeholder="Numéro Fixe" name="BlockAjouterNF" id="BlockAjouterNF">
                                </div>
                                <div class="col">
                                <input type="text" class="form-control" placeholder="Numéro Portable" name="BlockAjouterNP" id="BlockAjouterNP">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                <input type="text" class="form-control" placeholder="Numéro Travail" name="BlockAjouterNT" id="BlockAjouterNT">
                                </div>
                                <div class="col">
                                <input type="text" class="form-control" placeholder="Sonnerie" name="BlockAjouterSonnerie" id="BlockAjouterSonnerie">
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary" name="BlockAjouterConfirmer" id="BlockAjouterConfirmer">Confirmer l'ajout</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                    </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="lien" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-gear" style="margin-right: 1vh;"></i>Lier un contact</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="">
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label>ID de la table</label>
                                    <input type="text" class="form-control" placeholder="ID de la table" name="BlockLienIDTABLE" id="BlockLienIDTABLE">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label>ID du client</label>
                                    <input type="text" class="form-control" placeholder="ID du client" name="BlockLienIDCLIENT" id="BlockLienIDCLIENT">
                                </div>
                            </div>
                            <br>
                            <button type="button" class="btn btn-primary" name="BlockLienConfirmer" id="BlockLienConfirmer">Confirmer la Liaison</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                    </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="copier" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-clipboard" style="margin-right: 1vh;"></i>Copier le contact</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <?php 
                    $phoneBook = $CC->getPhoneBook($userId, $first);
                    foreach ($phoneBook as $line) {  
                    ?>
                    <div class="modal-body">
                        <hr>
                        <h4 style="margin-bottom: 2vh;"><?php echo $line['name']; ?> :</h4>
                        <hr>
                        <label>Nom du contact :</label>
                        <input type="text" class="form-control" value="<?php echo $line['name']; ?>">
                        <br>
                        <label>Téléphone Fixe :</label>
                        <input type="text" class="form-control" value="<?php echo $line['home_phone']; ?>">
                        <br>
                        <label>téléphone Mobile :</label>
                        <input type="text" class="form-control" value="<?php echo $line['mobile_phone']; ?>">
                        <br>
                        <label>Téléphone Travail :</label>
                        <input type="text" class="form-control" value="<?php echo $line['work_phone']; ?>">
                        <br>
                        <label>Sonnerie :</label>
                        <input type="text" class="form-control" value="<?php echo $line['ring_tone']; ?>">
                        <br>
                    </div>
                    <?php } ?>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                    </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modify1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-gear" style="margin-right: 1vh;"></i>Modifier le contact</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="display: flex; align-items: center; justify-content: center;">
                        <form method="POST" action="">
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label>ID du client à modifier</label>
                                    <input type="text" class="form-control" placeholder="ID du client a modifier" name="BlockModifierID" id="BlockModifierID">
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#modify2" id="BlockModifierValidation1" name="BlockModifierValidation1">Valider</button>
                            <br>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                    </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modify2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-gear" style="margin-right: 1vh;"></i>Modifier le contact</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label>Nom du contact</label>
                                    <input type="text" class="form-control" value="<?php echo $line['name']; ?>">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label>Téléphone Fixe</label>
                                    <input type="text" class="form-control" value="<?php echo $line['home_phone']; ?>">
                                </div>
                                <div class="col">
                                    <label>Téléphone Mobile</label>
                                    <input type="text" class="form-control" value="<?php echo $line['mobile_phone']; ?>">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label>Téléphone Travail</label>
                                    <input type="text" class="form-control" value="<?php echo $line['work_phone']; ?>">
                                </div>
                                <div class="col">
                                    <label>Sonnerie</label>
                                    <input type="text" class="form-control" value="Sonnerie n°<?php echo $line['ring_tone']; ?>">
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-primary">Confirmer la modification</button>
                    </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="delete1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-trash" style="margin-right: 1vh;"></i>Supprimer le contact</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="display: flex; align-items: center; justify-content: center;">
                        <form method="POST" action="#">
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label>Confirmation de la suppression du contact</label>
                                </div>
                            </div>
                            <br>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger" data-dismiss="modal" id="BlockSupprimerValidation1" name="BlockSupprimerValidation1">Confirmer la suppression</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Annuler</button>
                    </div>
                    </div>
                </div>
            </div>

        </main>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script>
        $('#exampleModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
        </script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
    </body>
</html>