<?php


// Vérifier si une requête POST a été reçue
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once './php/config.php';
    require_once './php/bdd.php';
    require_once './php/bareme.php';
    require_once './php/calcule.php';



    $baremeManager = new BaremeManager($servername, $username, $password, $dbname);
    
    $baremeManager->connect();

    $cv = $_POST['cv'];
    $vehicule = $_POST['vehicule'];
    $km = $_POST['km'];

    $formule = $baremeManager->getFormule($vehicule, $cv, $km);


    try {
        if ($formule) {
            $resultat = Calculator::calculate($formule);
        }
    } catch (Exception $e) {
        echo "Une erreur est survenue lors du calcul : " . $e->getMessage();
    }

    $baremeManager->disconnect();

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Simulateur kilomètrique</title>
    <!-- Inclure les fichiers CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <form action="" method="post">
        <div class="form-group">
            <label for="vehicule">Type de véhicule :</label>
            <select id="vehicule" class="form-control" onchange="updateSelect2()" name="vehicule">
                <option value="voiture">Voiture</option>
                <option value="motocyclettes">Motocyclettes</option>
                <option value="cyclomoteurs">Cyclomoteurs</option>
            </select>
        </div>

        <div class="form-group">
            <label for="cv">CV :</label>
            <select id="cv" class="form-control" name="cv">
                <!-- Les options seront mises à jour par JavaScript -->
            </select>
        </div>

        <div class="form-group">
            <label for="km">Kilomètres :</label>
            <input type="number" id="km" class="form-control" name="km"/>
        </div>

        <!-- Bouton pour déclencher une action -->
        <button type="submit" class="btn btn-primary">Soumettre</button> <!-- Utilisation de type "submit" pour soumettre le formulaire -->
    </form>

    <div>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "
                    <div class='text-center'>
                        <h2>Résultat</h2>
                        <p>D\'après les calculs, vous pouvez déduire $resultat €</p>
                    </div>";
            }
        ?>
    </div>

<!-- Inclure les fichiers JavaScript de Bootstrap (jQuery requis) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Inclure le fichier JavaScript pour la mise à jour de la liste déroulante des CV -->
<script src="./js/select.js"></script>

</body>
</html>

