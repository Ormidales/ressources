<?php
require(dirname(__FILE__) . '/config.php');
$DB = new Db(DBHost, DBName, DBUser, DBPassword);
$bdd = new PDO('mysql:host=127.0.0.1;dbname=asterisk', 'root', '');

// AJOUTER UNE ENTREPRISE
if(isset($_POST['BlockAjouterConfirmer']))
{
    $nomEntreprise = htmlspecialchars($_POST['BlockAjouterEntreprise']);
    $AjouterIDBIEN = htmlspecialchars($_POST['BlockAjouterIDBIEN']);
    $AjouterPass = htmlspecialchars($_POST['BlockAjouterPass']);
    $AjouterDCID = htmlspecialchars($_POST['BlockAjouterDCID']);
    $AjouterPCCID = htmlspecialchars($_POST['BlockAjouterPCCID']);
    $AjouterPCM = htmlspecialchars($_POST['BlockAjouterPCM']);
    $AjouterCG = htmlspecialchars($_POST['BlockAjouterCG']);
    $AjouterBN = htmlspecialchars($_POST['BlockAjouterBN']);
    $AjouterNTP = htmlspecialchars($_POST['BlockAjouterNTP']);
    $AjouterPP = htmlspecialchars($_POST['BlockAjouterPP']);

    if(!empty($_POST['BlockAjouterEntreprise']) AND !empty($_POST['BlockAjouterIDBIEN']) AND !empty($_POST['BlockAjouterPass']) AND !empty($_POST['BlockAjouterDCID']) AND !empty($_POST['BlockAjouterPCCID']) AND !empty($_POST['BlockAjouterPCM']) AND !empty($_POST['BlockAjouterCG']) AND !empty($_POST['BlockAjouterBN']) AND !empty($_POST['BlockAjouterNTP']) AND !empty($_POST['BlockAjouterPP']))
    {
        $insertmbr = $bdd->prepare("INSERT INTO g_users_spe(user, id_bien, pass, default_caller_id, permit_change_caller_id, permit_change_messages, conf_gen, bill_name, ntp, prov_phonebook) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $insertmbr->execute(array($nomEntreprise, $AjouterIDBIEN, $AjouterPass, $AjouterDCID, $AjouterPCCID, $AjouterPCM, $AjouterCG, $AjouterBN, $AjouterNTP, $AjouterPP));
        header("Location: index.php");
    }
}

// SUPPRIMER UNE ENTREPRISE -- NE MARCHE PAS
// if(isset($_GET['idf']))
// {
//    $deletembr = $bdd->prepare("DELETE FROM g_users_spe WHERE id = ?");
//    $deletembr->execute(array($idf));
//    header("Location: index.php");
// }
?>

<!DOCTYPE html>

<html lang="fr">
    <head>

        <!-- META -->    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- TITLE -->
        <title>Gestion des répertoires</title>
        
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <!-- BOOTSTRAP ICONS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        
        <!-- FONT AWESOME -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />  
        
        <!-- GOOGLE FONTS (Roboto) -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
        
        <!-- MD BOOTSTRAP UI -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />

    </head>
    <body>
        <main class="container" style="margin-top: 8vh; margin-bottom: 8vh;">
            <div class="row">
                <section class="col-12">
                    <p class="h1" style="margin-bottom: 3vh;"><i class="bi bi-bookmark-star" style="margin-right: 2vh;"></i>Liste des clients</p>
                    <div class="btn-group" role="group" aria-label="Basic example" style="margin-bottom: 3vh;">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ajouter"><i class="bi bi-person-plus" style="margin-right: 1vh;"></i>Ajouter un client</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#lien"><i class="bi bi-person" style="margin-right: 1vh;"></i>Lier un contact</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modify"><i class="bi bi-gear" style="margin-right: 1vh;"></i>Modifier un client</button>
                    </div>
                    <table class="table table-striped table-dark" style="border-radius: 1.5vh; overflow: hidden;">
                        <thead>
                            <th>(id) #</th>
                            <th>Entreprises</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                        <?php
                            $CC = new Customers($DB);
                            $groupedUsersId = array();
                            foreach (GROUPS as $group){
                                $groupedUsersId = array_merge($groupedUsersId, $group);
                            }

                            $customers = $CC->getCustomersWithPhonebook();
                            foreach ($customers as $customer) {
                                if(!in_array($customer['id'], $groupedUsersId)) {
                        ?>
                                <tr>
                                    <th scope="row">#&nbsp;<?= $customer['id'] ?></td>
                                    <td><?= $customer['user'] ?><span class="badge bg-primary" style="margin-left: 2vh;">ID : <?= $customer['id'] ?></span></td>
                                    <td>
                                        <a href='phonebook.php?userId=<?= $customer['id'] ?>' style="margin-right: 3vh;">
                                            <button type="button" class="btn btn-primary btn-sm"><i class="bi bi-person" style="margin-right: 1vh;"></i>Voir le client</button>
                                        </a>
                                        <a href='delete.php?userId=<?= $customer['id'] ?>'>
                                            <button type="submit" class="btn btn-outline-danger btn-sm" id="BoutonSupprimerLigne" name="BoutonSupprimerLigne"><i class="bi bi-trash" style="margin-right: 1vh;"></i>Supprimer un client</button>
                                        </a>
                                    </td>
                                </tr>
                        <?php
                                }
                            }
                        ?>
                        </tbody>
                    </table>
                </section>
                <br />
                <!--<section class="col-10">
                    <p>Associer un nouveau client à un groupe.</p>
                    <form>
                        <div class="form-group">
                            <label for="newId">ID client à rattacher:</label>
                            <input type="number" id="newId" name="newId" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="parentId">ID parent:</label>
                            <input type="number" id="parentId" name="parentId" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </form>
                </section>-->
            </div>
        </main>

            <!-- MODAL POUR AJOUTER UN CLIENT -->
            <div class="modal fade" id="ajouter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-person-plus" style="margin-right: 1vh;"></i>Ajouter un client</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="display: flex; align-items: center; justify-content: center;">
                        <form method="POST" action="">
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label>Nom de l'entreprise</label>
                                    <input type="text" class="form-control" placeholder="nom de l'entreprise" name="BlockAjouterEntreprise" id="BlockAjouterEntreprise">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label>id_bien :</label>
                                    <input type="text" class="form-control" placeholder="id_bien" id="BlockAjouterIDBIEN" name="BlockAjouterIDBIEN">
                                </div>
                                <div class="col">
                                    <label>pass :</label>
                                    <input type="text" class="form-control" placeholder="pass" id="BlockAjouterPass" name="BlockAjouterPass">
                                </div>
                                <div class="col">
                                <label>default_caller_id :</label>
                                    <input type="text" class="form-control" placeholder="default_caller_id" id="BlockAjouterDCID" name="BlockAjouterDCID">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label>permit_change_caller_id</label>
                                    <input type="text" class="form-control" placeholder="permit_change_caller_id" name="BlockAjouterPCCID" id="BlockAjouterPCCID">
                                </div>
                                <div class="col">
                                    <label>permit_change_messages</label>
                                    <input type="text" class="form-control" placeholder="permit_change_messages" name="BlockAjouterPCM" id="BlockAjouterPCM">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label>conf_gen</label>
                                    <input type="text" class="form-control" placeholder="conf_gen" name="BlockAjouterCG" id="BlockAjouterCG">
                                </div>
                                <div class="col">
                                    <label>bill_name</label>
                                    <input type="text" class="form-control" placeholder="bill_name" name="BlockAjouterBN" id="BlockAjouterBN">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label>ntp</label>
                                    <input type="text" class="form-control" placeholder="ntp" name="BlockAjouterNTP" id="BlockAjouterNTP">
                                </div>
                                <div class="col">
                                    <label>prov_phonebook</label>
                                    <input type="text" class="form-control" placeholder="prov_phonebook" name="BlockAjouterPP" id="BlockAjouterPP">
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

            <!-- MODAL POUR LIER UN CLIENT AVEC UN CONTACT -->
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
                        <form>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label>Nom du contact</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label>Téléphone Fixe</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col">
                                    <label>Téléphone Mobile</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label>Téléphone Travail</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col">
                                    <label>Sonnerie</label>
                                    <input type="text" class="form-control">
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

            <!-- MODAL POUR MODIFIER UN CONTACT -->
            <div class="modal fade" id="modify" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-gear" style="margin-right: 1vh;"></i>Modifier le client</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label>Nom du client</label>
                                    <input type="text" class="form-control" value="<?php echo $customer['user']; ?>">
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

        <!-- SCRIPT JQUERY -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        
        <!-- SCRIPT WEBCOMPONENTS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/webcomponentsjs/1.0.17/webcomponents-lite.js"></script>
        
        <!-- SCRIPT POPPER.MIN.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        
        <!-- SCRIPT BOOTSTRAP -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
        <!-- SCRIPT MD BOOTSTRAP UI -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>

    </body>
</html>