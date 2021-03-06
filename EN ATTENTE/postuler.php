<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Raging Ghoul</title>
        <!-- http://bootswatch.com/slate/ -->
        <?php include_once './cssFiles.php'; ?>
    </head>
    <body>
        <div id="bodybg">
            <?php include 'menu.php'; ?>
            <div id="megaBan"></div>
            <div class="container">
                <div id="bodycontent" class="jumbotron charte">
                    <h1>Inscription</h1>
                    <form class="form-horizontal" action="./candidature.php" method="POST">
                        <fieldset>
                            <legend>Partie n°1 : IFRL 'In Fucking Real Life'</legend>
                            <div class="form-group">
                                <label for="nom" class="col-lg-2 control-label">Nom</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Ton Nom">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="prenom" class="col-lg-2 control-label">Prénom</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Ton Prénom">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="age" class="col-lg-2 control-label">Age</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="age" name="age" placeholder="Ton Age">
                                </div>
                            </div>    
                            <div class="form-group">
                                <label for="situation" class="col-lg-2 control-label">Situation Professionel</label>
                                <div class="col-lg-10">
                                    <select class="form-control" id="situation" name="situation">
                                        <option>Chomage</option>
                                        <option>Etudiant</option>
                                        <option>Salarié</option>
                                        <option>Autre</option>
                                    </select>
                                </div>
                            </div>
                            <legend>Partie n°2 : IFG 'In Fucking Game'</legend>
                            <div class="form-group">
                                <label for="pseudo" class="col-lg-2 control-label">Pseudo</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Ton Pseudo">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="armu" class="col-lg-2 control-label">Lien Armurerie WOW</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="armu" name="armu" placeholder="Ton Lien Armu">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="race" class="col-lg-2 control-label">Race</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="race" name="race" placeholder="Ta Race">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="classe" class="col-lg-2 control-label">Classe</label>
                                <div class="col-lg-10">
                                    <select class="form-control" id="classe" name="classe">  
                                        <?php
                                        //Traitement pour récupérer les différentes classes
                                        include_once './connectionDb.php';

                                        $resultats = $db->query("SELECT id, name "
                                                . "FROM classes ");
                                        $resultats->setFetchMode(PDO::FETCH_OBJ);
                                        while ($resultat = $resultats->fetch()) {
                                            echo '<option value="' . $resultat->id . '">' . utf8_encode($resultat->name) . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="specialisation_p" class="col-lg-2 control-label">Spécialisation Principale</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="specialisation_p" name="specialisation_p" placeholder="Ta Spécialisation Principale">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="specialisation_s" class="col-lg-2 control-label">Spécialisation Secondaire</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="specialisation_s" name="specialisation_s" placeholder="Ta Spécialisation Secondaire">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="metier1" class="col-lg-2 control-label">Métier 1 + Niveau Métier</label>
                                <div class="col-lg-5">
                                    <select class="form-control col-lg-2" id="metier1" name="metier1">
                                        <option>Autre</option>
                                        <option>Alchimie</option>
                                        <option>Calligraphie</option>
                                        <option>Couture</option>
                                        <option>Depecage</option>
                                        <option>Enchantement</option>
                                        <option>Forge</option>
                                        <option>Herboristerie</option>
                                        <option>Ingénierie</option>
                                        <option>Joaillerie</option>
                                        <option>Minage</option>
                                        <option>Travail du Cuir</option>
                                    </select>
                                </div>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control col-lg-2" id="metier1_niv" name="metier1_niv" placeholder="Niveau Métier 1">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="metier2" class="col-lg-2 control-label">Métier 2 + Niveau Métier</label>
                                <div class="col-lg-5">
                                    <select class="form-control" id="metier2" name="metier2">
                                        <option>Autre</option>
                                        <option>Alchimie</option>
                                        <option>Calligraphie</option>
                                        <option>Couture</option>
                                        <option>Depecage</option>
                                        <option>Enchantement</option>
                                        <option>Forge</option>
                                        <option>Herboristerie</option>
                                        <option>Ingénierie</option>
                                        <option>Joaillerie</option>
                                        <option>Minage</option>
                                        <option>Travail du Cuir</option>
                                    </select>
                                </div>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" id="metier2_niv" name="metier2_niv" placeholder="Niveau Métier 2">
                                </div>
                            </div>
                            <legend>Partie n°3 : A 'Autre'</legend>
                            <div class="form-group">
                                <label for="textArea" class="col-lg-2 control-label">Depuis combien de temps tu joues ?</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" rows="3" id="textArea" name="histoire"></textarea>
                                    <span class="help-block">Tu peux raconter ta life.</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="textArea" class="col-lg-2 control-label">Ton parcours</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" rows="3" id="textArea" name="parcours"></textarea>
                                    <span class="help-block">Tes down, tes plus grandes réussites, tes passages à vide.</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="textArea" class="col-lg-2 control-label">Optimisation</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" rows="3" id="textArea" name="optimisation"></textarea>
                                    <span class="help-block">Une fois niveau 100, comment comptes-tu t'optimiser et que vas-tu privilégié ?</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="textArea" class="col-lg-2 control-label">Et nous?</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" rows="3" id="textArea" name="contribution"></textarea>
                                    <span class="help-block">Tu nous apportes quoi?</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    <button class="btn btn-default">Annuler</button>
                                    <button type="submit" class="btn btn-primary">Envoyer ma Candidature de Pro</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <?php include_once './footer.php'; ?>
        </div>
    </body>
</html>
